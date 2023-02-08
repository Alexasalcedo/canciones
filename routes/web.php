<?php

use Illuminate\Support\Facades\Route;

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

/* Route::get('/canciones', function () {
    $canciones = [];
    $canciones[] = ['cancion' => 'Up Up', 'artista' => 'Sandollar'];
    $canciones[] = ['cancion' => 'Run', 'artista' => 'Joji'];
    $canciones[] = ['cancion' => 'Gasoline', 'artista' =>'Halsey'];

    // dd($canciones);
    return view('canciones',compact('canciones'));
    //->with(['canciones' => $canciones]);
}); */

Route::get('/canciones/{id?}', function($id = null) {
    $canciones = [];
    $canciones[] = ['cancion' => 'Up Up', 'artista' => 'Sandollar'];
    $canciones[] = ['cancion' => 'Run', 'artista' => 'Joji'];
    $canciones[] = ['cancion' => 'Gasoline', 'artista' =>'Halsey'];

    if(!is_null($id)){
        $cancion = $canciones[$id];
    } else {
        $cancion = null;
    }

    return view('canciones',compact('canciones','cancion'));
});