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
            $table->increments('idCustomer');
            $table->string('RagSociale', 100);
            $table->string('Indirizzo',100);
            $table->string('Citta',30);
            $table->string('Provincia',30);
            $table->string('Regione',30);
            $table->string('Telefono',15);
            $table->string('email',20);
            $table->string('website',30);
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
