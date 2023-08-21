<!DOCTYPE html>
    <html class="no-js">
    <head>
       	        <title>@yield('page_title')</title>

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-53QCZLS');</script>
        <!-- End Google Tag Manager -->
        <meta charset="utf-8">
        <meta name="google-site-verification" content="f2eHt6jchUaKl4QOAz94ReBCiPQ4h-x9GbC2THsBsGU" />
        <meta name="description" content="@yield('page_description')">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="@yield('page_keyboard')"/>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="icon" type="image/x-icon" href="{{ asset('images/velvet_favicon.png') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}" id="color-switcher-link">
        <link rel="stylesheet" href="{{ asset('css/animations.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
        <script src="{{ asset('js/vendor/modernizr-2.6.2.min.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css"
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     @yield('custom_css')
     <script src="https://kit.fontawesome.com/a282321041.js" crossorigin="anonymous"></script>
	<meta name="title" content="Independent Escort Directory of Australia | Australia Escort Service">
<meta name="description" content="Looking for Australia escort services? Find the best independent escort Directory of Australia. A Best Escort directory in Australia.">
<meta name="keywords" content="Independent Escort Directory of Australia, Australia Escort Service, Best Escort directory in Australia">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
<meta name="revisit-after" content="1 days">
<meta name="author" content="Velvet Klub">
<meta name="robots" content="index,noodp,noydir,follow">
<meta name="google-site-verification" content="f2eHt6jchUaKl4QOAz94ReBCiPQ4h-x9GbC2THsBsGU" />
<meta property="og:title" content=Independent Escort Directory of Australia | Australia Escort Service>
<meta property="og:site_name" content=Velvet Klub>
<meta property="og:url" content=https://velvetklub.com/>
<meta property="og:description" content=Looking for Australia escort services? Find the best independent escort Directory of Australia. A Best Escort directory in Australia.>
<meta property="og:type" content="">
<meta property="og:image" content="">
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "WebSite",
  "name": "Velvet Klub",
  "url": "https://velvetklub.com/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://velvetklub.com/{search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>

    </head>

    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-53QCZLS"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    <div class="preloader">
        <div class="preloader_image"></div>
    </div>

    <!-- search modal -->
    <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
        <div class="widget widget_search">
            <form method="get" class="searchform form-inline" action="/">
                <div class="form-group">
                    <input type="text" value="" name="search" class="form-control" placeholder="Type search keyword here..." id="modal-search-input">
                </div>
                <button type="submit" class="theme_button input_button">Search</button>
            </form>
        </div>
    </div>

    <!-- wrappers for visual page editor and boxed version of template -->
    <!-- wrappers for visual page editor and boxed version of template -->
    <div id="canvas">
        <div id="box_wrapper">



            <header class="page_header header_darkgrey columns_padding_0 table_section gorizontal_padding">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-2 col-sm-6 text-center">
                            <!--<a href="{{ route('homepage') }}" class="logo logo_image">-->
                            <!--    <h1>Velvet-->
                            <!--        <span class="muellerhoff">Klub</span>-->
                            <!--    </h1>-->
                            <!--    <img src="images/logo.png" alt="">-->

                            <!--</a>-->
                            <a href="{{ route('homepage') }}" class="logo logo_image">
                                <img src="{{ asset('images/velvet_lg.png'); }}" alt="">
                            </a>
                        </div>
                        <div class="col-md-10 col-sm-6 text-right">
                            <!-- main nav start -->
                            <nav class="mainmenu_wrapper">
                                <ul class="mainmenu nav sf-menu">
                                    <li class="{{ Request::routeIs('homepage') ? 'active' : '' }}">
                                        <a href="{{ route('homepage') }}"><i class="fa fa-home" aria-hidden="true"></i></a>
                                    </li>



                                    <!-- <li class="{{ Request::routeIs('pages.models') ? 'active' : '' }}">
                                        <a href="{{ route('pages.models') }}">Models</a>

                                    </li>

                                    <li>
                                        <a href="{{ url('agencies') }}">Agency</a>
                                    </li> -->


                                    <!-- contacts -->

                                    <li class="{{ Request::routeIs('pages.blog') ? 'active' : '' }}">
                                    <a href="{{ route('pages.blog') }}">Blog</a>
                                    </li>


                                    <li class="{{ Request::routeIs('login') ? 'active' : '' }}">
                                       @if (Route::has('login'))
                                            @auth
                                            <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                            @else
                                                <a href="{{ route('login') }}" >Log in</a>
                                            @endauth

                                    @endif
                                    </li>



                                    <li class="advertise-header-bt {{ Request::routeIs('signup') ? 'active' : '' }}">
                                    @if(Auth::check())

                                        @if (auth()->user()->role=='admin')
                                         <a href="{{ route('admin.dashboard') }}" >Dashboard</a>
                                        @endif
                                        @if (auth()->user()->role=='model')
                                         <a href="{{ route('model') }}" >Dashboard</a>
                                        @endif
                                         @if (auth()->user()->role=='customer')
                                         <a href="{{ route('customer') }}" >Dashboard</a>
                                        @endif


                                    @else
                                      <a href="{{ route('signup') }}" >Join us</a>
                                    @endif



                                    </li>

                                   <!-- <li class="custom-dropdown-menu">
                                        <a href="#" class=""><i class="fa fa-bars" aria-hidden="true"></i>Popular Locations</a>
                                        <div class="custom-dropdown-content">
                                            <?php
                                                // $pages=\App\Models\Page::get();
                                                // if(isset($pages) && !empty($pages)){
                                                //     foreach($pages as $page){
                                                //         $alllocations=array('Adelaide');

                                                //         ?>
                                                //         <div class="main_locations">
                                                //         <a href="<?php //echo url($page['location']); ?>">
                                                //             <?php //echo $page['page_name']; ?>
                                                //         </a>
                                                //         </div>
                                                //     <?php

                                                //     }
                                                // }
                                                ?>
                                        </div>
                                    </li> -->

                                    <li class="dropdown"><a href="#" class="dropbtn"><i class="fa fa-bars" aria-hidden="true"></i>Popular Locations</a>

                                    </li>


                                    <!-- eof contacts -->

                                </ul>
                            </nav>
                            <!-- eof main nav -->
                            <span class="toggle_menu">
                                <span></span>
                            </span>
                        </div>
                        <!-- <div class="col-md-2 col-sm-6 header-contacts text-center hidden-xs">
                            <div class="highlight inline-block fontsize_30 thin">(800) 543 4625</div>
                            <div class="fontsize_20 grey topmargin_-5">24/7 free calls</div>
                        </div> -->
                    </div>
                </div>
