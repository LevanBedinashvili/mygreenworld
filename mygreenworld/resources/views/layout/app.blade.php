<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js" lang="zxx">
<head>
    <title>GREEN WORLD - ნერგები</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Fuodborne - Organic Food HTML Template" />
    <meta name="keywords" content="Fuodborne, Food, Organic, one page, multipage, responsive, landing, html template" />
    <meta name="author" content="Fuodborne">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="//cdn.web-fonts.ge/fonts/bpg-banner-caps/css/bpg-banner-caps.min.css">
    <link rel="icon" type="image/png" href="{{ asset('assets/guest/images/favicon.png') }}">
    <link href="{{ asset('assets/guest/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/guest/css/hover.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/guest/css/magnific-popup.css') }}">
    <link href="{{ asset('assets/guest/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/guest/css/owl.transitions.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/guest/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/guest/css/slick-theme.css') }}">
    <link href="{{ asset('assets/guest/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/guest/css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/guest/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/guest/css/responsive.css') }}" rel="stylesheet">

</head>
<style>
table, td, th {
  border: 1px solid black;
  padding-left: 5px;
}

</style>
<body>

    <div class="header_topbar">
        <!-- Logo -->
        <div class="container">
            <div class="row">
                <div class="header_top_right list-unstyled">
                    <ul>
                        <li><i class="fa fa-phone"></i>{{ $providerContactInfo->contact_phone_one }}</li>
                        @if(app()->getLocale() == "ka")
                        <li><i class="fa fa-globe"></i>{{ $providerContactInfo->contact_address_geo }}</li>
                        @endif
                        @if(app()->getLocale() == "en")
                        <li><i class="fa fa-globe"></i>{{ $providerContactInfo->contact_address_eng }}</li>
                        @endif
                        @if(app()->getLocale() == "ru")
                        <li><i class="fa fa-globe"></i>{{ $providerContactInfo->contact_address_rus }}</li>
                        @endif
                    </ul>
                </div>
                <div class="header_top_left">
                    <ul class="header_socil list-inline pull-left">
                        <li><i class="fa fa-envelope"></i>{{ $providerContactInfo->contact_email_one }}</li>
                        <li>
                            <a href="{{ $providerContactInfo->contact_facebook }}" target="_blank" class="fa fa-facebook"></a>
                        </li>
                        <li>
                            <a href="{{ $providerContactInfo->contact_instagram }}" target="_blank" class="fa fa-instagram"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End: Header Info -->

    <!-- Start: header navigation -->
    <div class="navigation">
        <div class="container">
            <div class="row">
                <div class="logo col-md-2 col-sm-12">
                    <a href="{{ route('index') }}"><img class="img-responsive" src="{{ asset('assets/guest/images/logo.png') }}" alt="">
                    </a>
                </div>
                <div class="col-md-8 col-sm-12">
                    <div id="navigation">
                        <ul>
                            <li class="active"><a href="{{ route('index') }}">{{ __('main.MENU_HOME') }}</a></li>
                            <li class="has-sub"><a href="#">{{ __('main.MENU_PRODUCTS') }}</a>
                                <ul>
                                    @if(app()->getLocale() == 'ka')
                                        @foreach ($providerCategories as $catitem)
                                            <li><a href="{{ route('product', $catitem->id) }}">{{ $catitem->name_geo }}</a></li>
                                        @endforeach
                                    @endif
                                    @if(app()->getLocale() == 'en')
                                        @foreach ($providerCategories as $catitem)
                                            <li><a href="{{ route('product', $catitem->id) }}">{{ $catitem->name_eng }}</a></li>
                                        @endforeach
                                    @endif
                                    @if(app()->getLocale() == 'ru')
                                        @foreach ($providerCategories as $catitem)
                                            <li><a href="{{ route('product', $catitem->id) }}">{{ $catitem->name_rus }}</a></li>
                                        @endforeach
                                    @endif
                                </ul>
                            </li>
                            <li class="has-sub"><a href="#">{{ __('main.MENU_GALLERY') }}</a>
                                <ul>
                                    @if(app()->getLocale() == 'ka')
                                    <li><a href="{{ route('photo_gallery') }}">ფოტო გალერეა</a>
                                    </li>
                                    <li><a href="{{ route('video_gallery') }}">ვიდეო გალერეა</a>
                                    </li>
                                    @endif
                                    @if(app()->getLocale() == 'en')
                                    <li><a href="{{ route('photo_gallery') }}">Photo Gallery</a>
                                    </li>
                                    <li><a href="{{ route('video_gallery') }}">Video Gallery</a>
                                    </li>
                                    @endif
                                    @if(app()->getLocale() == 'ru')
                                    <li><a href="{{ route('photo_gallery') }}">Фотогалерея</a>
                                    </li>
                                    <li><a href="{{ route('video_gallery') }}">Видеогалерея</a>
                                    </li>
                                    @endif
                                </ul>
                            </li>
                            <li class="active"><a href="{{ route('blog') }}">{{ __('main.MENU_NEWS') }}</a></li>
                            <li class="active"><a href="{{ route('about') }}">{{ __('main.MENU_ABOUT') }}</a></li>
                            <li><a href="{{ route('contact') }}">{{ __('main.MENU_CONTACT') }}</a>
                            </li>
                            @if(app()->getLocale() == 'ka')
                            <li class="has-sub"><a href="#">ენა</a>
                            @endif
                            @if(app()->getLocale() == 'en')
                            <li class="has-sub"><a href="#">Language</a>
                            @endif
                            @if(app()->getLocale() == 'ru')
                            <li class="has-sub"><a href="#">Язык</a>
                            @endif
                                <ul>
                                    <li><a href="{{Request::root()}}/locale/ka">ქართული</a>
                                    </li>
                                    <li><a href="{{Request::root()}}/locale/en">English</a>
                                    </li>
                                    <li><a href="{{Request::root()}}/locale/ru">русский</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- End: Menu  -->
                </div>

            </div>
            <!--/ row -->
        </div>
        <!--/ container -->
    </div>
    <!-- End: header navigation -->
    <div id="preloader"></div>


    @yield('content')

    <!-- Start:Footer Section
