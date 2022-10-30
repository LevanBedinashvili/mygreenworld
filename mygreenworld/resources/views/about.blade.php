@extends('layout.app')
@section('content')



    <!-- End:  Slider Section
==================================================-->

@if(app()->getLocale() == 'ka')
<header id="page-top" class="blog-banner">
    <!-- Start: Header Content -->
    <div class="container" id="blog">
        <div class="row blog-header text-center wow fadeInUp" data-wow-delay="0.5s">
            <div class="col-sm-12">
                <!-- Headline Goes Here -->
                <h3>ჩვენს შესახებ</h3>

                <h4><a href="{{ route('index') }}"> მთავარი </a> > ჩვენს შესახებ </h4>
            </div>
        </div>
        <!-- End: .row -->
    </div>
    <!-- End: Header Content -->
</header>
@endif

@if(app()->getLocale() == 'en')
<header id="page-top" class="blog-banner">
    <!-- Start: Header Content -->
    <div class="container" id="blog">
        <div class="row blog-header text-center wow fadeInUp" data-wow-delay="0.5s">
            <div class="col-sm-12">
                <!-- Headline Goes Here -->
                <h3>About Us</h3>

                <h4><a href="{{ route('index') }}"> Home </a> > About Us </h4>
            </div>
        </div>
        <!-- End: .row -->
    </div>
    <!-- End: Header Content -->
</header>
@endif

@if(app()->getLocale() == 'ru')
<header id="page-top" class="blog-banner">
    <!-- Start: Header Content -->
    <div class="container" id="blog">
        <div class="row blog-header text-center wow fadeInUp" data-wow-delay="0.5s">
            <div class="col-sm-12">
                <!-- Headline Goes Here -->
                <h3>о нас</h3>

                <h4><a href="index.html"> Home </a> > о нас </h4>
            </div>
        </div>
        <!-- End: .row -->
    </div>
    <!-- End: Header Content -->
</header>
@endif


    <!-- Start: About Us Section
==================================================-->
    <section class="about-section">
        <div class="container">
            @if(app()->getLocale() == 'ka')
            <div class="base-header">
                <h3 style="color: #9dca00;">ჩვენს შესახებ</h3>
             </div>
            @endif
            @if(app()->getLocale() == 'en')
            <div class="base-header">
                <h3 style="color: #9dca00;">About Us</h3>
             </div>
            @endif
            @if(app()->getLocale() == 'ru')
            <div class="base-header">
                <h3 style="color: #9dca00;">о нас</h3>
             </div>
            @endif
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="about_img">
                        <img src="{{ asset('mygreenworld/storage/app/public/'. $AboutUs->image) }}" style="width: 540px; height: 500px;"alt="image">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="about_item_tb">
                        <div class="about_item_tbcell">
                            <div class="about_item">
                                @if(app()->getLocale() == 'ka')
                                <p>{!! $AboutUs->about_text_geo !!}</p>
                                @endif
                                @if(app()->getLocale() == 'en')
                                <p>{!! $AboutUs->about_text_eng !!}</p>
                                @endif
                                @if(app()->getLocale() == 'ru')
                                <p>{!! $AboutUs->about_text_rus !!}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.about_wrp-->
            </div>
            <!-- /. row -->
        </div>
        <!-- /. container -->
    </section>


    <section class="contact-section" style="margin-top: 200px;">
        <div class="container">

        </div>
    </section>

@endsection
