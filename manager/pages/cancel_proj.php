<?php
include '../includes/db.php';

$query= mysqli_query($conn2,"DELETE from projects where project_id = '".$_GET['id']."'");
if($query){
	header("location:fggs.php?page=project_list&io=1");
}
?>