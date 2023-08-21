@extends('pages.master')

@section('page_title',"Find the Best Escort at Your Area")
@section('page_description',"Hire the best escort modal at your local area. Direct
discussion, no hidden charges, live cam escort, live photo escort. Verified escort
profile. 100% real escort.")
@section('page_keyboard','Best escort modal')

@section('content')


<section class="ds page_models custom-models-sq models_square gorizontal_padding columns_padding_0">
				<div class="container-fluid">
					<div class="row bottommargin_50 boxed-padding">
						<div class="col-lg-7">
							<!--<div class="filters isotope_filters inline-block margin_0">-->
							<!--	<a href="#" data-filter="*" class="selected">All</a>-->
							<!--	<a href="#" data-filter=".fashion">Fashion</a>-->
							<!--	<a href="#" data-filter=".studio">Studio</a>-->
							<!--	<a href="#" data-filter=".session">Session</a>-->
							<!--</div>-->
						</div>
						<div class="col-lg-12  custom-model-form">
							<form class="form-inline models-orderby" method="get" action="{{url('search')}}">
        					<div class="form-group">
        							<input type="text" style="background-color: #ffffff;" placeholder="Enter a location to find local escorts" name="location" id="location" value="<?php if(isset($_GET['location']) && $_GET['location']!='') { echo $_GET['location']; } ?>">
        					</div>

        					<div class="form-group">
        							<input type="text" style="background-color: #ffffff;" placeholder="Suburb" name="suburb" id="location" value="<?php if(isset($_GET['suburb']) && $_GET['suburb']!='') { echo $_GET['suburb']; } ?>">
        					</div>

    						<div class="form-group">
            					<select style="background-color: #ffffff;" name="sex" class="form-control text-center">
                                   <option value="">Select Sex</option>
                                      <option value="male" <?php if(isset($_GET['sex']) && $_GET['sex']=='male') { echo'selected'; } ?>>Male</option>
                                      <option value="female" <?php if(isset($_GET['sex']) && $_GET['sex']=='female') { echo'selected'; } ?>>Female</option>
                                      <option value="transexual_transgender" <?php if(isset($_GET['sex']) && $_GET['sex']=='transexual_transgender') { echo'selected'; } ?>>Transgender</option>
                                     <option value="bisexual" <?php if(isset($_GET['sex']) && $_GET['sex']=='bisexual') { echo'selected'; } ?>>Bisexual</option>
                               </select>
                            </div>

                             <div class="bottom-strip">
                        <div class="inner-strip">
                            <div class="strip-check">
                                  <input type="radio" id="all" name="escort_type" value="all" <?php if(isset($_GET['escort_type']) && $_GET['escort_type']=='all') { echo'checked'; }  ?> >
                                   <label for="all">All</label>
                            </div>
                            <div class="strip-check">
                               <input type="radio" id="escort_type" name="escort_type" value="escort" <?php if(isset($_GET['escort_type']) && $_GET['escort_type']=='escort') { echo'checked'; } ?>>
                                <label for="escort">Escort</label>
                            </div>
                            <div class="strip-check">
                               <input type="radio" id="bdsm" name="escort_type" value="bdsm" <?php if(isset($_GET['escort_type']) && $_GET['escort_type']=='bdsm') { echo'checked'; } ?>>
                               <label for="bdsm">BDSM</label>
                            </div>
                           <div class="strip-check">
                                <input type="radio" id="rub" name="escort_type" value="body_rub" <?php if(isset($_GET['escort_type']) && $_GET['escort_type']=='body_rub') { echo'checked'; } ?>>
                               <label for="rub">Body Rub</label>
                            </div>
                            <div class="strip-check">
                                <input type="radio" id="strip" name="escort_type" value="stripe_dance" <?php if(isset($_GET['escort_type']) && $_GET['escort_type']=='stripe_dance') { echo'checked'; } ?>>
                                <label for="strip">Strip/Dance</label>
                            </div>
                        </div>
                        <div class="inner-strip">
                            <div class="strip-check">
                                <input type="radio" id="strip" name="account_type" value="stripe_dance" <?php if(isset($_GET['account_type']) && $_GET['account_type']=='stripe_dance') { echo'checked'; } ?>>
                                <label for="strip">Strip/Dance</label>
                            </div>
                            <div class="strip-check">
                                <input type="radio" id="independents" name="account_type" value="independent" <?php if(isset($_GET['account_type']) && $_GET['account_type']=='independent') { echo'checked'; } ?>>
                                <label for="independents">Independents</label>
                            </div>
                           <div class="strip-check">
                            <input type="radio" id="establishments" name="account_type" value="establishment" <?php if(isset($_GET['account_type']) && $_GET['account_type']=='establishment') { echo'checked'; } ?>>
                                <label for="establishments">Establishments</label>
                            </div>
                           <div class="strip-check">
                               <input type="radio" id="agencies" name="account_type" value="agency" <?php if(isset($_GET['account_type']) && $_GET['account_type']=='agency') { echo'checked'; } ?>>
                                <label for="agencies">Agencies</label>
                           </div>
                        </div>
					</div>

						<!--<div class="form-group">
							<input type="text" placeholder="Name" name="name" id="name" value="<?php if(isset($_GET['name']) && $_GET['name']!='') { echo $_GET['name']; } ?>">
						</div>
						<div class="form-group">
							<input type="text" placeholder="User Id" name="userid" id="userid" value="<?php if(isset($_GET['userid']) && $_GET['userid']!='') { echo $_GET['userid']; } ?>">
						</div>
						<div class="form-group">
							<input type="text" placeholder="Preferences" name="preferences" id="preferences" value="<?php if(isset($_GET['preferences']) && $_GET['preferences']!='') { echo $_GET['preferences']; } ?>">
						</div>
						<div class="form-group">
							<input type="text" placeholder="Interests" name="interests" id="interests" value="<?php if(isset($_GET['interests']) && $_GET['interests']!='') { echo $_GET['interests']; } ?>">
						</div>
						<div class="form-group">
							<input type="text" placeholder="Lifestyle" name="lifestyle" id="lifestyle" value="<?php if(isset($_GET['lifestyle']) && $_GET['lifestyle']!='') { echo $_GET['lifestyle']; } ?>">
						</div>
						<div class="form-group">
							<input type="text" placeholder="Body Structure" name="body_structure" id="body_structure" value="<?php if(isset($_GET['body_structure']) && $_GET['body_structure']!='') { echo $_GET['body_structure']; } ?>">
						</div>
						<div class="form-group">
							<input type="text" placeholder="Distance" name="distance" id="distance" value="<?php if(isset($_GET['distance']) && $_GET['distance']!='') { echo $_GET['distance']; } ?>">
						</div>
						<!--<div class="form-group">-->
						<!--	<input type="text" placeholder="Marital Status" name="marital_status" id="marital_status" value="<?php if(isset($_GET['marital_status']) && $_GET['marital_status']!='') { echo $_GET['marital_status']; } ?>">-->
						<!--</div>-->

						<div class="form-group ct-form-button">
								<input type="submit" name="search" id="search" value="Search">
						</div>
						<div class="form-group ct-form-button">
								<a href="{{route('pages.models')}}" class="btn">Clear</a>
						</div>
				</form>
						</div>
					</div>

					<div class="isotope_container isotope row masonry-layout bottommargin_20 pagemodel" data-filters=".isotope_filters">

                    @if(isset($models))
					 	@foreach($models as $model)

						<div class="isotope-item col-lg-3 col-md-4 col-sm-6 fashion">
							<div class="vertical-item content-absolute">
								<div class="item-media">
								@if(isset($model->modeles['image_name']) && $model->modeles['image_name'] !='')

                 
                                 <img src="{{ asset('images/'.$model->modeles['image_name']) }}" alt=""> 

                                @else
                                <img src="{{ asset('images/no-image.png') }}" alt="">

                                @endif
									<!--<img src="images/models_square/01.jpg" alt="">-->
									<div class="media-links"><a class="abs-link" href="{{url('models-detail/'.$model->name)}}"></a>
									</div>
								</div>
								<div class="item-content text-center grey gradient_bg_goriz">
                                <div class="bg_overlay"></div>
                                <div class="model-parameters">
                                    <h2>
                                        <a href="{{url('models-detail/'.$model->name)}}">{{$model->name ? $model->name:''}}</a>
                                    </h2>
                                     <ul class="custom-model-parameter">
                                        <li>
                                            <div class="model-full-dt">
                                                <span class="bold">Age</span>
                                                <br>
                                                <span>{{$model->modeles ? $model->modeles['age']:''}}</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="model-full-dt">
                                                <span class="bold">Location</span>
                                                <br>
                                                <span>{{$model->modeles ? $model->modeles['state']:''}}</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="model-full-dt">
                                                <span class="bold">Price</span>
                                                <br>
                                                <span>{{$model->modeles ? $model->modeles['price']:''}}</span>
                                            </div>
                                        </li>
                                        <li>

                                        </li>

                                    </ul>
                                </div>

                            </div>
                            <div class="model-verified">
                                @if($model->image_verification_status == 1)
                                <span class="verified-label bold">Verified</span>
                               @endif
                            </div>
                        </div>

						</div>
						@endforeach
						@else
                            @if(isset($result) && !empty($result))
							@foreach($result as $model)

								<div class="isotope-item col-lg-3 col-md-4 col-sm-6 fashion">

							<div class="vertical-item content-absolute">
								<div class="item-media">
								@if(isset($model->image_name) && $model->image_name !='')

                                

                                 <img src="{{ asset('images/'.$model->image_name) }}" alt=""> 

                                @else
                                <img src="{{ asset('images/no-image.png') }}" alt="">

                                @endif
									<!--<img src="images/models_square/01.jpg" alt="">-->
									<div class="media-links"><a class="abs-link" href="{{url('models-detail/'.$model->name)}}"></a>
									</div>
								</div>
								<div class="item-content text-center grey gradient_bg_goriz">
                                <div class="bg_overlay"></div>
                                <div class="model-parameters">
                                    <h2>
                                        <a href="{{url('models-detail/'.$model->name)}}">{{$model->name ? $model->name:''}}</a>
                                    </h2>
                                     <ul class="custom-model-parameter">
                                        <li>
                                            <div class="model-full-dt">
                                                <span class="bold">Age</span>
                                                <br>
                                                <span>{{ $model ? $model->age:''}}</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="model-full-dt">
                                                <span class="bold">Location</span>
                                                <br>
                                                <span>{{$model ? $model->state:''}}</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="model-full-dt">
                                                <span class="bold">Price</span>
                                                <br>
                                                <span>{{$model ? $model->price:''}}</span>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="model-verified">
                                @if($model->image_verification_status == 1)
                                <span class="verified-label bold">Verified</span>
                               @endif
                            </div>
							</div>
						</div>
							@endforeach
							@else
							<div class="isotope-item col-lg-3 col-md-4 col-sm-6 fashion">
						    	<div class="vertical-item content-absolute">
						            <h3 class="text-center">No Record Found!</h3>
						        </div>
							</div>
							@endif
						@endif
					</div>
				</div>
			</section>


 @endsection

