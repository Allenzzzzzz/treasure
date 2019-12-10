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
          $owner = $row['vet_name'];
          $address = $row['address'];
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
                              <a href="client_account.php">Profile</a>
                              <a href="about.php">About</a>
                              <a href="home.php">Log out</a>
                            </div>
                          </div>

                    </ul>
                </div>
            </div>
        </nav>



        <div class="indexForm" style="width: 1500px; height: wrap-content; position: absolute; top: 12.5%; left: 0px; background-color: white; ">
          <div class="alert alert-success" style="width: 400px; margin-top: 60px; margin-left:30px;">
          <form action="reg_pet.php" method="POST" autocomplete="off" enctype="multipart/form-data">
            <label>Choose Image</label>
            <input type="file" name="image" class="form-control" required="required">
            <label>Pet Name</label>
            <input type="text" name="pname" class="form-control" placeholder="Enter Pet Name" required="required">
            <label>Pet Type</label>
            <input type="text" name="ptype" class="form-control" placeholder="Enter Pet Type" required="required">
            <label>Pet Breed</label>
            <input type="text" name="pbreed" class="form-control" placeholder="Enter Pet Breed" required="required">
            <label>Gender</label>
            <select class="form-control" required="required" name="gender">
              <option value=""></option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
            <label>Pet Age</label>
            <input type="text" name="age" class="form-control" placeholder="Enter Age" required="required">
           
            <label>Pet Owner</label>
            <select name="inCharge" class="form-control" required="required">
                <option value="">Select Veterinarian</option>
                <?php
                require_once('../includes/dbconn.php');
                $queryPet = "SELECT * FROM veterinarian WHERE vet_name = vet_name";
                $resultPet = mysqli_query($connection,$queryPet)or die(mysqli_error($connection));

                if ($row2 = mysqli_fetch_assoc($resultPet))
                {
                  ?>
                  <option value="<?php echo $row2['vet_name']; ?>"><?php echo $row2['vet_name']; ?></option>
                 
            </select><br>
            <input type="hidden" name="oname" class="form-control" value="<?php echo $row['vet_name']; ?>" required="required">
            <input type="hidden" name="oadd" class="form-control" value="<?php echo $row['address']; ?>">
            <input type="submit" name="btnRegPet" class="btn btn-success form-control" value="Register Pet"><br>
          </form>
        </div>
            <div style="padding: 6px; margin-top: 30px; position: absolute; top: 4.8%; margin-left: 435px; background-color: rgb(52,58,64);">
                <div class="alert alert-success" style="width: 900px; height: 537px; background-color: white; margin-top:10px;">
                    <div class="alert alert-info" style="color: black;"><strong>List of Owned Pet:</strong></div>
                    
                    <table class="table table-bordered table-hover table-condensed" id="myTable" style="margin-top:15px; border:none;">
                        <thead>
                            <tr class="info">
                                <th><p align="center">ID</p></th>
                                <th><p align="center">Pet Name</p></th>
                                <th><p align="center">Pet Type</p></th>
                                <th><p align="center">Pet Breed</p></th>
                                <th><p align="center">Pet Age</p></th>
                                <th><p align="center">Veterinarian</p></th>
                                <th><p align="center">Pet Owner</p></th>
                               
                                <th><p align="center">Action</p></th>

                            </tr>
                            
                        </thead>
                        <tbody>
                        <?php
                            require_once "../includes/dbconn.php";

                            $query = "SELECT * FROM pets_vets WHERE veterinarian = '$owner' ORDER BY pet_id ASC";
                            $result = mysqli_query($connection,$query)or die(mysqli_error($connection));
                            while ($row = mysqli_fetch_assoc($result))
                            {
                              ?>
                                    <tr>
                                        <td align="center" style="padding-top: 14px; color: #000; font-weight: bold"><?php echo $row['pet_id']; ?></td>
                                        <td align="center" style="padding-top: 14px; color: #000; font-weight: bold"><?php echo $row['pet_name']; ?></td>
                                        <td align="center" style="padding-top: 14px; color: #000; font-weight: bold"><?php echo $row['pet_type']; ?></td>
                                        <td align="center" style="padding-top: 14px; color: #000; font-weight: bold"><?php echo $row['breed']; ?></td>
                                        <td align="center" style="padding-top: 14px; color: #000; font-weight: bold"><?php echo $row['age']; ?></td>
                                        <td align="center" style="padding-top: 14px; color: #000; font-weight: bold"><?php echo $row['veterinarian']; ?></td>
                                        <td align="center" style="padding-top: 14px; color: #000; font-weight: bold"><?php echo $row['pet_owner']; ?></td>
                                        
                                        <td align="center">
                                        <a href="delete_pet.php?id=<?php echo $row['pet_id']; ?>" class="btn btn-danger">Delete</a>
                                          </td>
                                          <?php
                                  }

                                  ?>

                                    </tr>
                                    
                                    <?php
                                  }

                                  ?>

                                   
                        </tbody>

                        </tr>
                    </table>
                </div>
            </div>
            <?php
        }
        ?>
        </div>
       
        </div>
          
        <div class="alert alert-success" style="width: 400px; margin-top:770px; margin-left:30px;">
        <?php
        require_once('../includes/dbconn.php');
        $user = $_SESSION['username'];
        $query = "SELECT * FROM veterinarian WHERE username = '$user'";
        $result = mysqli_query($connection,$query)or die(mysqli_error($connection));

        while ($row = mysqli_fetch_assoc($result))
        {
          $owner = $row['vet_name'];
          $address = $row['address'];
      ?>
          <form action="vaccine_reg.php" method="POST" autocomplete="off" enctype="multipart/form-data">
          <label>Upload Sticker for Vaccine</label>
            <input type="file" name="image" class="form-control" required="required">
            <label>Date</label>
            <input type="date" name="date" class="form-control" placeholder="Enter Date" required="required">
            <label>Vaccine Against</label>
            <input type="text" name="against" class="form-control" placeholder="Enter Vaccine Against" required="required">
            <label>Date Due</label>
            <input type="date" name="datedue" class="form-control" placeholder="Enter Date Due" required="required">
            <label>Veterinarian</label>
            <input type="text" name="veterinarian" class="form-control" placeholder="Enter Veterinarian" required="required"><br>
            <input type="hidden" name="oname" class="form-control" value="<?php echo $row['client_name']; ?>" required="required">
            <input type="hidden" name="oadd" class="form-control" value="<?php echo $row['address']; ?>">
            <input type="submit" name="btnRegVaccine" class="btn btn-success form-control" value="Register Vaccine"><br>
          </form>
        </div>
          <div style="padding: 5px; margin-top: 500px; position: absolute; top: 43.3%; margin-left: 435px; background-color: rgb(52,58,64);">
                <div class="alert alert-success" style="width: 900px; height: 481.5px; background-color: white;">
                    <div class="alert alert-info" style="color: black;"><strong>List of Vaccination of Pet:</strong></div>
                    
                    <table class="table table-bordered table-hover table-condensed" id="myTable" style="margin-top:15px; border:none;">
                        <thead>
                            <tr class="info">
                                <th><p align="center">Date</p></th>
                                <th><p align="center">Vaccine Against</p></th>
                                <th><p align="center">Date Due</p></th>
                                <th><p align="center">Veterinarian</p></th>
                                <th><p align="center">Action</p></th>

                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            require_once "../includes/dbconn.php";

                            $query = "SELECT * FROM vaccines WHERE pet_owner = '$owner' ORDER BY pet_id ASC";
                            $result = mysqli_query($connection,$query)or die(mysqli_error($connection));
                            while ($row = mysqli_fetch_assoc($result))
                            {
                              ?>
                                    <tr>
                                        <td align="center" style="padding-top: 14px; color: #000; font-weight: bold"><?php echo $row['date']; ?></td>
                                        <td align="center" style="padding-top: 14px; color: #000; font-weight: bold"><?php echo $row['vaccine_against']; ?></td>
                                        <td align="center" style="padding-top: 14px; color: #000; font-weight: bold"><?php echo $row['date_due']; ?></td>
                                        <td align="center" style="padding-top: 14px; color: #000; font-weight: bold"><?php echo $row['veterinarian']; ?></td>
                                        <td align="center">
                                        <a href="delete_vaccine.php?id=<?php echo $row['vac_id']; ?>" class="btn btn-danger">Delete</a>
                                          </td>
                                          <?php
                            }
                            ?>
                                        </td>
                                    </tr>
                               
                        </tbody>
                     </table>
          </div>

          <?php
      		}

      	?> 


    </body>

    </html>
