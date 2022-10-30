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
                <h3>კონტაქტი</h3>

                <h4><a href="{{ route('index') }}"> მთავარი </a> > კონტაქტი </h4>
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
                <h3>Contact</h3>

                <h4><a href="{{ route('index') }}"> Home </a> > Contact </h4>
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
