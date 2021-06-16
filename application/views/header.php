<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">

    <title>SIAKAD</title>

    <link rel="apple-touch-icon" href="<?php echo base_url() . 'style/assets/images/apple-touch-icon.png' ?>">
    <link rel="shortcut icon" href="<?php echo base_url() . 'images/siakad.png' ?>">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url() . 'style/global/css/bootstrap.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'style/global/css/bootstrap-extend.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'style/assets/css/site.min.css' ?>">

    <!-- Plugins -->
    <link rel="stylesheet" href="<?php echo base_url() . 'style/global/vendor/animsition/animsition.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'style/global/vendor/asscrollable/asScrollable.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'style/global/vendor/switchery/switchery.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'style/global/vendor/intro-js/introjs.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'style/global/vendor/slidepanel/slidePanel.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'style/global/vendor/flag-icon-css/flag-icon.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'style/global/vendor/asrange/asRange.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'style/assets/examples/css/uikit/icon.css' ?>">


    <!-- Fonts -->
    <link rel="stylesheet" href="<?php echo base_url() . 'style/global/fonts/font-awesome/font-awesome.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'style/global/fonts/web-icons/web-icons.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'style/global/fonts/brand-icons/brand-icons.min.css' ?>">
    <link rel='stylesheet' href='<?php echo base_url() . 'http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic' ?>'>

    <!-- Scripts -->
    <script src="<?php echo base_url() . 'style/global/vendor/breakpoints/breakpoints.js' ?>"></script>
    <script>
        Breakpoints();
    </script>
</head>

