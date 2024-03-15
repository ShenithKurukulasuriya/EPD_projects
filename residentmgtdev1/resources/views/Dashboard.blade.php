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

            <div class="activity">
                <h2 class="heading"> Recent Activity </h2>
                <div class="activities">
                    <table>
                        <thead>
                            <tr>
                                <th> Name </th>
                                <th> Email </th>
                                <th> Joined </th>
                                <th> Type </th>
                                <th> Status </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> Raju </td>
                                <td> contact.geekshelp@gmail.com </td>
                                <td> 01-12-2020 </td>
                                <td> Member </td>
                                <td> Active </td>
                            </tr>
                            <tr>
                                <td> Jassi </td>
                                <td> jassisheoran@gmail.com </td>
                                <td> 03-01-2022 </td>
                                <td> New </td>
                                <td> Active </td>
                            </tr>
                            <tr>
                                <td> John Doe </td>
                                <td> johndoe@gmail.com </td>
                                <td> 22-10-2020 </td>
                                <td> New </td>
                                <td> Active </td>
                            </tr>
                            <tr>
                                <td> Franda </td>
                                <td> frand.geekshelp@gmail.com </td>
                                <td> 22-12-2020 </td>
                                <td> Member </td>
                                <td> Active </td>
                            </tr>
                            <tr>
                                <td> Raj </td>
                                <td> testmain@gmail.com </td>
                                <td> 20-12-2019 </td>
                                <td> New </td>
                                <td> Active </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

@endsection


@push('styles')
		<link rel="stylesheet" href="{{ asset('css/Dashboard.css') }}">
		@endpush