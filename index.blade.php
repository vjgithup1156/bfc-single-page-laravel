<!DOCTYPE html>
<html dir="@if (session()->has('language_direction_from_dropdown')) @if(session()->get('language_direction_from_dropdown') == 1) {{ __('rtl') }} @else {{ __('ltr') }} @endif @else {{ __('ltr') }} @endif" lang="@if (session()->has('language_code_from_dropdown')){{ str_replace('_', '-', session()->get('language_code_from_dropdown')) }}@else{{ str_replace('_', '-',   $language->language_code) }}@endif">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="title" content="@if (isset($general_seo)){{ $general_seo->site_name }} @endif">
    <meta name="description" content="@if (isset($general_seo)){{ $general_seo->site_desc }} @endif">
    <meta name="keywords" content="@if (isset($general_seo)){{ $general_seo->site_keywords }} @endif">
    <meta name="author" content="elsecolor">
    <meta property="fb:app_id" content="@if (isset($general_seo)){{ $general_seo->fb_app_id }} @endif">
    <meta property="og:title" content="@if (isset($general_seo)){{ $general_seo->site_name }} @endif">
    <meta property="og:url" content="@if (isset($general_seo)){{ url()->current() }} @endif">
    <meta property="og:description" content="@if (isset($general_seo)){{ $general_seo->site_desc }} @endif">
    <meta property="og:image" content="@if (!empty($general_site_image->favicon_image)){{ asset('uploads/img/general/'.$general_site_image->favicon_image) }} @endif">
    <meta itemprop="image" content="@if (!empty($general_site_image->favicon_image)){{ asset('uploads/img/general/'.$general_site_image->favicon_image) }} @endif">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="@if (!empty($general_site_image->favicon_image)){{ asset('uploads/img/general/'.$general_site_image->favicon_image) }} @endif">
    <meta property="twitter:title" content="@if (isset($general_seo)){{ $general_seo->site_name }} @endif">
    <meta property="twitter:description" content="@if (isset($general_seo)){{ $general_seo->site_desc }} @endif">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>{{ __('frontend.home') }} @if (isset($general_seo)) - {{ $general_seo->site_name }} @endif</title>

@if (!empty($general_site_image->favicon_image))
    <!-- Favicon -->
        <link href="{{ asset('uplods/img/general/'.$general_site_image->favicon_image) }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
        <link href="{{ asset('uploads/img/general/'.$general_site_image->favicon_image) }}" sizes="128x128" rel="shortcut icon" />
@else
    <!-- Favicon -->
        <link href="{{ asset('uploads/img/dummy/favicon.png') }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
        <link href="{{ asset('uploads/img/dummy/favicon.png') }}" sizes="128x128" rel="shortcut icon" />
@endif

    <!--// Bootstrap //-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/css/bootstrap.min.css') }}">
    <!--// Magnific Popup //-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/css/magnific.popup.min.css') }}">
    <!--// Magnific Popup //-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/css/fancybox.min.css') }}">
    <!--// Animate Css //-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/css/animate.min.css') }}">
    <!--// Owl Carousel //-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/css/owl.carousel.min.css') }}">
    <!--// Owl Carousel Default //-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/css/owl.carousel.default.min.css') }}">
    <!--// Font Awesome //-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/fonts/font_awesome/css/all.css') }}">
    <!--// Theme Main Css //-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <!--// Color Option Css //-->
    @isset ($color_option)

        @if ($color_option->color_option == 1)
            <link rel="stylesheet" href="{{ asset('assets/frontend/css/color/blue-color.css') }}">
        @elseif ($color_option->color_option == 2)
            <link rel="stylesheet" href="{{ asset('assets/frontend/css/color/red-color.css') }}">
        @elseif ($color_option->color_option == 3)
            <link rel="stylesheet" href="{{ asset('assets/frontend/css/color/yellow-color.css') }}">
        @elseif ($color_option->color_option == 4)
            <link rel="stylesheet" href="{{ asset('assets/frontend/css/color/green-color.css') }}">
        @elseif ($color_option->color_option == 5)
            <link rel="stylesheet" href="{{ asset('assets/frontend/css/color/pink-color.css') }}">
        @elseif ($color_option->color_option == 6)
            <link rel="stylesheet" href="{{ asset('assets/frontend/css/color/turquose-color.css') }}">
        @elseif ($color_option->color_option == 7)
            <link rel="stylesheet" href="{{ asset('assets/frontend/css/color/purple-color.css') }}">
        @elseif ($color_option->color_option == 8)
            <link rel="stylesheet" href="{{ asset('assets/frontend/css/color/blue-color-2.css') }}">
        @elseif ($color_option->color_option == 9)
            <link rel="stylesheet" href="{{ asset('assets/frontend/css/color/orange-color.css') }}">
        @elseif ($color_option->color_option == 10)
            <link rel="stylesheet" href="{{ asset('assets/frontend/css/color/magenta-color.css') }}">
        @elseif ($color_option->color_option == 11)
            <link rel="stylesheet" href="{{ asset('assets/frontend/css/color/orange-color-2.css') }}">
        @endif

    @endisset

@if (isset($google_analytic))
    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ $google_analytic->google_analytic }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', '{{ $google_analytic->google_analytic }}');
        </script>
    @endif
     
    
    <!-- **CSS - stylesheets** --> 
    <link id="shortcodes-css" href="faq/shortcodes.css" rel="stylesheet" media="all" /> 
    
    <!-- **Modernizr** -->
	<script src="js/modernizr.custom.js"></script>
    <script type="text/javascript">
	var mytheme_urls = {
 		stickynav : 'disable'
	};
	</script>
<style>

.d_down_item{
    font-weight: 600;
    color: #212529;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
    width: 100%;
    padding: 0.25rem 1.5rem;
}
#service{
    position:relative;
}
#d_down{
    position:absolute;
    z-index:9;
}
@media screen  and (max-width:600px){
    #d_down{
    position:relative;
    right:8px;
    padding: 10px 0;
   /* width:40%; */
   /* margin:auto; */
}
#d_down a{
    color:black;
    font-weight:600;
    font-size:12px;


}
#d_down a:hover{
    /* color:white; */
    /* background:blue; */
}
#service{
    /* background:white; */
}

