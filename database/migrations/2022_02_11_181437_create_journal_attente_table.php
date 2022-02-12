<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJournalAttenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journal_attente', function (Blueprint $table) {
            $table->integer('code_journal', true);
            $table->dateTime('date_journal')->nullable();
            $table->string('heure_journal', 20)->nullable();
            $table->string('numcompte', 20)->nullable();
            $table->decimal('credit', 10)->nullable();
            $table->decimal('debit', 10)->nullable();
            $table->char('type_opertion', 50)->nullable();
            $table->decimal('num_transaction', 20, 0)->nullable();
            $table->text('numpiece')->nullable();
            $table->text('libelle')->nullable();
            $table->text('codejournal')->nullable();
            $table->integer('code_depot')->nullable();
            $table->string('numerolot', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('journal_attente');
    }
}
