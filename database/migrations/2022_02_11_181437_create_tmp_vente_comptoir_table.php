<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTmpVenteComptoirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tmp_vente_comptoir', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('code_personnel')->nullable();
            $table->string('id_vente', 20)->nullable();
            $table->text('designation')->nullable();
            $table->integer('qte')->nullable();
            $table->decimal('montant_brut', 10, 0)->nullable();
            $table->decimal('remise', 10, 0)->nullable();
            $table->decimal('montant_net', 10, 0)->nullable();
            $table->date('date_operation')->nullable();
            $table->string('type_vente', 20)->nullable()->comment('produit ou marchandise');
            $table->text('reference')->nullable();
            $table->integer('indicatif')->nullable();
            $table->text('clients')->nullable();
            $table->integer('code_depot')->nullable();
            $table->integer('code_comptoir')->nullable();
            $table->double('prix_unitaire')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tmp_vente_comptoir');
    }
}
