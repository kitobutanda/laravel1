<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class etudiantcontrolleur extends Controller
{
    public function index()
    {
        $etud=\DB:: select ("SELECT * FROM etudiants ORDER BY id DESC");
        return view ('etudiant',compact('etud'));
    
    }
    public function store (Request $request)
    {

    
        $request->validate([
            'noms'=>'required',
            'age'=>'required'
        ]);
        
       \DB::table('etudiants')->insert([
    'noms'=>$request->noms,
    'age'=>$request->age
     ]);
     //back retourne l'alerte sur la meme page
    // return back()->with('message','inserer avec succes')  ;
    // redirect permet de retourner un message a l'autre page
    return redirect()->route('etudiant') ->with('message','inserer avec succes');
         
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
public function destroy($id)
{
    \DB::update("DELETE FROM  etudiants  WHERE id=? ",[$id]);
    // return view('etudiant');
    return redirect()->route('etudiant')->with('destroyed','supression avec success');

}
}
