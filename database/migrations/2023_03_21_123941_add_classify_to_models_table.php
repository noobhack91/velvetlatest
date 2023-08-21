<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddClassifyToModelsTable extends Migration
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
            $table->text('clothe_covered')->nullable();
            $table->text('nipple_showing')->nullable();
            $table->text('exposed_anus')->nullable();
            $table->text('simulated_acts')->nullable();
            $table->text('logos_branding')->nullable();
            $table->text('accessories')->nullable();
            $table->text('suburb')->nullable();
            $table->text('postcode')->nullable();
            $table->text('fifteen_min_incall')->nullable();
            $table->text('fifteen_min_outcall')->nullable();
            $table->text('thirteen_min_incall')->nullable();
            $table->text('thirteen_min_outcall')->nullable();
            $table->text('fourtyfive_min_incall')->nullable();
            $table->text('fourtyfive_min_outcall')->nullable();
            $table->text('hour_one_incall')->nullable();
            $table->text('hour_one_outcall')->nullable();
            $table->text('onehalf_incall')->nullable();
            $table->text('onehalf_outcall')->nullable();
            $table->text('twohour_incall')->nullable();
            $table->text('twohour_outcall')->nullable();
            $table->text('threehour_incall')->nullable();
            $table->text('threehour_call')->nullable();
            $table->text('ratesextra')->nullable();
            
            
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

            $table->dropColumn('clothe_covered');
            $table->dropColumn('nipple_showing');
            $table->dropColumn('exposed_anus');
            $table->dropColumn('simulated_acts');
            $table->dropColumn('logos_branding');
            $table->dropColumn('accessories');
            $table->dropColumn('suburb');
            $table->dropColumn('postcode');
            $table->dropColumn('fifteen_min_incall');
            $table->dropColumn('fifteen_min_outcall');
            $table->dropColumn('thirteen_min_incall');
            $table->dropColumn('thirteen_min_outcall');
            $table->dropColumn('fourtyfive_min_incall');
            $table->dropColumn('fourtyfive_min_outcall');
            $table->dropColumn('hour_one_incall');
            $table->dropColumn('hour_one_outcall');
            $table->dropColumn('onehalf_incall');
            $table->dropColumn('onehalf_outcall');
            $table->dropColumn('twohour_incall');
            $table->dropColumn('twohour_outcall');
            $table->dropColumn('threehour_incall');
            $table->dropColumn('threehour_call');
            $table->dropColumn('ratesextra');
            
        });
    }
}
