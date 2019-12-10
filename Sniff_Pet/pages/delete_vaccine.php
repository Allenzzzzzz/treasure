<?php 
	include('../includes/dbconn.php');

	$id = $_REQUEST['id'];

	$query = "DELETE FROM vaccines WHERE vac_id = '$id'";
	mysqli_query($connection,$query);

	header('location: record.php');
?>