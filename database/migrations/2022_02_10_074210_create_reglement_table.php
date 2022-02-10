<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReglementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reglement', function (Blueprint $table) {
            $table->text('codereg')->nullable();
            $table->text('codefacture')->nullable();
            $table->integer('code_client')->nullable();
            $table->dateTime('date_reglement')->nullable();
            $table->double('montant')->nullable();
            $table->integer('id_reg', true)->unique('id_reg');
            $table->text('libelle')->nullable();
            $table->text('type_reg')->nullable();
            $table->integer('code_caisse')->nullable();
            $table->text('letype')->nullable();
            $table->integer('codefournisseur')->nullable();
            $table->integer('codepersonnel')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reglement');
    }
}
