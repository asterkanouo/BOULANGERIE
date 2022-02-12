<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitTmpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produit_tmp', function (Blueprint $table) {
            $table->integer('id')->default(0);
            $table->text('reference')->nullable();
            $table->double('qte_stock')->nullable()->default(0);
            $table->integer('code_depot')->nullable();
            $table->string('code_facture', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produit_tmp');
    }
}
