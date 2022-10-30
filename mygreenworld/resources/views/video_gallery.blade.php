@extends('layout.app')
@section('content')

    @if(app()->getLocale() == 'ka')
    <header id="page-top" class="blog-banner">
        <!-- Start: Header Content -->
        <div class="container" id="blog">
            <div class="row blog-header text-center wow fadeInUp" data-wow-delay="0.5s">
                <div class="col-sm-12">
                    <!-- Headline Goes Here -->
                    <h3>ვიდეო გალერეა</h3>

                    <h4><a href="{{ route('index') }}"> მთავარი </a> > ვიდეო გალერეა </h4>
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
                    <h3>Video Gallery</h3>

                    <h4><a href="{{ route('index') }}"> Home </a> > Video Gallery </h4>
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
                    <h3>Видео галерея</h3>

                    <h4><a href="index.html"> Home </a> > Видео галерея </h4>
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
                    <h3> გალერეაში ვიდეოები ვერ მოიძებნა </h3>
                    @else
                    <h3> ჩვენი გალერეა </h3>
                    @endif
                @endif
                @if(app()->getLocale() == 'en')
                    @if($gallery->count() == 0)
                    <h3> Gallery Videos Not Found </h3>
                    @else
                    <h3> Our Gallery </h3>
                    @endif
                @endif
                @if(app()->getLocale() == 'ru')
                    @if($gallery->count() == 0)
                    <h3> Видео не найдено в галерее </h3>
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
                        <iframe width="370" height="260" src="https://www.youtube.com/embed/{{ $item->video_gallery_url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