<div class="dropdown-content">
    <div class="inner-megamenu-ct">
      <h2>Popular Locations for Escorts</h2>
      <p>Click on a location to start browsing all Escorts in your area!</p>
      <div class="custom-mega-menu">
        <ul>
            <a href="{{ url('new-south-wales-escort') }}" style="text-decoration: none;">
             <h2 style="font-size: 18px; color: #fff;">New South Wales</h2></a>
            <li><a href="{{ url('sydney-escorts') }}">Sydney Escort</a></li>
            <li><a href="{{ url('kings-cross-escorts') }}">Kings Cross Escort</a></li>
            <li><a href="{{ url('north-sydney-escorts') }}">North Sydney Escort</a></li>
            <li><a href="{{ url('liverpool-escorts') }}">Liverpool Escort</a></li>
            <li><a href="{{ url('campbelltown-escorts') }}">Campbell town Escort</a></li>
            <li><a href="{{ url('bankstown-escorts') }}">Banks town Escort</a></li>
            <li><a href="{{ url('home-bush-escorts') }}">Home bush Escort</a></li>

            <li><a href="{{ url('parramatta-escorts') }}">Parramatta Escort</a></li>
            <li><a href="{{ url('penrith-escorts') }}">Penrith Escort</a></li>
            <li><a href="{{ url('newcastle-escorts') }}">Newcastle Escort</a></li>
            <li><a href="{{ url('wollongong-escorts') }}">Wollongong Escort</a></li>
            <li><a href="{{ url('central-coast-escorts') }}">Central Coast Escort</a></li>
            <li><a href="{{ url('coffs-harbour-escorts') }}">Coffs Harbour Escort</a></li>
            <li><a href="{{ url('forster-escorts') }}">Forster Escort</a></li>
            <li><a href="{{ url('byron-bay-escorts') }}">Byron Bay Escort</a></li>
            <li><a href="{{ url('tweed-heads-escorts') }}">Tweed Heads Escort</a></li>

        </ul>
          <ul>  <a href="{{ url('queensland-escort') }}" style="text-decoration: none;">
                      <h2 style="font-size: 18px; color: #fff;">Queensland Escort</h2>
