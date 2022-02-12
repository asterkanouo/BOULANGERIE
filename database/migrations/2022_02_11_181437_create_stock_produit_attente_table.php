<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockProduitAttenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_produit_attente', function (Blueprint $table) {
            $table->integer('code_stock', true);
            $table->string('reference', 20)->nullable();
            $table->integer('code_equipe')->nullable();
            $table->double('qte')->nullable();
            $table->dateTime('date_jour')->nullable();
            $table->text('mouvement')->nullable();
            $table->text('libelle_operation')->nullable();
            $table->string('ref_production', 20)->nullable();
            $table->integer('code_depot')->nullable();
            $table->integer('id_produit')->nullable();
            $table->decimal('prix_controle', 10, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock_produit_attente');
    }
}
