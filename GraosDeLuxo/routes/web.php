<?php

use App\Http\Controllers\ProfileController;
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
    return view('home');
});



Route::group(['middleware' => 'preventBackHistory'],function() { // evita que o usuário volte para as páginas (de usuário logado) quando fazer o logout
    Route::group( ['middleware' => ['auth'] ], function() {

    });
});

require __DIR__.'/auth.php';
