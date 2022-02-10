<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketComptoirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_comptoir', function (Blueprint $table) {
            $table->integer('code_ticket', true);
            $table->string('intitule', 200)->nullable();
            $table->string('numero_ticket', 20)->nullable();
            $table->text('client')->nullable();
            $table->double('montant_brut')->nullable();
            $table->double('montant_net')->nullable();
            $table->double('montant_remise')->nullable();
            $table->date('date_operation')->nullable();
            $table->string('heure_operation', 20)->nullable();
            $table->integer('code_depot')->nullable();
            $table->integer('code_comptoir')->nullable();
            $table->integer('cloture')->nullable();
            $table->date('date_cloture')->nullable();
            $table->string('heure_cloture', 20)->nullable();
            $table->integer('num_cloture')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket_comptoir');
    }
}
