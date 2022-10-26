<?php
$server="localhost";
$user="root";
$pass="";
$dbname="csrls";
$conn=mysqli_connect($server,$user,$pass,$dbname);
if(!$conn)
{
die('could not connect mysqli server:'.mysqli_error());
}
?>
