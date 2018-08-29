<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('idContact');
            $table->integer('idCustomer')->index()->unsigned()->nullable(); //relation onetomany con Customer
            $table->string('Nome', 30);
            $table->string('Cognome', 30);
            $table->string('Telefono', 20);
            $table->string('Cellulare', 20);
            $table->string('email', 30);
            $table->string('Notes',250);

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
        Schema::dropIfExists('contacts');
    }
}
