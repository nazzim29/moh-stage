<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCommuneToActesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('actes', function (Blueprint $table) {
            $table->unsignedBigInteger('dossier_id');
            $table->foreign('dossier_id')->references('id')->on('dossiers')->name('dossier_foreign_id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('actes', function (Blueprint $table) {
            //
        });
    }
}
