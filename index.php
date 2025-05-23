<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Checks and Balances</title>
    
    <!-- Favicon -->
    <link rel="icon" href="img/core-img/C&B BW CircleLogo-SVG.svg">
    <link href="https://vjs.zencdn.net/8.22.0/video-js.css" rel="stylesheet" />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
   
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <?php include ('header.php'); ?>             
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url('img/TheBand BW.png');"></div>
                <!-- Slide Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slides-content text-center">
                                <h6 data-animation="fadeInUp" data-delay="300ms">Support the Constitution</h6>
                                <h2 data-animation="fadeInUp" data-delay="600ms">YOUR FREEDOM OF SPEECH <span>YOUR FREEDOM OF SPEECH</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url('img/Rachel&Joel.png');"></div>
                <!-- Slide Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slides-content text-center">
                                <h6 data-animation="fadeInUp" data-delay="300ms">You Are Not Alone</h6>
                                <h2 data-animation="fadeInUp" data-delay="600ms">DEFEND YOUR RIGHTS<span>DEFEND YOUR RIGHTS</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Latest Releases Area Start ##### -->
    <section class="latest-albums-area section-padding-100">
        <div class="container" id="Events">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading style-2">
                        <h6>"The last check on power after the checks and balances of government have failed are the people, you and me. 
                            It’s in the union of people around a common set of values now that’s all that stands between a democracy and
                             authoritarianism. At the end of the day, all we’ve got is each other."</h6>
                        <h4>Bruce Springsteen</h4>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <img style="margin-bottom:50px" src="img/header.jpg" alt="">
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-12 col-lg-9">
                    <div class="ablums-text text-center mb-70">
                        <h3>At The Courthouse</h3>
                        <p>Every Sunday at the Henry Country Courthouse. Lots to say here, 
                            and we will populate this when we have more free time! In the mean time
                            check out some of the songs we play at the rally. </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="albums-slideshow owl-carousel">
                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="img/Joel&Eric BW.png" alt="">
                            <div class="album-info">
                                <a href="audio/pay me my money down-Master.mp3">
                                    <h5>Pay Me My Money Down</h5>
                                </a>
                                <p>Traditional Folk Song</p>
                            </div>
                        </div>

                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="img/Joel&Eric BW.png" alt="">
                            <div class="album-info">
                                <a href="audio/rocking in the free world.mp3">
                                    <h5>Rocking In The Free World</h5>
                                </a>
                                <p>Neil Young</p>
                            </div>
                        </div>

                        <!-- Single Album -->
                        <div class="single-album">
                            <img src="img/Joel&Eric BW.png" alt="">
                            <div class="album-info">
                                <a href="audio/Something to Believe In-Master.mp3">
                                    <h5>Something To Believe In</h5>
                                </a>
                                <p>Poison</p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Latest Albums Area End ##### -->


    <!-- ##### Featured Artist Area Start ##### -->
    <section class="featured-artist-area section-padding-100 bg-img bg-overlay bg-fixed" style="background-image: url(img/SVT-Blur.JPG);">
        <div class="container" id="Media">
           
            <div class="row ">
                <div class="col-12 col-md-5 col-lg-4 ">
                    <div class="featured-artist-thumb mr-50">
                    <video
                        id="my-video"
                        class="video-js"
                        controls
                        preload="auto"
                        width="360"
                        height="400"
                        poster="img/core-img/C&B logo - white -transparent background.png"
                        data-setup="{}"
                    >
                        <source src="audio/promo_video.mp4" type="video/mp4" />                        
                        <p class="vjs-no-js">
                        To view this video please enable JavaScript, and consider upgrading to a
                        web browser that
                        <a href="https://videojs.com/html5-video-support/" target="_blank"
                            >supports HTML5 video</a
                        >
                        </p>
                    </video>

                    <script src="https://vjs.zencdn.net/8.22.0/video.min.js"></script>
                    </div>
                </div>
            <div class="col-12 col-md-5 col-lg-4 ml-50">
                <div class="featured-artist-content ">
                        <!-- Section Heading -->
                        <div class="section-heading white text-left mb-30">
                            <p>What Is This About?</p>
                            <h2>Checks and Balances</h2>
                        </div>
                        <p>Songs to sooth the soul during trying times for those who remember the reasons
                        we have a Constitution.
                        </p>
                        
                    </div>
                
                    
                </div>
                
                
            </div>
        </div>
    </section>
    <!-- ##### Featured Artist Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url(img/Crash-Moon.JPG);">
        <div class="container" id="Contact">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading white wow fadeInUp" data-wow-delay="100ms">
                        <p>Get In Touch</p>
                        <h2>CONTACT US</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                         <?php include ('simple_contact_form.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <?php include ('footer.php'); ?>     
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>