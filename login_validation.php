<?php 
    include("db.php");
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn=mysqli_connect($server,$user,$pass,$dbname);
              
    if($conn->connect_error)
    {
    	die("Failed to connect: ".$conn->connect_error);
    }
    else
    {

      $stmt=$conn->prepare("select * from administrator where email =?");
      $stmt->bind_param("s",$email);
      $stmt->execute();
      $stmt_result= $stmt->get_result();

      if($stmt_result->num_rows > 0)

      {
        $data = $stmt_result->fetch_assoc();
        if($data['Password'] === $password)
        {
header('Location:applicants.php');
          //echo "<h2>Login Successfully</h2>";
        }
        else{
          echo "<h2>Invalid Email or Password</h2>";
        }
        }
        else
        {
          echo "<h2>Invalid Email or Password</h2>";
        }
    }
                
    
?>