@extends('pages.master')
@section('page_title',"Independent Escort Directory of Australia | Australia Escort Service")
@section('page_description',"Find a Best Escort at your area. No fake profiles on Velvet Klub. Best Escort Listing site. High Profile Escort Listing.")
@section('page_keyboard','Escort Services')
@section('content')


        <section class="ds page_models custom-ft-girls find-ct-girls models_square gorizontal_padding section_padding_40 columns_padding_0 custom-28">
            <div class="container-fluid custom-model-form custom-new-searchbar">
			    <form class="form-inline models-orderby" method="get" action="{{url('search')}}">
					<div class="form-group">
							<input type="text" placeholder="Enter a location to find local escorts" name="location" id="location" value="<?php if(isset($_GET['location']) && $_GET['location']!='') { echo $_GET['location']; } ?>">
					</div>
					<div class="form-group">
							<input type="text" placeholder="Suburb" name="suburb" id="location" value="<?php if(isset($_GET['suburb']) && $_GET['suburb']!='') { echo $_GET['suburb']; } ?>">
					</div>
                    <div class="form-group">
					<select name="sex" class="form-control text-center">
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
                                  <input type="radio" id="all" name="escort_type" value="all">
                                   <label for="all">All</label>
                            </div>
                            <div class="strip-check">
                               <input type="radio" id="escort_type" name="escort_type" value="escort">
                                <label for="escort">Escort</label>
                            </div>
                            <div class="strip-check">
                               <input type="radio" id="bdsm" name="escort_type" value="bdsm">
                               <label for="bdsm">BDSM</label>
                            </div>
                           <div class="strip-check">
                                <input type="radio" id="rub" name="escort_type" value="body_rub">
                               <label for="rub">Body Rub</label>
                            </div>
                            <div class="strip-check">
                                <input type="radio" id="strip" name="escort_type" value="stripe_dance">
                                <label for="strip">Strip/Dance</label>
                            </div>
                        </div>
                        <div class="inner-strip">
                            <div class="strip-check">
                                <input type="radio" id="strip" name="account_type" value="stripe_dance">
                                <label for="strip">Strip/Dance</label>
                            </div>
                            <div class="strip-check">
                                <input type="radio" id="independents" name="account_type" value="independent">
                                <label for="independents">Independents</label>
                            </div>
                           <div class="strip-check">
                            <input type="radio" id="establishments" name="account_type" value="establishment">
                                <label for="establishments">Establishments</label>
                            </div>
                           <div class="strip-check">
                               <input type="radio" id="agencies" name="account_type" value="agency">
                                <label for="agencies">Agencies</label>
                           </div>
                        </div>
					</div>
    <!--                    </div>-->
						<div class="form-group ct-form-button">
						    <div class="ct-inner-form-button">
						        <input type="submit" name="search" id="search" value="Find Escorts">
						    </div>
						    <div class="ct-inner-form-button">
						        <a href="{{route('pages.models')}}" class="btn">Clear</a>
					        </div>
							<div class="ct-inner-form-button">
							    <a href="{{route('pages.models')}}" class="btn advance-search">Advanced search</a>
							</div>
							<div class="ct-inner-form-button by-name">
							<!--    <a href="{{route('pages.models')}}" class="btn">Search by Name</a>-->
							<!--</div>-->

				        </div>
				</form>

				<!--<div class="custom-new-searchbar">-->
    <!--                <form>-->
    <!--                    <div class="inner-content">-->
    <!--                        <input type="text" name="search" placeholder="Enter a location to find local escorts">-->
    <!--                        <select>-->
    <!--                            <option>All Genders</option>-->
    <!--                            <option>Male</option>-->
    <!--                            <option>Female</option>-->
    <!--                            <option>Transgender</option>-->
    <!--                            <option>Pangender</option>-->
    <!--                            <option>Two-spirit</option>-->
    <!--                        </select>-->
    <!--                        <div class="find-button"> <input type="submit" name="search" id="search" value="Find Escorts"></div>-->
    <!--                    </div>-->
    <!--                    <div class="bottom-strip">-->
    <!--                        <div class="inner-strip">-->
    <!--                            <div class="strip-check">-->
    <!--                                <input type="radio" id="all" name="name" value="">-->
    <!--                                <label for="all">All</label>-->
    <!--                            </div>-->
    <!--                            <div class="strip-check">-->
    <!--                                <input type="radio" id="escort" name="name" value="">-->
    <!--                                <label for="escort">Escort</label>-->
    <!--                            </div>-->
    <!--                            <div class="strip-check">-->
    <!--                                <input type="radio" id="bdsm" name="name" value="">-->
    <!--                                <label for="bdsm">BDSM</label>                    </div>-->
    <!--                            <div class="strip-check">-->
    <!--                                <input type="radio" id="rub" name="name" value="">-->
    <!--                                <label for="rub">Body Rub</label>-->
    <!--                            </div>-->
    <!--                            <div class="strip-check">-->
    <!--                                <input type="radio" id="strip" name="name" value="">-->
    <!--                                <label for="strip">Strip/Dance</label>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="inner-strip">-->
    <!--                            <div class="strip-check">-->
    <!--                                <input type="radio" id="strip" name="name" value="">-->
    <!--                                <label for="strip">Strip/Dance</label>-->
    <!--                            </div>-->
    <!--                            <div class="strip-check">-->
    <!--                                <input type="radio" id="independents" name="name" value="">-->
    <!--                                <label for="independents">Independents</label>-->
    <!--                            </div>-->
    <!--                            <div class="strip-check">-->
    <!--                                <input type="radio" id="establishments" name="name" value="">-->
    <!--                                <label for="establishments">Establishments</label>-->
    <!--                            </div>-->
    <!--                            <div class="strip-check">-->
    <!--                                <input type="radio" id="agencies" name="name" value="">-->
    <!--                                <label for="agencies">Agencies</label>-->
    <!--                            </div>-->
    <!--                        </div>-->

    <!--                            <div class="strip-advance-button">-->
    <!--                                <a href="{{route('pages.models')}}" class="btn">Advance Search</a>-->
    <!--                            </div>-->

    <!--                    </div>-->
    <!--                </form>-->
    <!--            </div>-->

				</div>
        </section>

        <section class="ds ms intro_section page_mainslider custom-slider">
                <div class="owl-carousel page_maincarousel" data-margin="0" data-nav="true" data-loop="true" data-items="4">

                    @if(!empty($models) && isset($models))
                    @foreach($models as $model)
                    <div>
                        <div class="vertical-item maincarousel-item content-absolute cs">
                            <div class="item-media">
                                @if(isset($model->modeles['image_name']) && $model->modeles['image_name'] !='')

                           <img src="{{ asset('images/'.$model->modeles['image_name']) }}" alt="">

      
                                @else
                                <img src="{{ asset('images/no-image.png') }}" alt="" width="300" height="500p">

                                @endif

                                <div class="media-links">
                                    <a class="abs-link" title="" href="{{url('models-detail/'.$model->name)}}"></a>
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
                    @endif
                </div>
            </section>


            <section class="ds page_models custom-ft-girls models_square gorizontal_padding section_padding_40 columns_padding_0">

				<div class="container-fluid">
				    <h3 class="custom-hd">Featured Girls</h3>
					<div class="row bottommargin_10 boxed-padding">
						<div class="col-lg-7">
							<!--<div class="filters isotope_filters inline-block margin_0">-->
							<!--	<a href="#" data-filter="*" class="selected">All</a>-->
							<!--	<a href="#" data-filter=".fashion">Fashion</a>-->
							<!--	<a href="#" data-filter=".studio">Studio</a>-->
							<!--	<a href="#" data-filter=".session">Session</a>-->
							<!--</div>-->
						</div>
						<div class="col-lg-10 text-lg-right">

						</div>
					</div>

					<div class="isotope_container isotope row masonry-layout bottommargin_20" data-filters=".isotope_filters">

                    @if(isset($models))
					 	@foreach($models as $model)
						<div class="isotope-item custom-content custom-content-hover col-lg-3 col-md-4 col-sm-4 col-xs-6 fashion">

							<div class="vertical-item content-absolute">
								<div class="item-media">
								@if(isset($model->modeles['image_name']) && $model->modeles['image_name'] !='')

              <!--                  <div class="custom-owlcarousel">-->
    						    <!--    <div class="owl-carousel owl-theme">-->
              <!--                          <div class="item"><img src="{{ asset('images/'.$model->modeles['image_name']) }}" alt=""></div>-->
              <!--                          <div class="item"><img src="{{ asset('images/no-image.png') }}" alt=""></div>-->
              <!--                          <div class="item"><img src="{{ asset('images/'.$model->modeles['image_name']) }}" alt=""></div>-->
              <!--                      </div>-->
    						    <!--</div>-->


    						    <!--<div class="one-time">-->
              <!--                      <div><img src="{{ asset('images/'.$model->modeles['image_name']) }}" alt=""></div>-->
              <!--                      <div><img src="{{ asset('images/no-image.png') }}" alt=""></div>-->
              <!--                      <div><img src="{{ asset('images/'.$model->modeles['image_name']) }}" alt=""></div>-->
              <!--                  </div>-->



                             

                                 <img src="{{ asset('images/'.$model->modeles['image_name']) }}" alt=""> 

                                @else
                                <img src="{{ asset('images/no-image.png') }}" alt="">

                                @endif
									<!--<img src="images/models_square/01.jpg" alt="">-->
									 <div class="media-links">
                                    <a class="abs-link" title="" href="{{url('models-detail/'.$model->name)}}"></a>
                                </div>
								</div>
								<div class="item-content text-center before_cover cs">
									<div class="links-wrap"><a class="p-link" title="" href="{{url('models-detail/'.$model->name)}}">
										{{$model->name ? $model->name:''}}</a>
										<a class="p-view prettyPhoto pull-right" title="" data-gal="prettyPhoto[gal]" href="images/models_square/01.jpg"></a>
									</div>
									<div class="bg_overlay"></div>
									<div class="model-parameters">
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
									        <!--<li>-->
									        <!--    <div class="model-full-dt">-->
        									<!--		<span class="bold">Hips</span>-->
        									<!--		<br>-->
        									<!--		<span>{{$model->modeles ? $model->modeles['hips']:''}}</span>-->
        									<!--	</div>-->
									        <!--</li>-->
									        <!--<li>-->
									        <!--    <div class="model-full-dt">-->
        									<!--		<span class="bold">Shoe</span>-->
        									<!--		<br>-->
        									<!--		<span>{{$model->modeles ? $model->modeles['shoe']:''}}</span>-->
        									<!--	</div>-->
									        <!--</li>-->
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
									<div class="media-links">
									</div>
								</div>
								<div class="item-content text-center before_cover cs">
									<div class="links-wrap"><a class="p-link" title="" href="{{url('models-detail/'.$model->name)}}">
										{{$model->name ? $model->name:''}}</a>
										<a class="p-view prettyPhoto pull-right" title="" data-gal="prettyPhoto[gal]" href="images/models_square/01.jpg"></a>
									</div>
									<div class="bg_overlay"></div>
									<div class="model-parameters">
										<div>
											<span class="bold">Height</span>
											<br>
											<span>{{$model->height ? $model->height:''}}</span>
										</div>
										<div>
											<span class="bold">Bust</span>
											<br>
											<span>{{$model->bust ? $model->bust:''}}</span>
										</div>
										<div>
											<span class="bold">Waist</span>
											<br>
											<span>{{$model->waist ? $model->waist:''}}</span>
										</div>
										<div>
											<span class="bold">Hips</span>
											<br>
											<span>{{$model->hips ? $model->hips:''}}</span>
										</div>
										<div>
											<span class="bold">Shoe</span>
											<br>
											<span>{{$model->shoe ? $model->shoe:''}}</span>
										</div>
									</div>
								</div>
							</div>

						</div>
							@endforeach
						@endif
					</div>
				</div>
				<div class="container text-center">
				<a href="{{url('models')}}" class="theme_button color1 topmargin_20">Load More</a>
				</div>
			</section>

            <!--<section class="ds intro_section">-->
            <!--    <div class="flexslider vertical-nav">-->
            <!--        <ul class="slides">-->
            <!--            <li>-->
            <!--                <img src="images/slide01.png" alt="">-->
            <!--                <div class="container">-->
            <!--                    <div class="row">-->
            <!--                        <div class="col-sm-12 text-center text-md-right">-->
            <!--                            <div class="slide_description_wrapper">-->
            <!--                                <div class="slide_description">-->
            <!--                                    <div class="intro-layer" data-animation="slideExpandUp">-->
            <!--                                        <h2 class="big margin_0">About Velvet Klub</h2>-->

            <!--                                    </div>-->
            <!--                                    <div class="intro-layer" data-animation="slideExpandUp">-->
            <!--                                        <p class="bottommargin_30">-->
            <!--                                            If you are looking for a website to submit you escort services profile you are at right place, we are lunching the online escort listing website where you can upload your profile, image, contact details, video and many more. You will find the verified customers which is come from the Google and paid advertisement who are looking for escort services in Australia, New Zealand and Local area of Australia. We will lunched our website all over the word. We have expert team to manage everything so you will get the organically customers and visitors. -->
            <!--                                        </p>-->
            <!--                                        <b>Velvet Klub</b>–We are Escort Listing website in Australia. You can create your profile and list your profile free of cost after that you will get verified your account. It is the best escort services website in Australia. <a href="{{ url('signup') }}">Create Your Account Today</a>.-->

                                                    <!-- <a href="about.html" class="theme_button color1 topmargin_20">About us</a> -->
            <!--                                    </div>-->
            <!--                                </div>-->
                                            <!-- eof .slide_description -->
            <!--                            </div>-->
                                        <!-- eof .slide_description_wrapper -->
            <!--                        </div>-->
                                    <!-- eof .col-* -->
            <!--                    </div>-->
                                <!-- eof .row -->
            <!--                </div>-->
                            <!-- eof .container -->
            <!--            </li>-->
            <!--        </ul>-->
            <!--    </div>-->
            <!--</section>-->
            <section class="ds parallax custom-verified calltoaction section_padding_10" style="background-image: url('./images/parallax/call_to_action.jpg')">
                <div class="container">
                    <div class="row topmargin_10">
                        <div class="col-sm-12 text-center verified-outer-wrap">
                            <h1 class="topmargin_0">Find Your 100% Real and Top Modal Escort in Your Area at Velvet Klub | Real and Verified Escort. Best Australia's Escort Services and 100% Real. </h1>
                            <h2> where do you go when you need the best independent working escorts in the city? </h2>
                            <div class="row">
                                <div class="inner-verified-content">
                                    <!--<p class="fontsize_20">-->
                                    <h3>You don't. You come here!</h3>

