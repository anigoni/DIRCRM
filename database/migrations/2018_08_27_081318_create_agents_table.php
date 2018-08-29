<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->increments('idAgent');
            $table->integer('idAgency')->index()->unsigned()->nullable(); //relazione onetomany con Agency
            $table->integer('is_active')->defautl(0); //0=inactive, 1=active
            $table->string('Nome', 30);
            $table->string('Cognome', 30);
            $table->string('Telefono', 20);
            $table->string('Cellulare', 20);
            $table->string('email', 30);
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
        Schema::dropIfExists('agents');
    }
}
