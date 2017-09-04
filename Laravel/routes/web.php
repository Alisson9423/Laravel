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

Route::group(['prefix'=>'eloquent', 'as'=>'eloquent.'],function(){
    Route::get('clients','EloquentClientsController@index')->name('client.list');
    Route::get('clients/create','EloquentClientsController@create')->name('client.create');
    Route::post('clients/store','EloquentClientsController@store')->name('client.store');
     
});

Route::group(['prefix'=>'admin', 'as'=>'admin.'],function(){
    Route::get('client','clientsController@index');

    Route::post('cliente','clientsController@store')->name('client.store'); 
});


Route::group(['prefix'=>'', 'as'=>'site.'],function(){
    Route::get('client','SiteClientsController@index');

    Route::post('cliente','SiteClientsController@store')->name('client.store'); 
});



Route::get('/client/{id}/{name?}',function($id, $name= 'Alisson' ){ 
    return view('client-name')
            ->with('id',$id)
            ->with('name',$name)
            ->with("conteudo","teste");       
});

Route::get('if-for',function(){  
    return view('if-for');       
});