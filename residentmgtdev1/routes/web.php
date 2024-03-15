<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Auth\CustomLoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\TowerController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChartController;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';





    // Custom login route
Route::get('/custom-login', [CustomLoginController::class, 'showLoginForm'])->name('custom-login');

// Test database connection
Route::get('/testdb', function () {
    try {
        DB::connection()->getPdo();
        $message = 'Connected to the database successfully!';
    } catch (\Exception $e) {
        $message = 'Connection failed: ' . $e->getMessage();
    }
    return view('database_test', ['message' => $message]);
});

// Miscellaneous routes


Route::middleware('auth')->group(function(){
// GET route to display the cards page
Route::get('/cards', [CardController::class, 'index'])->name('cards.index');

// POST route to handle form submission to /cards
Route::post('/cards', [CardController::class, 'store'])->name('cards.store');

Route::delete('/cardsn/{card}', [CardController::class, 'destroy'])->name('cards.destroy');

Route::put('/cards/{card}', [CardController::class, 'update'])->name('cards.update');

Route::get('/cards/{card}/edit', [CardController::class, 'edit'])->name('cards.edit');

Route::get('/user/login', function () {
    return view('EPD');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/residents', function () {
    return view('residents');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/tower1', function () {
    return view('towers');
});

Route::get('/floors', function () {
    return view('floors');
});

Route::get('/House', function () {
    return view('House_Details');
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/hdata', function () {
    return view('housedata');
});

Route::get('/user_data2', function () {
    return view('user_data2');
});


Route::get('/user_data1', function () {
    return view('user_data1');
})->name('user_data1');


Route::get('/profile_manager', function () {
    // Retrieve all users from the User model
    $users = User::all();

    // Pass the $users variable to the 'profile_manager' view
    return view('profile_manager', compact('users'));
})->name('profile_manager');

Route::get('/this', function () {
    return view('thistest');
});

Route::get('/Dashboard1', [ChartController::class, 'index'])->name('Dashboard1');


Route::get('/users', [UserController::class, 'index'])->name('users.index');

// Dashboard route


//Route::get('/floors/{floor}/houses', [HouseController::class, 'showHouses'])->name('floors.houses');
Route::get('/floors/{towerId}/{floor}/houses', [HouseController::class, 'showHouses'])->name('floors.houses');

Route::get('/tower1/{towerNumber}', [TowerController::class, 'showTower1'])->name('towers');

Route::resource('houses', HouseController::class);

// Display a listing of houses
Route::get('/houses', [HouseController::class, 'index'])->name('houses.index');

// Store a newly created house in storage
Route::post('/houses', [HouseController::class, 'store'])->name('houses.store');


// Vehicle card details routes
// GET route to display the form for vehicle card details

Route::get('/vehicale-card-details', [CardController::class, 'create'])->name('vehicale_card_details.create');

// POST route to handle form submission for vehicle card details
Route::post('/vehicale-card-details', [CardController::class, 'store'])->name('vehicale_card_details.store');



//Route::get('/housedata', [TowerController::class, 'showHouseSettings'])->name('housedata');

Route::get('/gettowers', [TowerController::class, 'getalltowers']);

//Route::get('/getfloors', [TowerController::class, 'getFloorsByTower']);
Route::get('/getfloors', [TowerController::class, 'getFloorsByTower'])->name('getfloors');

Route::get('/getallactivehouse', [HouseController::class, 'getActiveHouses'])->name('getallactivehouse');

Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');




Route::middleware(['auth', 'admin'])->group(function () {
    // Admin routes here
    Route::get('/admin/dashboard', 'AdminController@dashboard');
});

// In your routes file

Route::get('/settings', 'SettingsController@index')->middleware('admin');



Route::post('/register', [RegisteredUserController::class, 'create'])
    ->middleware(['guest'])
    ->name('register');

    
Route::post('/register', [RegisteredUserController::class, 'store'])
->middleware(['guest']);

Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

Route::post('/create-user', [UserController::class, 'createUser'])->name('createUser');

Route::patch('/users/{user}', [UserController::class, 'update'])->name('updateUser');

});