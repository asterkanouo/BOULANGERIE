<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarcodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barcode', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('barcode', 300)->nullable();
            $table->string('code_facture', 20)->nullable()->index('ind28');
            $table->string('designation', 200)->nullable();
            $table->double('prix')->nullable();
            $table->string('reference', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barcode');
    }
}
