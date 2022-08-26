<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDossiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dossiers', function (Blueprint $table) {
            $table->id();
            $table->string('n_dossier');
            $table->string('assure_id');
            $table->string('beneficiaire_id')->nullable(); // nullable ou le changer apres en ajoutant "assure lui meme" dans le dropdown de beneficiaire
            $table->timestamps();
            // ->nullable() ajouté sans refaire la migration en changeant nul dans phpMyAdmin
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dossiers');
    }
}
