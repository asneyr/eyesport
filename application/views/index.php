<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>EyeSports</title>
    <!-- Css Files -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/color.css" rel="stylesheet">
    <link href="assets/css/dl-menu.css" rel="stylesheet">
    <link href="assets/css/flexslider.css" rel="stylesheet">
    <link href="assets/css/prettyphoto.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/logo-1.png">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!--// Main Wrapper \\-->
    <div class="ec-main-wrapper">
        <div class="ec-loading-section"><div class="ball-scale-multiple"><div></div><div></div><div></div></div></div>
        <!--// Main Header \\-->
        <header id="ec-header">
            <!--// TopSection \\-->
            <div class="ec-top-strip">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="ec-strip-info">
                                <li><i class="fa fa-phone"></i> +6281617373212</li>
                                <li><i class="fa fa-map-marker"></i> Ciputat, Tanggerang Selatan, Indonesia</li>
                            </ul>
                            <div class="ec-login-section">
                                <a href="#" class="ec-login-section-btn ec-bgcolor" data-toggle="modal" data-target="#ModalLogin"><i class="fa fa-user"></i> Login & Rigester</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// TopSection \\-->
            <!--// Main Header \\-->
            <div class="ec-main-navsection">
                <div class="container">
                    <a href="index.php" class="ec-logo"><img src="assets/images/logo-1.png" alt=""></a>
                    <div class="ec-right-section">
                        <nav class="ec-navigation">
                            <ul>
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="about-us.html">about us</a></li>
                                <li><a href="#">Fixtures</a>
                                    <ul class="as-dropdown">
                                        <li><a href="fixture-list.html">fixture list View</a></li>
                                        <li><a href="all-fixture.html">fixture All Matches</a></li>
                                        <li><a href="fixture-detail.html">fixture Detail</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Gallery</a>
                                    <ul class="as-dropdown">
                                        <li><a href="gallery-simple.html">Simple 4Column</a></li>
                                        <li><a href="gallery-simple-3column.html">Simple 3Column</a></li>
                                        <li><a href="gallery-simple-2column.html">Simple 2Column</a></li>
                                        <li><a href="gallery-modren.html">modren 4Column</a></li>
                                        <li><a href="gallery-modren-3column.html">modren 3Column</a></li>
                                    </ul>
                                </li>
                        <!--// Responsive Menu //-->
                        <div id="as-menu" class="as-menuwrapper">
                            <button class="as-trigger">Open Menu</button>
                            <ul class="as-menu">
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="about-us.html">about</a></li>
                                <li><a href="service.html">service</a></li>
                                <li><a href="#">Blog</a>
                                    <ul class="as-submenu">
                                        <li><a href="blog-grid.html">blog Grid Simple</a></li>
                                        <li><a href="blog-grid-modren.html">blog Grid Modren</a></li>
                                        <li><a href="blog-medium.html">blog Medium</a></li>
                                        <li><a href="blog-detail.html">blog detail</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Gallery</a>
                                    <ul class="as-submenu">
                                        <li><a href="gallery-static.html">Simple Gallery</a></li>
                                        <li><a href="gallery-static-twcol.html">Simple Gallery 2Column</a></li>
                                        <li><a href="gallery-static-thcol.html">Simple Gallery 3Column</a></li>
                                        <li><a href="gallery-video.html">Video Gallery</a></li>
                                        <li><a href="gallery-video-thcol.html">Video Gallery 3Column</a></li>
                                        <li><a href="gallery-video-frcol.html">Video Gallery 4Column</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Shop</a>
                                    <ul class="as-submenu">
                                        <li><a href="shop-list.html">Shop List</a></li>
                                        <li><a href="plyer-list-left-sbar.html">Shop List W/left/sidebar</a></li>
                                        <li><a href="shop-list-wsidebar.html">Shop List W/right/sidebar</a></li>
                                        <li><a href="shop-list-w-b-sidebar">Shop List W/both/sidebar</a></li>
                                        <li><a href="plyer-list-nosidebar.html">Shop List Wout/sidebar</a></li>
                                        <li><a href="shop-detail.html">shop detail</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">shortcode</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="as-submenu">
                                        <li><a href="price-plane.html">Price Plans</a></li>
                                        <li><a href="booking.html">booking Form</a></li>
                                        <li><a href="#">Team</a>
                                            <ul class="as-submenu">
                                                <li><a href="team-grid.html">team</a></li>
                                                <li><a href="team-detail.html">team detail</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">shortcode</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                        <li><a href="undercunstruction.html">UnderConstruction</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact-us.html">contact us</a></li>
                            </ul>
                        </div>
                        <!--// Responsive Menu //-->
                        <ul class="ec-user-section">
                            <li><a href="#" class="ec-search-popup-btn"><i class="fa fa-search"></i></a>
                                <form class="ec-search-popup">
                                    <input type="text" value="Search Key Word" onblur="if(this.value == '') { this.value ='Search Key Word'; }" onfocus="if(this.value =='Search Key Word') { this.value = ''; }">
                                    <input type="submit" value="">
                                    <i class="fa fa-search"></i>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--// Main Header \\-->
        </header>
        <!--// Main Header \\-->
        <!--// Main Banner \\-->
        <div class="ec-mainbanner">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <img src="assets/extra-images/banner_1.jpg" alt="">
                        <span class="ec-transparent-color"></span>
                        <div class="ec-caption">
                            <div class="container">
                                <div class="caption-inner-wrap">
                                    <div class="clearfix"></div>
                                    <h1>Welcome to Eyesports</h1>
                                    <p>"Your TALENT determines what you can do. Your MOTIVATION determines how much you are willing to do. Your ATTITUDE determines how well you do it".--Lou Holtz.</p>
                                </div>
                                <div class="ec-caption-image"> <img src="assets/extra-images/banner-static.png" alt=""> </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="assets/extra-images/banner_2.jpg" alt="">
                        <span class="ec-transparent-color"></span>
                        <div class="ec-caption">
                            <div class="container">
                                <div class="caption-inner-wrap">
                                    <div class="clearfix"></div>
                                    <h1>Welcome to eyesports</h1>
                                    <p>"Today, you've got a DECISION to make. You're gonna get BETTER or you're gonna get worse, but you're not gonna stay the same. Which will it BE?"--Joe Paterno.</p>
                                </div>
                                <div class="ec-caption-image"> <img src="assets/extra-images/banner-static.png" alt=""> </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!--// Main Banner \\-->
        <!--// Main Content \\-->
        <div class="ec-main-content">
            <!--// Main Section \\-->
            <div class="ec-main-section ec-newsticker-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ec-newsticker">
                                <span class="ec-color"><small>Inspirations</small></span>
                                <ul id="ec-news">
                                    <li><a href="#">"A CHAMPION is simply someone who did NOT give up when they wanted to."--Tom Landry, --Dallas Cowboys</a></li>
                                    <li><a href="#"> "If it doesn't matter who WINS or loses, then why do they keep SCORE."--Vince Lombardi </a></li>
                                    <li><a href="#">"WINNING is not everything--but making the EFFORT to win is"--Vince Lombardi</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->
            <!--// Main Section \\-->
            <div class="ec-main-section ec-promofull">
                <div class="container">
                    <div class="row">
                        <!--// Match Fixture \\-->
                        <div class="col-md-6">
                            <div class="ec-fancy-title">
                                <h2>Match Fixture</h2>
                            </div>
                            <div class="ec-fixture-list">
                                <ul>
                                    <li>
                                        <div class="ec-cell"><span>03 Sep. Friday</span></div>
                                        <div class="ec-cell">
                                            <a href="#" class="ec-fixture-flag"><img src="assets/extra-images/fixer-flag-1.png" alt=""> Arsenal</a>
                                            <span class="ec-fixture-vs"><small>vs</small></span>
                                            <a href="#" class="ec-fixture-flag ec-next-flag"><img src="assets/extra-images/fixer-flag-2.png" alt=""> Premier</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ec-cell"><span>03 Sep. Friday</span></div>
                                        <div class="ec-cell">
                                            <a href="#" class="ec-fixture-flag"><img src="assets/extra-images/fixer-flag-3.png" alt=""> Liver Pool</a>
                                            <span class="ec-fixture-vs"><small>vs</small></span>
                                            <a href="#" class="ec-fixture-flag ec-next-flag"><img src="assets/extra-images/fixer-flag-4.png" alt=""> South United</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ec-cell"><span>03 Sep. Sunday</span></div>
                                        <div class="ec-cell">
                                            <a href="#" class="ec-fixture-flag"><img src="assets/extra-images/fixer-flag-5.png" alt=""> 1.FCK</a>
                                            <span class="ec-fixture-vs"><small>vs</small></span>
                                            <a href="#" class="ec-fixture-flag ec-next-flag"><img src="assets/extra-images/fixer-flag-6.png" alt=""> Chelsea</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ec-cell"><span>03 Sep. Friday</span></div>
                                        <div class="ec-cell">
                                            <a href="#" class="ec-fixture-flag"><img src="assets/extra-images/fixer-flag-7.png" alt=""> Real Madrid</a>
                                            <span class="ec-fixture-vs"><small>vs</small></span>
                                            <a href="#" class="ec-fixture-flag ec-next-flag"><img src="assets/extra-images/fixer-flag-8.png" alt=""> Arsenal</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--// TablePoint \\-->
                        <div class="col-md-6">
                            <div class="ec-fancy-title">
                                <h2>Table Points</h2>
                            </div>
                            <div class="ec-table-point">
                                <ul class="ec-table-head">
                                    <li>
                                        <div class="ec-cell">S.#</div>
                                        <div class="ec-cell">Team</div>
                                        <div class="ec-cell">P</div>
                                        <div class="ec-cell">W</div>
                                        <div class="ec-cell">D</div>
                                        <div class="ec-cell">L</div>
                                    </li>
                                </ul>
                                <ul class="ec-table-list">
                                    <li>
                                        <div class="ec-cell">1</div>
                                        <div class="ec-cell">Arsenal</div>
                                        <div class="ec-cell">20</div>
                                        <div class="ec-cell">28</div>
                                        <div class="ec-cell">5</div>
                                        <div class="ec-cell">5</div>
                                    </li>
                                    <li>
                                        <div class="ec-cell">2</div>
                                        <div class="ec-cell">1.FCK</div>
                                        <div class="ec-cell">30</div>
                                        <div class="ec-cell">23</div>
                                        <div class="ec-cell">9</div>
                                        <div class="ec-cell">6</div>
                                    </li>
                                    <li>
                                        <div class="ec-cell">3</div>
                                        <div class="ec-cell">Liver Pool</div>
                                        <div class="ec-cell">10</div>
                                        <div class="ec-cell">22</div>
                                        <div class="ec-cell">10</div>
                                        <div class="ec-cell">8</div>
                                    </li>
                                    <li>
                                        <div class="ec-cell">4</div>
                                        <div class="ec-cell">Real Madrid</div>
                                        <div class="ec-cell">5</div>
                                        <div class="ec-cell">21</div>
                                        <div class="ec-cell">14</div>
                                        <div class="ec-cell">10</div>
                                    </li>
                                    <li>
                                        <div class="ec-cell">5</div>
                                        <div class="ec-cell">Premier League</div>
                                        <div class="ec-cell">14</div>
                                        <div class="ec-cell">10</div>
                                        <div class="ec-cell">9</div>
                                        <div class="ec-cell">8</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->
            <div class="ec-main-section shop-grid-full">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ec-section-heading">
                                <h2>Blank Space</h2></div>
                            </div>
                        <div class="col-md-12">
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->
            <!--// Main Section \\-->
            <div class="ec-main-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="ec-fancy-title">
                                <h2>Next Match</h2>
                            </div>
                            <div class="ec-nextmatch">
                                <div class="item">
                                    <ul class="ec-team-matches">
                                        <li>
                                            <a href="#"><img src="assets/extra-images/next-match-1.png" alt=""> <span>Arsenal</span></a>
                                        </li>
                                        <li><small>Thurseday</small>
                                            <time class="ec-color" datetime="2018-04-21 20:00">28 Maret</time> <small>15:00pm</small></li>
                                        <li>
                                            <a href="#"><img src="assets/extra-images/next-match-2.png" alt=""> <span>Premier League</span></a>
                                        </li>
                                    </ul>
                                    <div id="ec-Countdown" class="ec-match-countdown"></div>
                                    <a href="#" class="ec-ticket-button">Less Than 600 Tickets Left For Villa</a>
                                </div>
                                <div class="item">
                                    <ul class="ec-team-matches">
                                        <li>
                                            <a href="#"><img src="assets/extra-images/next-match-1.png" alt=""> <span>Arsenal</span></a>
                                        </li>
                                        <li><small>Thurseday</small>
                                            <time class="ec-color" datetime="2018-04-21 20:00">22 Maret</time> <small>15:00pm</small></li>
                                        <li>
                                            <a href="#"><img src="assets/extra-images/next-match-2.png" alt=""> <span>Premier League</span></a>
                                        </li>
                                    </ul>
                                    <div id="ec-Countdowntwo" class="ec-match-countdown"></div>
                                    <a href="#" class="ec-ticket-button">Less Than 600 Tickets Left For Villa</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="ec-fancy-title">
                                <h2>Latest Result</h2>
                                <span>On Live</span>
                            </div>
                            <div class="ec-latest-result-wrap">
                                <div class="ec-latest-result">
                                    <ul>
                                        <li>
                                            <span>Corner FC</span>
                                            <img src="assets/extra-images/latest-result-1.png" alt="">
                                            <span>Win</span>
                                        </li>
                                        <li>
                                            <div class="ec-result-time">
                                                <div class="ec-time-wrap">
                                                    3:1
                                                    <small>14 Maret 2018 21:00 (FT)</small>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <span>LiMax</span>
                                            <img src="assets/extra-images/latest-result-2.png" alt="">
                                            <span>Loss</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ec-skillst">
                                    <div class="skillbar" data-percent="40%">
                                        <div class="count-bar">
                                            <div class="count"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->     
            
            <!--// Main Section \\-->
            <div class="ec-main-section blog-grid-full">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ec-testimonial flexslider">
                                <ul class="slides">
                                    <li>
                                        <div class="ec-testimonial-wrap">
                                            <h2>People Love us</h2>
                                            <p>“Fiercely contested matches between Kaizer Chiefs and Orlando Pirates have become known as The Soweto Derby some of South Africa's biggest and most popular sporting events.”</p>
                                            <span>Jorge Olino</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ec-testimonial-wrap">
                                            <h2>People Love us</h2>
                                            <p>“Fiercely contested matches between Kaizer Chiefs and Orlando Pirates have become known as The Soweto Derby some of South Africa's biggest and most popular sporting events.”</p>
                                            <span>Jorge Olino</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ec-testimonial-wrap">
                                            <h2>People Love us</h2>
                                            <p>“Fiercely contested matches between Kaizer Chiefs and Orlando Pirates have become known as The Soweto Derby some of South Africa's biggest and most popular sporting events.”</p>
                                            <span>Jorge Olino</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="ec-main-section shop-grid-full">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ec-section-heading">
                                <h2>Blank Space</h2></div>
                            </div>
                        <div class="col-md-12">
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->
            <!--// Footer Widget \\-->
        <footer>
             <!--// CopyRight Section \\-->
            <div class="ec-bottom-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <a href="#" class="ec-footer-logo"><img src="assets/images/footer-logo.png" alt=""></a>
                            <div class="ec-copyright">
                                <p>© copyright 2018 eyecix all rights reserved</p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="ec-right-section">
                                <a href="index.php" class="backtop-btn">Back to top <i class="fa fa-caret-up"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// CopyRight Section \\-->
        </footer>
    </div>
    <!--// Main Wrapper \\-->
    <!-- ModalLogin Box -->
    <div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="ec-modallogin-form ec-login-popup">
                        <span class="ec-color">Login to Your Account</span>
                        <form>
                            <ul>
                                <li>
                                    <input type="text" value="Your Username" onblur="if(this.value == '') { this.value ='Your Username'; }" onfocus="if(this.value =='Your Username') { this.value = ''; }"> </li>
                                <li>
                                    <input type="password" value="password" onblur="if(this.value == '') { this.value ='password'; }" onfocus="if(this.value =='password') { this.value = ''; }"> </li>
                                <li> <a href="#" class="ec-forgot-btn">Forgot Password?</a> </li>
                                <li>
                                    <input type="submit" value="Sign In"> </li>
                            </ul>
                        </form>
                        <span class="ec-color">or try our socials</span>
                        <ul class="ec-login-social-media">
                            <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                            <li class="ec-twitter-color"><a href="#"><i class="fa fa-twitter"></i> twitter</a></li>
                            <li class="ec-googleplus-color"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
                        </ul>
                        <p>Not a member yet? <a href="#">Sign-up Now!</a></p>
                    </div>
                    <div class="ec-modallogin-form ec-register-popup">
                        <span class="ec-color">create Your Account today</span>
                        <form>
                            <ul>
                                <li>
                                    <input type="text" value="Your Username" onblur="if(this.value == '') { this.value ='Your Username'; }" onfocus="if(this.value =='Your Username') { this.value = ''; }"> </li>
                                <li>
                                    <input type="text" value="Your E-mail" onblur="if(this.value == '') { this.value ='Your E-mail'; }" onfocus="if(this.value =='Your E-mail') { this.value = ''; }"> </li>
                                <li>
                                    <input type="password" value="password" onblur="if(this.value == '') { this.value ='password'; }" onfocus="if(this.value =='password') { this.value = ''; }"> </li>
                                <li>
                                    <input type="text" value="Confirm Password" onblur="if(this.value == '') { this.value ='Confirm Password'; }" onfocus="if(this.value =='Confirm Password') { this.value = ''; }"> </li>
                                <li>
                                    <input type="submit" value="Create Account"> </li>
                            </ul>
                        </form>
                        <span class="ec-color">or signup with your socials:</span>
                        <ul class="ec-login-social-media">
                            <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                            <li class="ec-twitter-color"><a href="#"><i class="fa fa-twitter"></i> twitter</a></li>
                            <li class="ec-googleplus-color"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
                        </ul>
                        <p>Already a member? <a href="#">Sign-in Here!</a></p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- ModalLogin Box -->
    <!-- jQuery (necessary for JavaScript plugins) -->
    <script src="assets/script/jquery.js"></script>
    <script src="assets/script/modernizr.js"></script>
    <script src="assets/script/bootstrap.min.js"></script>
    <script src="assets/script/jquery.dlmenu.js"></script>
    <script src="assets/script/flexslider-min.js"></script>
    <script src="assets/script/jquery.prettyphoto.js"></script>
    <script src="assets/script/waypoints-min.js"></script>
    <script src="assets/script/owl.carousel.min.js"></script>
    <script src="assets/script/jquery.countdown.min.js"></script>
    <script src="assets/script/fitvideo.js"></script>
    <script src="assets/script/newsticker.js"></script>
    <script src="assets/script/skills.js"></script>
    <script src="assets/script/functions.js"></script>
    <script>
    var options = {
        newsList: "#ec-news",
        startDelay: 10,
        placeHolder1: ""
    }
    jQuery().newsTicker(options);
    </script>
</body>

</html>
