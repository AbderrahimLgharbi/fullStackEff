<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    protected $table='employes'; 
    protected $primaryKey='codeEmp'; 
    public $incrementing=false; 
    protected $fillable=['codeEmp','nomEmp','prenomEmp','dateEmbauche','dateNaissance','poste'];
    protected $casts=['dateEmbauche'=>'datetime','dateNaissance'=>'datetime']; 
    public function interventions() 
    { 
    return $this->hasMany(Intervention::class,'codeInter'); 
    } 
    public function departement() 
    {
        return $this->belongsTo(Departement::class,'codeDep'); 
    } 
    public function Materiels() 
    { 
    return $this->belongsToMany(Materiel::class,'affectations','codeMat','codeEmp') 
    ->withPivot('dateDebutAffectation','dateFinAffectation'); 
    } 

}
