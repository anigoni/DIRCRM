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
            $table->increments('id');
            $table->integer('agency_id')->index()->unsigned()->nullable(false); //relazione onetomany con Agency
            $table->integer('is_active')->defautl(0); //0=inactive, 1=active
            $table->string('Nome', 50)->nullable(true);
            $table->string('Cognome', 50)->nullable(false);
            $table->string('Telefono', 30)->nullable(true);
            $table->string('Cellulare', 30)->nullable(true);
            $table->string('email', 100)->nullable(true);
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
