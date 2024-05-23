<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('questions', function (Blueprint $table) {
            $table->unsignedInteger('upvotes')->default(0);
        });

        Schema::table('answers', function (Blueprint $table) {
            $table->unsignedInteger('upvotes')->default(0);
        });
    }

    public function down()
    {
        Schema::table('questions', function (Blueprint $table) {
            $table->dropColumn('upvotes');
        });

        Schema::table('answers', function (Blueprint $table) {
            $table->dropColumn('upvotes');
        });
    }
};