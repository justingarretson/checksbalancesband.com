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
                                <h2 data-animation="fadeInUp" data-delay="600ms">Freedom of Speech <span>Freedom of Speech</span></h2>
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
                                <h6 data-animation="fadeInUp" data-delay="300ms">Defend Your Rights</h6>
                                <h2 data-animation="fadeInUp" data-delay="600ms">Tag Line<span>Tag Line</span></h2>
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
                        <p>See what’s happening</p>
                        <h2>At The Courthouse</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-9">
                    <div class="ablums-text text-center mb-70">
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
            <div class="row align-items-end">
            <div class="col-12 col-md-7 col-lg-8">
                    <div class="featured-artist-content">
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
                <div class="col-12 col-md-5 col-lg-4">
                    <div class="featured-artist-thumb">
                    <video
                        id="my-video"
                        class="video-js"
                        controls
                        preload="auto"
                        width="640"
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
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group wow fadeInUp" data-wow-delay="100ms">
                                        <input type="text" class="form-control" id="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group wow fadeInUp" data-wow-delay="200ms">
                                        <input type="email" class="form-control" id="email" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group wow fadeInUp" data-wow-delay="300ms">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group wow fadeInUp" data-wow-delay="400ms">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 text-center wow fadeInUp" data-wow-delay="500ms">
                                    <button class="btn oneMusic-btn mt-30" type="submit">Send <i class="fa fa-angle-double-right"></i></button>
                                </div>
                            </div>
                        </form>
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