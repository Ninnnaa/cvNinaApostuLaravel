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
        Schema::table('personal_data', function (Blueprint $table) {
            $table->foreignId('skill_id')
                ->constrained('skills')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('experience_id')
                ->constrained('experiences')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('personal_data', function (Blueprint $table) {
            $table->dropColumn('experience_id');
            $table->dropColumn('skill_id');
        });
    }
};
