<!DOCTYPE HTML>
<html>
	<head>

      <?php echo $this->Html->script('../assets/plugins/jquery/jquery-1.11.1.min.js'); ?>
		
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'spline'
        },
        title: {
            text: 'Menciones ultimos 15 minutos'
        },
        xAxis: {
            categories: [<?php foreach ($array_channel[0]['minutes'] as $minute) {  echo "'".$minute['minute']."',"; } ?>]
        },
        yAxis: {
            title: {
                text: 'Tweets'
            },
            labels: {
                formatter: function () {
                    return this.value ;
                }
            }
        },
        tooltip: {
            crosshairs: true,
            shared: true
        },
        colors: [<?php foreach ($array_channel as $channel) {echo "'#".$channel['color']."',"; }?>],
        plotOptions: {
            spline: {
                marker: {
                    radius: 4,
                    lineColor: '#666666',
                    lineWidth: 1
                }
            }
        },
        series: [
            <?php foreach ($array_channel as $channel) {?>

            {
                name: '<?php echo $channel['channel'] ?>',
                marker: {
                    symbol: 'circle'
                },
                data: [<?php foreach ($channel['minutes'] as $minute) {  echo $minute['totalTweets'] ?>,<?php } ?>]
            }, 
            <?php } ?>
    ]
    });
});
		</script>
	</head>
	<body>
            <?php echo $this->Html->script('../assets/plugins/nvd3/highcharts.js'); ?>
            <?php echo $this->Html->script('../assets/plugins/nvd3/exporting.js'); ?>
            <div class="m-b-10" style="padding-top: 60px;">
                      <a href="<?php echo $this->Html->url(array('controller' => 'tweets', 'action' => 'fringe')) ?>">
                    <div  style="height: 100px;" class="ar-1-1">
                      <!-- START WIDGET -->
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
                            <p class="text-white hint-text hidden-md" style="padding-left: 15px;">Bienvenido a GenomaTV! medidor del impacto de twitter en la televisión</p>
                          </div>
                        </div>
                      </div>
                      <!-- END WIDGET -->
                    </div>
                      </a>
                  </div>
<div class="page-content-wrapper">
        <!-- START PAGE CONTENT -->
        <div class="content sm-gutter" style="padding-top: 0px;padding-left: 0px;">
          <!-- START CONTAINER FLUID -->
          <div class="container-fluid padding-25 sm-padding-10">
            <!-- START ROW -->
            <div class="row">
            <div class="col-md-6 col-xlg-4">
                <div class="row">
                    <div class="col-md-12 m-b-10">
                    <div id="container" style="min-width: 210px; height: 400px; margin: 0 auto"></div>
                  </div>
                </div>
              </div>
            <div class="col-md-6 col-xlg-4">
                <div class="row">
                  <div class="col-sm-6 m-b-10">
                    <div class="ar-1-1" style="height: 208.125px;">
                      <!-- START WIDGET -->
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
                            <a href="<?php echo $this->Html->url(array('controller' => 'tweets', 'action' => 'generalRanking')) ?>">
                                <h3 class="text-white" style="padding-left: 15px;">Ranking General.</h3>
                                <p class="text-white hint-text hidden-md" style="padding-left: 25px;">Ve el ranking en twitter de ayer sobre tu canal!</p>
                            </a>
                          </div>
                        </div>
                      </div>
                      <!-- END WIDGET -->
                    </div>
                  </div>
                  <div class="col-sm-6 m-b-10">
                    <div class="ar-1-1" style="height: 208.125px;">
                      <!-- START WIDGET -->
                      <div class="widget-3 panel no-border bg-complete no-margin widget-loader-bar">
                        <div class="panel-body no-padding">
                          <div class="metro live-tile" data-mode="carousel" data-start-now="true" data-delay="3000">
                            <?php foreach ($array_tweets as $tweet) { ?>
                              <div class="slide-front tiles slide" style="background: #4bb0f7;">
                              <div class="padding-30">
                                <div class="pull-top">
                                  <div class="clearfix"></div>
                                </div>
                                <div class="pull-bottom p-b-30">
                                  <p class="p-t-10 fs-12 p-b-5 hint-text"><span style="font-size: 20px;" class="semi-bold"> @<?php echo $tweet['Tweet']['author']; ?> </span>- <?php echo $tweet[0]['date']; ?></p>
                                  <h3 class="no-margin text-white p-b-10" style="font-size: 16px;line-height: 20px;">
                                    <?php echo $tweet['Tweet']['text']; ?>
                                </h3>
                                </div>
                              </div>
                            </div>
                            <?php } ?>
                          </div>
                        </div>
                            <div class="slide-front tiles slide">
                              <div class="padding-30">
                                <div class="pull-top">
                                  <div class="clearfix"></div>
                                </div>
                                <div class="pull-bottom p-b-30">
                                  <h3 class="no-margin text-white p-b-10" style="font-size: 35px;line-height: 20px;">
                                    Ultimos Tweets
                                </h3>
                                </div>
                              </div>
                            </div>
                      </div>
                      <!-- END WIDGET -->
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6 m-b-10">
                      
                    <div  style="height: 208.125px;" class="ar-1-1">
                      <!-- START WIDGET -->
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
                            <a href="<?php echo $this->Html->url(array('controller' => 'tweets', 'action' => 'fringe')) ?>">
                                <h3 class="text-white" style="padding-left: 15px;">Ranking Franjeado.</h3>
                                <p class="text-white hint-text hidden-md" style="padding-left: 15px;">Ve el ranking en twitter de los programas según su horas de emisión!</p>
                            </a>
                          </div>
                        </div>
                      </div>
                      <!-- END WIDGET -->
                    </div>
                  </div>
                    <div class="col-sm-6 m-b-10">
                      <!-- START WIDGET -->
                      <div  style="border-style: solid; border-width: 1px; border-color: #3c3733">
                      <div class="padding-25">
                        <div class="pull-left">
                            <h2 class="text-success " style="margin-left: 15px;">Menciones</h2>
                          <p class="" style="margin-left: 25px;">(Ultimos 15 minutos)</p>
                        </div>
                      </div>
                      <br>
                      <div class="auto-overflow widget-11-2-table" style="height: 148.125px;width: 280px;">
                          <table class="table table-condensed table-hover" style="">
                      <tbody>
                        <?php foreach($array_programs as $program){ if($program['totalTweets']!=0){?>
                        <tr>
                            <td class="font-montserrat all-caps fs-12 col-lg-6"><a href="<?php echo $this->Html->url(array('controller' => 'tweets', 'action' => 'programs',$program['idProgram'])) ?>"><?php echo $program['program'] ?></a></td>
                          <td class="col-lg-3">
                            <span class="font-montserrat fs-18"><?php echo $program['totalTweets'] ?></span>
                          </td>
                        </tr>
                        <?php }} ?>
                        
                      </tbody>
                    </table>
                  </div>
                      </div>
                      <!-- END WIDGET -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        </body>
</html>