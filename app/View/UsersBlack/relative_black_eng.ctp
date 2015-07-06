<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>LAN/TAM Black</title>
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
    <link rel="shortcut icon" href="<?php echo Router::url('/', true).'/app/webroot/img/favicon.png' ?>">
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
    
    <!-- END SIDEBAR -->
    <!-- END SIDEBPANEL-->
    <!-- START PAGE-CONTAINER -->
    <div  style="background: lightgray; min-height: 100%;">
    <div class="page-container" style="background: lightgray;">
      <!-- START HEADER -->
      
      <!-- END HEADER -->
      <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper">
        <!-- START PAGE CONTENT -->
        <div class="content sm-gutter" style="padding-top: 0;">
          <!-- START CONTAINER FLUID -->
          <div class="container-fluid padding-25 sm-padding-10" style="padding-top:0px;">
            <!-- START ROW -->
              <div id="content">
                  
                  <div class="col-sm-2"></div>
                    <div class="col-sm-8" style="background: white; border: 1px solid rgba(230, 230, 230, 0.7); padding: 0px;">
                        <div style="background: #21252d; height: 60px;">
                            <div>
                                <div style="padding-top: 15px; padding-left: 30px;">
                                <img src="<?php echo Router::url('/', true).'/app/webroot/assets/img/logo_white.png' ?>" alt="logo" data-src="<?php echo Router::url('/', true).'/app/webroot/assets/img/logo_white.png' ?>" data-src-retina="<?php echo Router::url('/', true).'/app/webroot/assets/img/logo_white.png' ?>" width="120" height="30">
                              </div>
                            </div>
                        </div>
                        <?php echo $this->Session->flash(); ?>
                           <br>
                        <div style="padding-left: 35px;padding-right: 35px;">
                                <div class="vd_panel-header">
                                    <h1>Relatives</h1>
                                </div>
                            <table class="table table-hover demo-table-search">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">Name</th>
                                        <th style="text-align: center;">E-mail</th>
                                        <th style="text-align: center;">Relative Type</th>
                                        <th style="text-align: center;">Observation</th>
                                        <th style="text-align: center;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($relatives as $relative){ ?>
                                    <tr>
                                        <td style="text-align: center;"><?php echo $relative['Relative']['name'] ?></td>
                                        <td style="text-align: center;"><?php echo $relative['Relative']['email'] ?></td>
                                        <td style="text-align: center;"><?php if($relative['Relative']['relativeType']=="Hijo/a") { echo "Son/Daughter"; } elseif($relative['Relative']['relativeType']=="Esposo/a") { echo "Husband/Wife"; } elseif($relative['Relative']['relativeType']=="Padre") { echo "Father"; }elseif($relative['Relative']['relativeType']=="Cónyuge") { echo "Spouse"; } elseif($relative['Relative']['relativeType']=="Madre") { echo "Mother"; } elseif($relative['Relative']['relativeType']=="Otro") { echo "Other"; } ?></td>
                                        <td style="text-align: center;"><?php echo $relative['Relative']['observation'] ?></td>
                                        <td class="userBlack-action" style="width:15%;">
                                            <div style="width: 140px;">  
                                            <a style="margin-left: 16px; padding-left: 16px;" ></a>
                                              <a data-original-title="Editar" data-toggle="tooltip" data-placement="top" class="btn userBlack-icon vd_bd-yellow vd_yellow" href="<?php echo $this->Html->url(array('controller' => 'relatives', 'action' => 'editFromUserEng',$relative['Relative']['idRelative'],$idBlack)) ?>"> <i class="fa fa-pencil"></i> </a>
                                              <form action="<?php echo $this->Html->url(array('controller' => 'relatives', 'action' => 'deleteFromUserEng',$relative['Relative']['idRelative'],$idBlack)) ?>" name="post_deleteRow<?php echo $relative['Relative']['idRelative'] ?>" id="post_deleteRow<?php echo $relative['Relative']['idRelative'] ?>" style="display:none;" method="post">
                                                    <input type="hidden" name="_method" value="POST">
                                                </form>
                                                <a data-original-title="Borrar"  data-toggle="tooltip" data-placement="top" href="#" onclick="if (confirm(&quot;¿Are you sure you want to delete the relative: <?php echo $relative['Relative']['name'] ?> ?&quot;)) { document.post_deleteRow<?php echo $relative['Relative']['idRelative'] ?>.submit(); } event.returnValue = false; return false;"  class="btn userBlack-icon vd_bd-red vd_red" href=""><i class="glyphicon glyphicon-trash"></i></a>
                                            </div>
                                            </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <a href="<?php echo $this->Html->url(array('controller' => 'relatives', 'action' => 'addFromUserEng', $idBlack)) ?>" class="btn btn-info start" style="margin: 10px;margin-left: 70px;"> <i class="glyphicon glyphicon-plus"></i> <span> Add relative</span> </a>
                        <a href="<?php echo $this->Html->url(array('controller' => 'UsersBlack', 'action' => 'finishEng', $idBlack)) ?>" class="btn btn-info start"> <i class="glyphicon glyphicon-upload"></i> <span> Finish</span> </a>
                    </div>
                    <div class="col-sm-2"></div>
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
      <!-- END PAGE CONTENT WRAPPER -->
    </div>
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