



@extends('pages.master')
@section('page_title',"Velvet Klub")
@section('page_description',"Find a Best Escort at your area. No fake profiles on Velvet Klub. Best Escort Listing site. High Profile Escort Listing.")
@section('page_keyboard','Escort Services')
@section('content')


<section class="ds model-page custom-model-detail section_padding_70 section_padding_bottom_60 columns_padding_25">
				<div class="container">
					<div class="row">

						<div class="col-md-5 col-md-5">
							<div class="vertical-item with_background models_square">
								<div class="item-media">
                                @if(isset($model->modeles['image_name']) && $model->modeles['image_name'] !='')

                                <!--<img src="{{ asset('images/no-image.png') }}" alt="" width="300" height="500p">-->

                                <img src="{{ asset('images/'.$model->modeles['image_name']) }}" alt=""> 

                                @else
                                <img src="{{ asset('images/no-image.png') }}" alt="">

                                @endif

								</div>

								<div class="filters isotope_filters topmargin_50">
    								<a href="#" data-filter="*" class="selected">All</a>
    								<a href="#" data-filter=".videos">Videos</a>
    								<!--<a href="#" data-filter=".editorials">Editorials</a> -->
    								<a href="#" data-filter=".snaps">Snaps</a>
    							</div>
								<!-- <div class="item-content with_padding">
									<h2 class="big topmargin_0 bottommargin_25">{{$model ? $model->name:''}}</h2>
									<div class="page_social_icons">
										<a class="social-icon color-bg-icon soc-facebook" href="#" title="Facebook"></a>
										<a class="social-icon color-bg-icon soc-twitter" href="#" title="Twitter"></a>
										<a class="social-icon color-bg-icon soc-google" href="#" title="Google"></a>
										<a class="social-icon color-bg-icon soc-linkedin" href="#" title="LinkedIn"></a>
										<a class="social-icon color-bg-icon soc-pinterest" href="#" title="Pinterest"></a>
									</div>
								</div> -->

								<div class="columns_padding_5">
								<div class="isotope_container isotope row masonry-layout <?php if(Auth::check()) { echo '';} else{ echo"blur";} ?>" data-filters=".isotope_filters">


                                    @if(isset($model->UserGallary) && !empty($model->UserGallary))
                                        @foreach($model->UserGallary as $usergallary)
                                        @if(file_exists(public_path('gallarydata/'.$usergallary->filename)))
                                        <?php

                                        $mimeType = mime_content_type(public_path('gallarydata/' . $usergallary->filename));
                                        $fileType = explode('/', $mimeType)[0];
                                        ?>
                                        @if($fileType=='image')
                                        <div class="isotope-item bottommargin_10 col-md-3 col-sm-4 col-xs-6 snaps">
                                            <div class="vertical-item gallery-item content-absolute text-center cs">
                                                <div class="item-media">
                                                    <img src="{{$usergallary->file_url}}" alt=""> 
                                                    <div class="media-links">

                                                        <a class="prettyPhoto abs-link" title="" data-gal="prettyPhoto[gal]" href="{{$usergallary->file_url}}"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        @endif
                                        @if($fileType=='video')
                                        <div class="isotope-item bottommargin_10 col-md-6 col-sm-6 col-xs-6 videos">
                                            <div class="vertical-item gallery-item content-absolute text-center cs">
                                                <div class="item-media">
                                                    <video width="320" height="240" controls>
                                        <source src="{{$usergallary->file_url}}" type="video/mp4">
                                        </video>


                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endif
                                        @endforeach
                                        @endif
                                    </div>
								<!-- eof .isotope_container.row -->
							</div>

<form method="POST" name="favorite" id="fav">
    @csrf

    @method('POST')
    <input type="hidden" name="model_id" value="{{$model ? $model->id:''}}">
    <input type="hidden" name="liked" value="{{ $userfavorite ? 'true' : 'false' }}">
    <button type="submit" id="favsub" name="favorite">
        <i id="favmatrial" class="material-icons" style="font-size:30px;color:{{ $userfavorite ? 'red' : '' }}">favorite</i>
    </button>
