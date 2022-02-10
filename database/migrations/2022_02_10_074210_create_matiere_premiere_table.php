<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatierePremiereTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matiere_premiere', function (Blueprint $table) {
            $table->integer('code_matiere', true);
            $table->text('element')->nullable();
            $table->text('unite_consommation')->nullable();
            $table->string('prix_achat', 20)->nullable();
            $table->text('unite_achat')->nullable();
            $table->double('qte_stock')->nullable()->default(0);
            $table->double('qte_entree')->nullable()->default(0);
            $table->double('qte_sortie')->nullable()->default(0);
            $table->decimal('valeur', 11, 0)->nullable();
            $table->integer('code_depot')->nullable()->index('code_depot');
            $table->text('numero')->nullable();
            $table->double('dernier_prix_achat')->nullable();
            $table->double('cmup')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matiere_premiere');
    }
}
