<?php
session_start();
?>

<?php
$servername = "localhost";
$username = "root";
$password="";
$dbname = "myweb";



$conn = new mysqli("localhost", "root","","myweb");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query ='select role from entries where name='.'"'.$_SESSION['user'].'"';
echo $query;
$result=$conn->query($query);
$row=$result->fetch_assoc();
$comp=$row["role"];

if ($comp =='1') {
  
header("Location:upload/index.php");
   exit;
   
} 
else if($comp =='2')
{
header("Location:upload/faculty.php");
}
