<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Filiere;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('nom_etu');
            $table->string('pre_etu');
            $table->string('num_matri');
            $table->string('an_c');
            $table->string('tel');
            $table->foreignIdFor(Filiere::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
