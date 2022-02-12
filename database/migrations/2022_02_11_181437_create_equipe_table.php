<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipe', function (Blueprint $table) {
            $table->integer('code_equipe', true);
            $table->text('libelle')->nullable();
            $table->double('salaire_moyen')->nullable();
            $table->text('superviseur')->nullable();
            $table->integer('nb_membre')->nullable();
            $table->integer('code_depot')->nullable()->index('code_depot');
            $table->string('mp', 100)->nullable();
            $table->double('standard_production')->nullable();
            $table->string('produit_ref', 10)->nullable();
            $table->decimal('cle_ventillation', 10, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipe');
    }
}
