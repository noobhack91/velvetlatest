@extends('pages.master')
<?php
	$page_title="velvet Klub";
	if(isset($pages) && !empty($pages)) {
		if($pages->meta_title!=''){
			$page_title=$pages->meta_title;
		}
		else{
			$page_title="velvet Klub";
		}
		
	} 

	$page_description="";
	if(isset($pages) && !empty($pages)) {
		if($pages->meta_description!=''){
			$page_description=$pages->meta_description;
		}
		else{
			$page_description="";
		}
		
	} 
?>
@section('page_title',$page_title)
@section('page_description',$page_description)
@section('content')

<section class="ds page_models custom-models-sq models_square gorizontal_padding  columns_padding_0">
				<div class="container-fluid">
					

					<div class="isotope_container isotope row masonry-layout" data-filters=".isotope_filters">

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
                                                <span>{{$model->age ? $model->age:''}}</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="model-full-dt">
                                                <span class="bold">Location</span>
                                                <br>
                                                <span>{{$model->street_address ? $model->street_address:''}}</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="model-full-dt">
                                                <span class="bold">Price</span>
                                                <br>
                                                <span>{{$model->price ? $model->price:''}}</span>
                                            </div>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </div>
							</div>
						</div>
							@endforeach
						@endif
					</div>
				</div>
			</section>

            <section class="ds about-content">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<article class="post format-small-image with_background">

								<div class="side-item content-padding">

									<div class="row">


										<div class="col-md-12">
											<div class="item-content .about-content">
												<?php
                                                if(isset($pages))
                                                {
                                                    echo $pages->content;
                                                }
                                                ?>
											</div>
										</div>

									</div>
								</div>

							</article>
						</div>
					</div>
				</div>
			</section>
@endsection