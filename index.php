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
                        <!-- Single Pic -->
                        <div class="single-album">
                            
                            <div class="album-info">
                                <a href="img/Roger-and-Eric.jpg">
                                    <img src="img/Roger-and-Eric.jpg" alt="">
                                </a>
                                <p>Roger and Eric</p>
                            </div>
                        </div>
                        
                        <!-- Single Pic -->
                        <div class="single-album">
                            
                            <div class="album-info">
                                <a href="img/Steph-and-Martha(web).jpg">
                                    <img src="img/Steph-and-Martha(web).jpg" alt="">
                                </a>
                                <p>Steph and Martha</p>
                            </div>
                        </div>

                        <!-- Single Pic -->
                        <div class="single-album">
                            
                            <div class="album-info">
                                <a href="img/Sue-Ann-(web).jpg">
                                    <img src="img/Sue-Ann-(web).jpg" alt="">
                                </a>
                                <p>Sue-Ann</p>
                            </div>
                        </div>

                         <!-- Single Pic -->
                        <div class="single-album">
                            
                            <div class="album-info">
                                <a href="img/Eric.jpg">
                                    <img src="img/Eric.jpg" alt="">
                                </a>
                                <p>Eric</p>
                            </div>
                        </div>

                         <!-- Single Pic -->
                        <div class="single-album">
                            
                            <div class="album-info">
                                <a href="img/Joel&Eric BW.png">
                                    <img src="img/Joel&Eric BW.png" alt="">
                                </a>
                                <p>Joel and Eric</p>
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
            <div class="row col-12">
                    <div class="featured-artist-thumb col-lg mr-50">
                        <video
                            id="my-video"
                            class="video-js"
                            controls
                            preload="auto"
                            width="100%"
                            
                            poster="img/core-img/C&B logo - white -transparent background.png"
                            data-setup="{}"
                        >
                            <source src="audio/promo_video.mp4" type="video/mp4" />                        
                            <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a
                            web browser that
                            <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                            </p>
                        </video>

                        <script src="https://vjs.zencdn.net/8.22.0/video.min.js"></script>
                    </div>
                    <div class="featured-artist-content col-lg">
                        <!-- Section Heading -->
                        <div class="section-heading white text-left mb-30">
                            <p>What Is This About?</p>
                            <h2>Checks and Balances</h2>
                        </div>
                        <p>The Checks & Balances Band is a newly formed band in SE Iowa performing folk and folk/rock music spanning over 70 years; 
                            songs that have inspired and influenced several generations.  The songs we sing are timeless and as relevant today 
                            as when they were first performed including such artists as Woody Guthrie, Pete Seeger, Bob Dylan, The Weavers, 
                            Kingston Trio, Peter, Paul, and Mary, Buffalo Springfield, CSNY, Neil Young, Canned Heat, Youngbloods, Poison, 
                            Steve Earle, Bruce Springsteen, and a few of our own, just to name a few.  Our selection of songs are not 
                            necessarily aimed against any one political party.  We are all Americans chasing the American dream of life, 
                            liberty, and the pursuit of happiness, supporting the Constitution, justice for all, in a long struggle for 
                            democracy with a system of checks and balances. Isn't that what everyone wants?
                        </p>
                        
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