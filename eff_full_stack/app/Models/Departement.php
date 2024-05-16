<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory; 
    protected $primaryKey='codeDep'; 
    protected $table='departements'; 
    public $incrementing=false; 
    protected $fillable=['codeDep','nomDep']; 
    public function employes() 
    { 
        return $this->hasMany(Employe::class); 
    } 
}