<p>We've got the hottest, sexiest, most beautiful escorts in town. The kind of girls who are so hot they make your eyes water just thinking about them. And not only do they work well, but they're also independent. You can enjoy our services without having to worry about running into an old friend or family member—they'll never know where you were last night. All they'll know is that they had a great time with us at Velvet Klub.</p>

<h2>Are you looking for the best independent working escorts? You've come to the right place! </h2>

<p>If you're looking for an unforgettable evening with an escort who knows just what you want and is eager to give it to you, then you need to look no further than VelvetKlub. Our escorts are gorgeous, friendly, and natural. They come from all walks of life, from students to single mothers to people like you and me. They aren't expensive either. You can get a 2-hour date with us for the same price as a movie ticket! If that isn't incredible value for money, we don't know what is.</p>

<p>The city has so many independent working escorts that it's hard to keep track. We've rounded up the best of the best, so you can find a real pro who'll deliver the goods at an unbeatable price.</p>

<h2>Looking for a new Escorting service job? </h2>

<p>Providers we are looking for you to be our next independent working escort. We are a professional company with years of experience in the industry and we are looking for new faces to join our team. You will be working independently and will have the freedom to work where and when you want. If this sounds like something that interests you, please contact us today!
Our mission is to help you find the best independent working escorts. We have a wide range of clients and we have been offering them the best services for many years. Do not hesitate and contact us at any time, our team will answer all your questions.</p>

