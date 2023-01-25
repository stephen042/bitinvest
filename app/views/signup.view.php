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
                <?php //print_r($errors)
                ?>
                <div class="container bg-white" style="border-radius:10px; max-width:550px;">
                    <form method="POST">
                        <div class="row g-3" style="padding: 30px;">
                            <h2 class="text-center">REGISTER</h2>

                            <h3></h3>
                            <div class="wt-separator-outer text-center">
                                <div class="wt-separator bg-primary"></div>
                            </div>
                            <div class="col-md-12" style="padding-top: 10px;">
                                <label for="fullname" class="form-label">Fullname</label>
                                <input type="text" value="<?= set_value('fullname') ?>" name="fullname" class="form-control" id="fullname" placeholder="Enter fullname" required>
                                <?php if (isset($_POST['fullname'])) : ?>
                                    <?php if (!empty($errors['fullname'])) : ?>
                                        <small class="text-danger"><?= $errors['fullname'] ?></small>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-12" style="padding-top: 10px;">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" value="<?= set_value('username') ?>" name="username" class="form-control" id="username" placeholder="Enter username" required>
                                <?php if (isset($_POST['username'])) : ?>
                                    <?php if (!empty($errors['username'])) : ?>
                                        <small class="text-danger"><?= $errors['username'] ?></small>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-12" style="padding-top: 10px;">
                                <label for="email" class="form-label">email</label>
                                <input type="email" value="<?= set_value('email') ?>" name="email" class="form-control" id="email" placeholder="Enter email address" required>
                                <?php if (isset($_POST['email'])) : ?>
                                    <?php if (!empty($errors['email'])) : ?>
                                        <small class="text-danger"><?= $errors['email'] ?></small>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-12" style="padding-top: 10px;">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" value="<?= set_value('password') ?>" name="password" class="form-control" id="password" placeholder="Enter password" required>
                                <?php if (isset($_POST['password'])) : ?>
                                    <?php if (!empty($errors['password'])) : ?>
                                        <small class="text-danger"><?= $errors['password'] ?></small>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-12" style="padding-top: 10px;">
                                <label for="retypepassword" class="form-label">Retype Password</label>
                                <input type="password" value="<?= set_value('retypepassword') ?>" name="retypepassword" class="form-control" id="password" placeholder="Retype password" required>
                                <?php if (isset($_POST['retypepassword'])) : ?>
                                    <?php if (!empty($errors['retypepassword'])) : ?>
                                        <small class="text-danger"><?= $errors['retypepassword'] ?></small>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>

                            <div class="col-md-12" style="padding-top: 10px;">
                                <div class="form-check">
                                    <input <?= set_value('box') ? "checked" : ""; ?> class="form-check-input" name="box" value="1" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Accepts our Terms
                                    </label>
                                    <?php if (!empty($errors['box'])) : ?>
                                        <small class="text-danger"><?= $errors['box'] ?></small>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-12 mx-auto" style="padding-top: 10px;">
                                <button type="submit" class="btn btn-primary btn-lg" style="border-radius:5px;">Sign up</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- SECTION CONTENT END -->

        </div>
        <!-- CONTENT END -->
    </div>

    <?php $this->view('includes/footer'); ?>

    <!-- BUTTON TOP START -->
    <button class="scroltop"><span class=" iconmoon-house relative" id="btn-vibrate"></span>Top</button>


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