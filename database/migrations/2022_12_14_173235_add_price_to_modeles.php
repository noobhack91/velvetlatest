<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPriceToModeles extends Migration
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

            $table->unsignedBigInteger('price')->nullable();
            $table->unsignedBigInteger('age')->nullable();
            $table->string('sexuality')->nullable();
            $table->string('hair')->nullable();
            $table->string('dress')->nullable();
            $table->string('ethnicity')->nullable();
            $table->string('language')->nullable();
            $table->string('availability')->nullable();
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
            $table->dropColumn('price');
            $table->dropColumn('age');
            $table->dropColumn('sexuality');
            $table->dropColumn('hair');
            $table->dropColumn('dress');
            $table->dropColumn('ethnicity');
            $table->dropColumn('language');
            $table->dropColumn('availability');
        });
    }
}
