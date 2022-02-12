<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReglementAttenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reglement_attente', function (Blueprint $table) {
            $table->text('codereg')->nullable();
            $table->string('codefacture', 20)->nullable();
            $table->integer('code_client')->nullable();
            $table->dateTime('date_reglement')->nullable();
            $table->decimal('montant', 10, 0)->nullable();
            $table->integer('id_reg', true);
            $table->text('libelle')->nullable();
            $table->text('type_reg')->nullable();
            $table->integer('code_caisse')->nullable();
            $table->text('letype')->nullable();
            $table->integer('codefournisseur')->nullable();
            $table->integer('codepersonnel')->nullable();
            $table->string('numerolot', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reglement_attente');
    }
}
