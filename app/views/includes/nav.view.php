    <!-- HEADER START -->
    <header class="site-header header-style-6">

        <div class="top-bar bg-primary">
            <div class="container">
                <div class="row">
                    <div class="clearfix">
                        <div class="wt-topbar-left">
                            <ul class="list-unstyled e-p-bx pull-left">
                                <li><i class="fa fa-envelope"></i><?= APPEMAIL ?></li>
                                <li><i class="fa fa-phone"></i><?= APPNUMBER ?></li>
                            </ul>
                        </div>

                        <div class="wt-topbar-right">
                            <div class=" language-select pull-right">
                                <div class="dropdown">
                                    <!-- <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">Language
                                        <span class="caret"></span> -->

                                    <!-- <script>
                                            function googleTranslateElementInit() {

                                                new google.translate.TranslateElement({

                                                    pageLanguage: 'en'

                                                }, 'google_translate_element');

                                            }
                                        </script>
                                        <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> -->

                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#"><img src="<?= ROOT ?>/images/united-states.png" alt="">English</a></li>
                                        <li><a href="#"><img src="<?= ROOT ?>/images/france.png" alt="">French</a></li>
                                        <li><a href="#"><img src="<?= ROOT ?>/images/germany.png" alt="">German</a></li>
                                    </ul>
                                </div>
                            </div>

                            <?php if (!Auth::logged_in()) : ?>
                                <ul class="list-unstyled e-p-bx pull-right">
                                    <li><a href="login"><i class="fa fa-user"></i>Login</a></li>
                                    <li><a href="signup"><i class="fa fa-sign-in"></i>Register</a></li>
                                </ul>
                                <?php else : ?>
                                <div class="btn btn-sm btn-primary" style="border-radius:5px;">
                                <a href="admin/dashboard" style="color:white;" role="button">
                                    <i class="fa fa-user"></i>
                                     Profile
                                </a>
                                </div>
                                <div class="btn btn-sm btn-primary" style="border-radius:5px;">
                                    <a href="logout" style="color:white;" role="button">
                                    <i class="fa fa-sign-out"></i>Logout
                                    </a>
                                </div>    
                                <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Link -->

        <!-- Search Form -->
        <div class="main-bar header-middle bg-white">
            <div class="container">
                <div class="logo-header text-center" style="height:20px ;">
                    <a href="home" style="display: flex; padding:2px;">
                        <svg width="40px" height="40px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" style="margin-top: 10px;">
                            <circle cx="512" cy="512" r="512" style="fill:#0052ff" />
                            <path d="M516.3 361.83c60.28 0 108.1 37.18 126.26 92.47H764C742 336.09 644.47 256 517.27 256 372.82 256 260 365.65 260 512.49S370 768 517.27 768c124.35 0 223.82-80.09 245.84-199.28H642.55c-17.22 55.3-65 93.45-125.32 93.45-83.23 0-141.56-63.89-141.56-149.68.04-86.77 57.43-150.66 140.63-150.66z" style="fill:#fff" />
                        </svg>
                        <div style="padding-top:px;letter-spacing: 3px; padding-left:8px;">
                            <h6 class="text-uppercase" style="font-weight:bold;line-height:14px">cOINBASE</h6>
                            <h6 class="text-uppercase" style="font-weight:bold;line-height:14px">INVEST</h6>
                        </div>
                    </a>
                </div>
                <div class="header-info">
                    <ul>
                        <li>
                            <div>
                                <div class="icon-sm">
                                    <span class="icon-cell  text-primary"><i class="iconmoon-travel"></i></span>
                                </div>
                                <div class="icon-content">
                                    <strong>Our Location </strong>
                                    <span>145 N Los Ave, NY</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div class="icon-sm">
                                    <span class="icon-cell  text-primary"><i class="iconmoon-smartphone-1"></i></span>
                                </div>
                                <div class="icon-content">
                                    <strong>Phone Number</strong>
                                    <span><?= APPNUMBER ?></span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Search Form -->
        <div class="sticky-header main-bar-wraper">
            <div class="main-bar header-botton nav-bg-secondry">
                <div class="container">
                    <!-- NAV Toggle Button -->
                    <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- MAIN Vav -->
                    <div class="header-nav navbar-collapse collapse ">
                        <ul class=" nav navbar-nav">
                            <li class="hover">
                                <a href="home">Home</a>
                            </li>

                            <li class="hover">
                                <a href="about">About</a>

                            </li>

                            <li class="hover">
                                <a href="contact">contact</a>
                            </li>

                            <li class="hover">
                                <a href="faq">Faq</a>
                            </li>

                            <li class="hover">
                                <a href="ourteam">Our Team</a>
                            </li>

                            <li class="hover">
                                <a href="Services">Services</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- HEADER END -->