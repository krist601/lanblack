<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>LAN Menú</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!--<link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />-->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <?php echo $this->Html->css('../assets/plugins/pace/pace-theme-flash.css'); ?>
    <?php echo $this->Html->css('../assets/plugins/boostrapv3/css/bootstrap.min.css'); ?>
    <?php echo $this->Html->css('../assets/plugins/font-awesome/css/font-awesome.css'); ?>
    <?php echo $this->Html->css('../assets/plugins/jquery-scrollbar/jquery.scrollbar.css'); ?>
    <?php echo $this->Html->css('../assets/plugins/bootstrap-select2/select2.css'); ?>
    <?php echo $this->Html->css('../assets/plugins/switchery/css/switchery.min.css'); ?>
    <?php echo $this->Html->css('../assets/plugins/mapplic/css/mapplic.css'); ?>
    <?php echo $this->Html->css('../assets/plugins/rickshaw/rickshaw.min.css'); ?>
    <?php echo $this->Html->css('../assets/plugins/bootstrap-datepicker/css/datepicker3.css'); ?>
    <?php echo $this->Html->css('../assets/plugins/jquery-metrojs/MetroJs.css'); ?>
    <?php echo $this->Html->css('../pages/css/pages-icons.css'); ?>
    <?php echo $this->Html->css('../pages/css/pages.css'); ?>
    <?php echo $this->Html->css('../assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css'); ?>
    <?php echo $this->Html->css('../assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css'); ?>
    
    <?php echo $this->Html->css('../assets/plugins/summernote/css/summernote.css'); ?>
    <?php echo $this->Html->css('../assets/plugins/bootstrap-tag/bootstrap-tagsinput.css'); ?>
    <?php echo $this->Html->css('../assets/plugins/dropzone/css/dropzone.css'); ?>
    <?php echo $this->Html->css('../assets/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.min.css'); ?>
    <!--[if lte IE 9]>
        <?php echo $this->Html->css('../pages/css/ie9.css'); ?>
    <![endif]-->
    <!--[if lt IE 9]>
        <?php echo $this->Html->css('../assets/plugins/mapplic/css/mapplic-ie.css'); ?>
    <![endif]-->
    <script type="text/javascript">
    window.onload = function()
    {
      // fix for windows 8
      if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
        document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="pages/css/windows.chrome.fix.css" />'
    }
    </script>
  </head>
  <body class="fixed-header  dashboard ">
    <!-- BEGIN SIDEBPANEL-->
    <nav class="page-sidebar" data-pages="sidebar">
      <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
      
      <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
      <!-- BEGIN SIDEBAR MENU HEADER-->
      <div class="sidebar-header">
        <img src="<?php echo Router::url('/', true).'/app/webroot/assets/img/logo_white.png' ?>" alt="logo" class="brand" data-src="<?php echo Router::url('/', true).'/app/webroot/assets/img/logo_white.png' ?>" data-src-retina="<?php echo Router::url('/', true).'/app/webroot/assets/img/logo_white.png' ?>" width="120" height="30">
        <div class="sidebar-header-controls">
          <button type="button" class="btn btn-link visible-lg-inline" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
          </button>
        </div>
      </div>
      <!-- END SIDEBAR MENU HEADER-->
      <!-- START SIDEBAR MENU -->
      <div class="sidebar-menu">
        <!-- BEGIN SIDEBAR MENU ITEMS-->
        <ul class="menu-items">
          <li class="m-t-30 <?php if($screenName=='home'){echo 'open';} ?>">
            <a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'home')) ?>">
              <span class="title">Dashboard</span>
            </a>
            <span class="icon-thumbnail <?php if($screenName=='home'){echo 'bg-success';} ?>"><i class="pg-home"></i></span>
          </li>
          <?php if($userRole=="Admin"){?>
            <li class="<?php if($screenName=='user'){echo 'open';} ?>">
              <a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'index')) ?>"><span class="title">Usuarios</span></a>
              <span class="icon-thumbnail <?php if($screenName=='user'){echo 'bg-success';} ?>"><i class="fs-14 fa fa-users"></i></span>
            </li>
            <?php } ?>
          
        </ul>
        <div class="clearfix"></div>
      </div>
      <!-- END SIDEBAR MENU -->
    </nav>
    <!-- END SIDEBAR -->
    <!-- END SIDEBPANEL-->
    <!-- START PAGE-CONTAINER -->
    <div class="page-container">
      <!-- START HEADER -->
      <div class="header ">
        <!-- START MOBILE CONTROLS -->
        <!-- LEFT SIDE -->
        <div class="pull-left full-height visible-sm visible-xs">
          <!-- START ACTION BAR -->
          <div class="sm-action-bar">
            <a href="#" class="btn-link toggle-sidebar" data-toggle="sidebar">
              <span class="icon-set menu-hambuger"></span>
            </a>
          </div>
          <!-- END ACTION BAR -->
        </div>
        <!-- RIGHT SIDE -->
        <div class="pull-right full-height visible-sm visible-xs">
          <!-- START ACTION BAR -->
          <div class="sm-action-bar">
            <a href="#" class="btn-link" data-toggle="quickview" data-toggle-element="#quickview">
              <span class="icon-set menu-hambuger-plus"></span>
            </a>
          </div>
          <!-- END ACTION BAR -->
        </div>
        <!-- END MOBILE CONTROLS -->
        <div class=" pull-left sm-table">
          <div class="header-inner">
            <div class="brand inline">
              <img src="<?php echo Router::url('/', true).'/app/webroot/img/logoLAN.png' ?>" alt="logo" data-src="<?php echo Router::url('/', true).'/app/webroot/img/logoLAN.png' ?>" data-src-retina="<?php echo Router::url('/', true).'/app/webroot/img/logoLAN.png' ?>" width="120" height="30">
            </div>
            </div>
        </div>
        <div class=" pull-right">
          <!-- START User Info-->
          <div class="visible-lg visible-md m-t-10">
            <div class="pull-left p-r-10 p-t-10 fs-16 font-heading">
              <span class="semi-bold"><?php echo $username ?></span>
            </div>
            <div class="dropdown pull-right">
              <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="thumbnail-wrapper d32 circular inline m-t-5">
                <img src="<?php if(isset($imgPath)){echo $imgPath;}else{echo Router::url('/', true).'/app/webroot/assets/img/user.png';} ?>" alt="" data-src="<?php if(isset($imgPath)){echo $imgPath;}else{echo Router::url('/', true).'/app/webroot/assets/img/user.png';} ?>" data-src-retina="<?php if(isset($imgPath)){echo $imgPath;}else{echo Router::url('/', true).'/app/webroot/assets/img/user.png';} ?>" width="32" height="32">
            </span>
              </button>
              <ul class="dropdown-menu profile-dropdown" role="menu">
                <li><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'view',$idUser)) ?>"><i class="fs-14 fa fa-gear"></i> Mi Perfil</a>
                </li>
                <li class="bg-master-lighter">
                  <a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'logout')) ?>" class="clearfix">
                    <span class="pull-left">Salir</span>
                    <span class="pull-right"><i class="pg-power"></i></span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <!-- END User Info-->
        </div>
      </div>
      <!-- END HEADER -->
      <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper">
        <!-- START PAGE CONTENT -->
        <div class="content sm-gutter" style="padding-top: 0;">
          <!-- START CONTAINER FLUID -->
          <div class="container-fluid padding-25 sm-padding-10" style="padding-top:0px;">
            <!-- START ROW -->
              <div id="content">
                  <br><br><br>
                <?php echo $this->Session->flash(); ?>
                <?php echo $this->fetch('content'); ?>
              </div>
            <div class="row" hidden="true">
              <div class="col-md-4 m-b-10">
                <div class="widget-14-chart-legend bg-transparent text-black no-padding pull-right"></div>
                <div class="widget-14-chart rickshaw-chart top-left top-right bottom-left bottom-right"></div>
              </div>
            </div>
          </div>
          <!-- END CONTAINER FLUID -->
        </div>
        <!-- END PAGE CONTENT -->
        <!-- START COPYRIGHT -->
        <!-- START CONTAINER FLUID -->
        
        <!-- END COPYRIGHT -->
      </div>
        <div class="container-fluid container-fixed-lg footer">
            <div class="copyright sm-text-center">
              <p class="small no-margin pull-left sm-pull-reset">
                <span class="hint-text">Copyright © 2015 </span>
                <span class="font-montserrat">SocialBrand</span>.
                <span class="hint-text">Todos los derechos Reservados. </span>
              </p>
              <p class="small no-margin pull-right sm-pull-reset">
                <span class="hint-text"> Visitanos en: </span><a href="http://www.socialbrand.cl">socialbrand.cl </a>
              </p>
              <div class="clearfix"></div>
            </div>
          </div>
      <!-- END PAGE CONTENT WRAPPER -->
    </div>
    
    <script>
        function hola(channel){
            $("#siteloader").load('<?php echo $this->Html->url(array('controller' => 'programs', 'action' => 'programs')) ?>/'+channel);
        }
    </script>
    <script>
        function chao(channel){
            $("#siteloader2").load('<?php echo $this->Html->url(array('controller' => 'programs', 'action' => 'programName')) ?>/'+channel);
        }
    </script>
    <!-- END OVERLAY -->
    <!-- BEGIN VENDOR JS -->
      <?php echo $this->Html->script('../assets/plugins/pace/pace.min.js'); ?>
      <?php echo $this->Html->script('../assets/plugins/jquery/jquery-1.11.1.min.js'); ?>
      <?php echo $this->Html->script('../assets/plugins/modernizr.custom.js'); ?>
      <?php echo $this->Html->script('../assets/plugins/jquery-ui/jquery-ui.min.js'); ?>
      <?php echo $this->Html->script('../assets/plugins/boostrapv3/js/bootstrap.min.js'); ?>
      <?php echo $this->Html->script('../assets/plugins/jquery/jquery-easy.js'); ?>
      <?php echo $this->Html->script('../assets/plugins/jquery-unveil/jquery.unveil.min.js'); ?>
      <?php echo $this->Html->script('../assets/plugins/jquery-bez/jquery.bez.min.js'); ?>
      <?php echo $this->Html->script('../assets/plugins/jquery-ios-list/jquery.ioslist.min.js'); ?>
      <?php echo $this->Html->script('../assets/plugins/jquery-actual/jquery.actual.min.js'); ?>
      <?php echo $this->Html->script('../assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js'); ?>
      <?php echo $this->Html->script('../assets/plugins/bootstrap-select2/select2.min.js'); ?>
      <?php echo $this->Html->script('../assets/plugins/classie/classie.js'); ?>
      <?php echo $this->Html->script('../assets/plugins/switchery/js/switchery.min.js'); ?>
      <?php echo $this->Html->script('../assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js'); ?>
      <?php echo $this->Html->script('../assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js'); ?>
      <?php echo $this->Html->script('../assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js'); ?>
      <?php echo $this->Html->script('../assets/plugins/datatables-responsive/js/datatables.responsive.js'); ?>
      <?php echo $this->Html->script('../assets/plugins/datatables-responsive/js/lodash.min.js'); ?>
      <?php echo $this->Html->script('../assets/plugins/bootstrap-daterangepicker/daterangepicker.js'); ?>
      <?php echo $this->Html->script('../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js'); ?>
        
    <?php echo $this->Html->script('../assets/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.all.min.js'); ?>
    <?php echo $this->Html->script('../assets/plugins/jquery-autonumeric/autoNumeric.js'); ?>
    <?php echo $this->Html->script('../assets/plugins/dropzone/dropzone.min.js'); ?>
    <?php echo $this->Html->script('../assets/plugins/jquery-inputmask/jquery.inputmask.min.js'); ?>
    <?php echo $this->Html->script('../assets/plugins/boostrap-form-wizard/js/jquery.bootstrap.wizard.min.js'); ?>
    <?php echo $this->Html->script('../assets/plugins/jquery-validation/js/jquery.validate.min.js'); ?>
    
    <?php echo $this->Html->script('../assets/plugins/summernote/js/summernote.min.js'); ?>
    <?php echo $this->Html->script('../assets/plugins/moment/moment.min.js'); ?>
    <?php echo $this->Html->script('../assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js'); ?>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
      <?php echo $this->Html->script('../pages/js/pages.min.js'); ?>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
      <?php echo $this->Html->script('../assets/js/form_elements.js'); ?>
      <?php echo $this->Html->script('../assets/js/datatables.js'); ?>
      <?php echo $this->Html->script('../assets/js/scripts.js'); ?>
  </body>
</html>