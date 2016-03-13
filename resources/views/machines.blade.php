@extends('layouts.master')

@section('title')
Machine Manager
@endsection

@section('content')
<link rel="stylesheet" href="{{ URL::to('src/css/main.css') }}"> 
<div id="div1">
     <div class="col-md-6 col-md-3-offset">
     	  <header><h4> Machine 1 </h4></header>
	   @foreach ($machines as $machine)
                   @if( $machine->machine == '1')
                   	<h6> <strong>Batch Number:</strong> {{ $machine->batchNo }}</h6>
                  	<h6> <strong>Part Number:</strong> {{ $machine->partNo }} </h6>
          		<h6> <strong>Part Type:</strong> {{ $machine->partType }}  </h6>
          		<h6> <strong>Qty R./Qty:</strong> {{ $machine->remainingQ }} / {{ $machine->totalQ }} </h6>
		   @endif
	   @endforeach
     </div>
</div>
<div id="div2">
     <div class="col-md-6 col-md-3-offset">
          <header><h4> Machine 2 </h4></header>
	  @foreach ($machines as $machine)
          	   @if( $machine->machine == '2')
                        <h6> <strong>Batch Number:</strong> {{ $machine->batchNo }}</h6>
                        <h6> <strong>Part Number:</strong> {{ $machine->partNo }} </h6>
                        <h6> <strong>Part Type:</strong> {{ $machine->partType }}  </h6>
                        <h6> <strong>Qty R./Qty:</strong> {{ $machine->remainingQ }} / {{ $machine->totalQ }} </h6>
                   @endif
	  @endforeach

     </div>
</div>
<div id="div3">
     <div class="col-md-6 col-md-3-offset">
          <header><h4> Machine 3 </h4></header>
	  @foreach ($machines as $machine)
	  	   @if( $machine->machine == '3')
                        <h6> <strong>Batch Number:</strong> {{ $machine->batchNo }}</h6>
                        <h6> <strong>Part Number:</strong> {{ $machine->partNo }} </h6>
                        <h6> <strong>Part Type:</strong> {{ $machine->partType }}  </h6>
                        <h6> <strong>Qty R./Qty:</strong> {{ $machine->remainingQ }} / {{ $machine->totalQ }} </h6>
                   @endif
	  @endforeach
     </div>
</div>
<div id="div4">
     <div class="col-md-6 col-md-3-offset">
          <header><h4> Machine 4 </h4></header>
	  @foreach ($machines as $machine)
	  	   @if( $machine->machine == '4')
                        <h6> <strong>Batch Number:</strong> {{ $machine->batchNo }}</h6>
                        <h6> <strong>Part Number:</strong> {{ $machine->partNo }} </h6>
                        <h6> <strong>Part Type:</strong> {{ $machine->partType }}  </h6>
                        <h6> <strong>Qty R./Qty:</strong> {{ $machine->remainingQ }} / {{ $machine->totalQ }} </h6>
                   @endif
	  @endforeach
     </div>
</div>
@endsection