</a>
              <li><a href="{{ url('brisbane-escort') }}">Brisbane Escort</a></li>
              <li><a href="{{ url('goldcoast-escort') }}">Gold Coast Escort</a></li>
              <li><a href="{{ url('sunshine-coast-escorts') }}">Sunshine Coast Escort</a></li>
              <li><a href="{{ url('ipswich-escorts') }}">Ipswich Escort</a></li>
              <li><a href="{{ url('toowoomba-escorts') }}">Toowoomba Escort</a></li>
              <li><a href="{{ url('bundaberg-escorts') }}">Bundaberg Escort</a></li>
              <li><a href="{{ url('gladstone-escorts') }}">Gladstone Escort </a></li>
              <li><a href="{{ url('rockhampton-escorts') }}">Rockhampton Escort</a></li>
              <li><a href="{{ url('mackey-escorts') }}">Mackay Escort</a></li>
              <li><a href="{{ url('townsville-escorts') }}">Townsville Escort</a></li>
              <li><a href="{{ url('cairns-escorts') }}">Cairns Escort</a></li>
              <li><a href="{{ url('mount-isa-escorts') }}">Mount Isa Escort</a></li>
          </ul>
          <ul>
                         <a href="{{ url('western-australia-escorts') }}" style="text-decoration: none;">
                          <h2 style="font-size: 18px; color: #fff;">Western Australia Escorts</h2></a>
                          <li><a href="{{ url('perth-escort') }}">Perth Escort</a></li>
                          <li><a href="{{ url('mandurah-escorts') }}">Mandurah Escort</a></li>
                          <li><a href="{{ url('port-hedland-escorts') }}">Rockingham escorts</a></li>
                          <li><a href="{{ url('bunbury-escorts') }}">Bunbury Escort</a></li>
                          <li><a href="{{ url('joondalup-escorts') }}">Joondalup Escort</a></li>
                          <li><a href="{{ url('fremantle-escorts') }}">Fremantle Escort</a></li>
                          <li><a href="{{ url('kalgoorlie-escorts') }}">Kalgoorlie Escort</a></li>
                          <li><a href="{{ url('broome-escorts') }}">Broome Escort</a></li>
                          <li><a href="{{ url('port-hedland-escorts') }}">Port Hedland Escort</a></li>
                        </ul>
<ul>                    <a href="{{ url('victoria-escort') }}" style="text-decoration: none;">
              <h2 style="font-size: 18px; color: #fff;">Victoria Escort</h2></a>
              <li><a href="{{ url('melbourne-escort') }}">Melbourne Escort</a></li>
              <li><a href="{{ url('St-kilda-escorts') }}">St Kilda Escort</a></li>
              <li><a href="{{ url('geelong-escorts') }}">Geelong Escort</a></li>
              <li><a href="{{ url('ballarat-escorts') }}">Ballarat Escort</a></li>
           </ul>
              <ul> <a href="{{ url('south-australia-escorts') }}" style="text-decoration: none;">
                <h2 style="font-size: 18px; color: #fff;">SA - South Australia</h2></a>
                <li><a href="{{ url('adelaide-escort') }}">Adelaide Escort</a></li>
                <li><a href="{{ url('glenelg-escorts') }}">Glenelg Escort</a></li>
                <li><a href="{{ url('flagstaff-hill-escorts') }}">Flagstaff Hill Escort</a></li>
           
          </ul>


          

          <ul><a href="{{ url('northern-territorya-escorts') }}" style="text-decoration: none;">
               <h2 style="font-size: 18px; color: #ff;">NT-Northern Territory</h2></a>
              <li><a href="{{ url('darwin-escorts') }}">Darwin Escort</a></li>
              <li><a href="{{ url('katherine-escorts') }}">Katherine Escort</a></li>
              <li><a href="{{ url('alice-springs-escorts') }}">Alice Springs Escort</a></li>
         </ul>   
              <ul> <a href="{{ url('tasmania-escort') }}" style="text-decoration: none;">
                <h2 style="font-size: 18px; color: #fff;">Tasmania</h2></a>
                <li><a href="{{ url('hobart-escorts') }}">Hobart Escort</a></li>
                <li><a href="{{ url('launceston-escorts') }}">Launceston Escort</a></li>
          </ul>
 <ul><a href="{{ url('australian-capital-territory-escorts') }}" style="text-decoration: none;">
               <h2 style="font-size: 18px; color: #ff;">Australian Capital Territory </h2></a>
		   <li><a href="{{ url('canberra-escort') }}">Canberra</a></li>

          
         
      </div>
    </div>
