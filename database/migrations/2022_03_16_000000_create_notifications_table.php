<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Builder as SchemaBuilder;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        SchemaBuilder::defaultMorphKeyType('uuid');

        Schema::create('notifications', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('type');
            $table->morphs('notifiable');
            $table->text('data');

            $table->uuid('created_by_id')->nullable()->default(null);
            $table->foreign('created_by_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');

            $table->uuid('modified_by_id')->nullable()->default(null);
            $table->foreign('modified_by_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');

            $table->uuid('assigned_to_id')->nullable()->default(null);
            $table->foreign('assigned_to_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');

            $table->uuid('parent_id')->nullable()->default(null);

            $table->enum('status', ['ACTIVE', 'INACTIVE', 'EXPIRED'])->default('ACTIVE');

            $table->timestamp('read_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('notifications', function (Blueprint $table) {
            $table->foreign('parent_id')->references('id')->on('notifications')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}
