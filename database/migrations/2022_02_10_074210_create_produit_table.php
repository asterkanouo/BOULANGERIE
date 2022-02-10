<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produit', function (Blueprint $table) {
            $table->integer('id', true);
            $table->text('reference')->nullable();
            $table->text('designation')->nullable();
            $table->decimal('prix_detail', 11, 0)->nullable()->default(0);
            $table->decimal('prix_gros', 11, 0)->nullable()->default(0);
            $table->decimal('prix_controle', 11, 0)->nullable()->default(0);
            $table->double('qte_stock')->nullable()->default(0);
            $table->double('qte_entree')->nullable()->default(0);
            $table->double('qte_sortie')->nullable()->default(0);
            $table->text('unite_stockage')->nullable();
            $table->integer('code_depot')->nullable()->index('code_depot');
            $table->text('numero')->nullable();
            $table->double('qte_attente')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produit');
    }
}
