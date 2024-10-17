<?php

use FastRoute\Route as FastRouteRoute;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');


Route::get('/home/{name}', function ($name) {
    return view('home', ['name'=> $name]);
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/auth/signin', function () {
    return view('auth.signin');
});

Route::get('/auth/signup', function () {
    return view('auth.signup');
});



// Route Param
// Route::get('/user/{name}/{age}', function ($name, $age) {
//     return 'User : '.$name . ' Age is : '.$age;
// });


// Named Route
// Alias of a route
Route::get('/user/profile', function () {
    return 'Pengguna Profiles ';
})->name('user.profile');

// Route Param
Route::get('/user/{name}', function ($name) {
    return 'User : '.$name;
});



// Redirect route to Named route
Route::get('/redirect-to-profile', function () {
    return redirect()->route('user.profile');
});

//Route Group
Route::prefix('food')->group(function() {
    
    Route::get('/details', function () {
        return 'Food details are following';
    });
    
    Route::get('/home', function () {
        return 'Food home page';
    });

});


//Combination of all (Route, Named Route, Route Param, Route Group. Route Prefix)
Route::name('job')->prefix('job')->group(function() {
    
    Route::get('/home', function () {
        return 'Job home page';
    })->name('.name');
    
    Route::get('/details', function () {
        return 'Job details are following';
    })->name('.description');

});


require __DIR__.'/feed/web.php';
require __DIR__.'/auth/web.php';
