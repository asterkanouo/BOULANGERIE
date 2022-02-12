<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnel', function (Blueprint $table) {
            $table->integer('code_personnel', true);
            $table->text('nom')->nullable();
            $table->text('prenom')->nullable();
            $table->text('sexe')->nullable();
            $table->text('telephone')->nullable();
            $table->text('email')->nullable();
            $table->text('cni')->nullable();
            $table->date('date_embauche')->nullable();
            $table->text('poste')->nullable();
            $table->text('statut')->nullable();
            $table->text('type_contrat')->nullable();
            $table->text('matricule')->nullable();
            $table->text('matricule_cnps')->nullable();
            $table->integer('code_depot')->nullable()->index('code_depot');
            $table->text('numero')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personnel');
    }
}
