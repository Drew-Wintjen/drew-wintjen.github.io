<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Your Description Goes Here">
    <link rel="icon" href="images/esports-ready-tech-favicon.png" type="image/png" sizes="32x32">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Esports Ready Tech</title>
</head>

<body>
    <!--Begin Header-->
    <div id="header-bkgd">
        <div class="container">
            <div class="row">
                <section class="col-md-4">
                    <div id="menu-bar">
                        <div id="menu" onclick="onClickMenu()">
                            <div id="bar1" class="bar"></div>
                            <div id="bar2" class="bar"></div>
                            <div id="bar3" class="bar"></div>
                        </div>
                        <ul class="nav" id="nav">
                            <li><a href="mice.html">Mice</a></li>
                            <li><a href="keyboards.html">Keyboards</a></li>
                            <li><a href="headphones.html">Headphones</a></li>
                            <li>
                                <div class="main-nav-small"><a href="about-me.html">About Me</a></div>
                            </li>
                            <li>
                                <div class="main-nav-small"><a href="contact-page.php"><b>Contact</b></a></div>
                            </li>
                        </ul>
                    </div>
                    <div class="menu-bg" id="menu-bg"></div>
                </section>

                <section class="col-md-4">
                    <div class="logo-header">
                        <a href="index.html">
                            <img id="site-logo" class="img-fluid" src="images/esports-ready-tech.png" width="120" height="130" alt="site-logo">
                        </a>
                    </div>

                </section>

                <section class="col-md-4">

                    <div class="main-nav">
                        <ul>
                            <li><a href="about-me.html">About Me</a></li>
                            <li><a href="contact-page.php"><b>Contact</b></a></li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!--End Header-->


    <!--Begin Content-->
    <div class="green-background">
        <div class="white-background">
            <div class="container">
                <div class="row">
                    <div class="page1-spacer">
                        <section class="col-md-1">
                        </section>
                    </div>
                    <section class="col-md-9">
                        <div class="page1-header">
                            <h1>Contact Me</h1>
                        </div>
                    </section>
                </div>
                <div class="row">
                    <section class="col-md-12">
                        <img class="image-header-left img-fluid" src="images/960-GPU.jpg" width="1500" height="792" alt="graphic card">
                    </section>
                    <div class="green-text-bckg">
                        <section class="col-md-6">
                            <h2>Contact</h2>
                            <p>If you have any questions feel free to ask, or if you want something specific just send me an email and I'll see what I can do!</p>
                        </section>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="contact-title">
                            <h3><b>Get in Contact with Me</b></h3>
                        </div>
                        <div class="contact-form">
                            <form id="contact-form" action="contactform.php" method="post">
                                <input class="form-control" type="text" name="name" placeholder="Full name"><br>
                                <input class="form-control" type="text" name="mail" placeholder="Your email"><br>
                                <input class="form-control" type="text" name="subject" placeholder="Subject"><br>
                                <textarea class="form-control" name="message" placeholder="Message"></textarea><br>
                                <button class="btn btn-primary" type="submit" name="submit">Contact Me</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!--End Content-->

    <!--Begin Footer-->
    <div id="footer-bkgd">
        <div class="container">
            <div class="row">
                <section class="col-md-4">
                    <a href="index.html">
                        <img id="site-logo-footer" class="img-fluid" src="images/esports-ready-tech.png" width="130" height="100" alt="site-logo">
                    </a>
                </section>

                <section class="col-md-4">
                    <div class="social-media-icons">
                        <a href="https://www.reddit.com/" target="_blank"><i class="fab fa-reddit" style="font-size: 50px;color: black"></i></a>
                        <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube" style="font-size: 50px;color: black"></i></a>
                        <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter" style="font-size: 50px;color: black"></i></a>
                    </div>
                </section>
                <section class="col-md-4">
                    <div class="footer-credits">
                        <p>Designed and Developed
                            <br> by Drew Wintjen 2019</p>
                    </div>
                </section>
            </div>
        </div>
    </div>


    <!--End Footer-->

    <!-- JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS, then Your Own Script -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>