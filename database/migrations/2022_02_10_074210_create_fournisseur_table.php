<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFournisseurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fournisseur', function (Blueprint $table) {
            $table->integer('codefournisseur', true);
            $table->text('nom')->nullable();
            $table->text('prenom')->nullable();
            $table->text('type_fournisseur')->nullable();
            $table->double('solde')->nullable();
            $table->text('telephone')->nullable();
            $table->double('solde_initial')->nullable();
            $table->integer('code_depot')->nullable();
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
        Schema::dropIfExists('fournisseur');
    }
}
