<?php
// connect to the database
include("db.php");
$conn = mysqli_connect($server,$user,$pass,$dbname);

$sql = "SELECT * FROM files";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "<h3 style='text-align:center;color:red;'>File too large! please compress the file and try again.</h3>";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (name, size, downloads) VALUES ('$filename', $size, 0)";
            if (mysqli_query($conn, $sql)) {
                // Reset the form submitted cookie so that the user can access upload page again
                setcookie("form_submitted", "false", time() + (86400 * 30), "/");
                $GLOBALS["upload_message"] = "<h3 style='text-align:center;color:blue;'>File uploaded successfully. It will now be reviewed by our team</h3>";
            }
        } else {
            $GLOBALS["upload_message"] = "<h1 style='text-align:center;color:red;'>Failed to upload file.</h1>";
        }
    }
}
// Downloads files
if (isset($_GET['file_id'])) {
    $Id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM files WHERE id=$Id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['Name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['Name']));
        readfile('uploads/' . $file['Name']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$Id";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}