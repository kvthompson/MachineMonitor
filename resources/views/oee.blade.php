@extends('layouts.master')

@section('title')
Machine Manager
@endsection

@section('content')
<script src="https://code.jquery.com/jquery.min.js"></script>
<form id="machineDropdown">
      <!-- Dropdown for machines -->
      <h5> Select Machine </h5>
      <select name="machine" id="machine">
              <option value="1">Machine 1</option>
              <option value="2">Machine 2</option>
              <option value="3">Machine 3</option>
              <option value="4">Machine 4</option>
      </select>
</form>


<script type="text/javascript">
	$("#machine").on('change', function () {
	var optId = $(this).val();
	console.log(optId);
});
</script>


<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/solid-gauge.js"></script>

<div style="width: 800px; height: 800px; margin: 0 auto">
    <div id="container-oee" style="width: 550px; height: 350px; float: left"></div>
    <div id="container-performance" style="width: 250px; height: 170px; float: right"></div>
    <div id="container-availability" style="width: 250px; height: 170px; float: right"></div>
    <div id="container-quality" style="width: 250px; height: 170px; float: right"></div>
</div>


<script type="text/javascript">
$(function () {

    var gaugeOptions = {

        chart: {
            type: 'solidgauge'
        },

        title: null,

        pane: {
            center: ['50%', '85%'],
            size: '140%',
            startAngle: -90,
            endAngle: 90,
            background: {
                backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
                innerRadius: '60%',
                outerRadius: '100%',
                shape: 'arc'
            }
        },

        tooltip: {
            enabled: false
        },

        // the value axis
        yAxis: {
            stops: [
                [0.1, '#DF5353'], // green
                [0.5, '#DDDF0D'], // yellow
                [0.9, '#55BF3B'] // red
            ],
            lineWidth: 0,
            minorTickInterval: null,
            tickPixelInterval: 400,
            tickWidth: 0,
            title: {
                y: -70
            },
            labels: {
                y: 16
            }
        },

        plotOptions: {
            solidgauge: {
                dataLabels: {
                    y: 5,
                    borderWidth: 0,
                    useHTML: true
                }
            }
        }
    };

    // Oee gauge
    $('#container-oee').highcharts(Highcharts.merge(gaugeOptions, {
        yAxis: {
            min: 0,
            max: 100,
            title: {
                text: ''
            }
        },

        credits: {
            enabled: false
        },

        series: [{
            name: 'Oee',
            data: [80],
            dataLabels: {
                format: '<div style="text-align:center"><span style="font-size:22px;color:' +
                    ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}%</span><br/>' +
                       '<span style="font-size:24px;color:silver">OEE</span></div>'
            },
            tooltip: {
                valueSuffix: '%'
            }
        }]

    }));

    // Performance gauge
    $('#container-performance').highcharts(Highcharts.merge(gaugeOptions, {
        yAxis: {
            min: 0,
            max: 100,
            title: {
                text: ''
            }
        },

        credits: {
            enabled: false
        },

        series: [{
            name: 'Performance',
            data: [40],
            dataLabels: {
                format: '<div style="text-align:center"><span style="font-size:12px;color:' +
                    ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}%</span><br/>' +
                       '<span style="font-size:14px;color:silver">Performance</span></div>'
            },
            tooltip: {
                valueSuffix: '%'
            }
        }]

    }));


    // Availability gauge
    $('#container-availability').highcharts(Highcharts.merge(gaugeOptions, {
        yAxis: {
            min: 0,
            max: 100,
            title: {
                text: ''
            }
        },

        credits: {
            enabled: false
        },

        series: [{
            name: 'Availability',
            data: [89],
            dataLabels: {
                format: '<div style="text-align:center"><span style="font-size:12px;color:' +
                    ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}%</span><br/>' +
                       '<span style="font-size:14px;color:silver">Availability</span></div>'
            },
            tooltip: {
                valueSuffix: '%'
            }
        }]

    }));


    // Quality gauge
    $('#container-quality').highcharts(Highcharts.merge(gaugeOptions, {
        yAxis: {
            min: 0,
            max: 100,
            title: {
                text: ''
            }
        },

        credits: {
            enabled: false
        },

        series: [{
            name: 'Quality',
            data: [100],
            dataLabels: {
                format: '<div style="text-align:center"><span style="font-size:12px;color:' +
                    ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}%</span><br/>' +
                       '<span style="font-size:14px;color:silver">Quality</span></div>'
            },
            tooltip: {
                valueSuffix: '%'
            }
        }]

    }));


});
</script>


