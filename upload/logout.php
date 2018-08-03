<?php
$message = "Are you sure you want to quit?";
echo "<script type='text/javascript'>var r=confirm('$message');if(r==true){window.location = 'thanku.html';}</script>";
session_destroy();
?>