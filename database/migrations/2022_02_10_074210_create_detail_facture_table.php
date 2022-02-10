<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailFactureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_facture', function (Blueprint $table) {
            $table->integer('code_detail', true);
            $table->text('codefacture')->nullable();
            $table->text('reference')->nullable();
            $table->integer('qte')->nullable();
            $table->text('designation')->nullable();
            $table->double('pu')->nullable();
            $table->double('total')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_facture');
    }
}
