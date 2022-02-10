<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockProduitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_produit', function (Blueprint $table) {
            $table->integer('code_stock', true);
            $table->text('reference')->nullable();
            $table->integer('code_equipe')->nullable()->index('index11');
            $table->double('qte')->nullable();
            $table->dateTime('date_jour')->nullable();
            $table->text('mouvement')->nullable();
            $table->text('libelle_operation')->nullable();
            $table->string('ref_production', 20)->nullable()->index('index3');
            $table->integer('code_depot')->nullable()->index('index7');
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
        Schema::dropIfExists('stock_produit');
    }
}
