<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockMpAttenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_mp_attente', function (Blueprint $table) {
            $table->integer('code_stock', true);
            $table->integer('code_mp')->nullable();
            $table->integer('code_equipe')->nullable();
            $table->double('qte')->nullable();
            $table->dateTime('date_jour')->nullable();
            $table->text('mouvement')->nullable();
            $table->text('libelle_operation')->nullable();
            $table->string('ref_production', 20)->nullable();
            $table->integer('code_depot')->nullable();
            $table->decimal('prix_achat', 10, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock_mp_attente');
    }
}
