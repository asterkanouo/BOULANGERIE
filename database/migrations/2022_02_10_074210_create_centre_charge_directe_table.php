<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentreChargeDirecteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centre_charge_directe', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nature', 200)->nullable();
            $table->string('unite_consommation', 50)->nullable();
            $table->decimal('valeur_unitaire', 10, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('centre_charge_directe');
    }
}
