<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assures', function (Blueprint $table) {
            $table->id(); //customer_id
            $table->string('numero_assure',60); // numero d'assuré
            $table->string('nom',60);
            $table->string('prenom',60);
            $table->date('date_naissance');
            $table->string('sexe');
            $table->string('email',100)->nullable();
            $table->text('adresse');
            $table->timestamps(); // created_at  updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assures');
    }
}
