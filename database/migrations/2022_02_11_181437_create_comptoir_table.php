<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComptoirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comptoir', function (Blueprint $table) {
            $table->integer('code_comptoir', true);
            $table->integer('code_client')->nullable();
            $table->text('libelle')->nullable();
            $table->integer('code_caisse')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comptoir');
    }
}
