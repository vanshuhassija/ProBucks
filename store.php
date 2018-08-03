<?php
// Start the session
session_start();
?>
<?php
// Set session variables

$_SESSION["user"] =$_POST['username']

?>


 

 

<?php

$con = mysql_connect("localhost","root","usbw");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("demo", $con);

 

$sql="INSERT INTO upload (user, password)

VALUES

('".$_POST['username']."','".$_POST['pass']."');";

 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }



 
header('Location: index.php');
mysql_close($con)

?>

</body>

</html>