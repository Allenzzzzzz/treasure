<?php 
include('../includes/header.php');
include('../pages/auth.php');
?>
<html>

<head>
   
</head>

<body id="page-top" onLoad="RenderDate()">
        <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav" style="height: 103;">
            <div class="container"><a class="navbar-brand" href="petowner.php" style="color: rgb(250,204,0);width: 98;">SniffPet</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse" aria-controls="navbarResponsive"
                    aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="nav navbar-nav ml-auto text-uppercase">
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
                            </ul>
                        </div>
                                </div>
                                </div>
                                </div>
                              </div>
                    </ul>
                </div>
            </div>
        </nav>
    
        <div class="container">
            <div class="intro-text">
                    <div class="guidelines">
                            <h2>Guidelines</h2>
                            <h5>Some text..</h5>

                            <!-- Trigger/Open The Modal -->
                            <button id="myBtn">See More</button>

                            <!-- The Modal -->
                            <div id="myModal" class="modal">

                            <!-- Modal content -->
                            <div class="modal-content">
                            <span class="close">&times;</span>
                            <p>Some text in the Modal..</p>
                            <script>
                                    // Get the modal
                                    var modal = document.getElementById("myModal");
                                    
                                    // Get the button that opens the modal
                                    var btn = document.getElementById("myBtn");
                                    
                                    // Get the <span> element that closes the modal
                                    var span = document.getElementsByClassName("close")[0];
                                    
                                    // When the user clicks the button, open the modal 
                                    btn.onclick = function() {
                                      modal.style.display = "block";
                                    }
                                    
                                    // When the user clicks on <span> (x), close the modal
                                    span.onclick = function() {
                                      modal.style.display = "none";
                                    }
                                    
                                    // When the user clicks anywhere outside of the modal, close it
                                    window.onclick = function(event) {
                                      if (event.target == modal) {
                                        modal.style.display = "none";
                                      }
                                    }
                                    </script>
                                    </div>
                    </div>
                </div>
                        <div class="tips">
                                <h2>Tips</h2>
                            <h5>Some text..</h5>
                                </div>

                        <div class="box">
                                <h2></h2>
                                <h5>Title description, Dec 7, 2017</h5>
                                <p>Some text..</p>
                        </div>
                        </div>
                    </div>
</div>
        </div>
    </header>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4"><span class="copyright">Copyright&nbsp;© SniffPet 2019</span></div>
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </footer>
    
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="C:/Users/Santos/Desktop/Thesis/assets/js/script.min.js?h=14fbe564ae668621587e502e401599ff"></script>
</body>

</html>