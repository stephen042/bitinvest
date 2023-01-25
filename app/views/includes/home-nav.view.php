
<header class="site-header header-style-3 topbar-transparent">

    <div class="top-bar">
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
                        <?php if (!Auth::logged_in()) : ?>
                        <ul class="list-unstyled e-p-bx pull-right">
                            <li><a href="login"><i class="fa fa-user"></i>Login</a></li>
                            <li><a href="signup"><i class="fa fa-sign-in"></i>Register</a></li>
                        <?php else:?>
                        </ul>    
                            <div class="btn btn-sm btn-primary" style="border-radius:5px;">
                                <a href="admin/dashboard" style="color:white;" role="button">
                                    <i class="fa fa-user"></i>
                                     Profile
                                </a>
                            </div>
                            <div class="btn btn-sm btn-primary" style="border-radius:5px;">
                                <a href="logout" style="color:white;"  role="button">
                                <i class="fa fa-sign-out"></i>Logout
                                </a>
                            </div> 
                        <?php endif; ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sticky-header main-bar-wraper">
        <div class="main-bar">
            <div class="container">

                <div class="logo-header mostion text-center">
                    <a href="home" style="display: flex; padding:2px;">
                        <!-- <img src="/images/base.png" alt="" style="background: blue; margin-top:10px; height:100px;"/> -->
                        <svg width="60px" height="60px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" style="margin-top: 10px;">
                            <circle cx="512" cy="512" r="512" style="fill:#0052ff" />
                            <path d="M516.3 361.83c60.28 0 108.1 37.18 126.26 92.47H764C742 336.09 644.47 256 517.27 256 372.82 256 260 365.65 260 512.49S370 768 517.27 768c124.35 0 223.82-80.09 245.84-199.28H642.55c-17.22 55.3-65 93.45-125.32 93.45-83.23 0-141.56-63.89-141.56-149.68.04-86.77 57.43-150.66 140.63-150.66z" style="fill:#fff" />
                        </svg>
                        <div style="padding-top:11px;letter-spacing: 5px; padding-left:10px;">
                            <h5 class="text-uppercase" style="color:aliceblue;font-weight:bold; line-height:14px">cOINBASE</h5>
                            <h5 class="text-uppercase" style="color:aliceblue;font-weight:bold; line-height:14px">INVEST</h5>
                        </div>
                    </a>
                </div>

                <!-- NAV Toggle Button -->
                <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>


                <!-- SITE Search -->
                <div id="search">
                    <span class="close"></span>
                    <form role="search" id="searchform" action="http://thewebmax.com/search" method="get" class="radius-xl">
                        <div class="input-group">
                            <input value="" name="q" type="search" placeholder="Type to search" />
                            <span class="input-group-btn"><button type="button" class="search-btn"><i class="fa fa-search"></i></button></span>
                        </div>
                    </form>
                </div>

                <!-- MAIN Vav -->
                <div class="header-nav navbar-collapse collapse ">
                    <ul class=" nav navbar-nav">
                        <li class="">
                            <a href="home">Home</a>
                        </li>

                        <li>
                            <a href="about">About</a>
                        </li>

                        <li>
                            <a href="contact">Contact</a>
                        </li>

                        <li>
                            <a href="faq">FAQ </a>
                        </li>

                        <li>
                            <a href="ourteam">Our Team </a>
                        </li>

                        <li>
                            <a href="services">Services</a>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </div>

</header>
<!-- HEADER END