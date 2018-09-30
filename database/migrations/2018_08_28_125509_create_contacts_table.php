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
            $table->increments('id');
            $table->integer('customer_id')->index()->unsigned()->nullable(false); //relation onetomany con Customer
            $table->string('Nome', 50)->nullable(true);
            $table->string('Cognome', 50)->nullable(false);
            $table->string('Telefono', 30)->nullable(true);
            $table->string('Cellulare', 30)->nullable(true);
            $table->string('email', 100)->nullable(true);
            $table->string('Notes',250)->nullable(true);

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
