<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>LAN Black</title>
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
    <div  style="background: lightgray; min-height: 100%">
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
                  
                  <div class="col-sm-3"></div>
                    <div class="col-sm-6" style="background: white; border: 1px solid rgba(230, 230, 230, 0.7); padding: 0px;">
                        <div style="background: #21252d; height: 90px;">
                            <div>
                                <div style="padding-top: 15px; padding-left: 30px;">
                                <img src="<?php echo Router::url('/', true).'/app/webroot/assets/img/logo_white.png' ?>" alt="logo" data-src="<?php echo Router::url('/', true).'/app/webroot/assets/img/logo_white.png' ?>" data-src-retina="<?php echo Router::url('/', true).'/app/webroot/assets/img/logo_white.png' ?>" width="240" height="60">
                              </div>
                            </div>
                        </div>
                        <div style="padding-left: 35px;padding-right: 35px;">
                        <?php echo $this->Session->flash(); ?>
                            <?php echo $this->Form->create('UserBlack',array("name"=>"Form","onsubmit"=>"return validateForm()")); ?>
                           <br>
                           Bem-vindo aos Serviços Especiais, Preto membro benefício exclusivo que irá ajudá-lo durante a sua viagem, você e seu grupo familiar imediato.
                                <div class="vd_panel-header">
                                    <h1>Dados Pessoais</h1>
                                </div>
                                <div style="padding-top: 0px; padding-left: 30px;">
			                        Nós convidamos você para completar ou atualizar os seus dados pessoais para que possamos manter contato e ajudá-lo com tudo que você precisa.
                                </div>
                           <div class="form-group form-group-default" aria-required="true">
                                <?php echo $this->Form->input('identifier', array('label' => 'R.G./Cédula de Identidade', 'class' => 'form-control'));?>
                           </div>
                           <div class="form-group form-group-default" aria-required="true">
                                <?php echo $this->Form->input('name', array('label' => 'Nome', 'class' => 'form-control'));?>
                           </div>
                           <div class="form-group form-group-default" aria-required="true">
                                <?php echo $this->Form->input('fathersLastName', array('label' => 'Sobrenome Paterno', 'class' => 'form-control'));?>
                           </div>
                           <div class="form-group form-group-default" aria-required="true">
                                <?php echo $this->Form->input('mothersLastName', array('label' => 'Sobrenome Materno', 'class' => 'form-control'));?>
                           </div>
                           <div class="form-group form-group-default" aria-required="true">
                                <?php echo $this->Form->input('nationality', array('label' => 'Nacionalidade', 'class' => 'form-control'));?>
                           </div>
                           <div class="form-group form-group-default" aria-required="true">
                                <?php echo $this->Form->input('email', array('label' => 'Email', 'class' => 'form-control'));?>
                           </div>
                           <div class="form-group form-group-default" aria-required="true">
                                <?php echo $this->Form->input('celPhone', array('label' => 'Telf. Celular', 'class' => 'form-control'));?>
                           </div>
                           <div class="form-group form-group-default" aria-required="true">
                                <?php echo $this->Form->input('officePhone', array('label' => 'Telf. Escritório', 'class' => 'form-control'));?>
                           </div>
                           <div class="form-group form-group-default" aria-required="true">
                                <?php echo $this->Form->input('homePhone', array('label' => 'Telf. Particular', 'class' => 'form-control'));?>
                           </div>
                           <div class="form-group form-group-default" aria-required="true">
                                <?php echo $this->Form->input('secretaryName', array('label' => 'Nombre Secretaria', 'class' => 'form-control'));?>
                           </div>
                           <div class="form-group form-group-default" aria-required="true">
                                <?php echo $this->Form->input('secretaryEmail', array('label' => 'Correo Secretaria', 'class' => 'form-control'));?>
                           </div>
                           <div class="form-group form-group-default" aria-required="true">
                                <?php echo $this->Form->input('secretaryPhone', array('label' => 'Telf. Secretaria', 'class' => 'form-control'));?>
                           </div>
                           <div class="form-group form-group-default" aria-required="true">
                                <?php echo $this->Form->input('businessCabinPref', array('label' => 'Preferred Seat (Economy)', 'class' => 'form-control',
                                    'options' => array(''=>'Selecione uma opção...','Primera Fila' => 'Primeira Linha', 'Salida de Emergencias' => 'Saída de emergência')
                                ));?>
                           </div>
                           <div class="form-group form-group-default" aria-required="true">
                                <?php echo $this->Form->input('economyCabinPref', array('label' => 'Preferred Seat (Business)', 'class' => 'form-control',
                                    'options' => array(''=>'Selecione uma opção...','Ventana' => 'Janela', 'Pasillo' => 'Corredor')
                                ));?>
                           </div>
                           <div class="form-group form-group-default" aria-required="true">
                                <?php echo $this->Form->input('economyBusinessCabin', array('label' => 'Preferencia de Asiento (Economy Premium)', 'class' => 'form-control',
                                    'options' => array(''=>'Seleccione una opción...','Ventana' => 'Ventana', 'Pasillo' => 'Pasillo')
                                ));?>
                           </div>
                           
                           
                           
	                           <div class="col-sm-3" style="padding:0px;">
		                           <div class="form-group form-group-default" aria-required="true">
		                                <?php echo $this->Form->input('wheelchair', array('label' => 'Silla de Ruedas', 'class' => 'form-control','options' => array( 'No' => 'No','Si' => 'Si')));?>
		                           </div>
	                           </div>
	                           <div class="col-sm-9" style="padding-right:0px;">
		                           <div class="form-group form-group-default" aria-required="true">
		                                <?php echo $this->Form->input('wheelchairObservation', array('label' => "Observaciones de silla de ruedas", 'class' => 'form-control','placeholder'=>'Observaciones'));?>
		                           </div>
	                           </div>
	                           <div class="col-sm-3" style="padding:0px;">
		                           <div class="form-group form-group-default" aria-required="true">
		                                <?php echo $this->Form->input('specialFood', array('label' => 'Comida especial', 'class' => 'form-control','options' => array( 'No' => 'No','Si' => 'Si')));?>
		                           </div>
	                           </div>
	                           <div class="col-sm-9" style="padding-right:0px;">
		                           <div class="form-group form-group-default" aria-required="true">
		                                <?php echo $this->Form->input('specialFoodObservation', array('label' => "Observaciones comida especial", 'class' => 'form-control','placeholder'=>'¿Cúal?'));?>
		                           </div>
	                           </div>
	                           <br>
	                           <div class="col-sm-3" style="padding:0px;">
		                           <div class="form-group form-group-default" aria-required="true">
		                                <?php echo $this->Form->input('pet', array('label' => 'Mascota ', 'class' => 'form-control','options' => array( 'No' => 'No','Si' => 'Si')));?>
		                           </div>
	                           </div>
	                           <div class="col-sm-9" style="padding-right:0px;">
		                           <div class="form-group form-group-default" aria-required="true">
		                                <?php echo $this->Form->input('petObservation', array('label' => "Observaciones mascota para asistencia emocional (sólo cabina Economy)", 'class' => 'form-control','placeholder'=>'Observaciones'));?>
		                           </div>
	                           </div>
	                           <br><br>
	                           <div class="col-sm-12" style="padding-right:0px;">
		                           <div class="form-group form-group-default" aria-required="true">
		                                <?php echo $this->Form->input('newspaperObservation', array('label' => "Diarios y revistas", 'class' => 'form-control'));?>
		                           </div>
		                           <div class="form-group form-group-default" aria-required="true">
		                                <?php echo $this->Form->input('drinkObservation', array('label' => "Tragos", 'class' => 'form-control'));?>
		                           </div>
		                           <div class="form-group form-group-default" aria-required="true">
		                                <?php echo $this->Form->input('otherObservation', array('label' => "Otras observaciones", 'class' => 'form-control','placeholder'=>'Por favor indíquenos cualquier preferencia o información adicional'));?>
		                           </div>
		                           <div class="form-group form-group-default" aria-required="true">
		                                <?php echo $this->Form->input('preferenceLanguage', array('label' => "Idioma de preferencia", 'class' => 'form-control'));?>
		                           </div>
	                           </div>
                            <?php
                            echo $this->Form->input('Next', array("style"=>"margin:15px;","label" => false, 'div' => 'false', "class" => "btn btn-success start", "type" => "submit"));
                            echo $this->Form->end();
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-3"></div>
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
    
     <script type="text/javascript">
    function validateForm()
    {
    var a=document.forms["Form"]["data[UserBlack][identifier]"].value;
    var b=document.forms["Form"]["data[UserBlack][name]"].value;
    var c=document.forms["Form"]["data[UserBlack][fathersLastName]"].value;
    var e=document.forms["Form"]["data[UserBlack][nationality]"].value;
    var f=document.forms["Form"]["data[UserBlack][email]"].value;
    var g=document.forms["Form"]["data[UserBlack][celPhone]"].value;
    var h=document.forms["Form"]["data[UserBlack][officePhone]"].value;
    var i=document.forms["Form"]["data[UserBlack][homePhone]"].value;
    var j=document.forms["Form"]["data[UserBlack][businessCabinPref]"].value;
    var k=document.forms["Form"]["data[UserBlack][economyCabinPref]"].value;
    var l=document.forms["Form"]["data[UserBlack][secretaryPhone]"].value;
    
    if(a==null || a==""){
	    alert("R.G./Cédula de Identidade necessário");
    }
    if(b==null || b==""){
	    alert("Nome necessário");
    }
    if(c==null || c==""){
	    alert("Sobrenome paterno necessário");
    }
    if(e==null || e==""){
	    alert("Nacionalidade necessário");
    }
    if(f==null || f==""){
	    alert("E-mail necessário");
    }
    if((g==null || g=="")&&(h==null || h=="")&&(i==null || i=="")&&(l==null || l=="")){
	    alert("Pelo menos número um contato necessário");
    }
    if(j==null || j==""){
	    alert("Preferred Seat (Economy) Cabin necessário");
    }
    if(k==null || k==""){
	    alert("Preferred Seat (Business) necessário");
    }
    }
    </script>
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