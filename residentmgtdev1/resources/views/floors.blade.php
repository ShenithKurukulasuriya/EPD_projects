@extends('layout')
		
		@section('content')
    <div class="House-container">
    @forelse ($houses as $house)
    <a href="{{ url('/House') }}">
        <div class="HOu-box">House {{ $house->HouseNo }}</div>
    </a>
    @empty
        <p>No houses found for this floor</p>
    @endforelse
</div>
@endsection


@push('styles')
		<link rel="stylesheet" href="{{ asset('css/floors.css') }}">
		@endpush