</div>
             </header>

            <!-- template sections -->

            <section class="page_topline ds ms gorizontal_padding table_section">
                <div class="container-fluid with_border">
                    <div class="custom-locations">
                        <h4>Browse by City : </h4>
                     <div class="page_topline-wrap">
                    <?php
                        $pages=\App\Models\Page::get();
                        if(isset($pages) && !empty($pages)){
                            foreach($pages as $page){
                                $alllocations=array("Sydney","Newcastle","Parramatta","Melbourne","Geelong","Canberra","Brisbane","Gold Coast","Sunshine Coast","Perth","Darwin","Adelaide","Hobart");
                                if(in_array($page['page_name'], $alllocations)){
                                ?>
                                <div class="main_locations">
                                <a href="<?php echo url($page['location']); ?>">
                                    <?php echo $page['page_name']; ?>
                                </a>
                                </div>
                            <?php
                                }
                            }
                        }
                        ?>
                        </div>
                    </div>
                    <!-- <div class="row"> -->

                        <!-- <div class="col-sm-4 col-md-3 col-lg-2 text-xs-center text-left text-lg-right">
                            <a href="mailto:admin@velvetclub.com">
                                <em>admin@velvetklub.com</em>

                            </a>
                        </div> -->

                        <!-- <div class="col-sm-4 col-md-6 col-lg-8 text-center">
                            <div class="page_social_icons">
                                <a class="social-icon color-icon soc-facebook" href="#" title="Facebook"></a>
                                <a class="social-icon color-icon soc-twitter" href="#" title="Twitter"></a>
                                <a class="social-icon color-icon soc-google" href="#" title="Google"></a>
                                <a class="social-icon color-icon soc-linkedin" href="#" title="LinkedIn"></a>
                                <a class="social-icon color-icon soc-pinterest" href="#" title="Pinterest"></a>
                            </div>
                        </div> -->

                        <!-- <div class="col-sm-4 col-md-3 col-lg-2 text-xs-center text-right text-lg-left">
                            <ul class="inline-dropdown inline-block">



                            </ul>
                        </div>

                    </div> -->
                </div>
            </section>

    @yield('content')

    <footer class="ds page_footer custom-footer">
    <!--            <div class="container">-->
    <!--                <div class="footer-outer-wrap">-->
    <!--                <div class="row">-->
    <!--                    <div class="col-md-6 col-lg-3 to_animate" data-animation="scaleAppear">-->
    <!--                        <div class="widget widget_text inner-footer-ct">-->
    <!--                        <h3 class="widget-title">About us</h3>-->
    <!--                            <p>-->
    <!--                            Best independent escort services and escort listing website. Where you can submit your profile and verified very easy as well as you can find the verified escort.-->

    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-md-6 col-lg-6 to_animate" data-animation="scaleAppear">-->
    <!--                        <div class="row footer_lists">-->
    <!--                            <div class="col-xs-6 inner-footer-ct">-->
    <!--                                <h3 class="widget-title">Main Pages</h3>-->
    <!--                                <div>-->
    <!--                                 <ul class="list2 bottommargin_0">-->
    <!--                                        <li class="{{ Request::routeIs('pages.about') ? 'active' : '' }}">-->
    <!--                                             <a href="{{ route('pages.about') }}">About Us</a>-->
    <!--                                        </li>-->
    <!--                                       <li class="{{ Request::routeIs('pages.contact') ? 'active' : '' }}">-->
    <!--                                             <a href="{{ route('pages.contact') }}">Contact Us</a>-->
    <!--                                        </li>-->
    <!--                                        <li class="{{ Request::routeIs('pages.models') ? 'active' : '' }}">-->
    <!--                                             <a href="{{ route('pages.models') }}">Models</a>-->
    <!--                                        </li>-->
    <!--                                        <li class="{{ Request::routeIs('pages.agencies') ? 'active' : '' }}">-->
    <!--                                             <a href="{{ route('pages.agencies') }}">Agencies</a>-->
    <!--                                        </li>-->
    <!--                                        <li class="{{ Request::routeIs('pages.blog') ? 'active' : '' }}">-->
    <!--                                             <a href="{{ route('pages.blog') }}">Blog</a>-->
    <!--                                        </li>-->
    <!--                                        <li class="{{ Request::url('login') ? 'active' : '' }}">-->
    <!--                                             <a href="{{ url('login') }}">Login</a>-->
    <!--                                        </li>-->
    <!--                                        <li class="{{ Request::url('signup') ? 'active' : '' }}">-->
    <!--                                             <a href="{{ url('signup') }}">Signup</a>-->
    <!--                                        </li>-->








    <!--                                    </ul>-->
    <!--                                </div>-->
    <!--                            </div>-->

    <!--                            <div class="col-xs-6 inner-footer-ct">-->
    <!--                                <h3 class="widget-title">Our Locations</h3>-->
    <!--                                <div>-->
    <!--                                <ul class="list2 bottommargin_0">-->
    <!--
    <!--                                </ul>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->


    <!--                    </div>-->
    <!--                    <div class="col-md-6 col-lg-3 to_animate" data-animation="scaleAppear">-->
    <!--                        <div class="widget widget_banner inner-footer-ct">-->

    <!--                        <h3 class="big ">Contact Us</h3>-->


				<!--			<form class="contact-form custom-footer-form row" method="post" action="{{url('contact/mail/')}}">-->
    <!--                            @csrf-->
    <!--                            @method('POST')-->
    <!--                            <div class="footer-form-wrap">-->
    <!--                                <div class="form-group">-->
    <!--                                    <label for="name" class="sr-only">Full Name-->
    <!--                                        <span class="required">*</span>-->
    <!--                                    </label>-->
    <!--                                    <input type="text" aria-required="true" size="30" value="" name="name" id="name" required class="form-control with-icon" placeholder="Name" >-->
    <!--                                    <i class="rt-icon2-user"></i>-->
    <!--                                </div>-->
    <!--                                <div class="form-group">-->
    <!--                                    <label for="email" class="sr-only">Email address-->
    <!--                                        <span class="required">*</span>-->
    <!--                                    </label>-->
    <!--                                    <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control with-icon" placeholder="Email Address" required>-->
    <!--                                    <i class="rt-icon2-mail"></i>-->
    <!--                                </div>-->
    <!--                                <div class="form-group">-->
    <!--                                    <label for="phone" class="sr-only">Phone number-->
    <!--                                        <span class="required">*</span>-->
    <!--                                    </label>-->
    <!--                                    <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control with-icon" placeholder="Phone Number" required>-->
    <!--                                    <i class="rt-icon2-phone5"></i>-->
    <!--                                </div>-->
    <!--                                <div class="form-group">-->
    <!--                                    <label for="message" class="sr-only">Message</label>-->
    <!--                                    <textarea aria-required="true" rows="6" cols="45" name="message" id="message" class="form-control with-icon" required placeholder="Message"></textarea>-->
    <!--                                    <i class="rt-icon2-pen"></i>-->
    <!--                                </div>-->
    <!--                                <div class="footer-form-button">-->
    <!--                                    <button type="submit" id="" name="contact_submit" class="theme_button color1 bottommargin_0">Send</button>-->
    <!--                                    <button type="reset" id="contact_form_clear" name="contact_clear" class="theme_button inverse bottommargin_0">Clear</button>-->
    <!--                                </div>-->
    <!--                            </div>-->

    <!--                            </div>-->


    <!--                        </form>-->



    <!--                        </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
                        <div class="bottom-footer">
                            <p>This site is restricted to persons 18 years or over.</p>
                         <p>©<b>Copyright 2022 - 2023</b> Velvet Klub Pty Ltd <b>(Velvet Klub)</b></p>
                            <p> <span>
              <a href="{{ url('popular-locations') }}">Popular Locations for Escort</a>.
              <a href="{{ route('pages.about') }}">Documentation</a>.
            <a href="{{ url('blog') }}">Blog</a>.
            <a href="{{ url('contact') }}">Contact us</a>.
            <a href="{{ url('term-and-conditions') }}">Terms and Conditions</a>.
            <a href="{{ url('privacy-and-policy') }}">Privacy Policy</a>.
            <a href="{{ url('replacement') }}">Delivery/Refund Policy</a>.
            <a>Link</a>.
            <a href="{{ url('sitemap') }}">Sitemap</a>.
            <a href="{{ url('dmca') }}">DMCA Notice</a>
        </span></p>
                           <p>Design by <a href="http://www.code-stew.com">Code Stew</a> - Marketing By - <a href="http://www.thinkadigital.com">Think A Digital</a></p>
                          <ul>
                            {{-- <li class="first-child {{ Request::routeIs('pages.help') ? 'active' : '' }}">
                                    <a href="{{ route('pages.help') }}">Help & Supoort</a>
                            </li> --}}
                            <li class="first-child {{ Request::routeIs('pages.terms') ? 'active' : '' }}">
                                    <a href="{{ route('pages.terms') }}">Terms & Conditions</a>
                            </li>
                            <li class="{{ Request::routeIs('pages.privacy') ? 'active' : '' }}">
                            <a href="{{ route('pages.privacy') }}">Privacy & Policy</a>
                            </li>
                            </ul>
                       </div>
                    </div>

                </div>
           </footer>



        </div>
        <!-- eof #box_wrapper -->
    </div>
    <!-- eof #canvas -->

