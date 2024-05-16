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
        Schema::create('employes', function (Blueprint $table) {
            $table->string('codeEmp',255);
            $table->string('codeDep',22);
            
            $table->string('nomEmp',33);
            $table->string('prenomEmp',55);
            $table->date('dateEmbauche');
            $table->date('dateNaissance');
            $table->string('poste',43);
            $table->primary(['codeEmp','codeDep']);
            $table->foreign('codeDep')->references("codeDep")->on('departements')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employes');
    }
};
