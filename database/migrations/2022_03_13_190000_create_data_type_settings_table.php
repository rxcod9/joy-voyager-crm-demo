<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTypeSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_type_settings', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('data_type_slug');

            $table->string('key');
            $table->string('display_name');
            $table->text('details')->nullable()->default(null);
            $table->string('type');
            $table->integer('order')->default('1');
            $table->string('group')->nullable();

            $table->text('value')->nullable();

            $table->unique(['data_type_slug', 'key']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_type_settings');
    }
}
