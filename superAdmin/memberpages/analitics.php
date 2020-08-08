<!DOCTYPE html>
<!--
Template Name: Stack - Stack - Bootstrap 4 Admin Template
Author: PixInvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://1.envato.market/stack_admin
Renew Support: https://1.envato.market/stack_admin
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  
<!-- Mirrored from pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/horizontal-menu-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2020 12:35:29 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Analytics Dashboard - Stack Responsive Bootstrap 4 Admin Template</title>
    <link rel="apple-touch-icon" href="../../../assets/superAdmin/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../assets/superAdmin/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/superAdmin/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/superAdmin/app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/superAdmin/app-assets/vendors/css/charts/morris.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/superAdmin/app-assets/vendors/css/extensions/unslider.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/superAdmin/app-assets/vendors/css/weather-icons/climacons.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/superAdmin/app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/superAdmin/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/superAdmin/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/superAdmin/app-assets/css/components.min.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/superAdmin/app-assets/css/core/menu/menu-types/horizontal-menu.min.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/superAdmin/app-assets/css/core/colors/palette-gradient.min.css">
    <!-- link(rel='stylesheet', type='text/css', href=app_assets_path+'/css'+rtl+'/pages/users.css')-->
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/superAdmin/assets/css/style.css">
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="horizontal-layout horizontal-menu horizontal-menu-padding 2-columns  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns">


    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-static-top navbar-dark navbar-border navbar-brand-center" style="background-color: #444">
    <?php
    // including navbar
       include_once 'includes/navBar.php';
    ?>
    </nav>
    <!-- END: Header-->



    <!-- BEGIN: Main Menu-->
    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-light navbar-without-dd-arrow navbar-shadow menu-border" role="navigation" data-menu="menu-wrapper">
    <?php
    // including navbar
       include_once 'includes/menuBar.php';
    ?>
    </div>
    <!-- END: Main Menu-->


    <!-- BEGIN: Content-->
    <div class="app-content container center-layout mt-2">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">


<!--/ Analitics -->
<div class="row">
    <div class="col-lg-12 col-md-12 col-12">
        <div class="card">
            <div class="card-header border-0-bottom">
                <h4 class="card-title">Visitors Overview</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
                        <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="row my-1">
                        <div class="col-lg-4 col-12">
                            <div class="text-center">
                                <h3>23,454</h3>
                                <p class="text-muted">Page Views <span class="success"><i class="feather icon-arrow-up"></i> 8.16%</span></p>
                                <div id="sp-tristate-bar-total-revenue"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="text-center">
                                <h3>6,630</h3>
                                <p class="text-muted">Unique Visitor <span class="danger"><i class="feather icon-arrow-down"></i> 2.30%</span></p>
                                <div id="sp-stacked-bar-total-sales"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="text-center">
                                <h3>86,578</h3>
                                <p class="text-muted">Total Visits <span class="warning"><i class="feather icon-arrow-up"></i> 4.27%</span></p>
                                <div id="sp-bar-total-cost"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Analytics spakline & chartjs  -->

        </div>
      </div>
    </div>
    <!-- END: Content-->



   <!-- BEGIN: Customizer-->
    <?php
       // including Customizer
       include_once 'includes/Customizer.php';
    ?>
    <!-- END: Customizer-->



    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light navbar-shadow">
    <?php
    // including footer
       include_once 'includes/footer.php';
    ?>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="../../../assets/superAdmin/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../assets/superAdmin/app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <script src="../../../assets/superAdmin/app-assets/vendors/js/charts/jquery.sparkline.min.js"></script>
    <script src="../../../assets/superAdmin/app-assets/vendors/js/extensions/jquery.knob.min.js"></script>
    <script src="../../../assets/superAdmin/app-assets/js/scripts/extensions/knob.min.js"></script>
    <script src="../../../assets/superAdmin/app-assets/vendors/js/charts/raphael-min.js"></script>
    <script src="../../../assets/superAdmin/app-assets/vendors/js/charts/morris.min.js"></script>
    <script src="../../../assets/superAdmin/app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="../../../assets/superAdmin/app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js"></script>
    <script src="../../../assets/superAdmin/app-assets/data/jvector/visitor-data.js"></script>
    <script src="../../../assets/superAdmin/app-assets/vendors/js/charts/chart.min.js"></script>
    <script src="../../../assets/superAdmin/app-assets/vendors/js/charts/jquery.sparkline.min.js"></script>
    <script src="../../../assets/superAdmin/app-assets/vendors/js/extensions/unslider-min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../../assets/superAdmin/app-assets/css/core/colors/palette-climacon.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/superAdmin/app-assets/fonts/simple-line-icons/style.min.css">
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../assets/superAdmin/app-assets/js/core/app-menu.min.js"></script>
    <script src="../../../assets/superAdmin/app-assets/js/core/app.min.js"></script>
    <script src="../../../assets/superAdmin/app-assets/js/scripts/customizer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../assets/superAdmin/app-assets/js/scripts/ui/breadcrumbs-with-stats.min.js"></script>
    <script src="../../../assets/superAdmin/app-assets/js/scripts/pages/dashboard-analytics.min.js"></script>
    <!-- END: Page JS-->

  </body>
  <!-- END: Body-->

<!-- Mirrored from pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/horizontal-menu-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2020 12:42:38 GMT -->
</html>