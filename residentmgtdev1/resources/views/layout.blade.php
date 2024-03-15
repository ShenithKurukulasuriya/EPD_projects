<!DOCTYPE html>
<html>
    <head>
        <title>Tenacy Management System</title>
		<link rel="stylesheet" href="{{ asset('css/layout.css') }}">
        <link rel="stylesheet" href="{{ asset('css/dataTables.min.css') }}">
        <link rel="icon" href="{{ asset('images/EPD_R.png') }}" type="image/x-icon">
        <link rel="shortcut icon" href="{{ asset('images/EPD_R.png') }}" type="image/x-icon">
		<meta charset="UTF-8">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Admin Dashboard </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
        <script src="{{ asset('js/jquery-1.9.1.min.js') }}"></script>
        <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
		@stack('styles')
    </head>
    <body>
	<section>
        <!-- User Sidebar Starts from Here -->
        <div class="navbar" id="navigation">
            <img src="{{ asset('images/EPD_R.png') }}" alt="">
            <ul class="center-nav">
                <li><i class="fa-solid fa-house"></i><a href="{{ route('Dashboard1') }}"> Dashboard </a></li>
                <li><i class="fa fa-history" aria-hidden="true"></i><a href="#"> History </a></li>
                <li><i class="fa-sharp fa-solid fa-chart-simple"></i><a href="#"> Analytics </a></li>
                <li><i class="fa fa-credit-card"></i><a href="{{ url('/cards') }}"> Vehicle Card </a></li>
                <li class="dropdown">
                        <i class="fa fa-institution"></i>
                            <a class="dropbtn" onclick="toggleDropdown()">Towers</a>
                                <div class="dropdown-content" id="dropdown-content">
                                    <a href="{{ route('towers', ['towerNumber' => 1]) }}">Tower One</a><br>
                                    <a href="{{ route('towers', ['towerNumber' => 2]) }}">Tower Two</a><br>
                                    <a href="{{ route('towers', ['towerNumber' => 5]) }}">Tower Three</a><br>
                                    <a href="{{ route('towers', ['towerNumber' => 6]) }}">Tower Four</a><br>
                                </div>
                    </li>

                <li><i class="fa-solid fa-moon"></i></i><a href="#"> Dark Mode </a></li>
            </ul>

            <!-- resources/views/dashboard.blade.php -->



            <ul class="bottom-nav">
                <hr>
                <li>
               
                @if(auth()->check())
    @if(auth()->user()->role === 'admin')
    <i class="fa-solid fa-gear"></i><a href="{{ url('/user_data1') }}"> Settings </a>
    @else
       
    <i class="fa-solid fa-gear"></i><a href="#"> Settings </a>
    @endif
@else
    <p>Please log in to access the Settings page.</p>
@endif


                </li>
                <li><i class="fa-solid fa-power-off"></i><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </a></li>
            </ul>
        </div>

        <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
    @csrf
</form>
        
        <!-- User Top Naviagation Starts from Here -->
        <div class="main-content">
            <div class="main-top">
                <div class="bars" id="menu">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>

                <x-guest-layout>
    <!-- Add this section to your view -->
    @auth
    @php
        $currentTime = now()->setTimezone('Asia/Colombo')->format('H');
        $greeting = ($currentTime >= 5 && $currentTime < 12) ? 'Good Morning' : (($currentTime >= 12 && $currentTime < 17) ? 'Good Afternoon' : 'Good Evening');
    @endphp

    <p class="greeting-text">{{ $greeting }}, {{ Auth::user()->name }}!</p>
@endauth


<div class="overlay" id="overlay"></div>


    <!-- The rest of your dashboard content goes here -->
</x-guest-layout>
                
                 <div class="user">
                  <img src="{{ asset('images/pngwingcom.png') }}" alt="User Profile" onclick="toggleMenu()">
                  <div class="sub-menu-wrap" id="subMenu">
                    <div class="sub-menu">
                        <div class="user-info">
                            <img src="{{ asset('images/pngwingcom.png') }}">
                            <h3>{{ Auth::user()->name }}</h3>
                        </div>
                        <hr>

                        <a href="#" class="sub-menu-link">
                        <h3>{{ Auth::user()->name }}</h3>
                        </a>

                        <a href="#" class="sub-menu-link">
                        <p>{{ Auth::user()->email }}</p>
                        </a>

                        <a href="{{ route('profile.edit') }}" class="edit-profile-link">Edit Profile</a>

                    </div>
                  </div>
                    </div>
                    
            </div> 
            @yield('content')
        </div>
       
      
        
    </section>
   
	<script>
    const hamburger = document.getElementById('menu');
    const navigation = document.getElementById('navigation');
    hamburger.addEventListener('click', function () {
        navigation.classList.toggle('active')
        console.log('clicked');
    })
    // Dropdown toggle script
function toggleDropdown() {
    const dropdownContent = document.getElementById('dropdown-content');
    dropdownContent.classList.toggle('show');
}
// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        for (var i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}
</script>

<script>
let subMenu = document.getElementById("subMenu")
function toggleMenu(){
    subMenu.classList.toggle("open-menu")

    
}

</script>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
<script src="{{ asset('js/node_modules/chart.js/dist/chart.min.js') }}"></script>

</main>
    </body>
</html>