<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipeChargeIndTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipe_charge_ind', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('code_equipe')->nullable();
            $table->integer('code_charge')->nullable();
            $table->integer('utilise')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipe_charge_ind');
    }
}
