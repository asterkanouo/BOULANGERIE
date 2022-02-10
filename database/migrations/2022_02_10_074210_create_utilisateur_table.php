<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateur', function (Blueprint $table) {
            $table->integer('code_user', true)->index('code_user');
            $table->text('compte')->nullable();
            $table->text('psw')->nullable();
            $table->text('nom')->nullable();
            $table->text('prenom')->nullable();
            $table->integer('code_groupe')->nullable();
            $table->text('statut')->nullable();
            $table->string('email', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilisateur');
    }
}
