<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfileToModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('models', function (Blueprint $table) {
            //
            $table->string('image_name')->nullable();
            $table->string('image_path')->nullable();
            $table->unsignedBigInteger('height')->nullable();
            $table->unsignedBigInteger('bust')->nullable();
            $table->unsignedBigInteger('waist')->nullable();
            $table->unsignedBigInteger('hips')->nullable();
            $table->string('shoe')->nullable();
            $table->string('eyes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('models', function (Blueprint $table) {
            //
            $table->dropColumn('image_name');
            $table->dropColumn('image_path');
            $table->dropColumn('height');
            $table->dropColumn('bust');
            $table->dropColumn('waist');
            $table->dropColumn('hips');
            $table->dropColumn('shoe');
            $table->dropColumn('eyes');
        });
    }
}
