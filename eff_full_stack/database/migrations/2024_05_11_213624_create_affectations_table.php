<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    { 
    Schema::create('affectations', function (Blueprint $table) { 
    $table->string('codeMat',20); 
    $table->string('codeEmp',20); 
    $table->date('dateDebutAffectation'); 
    $table->date('datefinAffectation'); 
    $table->primary(['codeMat', 'codeEmp' , 'dateDebutAffectation']); 
    $table->foreign('codeMat')->references('codeMat')->on('materiels')->onDelete('cascade')->onUpdate('cascade'); 
    $table->foreign('codeEmp')->references('codeEmp')->on('employes')->onDelete('cascade')->onUpdate('cascade'); 
    $table->timestamps(); 
    }); 
        DB::statement('ALTER TABLE affectations ADD CONSTRAINT check_dates CHECK
    (dateDebutAffectation < dateFinAffectation)'); 
    } 

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('affectations');
    }
};
