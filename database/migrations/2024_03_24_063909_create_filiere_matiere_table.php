<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Filiere;
use App\Models\Matiere;
use App\Models\Formateur;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('filiere_matiere', function (Blueprint $table) {
            $table->incrementS('id');
            $table->date('date_deb');
            $table->date('date_fin');
            $table->integer('sale');
            $table->foreignIdFor(Filiere::class);
            $table->foreignIdFor(Matiere::class);
            $table->foreignIdFor(Formateur::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filiere_matiere');
    }
};
