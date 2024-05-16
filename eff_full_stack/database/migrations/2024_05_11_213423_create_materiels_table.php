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
        Schema::create('materiels', function (Blueprint $table) {
            $table->string('codeMat');
            $table->string('marque');
            $table->string('categiorie');
            $table->date('dateDebutAffectation');
            $table->date('dateFinAffectation');
            $table->timestamps();
            $table->primary('codeMat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materiels');
    }
};
