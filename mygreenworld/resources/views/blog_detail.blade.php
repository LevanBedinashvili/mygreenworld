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
                <h3>ბლოგი</h3>

                <h4><a href="{{ route('index') }}"> მთავარი </a> > ბლოგი </h4>
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

<div class="blog_container no-padding single_blog_container">
    <div class="container">
        <div class="row">
            <!-- Blog Area -->
            <div class="col-lg-9 col-xs-12 blog-area">
                <div class="blog-post-list wow fadeInLeft" data-wow-delay="0.3s">

                    <div class="blog_wrp">
                        <a class="blog_img" href="javascript:void(0)">
                            <img class="img-responsive" src="{{ asset('mygreenworld/storage/app/public/'. $mainnews->image) }}" alt="">
                        </a>
                        <div class="blog_info">
                            @if(app()->getLocale() == 'ka')
                            <a href="javascript:void(0)">
                                <h4>{{ $mainnews->news_title_geo }}</h4>
                            </a>
                            @endif
                            @if(app()->getLocale() == 'en')
                            <a href="javascript:void(0)">
                                <h4>{{ $mainnews->news_title_eng }}</h4>
                            </a>
                            @endif
                            @if(app()->getLocale() == 'ru')
                            <a href="javascript:void(0)">
                                <h4>{{ $mainnews->news_title_rus }}</h4>
                            </a>
                            @endif

                            @if(app()->getLocale() == 'ka')
                            <a href="javascript:void(0)">
                                <p>{!! $mainnews->news_text_geo !!}</p>
                            </a>
                            @endif
                            @if(app()->getLocale() == 'en')
                            <a href="javascript:void(0)">
                                <p>{!! $mainnews->news_text_eng !!}</p>
                            </a>
                            @endif
                            @if(app()->getLocale() == 'ru')
                            <a href="javascript:void(0)">
                                <p>{!! $mainnews->news_text_rus !!}</p>
                            </a>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
            <!--/ Blog Area -->

            <!-- Widget Area -->
            <div class="col-md-3 col-sm-12 widget-area">

                @if(app()->getLocale() == 'ka')
                <aside class="widget widget-post-categories">
                    <h3 class="widget-title">სწრაფი ლინკები</h3>
                    <ul class="categories-type">
                        <li>
                            <a href="{{ route('index') }}" title="Statistics">მთავარი</a>
                        </li>
                        <li>
                            <a href="{{ route('photo_gallery') }}" title="Business">ფოტო გალერეა</a>
                        </li>
                        <li>
                            <a href="{{ route('video_gallery') }}" title="Wordpress">ვიდეო გალერეა</a>
                        </li>
                        <li>
                            <a href="{{ route('blog') }}" title="Desktop">სიახლეები</a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}" title="Desktop">ჩვენს შესახებ</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}" title="Desktop">კონტაქტი</a>
                        </li>
                    </ul>
                </aside>
                @endif
                @if(app()->getLocale() == 'en')
                <aside class="widget widget-post-categories">
                    <h3 class="widget-title">Quick Links</h3>
                    <ul class="categories-type">
                        <li>
                            <a href="{{ route('index') }}" title="Statistics">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('photo_gallery') }}" title="Business">Photo Gallery</a>
                        </li>
                        <li>
                            <a href="{{ route('video_gallery') }}" title="Wordpress">Video Gallery</a>
                        </li>
                        <li>
                            <a href="{{ route('blog') }}" title="Desktop">Blog</a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}" title="Desktop">About Us</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}" title="Desktop">Contact</a>
                        </li>
                    </ul>
                </aside>
                @endif
                @if(app()->getLocale() == 'ru')
                <aside class="widget widget-post-categories">
                    <h3 class="widget-title">Быстрые ссылки</h3>
                    <ul class="categories-type">
                        <li>
                            <a href="{{ route('index') }}" title="Statistics">Главная</a>
                        </li>
                        <li>
                            <a href="{{ route('photo_gallery') }}" title="Business">Фотогалерея</a>
                        </li>
                        <li>
                            <a href="{{ route('video_gallery') }}" title="Wordpress">Видеогалерея</a>
                        </li>
                        <li>
                            <a href="{{ route('blog') }}" title="Desktop">Новости</a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}" title="Desktop">О Нас</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}" title="Desktop">Контакты</a>
                        </li>
                    </ul>
                </aside>
                @endif
                <!-- Post Categories /- -->
            </div>
            <!-- Widget Area /- -->
        </div>
    </div>
    <!-- Container /- -->
</div>

    <section class="contact-section" style="margin-top: 200px;">
        <div class="container">

        </div>
    </section>

@endsection
