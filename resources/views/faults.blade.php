@extends('layouts.master')

@section('title')
Machine Manager
@endsection

@section('content')
<h1> Faults </h1>

@foreach($faults as $fault)
{{ $fault->machine }}
{{ $fault->error }}<br />
@endforeach
@endsection