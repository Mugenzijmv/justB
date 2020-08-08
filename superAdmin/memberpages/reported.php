
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
  
<!-- Mirrored from pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/horizontal-menu-template/app-contacts.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2020 15:34:50 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Admins</title>
    <link rel="apple-touch-icon" href="../../../assets/superAdmin/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../assets/superAdmin/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/superAdmin/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/superAdmin/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/superAdmin/app-assets/vendors/css/tables/extensions/rowReorder.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/superAdmin/app-assets/vendors/css/tables/extensions/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/superAdmin/app-assets/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/superAdmin/app-assets/vendors/css/forms/icheck/custom.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/superAdmin/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/superAdmin/app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/superAdmin/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/superAdmin/app-assets/css/components.min.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/superAdmin/app-assets/css/core/menu/menu-types/horizontal-menu.min.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/superAdmin/app-assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/superAdmin/app-assets/css/pages/app-contacts.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/superAdmin/assets/css/style.css">
	<!-- END: Custom CSS-->
	




    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/forms/quill/quill.snow.css">
    <!-- END: Vendor CSS-->


    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/pages/app-email.min.css">
    <!-- END: Page CSS-->


  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="horizontal-layout horizontal-menu horizontal-menu-padding content-detached-left-sidebar app-contacts " data-open="hover" data-menu="horizontal-menu" data-col="content-detached-left-sidebar">

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
			<!--

<section class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<div class="bug-list-search">
					<div class="bug-list-search-content">
    					<div class="sidebar-toggle d-block d-lg-none"><i class="feather icon-menu font-large-1"></i></div>
						<form action="#">
							<div class="position-relative">
								<input type="search" id="search-contacts" class="form-control" placeholder="Search contacts...">
								<div class="form-control-position">
									<i class="fa fa-search text-size-base text-muted la-rotate-270"></i>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
-->











<section class="row all-contacts">
	<div class="col-12">
		<div class="card">
			<div class="card-head">
				<div class="card-header">
					<h4 class="card-title">All Reported Associations (10)</h4>
				</div>
			</div>
			<div class="card-content">
				<div class="card-body">
					<!-- Task List table -->
					<div class="table-responsive">
						<table id="users-contacts" class="table table-white-space table-xl row-grouping display no-wrap icheck table-middle ">
							<thead>
								<tr>
                  <th>#</th>
									<th>Association</th>
									<th>Admin Email</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
                <tr>
                  <th style="width: 2px;">2</th>
								  <td>
                    <a href="assocMemberships">
                      <p class="mb-25 latest-update-item-name text-bold-600" style="color: red; font-size: 20px;">Jau Solutions <i class="fa fa-question-circle" style="color: red; font-size: 20px;"></i></p>
                    </a>
								  </td>
								  <td class="">
								  	<a class="email" href="assocAdminProfile">eugene@example.com</a>
								  </td>
								  <td class="">
                    <div class="form-group">
                      <a href="assocAdminProfile" type="button" class="btn btn-icon btn-pure light mr-1"><i class="fa fa-eye"></i> View</a>
                    </div>
                  </td>
							  </tr>

                <tr>
                  <th style="width: 2px;">1</th>
								  <td>
                    <a href="assocMemberships">
                      <p class="mb-25 latest-update-item-name text-bold-600" style="color: red; font-size: 20px;">Rwanda Graphic Designers <i class="fa fa-question-circle" ></i></p>
                    </a>
								  </td>
								  <td class="">
								  	<a class="email" href="assocAdminProfile">eugene@example.com</a>
								  </td>
								  <td class="">
                    <div class="form-group">
                      <a href="assocAdminProfile" type="button" class="btn btn-icon btn-pure light mr-1"><i class="fa fa-eye"></i> View</a>
                    </div>
                  </td>
							  </tr>
								
							</tbody>
							<tfoot>
								<tr>
								  <th>#</th>
									<th>Association</th>
									<th>Admin Email</th>
									<th>Action</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



          </div>
        </div>

        <div class="sidebar-detached sidebar-left">
            <div class="sidebar">
                <div class="bug-list-sidebar-content">

                </div>
          </div>
        </div>
        
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
    <script src="../../../assets/superAdmin/app-assets/vendors/js/tables/jquery.dataTables.min.js"></script>
    <script src="../../../assets/superAdmin/app-assets/vendors/js/extensions/jquery.raty.js"></script>
    <script src="../../../assets/superAdmin/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="../../../assets/superAdmin/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="../../../assets/superAdmin/app-assets/vendors/js/tables/datatable/dataTables.rowReorder.min.js"></script>
    <script src="../../../assets/superAdmin/app-assets/vendors/js/forms/icheck/icheck.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../assets/superAdmin/app-assets/js/core/app-menu.min.js"></script>
    <script src="../../../assets/superAdmin/app-assets/js/core/app.min.js"></script>
    <script src="../../../assets/superAdmin/app-assets/js/scripts/customizer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../assets/superAdmin/app-assets/js/scripts/ui/breadcrumbs-with-stats.min.js"></script>
    <script src="../../../assets/superAdmin/app-assets/js/scripts/pages/app-contacts.min.js"></script>
	<!-- END: Page JS-->
	
	<script src="../../../assets/superAdmin/app-assets/vendors/js/forms/quill/quill.js"></script>
	

  </body>
  <!-- END: Body-->

<!-- Mirrored from pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/horizontal-menu-template/app-contacts.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2020 15:34:51 GMT -->
</html>