@foreach($oees as $oee)
	       <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  	       	    <div class="panel panel-default">
    		    	 <div class="panel-heading" role="tab" id="headingOne">
      			      <h4 class="panel-title">
        		      	  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          			     Machine 1 OEE
        			  </a>
      			       </h4>
    			  </div>
    			  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      			       <div class="panel-body">
			       	        <?php if ( $oee->m1oee  < 50) : ?>
                     			      <div class="progress">
                     			      	   <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="{{$oee->m1oee}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$oee->m1oee}}%;">
                          			   	{{$oee->m1oee}}%
                          			    </div>
               				       </div>
               				<?php elseif ( $oee->m1oee  > 85) : ?>
                     			      <div class="progress">
                     			      	   <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{$oee->m1oee}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$oee->m1oee}}%;">
                          			   	{{$oee->m1oee}}%
                          		           </div>
               				      </div>
               				<?php elseif ( $oee->m1oee > 50 && $oee->m1oee < 85 ) : ?>
                     			      <div class="progress">
                     			      	   <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="{{ $oee->m1oee }}" aria-valuemin="0" aria-valuemax="100" style="width: {{$oee->m1oee}}%;">
                          			   	{{$oee->m1oee}}%
						   </div>
               				      </div>
                			 <?php endif; ?>
      			       </div>
    			  </div>
  	            </div>


  		    <div class="panel panel-default">
    		    	 <div class="panel-heading" role="tab" id="headingTwo">
      			      <h4 class="panel-title">
        		      	  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				     Machine 2 OEE   
        			  </a>
      			       </h4>
    			 </div>
    			 <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      			      <div class="panel-body">
			      	    <?php if ( $oee->m2oee  < 50) : ?>
                     		    	  <div class="progress">
                     			       <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="{{ $oee->m2oee }}" aria-valuemin="0" aria-valuemax="100" style="width: {{$oee->m2oee}}%;">
                          		       	    {{$oee->m2oee}}%
                          		       </div>
					  </div>
               		            <?php elseif ( $oee->m2oee  > 85) : ?>
                     		    	  <div class="progress">
                     			       <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ $oee->m2oee }}" aria-valuemin="0" aria-valuemax="100" style="width: {{$oee->m2oee}}%;">
                          		       	    {{$oee->m2oee}}%
                          		       </div>
               				  </div>
               			     <?php elseif ( $oee->m2oee > 50 && $oee->m2oee < 85 ) : ?>
                     		     	   <div class="progress">
                     			   	<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="{{ $oee->m2oee }}" aria-valuemin="0" aria-valuemax="100" style="width: {{$oee->m2oee}}%;">
                          			     {{$oee->m2oee}}%
                          			</div>
               				   </div>
                		     <?php endif; ?>
			      

      			      </div>
    			 </div>
  		  </div>
  		  <div class="panel panel-default">
    		       <div class="panel-heading" role="tab" id="headingThree">
      		       	    <h4 class="panel-title">
        		    	<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				   Machine 3 OEE
        			</a>
      			    </h4>
    		       </div>
    		       <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
		       	    <div class="panel-body">
               <?php if ( $oee->m3oee  < 50) : ?>
                     <div class="progress">
                     <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="{{ $oee->m3oee }}" aria-valuemin="0" aria-valuemax="100" style="width: {{$oee->m3oee}}%;">
                          {{$oee->m3oee}}%
                          </div>
               </div>
               <?php elseif ( $oee->m3oee  > 85) : ?>
                     <div class="progress">
                     <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ $oee->m3oee }}" aria-valuemin="0" aria-valuemax="100" style="width: {{$oee->m3oee}}%;">
                          {{$oee->m3oee}}%
                          </div>
               </div>
               <?php elseif ( $oee->m3oee > 50 && $oee->m3oee < 85 ) : ?>
                     <div class="progress">
                     <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="{{ $oee->m3oee }}" aria-valuemin="0" aria-valuemax="100" style="width: {{$oee->m3oee}}%;">
                          {{$oee->m3oee}}%
                          </div>
               </div>
                <?php endif; ?>


      			    </div>
    		       </div>
  		 </div>
		 <div class="panel panel-default">
                       <div class="panel-heading" role="tab" id="headingFour">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
				   Machine 4 OEE
                                </a>
                            </h4>
                       </div>
                       <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                            <div class="panel-body">
               <?php if ( $oee->m4oee  < 50) : ?>
                     <div class="progress">
                     <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="{{ $oee->m4oee }}" aria-valuemin="0" aria-valuemax="100" style="width: {{$oee->m4oee}}%;">
                          {{$oee->m4oee}}%
                          </div>
               </div>
               <?php elseif ( $oee->m4oee  > 85) : ?>
                     <div class="progress">
                     <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ $oee->m4oee }}" aria-valuemin="0" aria-valuemax="100" style="width: {{$oee->m4oee}}%;">
                          {{$oee->m4oee}}%
                          </div>
               </div>
               <?php elseif ( $oee->m4oee > 50 && $oee->m4oee < 85 ) : ?>
                     <div class="progress">
                     <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="{{ $oee->m4oee }}" aria-valuemin="0" aria-valuemax="100" style="width: {{$oee->m4oee}}%;">
                          {{$oee->m4oee}}%
                          </div>
               </div>
                <?php endif; ?>





                            </div>
                       </div>
                 </div>


	    </div>
	
	 
@endforeach



@endsection