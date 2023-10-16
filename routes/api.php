<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/', [HomeController::class, 'index']);


Route::get('/profil/{username}', [HomeController::class, 'profil']);



Route::get('/products', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'store']);
Route::put('/products/{id}', [ProductController::class, 'update']);
Route::delete('products/{id}', [ProductController::class, 'delete']);

// Route::get('/user/{username}', function ($username) {
//     return 'Hello ' . $username;
// });

// Route::post('/register', function () {
//     $user = [
//         'name' => request('name'),
//         'email' => request('email')
//     ];

//     return $user;
//     // '<input type="text" name="email" value="daffa">';
// });

// Route::get('category', function () {
//     echo request('sort');
//     echo '<br>';
//     echo request('rating');
// });

// Route::post('/about', function () {
//     return 'halaman about';
// });
