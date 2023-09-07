<?php
include '../includes/db.php';

$query= mysqli_query($conn2,"DELETE from employee where eid = '".$_GET['id']."'");
if($query){
	header("location:index.php?page=employee&io=1");
}
?>