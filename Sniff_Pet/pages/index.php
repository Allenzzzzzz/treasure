<?php
    include('../includes/header.php');
?>

<html>


<body id="page-top" onLoad="RenderDate()">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav" style="height: 103;">
        <div class="container"><a class="navbar-brand" href="index.php" style="color: rgb(250,204,0);width: 98;">SniffPet</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">

                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="petvet_record.php">Records</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="forum.php">Forum</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="Schedule.php">Appointment</a></li>
                    <div class="dropdown">
                            <button class="dropbtn" style="text-transform:uppercase; margin-top: -.5px;">Account</button>
                            <div class="dropdown-content">
                              <a href="client_account.php">Profile</a>
                              <a href="about.php">About</a>
                              <a href="home.php">Log out</a>
                            </div>
</div>
                          </div>
                </ul>
            </div>
        </div>
    </nav>

    <div class="wrapper">
        <div class="calendar" style="margin-top:150px;">
            <div class="month">
                <div class="prev" onclick="moveDate('prev')">
                    <span>&#10094</span>
                </div>
                <div>
                    <h2 id="month">November</h2>
                    <p id="date_str"></p>
                </div>
                <div class="next" onclick="moveDate('next')">
                    <span>&#10095</span>
                </div>
            </div>

            <div class="weekends">
                <div>Sun</div>
                <div>Mon</div>
                <div>Tue</div>
                <div>Wed</div>
                <div>Thu</div>
                <div>Fri</div>
                <div>Sat</div>
            </div>

            <div class="days">

            </div>
        </div>

    </div>
    </div>


    <script src="../assets/js/schedule.js"></script>
</body>

</html>
