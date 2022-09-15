<?php
$server="localhost";
$user="root";
$pass="1";
$dbname="csrls";
$conn=mysqli_connect($server,$user,$pass,$dbname);
if($conn)
{
echo ""."<br>";
}
else
{
echo mysqli_connect_error();
}
?>
