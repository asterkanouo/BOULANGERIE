<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarchandiseTmpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marchandise_tmp', function (Blueprint $table) {
            $table->integer('id_mar', true);
            $table->string('reference', 20)->nullable();
            $table->integer('code_depot')->nullable()->index('ind25');
            $table->double('qte_stock')->nullable();
            $table->double('qte_entree')->nullable();
            $table->double('qte_sortie')->nullable();
            $table->string('code_facture', 20)->nullable()->index('ind26');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marchandise_tmp');
    }
}
