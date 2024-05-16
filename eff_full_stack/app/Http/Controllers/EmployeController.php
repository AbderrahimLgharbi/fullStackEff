<?php

namespace App\Http\Controllers;
use App\Models\Employe; 
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    public function AfficherListeEmployes() 
    { 
    $listEmployes=Employe::with(['Materiels','departement'])->withCount('Materiels')->get(); 
    return view('Employe.index',compact('listEmployes')); 
    } 
    public function consulterDetail($codeEmp) 
    { 
    $emp=Employe::find($codeEmp); 
    $listMat=$emp->Materiels()->withPivot('dateDebutAffectation', 'dateFinAffectation') 
    ->orderBy('dateDebutAffectation','desc')->get(); 
    return view('Materiel.detail',compact('listMat','codeEmp')); 
    } 
}
