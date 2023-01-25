<!DOCTYPE html>

<html lang="en">

<?php $this->view('includes/head'); ?>

<body id="bg">

    <div class="page-wraper">

        <!-- HEADER START -->
        <?php $this->view('includes/nav'); ?>
        <!-- HEADER END -->

        <!-- CONTENT START -->
        <div class="page-content">

            <!-- BREADCRUMB ROW -->
            <div class="bg-gray-light p-tb20">
                <div class="container">
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                        <li>Thanks for Registering</li>
                    </ul>
                </div>
            </div>
            <!-- BREADCRUMB ROW END -->

            <!-- SECTION CONTENT -->
            <div class="section-full  p-t80 p-b80 bg-gray">
                <div class="container">
                    <!-- TITLE START-->
                    <div class="section-head text-center">
                        <h1 class="text-uppercase">THANKS REGISTERING WITH <?=APPNAME?></h1>
                        <a href="#" data-toggle="modal" data-target="#Login-form"> 
                            <h2 class="text-uppercase text-primary">click to login</h2>
                        </a>    
                        <hr>
                        <h3 class="text-uppercase">HOW <?=APPNAME?> WORKS </h3>
                        <div class="wt-separator-outer">
                            <div class="wt-separator bg-primary"></div>
                        </div>
                        <p>invest and Get paid in 24hrs</p>
                    </div>
                    <!-- TITLE END-->
                    <div class="section-content no-col-gap">
                        <div class="row">

                            <!-- COLUMNS 1 -->
                            <div class="col-md-4 col-sm-4 animate_line">
                                <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                    <div class="icon-content ">
                                        <h4 class="wt-tilte text-uppercase font-weight-500">DEPOSITE</h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 2 -->
                            <div class="col-md-4 col-sm-4 animate_line">
                                <div class="wt-icon-box-wraper  p-a30 center bg-secondry m-a5">
                                    <div class="icon-content text-white">
                                        <h4 class="wt-tilte text-uppercase font-weight-500">PICK AN INVESTMENT PLAN</h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 3 -->
                            <div class="col-md-4 col-sm-4 animate_line">
                                <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                                    <div class="icon-content">
                                        <h4 class="wt-tilte text-uppercase font-weight-500">RECEIVE YOUR PAYMENT IN 24hrs</h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- SECTION CONTENT END -->

        </div>
        <!-- CONTENT END -->
    </div>

    <?php $this->view('includes/footer'); ?>

    <!-- BUTTON TOP START -->
    <button class="scroltop"><span class=" iconmoon-house relative" id="btn-vibrate"></span>Top</button>

    <?php $this->view('includes/getstarted'); ?>

    </div>


    <!-- LOADING AREA START ===== -->
    <?php $this->view('includes/loading'); ?>
    <!-- LOADING AREA  END ====== -->

    <!-- JAVASCRIPT  FILES ========================================= -->
    <script src="<?= ROOT ?>/js/jquery-1.12.4.min.js"></script><!-- JQUERY.MIN JS -->
    <script src="<?= ROOT ?>/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->

    <script src="<?= ROOT ?>/js/bootstrap-select.min.js"></script><!-- FORM JS -->
    <script src="<?= ROOT ?>/js/jquery.bootstrap-touchspin.min.js"></script><!-- FORM JS -->

    <script src="<?= ROOT ?>/js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->

    <script src="<?= ROOT ?>/js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
    <script src="<?= ROOT ?>/js/counterup.min.js"></script><!-- COUNTERUP JS -->
    <script src="<?= ROOT ?>/js/waypoints-sticky.min.js"></script><!-- COUNTERUP JS -->

    <script src="<?= ROOT ?>/js/isotope.pkgd.min.js"></script><!-- MASONRY  -->

    <script src="<?= ROOT ?>/js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->

    <script src="<?= ROOT ?>/js/stellar.min.js"></script><!-- PARALLAX BG IMAGE   -->
    <script src="<?= ROOT ?>/js/scrolla.min.js"></script><!-- ON SCROLL CONTENT ANIMTE   -->

    <script src="https://maps.google.com/maps/api/js?key=AIzaSyCz6xX2nI6cMkePba_DHQcs0MkR7m2IuvE&amp;callback=initMap"></script><!-- GOOGLE MAP -->
    <script src="<?= ROOT ?>/js/map.script.js"></script><!-- MAP FUCTIONS [ this file use with google map]  -->

    <script src="<?= ROOT ?>/js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
    <script src="<?= ROOT ?>/js/shortcode.js"></script><!-- SHORTCODE FUCTIONS  -->
    <script src="<?= ROOT ?>/js/switcher.js"></script><!-- SWITCHER FUCTIONS  -->
    <script src="<?= ROOT ?>/js/jquery.bgscroll.js"></script><!-- BACKGROUND SCROLL -->
    <script src="<?= ROOT ?>/js/tickerNews.min.js"></script><!-- TICKERNEWS-->



</body>


</html>