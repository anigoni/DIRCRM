<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agencies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('RagSociale', 100)->nullable(false);
            $table->string('Riferimento', 50)->nullable(true);
            $table->string('Telefono', 30)->nullable(true);
            $table->string('email', 100)->nullable(true);
            $table->string('Indirizzo', 150)->nullable(true);
            $table->string('Citta', 50)->nullable(true);
            $table->string('CAP', 10)->nullable(true);
            $table->string('Provincia', 30)->nullable(true);
            $table->string('Regione', 30)->nullable(true);
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
        Schema::dropIfExists('agencies');
    }
}
