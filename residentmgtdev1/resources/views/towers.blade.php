@extends('layout')
		
		@section('content')

        <div class="floor-container">
    @if ($floorsCount > 0)
        @for ($i = 1; $i <= $floorsCount; $i++)
            <div class="floor-box">
                
                <a href="{{ route('floors.houses', ['towerId' => $towerid, 'floor' => $i]) }}" tower="{{$towerid }}">
                    Floor {{ $i }}
                </a>
            </div>
        @endfor
    @else
        <div>No floors found</div>
    @endif
</div>
@endsection


@push('styles')
		<link rel="stylesheet" href="{{ asset('css/towers.css') }}">
		@endpush