==================================================-->
<footer class="footer-section footer_home" >
    <div class="container">
        <div class="row">
            <!-- Start: About -->
            <div class="col-lg-3 col-sm-12">
                <div class="widget">
                    <div class="footer_logo">
                        <img class="img-responsive" src="{{ asset('assets/guest/images/logo.png') }}" alt="">
                    </div>
                    @if(app()->getLocale() == 'ka')
                    <div class="footer_p">
                        <p class="footer_para">ჩვენი კომპანია არის ერთ-ერთი უმსხვილესი სანერგე მეურნეობა საქართველოში. ის 7 წელზე მეტია დომინირებს საქართველოში და ასევე სოფლის მეურნეობის სამინისტროსთან ერთად ახალ ტექნოლოგიების განვითარებაშია ჩართული. </p>
                    </div>
                    @endif
                    @if(app()->getLocale() == 'en')
                    <div class="footer_p">
                        <p class="footer_para">Our company is one of the largest in Georgia which has been dominating Georgia for more than 7 years and is also involved in the development of new technologies together with the Ministry of Agriculture.</p>
                    </div>
                    @endif
                    @if(app()->getLocale() == 'ru')
                    <div class="footer_p">
                        <p class="footer_para">Наша компания является одной из крупнейших в Грузии. Наша организация доминирует в Грузии более 7 лет, а также занимается разработкой новых технологий вместе с Министерством сельского хозяйства.</p>
                    </div>
                    @endif

                </div>
            </div>
            <!-- End: About -->
            <!-- Start: Quick Link -->
            <div class="col-lg-3 col-sm-12">
                <div class="widget quick_lnk">
                    @if(app()->getLocale() == 'ka')
                    <h5>სწრაფი ლინკები</h5>
                    @endif
                    @if(app()->getLocale() == 'en')
                    <h5>Quick Links</h5>
                    @endif
                    @if(app()->getLocale() == 'ru')
                    <h5>Быстрые ссылки</h5>
                    @endif
                    @if(app()->getLocale() == 'ka')
                    <ul>
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
                    @endif
                    @if(app()->getLocale() == 'en')
                    <ul>
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
                    @endif
                    @if(app()->getLocale() == 'ru')
                    <ul>
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
                    @endif
                </div>
            </div>
            <!-- End: Quick Link -->

            <div class="col-lg-3 col-sm-12">
                <div class="widget">
                    @if(app()->getLocale() == 'ka')
                    <h5>სიახლეები</h5>
                    @endif
                    @if(app()->getLocale() == 'en')
                    <h5>Latest News</h5>
                    @endif
                    @if(app()->getLocale() == 'ru')
                    <h5>Новости</h5>
                    @endif
                    <ul class="footer_recent_blog">
                        @foreach($providerNews as $newsitem)
                        <li>
                            <a href="{{ route('blog_detail', $newsitem->news_id) }}"><img class="img-responsive" src="{{ asset('mygreenworld/storage/app/public/'. $newsitem->image) }}" alt=""></a>
                            <span class="post_cont">
                                <a href="{{ route('blog_detail', $newsitem->news_id) }}">
                                    @if(app()->getLocale() == 'ka')
                                    <span>{{ $newsitem->news_title_geo }}</span>
                                    @endif
                                    @if(app()->getLocale() == 'en')
                                    <span>{{ $newsitem->news_title_eng }}</span>
                                    @endif
                                    @if(app()->getLocale() == 'ru')
                                    <span>{{ $newsitem->news_title_rus }}</span>
                                    @endif
                                </a>
                            </span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- End:Newsletter -->
            <a class="scrollup" href="#"><span class="icon-glyph-203"></span></a>
        </div>
    </div>
    <!-- Start:Subfooter -->
    <div class="subfooter">
            <p>საავტორო უფლებები დაცულია. დამზადებულია <a href="https://itweb.ge/">ITWEB.GE</a>-ის მიერ</p>
    </div>

</footer>
<script src="{{ asset('assets/guest/js/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('assets/guest/js/plugins.js') }}"></script>
<script src="{{ asset('assets/guest/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/guest/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/guest/js/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/guest/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/guest/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/guest/js/main.js') }}"></script>

</body>
</html>
