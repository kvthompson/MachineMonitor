@extends('layouts.master')

@section('title')
Machine Manager
@endsection

@section('content')
<link rel="stylesheet" href="{{ URL::to('src/css/oee.css')  }}">

<section class="row title">
<h3> Machine 2 </h3>
</section>


@foreach($oees as $oee)
	
 <?php
if ($oee->machine == 2) : ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/solid-gauge.js"></script>

<section class="row oee-graphs">
<div style="width: 800px; height: 500px; margin: 0 auto">
     <section class="container-oee">
    <div id="container-oee" style="width: 550px; height: 350px; float: left"></div>
    </section>
    <div id="container-performance" style="width: 250px; height: 170px; float: right"></div>
    <div id="container-availability" style="width: 250px; height: 170px; float: right"></div>
    <div id="container-quality" style="width: 250px; height: 170px; float: right"></div>
    <section class="row oee-info">
    <div style="width: 520px; height: 100px;">
         <div style="text-align:center"> <h4> OEE is calculated using the following formula: </h4>
              <span style="color:rgb(0, 142, 82); cursor:help" \
              title="Overall Equipment Effectiveness - Framework to evaluate how effectively manufacturing machines are utilized">OEE</span> = <span \
               style="color:rgb(0, 142, 82); cursor:help" title="(Total Count / Run Time) / Ideal Run Rate">Performance</span> x <span \
               style="color:rgb(0, 142, 82); cursor:help" title="Run Time / Planned Production Time">Availability</span> x <span \
               style="color:rgb(0, 142, 82); cursor:help" title="Good Parts / Total Parts">Quality</span>
         </div>
    </div>
    </section>
</div>
</section>


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
            data: [{{$oee->oee}}],
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
            data: [{{$oee->performance}}],
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
            data: [{{$oee->availability}}],
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
            data: [{{$oee->quality}}],
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
<?php endif; ?>
@endforeach


@endsection