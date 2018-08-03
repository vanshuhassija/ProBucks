<?php
session_start();
?>
<?php
$_SESSION["user"]=$_POST["tbUnm"];
$usern=$_SESSION["user"];
?>
<?php
$servername = "localhost";
$username = "root";
$password="";
$dbname = "myweb";
$name = $_POST['tbUnm'];
$mail = $_POST['tbEmail'];
$password = $_POST['tbPwd1'];
$year = $_POST['year'];
$role=$_POST['role'];

$conn = new mysqli("localhost", "root","","myweb");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query ='insert into entries values ("'.$name.'", "'.$mail.'", "'.$password.'","'.$year.'","'.$role.'")';


if ($conn->query($query) === TRUE) {
  
header("Location:indexed.html");
   exit;
   
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}
