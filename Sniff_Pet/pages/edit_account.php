<?php 
	include('../includes/dbconn.php');

	if (isset($_POST['editProfile'])) 
	{
		$id = $_POST['id'];
		$name = $_POST['name'];
		$address = $_POST['address'];
		$gender = $_POST['gender'];
		$phone = $_POST['phone'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = "UPDATE members SET client_name='$name',address='$address',gender='$gender',phone_number='$phone',username='$username',password='$password' WHERE member_id = '$id'";

		$result = mysqli_query($connection,$query);
		if ($result) 
		{
			?>
			<script type="text/javascript">
				alert("Information Updated");
			</script>
			<?php
			header('location: client_account.php');
		}
	}

?>