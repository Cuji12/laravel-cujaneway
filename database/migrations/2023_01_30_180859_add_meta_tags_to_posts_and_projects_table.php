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
        Schema::table('posts', function (Blueprint $table) {
            $table->renameColumn('description', 'meta_description');
        });

        Schema::table('projects', function (Blueprint $table) {
            $table->string('meta_description')->after('portrait_images');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('meta_description');
        });

        Schema::table('posts', function (Blueprint $table) {
            $table->renameColumn('meta_description', 'description');
        });
    }
};
