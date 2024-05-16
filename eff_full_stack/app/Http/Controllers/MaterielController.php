<?php

namespace App\Http\Controllers;
use App\Models\Materiel; 
use Illuminate\Http\Request;

class MaterielController extends Controller
{
    public function AfficherListeMateriels() 
    { 
    $listMat=Materiel::all(); 
    return view('Materiel.index',compact("listMat")); 
    } 
    public function create() 
    { 
    return view('Materiel.create'); 
    } 
    public function AjouterMateriel(Request $request) 
    { 
    Materiel::create([ 
    'codeMat'=>$request->codeMat, 
    'marque'=>$request->marque, 
    'categorie'=>$request->categorie, 
    'DateDebutUtilisation'=>$request->DateDebutUtilisation
    ]); 
    redirect()->route('Materiel.index'); 
    } 
    public function supprimerMateriel(Materiel $materiel) 
    {
        $materiel->delete(); 
        return redirect()->route('Materiel.index'); 
    } 
}
