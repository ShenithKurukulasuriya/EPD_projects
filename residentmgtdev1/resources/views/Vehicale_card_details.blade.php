@extends('layout')

@section('content')

<!-- Success Message -->
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif



<div class="">
  <div class="row">
  <table id="myId">
        <thead>
            <tr>
                <th>ID</th>
                <th>Card No</th>
                <th>Vehicle No</th>
                <th>Tower No</th>
                <th>FLoor No</th>
                <th>House No</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($cards as $index => $card)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $card->cardnumber }}</td>
                <td>{{ $card->vnumber }}</td>
                <td>{{ $card->towernumber }}</td>
                <td>{{ $card->floornumber }}</td>
                <td>{{ $card->housenumber }}</td>
                <td class="edit-icon">
                    <button class="triggerModalButton" onclick="showEditForm({{ $card->id }})"><i class="fas fa-edit"></i></button>
                </td>
                <td class="delete-icon">
                    <form action="{{ route('cards.destroy', $card->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-btn" onclick="return confirm('Are you sure?')"><i class="fas fa-trash-alt text-danger"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
  </div>
    <div class="row">&nbsp;&nbsp;</div>
    <script>
        $(document).ready(function() {
            $('#myId').DataTable(
              {
                "pageLength": 10,
                "sPaginationType": "full_numbers"
            }
            );
        });
    </script> 

</div>

<button id="addUserBtn" class="add-user-btn">+</button>

<!--this is the create form-->
<form action="{{ route('cards.store') }}" method="POST">
    @csrf
    <div id="addUserModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Card No: <input type="text" name="cardnumber" placeholder="Enter card number"></p>
            <p>Vehicle No: <input type="text" name="vnumber" placeholder="Enter vehicle number"></p>
            <label>Tower no:</label>
            <select  input type="text" name="towernumber" id="towernumber" placeholder="Enter tower number">
                
            </select>

            <label>Floor no:</label>
            <select  input type="text" name="floornumber" id="floornumber" placeholder="Enter floor number">
                
            </select>

            <label>House no:</label>
            <select  input type="text" name="housenumber" id="housenumber" placeholder="Enter house number">
                
            </select>
            
            <button type="submit" id="submitUser">Submit</button>
        </div>
    </div>
</form>

<div id="customModal" class="customModalClass">
    <div class="customModalContent">
        <span class="closeButton">&times;</span>
        @if($cards->isNotEmpty())
        <form id="editForm" action="{{ route('cards.update',$card->id) }}" method="POST">
        @else
    <!-- Handle the case when $cards is empty -->
@endif
            @csrf
            @method('PUT')
            <input type="hidden" name="_method" value="PUT">
            <label for="editCardNumber">Card No:</label>
            <input type="text" id="editCardNumber" name="cardnumber"   placeholder="Enter card number"><br><br>
            <label for="editVehicleNumber">Vehicle No:</label>
            <input type="text" id="editVehicleNumber" name="vnumber"  placeholder="Enter vehicle number"><br><br>

            <label for="editHouseNumber">Tower No:</label>
            <select  input type="text" id="editTowerNumber" name="towernumber"  placeholder="Enter tower number">
                
            </select>

            <label for="editHouseNumber">Floor No:</label>
            <select  input type="text" id="editFloorNumber" name="floornumber"  placeholder="Enter floor number">
                
            </select>

            <label for="editHouseNumber">House No:</label>
            <select  input type="text" id="editHouseNumber" name="housenumber"  placeholder="Enter house number">
                
            </select>

            <button type="submit" id="submitUser">Submit</button>
        </form>
    </div>
</div>


