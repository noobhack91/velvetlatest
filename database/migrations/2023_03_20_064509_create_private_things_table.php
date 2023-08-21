<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrivateThingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('private_things', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->text('affectionate_cuddling')->nullable();
            $table->text('affectionate_kissing')->nullable();
            $table->text('anal_play')->nullable();
            $table->text('anal_play_on_me')->nullable();
            $table->text('anal_play_on_you')->nullable();
            $table->text('atm')->nullable();
            $table->text('b_and_d')->nullable();
            $table->text('bbbj')->nullable();
            $table->text('bdsm')->nullable();
            $table->text('bi_twin')->nullable();
            $table->text('bj')->nullable();
            $table->text('bls')->nullable();
            $table->text('bondage')->nullable();
            $table->text('brazilian')->nullable();
            $table->text('body_slide')->nullable();
            $table->text('cbj')->nullable();
            $table->text('cbt')->nullable();
            $table->text('cd')->nullable();
            $table->text('cim')->nullable();
            $table->text('cimws')->nullable();
            $table->text('cob')->nullable();
            $table->text('cof')->nullable();
            $table->text('costumes')->nullable();
            $table->text('costumes_and_role_play')->nullable();
            $table->text('couples')->nullable();
            $table->text('dinner_companion')->nullable();
            $table->text('doggy_style')->nullable();
            $table->text('dp')->nullable();
            $table->text('dt')->nullable();
            $table->text('erotic_sensual_massage')->nullable();
            $table->text('facial')->nullable();
            $table->text('fe')->nullable();
            $table->text('greek')->nullable();
            $table->text('filming')->nullable();
            $table->text('fire_and_ice_hot_and_cold_bj')->nullable();
            $table->text('gs_on_you')->nullable();
            $table->text('fk')->nullable();
            $table->text('foot_fetish')->nullable();
            $table->text('italian')->nullable();
            $table->text('gagging')->nullable();
            $table->text('gfe')->nullable();
            $table->text('light_spanking')->nullable();
            $table->text('GS')->nullable();
            $table->text('gs_on_me')->nullable();
            $table->text('massage')->nullable();
            $table->text('happy_ending')->nullable();
            $table->text('hj')->nullable();
            $table->text('milf')->nullable();
            $table->text('kissing')->nullable();
            $table->text('light_bondage')->nullable();
            $table->text('multiple_positions')->nullable();
            $table->text('lk')->nullable();
            $table->text('maid')->nullable();
            $table->text('natural_oral')->nullable();
            $table->text('masturbation')->nullable();
            $table->text('mff')->nullable();
            $table->text('pearl_necklace')->nullable();
            $table->text('mmf')->nullable();
            $table->text('msog')->nullable();
            $table->text('prostate_massage')->nullable();
            $table->text('mutual_french_oral')->nullable();
            $table->text('mutual_natural_oral')->nullable();
            $table->text('rimming')->nullable();
            $table->text('nurse')->nullable();
            $table->text('overnight_stays')->nullable();
            $table->text('role_play')->nullable();
            $table->text('photography')->nullable();
            $table->text('police_woman')->nullable();
            $table->text('sex_toys')->nullable();
            $table->text('pse')->nullable();
            $table->text('pse_with_filming')->nullable();
            $table->text('snowballing')->nullable();
            $table->text('rimming_on_me')->nullable();
            $table->text('rimming _on_you')->nullable();
            $table->text('spanking_on_me')->nullable();
            $table->text('school girl')->nullable();
            $table->string('secretary')->nullable();
            $table->string('strap_on')->nullable();
            $table->string('sexy_lingerie')->nullable();
            $table->string('sexy_shower_for_2')->nullable();
            $table->string('strip_tease')->nullable();
            $table->string('social_escort')->nullable();
            $table->string('spanish')->nullable();
            $table->string('cuddling_and_touching')->nullable();
            $table->string('spanking_on_you')->nullable();
            $table->string('squirting')->nullable();
            $table->string('mutual_masturbation')->nullable();
            $table->string('strap_on_you')->nullable();
            $table->string('teasing')->nullable();
            $table->string('tea_bagging')->nullable();
            $table->string('tromboning')->nullable();
            $table->string('erotic_relaxation')->nullable();
            $table->string('dirty_talk')->nullable();
            $table->string('full_body_massage')->nullable();
            $table->string('wax_play')->nullable();
            $table->string('overnight')->nullable();
            $table->string('passionate_kissing')->nullable();
            $table->string('sissy_play')->nullable();
            $table->string('toys')->nullable();
            $table->string('escort')->nullable();
            $table->string('wrestling')->nullable();
            $table->string('full_service')->nullable();
            $table->string('lactating')->nullable();
            $table->string('slave_sub_play')->nullable();
            $table->string('nipple_manipulation')->nullable();
            $table->string('urethral_play')->nullable();
            $table->string('electrode_play')->nullable();
            $table->string('relief')->nullable();
            $table->string('cross_dressing')->nullable();
            $table->string('latex_leather_worship')->nullable();
            $table->string('boot_worship')->nullable();
            $table->string('ball_busting')->nullable();
            $table->string('needle_play')->nullable();
            $table->string('submissive')->nullable();
            $table->string('intimidation_on_you')->nullable();
            $table->string('brown_showers')->nullable();
            $table->string('ffm')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('private_things');
    }
}
