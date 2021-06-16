<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">

    <title>Login V3 | Remark Admin Template</title>

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
    <link rel="stylesheet" href="<?php echo base_url() . 'style/assets/examples/css/pages/login-v3.css' ?>">

    <!-- Fonts -->
    <link rel="stylesheet" href="<?php echo base_url() . 'style/global/fonts/web-icons/web-icons.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'style/global/fonts/brand-icons/brand-icons.min.css' ?>">
    <link rel='stylesheet' href='<?php echo base_url() . 'http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic' ?>'>

    <!-- Scripts -->
    <script src="<?php echo base_url() . 'style/global/vendor/breakpoints/breakpoints.js' ?>"></script>
    <script>
        Breakpoints();
    </script>
</head>

<body class="animsition page-login-v3 layout-full">
    <!-- Page -->
    <div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">
        <div class="page-content vertical-align-middle animation-slide-top animation-duration-1">
            <div class="panel">
                <div class="panel-body">
                    <div class="brand">
                        <img class="brand-img" src="<?php echo base_url() . 'images/siakad-mini.png' ?>" alt="...">
                        <h2 class="brand-text font-size-18">Login Mahasiswa</h2>
                    </div>
                    <form method="post" action="#">
                        <div class="form-group form-material floating" data-plugin="formMaterial">
                            <input type="username" class="form-control" name="username" />
                            <label class="floating-label">Username</label>
                        </div>
                        <div class="form-group form-material floating" data-plugin="formMaterial">
                            <input type="password" class="form-control" name="password" />
                            <label class="floating-label">Password</label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg mt-40">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page -->

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
    <script src="<?php echo base_url() . 'style/global/vendor/jquery-placeholder/jquery.placeholder.js' ?>"></script>

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
    <script src="<?php echo base_url() . 'style/global/js/Plugin/jquery-placeholder.js' ?>"></script>
    <script src="<?php echo base_url() . 'style/global/js/Plugin/material.js' ?>"></script>

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