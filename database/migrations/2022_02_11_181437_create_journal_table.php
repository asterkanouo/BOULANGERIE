<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJournalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journal', function (Blueprint $table) {
            $table->integer('code_journal', true);
            $table->dateTime('date_journal')->nullable();
            $table->dateTime('heure_journal')->nullable();
            $table->char('numcompte', 20)->nullable()->index('numcompte');
            $table->decimal('credit', 10, 0)->nullable();
            $table->decimal('debit', 10, 0)->nullable();
            $table->char('type_opertion', 50)->nullable();
            $table->decimal('num_transaction', 20, 0)->nullable();
            $table->text('numpiece')->nullable();
            $table->text('libelle')->nullable();
            $table->text('codejournal')->nullable();
            $table->integer('code_depot')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('journal');
    }
}
