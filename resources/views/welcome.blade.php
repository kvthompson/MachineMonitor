@extends('layouts.master')

@section('title')
Machine Manager
@endsection

@section('content')
	@include('includes.message')
	<div class="row">
	     <div class="col-md-6">
	     	  <h3>Register</h3>
	     	  <form action="{{ route('register') }}" method="post">
			<div class="form-group {{ $errors->has('user_name') ? 'has-error' : '' }}">
                             <label for="user_name">Username</label>
                             <input class="form-control" type="text" name="user_name" id="user_name" value="{{ Request::old('user_name') }}">
                        </div>
			<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                             <label for="password">Password</label>
                             <input class="form-control" type="password" name="password" id="password" value="{{ Request::old('password') }}">
                        </div>
			<button type="submit" class="btn btn-primary">Submit</button>
		  	<input type="hidden" name="_token" value="{{ Session::token() }}">
		  </form>
	     </div>
	     <div class="col-md-6">
		 <h3>Log In</h3>
                  <form action="{{route('login') }}" method="post">
                        <div class="form-group {{ $errors->has('user_name') ? 'has-error' : '' }}">
                             <label for="user_name">Username</label>
                             <input class="form-control" type="text" name="user_name" id="user_name" value="{{ Request::old('user_name') }}">
                        </div>
                        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                             <label for="password">Your Password</label>
                             <input class="form-control" type="password" name="password" id="password" value="{{ Request::old('password') }}">
                        </div>
			<button	type="submit" class="btn btn-primary">Submit</button>
                  	<input type="hidden" name="_token" value="{{ Session::token() }}">
		  </form>
             </div>
	</div>
@endsection
