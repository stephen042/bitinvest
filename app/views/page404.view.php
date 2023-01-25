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
                        <li>Error 403</li>
                    </ul>
                </div>
            </div>
            <!-- BREADCRUMB ROW END -->
            
            <!-- SECTION CONTENT START -->
            <div class="section-full p-t80 p-b50">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-lg-8 col-md-6 col-sm-6">
                                <div class="page-notfound text-center">
                                    <form method="post">
                                        <strong class="text-uppercase">Error</strong>
                                        <strong>4<i class="fa fa-frown-o text-primary"></i>3</strong>
                                        <span>Access Forbidden</span>
                                        <a href="index.html" class="site-button ">GO TO HOME  <i class="fa fa-angle-double-right"></i></a>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="page-notfound-left text-center ">
                                  <img src="<?=ROOT?>/images/error.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SECTION CONTENT END -->
        
        </div>
        <!-- CONTENT END -->
        
        <?php $this->view('includes/footer'); ?>
        
        <!-- BUTTON TOP START -->
        <button class="scroltop"><span class=" iconmoon-house relative" id="btn-vibrate"></span>Top</button>

        <?php $this->view('includes/getstarted'); ?>    
        
    </div>
    

<!-- LOADING AREA START ===== -->
    <?php $this->view('includes/loading'); ?>
<!-- LOADING AREA  END ====== -->
<!-- JAVASCRIPT  FILES ========================================= --> 
<script   src="<?=ROOT?>/js/jquery-1.12.4.min.js"></script><!-- JQUERY.MIN JS -->
<script   src="<?=ROOT?>/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->

<script   src="<?=ROOT?>/js/bootstrap-select.min.js"></script><!-- FORM JS -->
<script   src="<?=ROOT?>/js/jquery.bootstrap-touchspin.min.js"></script><!-- FORM JS -->

<script   src="<?=ROOT?>/js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->

<script   src="<?=ROOT?>/js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
<script   src="<?=ROOT?>/js/counterup.min.js"></script><!-- COUNTERUP JS -->
<script   src="<?=ROOT?>/js/waypoints-sticky.min.js"></script><!-- COUNTERUP JS -->

<script  src="<?=ROOT?>/js/isotope.pkgd.min.js"></script><!-- MASONRY  -->

<script   src="<?=ROOT?>/js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->

<script   src="<?=ROOT?>/js/stellar.min.js"></script><!-- PARALLAX BG IMAGE   --> 
<script   src="<?=ROOT?>/js/scrolla.min.js"></script><!-- ON SCROLL CONTENT ANIMTE   --> 

<script   src="<?=ROOT?>/js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script   src="<?=ROOT?>/js/shortcode.js"></script><!-- SHORTCODE FUCTIONS  -->
<script   src="<?=ROOT?>/js/switcher.js"></script><!-- SWITCHER FUCTIONS  -->
<script  src="<?=ROOT?>/js/jquery.bgscroll.js"></script><!-- BACKGROUND SCROLL -->
<script  src="<?=ROOT?>/js/tickerNews.min.js"></script><!-- TICKERNEWS-->


</body>


<!-- Mirrored from thewebmax.com/bitinvest/error-403.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 May 2021 13:25:27 GMT -->
</html>
