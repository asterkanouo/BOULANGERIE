<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id', true)->index('code_user');
            $table->text('compte')->nullable();
            $table->text('password')->nullable();
            $table->text('nom')->nullable();
            $table->text('prenom')->nullable();
            $table->integer('code_groupe')->nullable();
            $table->text('statut')->nullable();
            $table->string('email', 50);
            $table->timestamp('updated_at');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
