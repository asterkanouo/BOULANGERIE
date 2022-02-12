<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLescompteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lescompte', function (Blueprint $table) {
            $table->char('numcompte', 30)->primary();
            $table->char('numero', 20)->nullable();
            $table->char('libelle_compte', 100)->nullable();
            $table->decimal('solde', 10, 0)->nullable()->default(0);
            $table->decimal('cumul_depot', 10, 0)->nullable()->default(0);
            $table->decimal('cumul_retrait', 10, 0)->nullable()->default(0);
            $table->char('type_compte', 1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lescompte');
    }
}
