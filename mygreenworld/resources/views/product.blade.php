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
                <h3>პროდუქტი</h3>

                <h4><a href="{{ route('index') }}"> მთავარი </a> > პროდუქტი </h4>
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
                <h3>Product</h3>

                <h4><a href="{{ route('index') }}"> Home </a> > Product </h4>
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
                <h3>блог</h3>

                <h4><a href="index.html"> Home </a> > Продукты </h4>
            </div>
        </div>
        <!-- End: .row -->
    </div>
    <!-- End: Header Content -->
</header>
@endif


<section class="blog-section blog_pg_one">
    <div class="container">
        @if(app()->getLocale() == 'ka')
        <div class="base-header">
            <h3>პროდუქტი</h3>
        </div>
        @endif
        @if(app()->getLocale() == 'en')
        <div class="base-header">
            <h3>Product</h3>
        </div>
        @endif
        @if(app()->getLocale() == 'ru')
        <div class="base-header">
            <h3>Продукты</h3>
        </div>
        @endif
        <!-- End: Heading -->
        <div class="row">
            @foreach ($product as $item)
            <div class="col-md-4 col-sm-12">
                <div class="blog_wrp">
                    <a class="blog_img" href="{{ route('product_detail', $item->products_id ) }}">
                        <img class="img-responsive" src="{{ asset('mygreenworld/storage/app/public/'. $item->image) }}" style="width: 350px; height: 280px" alt="">
                    </a>
                    <div class="blog_info">

                        @if(app()->getLocale() == 'ka')
                        <a href="{{ route('product_detail', $item->products_id ) }}">
                            <h5>{!! Str::words($item->products_title_geo, 3, "...") !!}</h5>
                        </a>
                        @endif
                        @if(app()->getLocale() == 'en')
                        <a href="{{ route('product_detail', $item->products_id ) }}">
                            <h5>{!! Str::words($item->products_title_eng, 3, "...") !!}</h5>
                        </a>
                        @endif
                        @if(app()->getLocale() == 'ru')
                        <a href="{{ route('product_detail', $item->products_id ) }}">
                            <h5>{!! Str::words($item->products_title_rus, 3, "...") !!}</h5>
                        </a>
                        @endif


                        @if(app()->getLocale() == 'ka')
                        <div class="blog_date">
                            <span><i class="icon-right-open"> <a href="{{ route('product_detail', $item->products_id ) }}">სრულად ნახვა</a> </i></span>
                        </div>
                        @endif
                        @if(app()->getLocale() == 'en')
                        <div class="blog_date">
                            <span><i class="icon-right-open"> <a href="{{ route('product_detail', $item->products_id ) }}">Read More</a> </i></span>
                        </div>
                        @endif
                        @if(app()->getLocale() == 'ru')
                        <div class="blog_date">
                            <span><i class="icon-right-open"> <a href="{{ route('product_detail', $item->products_id ) }}">Подробнее</a> </i></span>
                        </div>
                        @endif


                    </div>
                </div>
            </div>
            @endforeach
            <div class="prodt_pagination">
                <ul>
                    <li class="page_number current page_number">{{ $product->links() }}</li>
                </ul>
            </div>
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
