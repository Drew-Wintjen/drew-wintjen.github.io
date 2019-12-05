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
                                <div class="main-nav-small"><a href="about-me.html"><b>About Me</b></a></div>
                            </li>
                            <li>
                                <div class="main-nav-small"><a href="contact.html">Contact</a></div>
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
                            <li><a href="about-me.html"><b>About Me</b></a></li>
                            <li><a href="contact.html">Contact</a></li>
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
                            <h1>About Me</h1>
                        </div>
                    </section>
                </div>
                <div class="row">
                    <section class="col-md-12">
                        <img class="image-header-left img-fluid" src="images/computer-monitors.jpg" width="1500" height="792" alt="computer-monitors">
                    </section>
                    <div class="green-text-bckg">
                        <section class="col-md-6">
                            <h2>Profile</h2>
                            <p>I'm 21 years been in love with technology for as long as I can remember. Started playing pc games in 2016. I'm as web and interactive student at Pitt State University. </p>
                        </section>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <section class="col-md-12">
                        <div class="about-text">
                            <h3><b>The M50x by audio-technica</b></h3>
                            <p>These headphones are by far the best I’ve used in my life for gaming. I’ve used everything from the high-priced Astro a50s, to the most popular HyperX cloud series. None of those are even in the ballpark of the M50x. It’s safe to say that if I had to pick one headset to have for the rest of my life, I wouldn’t regret picking the M50x’s.</p>
                        </div>
                    </section>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3><b>Get in Contact with Me</b></h3>
                        <form class="contact-form" action="contactform.php" method="post">
                            <input type="text" name="name" placeholder="Full name">
                            <input type="text" name="mail" placeholder="Your email">
                            <input type="text" name="subject" placeholder="Subject">
                            <textarea name="message" placeholder="message"> </textarea>
                            <button type="submit" name="submit">Contact Me</button> </form>
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