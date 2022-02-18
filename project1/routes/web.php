<?php

use Illuminate\Support\Facades\Route;
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

route::get('/kito',function(){
    return view ('kito');
});

route::get('/etudiant',function(){
    $etudiants=['toto','titi','koko','dodo'];
    return view ('etudiant',compact('etudiants'));
});
route::get('/master',function(){
    return view ('master');
});

route::get('/finance',function(){
    return view ('payement');
})->name('payement');
route::get('/new_etudiant', function(){
return view('new_etudiant');
})->name('new');

// insertion dans la bd

Route::post('/store_etudiant',function(Request $request)
{
 \DB::table('etudiants')->insert([
'noms'=>$request->noms,
'age'=>$request->age
 ]);  
}
)->name('store_etudiants');
// fin route insert