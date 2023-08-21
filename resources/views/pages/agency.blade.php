@extends('pages.master')

@section('content')
<section class="ds page_models custom-models-sq models_square gorizontal_padding section_padding_80 columns_padding_0">
	<div class="container-fluid">
	<h2 class="big topmargin_0 bottommargin_30">Agency</h2>
		<div class="isotope_container isotope row masonry-layout bottommargin_20" data-filters=".isotope_filters">
        @if(isset($users))
			@foreach($users as $user)
				<div class="isotope-item col-lg-3 col-md-4 col-sm-6 fashion">
					<div class="vertical-item content-absolute">
						<div class="item-media">
						@if(isset($user->UserAgency['image_name']) && $user->UserAgency['image_name'] !='')
                                <img src="{{ asset('images/'.$user->UserAgency['image_name']) }}" alt="">    
                            @else
                                <img src="{{ asset('images/no-image.png') }}" alt="">
                            @endif
								<!--<img src="images/models_square/01.jpg" alt="">-->
								<div class="media-links"></div>
						</div>
								<div class="item-content text-center before_cover cs">
									<div class="links-wrap">
										<a class="p-link" title="" href="{{url('agency-detail/'.encrypt($user->id))}}">{{$user->name ? $user->name:''}}</a>
										<a class="p-view prettyPhoto pull-right" title="" data-gal="prettyPhoto[gal]" href="images/models_square/01.jpg"></a>
									</div>
									<div class="bg_overlay"></div>
									
								</div>
							</div>
						</div>
						@endforeach
						
						@endif
					</div>
				</div>
			</section>

 @endsection

           