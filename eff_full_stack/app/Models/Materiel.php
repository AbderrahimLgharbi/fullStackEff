<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materiel extends Model
{
    use HasFactory;
    protected $primaryKey = 'codeMat'; 
protected $table = 'materiels'; 
public $incrementing = false ; 
protected $fillable=['codeMat', 'marque', 'description', 'dateDebutUtilisation']; 
protected $casts=['dateDebutUtilisation'=>'datetime']; 
public function employesUs(){ 
return $this->belongsToMany(Employe::class,'affectations', 'codeMat' , 'codeEmp') 
->withPivot('dateDebutAffectation','dateFinAffectation'); 
}
}
