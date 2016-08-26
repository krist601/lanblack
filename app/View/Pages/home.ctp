<!DOCTYPE HTML>
<html>
	<head>

      <?php echo $this->Html->script('../assets/plugins/jquery/jquery-1.11.1.min.js'); ?>
		
	</head>
	<body>
            <?php echo $this->Html->script('../assets/plugins/nvd3/highcharts.js'); ?>
            <?php echo $this->Html->script('../assets/plugins/nvd3/exporting.js'); ?>
            <div class="m-b-10">
                      <a href="<?php echo $this->Html->url(array('controller' => 'tweets', 'action' => 'fringe')) ?>">
                    <div  style="height: 100px;" class="ar-1-1">
 
                      <div class="widget-20 panel no-border bg-primary widget widget-loader-circle-lg no-margin">
                        <div class="panel-heading">
                          <div class="panel-controls">
                            <ul>
                              <li><a href="#" class="portlet-refresh" data-toggle="refresh"></a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="panel-body">
                          <div class="pull-bottom bottom-left bottom-right padding-25">
                            <br>
                            <h3 class="text-white" style="padding-left: 15px;">Hola <?php echo $username ?>.</h3>
                            <p class="text-white hint-text hidden-md" style="padding-left: 15px;">Bienvenido al administrador del menú para los usuarios Black LAN/TAM!</p>
                          </div>
                        </div>
                      </div>
                    </div>
                      </a>
                  </div>
            
            <div class="row">
              
              <div class="col-md-6 col-xlg-5">
                <div class="row">
                  <div class="col-md-12 m-b-10">
                    <div class="ar-3-2 widget-1-wrapper"style="height: 426px;">
 
                      <div class="widget-1 panel no-border bg-complete no-margin widget-loader-circle-lg">
                        <div class="panel-body">
                            <div class="pull-bottom bottom-left bottom-right " style="padding-bottom: 20px;">
                            <br>
                            <h2 class="text-white">Usuarios Black Registrados <?php echo $usersTotal; ?>.</h2>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              
            </div>
<div class="row">
              
              <div class="col-md-6 col-xlg-5">
                <div class="row">
                  <div class="col-md-12 m-b-10">
                    <div class="ar-3-2 widget-40-wrapper"style="height: 426px;">
 
                      <div class="widget-40 panel no-border bg-complete no-margin widget-loader-circle-lg">
                        <div class="panel-body">
                            <div class="pull-bottom bottom-left bottom-right " style="padding-bottom: 20px;">
                            <br>
                            <h2 class="text-white">Usuarios Black sin contestar <?php echo $usersNoResponseTotal; ?>.</h2>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              
            </div>
        </body>
</html>