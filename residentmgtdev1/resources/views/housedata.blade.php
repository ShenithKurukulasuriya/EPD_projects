@extends('layout')

@section('content')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table id="mytable">
    <thead>
      <tr>
        <th>House ID</th>
        <th>House No</th>
        <th>Is Available</th>
        <th>House type</th>
        <th>Tower No</th>
        <th>Floor No</th>
        <th>Edit</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($houses as $house)
      <tr>
        <td>{{ $house->HouseId }}</td>
        <td>{{ $house->HouseNo }}</td>
        <td>{{ $house->IsAvailbe }}</td>
        <td>{{ $house->Housetype }}</td>
        <td>{{ $house->TowerName }}</td>
        <td>{{ 'Floor ' . $house->FloorNo }}</td>
        <td class="edit-icon">
            <button class="triggerModalButton" onclick="showForm()"><i class="fas fa-edit"></i></button>
        </td>
        <td>{{ $house->status }}</td>
      @endforeach
    </tbody>
  </table>

  <button id="addHouseBtn" class="add-house-btn" onclick="toggleForm()">+</button>

<div id="popup-form" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeForm()">&times;</span>
    
  
<form action="{{ route('houses.store') }}" method="POST">
    @csrf
    <label for="Towerno">Tower No:</label>
    <div class="form-group">
    <select name="TowerNo" id="tower_id" class="small-input">
              
    </select>
    </div>

    <div class="form-group">
        <label for="FloorNo">Floor No:</label>
        <select id="FloorNo" name="FloorNo" class="small-input">
              
        </select>
    </div>

    <div class="form-group">
        <label for="HouseNo">House NO:</label>
        <input type="text" id="HouseNo" name="HouseNo" required class="small-input">
    </div>

    <div class="form-group">
        <label for="IsAvailbe">Is Available:</label>
        <select id="IsAvailbe" name="IsAvailbe" class="small-input">
            <option value="available">Available</option>
            <option value="not-Available">Not Available</option>
        </select>
    </div>

    <div class="form-group">
        <label for="Housetype">House type:</label>
        <select id="Housetype" name="Housetype" class="small-input">
            <option value="permanent">Permanent</option>
            <option value="rent">Rent</option>
        </select>
    </div>

    <div class="form-group">
        <label for="staus">Status:</label>
        <select id="status" name="status" class="small-input">
            <option value="active">Activate</option>
            <option value="deactivated">Deactivate</option>
        </select>
    </div>

      <button type="submit" class="submit-btn">Submit</button>
    </form>
  </div>
</div>

<div id="custom-popup-form" class="custom-modal">
    <div class="custom-modal-content">
        <span class="custom-close" onclick="closeForm()">&times;</span>
        <form id="customExampleForm">
            <div class="custom-form-group">
                <label for="custom-field1">Field 1:</label>
                <input type="text" id="custom-field1" name="custom-field1" required>
            </div>
            
            <div class="custom-form-group">
                <label for="custom-field2">Field 2:</label>
                <input type="text" id="custom-field2" name="custom-field2" required>
            </div>
            
            <div class="custom-form-group">
                <label for="custom-field3">Field 3:</label>
                <input type="text" id="custom-field3" name="custom-field3" required>
            </div>
            
            <button type="submit">Submit</button>
        </form>
    </div>
</div>

<script>
        $(document).ready(function() {
            $('#mytable').DataTable(
              {
                "pageLength": 10,
                "sPaginationType": "full_numbers"
            }
            );
        });
    </script> 

  <script>
    function toggleForm() {
      var popupForm = document.getElementById("popup-form");
      popupForm.style.display = (popupForm.style.display === "none" || popupForm.style.display === "") ? "block" : "none";
    }

    function closeForm() {
        var popupForm = document.getElementById("popup-form");
        popupForm.style.display = "none";
    }

    document.addEventListener('DOMContentLoaded', function () {
    // Check if card was created and show the success message
    @if(session('house_created'))
        showCreateSuccessMessage();
    @endif
});

function showCreateSuccessMessage() {
    alert('Card created successfully');
}
  </script>

<script>
    $(document).ready(function () {
    
            //alert('test')

            $.ajax({
              url: '{{ url("/gettowers") }}',
                method: 'GET',
                data: {},
                success: function (response) {
                    var floors = response.listtowers;
                    var floorDropdown = $('#tower_id');
console.log(floors);
                    // Clear previous options
                    floorDropdown.empty();
                    floorDropdown.append('<option value="0">Please Select</option>');
                    // Append new options
                    $.each(floors, function (key,val) {
                        floorDropdown.append('<option value="' + key + '">' + val + '</option>');
                    });
                },
                error: function (error) {
                    console.log(error);
                }
            });

            //get floors by tower
            $('#tower_id').on('change', function () {
        var towerId = $(this).val();
//alert(towerId)
        $.ajax({
          url: '{{ url("/getfloors") }}',
            method: 'GET',
            data: {tower_id: towerId},
            success: function (response) {
                var floorCount = response.floorCount;
                var floorDropdown = $('#FloorNo');
                console.log(floorCount)

                // Clear previous options
                floorDropdown.empty();

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
      
    });
</script>


<script>
    function showForm() {
        var popupForm = document.getElementById("custom-popup-form");
        popupForm.style.display = "block";
    }

    function hideForm() {
        var popupForm = document.getElementById("custom-popup-form");
        popupForm.style.display = "none";
    }
    function closeForm() {
    var popupForm = document.getElementById("popup-form");
    popupForm.style.display = "none";

    var customPopupForm = document.getElementById("custom-popup-form");
    customPopupForm.style.display = "none";
}

    // Optional: You can add AJAX form submission logic here
    document.getElementById('customExampleForm').addEventListener('submit', function (event) {
        event.preventDefault();
        // Add your logic to submit the form data via AJAX
        // After successful submission, hide the modal form
        hideForm();
    });

</script>
@endsection

@push('styles')

<link rel="stylesheet" href="{{ asset('css/housedata.css') }}">

@endpush
