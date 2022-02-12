<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeCompteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_compte', function (Blueprint $table) {
            $table->integer('code_type', true);
            $table->text('numero')->nullable();
            $table->text('libelle')->nullable();
            $table->text('classe')->nullable();
            $table->integer('retrait')->nullable();
            $table->integer('versement')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_compte');
    }
}
