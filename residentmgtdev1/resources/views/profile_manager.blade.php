<!-- your.blade.view.blade.php -->

@extends('layout')

@section('content')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


<table class="custom-table">
    <thead style="background-color: #28a745; color: white;">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created at</th>
            <th>Role</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->role }}</td>
                <td>
            <a href="#" class="edit-btn" data-user-id="{{ $user->id }}" data-user-name="{{ $user->name }}" data-user-email="{{ $user->email }}" data-user-role="{{ $user->role }}">
                <i class="fas fa-edit"></i>
            </a>
        </td>
                <td>
                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link">
                                <i class="fas fa-trash-alt text-danger"></i>
                            </button>
                        </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


<div class="overlay"></div>
<div class="popup">
    <div class="close-btn">&times;</div>
    <div class="form">
        <h2>Add user</h2>
        <form action="{{ route('createUser') }}" method="POST">
    @csrf

    <div class="form-element">
        <label for="name">Name</label>
        <input type="text" id="Name" name="name" placeholder="Enter name" required>
    </div>
    <div class="form-element">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Enter email" required>
    </div>
    <div class="form-element">
        <label for="role">Role</label>
        <select id="role" name="role" required>
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select>
    </div>
        <div class="form-element">
    <label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="Enter password" required>
        </div>
<div class="form-element">
    <label for="confirmpassword">Confirm Password</label>
    <input type="password" id="confirmpassword" name="password_confirmation" placeholder="Enter password again" required>
</div>
    <div class="form-element">
        <button type="submit">Create user</button>
    </div>
</form>
    </div>
</div>


<div class="custom-popup">
    <div class="close-btn">&times;</div>
    <div class="custom-form">
        <h2>Edit User</h2>
        <form action="{{ route('updateUser', $user->id) }}" method="POST">
            @csrf
            @method('PATCH') <!-- Use PATCH method for updating -->

            <div class="custom-form-element">
    <label for="edit_user_name">Name</label>
    <input type="text" id="edit_user_name" name="name" placeholder="Enter name" value="{{ $user->name }}" required>
</div>
<div class="custom-form-element">
    <label for="edit_user_email">Email</label>
    <input type="text" id="edit_user_email" name="email" placeholder="Enter email" value="{{ $user->email }}" required>
</div>
            <div class="custom-form-element">
                <label for="role">Role</label>
                <select id="edit_user_role" name="role" required>
                    <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                </select>
            </div>
            <!-- If you want to allow changing the password, include these fields -->
            <div class="custom-form-element">
                <label for="password">New Password</label>
                <input type="password" id="password" name="password" placeholder="Enter new password">
            </div>
            <div class="custom-form-element">
                <label for="confirmpassword">Confirm New Password</label>
                <input type="password" id="confirmpassword" name="password_confirmation" placeholder="Confirm new password">
            </div>

            <div class="custom-form-element">
                <button type="submit">Update User</button>
            </div>
        </form>
    </div>
</div>


   
    <button id="show-login" class="add-user-btn">+</button>

    <script>
// Update the JavaScript code to handle the overlay
document.querySelector("#show-login").addEventListener("click", function () {
    document.querySelector(".popup").classList.add("active");
    document.querySelector(".overlay").style.display = "block";
});

document.querySelector(".popup .close-btn").addEventListener("click", function () {
    document.querySelector(".popup").classList.remove("active");
    document.querySelector(".overlay").style.display = "none";
});
</script>

<script>
// Update the JavaScript code to handle the overlay
document.querySelectorAll(".edit-btn").forEach(function (button) {
    button.addEventListener("click", function () {
        document.querySelector(".custom-popup").classList.add("active");
        document.querySelector(".overlay").style.display = "block";
    });
});

document.querySelector(".custom-popup .close-btn").addEventListener("click", function () {
    document.querySelector(".custom-popup").classList.remove("active");
    document.querySelector(".overlay").style.display = "none";
});

document.querySelectorAll(".edit-btn").forEach(function (button) {
    button.addEventListener("click", function () {
        // Get user data attributes
        var userId = button.getAttribute("data-user-id");
        var userName = button.getAttribute("data-user-name");
        var userEmail = button.getAttribute("data-user-email");
        var userRole = button.getAttribute("data-user-role");

        // Set initial values in the edit form
        document.querySelector("#edit_user_name").value = userName;
        document.querySelector("#edit_user_email").value = userEmail;
        document.querySelector("#edit_user_role").value = userRole;

        // ... other code for handling the overlay and form visibility
    });
});
</script>



    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script> 
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/EPDsettings/profile_manager.css') }}">
@endpush
