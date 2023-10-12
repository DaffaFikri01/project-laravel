<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/profile/{username}', [HomeController::class, 'index']);



Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/create', [ProductController::class, 'create']);

Route::post('/products', [ProductController::class, 'insert']);

Route::put('/products/{id}', [ProductController::class, 'update']);

Route::delete('/products/{id}', [ProductController::class, 'delete']);

/*
Route::get('/home', function () {
    return view('home');
});

Route::get('/user/{username}', function ($username) {
    return 'Hallo ' . $username;
});

Route::get('category', function () {
    echo request('sort');
    echo '<br>';
    echo request('rating');
});

Route::post('/register', function () {
    $user = [
        'name' => request('name'),
        'email' => request('email'),
        'password' => request('password')
    ];

    return $user;

    // '<input type="text" name="nama_lengkap" value="daffa">';
});
*/