#service:hover{
    /* background:#2e86de; */

}

}

</style>
<script>
    $(document).ready(function(){
       
        $("#service").hover(function(){
            $("#d_down").toggle();
        })
    });
</script>
</head>
<body data-spy="scroll" data-target="#fixedNavbar" @if (session()->has('language_direction_from_dropdown')) @if(session()->get('language_direction_from_dropdown') == 1)  class="rtl-mode" @endif @elseif (isset($language)) @if ($language->direction == 1) class="rtl-mode" @endif  @endif >

<!--// Page Wrapper Start //-->
<div class="page-wrapper">
    <!--// Header Start //-->
    <header class="header default-header" id="header">
        <div id="nav-menu-wrap">
            <div class="container d-flex justify-content-center">
                <nav class="navbar navbar-expand-lg p-0" style='position:relative'>
                    @if (!empty($general_site_image->site_colored_logo_image))
                        <a class="navbar-brand p-0" title="Home" href="{{ url('/') }}">
                            <img src="{{ asset('uploads/img/general/'.$general_site_image->site_colored_logo_image) }}" alt="Logo White" class="img-fluid logo-transparent" style=" width: 152px; ">
                            <!--<img src="{{ asset('uploads/img/general/'.$general_site_image->admin_logo_image) }}" alt="Logo Black" class="img-fluid logo-normal" style=" width: 128px; "> -->
                        </a>
                    @else
                        <a class="navbar-brand" title="Home" href="#">
                            <img src="{{ asset('uploads/img/dummy/colored-logo.png') }}" alt="Logo White" class="img-fluid logo-transparent">
                            <img src="{{ asset('uploads/img/dummy/colored-logo.png') }}" alt="Logo Black" class="img-fluid logo-normal">
                        </a>
                    @endif
                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fixedNavbar" aria-controls="fixedNavbar" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="togler-icon-inner">
                                <span class="line-1"></span>
                                <span class="line-2"></span>
                                <span class="line-3"></span>
                            </span>
                    </button>
                    <div class="collapse navbar-collapse main-menu justify-content-end" id="fixedNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active menu-link" href="#">{{ __('frontend.home') }}</a>
                            </li>
                            <!-- @if ($section_arr['about_section'] == "show")
                                <li class="nav-item">
                                    <a class="nav-link menu-link" href="#" data-scroll-nav="2">{{ __('frontend.about') }}</a>
                                </li>
                                @endif -->
                            @if ($section_arr['service_section'] == "show")
                                <!-- <li class="nav-item">
                                    <a class="nav-link menu-link" href="#" data-scroll-nav="3">{{ __('frontend.services') }}</a>    
                                </li> -->
                                <!-- dropdown  dropdown-toggle   dropdown-menu dropdown-item data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"-->
                                <li class="nav-item" id="service">
                                    <a class="nav-link " href="#" id="" role="button">
                                    {{ __('frontend.services') }}
                                    </a>
                                    <div id="d_down" style='display:none;'>
                                        <a class="d_down_item" href="{{url('school')}}"target="_blank">School Program</a>
                                        <!-- <a class="dropdown-item" href="#">Corporate Events</a> -->
                                      
                             
                                    </div>
                                   
                                </li>
                           
                             
                            
                                <!-- <li class='nav-item lii'>
                                    <a href="#" class='nav-link'>TEST</a>
                                    <div id='testt'>
                                        School
                                    </div>
                                </li> -->
                                @endif
                        {{--  @if ($section_arr['portfolio_section'] == "show")
                                <li class="nav-item">
                                    <a class="nav-link menu-link" href="#" data-scroll-nav="4">{{ __('frontend.portfolio') }}</a>
                                </li>
                               @endif
                            @if ($section_arr['blog_section'] == "show")
                                <li class="nav-item">
                                    <a class="nav-link menu-link" href="#" data-scroll-nav="5">{{ __('frontend.blogs') }}</a>
                                </li>
                            @endif
                          @if ($section_arr['pages_page'] == "show")
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="blogDropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ __('frontend.pages') }}
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="blogDropdownMenu">
                                @foreach ($header_pages as $header_page)
                                        <a class="dropdown-item" href="{{ route('any-page.show', ['page_slug' => $header_page->page_slug]) }}">{{ $header_page->page_title }}</a>
                                @endforeach
                                    </div>
                                </li>
                              @endif
                        @if ($section_arr['contact_
                        '] == "show")
                                <li class="nav-item">
                                    <a class="nav-link menu-link" href="#" data-scroll-nav="6">{{ __('frontend.contact') }}</a>
                                </li>
                                @endif
                            @if (count($display_dropdowns) > 0)
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="langDropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        @if (session()->has('language_name_from_dropdown')) {{ session()->get('language_name_from_dropdown') }} @else {{ $language->language_name }} @endif
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="langDropdownMenu">
                                        @foreach ($display_dropdowns as $display_dropdown)
                                            <a class="dropdown-item" href="{{ url('language/set-locale/'.$display_dropdown->id) }}">{{ $display_dropdown->language_name }}</a>
                                        @endforeach
                                    </div>
                                </li>
                            @endif
                            @isset ($external_url)
                                @if ($external_url->status == "enable")
                                   @if ($external_url->button_type == "external_url")
                                        <li class="nav-item navbar-btn-resp d-flex align-items-center">
                                            <a href="{{ $external_url->btn_link }}" class="default-nav-btn"><span>{{ $external_url->btn_name }}</span></a>
                                        </li>
                                    @else
                                        <li class="nav-item navbar-btn-resp d-flex align-items-center">
                                            <a href="{{ route('get-offer-page.create') }}" class="default-nav-btn"><span>{{ $external_url->btn_name }}</span></a>
                                        </li>
                                    @endif
                                @endif
                            @endif
                        </ul>
                    </div> 
                </nav>
            </div>--}}
        </div>
    </header>
    <!--// Header End  //-->

    <!--// Main Area Start //-->
    <main class="main-area">
        <!--// Hero Section Start //--> 
            <section class="hero-banner" data-scroll-index="1">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-6 col-xl-6 col-md-10">
                            <div class="hero-inner"> 
                                <h1>Accelerate Your Health with BestFit Fitness Program</h1>
                                <p>
                                    Specialised fitness guarantee service provider.
                                </p>
                                <div class="hero-buttons">
                                    <a href="https://wa.me/+919566049834?text=I%20would%20like%20to%20know%20more%20your%20service" target="_blank" class="default-primary-btn">Talk to Us</a>
                                    <!--<a href="https://www.youtube.com/watch?v=YqQx75OPRa0" class="default-video-btn"><i class="fa fa-play"></i></a>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-xl-6 col-md-10  d-flex justify-content-center">
                            <div class="hero-image-inner">
                                <img src="{{ asset('uploads/img/banner.png') }}" alt="Hero image" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </section> 

        <!--// Hero Section End //-->

        <!--// About Me Start //-->
        @if ($section_arr['about_section'] == "show") 
                <section class="section" id="about" data-scroll-index="2">
                    <div class="container"> 
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-5 col-xl-6 d-none d-sm-block">
                                <div class="about-image-inner">
                                    <img src="{{ asset('uploads/img/500500.png') }}" alt="About image" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">  
                                <div class="about-details">
                                    <div class="row d-flex flex-column justify-content-center">
                                        <div class="accordion" id="accordion-1">
                                            <div class="resume-item">
                                                <div class="resume-header"> 
                                                    <div class="col-md-12"> 
                                                        <div class="text mb-3">
                                                            <h6>Optimal Quality of Life</h6>
                                                            <span class="text-center">Stay with high energy levels throughout the day</span>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion" id="accordion-1">
                                            <div class="resume-item">
                                                <div class="resume-header"> 
                                                <div class="col-md-12"> 
                                                    <div class="text mb-3">
                                                        <h6>Grow Healthier with Age</h6>
                                                        <span class="text-center">Age is no competitor to health as your always stay young and healthier</span>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion" id="accordion-1">
                                            <div class="resume-item"> .
                                                <div class="resume-header">
                                                <div class="col-md-12">
                                                    <div class="text">
                                                        <h6>Invest in Yourself</h6>
                                                        <span class="text-center">The healthier you are the wealthier you are</span>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        <section class="section d-xl-none  " id="banner" data-bg-image-path="{{ asset('uploads/img/energetic.png') }}">
                                            <div class="container">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-7">
                                                        <div class="banner-inner">
                                                            <h4>Small Step Towards A Healthier You</h4>
                                                            <p>Do you like to re-live your most energetic days? We will take you there with a way and simple fitness strategy . We will coach you to do what will give you a key to open best reserves within you.Try it by yourself to feel the difference.</p> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div> 
                            </div> 
                            
                            <section class="section d-none d-sm-block mb-5" id="banner" data-bg-image-path="{{ asset('uploads/img/energetic.png') }}">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-7">
                                            <div class="banner-inner">
                                                <h4>Small Step Towards A Healthier You</h4>
                                                <p>Do you like to re-live your most energetic days ? We will take you there with a way and simple fitness strategy . We will coach you to do what will give you a key to open best reserves within you.Try it by yourself to feel the difference.</p> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            
                            
                            <div class="row justify-content-center">
                            <div class="col-lg-6">
                                    <div class="section-heading">
                                        <h3>Have you thought seriously?</h3>
                                        <a href="https://wa.me/+919566049834?text=I%20would%20like%20to%20know%20more%20your%20service" target="_blank" class="default-primary-btn mb-4">Talk to Us</a>
                                        <div class="accordion" id="accordion-1">
                                            <div class="resume-item"> 
                                                <div id="resume-tab-1" class="collapse show" aria-labelledby="resumeTab1" data-parent="#accordion-1">
                                                    <div class="resume-item-body">
                                                        <h6>Is your health not the most valuable asset?</h6>
                                                        <h6>Is quality of life something ready to be compromised?</h6>
                                                        <h6>Is time not well spent when invested in your health?</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> 
            @endif
            
            
            <section class="section p-0" id="about" data-scroll-index="2">
                <div class="container"> 
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-5 col-xl-6 d-none d-sm-block">
                            <div class="about-image-inner">
                                <img src="{{ asset('uploads/img/why.png') }}" alt="About image" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">  
                            <div class="about-details">
                                <div class="row d-flex flex-column justify-content-center"> 
                                    <div class="accordion" id="accordion-1">
                                        <div class="resume-item"> .
                                            <div class="resume-header">
                                            <div class="col-md-12">
                                                <div class="text">
                                                    <h3>About Us</h3>
                                                    <span class="text-center">We design and deliver health and wellness program for corporate sector and individuals. Our aim is to inspire, encourage and enable continuous improvement experience to individuals across the world. Our programs derive its core strengths from ancient Indian practices of health and wellness. Our program designers, developers and coaches work closely together with you before a specific program is delivered to you. Our post program completion follow ups are aimed to deliver you sustained results. We compassionately understand your challenges in reaching your goals and help you by our education, training and support. We believe, your success is our growth, Healthy mind is a foundation for healthy body which will transport you seamlessly to reach your goal.</span>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div> 
                        </div>  
                    </div>
                </div>
            </section> 
            
        <!--// About Me End //-->  
          
                
                <!-- <section class="section" id="team">
                    <div class="container"> 
                        <div class="owl-carousel owl-theme" id="team-slider">
                            <div class="item d-flex justify-content-center">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img src="{{ asset('uploads/img/1.png') }}" alt="Clients Img" class="clients-img">
                                    </div> 
                                </div>
                            </div>
                            <div class="item d-flex justify-content-center">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img src="{{ asset('uploads/img/2.png') }}" alt="Clients Img" class="clients-img">
                                    </div> 
                                </div>
                            </div>
                            <div class="item d-flex justify-content-center">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img src="{{ asset('uploads/img/3.png') }}" alt="Clients Img" class="clients-img">
                                    </div> 
                                </div>
                            </div>
                            <div class="item d-flex justify-content-center">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img src="{{ asset('uploads/img/4.png') }}" alt="Clients Img" class="clients-img">
                                    </div> 
                                </div>
                            </div>
                            <div class="item d-flex justify-content-center">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img src="{{ asset('uploads/img/5.png') }}" alt="Clients Img" class="clients-img">
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </section> -->
                
                
                <section class="section" id="testimonial">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="section-heading">
                                    <h4>Testimonial</h4> 
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="owl-carousel owl-theme" id="clients-slider">
                                    <div class="item">
                                        <div class="clients-item"> 
                                            <div class="clients-text">
                                                <p>
                                                    This business provides great value along with great service, which is the most important aspect. I forgot to mention that the service person has good knowledge of his work.
                                                </p>
                                                <h5>Shraddha</h5> 
                                            </div>
                                            <div class="quote">
                                                <i class="fas fa-quote-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="clients-item"> 
                                            <div class="clients-text">
                                                <p>
                                                    Recommended for my brother and friend. Keep doing the same things in the upcoming years, and I thank you for your valuable service to our people. Bestfit Coach, keep rocking. Best wishes.
                                                </p>
                                                <h5>Gayathri</h5> 
                                            </div>
                                            <div class="quote">
                                                <i class="fas fa-quote-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="clients-item"> 
                                            <div class="clients-text">
                                                <p>
                                                    Bestfit Coach explained the packages very well. The package very affordable price in the market and delivered by them with care. A very good service. I wish this firm the very best on its future journey.
                                                </p>
                                                <h5>Sam</h5> 
                                            </div>
                                            <div class="quote">
                                                <i class="fas fa-quote-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="clients-item"> 
                                            <div class="clients-text">
                                                <p>
                                                    The packages are well-made. Also, the service is  good. Fast delivery and good service provider in the market. Attending and caring for customers is also important.
                                                </p>
                                                <h5>Radha</h5> 
                                            </div>
                                            <div class="quote">
                                                <i class="fas fa-quote-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                @if (isset($counter_section) || count($counters) > 0)
                <section class="section pb-minus-70" id="counter">
                    <div class="container">
                        <div class="row justify-content-center">
                            @foreach ($counters as $counter)
                                <div class="col-md-6 col-sm-6 col-lg-3">
                                    <div class="counter-item">
                                        @if ($counter->type == "icon")
                                            @if (!empty($counter->icon))
                                                <div class="icon">
                                                    <span class="{{ $counter->icon }}"></span>
                                                </div>
                                            @endif
                                        @else
                                            <div class="icon">
                                                <img src="{{ asset('uploads/img/counter/'.$counter->counter_image) }}" class="img-fluid">
                                            </div>
                                        @endif
                                        <div class="body">
                                            <h5>{{ $counter->title }}</h5>
                                            <span class="counter">{{ $counter->timer }}</span><span>+</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
                @endif 
                <a href="https://wa.me/+919566049834?text=I%20would%20like%20to%20know%20more%20your%20service" target="_blank" class="default-primary-btn mb-5 d-flex justify-content-center">Talk to Us</a>

        <!--// Counters Start //-->
        <div class="col-lg-5 col-xl-6 d-xl-none ">
            <div class="about-image-inner">
                <img src="{{ asset('uploads/img/500500.png') }}" alt="About image" class="img-fluid">
            </div>
        </div>
       @if ($section_arr['counter_section'] == "show") 
                <section class="section pb-minus-70" id="counter">
                    <div class="container">
                        <div class="row justify-content-center"> 
                            <div class="col-md-12 col-sm-6 col-lg-3">
                                <div class="section-heading">
                                    <h4>3 Simple Steps for a Healthier You</h4> 
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="counter-item">
                                    <div class="icon">
                                        <span class="fa fa-coffee"></span>
                                    </div>
                                    <div class="body">
                                        <h5>Schedule a Call</h5> 
                                        <p>Click the link and schedule a time for us to meet via zoom. We’ll talk about the goals you have for your business and what you need.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="counter-item">
                                    <div class="icon">
                                        <span class="fa fa-smile"></span>
                                    </div>
                                    <div class="body">
                                        <h5>Create a Plan</h5>
                                        <p>A personal and exclusive plan is created to implement the BESTFITCOACH program.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="counter-item">
                                    <div class="icon">
                                        <span class="fa fa-file-alt"></span>
                                    </div>
                                    <div class="body">
                                        <h5>Get Results</h5>
                                        <p>Your program  is now clear, and your health  are growing.</p>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </section> 
           @endif
        <!--// Counters End //--> 
   
        <!--// My Services Start //-->
           @if ($section_arr['service_section'] == "show") 
                    <section class="section" id="price" data-scroll-index="3">
                        <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-6">
                                            <div class="section-heading">
                                                <h4>Our Price</h4> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-link-wrap">
                                        <div class="row justify-content-center">
                                            <div class="col-md-6 col-sm-6 col-lg-4 tab-link-item">
                                                <div class="tab-link-inner"> 
                                                    <span class="fa fa-battery-half"></span>
                                                    <h5>Hi-c Foundation</h5> <br>
                                                    <div class="tab-content-inner">
                                                        
                                                        <p>The course helps identify our strengths and weakness in our kinetic chain, Food habits and sleep.</p> 
                                                        <!-- <form action="{{ route('enquiry.store') }}" method="POST">
                                                     @csrf
                                                    <input type="hidden" class="form-control" id="category_id" name="category_id" value="1"> -->
                                                    <a href="" data-toggle="modal" data-target="#vijay" class="default-primary-btn book_now_btn bg-secondary text-white my-2">Download Sample</a>
    			                                    <button class="default-primary-btn" onclick = "pay_modal(1)">Pay Now</button>  
                                                                                                     
                                                        <!-- <br><a href="#" class="default-primary-btn book_now_btn bg-secondary text-white my-2" data-id="3">Download Sample</a> -->
                                                        <!-- </form>   -->
                                                        
                                                    </div> 
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-lg-4 tab-link-item">
                                                <div class="tab-link-inner">
                                                    <span class="fa fa-battery-three-quarters"></span>
                                                    <h5>Hi-c Transformation</h5> <br>
                                                    <div class="tab-content-inner">   
                                                        
                                                        <p>This course helps prioritise our habits for the betterment of our health. It helps FOCOUS on what’s absolutely nesssary to improve our health from Zero to One.</p>
 
                                                        <!-- <form action="{{ route('enquiry.store') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" class="form-control" id="category_id" name="category_id" value="2"> -->
                                                        <a href="" data-toggle="modal" data-target="#second" class="default-primary-btn book_now_btn bg-secondary text-white my-2">Download Sample</a>
    			                                        <button class="default-primary-btn" onclick = "pay_modal(2)">Pay Now</button>

                                                        <!-- <br><a href="#" class="default-primary-btn book_now_btn bg-secondary text-white my-2" data-id="3">Download Sample</a>    -->                                                 </div>
                                                        <!-- </form>   -->

                                                        
                                                    </div>
                                            </div>

                                            <script>
                                                function pay_modal(id){
                                                    $('#category_id123').val(id);
                                                    $('#pay_form').modal('show');
                                                }
                                            </script>

                                            <div id="pay_form" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">	
			    <h5 class="modal-title" id="examp">Payment</h5>
			    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			    <form action="{{ route('enquiry.store') }}" method="POST">
                @csrf
    		<div class="modal-body pt-0 pb-0"> 
    			  <div class="form-group">
                        <label for="name" class="col-form-label">Name:</label>
                        <input type="text" class="form-control"  id="name12" name="name">
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-form-label">Phone:</label>
                        <input type="text" class="form-control"  id="phone12" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-form-label">Email:</label>
                        <input type="text" class="form-control"  id="email12" name="email">
                    </div> 
                    <input type="hidden" class="form-control" id="category_id123" name="category_id">
    			</div>
    			<div class="modal-footer justify-content-center">
    			    <button class="default-primary-btn">Pay Now</button>
                    <!-- <button id="dow_button1234" style="display: none;" class="default-primary-btn bg-secondary text-white mb-2">Download Sample</button> -->
                    <!-- <input type="hidden" value="/assets/frontend/Gym_fitness.pptx" name="url" name="url"> -->
                    <!-- <a href="/assets/frontend/Gym_fitness.pptx" id="dow_button1234" style="display: none;" target="_blank" class="default-primary-btn bg-secondary text-white mb-2">Download Sample</a> -->
    			</div>
    			</form>
		</div>
	</div>
</div>
                                            <div class="col-md-6 col-sm-6 col-lg-4 tab-link-item">
                                                <div class="tab-link-inner">
                                                    <span class="fa fa-battery-full"></span>
                                                    <h5>Hi-c Reversal</h5> <br>
                                                    <div class="tab-content-inner">
                                                        
                                                        <p>The course is designed to reverse preventive diseases such as Cardio vascular disease, Diabetes, Blood pressure, Hypertension, Obesity, And Back pain. The process is done through natural methods such as kinetic chain exercises, proper food habits and sleep.</p>
                                                        
                                                        <form action="{{ route('enquiry.store') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" class="form-control" id="category_id" name="category_id" value="3">
                                                        <a href="#contact" class="default-primary-btn bg-secondary text-white mb-2">Free Trial</a> 
    			                                        <button class="default-primary-btn" id="razorpay-btn">Pay Now</button>

                                                        </form>  
                                                        <!-- <a href="#" class="default-primary-btn book_now_btn" data-id="3">Book Now</a> -->
                                                    </div> 
                                                </div>
                                            </div> 
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </section> 
               @endif  
            <section class="section" id="faq" data-scroll-index="6"> 
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <h4 class="mb-4">Frequently Asked Questions</h4>
                            <div class="dt-sc-three-fourth column w-100">  
                                <div class="dt-sc-toggle-frame-set  justify-content-center">
                                    <h5 class="dt-sc-toggle-accordion active"><a href="#">Why this course?</a></h5>
                                    <div class="dt-sc-toggle-content">
                                        <div class="block">
                                            <p>It is very much important for us understand the concept of transformation for sustenance.</p>
                                        </div>
                                    </div>
                                    <h5 class="dt-sc-toggle-accordion "><a href="#">What will happen to me if I don't take up this course?</a></h5>
                                    <div class="dt-sc-toggle-content">
                                        <div class="block">
                                            <p>We will be mechanically repeating the same mistake over and over without relizing the damage it makes over time.</p>
                                        </div>
                                    </div>
                                    <h5 class="dt-sc-toggle-accordion "><a href="#">How wil this course help me?</a></h5>
                                    <div class="dt-sc-toggle-content">
                                        <div class="block">
                                            <p>Read the concepts and with variety of choicves, design your own programme. Take the tests to analyze how well you have understood the concepts and keep sharpening the axe till you get it.</p>
                                        </div>
                                    </div>
                                    <h5 class="dt-sc-toggle-accordion "><a href="#">How will this improve my health?</a></h5>
                                    <div class="dt-sc-toggle-content">
                                        <div class="block">
                                            <p>While knowing the right concepts it is one step away from action, implement the concepts and do it repeatedly and it becomes a habit, and a well practised habit with understanding helps you to see the transformation.</p>
                                        </div>
                                    </div>
                                    <h5 class="dt-sc-toggle-accordion "><a href="#">What if I have doubts?</a></h5>
                                    <div class="dt-sc-toggle-content">
                                        <div class="block">
                                            <p>We have teachers and coaches who will help you to practice in the most efficient way possible as per your comfortable timings.</p>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <img src="{{ asset('uploads/img/faq.png') }}" alt="About image" class="img-fluid">
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="section" id="banner" data-bg-image-path="{{ asset('uploads/img/energetic.png') }}">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="banner-inner">
                            <!-- <a href="" data-toggle="modal" data-target="#second" class="default-primary-btn book_now_btn bg-secondary text-white my-2">Download Sample</a> -->
                                
                                <form action="{{ route('enquiry.store') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" class="form-control" id="category_id" name="category_id" value="1">
                                                        <h4><a href="/assets/frontend/GymSportBusinessPlanbySlidesgo.pptx" data-toggle="modal" data-target="#third" class="default-primary-btn book_now_btn text-white">(Click here)</a> 10x improve your health with this one keystone exercise.</h4>

                                                     
                                                        </form> 
                            </div>
                        </div>
                    </div>
                </div>
                <!-- (Click here)
                <a class="text-white text-success" target="_blank" href="#"></a> -->
            </section>
                                        
                                        
        <!--// Contact Me Start //-->
       @if ($section_arr['contact_section'] == "show") 
                <section class="section" id="contact" data-scroll-index="6">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="section-heading">
                                    <h4>Contact Us</h4> 
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="contact-info">
                                    <div class="contact-info-box">
                                        <span class="fa fa-map"></span>
                                        <div class="text">
                                            <h5>Address :</h5>
                                            <p>Chromepet , Chennai - 600073</p> 
                                        </div>
                                    </div>
                                    <div class="contact-info-box">
                                        <span class="fa fa-envelope-open-text"></span>
                                        <div class="text">
                                            <h5>E-Mail:</h5>
                                            <p>
                                                hello@bestfitcoach.in
                                            </p>

                                        </div>
                                    </div>
                                    <!-- <div class="contact-info-box">
                                        <span class="fa fa-headphones"></span>
                                        <div class="text">
                                            <h5>Call Us:</h5>
                                            <p>
                                           
                                            </p>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="contact-form">
                                    <form id="contactForm" action="{{ route('message.store') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="custom-form-group">
                                                    <input type="text" class="custom-form-control" name="name" placeholder="{{ __('frontend.your_name') }}" required>
                                                    <span class="far fa-user"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="custom-form-group">
                                                    <input type="text" class="custom-form-control" name="email" placeholder="{{ __('frontend.your_email') }}" required>
                                                    <span class="far fa-envelope"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="custom-form-group">
                                                    <input type="text" class="custom-form-control" name="phone" placeholder="{{ __('frontend.your_phone') }}" required>
                                                    <span class="fa fa-phone"></span>
                                                </div>
                                            </div> 
                                            <!--<div class="col-md-12">-->
                                            <!--    <div class="custom-form-group">-->
                                            <!--        <input type="text" class="custom-form-control" name="contact_phone" placeholder="Your Subject *">-->
                                            <!--        <span class="far fa-bookmark"></span>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <div class="col-md-12">
                                                <div class="custom-form-group">
                                                    <textarea class="custom-form-control text-area" name="message" cols="30" rows="6" placeholder="Your Message *"></textarea>
                                                    <span class="far fa-envelope-open"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="default-primary-btn">Send Message</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> 
           @endif
        <!--// Contact Me End //-->

        <!--// Footer Start //-->
        @if ($section_arr['footer_section'] == "show")
            @if (isset($site_info) || count($socials) > 0 || count($footer_pages) > 0)
                <footer class="footer">
                    {{-- <div class="footer-top">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-lg-4 footer-widget-resp">
                                    <div class="footer-widget">
                                        <h5 class="footer-title">{{ __('frontend.about') }}</h5>
                                        @if (!empty($site_info->short_desc)) <p class="footer-desc">{{ $site_info->short_desc }}</p> @endif
                                        <div class="footer-social-links">
                                            @foreach ($socials as $social)
                                                <a href="@if (!empty($social->link)) {{ $social->link }} @else # @endif">
                                                    <i class="{{ $social->social_media }}"></i>
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                @if (count($footer_pages) > 0)
                                    <div class="col-md-6 col-lg-4 footer-widget-resp">
                                        <div class="footer-widget">
                                            <h5 class="footer-title">{{ __('frontend.helper_links') }}</h5>
                                            <ul class="footer-links">
                                                @foreach ($footer_pages as $footer_page)
                                                    <li>
                                                        <a href="{{ route('any-page.show', ['page_slug' => $footer_page->page_slug]) }}">{{ $footer_page->page_title }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                @endif
                                <div class="col-md-6 col-lg-4 footer-widget-resp">
                                    <div class="footer-widget">
                                        <h5 class="footer-title">{{ __('frontend.contact_info') }}</h5>
                                        <div class="footer-contact-info-wrap">
                                            <ul class="footer-contact-info-list">
                                                @if (!empty($site_info->address))
                                                    <li>
                                                        <i class="fa fa-map-marker"></i>
                                                        <span>{{ $site_info->address }} </span>
                                                        @if (!empty($site_info->address_map_link))
                                                            <a href="{{ $site_info->address_map_link }}"><i class="fas fa-link"></i></a>
                                                        @endif
                                                    </li>
                                                @endif
                                                @if (!empty($site_info->email))
                                                    <li>
                                                        <i class="fa fa-envelope"></i>
                                                        <div class="text">
                                                            <span>{{ $site_info->email }}</span>
                                                        </div>
                                                    </li>
                                                @endif
                                                @if (!empty($site_info->phone))
                                                    <li>
                                                        <i class="fa fa-phone"></i>
                                                        <div class="text">
                                                            <span>{{ $site_info->phone }}</span>
                                                        </div>
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    @if (!empty($site_info->copyright))
                        <div class="copyright">
                            <div class="container text-center">  
                                <p class="copyright-text mb-0 text-center">© @php echo date("Y"); @endphp - Powered By Best Fit Coach | <a href="https://www.cwd.co.in/" class="text-white" target="_blank">Sri Hema Infotech</a></p>
                                <p class="text-white mb-0 text-center" ><a class="text-white" href="/page/term-conditions">Terms and Conditions</a> | <a class="text-white" href="/page/privacy-policy">Privacy Policy</a> | <a class="text-white" href="/page/return-policy">Return Policy</a> | <a class="text-white" href="/page/shipment-policy">Shipment Policy</a></p> 
                            </div>
                        </div>
                    @endif
                </footer>
            @else
                <footer class="footer">
                    <div class="footer-top">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-lg-4 footer-widget-resp">
                                    <div class="footer-widget">
                                        <h5 class="footer-title">About Me</h5>
                                        <p class="footer-desc">
                                            It is a long established fact that a reader will be distracted by the readable....
                                        </p>
                                        <div class="footer-social-links">
                                            <a href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fab fa-dribbble"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4 footer-widget-resp">
                                    <div class="footer-widget">
                                        <h5 class="footer-title">Helper Links</h5>
                                        <ul class="footer-links">
                                            <li>
                                                <a href="#">Help Center</a>
                                            </li>
                                            <li>
                                                <a href="#">Privacy Policy</a>
                                            </li>
                                            <li>
                                                <a href="#">Terms & Condition</a>
                                            </li>
                                            <li>
                                                <a href="#">Support Policy</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 footer-widget-resp">
                                    <div class="footer-widget">
                                        <h5 class="footer-title">Contact Info</h5>
                                        <div class="footer-contact-info-wrap">
                                            <ul class="footer-contact-info-list">
                                                <li>
                                                    <i class="fa fa-map-marker"></i>
                                                    <span>8595 Marconi Rd. Phillipsburg, NJ 08865</span>
                                                </li>
                                                <li>
                                                    <i class="fa fa-envelope"></i>
                                                    <div class="text">
                                                        <span>tempo@hotmail.com</span>
                                                        <span>tempo@gmail.com</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="copyright">
                        <div class="container">
                            <p class="copyright-text">© Copyright @php echo date("Y"); @endphp. Powered By ElseColor</p>
                        </div>
                    </div>
                </footer>
            @endif
            @endif
        <!--// Footer End //-->

    </main>
    <!--// Main Area End //-->

    <a href="#" data-scroll-goto="1" class="scroll-top-btn d-none">
        <i class="fa fa-arrow-up"></i>
    </a>
    <!--// .scroll-top-btn // -->

   @if ($section_arr['preloader'] == "show")
        <div id="preloader-wrap">
            <div class="preloader-inner">
                <div class="sk-chase">
                    <div class="sk-chase-dot"></div>
                    <div class="sk-chase-dot"></div>
                    <div class="sk-chase-dot"></div>
                    <div class="sk-chase-dot"></div>
                    <div class="sk-chase-dot"></div>
                    <div class="sk-chase-dot"></div>
                </div>
            </div>
        </div>
        <!--// Preloader // -->
    @endif

</div>
<!--// Page Wrapper End //-->

<!-- Modal HTML -->
<div id="PaymentModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="material-icons">&#xE876;</i>
				</div>				
				<h4 class="modal-title w-100">Payment Successful!</h4>	
			</div>
			<div class="modal-body">
				<p class="text-center">Our team will contact you shortly.</p>
			</div>
			<div class="modal-footer justify-content-center">
			    <button class="btn btn-success" data-dismiss="modal">Ok</button>
			</div>
		</div>
	</div>
</div> 
<!-- Modal HTML -->
<div id="vijay" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">	
			    <h5 class="modal-title" id="exampleModalLabel">Payment123</h5>
			    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			    <form action="{{ route('sendmail.mail') }}" method="POST">
                @csrf
    		<div class="modal-body pt-0 pb-0"> 
    			  <div class="form-group">
                        <label for="name" class="col-form-label">Name:</label>
                        <input type="text" class="form-control" onkeyup = "check()" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-form-label">Phone:</label>
                        <input type="text" class="form-control" onkeyup = "check()" id="phone" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-form-label">Email:</label>
                        <input type="text" class="form-control" onkeyup = "check()" id="email" name="email">
                    </div> 
                    <input type="hidden" class="form-control" id="category_id" name="category_id">
    			</div>
    			<div class="modal-footer justify-content-center">
    			    <button id="dow_button" style="display: none;" class="default-primary-btn bg-secondary text-white mb-2">Download Sample</button>
                    <input type="hidden" value="/assets/frontend/Mr.Kishore_Gubburi_Kinetic_Chain_Test.pdf" name="url" name="url">
                    <!-- <a href="/assets/frontend/Mr.Kishore_Gubburi_Kinetic_Chain_Test.pdf" id="dow_button" style="display: none;" target="_blank" class="default-primary-btn bg-secondary text-white mb-2">Download Sample</a> -->
    			</div>
    			</form>
		</div>
	</div>
</div>

<!-- === -->

<div id="second" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">	
			    <h5 class="modal-title" id="example">Payment1</h5>
			    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			    <form action="{{ route('sendmail.mail') }}" method="POST">
                @csrf
    		<div class="modal-body pt-0 pb-0"> 
    			  <div class="form-group">
                        <label for="name" class="col-form-label">Name:</label>
                        <input type="text" class="form-control" onkeyup = "check1()" id="name1" name="name">
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-form-label">Phone:</label>
                        <input type="text" class="form-control" onkeyup = "check1()" id="phone1" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-form-label">Email:</label>
                        <input type="text" class="form-control" onkeyup = "check1()" id="email1" name="email">
                    </div> 
                    <input type="hidden" class="form-control" id="category_id" name="category_id">
    			</div>
    			<div class="modal-footer justify-content-center">
    			    <!-- <button class="default-primary-btn" id="razorpay-btn">Pay Now</button> -->
                    <button id="dow_button123" style="display: none;" class="default-primary-btn bg-secondary text-white mb-2">Download Sample</button>
                    <input type="hidden" value="/assets/frontend/Gym_fitness.pptx" name="url" name="url">
                    <!-- <a href="/assets/frontend/Gym_fitness.pptx" id="dow_button123" style="display: none;" target="_blank" class="default-primary-btn bg-secondary text-white mb-2">Download Sample</a> -->
    			</div>
    			</form>
		</div>
	</div>
</div>

<div id="third" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">	
			    <h5 class="modal-title" id="examp">Payment</h5>
			    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			    <form action="{{ route('sendmail.mail') }}" method="POST">
                @csrf
    		<div class="modal-body pt-0 pb-0"> 
    			  <div class="form-group">
                        <label for="name" class="col-form-label">Name:</label>
                        <input type="text" class="form-control" onkeyup = "check12()" id="name12" name="name">
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-form-label">Phone:</label>
                        <input type="text" class="form-control" onkeyup = "check12()" id="phone12" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-form-label">Email:</label>
                        <input type="text" class="form-control" onkeyup = "check12()" id="email12" name="email">
                    </div> 
                    <input type="hidden" class="form-control" id="category_id" name="category_id">
    			</div>
    			<div class="modal-footer justify-content-center">
    			    <!-- <button class="default-primary-btn" id="razorpay-btn">Pay Now</button> -->
                    <!-- <button id="dow_button1234" style="display: none;" class="default-primary-btn bg-secondary text-white mb-2">Download Sample</button> -->
                    <!-- <input type="hidden" value="/assets/frontend/Gym_fitness.pptx" name="url" name="url"> -->
                    <a href="/assets/frontend/Gym_fitness.pptx" id="dow_button1234" style="display: none;" target="_blank" class="default-primary-btn bg-secondary text-white mb-2">Download Sample</a>
    			</div>
    			</form>
		</div>
	</div>
</div>




<script>
function check(){
    var name = $('#name').val();
    var phone = $('#phone').val();
    var email = $('#email').val();

    if(name!='' && phone!='' && email!=''){
        $('#dow_button').css('display','block');
    } 
}
function check1(){
    var name = $('#name1').val();
    var phone = $('#phone1').val();
    var email = $('#email1').val();

    if(name!='' && phone!='' && email!=''){
        $('#dow_button123').css('display','block');
    } 
}
function check12(){
    var name = $('#name12').val();
    var phone = $('#phone12').val();
    var email = $('#email12').val();

    if(name!='' && phone!='' && email!=''){
        $('#dow_button1234').css('display','block');
    } 
}
</script>


<form action="{{ route('razorpay.payment.store') }}" method="POST" id="razor_pay_form" style="display: none;">
                @csrf
                    <input type="hidden" name="phone" value="{{ Session::get('phone') }}">
                    <input type="hidden" id="name_pay" name="name" value="{{ Session::get('name') }}">
                    <input type="hidden" id="email_pay" name="email" value="{{ Session::get('email') }}">
                    <input type="hidden" name="enquiry_id" value="{{ Session::get('enquiry_id') }}">
                    <input type="hidden" name="price" value="{{ Session::get('price') }}">
                    <script src="https://checkout.razorpay.com/v1/checkout.js"
                            data-key="{{ env('RAZORPAY_KEY') }}"
                            data-account_id ="{{ env('RAZORPAY_ACCOUNT_ID') }}"
                            data-amount="{{ Session::get('price') * 100 }}"
                            data-buttontext=""
                            data-name="{{ env('APP_NAME') }}"
                            data-description="Rozerpay"
                            data-image="{{ asset('uploads/img/general/'.$general_site_image->site_colored_logo_image) }}"
                            data-prefill.name="{{ Session::get('name') }}"
                            data-prefill.contact="{{ Session::get('phone') }}"
                            data-prefill.email="{{ Session::get('email') }}"
                            data-theme.color="#6F1E51"
                            id="script_tag">
                    </script>
                </form>
@if($message = Session::get('success'))
<script>
$(function() {
    $("#razor_pay_form").submit();
});
</script>
@endif

@if($message = Session::get('payment_success'))
<script>
$(function() {
    window.location.href="{{ route('pay_mail')}}";
    $('#PaymentModal').modal('show');
});
</script>
@endif
<!--// JQuery //-->
<script src="{{ asset('assets/frontend/vendor/js/jquery.min.js') }}"></script>
<!--// Images Loaded //-->
<script src="{{ asset('assets/frontend/vendor/js/images.loaded.min.js') }}"></script>
<!--// Magnific Popup //-->
<script src="{{ asset('assets/frontend/vendor/js/magnific.popup.min.js') }}"></script>
<!--// Popper Popup //-->
<script src="{{ asset('assets/frontend/vendor/js/popper.min.js') }}"></script>
<!--// Bootstrap //-->
<script src="{{ asset('assets/frontend/vendor/js/bootstrap.min.js') }}"></script>
<!--// Wow Js //-->
<script src="{{ asset('assets/frontend/vendor/js/wow.min.js') }}"></script>
<!--// Waypoint Js //-->
<script src="{{ asset('assets/frontend/vendor/js/waypoint.min.js') }}"></script>
<!--// Counter Up Js //-->
<script src="{{ asset('assets/frontend/vendor/js/counter.up.min.js') }}"></script>
<!--// JQuery Easing Functions //-->
<script src="{{ asset('assets/frontend/vendor/js/jquery.easing.min.js') }}"></script>
<!--// ScrollIt //-->
<script src="{{ asset('assets/frontend/vendor/js/scrollit.min.js') }}"></script>
<!--// Owl Carousel //-->
<script src="{{ asset('assets/frontend/vendor/js/owl.carousel.min.js') }}"></script>
<!--// Isotope Gallery //-->
<script src="{{ asset('assets/frontend/vendor/js/isotope.min.js') }}"></script>
<!--// Isotope Gallery //-->
<script src="{{ asset('assets/frontend/vendor/js/fancybox.min.js') }}"></script>
<!--// Form Validate //-->
<script src="{{ asset('assets/frontend/vendor/js/jquery.form.validate.js') }}"></script>
<!--// Main Js //-->
<script src="{{ asset('assets/frontend/js/main.js') }}"></script>


<script src="{{ asset('faq/js/jquery.js') }}"></script>
<script src="{{ asset('faq/js/jquery.nicescroll.min.js') }}"></script>

<script src="{{ asset('faq/js/pace.min.js') }}"></script>

<script src="{{ asset('faq/js/jquery.ui.totop.min.js') }}"></script> 
 
<script src="{{ asset('faq/js/custom.js') }}"></script>

<script  type="text/javascript">  var config = {    phone :"+919566049834",    call :"Talk To Us",    position :"ww-right",    size : "ww-normal",    text : "Hi, I would like to know more your service. ",    type: "ww-standard",    brand: "",    subtitle: "",    welcome: ""  };  var proto = document.location.protocol, host = "cloudfront.net", url = proto + "//d3kzab8jj16n2f." + host;    var s = document.createElement("script"); s.type = "text/javascript"; s.async = true; s.src = url + "/v2/main.js";    s.onload = function () { tmWidgetInit(config) };    var x = document.getElementsByTagName("script")[0]; x.parentNode.insertBefore(s, x);</script>


@isset ($tawk_to)
    <script>
        @php echo html_entity_decode($tawk_to->tawk_to); @endphp
    </script>
@endisset

</body>
</html>

