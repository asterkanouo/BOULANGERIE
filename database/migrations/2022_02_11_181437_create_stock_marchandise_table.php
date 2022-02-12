<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockMarchandiseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_marchandise', function (Blueprint $table) {
            $table->integer('code_stock', true);
            $table->text('reference')->nullable();
            $table->integer('code_equipe')->nullable();
            $table->double('qte')->nullable();
            $table->dateTime('date_jour')->nullable();
            $table->text('mouvement')->nullable();
            $table->text('libelle_operation')->nullable();
            $table->string('ref_production', 20)->nullable()->index('index4');
            $table->integer('code_depot')->nullable()->index('index5');
            $table->integer('id_mar')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock_marchandise');
    }
}
