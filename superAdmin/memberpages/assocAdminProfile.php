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
  
<!-- Mirrored from pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/horizontal-menu-template/page-users-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2020 15:35:55 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Assoc Admin Profile</title>
    <link rel="apple-touch-icon" href="../../../assets/superAdmin/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../assets/superAdmin/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/superAdmin/app-assets/vendors/css/vendors.min.css">
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
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/superAdmin/assets/css/style.css">
    <!-- END: Custom CSS-->

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/superAdmin/app-assets/vendors/css/forms/quill/quill.snow.css">
    <!-- END: Vendor CSS-->


    <!-- BEGIN: Page CSS-->>
    <link rel="stylesheet" type="text/css" href="../../../assets/superAdmin/app-assets/css/pages/app-email.min.css">
    <!-- END: Page CSS-->


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
        <div class="content-body"><!-- users view start -->

        
<section class="users-view">
  <!-- users view media object start -->
  <div class="row">
    <div class="col-12 col-sm-7">
      <div class="media mb-2">
        <a class="mr-1" href="#">
          <img src="../profilesPic/mdesign.jpg" alt="users view avatar" class="users-avatar-shadow rounded-circle" height="64" width="64">
        </a>
        <div class="media-body pt-25">
          <h4 class="media-heading">
            <span class="">Mugenzi  </span>
            <span class="font-medium-1 ">Jean Marie Vianney</span>
          </h4>
          <span class="">Rwanda</span>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-5 px-0 d-flex justify-content-end align-items-center px-1 mb-2">
      <a href="#" class="btn mr-25 border" data-toggle="modal" data-target="#large">
        <i class="feather icon-message-square font-small-3"></i>
        <span>Compose Mail</span> 
      </a>
      <!--
      <a href="#" class="btn btn-sm mr-25 border">Profile</a>
      <a href="../vertical-menu-template/page-users-edit.html" class="btn btn-sm btn-primary">Edit</a>
      -->
    </div>
  </div>
  <!-- users view media object ends -->
  <!-- users view card data start -->
  <div class="card">
    <div class="card-content">
      <div class="card-body">
        <div class="row">
          <div class="col-12 col-md-4">
            <table class="table table-borderless">
              <tbody>
                <tr>
                  <td>Registered:</td>
                  <td>01/01/2019</td>
                </tr>
                <tr>
                  <td>Latest Activity:</td>
                  <td class="users-view-latest-activity">30/04/2019</td>
                </tr>
                <tr>
                  <td>Status:</td>
                  <td><span class="badge badge-success">Active</span></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-12 col-md-8">
            <div class="table-responsive">
              <table class="table mb-0">
                <thead>
                  <tr>
                    <th>Associations</th>
                    <th>Memberssips</th>
                    <th>Role</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Rwanda Graphic Designers</td>
                    <td>20 Members</td>
                    <td>Admin</td>
                  </tr>
                  <tr>
                    <td>Just Between Us Team</td>
                    <td>5 Members</td>
                    <td>Admin</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- users view card data ends -->
  <!-- users view card details start -->
  <div class="card">
    <div class="card-content">
      <div class="card-body">

        <div class="col-12">
          <table class="table table-borderless">
            <tbody>
                <td>Name:</td>
                <td class="users-view-name">Dean Mugenzi jean Marie Vianney</td>
              </tr>
              <tr>
                <td>E-mail:</td>
                <td class="users-view-email">mugenzi jmv@gmail.com</td>
              </tr>


            </tbody>
          </table>

          <h5 class="mb-1"><i class="feather icon-info"></i> Personal Info</h5>
          <table class="table table-borderless mb-0">
            <tbody>
              <tr>
                <td>Birthday:</td>
                <td>03/04/1990</td>
              </tr>
              <tr>
                <td>Country:</td>
                <td>USA</td>
              </tr>
              <tr>
                <td>Contact:</td>
                <td>+(305) 254 24668</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- users view card details ends -->

</section>
<!-- users view ends -->
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
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../assets/superAdmin/app-assets/js/core/app-menu.min.js"></script>
    <script src="../../../assets/superAdmin/app-assets/js/core/app.min.js"></script>
    <script src="../../../assets/superAdmin/app-assets/js/scripts/customizer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../assets/superAdmin/app-assets/js/scripts/ui/breadcrumbs-with-stats.min.js"></script>
    <script src="../../../assets/superAdmin/app-assets/js/scripts/pages/page-users.min.js"></script>
    <!-- END: Page JS-->





  </body>
  <!-- END: Body-->

<!-- Mirrored from pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/horizontal-menu-template/page-users-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2020 15:35:55 GMT -->
</html>







<!-- Compose Mail Modal -->
<div class="modal fade text-left" id="large" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h4 class="modal-title" id="myModalLabel17">Compose Mail</h4>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body">



    <form action="#" id="compose-form">
            <div class="card-content">
                <div class="card-body pt-0">
                    <div class="form-group pb-50">
                        <label for="emailfrom">from</label>
                        <input type="text" id="emailfrom" class="form-control" placeholder="user@example.com" disabled value="Just Between Us Team">
                    </div>
                    <div class="form-label-group mb-1">
                      <label for="emailfrom">To</label>
                      <input type="text" id="emailfrom" class="form-control" placeholder="user@example.com" disabled value="mugenzijmv@gmail.com">
                    </div>

                    <div class="form-label-group mb-1">
                      <fieldset class="form-group">
                          <label for="descTextarea">Write a message</label>
                          <textarea class="form-control" id="descTextarea" rows="3"  placeholder="Textarea with description"></textarea>
                      </fieldset>
                    </div>
                </div>
            </div>
            <div class="card-footer border-0 d-flex justify-content-end pt-0">
                <button type="reset" class="btn btn-secondary cancel-btn mr-1">
                    <i class='feather icon-x mr-25'></i>
                    <span class="d-sm-inline d-none"  data-dismiss="modal">Cancel</span>
                </button>
                <button type="submit" class="btn-send btn btn-danger btn-glow">
                    <i class='feather icon-play mr-25'></i> <span class="d-sm-inline d-none">Send</span>
                </button>
            </div>
        </form>
        <!-- form start end-->


	  </div>
	</div>
  </div>
</div>