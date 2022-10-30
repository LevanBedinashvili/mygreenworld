@extends('layout.app')
@section('content')
    <!-- Start: Slides  -->
    <div class="slides_wrapper">
        <div class="slider_home">
             <!-- Slider 1 -->
            <div class="single_slider slide_bg_1">
                <div class="slider_item_tb">
                    <div class="slider_item_tbcell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    @if(app()->getLocale() == 'ka')
                                    <h2 style="color: white; ">
                                        გააფორმე კონტრაქტი
                                    </h2>
                                    @endif
                                    @if(app()->getLocale() == 'en')
                                    <h2 style="color: white;">
                                        Sign A Contract
                                    </h2>
                                    @endif
                                    @if(app()->getLocale() == 'ru')
                                    <h2 style="color: white;">
                                        Подписывать контракт
                                    </h2>
                                    @endif
                                    @if(app()->getLocale() == 'ka')
                                    <h6 style="color:white">ჩვენ გვაქვს გრძელვადიანი კონტრაქტები ევროპის წამყვან სანერგე მეურნეობებთან,  თითეული სანერგე მოიცავს 100 ჰექტარზე მეტ ფართს, სადაც თანამედროვე ტექნოლოგიების დანერგვის გზით გამოყავთ ხილის, ყურძნის, კენკროვანი, ვარდის და გამწვანების მაღალხარისხიანი სერთიფიცირებული ნერგები.</h6>
                                    @endif
                                    @if(app()->getLocale() == 'en')
                                    <h6 style="color:white">We have long-term contracts with leading nurseries in Europe, each nursery covers an area of more than 100 hectares, where the introduction of modern technologies produces high-quality certified seedlings of fruit, grapes, berries, roses and greenery.</h6>
                                    @endif
                                    @if(app()->getLocale() == 'ru')
                                    <h6 style="color:white">Имеем долгосрочные контракты с ведущими питомниками Европы, каждый питомник занимает площадь более 100 га, где с внедрением современных технологий производятся качественные сертифицированные саженцы фруктов, винограда, ягод, роз и зелени.</h6>
                                    @endif
                                    @if(app()->getLocale() == 'ka')
                                    <div class="slider_btn">
                                        <a href="{{ route('contact') }}" class="slider_btn_one more-link ">კონტაქტი</a>
                                    </div>
                                    @endif
                                    @if(app()->getLocale() == 'en')
                                    <div class="slider_btn">
                                        <a href="{{ route('contact') }}" class="slider_btn_one more-link ">Contact Us</a>
                                    </div>
                                    @endif
                                    @if(app()->getLocale() == 'ru')
                                    <div class="slider_btn">
                                        <a href="{{ route('contact') }}" class="slider_btn_one more-link ">Связаться с нами</a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End: Slider 1 -->
            <!-- Slider 2 -->
            <div class="single_slider slide_bg_2">
                <div class="slider_item_tb">
                    <div class="slider_item_tbcell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    @if(app()->getLocale() == 'ka')
                                    <h2 style="color: white;">
                                        იპოვე პარტნიორი
                                    </h2>
                                    @endif
                                    @if(app()->getLocale() == 'en')
                                    <h2 style="color: white;">
                                        Find a partner
                                    </h2>
                                    @endif
                                    @if(app()->getLocale() == 'ru')
                                    <h2 style="color: white;">
                                        Найти партнера
                                    </h2>
                                    @endif
                                    @if(app()->getLocale() == 'ka')
                                    <h6 style="color: white;">შ.პ.ს.  ,,გრინ ვორლდი’’-ს   სახით თქვენ იპოვით საიმედო და პროფესიონალ პარტნიორს მაღალხარისხიანი ნერგების მიწოდების მიზნით,  რომელთა სერთიფიკატები და მახასიათებლები ზუსტათ შეესაბამება თქვენს მოთხოვნებს,  მოგცემთ ბაზარზე კონკურენტულ პოზიციას და სრულად დააკმაყოფილებს თქვენს კლიენტებს.</h6>
                                    @endif
                                    @if(app()->getLocale() == 'en')
                                    <h6 style="color:white">As our company you will find a reliable and professional partner for the supply of high quality seedlings, whose certifications and characteristics exactly match your requirements, will give you a competitive position in the market and will fully satisfy your customers.</h6>
                                    @endif
                                    @if(app()->getLocale() == 'ru')
                                    <h6 style="color:white">В нашей компании вы найдете надежного и профессионального партнера по поставке высококачественной рассады, чьи сертификаты и характеристики точно соответствуют вашим требованиям, что обеспечит вам конкурентное положение на рынке и полностью удовлетворит ваших клиентов.</h6>
                                    @endif
                                    @if(app()->getLocale() == 'ka')
                                    <div class="slider_btn">
                                        <a href="{{ route('contact') }}" class="slider_btn_one more-link ">კონტაქტი</a>
                                    </div>
                                    @endif
                                    @if(app()->getLocale() == 'en')
                                    <div class="slider_btn">
                                        <a href="{{ route('contact') }}" class="slider_btn_one more-link ">Contact Us</a>
                                    </div>
                                    @endif
                                    @if(app()->getLocale() == 'ru')
                                    <div class="slider_btn">
                                        <a href="{{ route('contact') }}" class="slider_btn_one more-link ">Связаться с нами</a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider 2 -->
            <div class="single_slider slide_bg_4">
                <div class="slider_item_tb">
                    <div class="slider_item_tbcell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    @if(app()->getLocale() == 'ka')
                                    <h2 style="color: white;">
                                        გაიარე კონსულტაცია
                                    </h2>
                                    @endif
                                    @if(app()->getLocale() == 'en')
                                    <h2 style="color: white;">
                                        Take A Consultation
                                    </h2>
                                    @endif
                                    @if(app()->getLocale() == 'ru')
                                    <h2 style="color: white;">
                                        Получить консультацию
                                    </h2>
                                    @endif
                                    @if(app()->getLocale() == 'ka')
                                    <h6 style="color:white">ჩვენი კლიმატური პირობებიდან გამომდინარე ჩვენს მომხმარებლებს ვუწევთ კონსულტაციებს, ვასწავლით ინტენსიური მებაღეობისა და მეურნეობის საფუძვლებს.  ჩვენ მომხმარებლებს ასევე ვთავაზობთ მაღალი სტანდარტის ბაღის მოვლა-გაშენებისათვის ყველა საჭირო მასალას, წვეთოვან სისტემებს, სეტყვის საწინააღმდეგო ბადეებს, ასევე კომპანია გეგმავს ევროპული ხარისხის შხამქიმიკატების შემოტანა-მიწოდებას.</p>
                                    @endif
                                    @if(app()->getLocale() == 'en')
                                    <h6 style="color:white; ">Due to our climatic conditions we advise our customers, teach them the basics of intensive gardening and farming. We also offer customers all the necessary materials for the maintenance of a high standard garden, drip systems, anti-hail nets, as well as the company plans to import and supply European quality pesticides.</p>
                                    @endif
                                    @if(app()->getLocale() == 'ru')
                                    <h6 style="color:white">Благодаря нашим климатическим условиям мы консультируем наших клиентов, обучаем их основам интенсивного садоводства и земледелия. Также мы предлагаем клиентам все необходимые материалы для ухода за садом высокого стандарта, капельные системы, противоградовые сетки, а также в планах компании импорт и поставка пестицидов европейского качества.</p>
                                    @endif
                                    @if(app()->getLocale() == 'ka')
                                    <div class="slider_btn">
                                        <a href="{{ route('contact') }}" class="slider_btn_one more-link ">კონტაქტი</a>
                                    </div>
                                    @endif
                                    @if(app()->getLocale() == 'en')
                                    <div class="slider_btn">
                                        <a href="{{ route('contact') }}" class="slider_btn_one more-link ">Contact Us</a>
                                    </div>
                                    @endif
                                    @if(app()->getLocale() == 'ru')
                                    <div class="slider_btn">
                                        <a href="{{ route('contact') }}" class="slider_btn_one more-link ">Связаться с нами</a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End: Slider 2 -->
            <!-- End: Slider 2 -->
            <!-- Slider 2 -->
            <div class="single_slider slide_bg_5">
                <div class="slider_item_tb">
                    <div class="slider_item_tbcell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    @if(app()->getLocale() == 'ka')
                                    <h2 style="color: white;">
                                        ჩვენს შესახებ
                                    </h2>
                                    @endif
                                    @if(app()->getLocale() == 'en')
                                    <h2 style="color: white;">
                                        About Us
                                    </h2>
                                    @endif
                                    @if(app()->getLocale() == 'ru')
                                    <h2 style="color: white;">
                                        о нас
                                    </h2>
                                    @endif
                                    @if(app()->getLocale() == 'ka')
                                    <h6 style="color:white">ჩვენი კლიმატური პირობებიდან გამომდინარე ჩვენს მომხმარებლებს ვუწევთ კონსულტაციებს, ვასწავლით ინტენსიური მებაღეობისა და მეურნეობის საფუძვლებს.  ჩვენ მომხმარებლებს ასევე ვთავაზობთ მაღალი სტანდარტის ბაღის მოვლა-გაშენებისათვის ყველა საჭირო მასალას, წვეთოვან სისტემებს, სეტყვის საწინააღმდეგო ბადეებს, ასევე კომპანია გეგმავს ევროპული ხარისხის შხამქიმიკატების შემოტანა-მიწოდებას.</p>
                                    @endif
                                    @if(app()->getLocale() == 'en')
                                    <h6 style="color:white; ">Our company is one of the largest nurseries in Georgia.</p>
                                    @endif
                                    @if(app()->getLocale() == 'ru')
                                    <h6 style="color:white">Наша компания является одним из крупнейших питомников в Грузии.</p>
                                    @endif
                                    @if(app()->getLocale() == 'ka')
                                    <div class="slider_btn">
                                        <a href="{{ route('contact') }}" class="slider_btn_one more-link ">კონტაქტი</a>
                                    </div>
                                    @endif
                                    @if(app()->getLocale() == 'en')
                                    <div class="slider_btn">
                                        <a href="{{ route('contact') }}" class="slider_btn_one more-link ">Contact Us</a>
                                    </div>
                                    @endif
                                    @if(app()->getLocale() == 'ru')
                                    <div class="slider_btn">
                                        <a href="{{ route('contact') }}" class="slider_btn_one more-link ">Связаться с нами</a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="single_slider slide_bg_6">
                <div class="slider_item_tb">
                    <div class="slider_item_tbcell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    @if(app()->getLocale() == 'ka')
                                    <h2 style="color: white;">
                                        გაყიდვაში გვაქვს და არა მარტო
                                    </h2>
                                    @endif
                                    @if(app()->getLocale() == 'en')
                                    <h2 style="color: white;">
                                        We have for sale and not only
                                    </h2>
                                    @endif
                                    @if(app()->getLocale() == 'ru')
                                    <h2 style="color: white;">
                                        У нас есть в продаже и не только
                                    </h2>
                                    @endif
                                    @if(app()->getLocale() == 'ka')
                                    <h6 style="color:white">ჩვენი კლიმატური პირობებიდან გამომდინარე ჩვენს მომხმარებლებს ვუწევთ კონსულტაციებს, ვასწავლით ინტენსიური მებაღეობისა და მეურნეობის საფუძვლებს.  ჩვენ მომხმარებლებს ასევე ვთავაზობთ მაღალი სტანდარტის ბაღის მოვლა-გაშენებისათვის ყველა საჭირო მასალას, წვეთოვან სისტემებს, სეტყვის საწინააღმდეგო ბადეებს, ასევე კომპანია გეგმავს ევროპული ხარისხის შხამქიმიკატების შემოტანა-მიწოდებას.</p>
                                    @endif
                                    @if(app()->getLocale() == 'en')
                                    <h6 style="color:white; ">We have for sale 300,000 high-quality certified seedlings of Saperavi, Chinebuli (Chinese), Goruli Mtsvane vines grown in Europe.</p>
                                    @endif
                                    @if(app()->getLocale() == 'ru')
                                    <h6 style="color:white">У нас в продаже 300 000 качественных сертифицированных саженцев лиан Саперави, Чинебули (китайская), Горули Мцване, выращенных в Европе.</p>
                                    @endif
                                    @if(app()->getLocale() == 'ka')
                                    <div class="slider_btn">
                                        <a href="{{ route('contact') }}" class="slider_btn_one more-link ">კონტაქტი</a>
                                    </div>
                                    @endif
                                    @if(app()->getLocale() == 'en')
                                    <div class="slider_btn">
                                        <a href="{{ route('contact') }}" class="slider_btn_one more-link ">Contact Us</a>
                                    </div>
                                    @endif
                                    @if(app()->getLocale() == 'ru')
                                    <div class="slider_btn">
                                        <a href="{{ route('contact') }}" class="slider_btn_one more-link ">Связаться с нами</a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End: Slider 2 -->
            <!-- End: Slider 2 -->
        </div>
    </div>



    <!-- End:  Slider Section
