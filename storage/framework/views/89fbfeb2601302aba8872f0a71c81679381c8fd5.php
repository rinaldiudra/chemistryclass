<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Chemistry Class</title>

  <!-- Favicons -->
  <link href="<?php echo e(asset('admin/img/favicon.png')); ?>" rel="icon">
  <link href="<?php echo e(asset('admin/img/apple-touch-icon.png')); ?>" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo e(asset('admin/lib/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <!--external css-->
  <link href="<?php echo e(asset('admin/lib/font-awesome/css/font-awesome.css')); ?>" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="<?php echo e(asset('admin/css/style.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('admin/css/style-responsive.css')); ?>" rel="stylesheet">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>CHEMISTRY<span>CLASS</span></b></a>
      <!--logo end-->
      
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.html">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <li class="mt">
            <a href="#">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>UI Elements</span>
              </a>
            <ul class="sub">
              <li><a href="general.html">General</a></li>
              <li><a href="buttons.html">Buttons</a></li>
              <li><a href="panels.html">Panels</a></li>
              <li><a href="font_awesome.html">Font Awesome</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Components</span>
              </a>
            <ul class="sub">
              <li><a href="grids.html">Grids</a></li>
              <li><a href="calendar.html">Calendar</a></li>
              <li><a href="gallery.html">Gallery</a></li>
              <li><a href="todo_list.html">Todo List</a></li>
              <li><a href="dropzone.html">Dropzone File Upload</a></li>
              <li><a href="inline_editor.html">Inline Editor</a></li>
              <li><a href="file_upload.html">Multiple File Upload</a></li>
            </ul>
          </li>
         </ul> 
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <?php echo $__env->yieldContent('content'); ?>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="blank.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="<?php echo e(asset('admin/lib/jquery/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('admin/lib/bootstrap/js/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('admin/lib/jquery-ui-1.9.2.custom.min.js')); ?>"></script>
  <script src="<?php echo e(asset('admin/lib/jquery.ui.touch-punch.min.js')); ?>"></script>
  <script class="include" type="text/javascript" src="<?php echo e(asset('admin/lib/jquery.dcjqaccordion.2.7.js')); ?>"></script>
  <script src="<?php echo e(asset('admin/lib/jquery.scrollTo.min.js')); ?>"></script>
  <script src="<?php echo e(asset('admin/lib/jquery.nicescroll.js')); ?>" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="<?php echo e(asset('admin/lib/common-scripts.js')); ?>"></script>
  <!--script for this page-->

</body>

</html>
<?php /**PATH C:\xampp\htdocs\chemistryclass\resources\views/layout/layout_admin.blade.php ENDPATH**/ ?>