<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeneficiairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiaires', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('assure_id');
            $table->foreign('assure_id')->references('id')->on('assures')->name('assure_foreign_id')->onDelete('cascade');
            $table->string('nom');
            $table->string('prenom');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beneficiaires');
    }
}
