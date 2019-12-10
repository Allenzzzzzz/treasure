<?php
	include('../includes/dbconn.php');
	include('../includes/header.php');

	if (isset($_POST['btnRegVaccine']))
	{

		$pname = $_POST['oname'];
		$date = $_POST['date'];
		$against = $_POST['against'];
		$datedue = $_POST['datedue'];
		$veterinarian = $_POST['veterinarian'];
		$image = $_FILES['image']['name'];
		$target = "../assets/img/".basename($_FILES['image']['name']);

		
	
		$query = "INSERT INTO vaccines(vaccine_sticker,pet_owner,date,vaccine_against,date_due,veterinarian) VALUES('$image','$pname','$date','$against','$datedue','$veterinarian')";
		$result = mysqli_query($connection,$query)or die(mysqli_error($connection));

		if ($result and move_uploaded_file($_FILES['image']['tmp_name'], $target))
		{
			$select = "SELECT * FROM vaccines WHERE vaccine_against = '$against'";
			$resultSelect = mysqli_query($connection,$select);
			$num = mysqli_num_rows($resultSelect);
			if ($num > 0)
			{
				$row = mysqli_fetch_assoc($resultSelect);
				$id = $row['vac_id'];
				$data = $id;
				?>
				<div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%); width: 300px; height: 300px;">
				<h3 style="text-align: center;">Vaccine Registered Successfully</h3>
				<button class="btn btn-primary form-control" onclick="back();">Proceed</button>
				</div>
				<script type="text/javascript">
					function back()
					{
						window.location.href='record.php';
					}
				</script>
				<?php
			}

		}
	}
?>
