<?php
include('../includes/header.php');
include('../pages/auth.php');
 ?>
    <html>

    <body>
      
        <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav" style="height: 103;">
            <div class="container"><a class="navbar-brand" href="petowner.php" style="color: rgb(250,204,0);width: 98; margin-left:-70px; margin-top: 10px; font-size:30px;">SniffPet</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse" aria-controls="navbarResponsive"
                    aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="nav navbar-nav ml-auto text-uppercase">
                        <li class="nav-item" role="presentation"></li>
                        <li class="nav-item" role="presentation"></li>
                        <li class="nav-item" role="presentation"></li>
                        
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="petowner.php">Home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="petowner_record.php">Records</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="petowner_forum.php">Forum</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="schedulepetowner.php">Appointment</a></li>
                        <div class="dropdown">
                            <button class="dropbtn" style="text-transform:uppercase; margin-top: -.5px;">Account</button>
                            <div class="dropdown-content">
                              <a href="client_account.php">Profile</a>
                              <a href="about_petowner.php">About</a>
                              <a href="home.php">Log out</a>
                            </div>
                          </div>

                    </ul>
                </div>
            </div>
        </nav>

       

        <div class="indexForm" style="width: 1500px; height: wrap-content; position: absolute; top: 12.5%; left: 0px; background-color: white; ">
        <?php
        require_once('../includes/dbconn.php');
        $user = $_SESSION['username'];
        $query = "SELECT * FROM petowner WHERE username = '$user'";
        $result = mysqli_query($connection,$query)or die(mysqli_error($connection));

        while ($row = mysqli_fetch_assoc($result))
        {
          $owner = $row['petowner_name'];
          $address = $row['address'];
       ?>
          <div class="alert alert-success" style="width: 29%; margin-top: 60px; margin-left:7px;">
          <form action="regpet_owner.php" method="POST" autocomplete="off" enctype="multipart/form-data">
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
            <input type="hidden" name="oname" class="form-control" value="<?php echo $row['petowner_name']; ?>" required="required">
            <input type="hidden" name="oadd" class="form-control" value="<?php echo $row['address']; ?>">
            
            <label>Veterinarian</label>
            <select name="petowner" class="form-control" required="required">


            <option value="">Select Veterinarian</option>
            <?php

              $query = mysqli_query($connection,"SELECT vet_name FROM veterinarian");
              $query_display = mysqli_query($connection,"SELECT * FROM veterinarian");
              while($row=mysqli_fetch_array($query))
              {
                  echo "<option value='". $row['vet_id']."'>".$row['vet_name']
              .'</option>';
              }
              echo '</select>';
              ?>
                
            </select><br>
            <input type="submit" name="btnRegPet" class="btn btn-success form-control" value="Register Pet"><br>
          </form>
          </div>
            <div style="padding: 6px; margin-top: 30px; position: absolute; top: 5.3%; margin-left: 440px; background-color: rgb(52,58,64);">
                <div class="alert alert-success" style="width: 900px; height: 470px; background-color: white; margin-top:10px;">
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
                                <th><p align="center">Action</p></th>

                            </tr>
                        </thead>
                        <tbody>
                          <?php
                            require_once "../includes/dbconn.php";

                            $query = "SELECT * FROM pets_owner WHERE pet_owner = '$owner' ORDER BY pet_id ASC";
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
                                        <td align="center">
                                        <a href="delete_pet.php?id=<?php echo $row['pet_id']; ?>" class="btn btn-danger">Delete</a>
                                          </td>
                                          <?php
                                  }

                                  ?>
                                    </tr>
                              
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
       
    </body>

    </html>
