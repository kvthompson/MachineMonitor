@extends('layouts.master')

@section('title')
Machine Manager
@endsection

@section('content')

<link rel="stylesheet" href="{{ URL::to('src/css/dashboard.css')  }}">

<section class="row title">
<h3>Dashboard</h3>
</section>

<section class="col oee">
<h4>Monthly OEE</h4>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = new google.visualization.DataTable();
      data.addColumn('date', 'Month');
      data.addColumn('number', 'OEE');

      @foreach ($months as $month)
      	       data.addRows([ [new Date( {{ $month->year }}, {{ $month->month }}), {{ $month->oee }}] ]);
      @endforeach
      
      var options = {
        hAxis: {
          title: 'Month'
        },
        vAxis: {
          title: 'OEE'
        }
      };

      var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

      chart.draw(data, options);
    }
</script>


<div id="chart_div"></div>

</section>

<section class="col fault">
<h4>Active Faults</h4> <br>
<h5> There are <strong><span style="color: #ff0000">{{ count($counts) }}</span></strong> active faults.</h5>
</section>

<section class="col machine">
<h4> Machine States </h4>
<div class="stateTable" >
     			<table>
                    <tr>
                        <td>
                            Machine
                        </td>
                        <td >
                            Current State
			</td>
                       
                    </tr>

@foreach($states as $state)
                    <tr>
                        <td>
                            {{ $state->machine }}
                        </td>
                        <td>
                            {{ $state->state }}
                        </td>
                    </tr>
@endforeach
                </table>
            </div>




</section>
	
@endsection