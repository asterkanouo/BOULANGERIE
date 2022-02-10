<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarchandiseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marchandise', function (Blueprint $table) {
            $table->integer('id_mar', true);
            $table->string('reference', 20)->nullable();
            $table->string('designation', 200)->nullable();
            $table->double('prix_achat')->nullable();
            $table->double('prix_gros')->nullable();
            $table->double('prix_detail')->nullable();
            $table->double('dernier_prix_achat')->nullable();
            $table->integer('code_depot')->nullable();
            $table->string('numero_achat', 10)->nullable();
            $table->string('numero_vente', 10)->nullable();
            $table->double('qte_stock')->nullable();
            $table->double('qte_entree')->nullable();
            $table->double('qte_sortie')->nullable();
            $table->text('unite_achat')->nullable();
            $table->double('cmup')->nullable();
            $table->string('cond_libelle', 200)->nullable();
            $table->integer('cond_nbre')->nullable();
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
        Schema::dropIfExists('marchandise');
    }
}
