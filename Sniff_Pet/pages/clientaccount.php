<?php
include('../includes/header.php');
include('../pages/auth.php');
 ?>

<html>
<body>
	<?php
		require_once('../includes/dbconn.php'); 
		$user = $_SESSION['username'];
		$query = "SELECT * FROM members WHERE username = '$user'";
		$result = mysqli_query($connection,$query)or die(mysqli_error($connection));

		while ($row = mysqli_fetch_assoc($result)) 
		{
			$client = $row['client_name'];
			?>

<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav" style="height: 103;">
              <div class="container"><a class="navbar-brand" href="index.php" style="color: rgb(250,204,0);width: 98; margin-left:-70px; margin-top: 10px; font-size:30px;">SniffPet</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse" aria-controls="navbarResponsive"
                      aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                  <div class="collapse navbar-collapse" id="navbarResponsive">
                      <ul class="nav navbar-nav ml-auto text-uppercase">
                          <li class="nav-item" role="presentation"></li>
                          <li class="nav-item" role="presentation"></li>
                          <li class="nav-item" role="presentation"></li>
						  <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="index.php">Home</a></li>
                         
                          <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="record.php">Records</a></li>
                          <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="forum.php">Forum</a></li>
                          <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="schedule.php">Appointment</a></li>
                          <div class="dropdown">
                              <button class="dropbtn" style="text-transform:uppercase; margin-top: -.5px;">Account</button>
                              <div class="dropdown-content">
                                <a href="#">Profile</a>
                                <a href="about.php">About</a>
                                <a href="#">Log out</a>
                              </div>
                            </div>

                      </ul>
                  </div>
              </div>
          </nav>
        
			<div class="indexForm" style="width: 1125px; height: 620px; position: absolute; top: 20%; left: 5%; background-color: white;">
				<div style="padding: 5px;">
					<div class="alert alert-success" style="width: 30%; margin-top: 30px;">
						<div class="alert alert-info"><strong>Personal Information</strong></div>
						<form action="#" method="POST">
						<?php 
							require_once('../includes/dbconn.php');

							$queryInfo = "SELECT * FROM members WHERE client_name = '$client'";
							$resultInfo = mysqli_query($connection,$queryInfo)or die(mysqli_error($connection));
							while ($row2 = mysqli_fetch_assoc($resultInfo)) 
							{
								?>
								<label>Full Name</label>
								<input type="hidden" name="id" value="<?php echo $row2['member_id']; ?>">
								<input type="text" name="name" value="<?php echo $row2['client_name']; ?>" class="form-control"><br>
								<label>Address</label>
								<input type="text" name="address" value="<?php echo $row2['address']; ?>" class="form-control"><br>
								<label>Gender</label>
								<input type="text" name="gender" value="<?php echo $row2['gender']; ?>" class="form-control"><br>
								<label>Phone Number</label>
								<input type="text" maxlength="11" name="phone" value="<?php echo $row2['phone_number']; ?>" class="form-control"><br>
								<?php
							}
						?>
					</div>
					<div class="alert alert-success" style="width: 30%; position: absolute; top: 5.8%; left: 32%;">
						<div class="alert alert-info"><strong>Personal Information</strong></div>
						<?php 
							require_once('../includes/dbconn.php');

							$queryInfo = "SELECT * FROM members WHERE client_name = '$client'";
							$resultInfo = mysqli_query($connection,$queryInfo)or die(mysqli_error($connection));
							while ($row2 = mysqli_fetch_assoc($resultInfo)) 
							{
								?>
								
									<label>Username</label>
									<input type="text" name="username" value="<?php echo $row2['username']; ?>" class="form-control"><br>
									<label>Password</label>
									<input type="text" name="password" value="<?php echo $row2['password']; ?>" class="form-control"><br>
									<input type="submit" name="editProfile" value="Save Changes" class="form-control btn btn-primary"><br>
								
								<?php
							}
						?>
					</div>
					</form>
				</div>
			</div>
			<?php
		}

	?>
	<script type="text/javascript">
		function home()
		{
			window.location.href='index.php';
		}
	</script>
</body>
</html>