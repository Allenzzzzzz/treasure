<?php
	include('../includes/dbconn.php');

	session_start();

	if (isset($_POST['username']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = "SELECT * FROM petowner WHERE username = '$username' AND password = '$password'";
		$result = mysqli_query($connection,$query)or die(mysqli_error($connection));
		$rowCount = mysqli_num_rows($result);
		$row = mysqli_fetch_assoc($result);
		$name = $row['petowner_name'];

		if ($rowCount == 1)
		{
			$_SESSION['username'] = $username;
			?>
			<script type="text/javascript">
				alert("Welcome " + "<?php echo $name; ?>");
				window.location.href='petowner.php';
			</script>
			<?php
		}
		else
		{
			?>
			<script type="text/javascript">
				alert("Incorrect Username or Password");
				window.location.href='Registration.php';
			</script>
			<?php
		}
	}
?>
