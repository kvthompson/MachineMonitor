@extends('layouts.master')

@section('title')
Machine Manager
@endsection

@section('content')
<h1> OEE </h1>

<h5> Machine 1 OEE </h5>
@foreach($oees as $oee)
	       <div class="progress">
  	       	    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $oee->m1oee }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $oee->m1oee }}%;">
    		    	 {{ $oee->m1oee }}%
  		    </div>
	       </div>
@endforeach





@endsection