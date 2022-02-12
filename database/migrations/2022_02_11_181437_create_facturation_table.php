<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturation', function (Blueprint $table) {
            $table->text('codefacture')->nullable();
            $table->integer('code_client')->nullable();
            $table->date('date_facture')->nullable();
            $table->double('remise')->nullable();
            $table->double('total')->nullable();
            $table->double('net')->nullable();
            $table->integer('id_facture', true)->unique('id_facture');
            $table->integer('codefournisseur')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturation');
    }
}
