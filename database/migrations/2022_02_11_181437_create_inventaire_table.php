<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaire', function (Blueprint $table) {
            $table->integer('code', true);
            $table->string('reference', 20)->nullable();
            $table->string('designation', 100)->nullable();
            $table->double('cmup')->nullable();
            $table->double('qte_reelle')->nullable();
            $table->double('qte_reajustee')->nullable();
            $table->double('difference')->nullable();
            $table->string('ref_inventaire', 20)->nullable();
            $table->dateTime('date_inv')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventaire');
    }
}
