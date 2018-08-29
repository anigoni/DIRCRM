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
            $table->increments('idAgency');
            $table->string('RagSociale', 100);
            $table->string('Riferimento', 30);
            $table->string('Telefono', 15);
            $table->string('email', 15);
            $table->string('Indirizzo', 100);
            $table->string('Citta', 30);
            $table->string('Provincia', 15);
            $table->string('Regione', 30);
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
