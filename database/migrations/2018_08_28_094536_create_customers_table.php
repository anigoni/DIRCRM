<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('RagSociale', 100)->nullable(false);
            $table->string('Indirizzo',100)->nullable(true);
            $table->string('CAP', 10)->nullable(true);
            $table->string('Citta',50)->nullable(true);
            $table->string('Provincia',30)->nullable(true);
            $table->string('Regione',30)->nullable(true);
            $table->string('Telefono',30)->nullable(true);
            $table->string('email',100)->nullable(true);
            $table->string('website',100)->nullable(true);
            $table->integer('is_active')->defautl(0); //0=inactive/sospeso, 1=active
            $table->integer('is_potential')->defautl(0); //0=no offerte fatte, 1=offerte fatte
            $table->integer('is_lead')->defautl(1); //0=è già cliente, 1=è un lead
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
        Schema::dropIfExists('customers');
    }
}
