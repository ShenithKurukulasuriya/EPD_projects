<!-- your.blade.view.blade.php -->

@extends('layout')

@section('content')


<body class="bg-gray-100 font-sans">

<div class="max-w-4xl mx-auto py-8">
  <table class="min-w-full bg-white border border-gray-300 rounded-lg overflow-hidden">
    <thead class="bg-gray-800 text-white">
      <tr>
        <th class="py-2 px-4">Name</th>
        <th class="py-2 px-4">Email</th>
        <th class="py-2 px-4">Phone</th>
      </tr>
    </thead>
    <tbody>
      <tr class="hover:bg-gray-100">
        <td class="py-2 px-4">John Doe</td>
        <td class="py-2 px-4">john@example.com</td>
        <td class="py-2 px-4">(555) 123-4567</td>
      </tr>
      <tr class="hover:bg-gray-100">
        <td class="py-2 px-4">Jane Smith</td>
        <td class="py-2 px-4">jane@example.com</td>
        <td class="py-2 px-4">(555) 987-6543</td>
      </tr>
      <!-- Add more rows as needed -->
    </tbody>
  </table>
</div>

<div class="styled-overlay"></div>
<div class="styled-popup">
    <div class="styled-close-btn">&times;</div>
    <div class="styled-form">
        <h2>Add details</h2>
        <form action="#" method="POST">
            <!-- Replace "#" with your actual form action -->

            <div class="styled-form-element">
    <label for="towerNumber">Tower No:</label>
    <select id="towerNumber" name="towerNumber" required>
        <!-- The tower options will be loaded dynamically using AJAX -->
    </select>
</div>

<div class="styled-form-element">
    <label for="floorNumber">Floor No:</label>
    <select id="floorNumber" name="floorNumber" required>
        <!-- The floor options will be loaded dynamically using AJAX based on the selected tower -->
    </select>
</div>

<div class="styled-form-element">
    <label for="houseNumber">House No:</label>
    <select id="houseNumber" name="houseNumber" required>
        <!-- The house options will be loaded dynamically using AJAX based on the selected tower and floor -->
    </select>
</div>
            <div class="styled-form-element">
                <label for="email">Name</label>
                <input type="text" id="email" name="email" placeholder="Enter email" required>
            </div>

            <div class="styled-form-element">
                <label for="email">email</label>
                <input type="text" id="email" name="email" placeholder="Enter email" required>
            </div>

            <div class="styled-form-element">
                <label for="email">Nic</label>
                <input type="text" id="email" name="email" placeholder="Enter email" required>
            </div>

            <div class="styled-form-element">
                <label for="email">Date of birth</label>
                <input type="text" id="email" name="email" placeholder="Enter email" required>
            </div>

            <div class="styled-form-element">
                <label for="password">Contact</label>
                <input type="password" id="password" name="password" placeholder="Enter password" required>
            </div>

            <div class="styled-form-element">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>

<script>
$(document).ready(function () {
    $.ajax({
        url: '{{ url("/gettowers") }}',
        method: 'GET',
        data: {},
        success: function (response) {
            var towers = response.listtowers;
            var towerDropdown = $('#towerNumber');
            var editTowersDropDown = $('#editTowerNumber');

            // Clear previous options
            towerDropdown.empty();
            towerDropdown.append('<option value="0">Please Select</option>');

            editTowersDropDown.append('<option value="0">Please Select tower</option>');

            // Append new options
            $.each(towers, function (key, val) {
                towerDropdown.append('<option value="' + key + '">' + val + '</option>');
                editTowersDropDown.append('<option value="' + key + '">' + val + '</option>');
            });
        },
        error: function (error) {
            console.log(error);
        }
    });
             //get floors by tower
             $('#towerNumber').on('change', function () {

        var towerId = $(this).val();
//alert(towerId)
        $.ajax({
          url: '{{ url("/getfloors") }}',
            method: 'GET',
            data: {tower_id: towerId},
            success: function (response) {
                var floorCount = response.floorCount;
                var floorDropdown = $('#floorNumber');
                console.log(floorCount)

                // Clear previous options
                floorDropdown.empty();
                floorDropdown.append('<option value="0">Please Select Floor</option>');

                // Append new options based on floor count
                for (var i = 1; i <= floorCount; i++) {
                    floorDropdown.append('<option value="' + i + '">Floor ' + i + '</option>');
                }
            },
            error: function (error) {
                console.log(error);
            }
        });
    });

    
    //get house by tower and floor
    $('#floorNumber').on('change',function(){
        var towerid=$('#towerNumber').val();

        var floorid=$(this).val();
        console.log(towerid)
        $.ajax({
          url: '{{ url("/getallactivehouse") }}',
            method: 'GET',
            data: {TowerNo: towerid,FloorNo:floorid},
            success: function (response) {
                    var houses = response.listhouses;
                    var housesDropdown = $('#houseNumber');
console.log(houses);
                    // Clear previous options
                    housesDropdown.empty();
                    housesDropdown.append('<option value="0">Please Select</option>');
                    // Append new options
                    $.each(houses, function (key,val) {
                        housesDropdown.append('<option value="' + val.HouseNo + '">' +'No. '+ val.HouseNo + '</option>');
                    });
                },
            error: function (error) {
                console.log(error);
            }
        });
    });
    });

    
</script>

<script>
$(document).ready(function () {
    $('.add-user-btn').click(function () {
        $('.styled-popup, .styled-overlay').toggleClass('active');
        document.querySelector(".styled-overlay").style.display = "block";
    });

    $('.styled-close-btn, .styled-overlay').click(function () {
        $('.styled-popup, .styled-overlay').removeClass('active');
    });
});</script>

<button id="#" class="add-user-btn">+</button>

    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script> 
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/residents.css') }}">
@endpush
