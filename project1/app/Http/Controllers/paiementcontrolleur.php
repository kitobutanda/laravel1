<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class paiementcontrolleur extends Controller
{
    //

    public function index()
    {
$paie=\DB::select("SELECT * FROM paiements");
return view('paiement',compact('paie'));
    }
    public function store(Request $request)

    {
        \DB::table('paiements')->insert([
            'frais'->$request->frais,
            'responsable'->$request->responsable
        ]);
        return redirecr()->route('paiement');
    }
}
