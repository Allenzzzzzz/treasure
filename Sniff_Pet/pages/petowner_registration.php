<?php
	include('../includes/dbconn.php');
	if (isset($_POST['btnReg']))
	{
		$pass1 = $_POST['password'];
		$pass2 = $_POST['password2'];

		if ($pass1 == $pass2)
		{
			$username = $_POST['username'];
			$name = $_POST['fname']." ".$_POST['lname'];
			$address = $_POST['address'];
			$gender = $_POST['gender'];
			$contact = $_POST['contact'];
			$designation = $_POST['designation'];


			$query = "INSERT INTO petowner(petowner_name, address, gender, phone_number, designation, username, password)  VALUES('$name','$address','$gender','$contact','$designation','$username','$pass1')";
			$result = mysqli_query($connection,$query)or die(mysqli_error($connection));

			if ($result)
			{
				?>
				<script type="text/javascript">
					alert("You are now a member of SniffPet " + "<?php echo $name; ?>");
					window.location.href='petowner.php';
				</script>
				<?php
			}
			else
			{
				?>
				<script type="text/javascript">
					alert("Failed to finish registration.");
					window.location.href='PetownerReg.php';
				</script>
				<?php
			}
		}
		else
		{
			?>
			<script type="text/javascript">
				alert("Password don't match.");
				window.location.href='registration.php';
			</script>
			<?php
		}
	}

?>
