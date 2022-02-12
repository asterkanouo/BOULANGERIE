<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComptoirVendeuseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comptoir_vendeuse', function (Blueprint $table) {
            $table->integer('code', true);
            $table->integer('code_personnel')->nullable();
            $table->integer('code_comptoir')->nullable();
            $table->integer('interrogation')->nullable();
            $table->integer('facturation_negative')->nullable();
            $table->integer('cloture_caisse')->nullable();
            $table->text('psw')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comptoir_vendeuse');
    }
}