<!-- overlayScrollbars -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.4.0/jquery-migrate.min.js" integrity="sha512-QDsjSX1mStBIAnNXx31dyvw4wVdHjonOwrkaIhpiIlzqGUCdsI62MwQtHpJF+Npy2SmSlGSROoNWQCOFpqbsOg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script src="{{ asset('js/compressed.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src=" {{ asset('asset/js/custom.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
  @if(Session::has('message'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.warning("{{ session('warning') }}");
  @endif
</script>

<script>
      @if(count($errors) > 0)
          @foreach($errors->all() as $error)
              toastr.error("{{ $error }}");
          @endforeach
      @endif
</script>

<script>
jQuery(document).ready(function(){

    jQuery("#cussg").click(function(){
        jQuery(".customersign").css("display", "block");
    });
    });
    </script>


    <!--<script>-->
    <!--    $('.custom-slider .owl-carousel').owlCarousel({-->
    <!--        loop:true,-->
    <!--        margin:10,-->
    <!--        autoplay:false,-->
    <!--        autoplayTimeout:2000,-->
    <!--        nav:false,-->
    <!--        dots:true,-->
    <!--        responsive:{-->
    <!--            0:{-->
    <!--                items:1-->
    <!--            },-->
    <!--            600:{-->
    <!--                items:2-->
    <!--            },-->
    <!--            1000:{-->
    <!--                items:4-->
    <!--            }-->
    <!--        }-->
    <!--    })-->
    <!--</script>-->


    <script>
        $('.custom-owlcarousel .owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            autoplay:false,
            autoplayTimeout:2000,
            nav:false,
            animateOut: 'fadeOut',
            dots:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })
    </script>

    <script>
         $(".dropdown").click(function(){
             $(".dropdown-content").slideToggle();
         });

        //  $(".dropdown").onClick(function(){
        //       $(".dropdown-content").fadeOut();
        //   });
    </script>

<script>
  // JavaScript code to close the dropdown when the close button is clicked
  document.getElementById('closeButton').addEventListener('click', function() {
    document.querySelector('.dropdown-content').style.display = 'none';
  });
</script>

    <script type="text/javascript">
        $('.one-time').slick({
          dots: false,
          infinite: true,
          slidesToShow: 1,
          adaptiveHeight: true,
          autoplay: false,
          autoplaySpeed: 3000,

        });
  </script>
     @yield('custom_javascript')
</body>
 <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">
    <script>
	    var botmanWidget = {
	        aboutText: 'Botman',
	        introMessage: "Hello, Welcome to Velvet Klub are you customer or model? "
	    };
    </script>

    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
</html>
