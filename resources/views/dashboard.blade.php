@extends('layouts.master')

@section('title')
Machine Manager
@endsection

@section('content')
<link rel="stylesheet" href="{{ URL::to('src/css/dashboard.css')  }}">

<section class="row title">
<h3> Dashboard</h3>


@foreach ($oees as $oee)
 {{$oee->oee}}
@endforeach


@foreach ($counts as $fault)
<h5> {{ $fault }} </h5>
@endforeach
</section>
	
@endsection