<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Etudiant;
use App\Models\Formateur;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('presences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('heur_deb');
            $table->string('heur_fin');
            $table->date('date');
            $table->foreignIdFor(Etudiant::class);
            $table->foreignIdFor(Formateur::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presences');
    }
};
