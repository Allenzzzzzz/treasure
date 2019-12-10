<?php
include('../includes/header.php');
include('../pages/auth.php');
 ?>
 <html>

    <body>

      <?php
      require_once('../includes/dbconn.php');
      $user = $_SESSION['username'];
      $query = "SELECT * FROM veterinarian WHERE username = '$user'";
      $result = mysqli_query($connection,$query)or die(mysqli_error($connection));

      while ($row = mysqli_fetch_assoc($result))
      {
        $client = $row['vet_name'];
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
                        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="petvet_record.php">Records</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="forum.php">Forum</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="schedule.php">Appointment</a></li>
                        <div class="dropdown">
                            <button class="dropbtn" style="text-transform:uppercase; margin-top: -.5px;">Account</button>
                            <div class="dropdown-content">
                              <a href="client_account.php">Profile</a>
                              <a href="about.php">About</a>
                              <a href="home.php">Log out</a>
                            </div>
                          </div>

                    </ul>
                </div>
            </div>
        </nav>
        <div class="indexForm" style="width: 2000px; height: maxlength; position: absolute; top: 15.5%; left: 2px; background-color: white;">
            <div style="padding: 5px; margin-top: 30px;">
                <div class="alert alert-success" style="width: 29%; background-color: skyblue;">
                    <div class="alert alert-info" style="background-color: #31296a; color: white;"><strong>Request Appointment...</strong></div>
                    <form autocomplete="off" action="client_req_appointment_extension.php" method="POST">
                        <input type="hidden" name="client" value="<?php echo $client; ?>">
                        <label>Request Date</label>
                        <input type="date" id="date" name="date" placeholder="Enter Requested Date" class="form-control" required="required"><br>
                        <label>Pet Name</label>
                        <select name="pname" class="form-control" required="required">
                            <option value="">Pet Name</option>
                            <?php

                                          $query = mysqli_query($connection,"SELECT pet_name FROM pets_owner");
                                          $query_display = mysqli_query($connection,"SELECT * FROM pets_owner");
                                          while($row=mysqli_fetch_array($query))
                                          {
                                              echo "<option value='". $row['pet_id']."'>".$row['pet_name']
                                          .'</option>';
                                          }
                                          echo '</select>';
                                          ?>

                        </select><br>
                        <label>Services</label>

                        <select class="form-control" required="required" name="service">
                          <?php
                            require_once('../includes/dbconn.php');

                            $queryService = "SELECT * FROM services WHERE service_name = service_name ORDER BY service_id ASC";
                            $resultService = mysqli_query($connection,$queryService)or die(mysqli_error($connection));

                            while ($row3 = mysqli_fetch_assoc($resultService))
                            {
                              ?>
                              <option value="<?php echo $row3['service_name']; ?>"><?php echo $row3['service_name']; ?></option>
                              <?php
                            }
                          ?>

                        </select><br>
                        <label>Person In-Charge</label>

                        <select name="inCharge" class="form-control" required="required">


                            <option value="">Select Pet Owner</option>
                            <?php

                                          $query = mysqli_query($connection,"SELECT petowner_name FROM petowner");
                                          $query_display = mysqli_query($connection,"SELECT * FROM petowner");
                                          while($row=mysqli_fetch_array($query))
                                          {
                                              echo "<option value='". $row['petowner_id']."'>".$row['petowner_name']
                                          .'</option>';
                                          }
                                          echo '</select>';
                                          ?>
                                            
                        </select><br>

                        <label>Address</label>
                        <select name="pname" class="form-control" required="required">
                            <option value="">Address</option>
                            <?php

                                          $query = mysqli_query($connection,"SELECT address FROM petowner");
                                          $query_display = mysqli_query($connection,"SELECT * FROM petowner");
                                          while($row=mysqli_fetch_array($query))
                                          {
                                              echo "<option value='". $row['pet_id']."'>".$row['address']
                                          .'</option>';
                                          }
                                          echo '</select>';
                                          ?>

                        </select><br>
                        <input type="submit" name="btnProceed" class="btn btn-primary form-control" value="Proceed" style="background-color: #31296a;">
                    </form>
                </div>
                <div style="padding: 5px; margin-top: -27px; position: absolute; top: 8.4%; left: 30%;">
                <div class="alert alert-success" style="width: 870px; height: 625px; background-color: skyblue;">
                    <div class="alert alert-info" style="background-color: #31296a; color: white;"><strong>List of Appointment Schedule for Monday to Sunday</strong></div>
                    <label class="form-control">9:00am - 10:00am</label>
                    <label class="form-control">10:00am - 11:00am</label>
                    <label class="form-control">11:00am - 12:00nn</label>
                    <label class="form-control">1:00pm - 2:00pm</label>
                    <label class="form-control">2:00am - 3:00pm</label>
                    <label class="form-control">3:00am - 4:00pm</label>
                </div>
            </div>
            </div>
        </div>

        <?php
		}

	?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="../Sniff_Pet/js/script.min.js?h=14fbe564ae668621587e502e401599ff"></script>
    </body>

    </html>
