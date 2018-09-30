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
            $table->increments('id');
            $table->integer('state_id')->index()->unsigned()->nullable(false); //stato offerta, es: In Corso, Annullata, Vinta, Persa, ecc...
            $table->integer('customer_id')->index()->unsigned()->nullable(false); //offerta appartiene a un cliente
            $table->integer('contact_id')->index()->unsigned()->nullable(true); //offerta associata a un contatto del cliente
            $table->integer('agent_id')->index()->unsigned()->nullable(true); //offerta associata a un agente
            $table->String('NrOpportunity', 15)->nullable(true);
            $table->String('Object', 100);
            $table->date('DataCreazione');
            $table->date('DataChiusura');
            $table->decimal('Total', 8, 2); //totale opportunity previsto
            $table->text('Notes', 250)->nullable(true); //note relative alla offerta

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