</form>


								<a href="#" id="videocall" data-id="{{$model ? $model->id:''}}" class="btn">Video Call</a>



							<!--	<div class="item-content with_padding">
									<ul class="media-list">
										<li class="media">
											<div class="media-left">
												<i class="rt-icon2-location2 highlight"></i>
											</div>
											<div class="media-body">
												<span class="bold fontsize_12 text-uppercase grey">Address:</span>
												<br>
												<span>{{$model->modeles ? $model->modeles['street_address']:''}}</span>
											</div>
										</li>
										<li class="media">
											<div class="media-left">
												<i class="rt-icon2-phone5 highlight"></i>
											</div>
											<div class="media-body">
												<span class="bold fontsize_12 text-uppercase grey">Phone:</span>
												<br>
												<span><a href="tel:{{$model->modeles ? $model->modeles['phone']:''}}">{{$model->modeles ? $model->modeles['phone']:''}}</span>
											</div>
										</li>
										<li class="media">
											<div class="media-left">
												<i class="rt-icon2-mail highlight"></i>
											</div>
											<div class="media-body">
												<span class="bold fontsize_12 text-uppercase grey">Email:</span>
												<br>
												<a href="mailto:{{$model ? $model->email:''}}">
													<em>{{$model ? $model->email:''}}</em>
												</a>
											</div>
										</li>
									</ul>
								</div>-->


							</div>

						</div>

						<div class="col-md-7 col-md-7">
							<div class="custom-mdd">
								<div class="custom-inner-mdd">
								    <h3 class="topmargin_0 bottommargin_30">Name</h3><h4 class="topmargin_0 bottommargin_30">{{isset($model) ? $model->name:''}}</h4>
								</div>
								<div class="custom-inner-mdd">
									<h3 class="topmargin_0 bottommargin_30">About Model</h3>
									<p>{!! $model->modeles ? $model->modeles['description']:'' !!}</p>
								</div>
								<div class="custom-inner-mdd">
									<h3 class="topmargin_0 bottommargin_30">Address</h3>
                                    <?php
                                    $street_address=$model->modeles ? $model->modeles['street_address']:'';
                                    if( $street_address){
                                        ?>
                                         <a href="{{ url($model->modeles->get_location($street_address)) }}" target="_blank"><p>{{$model->modeles ? $model->modeles['street_address']:''}}</p></a>
									{{-- <p>{{$model->modeles ? $model->modeles['state']:''}}</p> --}}
                                        <?php
                                    }
                                    ?>
                                   
								</div>
                                
								@if(isset($model->modeles) && $model->modeles['display_landline_number_public'] == 'on')
								<div class="custom-inner-mdd">
									<h3 class="topmargin_0 bottommargin_30">Phone</h3>
                                    <a href="tel:+{{ $model->modeles ? $model->modeles['landline_number']:'' }}"><p>{{$model->modeles ? $model->modeles['landline_number']:''}}</p></a>
									{{-- <p>{{$model->modeles ? $model->modeles['landline_number']:''}}</p> --}}
								</div>
								@endif
								<div class="custom-inner-mdd">
									<h3 class="topmargin_0 bottommargin_30">Email</h3>
                                        <a href="mailto:{{ isset($model) ? $model->email:''}}"><p>{{isset($model) ? $model->email:''}}</p></a>
									{{-- <p>{{isset($model) ? $model->email:''}}</p> --}}
								</div>
							</div>





							<div class="model-parameters grey gradient_bg_goriz before_cover">
									<!--<div class="bg_overlay"></div>-->
									<h3>Quick Facts</h3>
									<ul class="custom-model-parameter-facts">
									    <li>
        									<div class="inner-cmpf">
        										<span class="bold">Height</span>

        										<span>{{$model->modeles ? $model->modeles['height']:''}}</span>
        									</div>
        								</li>
        								<li>
        									<div class="inner-cmpf">
        										<span class="bold">Bust</span>

        										<span>{{$model->modeles ? $model->modeles['bust']:''}}</span>
        									</div>
        								</li>
									    <li>
        									<div class="inner-cmpf">
        										<span class="bold">Hair Colour</span>

        										<span>{{$model->modeles ? ucfirst($model->modeles['hair']):''}}</span>
        									</div>
        								</li>
        								<li>
        									<div class="inner-cmpf">
        										<span class="bold">Spoken Language</span>

        										<span>{{$model->modeles ? ucfirst($model->modeles['spoken_language']):''}}</span>
        									</div>
        								</li>
        								<li>
        									<div class="inner-cmpf">
        										<span class="bold">Ethnicity</span>

        										<span>{{$model->modeles ? ucfirst($model->modeles['ethnicity']):''}}</span>
        									</div>

    									<li>
        									<div class="inner-cmpf">
        										<span class="bold">Eyes</span>

        										<span>{{$model->modeles ? ucfirst($model->modeles['eyes']):''}}</span>
        									</div>
    									</li>

									</ul>
								</div>

								<div class="custom-availabilty">
								    <h3>Availability</h3>
								    <table>
								        <thead>
								            <tr>
								                <th></th>
								                <th></th>
								                <!--<th>To</th>-->
								            </tr>
								        </thead>
								        <tbody>
								            <tr>
								                <td>Mon</td>
								                <td>Available 24 Hours</td>
								                <!--<td></td>-->
								            </tr>
								            <tr>
								                <td>Tue</td>
								                <td>Available 24 Hours</td>
								                <!--<td></td>-->
								            </tr>
								            <tr>
								                <td>Wed</td>
								                <td>Available 24 Hours</td>
								                <!--<td></td>-->
								            </tr>
								            <tr>
								                <td>Thu</td>
								                <td>Available 24 Hours</td>
								                <!--<td></td>-->
								            </tr>
								            <tr>
								                <td>Fri</td>
								                <td>Available 24 Hours</td>
								                <!--<td></td>-->
								            </tr>
								            <tr>
								                <td>Sat</td>
								                <td>Available 24 Hours</td>
								                <!--<td></td>-->
								            </tr>
								            <tr>
								                <td>Sun</td>
								                <td>Available 24 Hours</td>
								                <!--<td></td>-->
								            </tr>
								        </tbody>
								    </table>
								</div>

								<div class="custom-rates-from">
								    <h3>Rate</h3>
								    <p>{!!$model->modeles ? $model->modeles['ratesextra']:''!!}</p>
								    <!--<table>-->
								    <!--    <thead>-->
								    <!--        <tr>-->
								    <!--            <th></th>-->
								    <!--            <th>In-calls</th>-->
								    <!--            <th>Outcalls</th>-->
								    <!--        </tr>-->
								    <!--    </thead>-->
								    <!--    <tbody>-->
								    <!--        <tr>-->
								    <!--            <td>30 min</td>-->
								    <!--            <td>$250</td>-->
								    <!--            <td></td>-->
								    <!--        </tr>-->
								    <!--        <tr>-->
								    <!--            <td>1 hr</td>-->
								    <!--            <td>$400</td>-->
								    <!--            <td></td>-->
								    <!--        </tr>-->
								    <!--        <tr>-->
								    <!--            <td>2 hrs</td>-->
								    <!--            <td>$750</td>-->
								    <!--            <td></td>-->
								    <!--        </tr>-->
								    <!--    </tbody>-->
								    <!--</table>-->
								    <!--<h5>Rates Extra</h5>-->
								    <!--<p>Available upon request.</p>-->
								</div>

								 <div class="private-things">
						<h3>Things I prefer in Private</h3>
						<div class="row">
							<div class="col-md-4">
							    <?php
							    if(isset($privatethings->affectionate_cuddling) && $privatethings->affectionate_cuddling == "on") {
    							    ?>
    							    <div class="checkbox">
    									<input disabled id="affectionate_cuddling" type="checkbox" name="affectionate_cuddling" <?php if(isset($privatethings->affectionate_cuddling)) { echo $privatethings->affectionate_cuddling == "on" ? 'checked' : ''; } ?>><label
    										for="affectionate_cuddling">Affectionate cuddling</label>
    								</div>

    								<?php
							       }

							        if(isset($privatethings->anal_play_on_me) && $privatethings->anal_play_on_me == "on") {
    							    ?>
    							    <div class="checkbox">
									<input disabled id="anal_play_on_me" type="checkbox" name="anal_play_on_me" <?php if(isset($privatethings->anal_play_on_me)) { echo $privatethings->anal_play_on_me == "on" ? 'checked' : ''; } ?>><label
										for="anal_play_on_me">Anal
										play-On me</label>
								    </div>

    								<?php
							       }

							       if(isset($privatethings->b_and_d) && $privatethings->b_and_d == "on") {
    							    ?>
    							    <div class="checkbox">
									<input disabled id="bd" type="checkbox" name="b_d" <?php if(isset($privatethings->b_and_d)) { echo $privatethings->b_and_d == "on" ? 'checked' : ''; } ?>><label
										for="_chkShowRealAge">B &
										D</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->bi_twin) && $privatethings->bi_twin == "on") {
    							    ?>
    							    <div class="checkbox">
									<input disabled id="bi_twin" type="checkbox" name="bi_twin" <?php if(isset($privatethings->bi_twin)) { echo $privatethings->bi_twin == "on" ? 'checked' : ''; } ?>><label
										for="bi_twin">Bi twin (double)</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->bondage) && $privatethings->bondage == "on") {
    							    ?>
    							    <div class="checkbox">
									<input disabled id="bondage" type="checkbox" name="bondage" <?php if(isset($privatethings->bondage)) { echo $privatethings->bondage == "on" ? 'checked' : ''; } ?>><label
										for="bondage">Bondage</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->cbj) && $privatethings->cbj == "on") {
    							    ?>
    							    <div class="checkbox">
									<input disabled id="cbj" type="checkbox" name="cbj" <?php if(isset($privatethings->cbj)) { echo $privatethings->cbj == "on" ? 'checked' : ''; } ?>><label
										for="cbj">CBJ</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->cim) && $privatethings->cim == "on") {
    							    ?>
    							    <div class="checkbox">
									<input disabled id="cim" type="checkbox" name="cim" <?php if(isset($privatethings->cim)) { echo $privatethings->cim == "on" ? 'checked' : ''; } ?>><label
										for="cim">CIM</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->cof) && $privatethings->cof == "on") {
    							    ?>
    							    <div class="checkbox">
									<input disabled id="cof" type="checkbox" name="cof" <?php if(isset($privatethings->cof)) { echo $privatethings->cof == "on" ? 'checked' : ''; } ?>><label
										for="cof">COF</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->couples) && $privatethings->couples == "on") {
    							    ?>
    							    <div class="checkbox">
									<input disabled id="couple" type="checkbox" name="couples" <?php if(isset($privatethings->couples)) { echo $privatethings->couples == "on" ? 'checked' : ''; } ?>><label
										for="_chkShowRealAge">Couples</label>
								    </div>

    								<?php
							        }

                                    if(isset($privatethings->dfk) && $privatethings->dfk == "on") {
    							    ?>
    							    <div class="checkbox">
									<input disabled id="chkShowRealAge" type="checkbox" name="dfk" <?php if(isset($privatethings->dfk)) { echo $privatethings->dfk == "on" ? 'checked' : ''; } ?>><label
										for="dfk">DFK</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->dp) && $privatethings->dp == "on") {
    							    ?>
    							    <div class="checkbox">
									<input disabled id="dp" type="checkbox" name="dp" <?php if(isset($privatethings->dp)) { echo $privatethings->dp == "on" ? 'checked' : ''; } ?>><label
										for="dp">DP</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->facial) && $privatethings->facial == "on") {
    							    ?>
    							    <div class="checkbox">
									<input disabled id="facial" type="checkbox" name="facial" <?php if(isset($privatethings->facial)) { echo $privatethings->facial == "on" ? 'checked' : ''; } ?>><label
										for="facial">Facial</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->filming) && $privatethings->filming == "on") {
    							    ?>
    							    <div class="checkbox">
									<input disabled id="filming" type="checkbox" name="filming" <?php if(isset($privatethings->filming)) { echo $privatethings->filming == "on" ? 'checked' : ''; } ?>><label
										for="filming">Filming</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->fk) && $privatethings->fk == "on") {
    							    ?>
    							    <div class="checkbox">
									<input disabled id="fk" type="checkbox" name="fk" <?php if(isset($privatethings->fk)) { echo $privatethings->fk == "on" ? 'checked' : ''; } ?>><label
										for="_chkShowRealAge">FK</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->gagging) && $privatethings->gagging == "on") {
    							    ?>
    							    <div class="checkbox">
									<input disabled id="gagging" type="checkbox" name="gagging" <?php if(isset($privatethings->gagging)) { echo $privatethings->gagging == "on" ? 'checked' : ''; } ?>><label
										for="_chkShowRealAge">Gagging</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->gs) && $privatethings->gs == "on") {
    							    ?>
    							    <div class="checkbox">
									<input disabled id="gs" type="checkbox" name="gs" <?php if(isset($privatethings->GS)) { echo $privatethings->GS == "on" ? 'checked' : ''; } ?>><label
										for="gs">GS</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->happy_ending) && $privatethings->happy_ending == "on") {
    							    ?>
    							    <div class="checkbox">
									<input disabled id="happy_ending" type="checkbox" name="happy_ending" <?php if(isset($privatethings->happy_ending)) { echo $privatethings->happy_ending == "on" ? 'checked' : ''; } ?>><label
										for="happy_ending">Happy
										ending</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->kissing) && $privatethings->kissing == "on") {
    							    ?>
    							    <div class="checkbox">
									<input disabled id="kissing" type="checkbox" name="kissing" <?php if(isset($privatethings->kissing)) { echo $privatethings->kissing == "on" ? 'checked' : ''; } ?>><label
										for="kissing">Kissing</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->lk) && $privatethings->lk == "on") {
    							    ?>
    							    <div class="checkbox">
									<input disabled id="lk" type="checkbox" name="lk" <?php if(isset($privatethings->lk)) { echo $privatethings->lk == "on" ? 'checked' : ''; } ?>><label
										for="lk">LK</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->masturbation) && $privatethings->masturbation == "on") {
    							    ?>
    							    <div class="checkbox">
									<input disabled id="masturbation" type="checkbox" name="masturbation" <?php if(isset($privatethings->masturbation)) { echo $privatethings->masturbation == "on" ? 'checked' : ''; } ?>><label
										for="masturbation">Masturbation</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->mmf) && $privatethings->mmf == "on") {
    							    ?>
    							    <div class="checkbox">
									<input disabled id="mmf" type="checkbox" name="mmf" <?php if(isset($privatethings->mmf)) { echo $privatethings->mmf == "on" ? 'checked' : ''; } ?>><label
										for="mmf">MMF</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->mutual_french) && $privatethings->mutual_french == "on") {
    							    ?>
    							    <div class="checkbox">
									<input disabled id="mutual_french" type="checkbox" name="mutual_french" <?php if(isset($privatethings->mutual_french_oral)) { echo $privatethings->mutual_french_oral == "on" ? 'checked' : ''; } ?>><label
										for="mutual_french">Mutual
										French (oral)</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->nurse) && $privatethings->nurse == "on") {
    							    ?>

    								<div class="checkbox">
    									<input disabled id="nurse" type="checkbox" name="nurse" <?php if(isset($privatethings->nurse)) { echo $privatethings->nurse == "on" ? 'checked' : ''; } ?>><label
    										for="nurse">Nurse</label>
    								</div>

    								<?php
							        }

							        if(isset($privatethings->photography) && $privatethings->photography == "on") {
    							    ?>

    								<div class="checkbox">
									<input disabled id="photography" type="checkbox" name="photography" <?php if(isset($privatethings->photography)) { echo $privatethings->photography == "on" ? 'checked' : ''; } ?>><label
										for="photography">Photography</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->pse) && $privatethings->pse == "on") {
    							    ?>

    								<div class="checkbox">
									<input disabled id="PSE" type="checkbox" name="pse" <?php if(isset($privatethings->pse)) { echo $privatethings->pse == "on" ? 'checked' : ''; } ?>><label
										for="pse">PSE</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->rimming_on_me) && $privatethings->rimming_on_me == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="rimming_on_me" type="checkbox" name="rimming_on_me" <?php if(isset($privatethings->rimming_on_me)) { echo $privatethings->rimming_on_me == "on" ? 'checked' : ''; } ?>><label
										for="rimming_on_me">Rimming
										- On me</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->sexy_lingerie) && $privatethings->sexy_lingerie == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="sexy_lingerie" type="checkbox" name="sexy_lingerie" <?php if(isset($privatethings->sexy_lingerie)) { echo $privatethings->sexy_lingerie == "on" ? 'checked' : ''; } ?>><label
										for="sexy_lingerie">Sexy
										lingerie</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->social_escort) && $privatethings->social_escort == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="social_escort" type="checkbox" name="social_escort" <?php if(isset($privatethings->social_escort)) { echo $privatethings->social_escort == "on" ? 'checked' : ''; } ?>><label
										for="social_escort">Social
										escort</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->spanking_on_you) && $privatethings->spanking_on_you == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="spanking_on_you" type="checkbox" name="spanking_on_you" <?php if(isset($privatethings->spanking_on_you)) { echo $privatethings->spanking_on_you == "on" ? 'checked' : ''; } ?>><label
										for="spanking_on_you">Spanking - On you</label>
							    	</div>

    								<?php
							        }

							        if(isset($privatethings->strap_on) && $privatethings->strap_on == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="strap_on_me" type="checkbox" name="strap_on_me" <?php if(isset($privatethings->strap_on)) { echo $privatethings->strap_on == "on" ? 'checked' : ''; } ?>><label
										for="_chkShowRealAge">Strap
										on -me</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->tea_bagging) && $privatethings->tea_bagging == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="tea_bagging" type="checkbox" name="tea_bagging" <?php if(isset($privatethings->tea_bagging)) { echo $privatethings->tea_bagging == "on" ? 'checked' : ''; } ?>><label
										for="tea_bagging">Tea
										bagging</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->dirty_talk) && $privatethings->dirty_talk == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="dirty_talk" type="checkbox" name="dirty_talk" <?php if(isset($privatethings->dirty_talk)) { echo $privatethings->dirty_talk == "on" ? 'checked' : ''; } ?>><label
										for="_chkShowRealAge">Dirty
										Talk</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->toys) && $privatethings->toys == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="toys" type="checkbox" name="toys" <?php if(isset($privatethings->toys)) { echo $privatethings->toys == "on" ? 'checked' : ''; } ?>><label
										for="toys">Toys</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->full_service) && $privatethings->full_service == "on") {
    							    ?>

                                   <div class="checkbox">
									<input disabled id="full_service" type="checkbox" name="full_service" <?php if(isset($privatethings->full_service)) { echo $privatethings->full_service == "on" ? 'checked' : ''; } ?>><label
										for="full_service">Full
										Service</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->toys) && $privatethings->toys == "on") {
    							    ?>

                                   <div class="checkbox">
									<input disabled id="toys" type="checkbox" name="toys" <?php if(isset($privatethings->toys)) { echo $privatethings->toys == "on" ? 'checked' : ''; } ?>><label
										for="toys">Toys</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->electrode_play) && $privatethings->electrode_play == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="electrode_play" type="checkbox" name="electrode_play" <?php if(isset($privatethings->electrode_play)) { echo $privatethings->electrode_play == "on" ? 'checked' : ''; } ?>><label
										for="electrode_play">Electrode Play</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->cross_dressing) && $privatethings->cross_dressing == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="cross_dressing" type="checkbox" name="cross_dressing" <?php if(isset($privatethings->cross_dressing)) { echo $privatethings->cross_dressing == "on" ? 'checked' : ''; } ?>><label
										for="cross_dressing">Cross
										Dressing</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->cross_dressing) && $privatethings->cross_dressing == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="cross_dressing" type="checkbox" name="cross_dressing" <?php if(isset($privatethings->cross_dressing)) { echo $privatethings->cross_dressing == "on" ? 'checked' : ''; } ?>><label
										for="cross_dressing">Cross
										Dressing</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->boot_worship) && $privatethings->boot_worship == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="boot_worship" type="checkbox" name="boot_worship" <?php if(isset($privatethings->boot_worship)) { echo $privatethings->boot_worship == "on" ? 'checked' : ''; } ?>><label
										for="boot_worship">Boot
										Worship</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->needle_play) && $privatethings->needle_play == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="needle_play" type="checkbox" name="needle_play" <?php if(isset($privatethings->needle_play)) { echo $privatethings->needle_play == "on" ? 'checked' : ''; } ?>><label
										for="needle_play">Needle
										Play</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->intimidation_on_you) && $privatethings->intimidation_on_you == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="intimidation" type="checkbox" name="intimidation" <?php if(isset($privatethings->intimidation_on_you)) { echo $privatethings->intimidation_on_you == "on" ? 'checked' : ''; } ?>><label
										for="intimidation">Intimidation on You</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->ffm) && $privatethings->ffm == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="ffm" type="checkbox" name="ffm" <?php if(isset($privatethings->ffm)) { echo $privatethings->ffm == "on" ? 'checked' : ''; } ?>><label
										for="ffm">FFM</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->affectionate_kissing) && $privatethings->affectionate_kissing == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="affectionate_kissing" type="checkbox" name="affectionate_kissing" <?php if(isset($privatethings->affectionate_kissing)) { echo $privatethings->affectionate_kissing == "on" ? 'checked' : ''; } ?>><label
										for="affectionate_kissing">Affectionate Kissing</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->anal_play) && $privatethings->anal_play == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="anal_play" type="checkbox" name="anal_play" <?php if(isset($privatethings->anal_play)) { echo $privatethings->anal_play == "on" ? 'checked' : ''; } ?>><label
										for="anal_play">Anal
										play - On you</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->bbbj) && $privatethings->bbbj == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="bbbj" type="checkbox" name="bbbj" <?php if(isset($privatethings->bbbj)) { echo $privatethings->bbbj == "on" ? 'checked' : ''; } ?>><label
										for="bbbj">BBBJ</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->bj) && $privatethings->bj == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="bj" type="checkbox" name="bj" <?php if(isset($privatethings->bj)) { echo $privatethings->bj == "on" ? 'checked' : ''; } ?>><label
										for="bj">BJ</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->brazilian) && $privatethings->brazilian == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="brazilian" type="checkbox" name="brazilian" <?php if(isset($privatethings->brazilian)) { echo $privatethings->brazilian == "on" ? 'checked' : ''; } ?>><label
										for="brazilian">Brazilian</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->cbt) && $privatethings->cbt == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="cbt" type="checkbox" name="cbt" <?php if(isset($privatethings->cbt)) { echo $privatethings->cbt == "on" ? 'checked' : ''; } ?>><label
										for="cbt">CBT</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->cimws) && $privatethings->cimws == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="cimws" type="checkbox" name="cimws" <?php if(isset($privatethings->cimws)) { echo $privatethings->cimws == "on" ? 'checked' : ''; } ?>><label
										for="cimws">CIMWS</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->costumes) && $privatethings->costumes == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="costumes" type="checkbox" name="costumes" <?php if(isset($privatethings->costumes)) { echo $privatethings->costumes == "on" ? 'checked' : ''; } ?>><label
										for="costumes">Costumes</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->daty) && $privatethings->daty == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="daty" type="checkbox" name="daty" <?php if(isset($privatethings->daty)) { echo $privatethings->daty == "on" ? 'checked' : ''; } ?>> <label
										for="daty">DATY</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->dinner_companion) && $privatethings->dinner_companion == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="dinner_companion" type="checkbox" name="dinner_companion" <?php if(isset($privatethings->dinner_companion)) { echo $privatethings->dinner_companion == "on" ? 'checked' : ''; } ?>><label
										for="dinner_companion">Dinner
										companion</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->dt) && $privatethings->dt == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="dt" type="checkbox" name="dt" <?php if(isset($privatethings->dt)) { echo $privatethings->dt == "on" ? 'checked' : ''; } ?>><label
										for="dinner_companion">DT</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->fe) && $privatethings->fe == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="fe" type="checkbox" name="fe" <?php if(isset($privatethings->fe)) { echo $privatethings->fe == "on" ? 'checked' : ''; } ?>><label
										for="fe">FE</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->fire_and_ice_hot_and_cold_bj) && $privatethings->fire_and_ice_hot_and_cold_bj == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="fire" type="checkbox" name="fire" <?php if(isset($privatethings->fire_and_ice_hot_and_cold_bj)) { echo $privatethings->fire_and_ice_hot_and_cold_bj == "on" ? 'checked' : ''; } ?>><label
										for="fire">Fire
										and ice - hot and cold BJ</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->foot_fetish) && $privatethings->foot_fetish == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="foot" type="checkbox" name="foot_fetish" <?php if(isset($privatethings->foot_fetish)) { echo $privatethings->foot_fetish == "on" ? 'checked' : ''; } ?>><label
										for="_chkShowRealAge">Foot
										Fetish</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->foot_fetish) && $privatethings->foot_fetish == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="foot" type="checkbox" name="foot_fetish" <?php if(isset($privatethings->foot_fetish)) { echo $privatethings->foot_fetish == "on" ? 'checked' : ''; } ?>><label
										for="_chkShowRealAge">Foot
										Fetish</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->gfe) && $privatethings->gfe == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="foot" type="checkbox" name="gfe" <?php if(isset($privatethings->gfe)) { echo $privatethings->gfe == "on" ? 'checked' : ''; } ?>>
									<label>GFE</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->gs_on_me) && $privatethings->gs_on_me == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="gs_one" type="checkbox" name="gs_one" <?php if(isset($privatethings->gs_on_me)) { echo $privatethings->gs_on_me == "on" ? 'checked' : ''; } ?>><label
										for="gs_one">GS -
										On
										me</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->hj) && $privatethings->hj == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="hj" type="checkbox" name="hj" <?php if(isset($privatethings->hj)) { echo $privatethings->hj == "on" ? 'checked' : ''; } ?>><label
										for="hj">HJ</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->light_bondage) && $privatethings->light_bondage == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="light_bondage" type="checkbox" name="light_bondage" <?php if(isset($privatethings->light_bondage)) { echo $privatethings->light_bondage == "on" ? 'checked' : ''; } ?>><label
										for="light_bondage">Light
										bondage</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->maid) && $privatethings->maid == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="maid" type="checkbox" name="maid" <?php if(isset($privatethings->maid)) { echo $privatethings->maid == "on" ? 'checked' : ''; } ?>><label
										for="maid">Maid</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->mff) && $privatethings->mff == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="mff" type="checkbox" name="mff" <?php if(isset($privatethings->mff)) { echo $privatethings->mff == "on" ? 'checked' : ''; } ?>><label
										for="mff">MFF</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->msog) && $privatethings->msog == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="msog" type="checkbox" name="msog" <?php if(isset($privatethings->mutual_natural_oral)) { echo $privatethings->mutual_natural_oral == "on" ? 'checked' : ''; } ?>><label
										for="msog">MSOG</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->mutual_natural_oral) && $privatethings->mutual_natural_oral == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="mutual_nutural_oral" type="checkbox" name="mutual_natural_oral" <?php if(isset($privatethings->mutual_natural_oral)) { echo $privatethings->mutual_natural_oral == "on" ? 'checked' : ''; } ?>><label
										for="mutual_nutural_oral">Mutual
										natural oral</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->overnight_stays) && $privatethings->overnight_stays == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="overnight_stays" type="checkbox" name="overnight_stays" <?php if(isset($privatethings->overnight_stays)) { echo $privatethings->overnight_stays == "on" ? 'checked' : ''; } ?>><label
										for="overnight_stays">Overnight stays</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->police_woman) && $privatethings->police_woman == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="police_woman" type="checkbox" name="police_woman" <?php if(isset($privatethings->police_woman)) { echo $privatethings->police_woman == "on" ? 'checked' : ''; } ?>><label
										for="police_woman">Police
										woman</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->pse_with_filming) && $privatethings->pse_with_filming == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="pse_filming" type="checkbox" name="pse_filming" <?php if(isset($privatethings->pse_with_filming)) { echo $privatethings->pse_with_filming == "on" ? 'checked' : ''; } ?>><label
										for="_chkShowRealAge">PSE -
										With filming</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->rimming) && $privatethings->rimming == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="rimming" type="checkbox" name="rimming" <?php if(isset($privatethings->rimming)) { echo $privatethings->rimming == "on" ? 'checked' : ''; } ?>><label
										for="rimming">Rimming
										- On you</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->secretary) && $privatethings->secretary == "on") {
    							    ?>

                                	<div class="checkbox">
									<input disabled id="secretary" type="checkbox" name="secretary" <?php if(isset($privatethings->secretary)) { echo $privatethings->secretary == "on" ? 'checked' : ''; } ?>><label
										for="secretary">Secretary</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->sexy_shower_for_2) && $privatethings->sexy_shower_for_2 == "on") {
    							    ?>

                                	<div class="checkbox">
									<input disabled id="sexy" type="checkbox" name="sexy" <?php if(isset($privatethings->sexy_shower_for_2)) { echo $privatethings->sexy_shower_for_2 == "on" ? 'checked' : ''; } ?>><label
										for="sexy">Sexy
										shower for 2</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->squirting) && $privatethings->squirting == "on") {
    							    ?>

                                    <div class="checkbox">
    									<input disabled id="squirting" type="checkbox" name="squirting" <?php if(isset($privatethings->squirting)) { echo $privatethings->squirting == "on" ? 'checked' : ''; } ?>><label
    										for="Squirting">Squirting</label>
    								</div>

    								<?php
							        }

							        if(isset($privatethings->strap_on_you) && $privatethings->strap_on_you == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="strap" type="checkbox" name="strap_on_you" <?php if(isset($privatethings->strap_on_you)) { echo $privatethings->strap_on_you == "on" ? 'checked' : ''; } ?>><label
										for="_chkShowRealAge">Strap - On you</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->tromboning) && $privatethings->tromboning == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="tromboning" type="checkbox" name="tromboning" <?php if(isset($privatethings->tromboning)) { echo $privatethings->tromboning == "on" ? 'checked' : ''; } ?>><label
										for="tromboning">Tromboning</label>
							        </div>

    								<?php
							        }

							        if(isset($privatethings->full_body_massage) && $privatethings->full_body_massage == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="full_body_massage" type="checkbox" name="full_body_massage" <?php if(isset($privatethings->full_body_massage)) { echo $privatethings->full_body_massage == "on" ? 'checked' : ''; } ?>><label
										for="full_body_massage">Full
										Body Massage</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->passionate_kissing) && $privatethings->passionate_kissing == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="passionate_kissing" type="checkbox" name="passionate_kissing" <?php if(isset($privatethings->passionate_kissing)) { echo $privatethings->passionate_kissing == "on" ? 'checked' : ''; } ?>><label
										for="passionate_kissing">Passionate Kissing</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->escort) && $privatethings->escort == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="escort" type="checkbox" name="escort" <?php if(isset($privatethings->escort)) { echo $privatethings->escort == "on" ? 'checked' : ''; } ?>><label
										for="escort">Escort</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->lactating) && $privatethings->lactating == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="lactating" type="checkbox" name="lactating" <?php if(isset($privatethings->lactating)) { echo $privatethings->lactating == "on" ? 'checked' : ''; } ?>><label
										for="lactating">Lactating</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->nipple_manipulation) && $privatethings->nipple_manipulation == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="nipple_manipulation" type="checkbox" name="nipple_manipulation" <?php if(isset($privatethings->nipple_manipulation)) { echo $privatethings->nipple_manipulation == "on" ? 'checked' : ''; } ?>><label
										for="nipple_manipulation">Nipple
										Manipulation</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->caning) && $privatethings->caning == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="caning" type="checkbox" name="caning" <?php if(isset($privatethings->caning)) { echo $privatethings->caning == "on" ? 'checked' : ''; } ?>><label
										for="caning">Caning</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->latex_leather_worship) && $privatethings->latex_leather_worship == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="latex" type="checkbox" name="latex" <?php if(isset($privatethings->latex_leather_worship)) { echo $privatethings->latex_leather_worship == "on" ? 'checked' : ''; } ?>><label
										for="latex">Latex
										/
										Leather Worship</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->ball_busting) && $privatethings->ball_busting == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="ball_busting" type="checkbox" name="ball_busting" <?php if(isset($privatethings->ball_busting)) { echo $privatethings->ball_busting == "on" ? 'checked' : ''; } ?>><label
										for="ball_busting">Ball
										Busting</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->submissive) && $privatethings->submissive == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="submissive" type="checkbox" name="submissive" <?php if(isset($privatethings->submissive)) { echo $privatethings->submissive == "on" ? 'checked' : ''; } ?>><label
										for="submissive">Submissive</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->brown_showers) && $privatethings->brown_showers == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="brown_showers" type="checkbox" name="brown_showers" <?php if(isset($privatethings->brown_showers)) { echo $privatethings->brown_showers == "on" ? 'checked' : ''; } ?>><label
										for="brown_showers">Brown
										Showers</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->anal_play) && $privatethings->anal_play == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="anal_play" type="checkbox" name="anal_play" <?php if(isset($privatethings->anal_play)) { echo $privatethings->anal_play == "on" ? 'checked' : ''; } ?>><label
										for="anal_play">Anal
										play</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->atm) && $privatethings->atm == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="atm" type="checkbox" name="atm" <?php if(isset($privatethings->atm)) { echo $privatethings->atm == "on" ? 'checked' : ''; } ?>><label
										for="atm">ATM</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->bdsm) && $privatethings->bdsm == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="bdsm" type="checkbox" name="bdsm" <?php if(isset($privatethings->bdsm)) { echo $privatethings->bdsm == "on" ? 'checked' : ''; } ?>><label
										for="bdsm">BDSM</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->bls) && $privatethings->bls == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="bls" type="checkbox" name="bls" <?php if(isset($privatethings->bls)) { echo $privatethings->bls == "on" ? 'checked' : ''; } ?>><label
										for="bls">BLS</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->body_slide) && $privatethings->body_slide == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="body" type="checkbox" name="body_slide" <?php if(isset($privatethings->body_slide)) { echo $privatethings->body_slide == "on" ? 'checked' : ''; } ?>><label
										for="body">Body
										Slide</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->cd) && $privatethings->cd == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="cd" type="checkbox" name="cd" <?php if(isset($privatethings->cd)) { echo $privatethings->cd == "on" ? 'checked' : ''; } ?>><label
										for="cd">CD</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->cob) && $privatethings->cob == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="cob" type="checkbox" name="cob" <?php if(isset($privatethings->cob)) { echo $privatethings->cob == "on" ? 'checked' : ''; } ?>><label
										for="cob">COB</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->costumes_and_role_play) && $privatethings->costumes_and_role_play == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="costume" type="checkbox" name="costumes_and_role_play" <?php if(isset($privatethings->costumes_and_role_play)) { echo $privatethings->costumes_and_role_play == "on" ? 'checked' : ''; } ?>><label
										for="costume">Costumes and role play</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->ddp) && $privatethings->ddp == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="ddp" type="checkbox" name="ddp" <?php if(isset($privatethings->ddp)) { echo $privatethings->ddp == "on" ? 'checked' : ''; } ?>><label
										for="ddp">DDP</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->doggy_style) && $privatethings->doggy_style == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="doggy" type="checkbox" name="doggy_style" <?php if(isset($privatethings->doggy_style)) { echo $privatethings->doggy_style == "on" ? 'checked' : ''; } ?>><label
										for="doggy">Doggy
										style</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->erotic_sensual_massage) && $privatethings->erotic_sensual_massage == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="erotic_sansual_massage" type="checkbox" name="erotic_sensual_massage" <?php if(isset($privatethings->erotic_sensual_massage)) { echo $privatethings->erotic_sensual_massage == "on" ? 'checked' : ''; } ?>><label
										for="erotic_sansual_massage">Erotic
										sensual massage</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->erotic_sensual_massage) && $privatethings->erotic_sensual_massage == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="erotic_sansual_massage" type="checkbox" name="erotic_sensual_massage" <?php if(isset($privatethings->erotic_sensual_massage)) { echo $privatethings->erotic_sensual_massage == "on" ? 'checked' : ''; } ?>><label
										for="erotic_sansual_massage">Erotic
										sensual massage</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->greek) && $privatethings->greek == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="greek" type="checkbox" name="greek" <?php if(isset($privatethings->greek)) { echo $privatethings->greek == "on" ? 'checked' : ''; } ?>><label
										for="greek">Greek</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->gs_on_you) && $privatethings->gs_on_you == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="gs" type="checkbox" name="gs_on_you" <?php if(isset($privatethings->gs_on_you)) { echo $privatethings->gs_on_you == "on" ? 'checked' : ''; } ?>><label
										for="gs">GS -
										On
										you</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->italian) && $privatethings->italian == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="italian" type="checkbox" name="italian" <?php if(isset($privatethings->italian)) { echo $privatethings->italian == "on" ? 'checked' : ''; } ?>><label
										for="italian">Italian</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->light_spanking) && $privatethings->light_spanking == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="light" type="checkbox" name="light_spanking" <?php if(isset($privatethings->light_spanking)) { echo $privatethings->light_spanking == "on" ? 'checked' : ''; } ?>><label
										for="light">Light
										spanking</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->massage) && $privatethings->massage == "on") {
    							    ?>

                                   <div class="checkbox">
									<input disabled id="massage" type="checkbox" name="massage" <?php if(isset($privatethings->massage)) { echo $privatethings->massage == "on" ? 'checked' : ''; } ?>><label
										for="massage">Massage</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->milf) && $privatethings->milf == "on") {
    							    ?>

                                    <div class="checkbox">
									<input disabled id="milf" type="checkbox" name="milf" <?php if(isset($privatethings->milf)) { echo $privatethings->milf == "on" ? 'checked' : ''; } ?>><label
										for="milf">Milf</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->multiple_positions) && $privatethings->multiple_positions == "on") {
    							    ?>

                                   <div class="checkbox">
									<input disabled id="multiple_positions" type="checkbox" name="multiple_positions" <?php if(isset($privatethings->multiple_positions)) { echo $privatethings->multiple_positions == "on" ? 'checked' : ''; } ?>><label
										for="multiple_positions">Multiple positions</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->natural_oral) && $privatethings->natural_oral == "on") {
    							    ?>

                                   	<div class="checkbox">
									<input disabled id="natural_oral" type="checkbox" name="natural_oral" <?php if(isset($privatethings->natural_oral)) { echo $privatethings->natural_oral == "on" ? 'checked' : ''; } ?>><label
										for="_chkShowRealAge">Natural
										oral</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->pearl_nacklace) && $privatethings->pearl_nacklace == "on") {
    							    ?>

                                   	<div class="checkbox">
									<input disabled id="pearl_nacklace" type="checkbox" name="pearl_nacklace" <?php if(isset($privatethings->pearl_nacklace)) { echo $privatethings->pearl_nacklace == "on" ? 'checked' : ''; } ?>><label
										for="pearl_nacklace">Pearl
										Necklace</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->prostate_massage) && $privatethings->prostate_massage == "on") {
    							    ?>

                                   	<div class="checkbox">
									<input disabled id="prostate_message" type="checkbox" name="prostate_message" <?php if(isset($privatethings->prostate_massage)) { echo $privatethings->prostate_massage == "on" ? 'checked' : ''; } ?>><label
										for="prostate_message">Prostate massage</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->rimming) && $privatethings->rimming == "on") {
    							    ?>

                                   	<div class="checkbox">
									<input disabled id="rimming" type="checkbox" name="rimming" <?php if(isset($privatethings->rimming)) { echo $privatethings->rimming == "on" ? 'checked' : ''; } ?>><label
										for="rimming">Rimming</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->role_play) && $privatethings->role_play == "on") {
    							    ?>

                                   	<div class="checkbox">
									<input disabled id="role_play" type="checkbox" name="role_play" <?php if(isset($privatethings->role_play)) { echo $privatethings->role_play == "on" ? 'checked' : ''; } ?>><label
										for="role_play">Role
										play</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->sex_toys) && $privatethings->sex_toys == "on") {
    							    ?>

                                   	<div class="checkbox">
									<input disabled id="sex_toys" type="checkbox" name="sex_toys" <?php if(isset($privatethings->sex_toys)) { echo $privatethings->sex_toys == "on" ? 'checked' : ''; } ?>><label
										for="sex_toys">Sex
										toys</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->snowballing) && $privatethings->snowballing == "on") {
    							    ?>

                                   	<div class="checkbox">
									<input disabled id="snowballing" type="checkbox" name="snowballing" <?php if(isset($privatethings->snowballing)) { echo $privatethings->snowballing == "on" ? 'checked' : ''; } ?>><label
										for="snowballing">Snowballing</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->strip_tease) && $privatethings->strip_tease == "on") {
    							    ?>


    								<div class="checkbox">
									<input disabled id="strip_tease" type="checkbox" name="strip_tease" <?php if(isset($privatethings->strip_tease)) { echo $privatethings->strip_tease == "on" ? 'checked' : ''; } ?>><label
										for="strip_tease">Strip
										tease</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->strip_tease) && $privatethings->strip_tease == "on") {
    							    ?>


    								<div class="checkbox">
									<input disabled id="strip_tease" type="checkbox" name="strip_tease" <?php if(isset($privatethings->strip_tease)) { echo $privatethings->strip_tease == "on" ? 'checked' : ''; } ?>><label
										for="strip_tease">Strip
										tease</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->mutual_masturbation) && $privatethings->mutual_masturbation == "on") {
    							    ?>


    								<div class="checkbox">
									<input disabled id="mutual_masturbation" type="checkbox" name="mutual_masturbation" <?php if(isset($privatethings->mutual_masturbation)) { echo $privatethings->mutual_masturbation == "on" ? 'checked' : ''; } ?>><label
										for="mutual_masturbation">Mutual
										Masturbation</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->teasing) && $privatethings->teasing == "on") {
    							    ?>


    								<div class="checkbox">
									<input disabled id="teasing" type="checkbox" name="teasing" <?php if(isset($privatethings->teasing)) { echo $privatethings->teasing == "on" ? 'checked' : ''; } ?>><label
										for="teasing">Teasing</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->erotic_relaxation) && $privatethings->erotic_relaxation == "on") {
    							    ?>


    								<div class="checkbox">
									<input disabled id="erotic_relaxation" type="checkbox" name="erotic_relaxation" <?php if(isset($privatethings->erotic_relaxation)) { echo $privatethings->erotic_relaxation == "on" ? 'checked' : ''; } ?>><label
										for="erotic">Erotic
										Relaxation</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->wax_play) && $privatethings->wax_play == "on") {
    							    ?>


    								<div class="checkbox">
									<input disabled id="wax_play" type="checkbox" name="wax_play" <?php if(isset($privatethings->wax_play)) { echo $privatethings->wax_play == "on" ? 'checked' : ''; } ?>><label
										for="wax_play">Wax
										Play</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->sissy_play) && $privatethings->sissy_play == "on") {
    							    ?>


    								<div class="checkbox">
									<input disabled id="sissy_play" type="checkbox" name="sissy_play" <?php if(isset($privatethings->sissy_play)) { echo $privatethings->sissy_play == "on" ? 'checked' : ''; } ?>><label
										for="sissy_play">Sissy
										Play</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->wrestling) && $privatethings->wrestling == "on") {
    							    ?>


    								<div class="checkbox">
									<input disabled id="wrestling" type="checkbox" name="wrestling" <?php if(isset($privatethings->wrestling)) { echo $privatethings->wrestling == "on" ? 'checked' : ''; } ?>><label
										for="wrestling">Wrestling</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->urethral_play) && $privatethings->urethral_play == "on") {
    							    ?>


    								<div class="checkbox">
									<input disabled id="urethral_play" type="checkbox" name="urethral_play" <?php if(isset($privatethings->urethral_play)) { echo $privatethings->urethral_play == "on" ? 'checked' : ''; } ?>><label
										for="urethral_play">Urethral Play</label>
								    </div>

    								<?php
							        }

							        if(isset($privatethings->relief) && $privatethings->relief == "on") {
    							    ?>


    								<div class="checkbox">
									<input disabled id="relief" type="checkbox" name="relief" <?php if(isset($privatethings->relief)) { echo $privatethings->relief == "on" ? 'checked' : ''; } ?>><label
										for="relief">Relief</label>
								    </div>

    								<?php
							        }
							    ?>
							</div>



							</div>

                            @if(isset($model->modeles) && $model->modeles['display_contect_form'] == 'on')
							<h2 class="topmargin_40 bottommargin_30">Contact Model</h2>

							<form class="model-contact-form" method="post" action="{{ url('model/contactmail') }}">
                            {{csrf_field()}}

                                <input type="hidden" name="modelemail" value="{{isset($model) ? $model->email:''}}">
								<div class="form-group">
									<label for="model-name" class="sr-only">Full Name
										<span class="required">*</span>
									</label>
									<input type="text" aria-required="true" size="30" value="" name="name" id="model-name" class="form-control with-icon" placeholder="Name" required>
									<i class="rt-icon2-user"></i>
								</div>
								<div class="form-group">
									<label for="model-email" class="sr-only">Email address
										<span class="required">*</span>
									</label>
									<input type="email" aria-required="true" size="30" value="" name="email" id="model-email" class="form-control with-icon" placeholder="Email" required>
									<i class="rt-icon2-mail"></i>
								</div>
								<div class="form-group">
									<label for="model-phone" class="sr-only">Phone number
										<span class="required">*</span>
									</label>
									<input type="text" aria-required="true" size="30" value="" name="phone" id="model-phone" class="form-control with-icon" placeholder="Phone" required>
									<i class="rt-icon2-phone5"></i>
								</div>
								<div class="form-group">
									<label for="model-message" class="sr-only">Message</label>
									<textarea aria-required="true" rows="6" cols="45" name="message" id="model-message" class="form-control with-icon" placeholder="Message" required></textarea>
									<i class="rt-icon2-pen"></i>
								</div>

								<button type="submit" id="model_contact_form_submit" name="model_contact_submit" class="theme_button color1 bottommargin_0">Send</button>
								<button type="reset" id="model_contact_form_clear" name="model_contact_clear" class="theme_button inverse bottommargin_0">Clear</button>
							</form>
							@endif

						</div>

					</div>
				</div>
			</section>

 @endsection

