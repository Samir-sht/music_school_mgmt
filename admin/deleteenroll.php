<?php
include("config.php");
$id=$_REQUEST['id'];
$query = "DELETE FROM enroll WHERE id=$id";
$result=mysqli_query($conn,$query);
header ("Location: enroll.php");   

?>