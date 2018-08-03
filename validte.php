<?php
session_start();
?>

<?php
$servername = "localhost";
$username = "root";

$dbname = "myweb";
$names = $_POST['name'];

$password = $_POST['password'];



$conn = new mysqli("localhost", "root","","myweb");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query ='select password from entries where name='.'"'.$names.'"';



  $result=$conn->query($query);
$row=$result->fetch_assoc();
$comp=$row["password"];

if ($comp ==$password) {
  
header("Location:check.php");

   exit;
}
   

else
{

	$message = "invalid credentials";
echo "<script type='text/javascript'>alert('$message');window.location = 'indexed.html';</script>";
//<script type='text/javascript'>window.location = 'indexed.html';</script>";
}

 

