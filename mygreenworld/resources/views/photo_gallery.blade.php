@extends('layout.app')
@section('content')

    @if(app()->getLocale() == 'ka')
    <header id="page-top" class="blog-banner">
        <!-- Start: Header Content -->
        <div class="container" id="blog">
            <div class="row blog-header text-center wow fadeInUp" data-wow-delay="0.5s">
                <div class="col-sm-12">
                    <!-- Headline Goes Here -->
                    <h3>ფოტო გალერეა</h3>

                    <h4><a href="{{ route('index') }}"> მთავარი </a> > ფოტო გალერეა </h4>
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
                    <h3>Photo Gallery</h3>

                    <h4><a href="{{ route('index') }}"> Home </a> > Photo Gallery </h4>
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
                    <h3>Фотогалерея</h3>

                    <h4><a href="index.html"> Home </a> > Фотогалерея </h4>
                </div>
            </div>
            <!-- End: .row -->
        </div>
        <!-- End: Header Content -->
    </header>
    @endif

    <section class="work-section">
        <div class="container">
            <div class="base-header">
                @if(app()->getLocale() == 'ka')
                    @if($gallery->count() == 0)
                    <h3> გალერეაში ფოტოები ვერ მოიძებნა </h3>
                    @else
                    <h3> ჩვენი გალერეა </h3>
                    @endif
                @endif
                @if(app()->getLocale() == 'en')
                    @if($gallery->count() == 0)
                    <h3> Gallery Photos Not Found </h3>
                    @else
                    <h3> Our Gallery </h3>
                    @endif
                @endif
                @if(app()->getLocale() == 'ru')
                    @if($gallery->count() == 0)
                    <h3> Фотографии не найдены </h3>
                    @else
                    <h3> Наша галерея </h3>
                    @endif
                @endif
            </div>
            <!-- Start: Work filter -->

            <!-- End: Work filter -->
            <div class="row projects-list">
                @forelse ($gallery as $item)

                <div class="col-md-4 col-sm-12 web graphics">

                    <div class="single-project-item">
                        <a class="project-link" href="{{ asset('mygreenworld/storage/app/'. $item->image) }}">
                            <img class="myclass" src="{{ asset('mygreenworld/storage/app/'. $item->image)}}">
                        </a>

                    </div>

                </div>
                @empty
                @endforelse


                <!-- End: Work Item 6 -->
            </div>
            <!--/.row -->
        </div>
        <!--/.container -->
    </section>
    <!-- End: Work Section
==================================================-->


    <section class="contact-section" style="margin-top: 100px;">
        <div class="container">

        </div>
    </section>

@endsection
