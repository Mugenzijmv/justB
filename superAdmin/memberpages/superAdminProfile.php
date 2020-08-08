
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
  
<!-- Mirrored from pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/horizontal-menu-template/page-users-edit.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2020 15:35:55 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Users Edit - Stack Responsive Bootstrap 4 Admin Template</title>
    <link rel="apple-touch-icon" href="../../../assets/superAdmin/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../assets/superAdmin/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/superAdmin/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/superAdmin/app-assets/css/plugins/forms/validation/form-validation.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/superAdmin/app-assets/vendors/css/forms/selects/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/superAdmin/app-assets/vendors/css/pickers/pickadate/pickadate.css">
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
    <link rel="stylesheet" type="text/css" href="../../../assets/superAdmin/app-assets/css/pages/page-users.min.css">
    <!-- END: Page -->

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
        <!-- users edit start -->

<section class="users-edit">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <ul class="nav nav-tabs mb-2" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab"
                            href="#account" aria-controls="account" role="tab" aria-selected="true">
                            <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">Account</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" id="information-tab" data-toggle="tab"
                            href="#information" aria-controls="information" role="tab" aria-selected="false">
                            <i class="feather icon-info mr-25"></i><span class="d-none d-sm-block">Information</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                        <!-- users edit media object start -->
                        <div class="media mb-2">
                            <a class="mr-2" href="#">
                                <img src="../profilesPic/mdesign.jpg" alt="users avatar"
                                    class="users-avatar-shadow rounded-circle" height="64" width="64">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Mugenzi jmv</h4>
                                <div class="col-12 px-0 d-flex">
                                    <a href="#" class="btn btn-primary mr-25">Change</a>
                                </div>
                            </div>
                        </div>
                        <!-- users edit media object ends -->
                        <!-- users edit account form start -->
                        <form novalidate>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Names</label>
                                            <input type="text" class="form-control" placeholder="Name"
                                                value="Mugenzi jean Marie Vianney" required
                                                data-validation-required-message="This name field is required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>E-mail</label>
                                            <input type="email" class="form-control" placeholder="Email"
                                                value="mugenzijmv@gmail.com" required
                                                data-validation-required-message="This email field is required">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Role</label>
                                        <select class="form-control">
                                            <option>Super Admin</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Company</label>
                                        <input type="text" class="form-control" placeholder="Just BetweeN Us">
                                    </div>
                                </div>
                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                        changes</button>
                                    <button type="reset" class="btn btn-light">Cancel</button>
                                </div>
                            </div>
                        </form>
                        <!-- users edit account form ends -->
                    </div>

                    <div class="tab-pane" id="information" aria-labelledby="information-tab" role="tabpanel">
                        <!-- users edit Info form start -->
                        <form novalidate>
                            <div class="row">
                                <div class="col-12 col-sm-6 mt-1 mt-sm-0">
                                    <div class="form-group">
                                        <div class="controls position-relative">
                                            <label>Birth date</label>
                                            <input type="text" class="form-control birthdate-picker" required
                                                placeholder="Birth date"
                                                data-validation-required-message="This birthdate field is required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Country</label>
                                        <select class="form-control" id="accountSelect">
                                            <option>USA</option>
                                            <option>India</option>
                                            <option>Canada</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 mt-1 mt-sm-0">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Phone</label>
                                            <input type="text" class="form-control" required placeholder="Phone number"
                                                value="(+656) 254 2568"
                                                data-validation-required-message="This phone number field is required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Address</label>
                                            <input type="text" class="form-control" placeholder="Address"
                                                data-validation-required-message="This Address field is required">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                        changes</button>
                                    <button type="reset" class="btn btn-light">Cancel</button>
                                </div>
                            </div>
                        </form>
                        <!-- users edit Info form ends -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- users edit ends -->
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
    <script src="../../../assets/superAdmin/app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="../../../assets/superAdmin/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
    <script src="../../../assets/superAdmin/app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="../../../assets/superAdmin/app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../assets/superAdmin/app-assets/js/core/app-menu.min.js"></script>
    <script src="../../../assets/superAdmin/app-assets/js/core/app.min.js"></script>
    <script src="../../../assets/superAdmin/app-assets/js/scripts/customizer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../assets/superAdmin/app-assets/js/scripts/ui/breadcrumbs-with-stats.min.js"></script>
    <script src="../../../assets/superAdmin/app-assets/js/scripts/pages/page-users.min.js"></script>
    <script src="../../../assets/superAdmin/app-assets/js/scripts/navs/navs.min.js"></script>
    <!-- END: Page JS-->

  </body>
  <!-- END: Body-->

<!-- Mirrored from pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/horizontal-menu-template/page-users-edit.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2020 15:35:56 GMT -->
</html>