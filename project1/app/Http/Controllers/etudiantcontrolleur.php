<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class etudiantcontrolleur extends Controller
{
    public function index()
    {
        $etud=\DB:: select ("SELECT * FROM etudiants");
        return view ('etudiant',compact('etud'));
    
    }
    public function store (Request $request)
    {
        
 \DB::table('etudiants')->insert([
    'noms'=>$request->noms,
    'age'=>$request->age
     ]);  
    }
 public function edit($id)
 {
     $data=\DB::select("SELECT * FROM etudiants WHERE id= ?",[$id]);
     $etud=$data[0];
     return view('edit_etudiant',\compact('etud'));

 }

public function update(Request $request)
{
    \DB::update("UPDATE etudiants SET noms=? , age=? WHERE id=? ", [$request->noms,$request->age,$request->id]);
}

}
