<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('translations', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('table_name');
            $table->string('column_name');
            $table->uuid('foreign_key');
            $table->string('locale');

            $table->text('value');

            $table->unique(['table_name', 'column_name', 'foreign_key'], 'idx_tcfl');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('translations');
    }
}
