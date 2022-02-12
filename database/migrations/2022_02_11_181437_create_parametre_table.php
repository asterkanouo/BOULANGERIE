<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParametreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parametre', function (Blueprint $table) {
            $table->integer('idparametre', true);
            $table->text('raison_sociale')->nullable();
            $table->text('activite')->nullable();
            $table->text('contact')->nullable();
            $table->text('ville')->nullable();
            $table->text('niu')->nullable();
            $table->string('mp', 100)->nullable();
            $table->double('produit')->nullable();
            $table->double('marchandise')->nullable();
            $table->double('solde_max_client')->nullable();
            $table->integer('nb_facture_client')->nullable();
            $table->double('solde_max_fournisseur')->nullable();
            $table->integer('nb_facture_fournisseur')->nullable();
            $table->double('standard_production')->nullable();
            $table->integer('stock_negatif')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parametre');
    }
}
