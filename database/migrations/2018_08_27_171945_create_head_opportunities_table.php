<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeadOpportunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('head_opportunities', function (Blueprint $table) {
            $table->increments('idHeadOpportunity');
            $table->integer('idState')->index()->unsigned()->nullable(); //stato offerta, es: In Corso, Annullata, Vinta, Persa, ecc...
            $table->integer('idCustomer')->index()->unsigned()->nullable(); //offerta appartiene a un cliente
            $table->integer('idContact')->index()->unsigned()->nullable(); //offerta associata a un contatto del cliente
            $table->integer('idAgent')->index()->unsigned()->nullable(); //offerta associata a un agente
            $table->String('NrOpportunity', 15);
            $table->String('Object', 100);
            $table->date('DataCreazione');
            $table->date('DataChiusura');
            $table->decimal('Total', 8, 2); //totale opportunity previsto
            $table->text('Notes', 250); //note relative alla offerta

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
        Schema::dropIfExists('head_opportunities');
    }
}
