<?php 
	include('../includes/dbconn.php');

	$id = $_REQUEST['id'];

	$query = "DELETE FROM pets_vet WHERE pet_id = '$id'";
	mysqli_query($connection,$query);

	header('location: record.php');
?>