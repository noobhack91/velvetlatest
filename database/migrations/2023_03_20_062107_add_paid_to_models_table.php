<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPaidToModelsTable extends Migration
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
            $table->string('gender')->nullable();
            $table->string('landline_number')->nullable();
            $table->string('display_landline_number_public')->nullable();
            $table->string('website')->nullable();
            $table->string('social_media')->nullable();
            $table->string('preferred_contact_methods')->nullable();
            $table->string('hair_style')->nullable();
            $table->string('spoken_language')->nullable();
            $table->string('body_type')->nullable();
            $table->string('escort_for')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('review')->nullable();
            

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
            $table->dropColumn('gender');
            $table->dropColumn('landline_number');
            $table->dropColumn('display_landline_number_public');
            $table->dropColumn('website');
            $table->dropColumn('social_media');
            $table->dropColumn('preferred_contact_methods');
            $table->dropColumn('hair_style');
            $table->dropColumn('spoken_language');
            $table->dropColumn('body_type');
            $table->dropColumn('escort_for');
            $table->dropColumn('body_type');
            $table->dropColumn('title');
            $table->dropColumn('description');
            $table->dropColumn('review');

        });
    }
}