<script>
    $(document).ready(function(){
        $.ajax({
              url: '{{ url("/gettowers") }}',
                method: 'GET',
                data: {},
                success: function (response) {
                    var floors = response.listtowers;
                    var floorDropdown = $('#towernumber');

                    var editTowersDropDown=$('#editTowerNumber');
console.log(floors);
                    // Clear previous options
                    floorDropdown.empty();
                    floorDropdown.append('<option value="0">Please Select</option>');

                    editTowersDropDown.append('<option value="0">Please Select tower</option>')
                    // Append new options
                    $.each(floors, function (key,val) {
                        floorDropdown.append('<option value="' + key + '">' + val + '</option>');
                        editTowersDropDown.append('<option value="' + key + '">' + val + '</option>');
                    });
                },
                error: function (error) {
                    console.log(error);
                }
            });
             //get floors by tower
             $('#towernumber').on('change', function () {
        var towerId = $(this).val();
//alert(towerId)
        $.ajax({
          url: '{{ url("/getfloors") }}',
            method: 'GET',
            data: {tower_id: towerId},
            success: function (response) {
                var floorCount = response.floorCount;
                var floorDropdown = $('#floornumber');
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
    $('#floornumber').on('change',function(){
        var towerid=$('#towernumber').val();
        var floorid=$(this).val();
        console.log(towerid)
        $.ajax({
          url: '{{ url("/getallactivehouse") }}',
            method: 'GET',
            data: {TowerNo: towerid,FloorNo:floorid},
            success: function (response) {
                    var houses = response.listhouses;
                    var housesDropdown = $('#housenumber');
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
document.addEventListener('DOMContentLoaded', function () {
    var addUserModal = document.getElementById('addUserModal');
    var addUserBtn = document.getElementById('addUserBtn');
    var addUserSpan = addUserModal.querySelector('.close');
    var customModal = document.getElementById("customModal");
    var customCloseButton = customModal.querySelector(".closeButton");

    addUserBtn.onclick = function() { addUserModal.style.display = 'block'; }
    addUserSpan.onclick = function() { addUserModal.style.display = 'none'; }
    customCloseButton.onclick = function() { customModal.style.display = "none"; }

    window.onclick = function(event) {
        if (event.target === addUserModal) { addUserModal.style.display = 'none'; }
        else if (event.target === customModal) { customModal.style.display = 'none'; }
    }
});
document.addEventListener('DOMContentLoaded', function () {
    // Check if card was deleted and show the success message
    @if(session('card_deleted'))
        showDeleteSuccessMessage();
    @endif
});

function showDeleteSuccessMessage() {
    alert('Card deleted successfully');
}

document.addEventListener('DOMContentLoaded', function () {
    // Check if card was updated and show the success message
    @if(session('card_updated'))
        showUpdateSuccessMessage();
    @endif
});

function showUpdateSuccessMessage() {
    alert('Card updated successfully');
}

document.addEventListener('DOMContentLoaded', function () {
    // Check if card was created and show the success message
    @if(session('card_created'))
        showCreateSuccessMessage();
    @endif
});

function showCreateSuccessMessage() {
    alert('Card created successfully');
}
var edittower_id;
var editfloor_id;
var edithouse_id;
function fetchCardData(cardId) {
    
    fetch(`{{ url('cards') }}/${cardId}/edit`)
        .then(response => response.json())
        .then(data => {
            document.getElementById('editCardNumber').value = data.cardnumber;
            document.getElementById('editVehicleNumber').value = data.vnumber;
            document.getElementById('editHouseNumber').value = data.housenumber;
            document.getElementById('editTowerNumber').value = data.towernumber;
            //document.getElementById('editFloorNumber').value = data.floornumber;
            edittower_id=document.getElementById('editTowerNumber').value;
           editfloor_id=data.floornumber;
           edithouse_id=data.housenumber;
            console.log('tower edit '+edittower_id)
            console.log('floor edit '+editfloor_id)
            console.log('house edit '+edithouse_id)
            FloorsToEdit(edittower_id,editfloor_id,edithouse_id);
            //document.getElementById('editFloorNumber').value = data.floornumber;
            
        })
        .catch(error => console.error('Error:', error));

        //load floors by tower
        //var tower=data.towernumber;
        

       
}
function FloorsToEdit(TowerID,FloorNo,HouseNo){
    console.log('editing floor')
    //load floor
    $.ajax({
          url: '{{ url("/getfloors") }}',
            method: 'GET',
            data: {tower_id: TowerID},
            success: function (response) {
                var floorCount = response.floorCount;
                var floorDropdown = $('#editFloorNumber');
                console.log(floorCount)

                // Clear previous options
                floorDropdown.empty();
                floorDropdown.append('<option value="0">Please Select Floor</option>');

                // Append new options based on floor count
                for (var i = 1; i <= floorCount; i++) {
                    floorDropdown.append('<option value="' + i + '">Floor ' + i + '</option>');
                }
                //document.getElementById('editFloorNumber').value = data.floornumber;
                //$('#editFloorNumber').val(FloorNo);
                console.log('floor editing '+FloorNo)
                $('#editFloorNumber').val(FloorNo);
                HouseToEdit(TowerID,FloorNo,HouseNo)
            },
            error: function (error) {
                console.log(error);
            }
        });
}

function HouseToEdit(TowerID,FloorID,HouseID){
    $.ajax({
          url: '{{ url("/getallactivehouse") }}',
            method: 'GET',
            data: {TowerNo: TowerID,FloorNo:FloorID},
            success: function (response) {
                    var houses = response.listhouses;
                    var housesDropdown = $('#editHouseNumber');
console.log(houses);
                    // Clear previous options
                    housesDropdown.empty();
                    housesDropdown.append('<option value="0">Please Select</option>');
                    // Append new options
                    $.each(houses, function (key,val) {
                        housesDropdown.append('<option value="' + val.HouseNo + '">' + val.HouseNo + '</option>');
                    });

                    console.log('house editing '+HouseID)
                $('#editHouseNumber').val(HouseID);
                },
            error: function (error) {
                console.log(error);
            }
        });
}

function showEditForm(cardId) {
    fetchCardData(cardId); // Fetch and populate the data

    var editForm = document.getElementById('editForm');
    // Dynamically set the form's action attribute
    //editForm.action = `/cards/${cardId}`;

    var customModal = document.getElementById("customModal");
    customModal.style.display = 'block';
}


document.addEventListener('DOMContentLoaded', function () {
    @if($errors->any())
        var errorMessage = @json($errors->first());
        showAlert(errorMessage);
    @endif
});

function showAlert(message) {
    alert(message); // You can replace this with custom modal logic if needed
}
</script>


@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/Vehicale_card_details.css') }}">

@endpush
