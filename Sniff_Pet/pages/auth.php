<?php
	session_start();

	if(!isset($_SESSION["username"]))
	{
		header("Location: ../pages/petowner_record.php");
		exit();
	}
?>