<body class="animsition">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

        <!-- Mobile -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided" data-toggle="menubar">
                <span class="sr-only">Toggle navigation</span>
                <span class="hamburger-bar"></span>
            </button>
            <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse" data-toggle="collapse">
                <i class="icon wb-more-horizontal" aria-hidden="true"></i>
            </button>
            <div class="navbar-brand navbar-brand-center site-gridmenu-toggle">
                <img class="navbar-brand-logo" src="<?php echo base_url() . 'images/siakad.png' ?>" title="Siakad">
                <span class="navbar-brand-text hidden-xs-down"> Siakad</span>
            </div>
        </div>

        <div class="navbar-container container-fluid">
            <!-- Navbar Collapse -->
            <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
                <!-- Navbar Toolbar -->
                <ul class="nav navbar-toolbar">
                    <li class="nav-item hidden-float" id="toggleMenubar">
                        <a class="nav-link" data-toggle="menubar" href="#" role="button">
                            <i class="icon hamburger hamburger-arrow-left">
                                <span class="sr-only">Toggle menubar</span>
                                <span class="hamburger-bar"></span>
                            </i>
                        </a>
                    </li>
                </ul>
                <!-- End Navbar Toolbar -->

                <!-- Navbar Toolbar Right -->
                <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false" data-animation="scale-up" role="button">
                            <i class="icon fa-user" aria-hidden="true" style="font-size: 25px; color: black;"></i>
                        </a>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
                            <div class="dropdown-divider" role="presentation"></div>
                            <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
                        </div>
                    </li>
                </ul>
                <!-- End Navbar Toolbar Right -->
            </div>
            <!-- End Navbar Collapse -->

            <!-- Site Navbar Seach -->
            <div class="collapse navbar-search-overlap" id="site-navbar-search">
                <form role="search">
                    <div class="form-group">
                        <div class="input-search">
                            <i class="input-search-icon wb-search" aria-hidden="true"></i>
                            <input type="text" class="form-control" name="site-search" placeholder="Search...">
                            <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search" data-toggle="collapse" aria-label="Close"></button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- End Site Navbar Seach -->
        </div>
    </nav>
    <div class="site-menubar">
        <div class="site-menubar-body">
            <div>
                <div>
                    <ul class="site-menu" data-plugin="menu">
                        <li class="site-menu-item has-sub">
                            <a href="<?php echo base_url() . 'dashboard' ?>">
                                <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                                <span class="site-menu-title">Dashboard</span>
                                
                            </a>
                          
                        </li>
                        <li class="site-menu-category">Elements</li>
                        <li class="site-menu-item has-sub">
                            <a href="javascript:void(0)">
                                <i class="site-menu-icon wb-bookmark" aria-hidden="true"></i>
                                <span class="site-menu-title">Basic UI</span>
                                <span class="site-menu-arrow"></span>
                            </a>
                            <ul class="site-menu-sub">
                                <li class="site-menu-item has-sub">
                                    <a href="javascript:void(0)">
                                        <span class="site-menu-title">Panel</span>
                                        <span class="site-menu-arrow"></span>
                                    </a>
                                    <ul class="site-menu-sub">
                                        <li class="site-menu-item">
                                            <a class="animsition-link" href="uikit/panel-structure.html">
                                                <span class="site-menu-title">Panel Structure</span>
                                            </a>
                                        </li>
                                        <li class="site-menu-item">
                                            <a class="animsition-link" href="uikit/panel-actions.html">
                                                <span class="site-menu-title">Panel Actions</span>
                                            </a>
                                        </li>
                                        <li class="site-menu-item">
                                            <a class="animsition-link" href="uikit/panel-portlets.html">
                                                <span class="site-menu-title">Panel Portlets</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="uikit/buttons.html">
                                        <span class="site-menu-title">Buttons</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="uikit/cards.html">
                                        <span class="site-menu-title">Cards</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="uikit/dropdowns.html">
                                        <span class="site-menu-title">Dropdowns</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="uikit/icons.html">
                                        <span class="site-menu-title">Icons</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="uikit/list.html">
                                        <span class="site-menu-title">List</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="uikit/tooltip-popover.html">
                                        <span class="site-menu-title">Tooltip &amp; Popover</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="uikit/modals.html">
                                        <span class="site-menu-title">Modals</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="uikit/tabs-accordions.html">
                                        <span class="site-menu-title">Tabs &amp; Accordions</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="uikit/images.html">
                                        <span class="site-menu-title">Images</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="uikit/badges.html">
                                        <span class="site-menu-title">Badges</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="uikit/progress-bars.html">
                                        <span class="site-menu-title">Progress Bars</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="uikit/carousel.html">
                                        <span class="site-menu-title">Carousel</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="uikit/typography.html">
                                        <span class="site-menu-title">Typography</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="uikit/colors.html">
                                        <span class="site-menu-title">Colors</span>
                                    </a>
                                </li>
                                <li class="site-menu-item">
                                    <a class="animsition-link" href="uikit/utilities.html">
                                        <span class="site-menu-title">Utilties</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

   

    <!-- Core  -->
    <script src="<?php echo base_url() . 'style/global/vendor/babel-external-helpers/babel-external-helpers.js' ?>"></script>
    <script src="<?php echo base_url() . 'style/global/vendor/jquery/jquery.js' ?>"></script>
    <script src="<?php echo base_url() . 'style/global/vendor/popper-js/umd/popper.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'style/global/vendor/bootstrap/bootstrap.js' ?>"></script>
    <script src="<?php echo base_url() . 'style/global/vendor/animsition/animsition.js' ?>"></script>
    <script src="<?php echo base_url() . 'style/global/vendor/mousewheel/jquery.mousewheel.js' ?>"></script>
    <script src="<?php echo base_url() . 'style/global/vendor/asscrollbar/jquery-asScrollbar.js' ?>"></script>
    <script src="<?php echo base_url() . 'style/global/vendor/asscrollable/jquery-asScrollable.js' ?>"></script>
    <script src="<?php echo base_url() . 'style/global/vendor/ashoverscroll/jquery-asHoverScroll.js' ?>"></script>

    <!-- Plugins -->
    <script src="<?php echo base_url() . 'style/global/vendor/switchery/switchery.js' ?>"></script>
    <script src="<?php echo base_url() . 'style/global/vendor/intro-js/intro.js' ?>"></script>
    <script src="<?php echo base_url() . 'style/global/vendor/screenfull/screenfull.js' ?>"></script>
    <script src="<?php echo base_url() . 'style/global/vendor/slidepanel/jquery-slidePanel.js' ?>"></script>

    <!-- Scripts -->
    <script src="<?php echo base_url() . 'style/global/js/Component.js' ?>"></script>
    <script src="<?php echo base_url() . 'style/global/js/Plugin.js' ?>"></script>
    <script src="<?php echo base_url() . 'style/global/js/Base.js' ?>"></script>
    <script src="<?php echo base_url() . 'style/global/js/Config.js' ?>"></script>

    <script src="<?php echo base_url() . 'style/assets/js/Section/Menubar.js' ?>"></script>
    <script src="<?php echo base_url() . 'style/assets/js/Section/GridMenu.js' ?>"></script>
    <script src="<?php echo base_url() . 'style/assets/js/Section/Sidebar.js' ?>"></script>
    <script src="<?php echo base_url() . 'style/assets/js/Section/PageAside.js' ?>"></script>
    <script src="<?php echo base_url() . 'style/assets/js/Plugin/menu.js' ?>"></script>

    <script src="<?php echo base_url() . 'style/global/js/config/colors.js' ?>"></script>
    <script src="<?php echo base_url() . 'style/assets/js/config/tour.js' ?>"></script>
    <script>
        Config.set('assets', '../../assets');
    </script>

    <!-- Page -->
    <script src="<?php echo base_url() . 'style/assets/js/Site.js' ?>"></script>
    <script src="<?php echo base_url() . 'style/global/js/Plugin/asscrollable.js' ?>"></script>
    <script src="<?php echo base_url() . 'style/global/js/Plugin/slidepanel.js' ?>"></script>
    <script src="<?php echo base_url() . 'style/global/js/Plugin/switchery.js' ?>"></script>

    <script>
        (function(document, window, $) {
            'use strict';

            var Site = window.Site;
            $(document).ready(function() {
                Site.run();
            });
        })(document, window, jQuery);
    </script>
</body>

</html>