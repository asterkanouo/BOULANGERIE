<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->integer('codeclient', true);
            $table->text('nom')->nullable();
            $table->text('prenom')->nullable();
            $table->text('type_client')->nullable();
            $table->double('solde')->nullable();
            $table->text('telephone')->nullable();
            $table->double('solde_initial')->nullable();
            $table->integer('code_depot')->nullable()->index('code_depot');
            $table->text('numero')->nullable();
            $table->string('types', 20)->nullable();
            $table->integer('multi_depot_caisse')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
