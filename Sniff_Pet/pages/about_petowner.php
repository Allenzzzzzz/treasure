<?php
include('../includes/header.php');
 ?>

<html>



<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav" style="height: 103;">
        <div class="container"><a class="navbar-brand" href="index.php" style="color: rgb(250,204,0);width: 98;">SniffPet</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse" aria-controls="navbarResponsive"
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
                                      <a href="#">Profile</a>
                                      <a href="about_petowner.php">About</a>
                                      <a href="home.php">Log out</a>
                                    </div>
                                  </div>
                        </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image: url(&quot;../assets/img/Untitled-2.png?h=6375597dfdeadabcd779ef5b6ced9a86&quot;);background-position: top;background-size: cover;margin-top: 000px;/*top: 50px;*/">
        <div class="container"></div>
    </header>
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase">About</h2>
                    <h3 class="text-muted section-subheading">SniffPet</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-group timeline">
                        <li class="list-group-item">
                            <div class="timeline-image" style="background-image: url(&quot../assets/img/Logo.png?h=6cd99456450a4b239082cc9459386ec3&quot;);background-color: rgb(255,255,255);"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2019--2020</h4>
                                    <h4 class="subheading">What is SniffPet?</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"></p>
                                </div>
                                <div class="timeline-body"></div>
                                <div class="timeline-body">
                                    <p class="text-muted" style="/*border: 1.5px solid black;*/text-align: justify;">SniffPet is a system for Pet Owner's and Veterinarians to communicate with each other and to keep track on their pet's health. For us developers this system is our heart and soul to complete our bachelors degree.</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item timeline-inverted">
                            <div class="timeline-image" style="background-color: rgb(255,255,255);background-image: url(&quot;../assets/img/Logo.png?h=6cd99456450a4b239082cc9459386ec3&quot;);"></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading">SniffPet</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted" style="/*text-align: center;*//*border: 1.5px solid black;*/text-align: justify;width: 330px;">SniffPet is a combination of Sniff and Pet. We had a really hard time thinking for our systems title. We all know that Pet is a companion and Sniff is what a pet does when they are curious about a thing. SniffPet is
                                        for pet owners and vets so that is why the sniff comes in first because for us owners and vets we are curious &nbsp;to know things that can help us treating our pets and to keep track of their health.</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item timeline-inverted">
                            <div class="timeline-image" style="background-color: rgb(255,255,255);">
                                <h4 style="color: #9d9cbc;text-shadow: 2px 2px black;">Be Part<br>&nbsp;Of Our<br>&nbsp;Story!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="team" class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-4" style="background-position: center;background-size: cover;background-repeat: no-repeat;">
                    <div class="team-member"></div>
                    <div class="team-member" style="margin-top: -55px;"><img class="rounded-circle mx-auto" style="background-image: url(&quot;../assets/img/72886948_2604044079680672_7808332285945577472_o.jpg?h=9c94e4c2fa699486482f3720a87fc33e&quot;);background-position: center;background-size: cover;width: 225px;height: 225px;">
                        <h4>Allen Santos</h4>
                        <p class="text-muted">Lead Designer and Support Developer</p>



                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member"><img class="rounded-circle mx-auto" style="background-image: url(&quot;../assets/img/56505431_2448140558531400_7259606396625223680_n.jpg?h=791ac060e1fa70e616b226552e291de2&quot;);width: 225px;height: 225px;background-position: center;background-size: cover;">
                        <h4>Jeremy Huxley Fabian</h4>
                        <p class="text-muted">Lead Writer and Support Designer</p>


                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member"><img class="rounded-circle mx-auto" style="background-image: url(&quot;../assets/img/40481674_2333858993297185_8168707366661914624_n.jpg?h=2ee38526d5a9078523063a5cf7865d69&quot;);height: 225px;width: 225px;background-position: center;background-size: cover;">
                        <h4>Sam Gabriel De Mesa</h4>
                        <p class="text-muted">Lead Developer</p>

                 </div>
                 </div>

                 <div class="col-sm-4">
                    <div class="team-member"><img class="rounded-circle mx-auto" style="background-image: url(&quot;../assets/img/juna.jpg&quot;);height: 225px;width: 225px;background-position: center;background-size: cover;">
                         <h4>Arjuna Tria</h4>
                        <p class="text-muted">Lead Developer</p>
                    </div>
                </div>


                </div>
            </div>
    </section>

    <section id="contact" style="background-image:url('../assets/img/map-image.png?h=dde716a63e31eca254a82a274d4f56c0');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Contact Us</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="contactForm" name="contactForm" novalidate="novalidate">
                        <div class="form-row">
                            <div class="col col-md-6">
                                <div class="form-group"><input class="form-control" type="text" id="name" placeholder="Your Name *" required=""><small class="form-text text-danger flex-grow-1 help-block lead"></small></div>
                                <div class="form-group"><input class="form-control" type="email" id="email" placeholder="Your Email *" required=""><small class="form-text text-danger help-block lead"></small></div>
                                <div class="form-group"><input class="form-control" type="tel" placeholder="Your Phone *" required=""><small class="form-text text-danger help-block lead"></small></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><textarea class="form-control" id="message" placeholder="Your Message *" required=""></textarea><small class="form-text text-danger help-block lead"></small></div>
                            </div>
                            <div class="col">
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div><button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit" style="background-color: #31296a;">Send Message</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="foot" style="height: 25px;">
                <div class="col-md-4"><span class="copyright" style="font-size: 17px;">Copyright&nbsp;© SniffPet 2019</span></div>

            </div>
        </div>
    </footer>


</body>

</html>
