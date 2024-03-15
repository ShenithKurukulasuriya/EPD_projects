@extends('layout')
		
		@section('content')
		<div class="my">
		<div class="dashboard">

                <div class="color-box">
                    <div class="box skyblue" ><a href="{{ route('towers', ['towerNumber' => 1]) }}">
                        <p><i class="fa fa-building" aria-hidden="true"></i></i> </p>
                        <p> Tower One </p>
                        <h3> 50,120 </h3>
                        </a>
                    </div>
                    <div class="box yellow">
                    <a href="{{ route('towers', ['towerNumber' => 2]) }}">
                        <p><i class="fa fa-building" aria-hidden="true"></i></p>
                        <p> Tower Two </p>
                        <h3> 25,120 </h3>
                    </a>
                    </div>
                    <div class="box purple">
                    <a href="{{ route('towers', ['towerNumber' => 5]) }}">
                        <p><i class="fa fa-building" aria-hidden="true"></i></p>
                        <p> Tower Three </p>
                        <h3> 10,320 </h3>
                    </a>
                    </div>
                    <div class="box red">
                    <a href="{{ route('towers', ['towerNumber' => 6]) }}">
                        <p><i class="fa fa-building" aria-hidden="true"></i></p>
                        <p> Tower Four </p>
                        <h3> 20,129 </h3>
                    </a>
                    </div>
                </div>
            </div>

            <div>
    <canvas id="myChart" class="chart chart-base" chart-type="type" chart-data="data" chart-labels="labels" chart-series="series" chart-options="options" chart-legend="true" height="300"width="5"></canvas>
</div>


<script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: @json($towerLabels), // Use $towerLabels as labels
                datasets: [{
                    label: 'Card Count',
                    data: @json($cardCounts),
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

@endsection


@push('styles')
		<link rel="stylesheet" href="{{ asset('css/Dashboard.css') }}">
        <!-- Add this to your HTML file, typically within the <head> section -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

		@endpush