{{-- <a href="{{ url('signup')}}">Signup Escort Services in Australia</a>


<p>Find Escort Services at Your Local Area</p>

<p>Where are you from? Don’t meter, we are anywhere in Perth Escort, Tasmania Escort, Victoria Escort, Adelaide Escort, Brisbane Escort, Queensland Escort, Canberra Escort, Gold coast Escort, Melbourne Escort, New Zealand Escort, Sunshine Coast Escort, New South Wales Escortand many more. </p><p>


<a href="{{ url('signup')}}">Let Signup Today -</a> --}}


</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section class="ds section_padding_70 custom-gtype gorizontal_padding">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="owl-carousel top-models-carousel" data-margin="0" data-nav="true" data-loop="true" data-items="3" data-autoplay="false" data-responsive-xs="1" data-responsive-sm="2" data-responsive-md="2" data-responsive-lg="3">
                            @if(!empty($models) && isset($models))
                                @foreach($models as $model)
                                <div>

                                    <div class="vertical-item content-absolute">
                                        <div class="item-media">
                                        @if(isset($model->modeles['image_name']) && $model->modeles['image_name'] !='')
                                         <img src="{{ asset('images/'.$model->modeles['image_name']) }}" alt="">
                                      

                                        @else
                                        <img src="{{ asset('images/no-image.png') }}" alt="">
                                        @endif
                                            <div class="media-links"><a class="abs-link" href="{{url('models-detail/'.$model->name)}}"></a>
                                            </div>
                                        </div>
                                       <div class="item-content text-center grey gradient_bg_goriz">
                                <div class="bg_overlay"></div>
                                <div class="model-parameters">
                                    <h2><a href="{{url('models-detail/'.$model->name)}}">
                                        {{$model->name ? $model->name:''}}</a>
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
                                @endif
                            </div>
                        </div>
                    </div>


                    <div class="row topmargin_50">
                        <div class="col-xs-12 text-center margin_0">
                            <div class="grey">
                                <div class="pages bold" id="top_models_pagination">1 / 12</div>
                            </div>
                        </div>
                    </div>

                </div>

            </section>



            <section class="ds ms section_padding_top_80 columns_padding_0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="owl-carousel blog-carousel theme-owl-carousel" data-margin="30" data-nav="false" data-dots="true" data-center="true" data-loop="true" data-items="5" data-autoplay="false" data-responsive-xs="1" data-responsive-sm="2" data-responsive-md="2"
                                data-responsive-lg="3" data-responsive-xlg="5">
                                @if(isset($blogs))
					 	        @foreach($blogs as $blog)
                                <article class="vertical-item post format-video with_background">
                                    <div class="entry-thumbnail">
                                        <div class="embed-responsive embed-responsive-3by2">
                                        @if(isset($blog->filename) && $blog->filename !='')

                                       
                                        <img src="{{ asset('images/'.$blog->filename) }}" alt="">

                                        @else
                                        <img src="{{ asset('images/no-image.png') }}" alt="">
                                        @endif
                                                <div class="media-links"></div>
                                        </div>
                                    </div>


                                    <div class="item-content entry-content">
                                        <h2 class="topmargin_0">
                                            {{$blog->blog_title ? $blog->blog_title:''}}
                                        </h2>

                                        <p>
                                        {{ substr(strip_tags($blog->descripion), 0, 50) }}

                                        @if(strlen(strip_tags($blog->descripion)) > 50)
                                        <a href='{{route("pages.blog")}}' class='read-more'>...ReadMore</a>
                                        @endif

                                        </p>

                                    </div>

                                    <!-- .item-content.entry-content -->
                                </article>
                                @endforeach
							    @endif

                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- <section class="ds section_padding_70">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h2 class="big margin_0">Contact Us</h2>
                            <h2 class="muellerhoff topmargin_5 bottommargin_50 highlight">Contact Form</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <p class="bottommargin_20">
                                <span class="grey fontsize_12 text-uppercase bold">Address:</span>
                                <br>
                            </p>
                            <p class="bottommargin_20">
                                <span class="grey fontsize_12 text-uppercase bold">Call us:</span>
                                <br>
                            </p>
                            <p class="bottommargin_0">
                                <span class="grey fontsize_12 text-uppercase bold">Email:</span>
                                <br>
                                <a href="mailto:admin@velvetclub.com">
                                    <em>admin@velvetklub.com</em>
                                </a>
                            </p>
                        </div>
                        <div class="col-md-8">
                            <form class="contact-form row" method="post" action="{{url('contact/mail/')}}">
                                @csrf
                                @method('POST')
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name" class="sr-only">Full Name
                                            <span class="required">*</span>
                                        </label>
                                        <input type="text" aria-required="true" size="30" value="" name="name" id="name" required class="form-control with-icon" placeholder="Name" >
                                        <i class="rt-icon2-user"></i>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="sr-only">Email address
                                            <span class="required">*</span>
                                        </label>
                                        <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control with-icon" placeholder="Email Address" required>
                                        <i class="rt-icon2-mail"></i>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone" class="sr-only">Phone number
                                            <span class="required">*</span>
                                        </label>
                                        <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control with-icon" placeholder="Phone Number" required>
                                        <i class="rt-icon2-phone5"></i>
                                    </div>


                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="message" class="sr-only">Message</label>
                                        <textarea aria-required="true" rows="6" cols="45" name="message" id="message" class="form-control with-icon" required placeholder="Message"></textarea>
                                        <i class="rt-icon2-pen"></i>
                                    </div>

                                    <button type="submit" id="" name="contact_submit" class="theme_button color1 bottommargin_0">Send</button>
                                    <button type="reset" id="contact_form_clear" name="contact_clear" class="theme_button inverse bottommargin_0">Clear</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </section> -->
 @endsection

