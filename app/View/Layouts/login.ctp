<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>LAN/TAM Menú - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
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
    <?php echo $this->Html->css('../pages/css/pages-icons.css'); ?>
    <?php echo $this->Html->css('../pages/css/pages.css'); ?>
    <!--[if lte IE 9]>
        <?php echo $this->Html->css('../pages/css/ie9.css'); ?>
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
  <body class="fixed-header   ">
    <!-- START PAGE-CONTAINER -->
    <div class="login-wrapper ">
      <!-- START Login Background Pic Wrapper-->
      <div class="bg-pic">
        <!-- START Background Pic-->
        <img src="<?php echo Router::url('/', true).'/app/webroot/assets/img/demo/channels.jpg' ?>" data-src="<?php echo Router::url('/', true).'/app/webroot/assets/img/demo/channels.jpg' ?>" data-src-retina="<?php echo Router::url('/', true).'/app/webroot/assets/img/demo/channels.jpg' ?>" alt="" class="lazy">
        <!-- END Background Pic-->
        <!-- START Background Caption-->
        
        <!-- END Background Caption-->
      </div>
      <!-- END Login Background Pic Wrapper-->
      <!-- START Login Right Container-->
      <div class="login-container bg-white">
        <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
          <img src="<?php echo Router::url('/', true).'/app/webroot/assets/img/logo.png' ?>" alt="logo" data-src="<?php echo Router::url('/', true).'/app/webroot/assets/img/logo.png' ?>" data-src-retina="<?php echo Router::url('/', true).'/app/webroot/assets/img/logo.png' ?>" width="120" height="30">
          <p class="p-t-35"><?php echo $textVar ?></p>
          <!-- START Login Form -->
            <div id="content">

                <?php echo $this->Session->flash(); ?>

                <?php echo $this->fetch('content'); ?>
            </div>
          <!--END Login Form-->
        </div>
      </div>
      <!-- END Login Right Container-->
    </div>
    <!-- END PAGE CONTAINER -->
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
    <?php echo $this->Html->script('../assets/plugins/jquery-validation/js/jquery.validate.min.js'); ?>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <?php echo $this->Html->script('../pages/js/pages.min.js'); ?>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <?php echo $this->Html->script('../assets/js/scripts.js'); ?>
    <!-- END PAGE LEVEL JS -->
    <script>
    $(function()
    {
      $('#form-login').validate()
    })
    </script>
  </body>
</html>