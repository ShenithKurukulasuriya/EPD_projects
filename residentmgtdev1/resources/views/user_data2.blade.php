@extends('layout')

@section('content')
<div class="custom-card-container">
    <a href="{{ url('/houses') }}">
        <div class="custom-card">
            <div class="custom-card-header">House</div>
            <!-- Content goes here -->
        </div>
    </a>

    <a href="#">
        <div class="custom-card">
            <div class="custom-card-header">House Type</div>
            <!-- Content goes here -->
        </div>
    </a>

    <a href="#">
        <div class="custom-card">
            <div class="custom-card-header">Tower</div>
            <!-- Content goes here -->
        </div>
    </a>
</div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/EPDsettings/user_data2.css') }}">
@endpush
