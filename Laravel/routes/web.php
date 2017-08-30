<?php
use Illuminate\Http\Request;
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

Route::get('/client',function(){ // Rota Client 
    return view('client');       
            
});

Route::post('/client',function(Request $request){// Recebendo os dados da  rota cliente
    return $request->get('value');
})->name('client.store');