==================================================-->



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
    <!-- End: About Us Section
==================================================-->
<section class="contact-section contact_pg_contact">
    <div class="container">
        @if(app()->getLocale() == 'ka')
        <div class="base-header">
            <small>კონტაქტი</small>
            <h3>მოგვწერეთ წერილი</h3>
        </div>        @endif
        @if(app()->getLocale() == 'en')
        <div class="base-header">
            <small>Get in touch</small>
            <h3>Send Us Message</h3>
        </div>        @endif
        @if(app()->getLocale() == 'ru')
        <div class="base-header">
            <small>Контакт</small>
            <h3>Отправьте нам сообщение</h3>
        </div>
        @endif


        @if(app()->getLocale() == 'ka')
        <!-- End: Heading -->
        <div class="contact_wrp">
            <div class="row">
                <div class="col-md-8 col-sm-12 inner-contact">
                    <!--  Contact Form  -->
                    <div class="contact-form">
                        <form method="post" action="{{ route('sendmail') }}" id="contact-form">
                            @csrf
                            @method('post')
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <input class="con-field" name="name" id="name" type="text" placeholder="სახელი, გვარი" required>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <input class="con-field" name="email" id="email" type="email" placeholder="ელ. ფოსტა" required>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <input class="con-field" name="phone" id="phone" type="text" placeholder="ტელ. ნომერი" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <textarea class="con-field" name="text" id="text" rows="6" placeholder="მესიჯი" required></textarea>
                                    <div class="submit-area">
                                        <input type="submit" class="submit-contact" value="წერილის გაგზავნა">
                                        <div id="msg" class="message"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End:Contact Form  -->
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="contact_pg_address">
                        <div class="single_con_add">
                            <a href="#"><i class="icon-glyph-334"></i></a>
                            <p><span>ელ.ფოსტა :</span>
                            </p><p><span>{{ $providerContactInfo->contact_email_one }}</span>
                            </p>
                        </div>
                        <div class="single_con_add">
                            <a href="#"><i class="icon-glyph-33"></i></a>
                            <p><span>ტელეფონი :</span>
                            </p><p><span>{{ $providerContactInfo->contact_phone_one }}</span>
                            </p>
                        </div>
                        <div class="single_con_add">
                            <a href="#"><i class="icon-glyph-33"></i></a>
                            <p><span>ტელეფონი :</span>
                            </p><p><span>{{ $providerContactInfo->contact_phone_two }}</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
         <!-- row /- -->
        </div>
        @endif
        @if(app()->getLocale() == 'en')
        <!-- End: Heading -->
        <div class="contact_wrp">
            <div class="row">
                <div class="col-md-8 col-sm-12 inner-contact">
                    <!--  Contact Form  -->
                    <div class="contact-form">
                        <form method="post" action="{{ route('sendmail') }}" id="contact-form">
                            @csrf
                            @method('post')
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <input class="con-field" name="name" id="name" type="text" placeholder="Name" required>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <input class="con-field" name="email" id="email" type="email" placeholder="Email" required>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <input class="con-field" name="phone" id="phone" type="text" placeholder="Phone" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <textarea class="con-field" name="text" id="text" rows="6" placeholder="Your Message" required></textarea>
                                    <div class="submit-area">
                                        <input type="submit" class="submit-contact" value="Send Message">
                                        <div id="msg" class="message"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End:Contact Form  -->
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="contact_pg_address">
                        <div class="single_con_add">
                            <a href="#"><i class="icon-glyph-334"></i></a>
                            <p><span>Email Address :</span>
                            </p><p><span>{{ $providerContactInfo->contact_email_one }}</span>
                            </p>
                        </div>
                        <div class="single_con_add">
                            <a href="#"><i class="icon-glyph-33"></i></a>
                            <p><span>Contact Us :</span>
                            </p><p><span>{{ $providerContactInfo->contact_phone_one }}</span>
                            </p>
                        </div>
                        <div class="single_con_add">
                            <a href="#"><i class="icon-glyph-33"></i></a>
                            <p><span>Contact Us :</span>
                            </p><p><span>{{ $providerContactInfo->contact_phone_two }}</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
         <!-- row /- -->
        </div>
        @endif
        @if(app()->getLocale() == 'ru')
        <!-- End: Heading -->
        <div class="contact_wrp">
            <div class="row">
                <div class="col-md-8 col-sm-12 inner-contact">
                    <!--  Contact Form  -->
                    <div class="contact-form">
                        <form method="post" action="{{ route('sendmail') }}" id="contact-form">
                            @csrf
                            @method('post')
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <input class="con-field" name="name" id="name" type="text" placeholder="Имя" required>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <input class="con-field" name="email" id="email" type="email" placeholder="Эл. адрес" required>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <input class="con-field" name="phone" id="phone" type="text" placeholder="Телефон" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <textarea class="con-field" name="text" id="text" rows="6" placeholder="Ваше сообщение" required></textarea>
                                    <div class="submit-area">
                                        <input type="submit" class="submit-contact" value="Отправить сообщение">
                                        <div id="msg" class="message"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End:Contact Form  -->
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="contact_pg_address">
                        <div class="single_con_add">
                            <a href="#"><i class="icon-glyph-334"></i></a>
                            <p><span>Эл. адрес :</span>
                            </p><p><span>{{ $providerContactInfo->contact_email_one }}</span>
                            </p>
                        </div>
                        <div class="single_con_add">
                            <a href="#"><i class="icon-glyph-33"></i></a>
                            <p><span>Телефон :</span>
                            </p><p><span>{{ $providerContactInfo->contact_phone_one }}</span>
                            </p>
                        </div>
                        <div class="single_con_add">
                            <a href="#"><i class="icon-glyph-33"></i></a>
                            <p><span>Телефон :</span>
                            </p><p><span>{{ $providerContactInfo->contact_phone_two }}</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
         <!-- row /- -->
        </div>
        @endif
    </div>
    <br>
    <br>
    <br>
    <br>
    <!-- container /- -->
</section>

    <section class="contact-section">
        <div class="container">

        </div>
    </section>

@endsection
