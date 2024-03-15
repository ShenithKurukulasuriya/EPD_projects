@extends('layout')
		
		@section('content')
		<div class="card-container">
  <div class="card" style="background-color: #ffffe0;"> <!-- Light yellow background -->
    <div>
      <div class="card-header">Resident Details</div>
      <div class="card-content">
        Owners Name : example<br>
        No of People : example<br>
        Date Registered : example
      </div>
    </div>
    <div class="card-footer"></div> <!-- Empty footer for spacing -->
  </div>
  
  <div class="card">
    <div>
      <div class="card-header">Vehicle Details</div>
      <div class="card-content">
        Vehicle No : example<br>
        Owners name : example<br>
        Date Registered : example<br>
        <br>
        <strong>Card Details</strong>
        <hr>
        Card No : example<br>
        Expiry Date : example<br>
        Issued Date : example
      </div>
    </div>
    <div class="card-footer">
      <span class="status-dot"></span> Card Has Been Issued
    </div>
  </div>
</div>
@endsection


@push('styles')
		<link rel="stylesheet" href="{{ asset('css/House_Details.css') }}">
		@endpush