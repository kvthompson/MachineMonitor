@extends('layouts.master')

@section('title')
Machine Manager
@endsection

@section('content')
<!DOCTYPE html>
<html>
<head>
<style>

h4 span{font-weight:normal}

#header {
    background-color:rgb(0, 48, 71);
    color:white;
    text-align:center;
    width:500px;
    padding:2px;
    float:left;
    margin-right:50px;
}
#nav {
    line-height:30px;
    background-color:#eeeeee;
    height:200px;
    width:200px;
    text-align:right;
    float:left;
    padding: 10px;
}
#section {
    width:300px;
    height:200px;
    text-align:left;
    font-size:18px;
    float:left;
    margin-right:50px;
    padding:10px;
}

#footer {
    background-color:rgb(0,48,71);
    color:white;
    width:500px;
    text-align:center;
    padding:5px;
    float:left;
    margin-right:50px;
    margin-bottom:50px;
}
</style>
</head>
<body>

<div id="header">
<h1>Machine 1</h1>
</div>

<div id="header">
<h1>Machine 2</h1>
</div>


<div id="nav">
<td style="padding-top: 2px;"><h4>Batch Number: </h4> </td> 
<h4>Part Number: </h4> 
<h4>Part Type: </h4> 
<h4>Remaining Quantity: </h4>
<h4>Total Quantity: </h4> 
</div>

<div id="section">
@foreach ($machines as $machine)
                @if( $machine->machine == '1')
		   	<td style="padding-top: 2px;"><h4><span>{{ $machine->batchNo }}</span></h4> </td>
			<h4><span>{{ $machine->partNo }}</span></h4>
			<h4><span>{{ $machine->partType }}</span></h4>
			<h4><span>{{ $machine->remainingQ }}</span></h4>
			<h4><span>{{ $machine->totalQ }}</span> </h4>
		@endif
@endforeach
</div>

<div id="nav">
<td style="padding-top: 2px;"><h4>Batch Number: </h4> </td>
<h4>Part Number: </h4>
<h4>Part Type: </h4>
<h4>Remaining Quantity: </h4>
<h4>Total Quantity: </h4>
</div>

<div id="section">
@foreach ($machines as $machine)
                @if( $machine->machine == '2')
                        <td style="padding-top: 2px;"><h4><span>{{ $machine->batchNo }}</span></h4> </td>
                        <h4><span>{{ $machine->partNo }}</span></h4>
                        <h4><span>{{ $machine->partType }}</span></h4>
                        <h4><span>{{ $machine->remainingQ }}</span></h4>
                        <h4><span>{{ $machine->totalQ }}</span> </h4>
                @endif
@endforeach
</div>

<div id="footer">
</div>

<div id="footer">
</div>

<div id="header">
<h1>Machine 3</h1>
</div>

<div id="header">
<h1>Machine 4</h1>
</div>


<div id="nav">
<td style="padding-top: 2px;"><h4>Batch Number: </h4> </td>
<h4>Part Number: </h4>
<h4>Part Type: </h4>
<h4>Remaining Quantity: </h4>
<h4>Total Quantity: </h4>
</div>

<div id="section">
@foreach ($machines as $machine)
                @if( $machine->machine == '3')
                        <td style="padding-top: 2px;"><h4><span>{{ $machine->batchNo }}</span></h4> </td>
                        <h4><span>{{ $machine->partNo }}</span></h4>
                        <h4><span>{{ $machine->partType }}</span></h4>
                        <h4><span>{{ $machine->remainingQ }}</span></h4>
                        <h4><span>{{ $machine->totalQ }}</span> </h4>
                @endif
@endforeach
</div>

<div id="nav">
<td style="padding-top: 2px;"><h4>Batch Number: </h4> </td>
<h4>Part Number: </h4>
<h4>Part Type: </h4>
<h4>Remaining Quantity: </h4>
<h4>Total Quantity: </h4>
</div>

<div id="section">
@foreach ($machines as $machine)
                @if( $machine->machine == '4')
                        <td style="padding-top: 2px;"><h4><span>{{ $machine->batchNo }}</span></h4> </td>
                        <h4><span>{{ $machine->partNo }}</span></h4>
                        <h4><span>{{ $machine->partType }}</span></h4>
                        <h4><span>{{ $machine->remainingQ }}</span></h4>
                        <h4><span>{{ $machine->totalQ }}</span> </h4>
                @endif
@endforeach
</div>

<div id="footer">
</div>

<div id="footer">
</div>




</body>


</html>

@endsection