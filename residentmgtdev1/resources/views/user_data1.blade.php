@extends('layout')
		
		@section('content')
    <a href="{{ url('/profile_manager') }}">
		<div class="card-container">
  <div class="card">
    <div class="card-header">User Data</div>
    <!-- Content goes here -->
  </div>
</a>
  <a href="{{ url('/user_data2') }}">  <div class="card">
    <div class="card-header">Master Data</div>
    <!-- Content goes here -->
  </div>
</div></a>

@endsection


@push('styles')
		<link rel="stylesheet" href="{{ asset('css/EPDsettings/user_data1.css') }}">
		@endpush