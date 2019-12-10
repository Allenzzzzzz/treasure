<?php
	include('../includes/dbconn.php');
	include('../includes/header.php');

	if (isset($_POST['btnRegVaccine']))
	{
		$image = $_FILES['image']['name'];
        $target = "../assets/img/".basename($_FILES['image']['name']);
		$pet_owner = $_POST['inCharge'];
		$pet_name = $_POST['petname'];
		$date = $_POST['date'];
		$against = $_POST['against'];
		$datedue = $_POST['date_due'];
		$vetname = $_POST['oname'];
       
	
		$query = "INSERT INTO vaccines(vaccine_sticker, pet_owner, pet_name, date, vaccine_against, date_due, veterinarian) VALUES('$image','$pet_owner','$pet_name','$date','$against','$datedue','$vetname')";
		$result = mysqli_query($connection,$query)or die(mysqli_error($connection));

		
		if ($result and move_uploaded_file($_FILES['image']['tmp_name'], $target))
		{
			$qeuryy = "SELECT * FROM vaccines WHERE veterinarian = '$vetname'";
			$selecta = mysqli_query($connection,$qeuryy)or die(mysqli_error($connection));
			while ($row = mysqli_fetch_assoc($selecta))
			{		
	
				/* $result = mysqli_query($connection,$query)or die(mysqli_error($connection));

        while ($row = mysqli_fetch_assoc($result))*/
     
			$resultSelect = mysqli_query($connection,$qeuryy);
			$num = mysqli_num_rows($selecta);
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
						window.location.href='petvet_record.php';
					}
				</script>
				<?php
			}

		}
	}
	
}
?>
