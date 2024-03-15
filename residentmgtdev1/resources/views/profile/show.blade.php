<!-- resources/views/profile/show.blade.php -->
@extends('layout')

@section('content')
    <div class="container">
        <h1 class="profile-title">Your Profile</h1>
        <div class="profile-info">
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
        </div>
        <a href="{{ route('profile.edit') }}" class="edit-profile-link">Edit Profile</a>
    </div>

<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 800px;
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center; /* Center content */
    }

    .profile-title {
        color: #333;
        margin-bottom: 20px;
    }

    .profile-info {
        margin-bottom: 20px;
    }

    .profile-info p {
        margin: 10px 0;
        font-size: 18px;
        color: #555;
    }

    .edit-profile-link {
        display: inline-block;
        padding: 10px 15px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.3s ease;
        font-size: 16px;
    }

    .edit-profile-link:hover {
        background-color: #0056b3;
    }
</style>
@endsection
