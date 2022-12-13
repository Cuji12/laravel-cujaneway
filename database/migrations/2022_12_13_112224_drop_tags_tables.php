<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('project_tags');
        Schema::dropIfExists('post_tags');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('project_tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('project_id');
            $table->timestamps();
        });

        Schema::create('post_tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('post_id');
            $table->timestamps();
        });
    }
};
