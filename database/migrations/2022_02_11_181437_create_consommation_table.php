<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsommationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consommation', function (Blueprint $table) {
            $table->integer('code_conso', true);
            $table->integer('code_equipe')->nullable();
            $table->integer('code_matiere')->nullable();
            $table->date('date_jour')->nullable();
            $table->integer('qte_consomme')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consommation');
    }
}
