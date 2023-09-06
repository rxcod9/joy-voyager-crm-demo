<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AddFieldsSamplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('samples', function (Blueprint $table) {
            $table->json('multiple_images')->nullable()->after('image');
            $table->json('media_picker')->nullable()->after('multiple_images');
            $table->string('multiple_checkbox')->nullable()->after('checkbox');
            $table->string('multiple_select')->nullable()->after('select');
            $table->point('coordinates')->nullable()->after('week');
            $table->json('browse')->nullable()->change();
            $table->json('upload')->nullable()->change();
            $table->json('upload_multiple')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('samples', function (Blueprint $table) {
            $table->dropColumn('multiple_images');
            $table->dropColumn('media_picker');
            $table->dropColumn('multi_checkbox');
            $table->dropColumn('multiple_select');
            $table->dropColumn('coordinates');
            $table->string('browse')->nullable()->change();
            $table->string('upload')->nullable()->change();
            $table->string('upload_multiple')->nullable()->change();
        });
    }
}
