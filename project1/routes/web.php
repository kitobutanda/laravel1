<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\etudiantcontrolleur;
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
//  pour afficher
route::get('/etudiant',[etudiantcontrolleur::class,'index']);
// fin afficher
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

Route::post('/store_etudiant',[etudiantcontrolleur::class,'store'])->name('store_etudiants');
// fin  insertion

//  pour ramener au form
 Route::get('/edit_etudiant/{id}',[etudiantcontrolleur::class,'edit'])->name('edit_etudiant');
//pour modifier
Route::POST('/update_etudiant',[etudiantcontrolleur::class,'update'])->name('update_etudiant');