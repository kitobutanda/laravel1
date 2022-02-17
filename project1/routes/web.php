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

route::get('/toto',function(){
    return view ('toto');
});

route::get('/etudiant',function(){
    $etudiants=['toto','titi','koko','dodo'];
    return view ('etudiant',compact('etudiants'));
});
route::get('/master',function(){
    return view ('master');
});

route::get('/payement',function(){
    return view ('payement');
});