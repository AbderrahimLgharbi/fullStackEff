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
        Schema::create('interventions', function (Blueprint $table) {
            $table->string('codeInter');
            $table->string('codeEmp',20); 
            $table->date('dateInter');
            $table->string('codeTech');
            $table->foreign('codeEmp')->references("codeEmp")->on('employes')->onDelete('cascade')->onUpdate('cascade');
            $table->string('detailsInter');
            $table->foreign('codeTech')->references("codeTech")->on('techniciens')->onDelete('cascade')->onUpdate('cascade');
            $table->string('syntheseReparation');
            $table->date('dateFinIntervention');
            $table->timestamps();
            $table->primary('codeInter');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interventions');
    }
};
