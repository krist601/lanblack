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
                            <h2 class="text-white">Estadísticas y Gráficos.</h2>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>
              <div class="col-md-6 col-xlg-4">
                <div class="row">
                  <div class="col-sm-6 m-b-10">
                    <div class="ar-1-1" style="height: 208.125px;">
 
                      <div class="widget-2 panel no-border bg-primary widget widget-loader-circle-lg no-margin">
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
                            <h3 class="text-white" style="padding-left: 15px;">Usuarios Black: <?php echo $passengers; ?></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 m-b-10">
                    <div class="ar-1-1" style="height: 208.125px;">
                      <div class="widget-3 panel no-border bg-primary widget widget-loader-circle-lg no-margin">
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
                            <h3 class="text-white" style="padding-left: 15px;">Menús del mes: <?php echo $menus; ?></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6 m-b-10">
                    <div class="ar-1-1" style="height: 208.125px;">
                      <div class="widget-4 panel no-border bg-primary widget widget-loader-circle-lg no-margin">
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
                                <h2 class="text-white" style="padding-left: 15px;">Vuelos del mes: <?php echo $flights; ?></h2>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 m-b-10">
                    <div class="ar-1-1" style="height: 208.125px;">
                      <div class="widget-5 panel no-border bg-primary widget widget-loader-circle-lg no-margin">
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
                                <h3 class="text-white" style="padding-left: 15px;">Total de reservas: <?php echo $tickets; ?></h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
               Filler 
              
            </div>
        </body>
</html>