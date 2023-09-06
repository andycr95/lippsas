@extends('layouts.principal')

@section('content')
    <!-- Main Header -->
    @include('includes.principal.navbar')
    <!-- End Main Header -->

    <!-- Hidden Sidebar -->
    <section class="hidden-sidebar close-sidebar">
        <div class="wrapper-box">
            <div class="content-wrapper">
                <div class="hidden-sidebar-close"><i class="flaticon-cross"></i></div>
                <div class="text-widget mb_30">
                    <div class="logo"><a href="index.html"><img src="{{ asset('/vervoer/images/logo_b.png') }}" alt=""></a></div>
                    <div class="text">Demoralized by the charms of pleasure of the moment so blinded by desire that
                        they cannot foresees the pain.</div>
                </div>
                <!-- PDF Widget -->
                <div class="pdf-widget mb_30">
                    <div class="content mb_10">
                        <div class="icon"><img src="{{ asset('/vervoer/images/icons/low-price.svg') }}" alt=""></div>
                        <h6>Affordable Cost</h6>
                    </div>
                    <div class="content">
                        <div class="icon"><img src="{{ asset('/vervoer/images/icons/order-tracking.svg') }}" alt=""></div>
                        <h6>Tracking Moving</h6>
                    </div>
                </div>
                <!-- Contact Widget -->
                <div class="contact-widget">
                    <div class="icon-box">
                        <div class="icon"><i class="flaticon-pin"></i></div>
                        <div class="text">Boat House, 152/21 City Road, <br> Hoxton, N1 6NG, UK.</div>
                    </div>
                    <div class="icon-box">
                        <div class="icon"><i class="flaticon-telephone-1"></i></div>
                        <div class="text"><strong>Phone</strong><a href="tel:(+61)3245689790">(+61) 324 56 789 &
                                790</a></div>
                    </div>
                    <div class="icon-box">
                        <div class="icon"><i class="flaticon-envelope"></i></div>
                        <div class="text"><strong>Email</strong><a
                                href="tel:(+61)32456789790">supportyou@transida.com</a></div>
                    </div>
                </div>
                <!-- Link Btn -->
                <div class="link-btn"><a href="#" class="button-style-three"><i
                            class="flaticon-document"></i>Purchase Our Theme</a></div>
            </div>
        </div>
    </section>
    <!-- End Hidden Sidebar -->

    <!-- Banner Section -->
    <section class="banner-section">
        <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
            <div class="slide-item">
                <div class="image-layer" style="background-image: url(/images/bg-1.webp);"></div>
                <div class="container">
                    <div class="content-box centred">
                        <h6 class="sub-title">We Are Specialise In The Transportation</h6>
                        <h1 class="title">World Wide <br><span>Transportation</span></h1>
                        <div class="btn-box">
                            <a href="#booking" class="button-style-two"><i class="far fa-paper-plane"></i>Reserva tu cita</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item">
                <div class="image-layer" style="background-image: url(/images/bg-2.webp);"></div>
                <div class="container">
                    <div class="content-box centred">
                        <h6 class="sub-title">We Are Specialise In The Transportation</h6>
                        <h1 class="title">World Wide <br><span>Transportation</span></h1>
                        <div class="btn-box">
                            <a href="#booking" class="button-style-two"><i class="far fa-paper-plane"></i>Consulta tus documentos!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item">
                <div class="image-layer" style="background-image: url(/images/bg-3.webp);"></div>
                <div class="container">
                    <div class="content-box centred">
                        <h6 class="sub-title">We Are Specialise In The Transportation</h6>
                        <h1 class="title">World Wide <br><span>Transportation</span></h1>
                        <div class="btn-box">
                            <a href="#" class="button-style-two"><i class="far fa-paper-plane"></i>Get a
                                quote!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-plane" data-parallax='{"x": 200}'><img src="{{ asset('/images/fly.png')}}" alt="">
        </div>
        <div class="banner-shape" data-parallax='{"x": 200}'><img src="{{ asset('/vervoer/images/shape/shape-1.png')}}" alt="">
        </div>
        <div class="vertical-text">
            <div data-parallax='{"x": 50}'>LIPPSAS</div>
        </div>
    </section>
    <!-- End Banner Section -->

    <!-- Company About -->
    <section class="company-about">
        <div class="shape-seven wow slideInLeft animated" data-wow-delay="200ms" data-wow-duration="2500ms">
            <div class="shape" data-parallax='{"x": 20}'>
                <img src="{{ asset('/vervoer/images/shape/landing.png')}}" alt="">
            </div>
        </div>
        <div class="shape-eight wow slideInRight animated" data-wow-delay="200ms" data-wow-duration="2500ms">
            <div class="shape" data-parallax='{"x": 20}'>
                <img src="{{ asset('/vervoer/images/shape/Illustration.png')}}" alt="">
            </div>
        </div>
        <div class="container">
            <div class="shape-inner">
                <div class="pattern-layer parallax-scene parallax-scene-1">
                    <div data-depth="0.40" class="pattern-1"
                        style="background-image: url(vervoer/images/resource/map-image-2.png);"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-5 col-lg-12">
                    <div class="image-colmun">
                        <div class="shape-image"><img src="{{ asset('/vervoer/images/shape/certified-logo.png')}}" alt=""></div>
                        <div class="image-box">
                            <img src="{{ asset('/vervoer/images/resource/about-image.jpg') }}" alt="">
                        </div>
                        <div class="image-box-1" style="background-image: url(vervoer/images/resource/about-image-2.jpg);">
                            <div class="text-inner">
                                <div class="logo"><img src="{{ asset('/vervoer/images/shape/company-logo.png')}}" alt=""></div>
                                <div class="qoute">“</div>
                                <div class="text mb_30">Dapibus interdum senectus malesuada est nec morbi cursus. Amet
                                    in mollis.</div>
                                <div class="basic-info">
                                    <div class="text-left">
                                        <div class="authre-name">- Romana Preti</div>
                                        <div class="designation">CEO & Founder</div>
                                    </div>
                                    <div class="sign">Romana</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-12">
                    <div class="content-colmun">
                        <div class="section-title">
                            <div class="sub-title">~ Sobre la nosotros ~</div>
                            <h3 class="title">Expertos en proporcionar en el mejor <br> Soporte logístico <span> Desde 1998</span></h3>
                            <p class="title-text">Dapibus interdum senectus malesuada est nec morbi cursus. Amet in
                                mollis consectetur amet. Sit sollicitudin suspendisse ut suspendisse in dolor neque
                                platea. Amet nec eu, tortor euismod sed enim. Penatibus amet accumsan aliquam imperdiet
                                dictum.</p>
                        </div>
                        <div class="company-feature">
                            <div class="feature-block">
                                <div class="feature-inner">
                                    <div class="icon-box">
                                        <img src="{{ asset('/vervoer/images/icons/low-price.svg') }}" alt="">
                                    </div>
                                    <h6 class="title">Affordable Cost</h6>
                                </div>
                            </div>
                            <div class="feature-block">
                                <div class="feature-inner">
                                    <div class="icon-box">
                                        <img src="{{ asset('/vervoer/images/icons/clock.svg') }}" alt="">
                                    </div>
                                    <h6 class="title">Due Time Delivery</h6>
                                </div>
                            </div>
                            <div class="feature-block">
                                <div class="feature-inner">
                                    <div class="icon-box">
                                        <img src="{{ asset('/vervoer/images/icons/order-tracking.svg') }}" alt="">
                                    </div>
                                    <h6 class="title">Tracking Moving</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Company About -->

    <!-- Service Section One -->
    <section class="service-001 sec-padd-150">
        <div class="container">
            <div class="section-title centred mb_30 wow fadeInUp animated" data-wow-delay="300ms"
                data-wow-duration="1500ms">
                <div class="sub-title">~ Nuestros Servicios ~</div>
                <h3 class="title">Servicios Logísticos</span></h3>
                <p class="title-text">Somos flexibles; nos adaptamos a la realidad operativa de los  clientes,<br> prestando servicios hechos a la medida. Los más comunes son:.</p>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 colmun">
                    <div class="service-block-001 mb_30 wow fadeInUp animated" data-wow-delay="00ms"
                        data-wow-duration="1500ms">
                        <div class="service-inner" style="background-image: url(images/service/bg-10_back.png);">
                            <div class="logo-icon">
                                <img src="{{ asset('/vervoer/images/icons/air-freight.svg') }}" alt="">
                            </div>
                            <div class="tag"><img src="{{ asset('/vervoer/images/icons/01.png')}}" alt=""></div>
                            <div class="show-content">
                                <div class="text-area">
                                    <h4><a href="#">Importación</a></h4>
                                    <p>Transporte Integral urbano de contendores de importacion.</p>
                                </div>
                                <div class="image-box">
                                    <img src="{{ asset('/images/service/bg-10_bottom.png') }}" alt="">
                                </div>
                            </div>
                            <div class="hidden-content">
                                <div class="text-area">
                                    <h4><a href="#">Importación</a></h4>
                                    <p>Transporte Integral urbano de contendores de importacion.</p>
                                    <div class="link-button"><a href="service-details.html"><i
                                                class="flaticon-right-arrow-1"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 colmun">
                    <div class="service-block-001 mb_30 wow fadeInUp animated" data-wow-delay="300ms"
                        data-wow-duration="1500ms">
                        <div class="service-inner" style="background-image: url(images/service/bg-2_back.png);">
                            <div class="logo-icon">
                                <img src="{{ asset('/vervoer/images/icons/rail-freight.svg') }}" alt="">
                            </div>
                            <div class="tag"><img src="{{ asset('/vervoer/images/icons/02.png')}}" alt=""></div>
                            <div class="show-content">
                                <div class="text-area">
                                    <h4 style="font-size: 30px;"><a href="#">Transporte Integral</a></h4>
                                    <p style="overflow: hidden;white-space: pre-wrap;-webkit-line-clamp: 2;display: -webkit-box;-webkit-box-orient: vertical;">LIPP cuenta con una flota de tractocamiones propia, la cual cuenta con sistema de seguimineto satelital, brindando un servicio confiable y oportuno.</p>
                                </div>
                                <div class="image-box">
                                    <img src="{{ asset('images/service/bg-2_bottom.png') }}" alt="">
                                </div>
                            </div>
                            <div class="hidden-content">
                                <div class="text-area">
                                    <h4><a href="#">Transporte Integral</a></h4>
                                    <p>LIPP cuenta con una flota de tractocamiones propia, la cual cuenta con sistema de seguimineto satelital, brindando un servicio confiable y oportuno.</p>
                                    <div class="link-button"><a href="service-details.html"><i
                                                class="flaticon-right-arrow-1"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 colmun">
                    <div class="service-block-001 mb_30 wow fadeInUp animated" data-wow-delay="600ms"
                        data-wow-duration="1500ms">
                        <div class="service-inner" style="background-image: url(images/service/bg-6_back.png);">
                            <div class="logo-icon">
                                <img src="{{ asset('/vervoer/images/icons/road-freight.svg') }}" alt="">
                            </div>
                            <div class="tag"><img src="{{ asset('/vervoer/images/icons/03.png')}}" alt=""></div>
                            <div class="show-content">
                                <div class="text-area">
                                    <h4><a href="#">Almacenamiento</a></h4>
                                    <p style="overflow: hidden;white-space: pre-wrap;-webkit-line-clamp: 2;display: -webkit-box;-webkit-box-orient: vertical;">Incluir mapa de ubicación de las instalaciones en el mapa hacer un diagrama de distancia de los puertos</p>
                                </div>
                                <div class="image-box">
                                    <img src="{{ asset('/images/service/bg-6_bottom.png') }}" alt="">
                                </div>
                            </div>
                            <div class="hidden-content">
                                <div class="text-area">
                                    <h4><a href="#">Almacenamiento</a></h4>
                                    <p>Incluir mapa de ubicación de las instalaciones en el mapa hacer un diagrama de distancia de los puertos</p>
                                    <div class="link-button"><a href="service-details.html"><i
                                                class="flaticon-right-arrow-1"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service Section One -->

    <!-- Cta 001 -->
    <section class="cta-001">
        <div class="shape-five" data-parallax='{"x": 50}'><img src="{{ asset('/vervoer/images/shape/close-box.png')}}" alt="">
        </div>
        <div class="shape-six" data-parallax='{"x": 50}'><img src="{{ asset('/vervoer/images/shape/open-box.png')}}" alt=""></div>
        <div class="container">
            <div class="cta-inner">
                <div class="title-box">
                    <i class="flaticon-package"></i>
                    <h3>Estamos listos 24/7 para brindarte los servicios</h3>
                </div>
                <div class="link-button"><a href="request-a-quote.html" class="button-style-four"><i
                            class="flaticon-document"></i>Reservar cita</a></div>
            </div>
        </div>
    </section>
    <!-- End Cta 001 -->

    <!-- Why Choose Us Section -->
    <section class="why-choose-us-section sec-padd-150" id="booking">
        <div class="shape-three" data-parallax='{"x": 200}'><img src="{{ asset('/vervoer/images/shape/shape-3.png')}}" alt="">
        </div>
        <div class="shape-four" data-parallax='{"x": 200}'><img src="{{ asset('/vervoer/images/shape/shape-4.png')}}" alt=""></div>
        <div class="container">
            <div class="row tabs-box">
                <div class="col-xl-3 col-lg-12">
                    <div class="section-title mb_30 wow fadeInUp animated" data-wow-delay="300ms"
                        data-wow-duration="1500ms">
                        <div class="sub-title">~ Reservas ~</div>
                        <h4 class="title">Nuestros mejores <span>servicios</span></h4>
                        <p class="title-text">Dapibus interdum senectus malesuada est nec morbi cursus. Amet in mollis
                            consectetur amet.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-12">
                    <ul class="tab-buttons">
                        <li class="tab-btn" data-tab="#tab-1">
                            <div class="icon-one"><i class="flaticon-online-shop"></i></div>
                            Reservar cita
                            <div class="icon-two"><i class="flaticon-right-chevron"></i></div>
                        </li>
                        <li class="tab-btn" data-tab="#tab-2">
                            <div class="icon-one"><i class="flaticon-layer"></i></div>
                            Consultar documentos - retenciones
                            <div class="icon-two"><i class="flaticon-right-chevron"></i></div>
                        </li>
                        {{-- <li class="tab-btn" data-tab="#tab-3">
                            <div class="icon-one"><i class="flaticon-phone-call"></i></div>
                            24/7 Online Support
                            <div class="icon-two"><i class="flaticon-right-chevron"></i></div>
                        </li> --}}
                    </ul>
                </div>
                <div class="col-xl-6 col-lg-12"  id="app">
                    <div class="tabs-content">
                        <div class="tab active-tab" id="tab-1">
                            <div class="freight-calclution-box">
                                <h4 class="sub-title">Formulario<br><span>De cita</span></h4>
                                <div class="calclution-form">
                                    <hello-world></hello-world>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-2">
                            <div class="time-traking-box">
                                <h4 class="sub-title">Consulta tus<br><span>Documentos</span></h4>
                                <form-document></form-document>
                            </div>
                        </div>
                        {{-- <div class="tab" id="tab-3">
                            <div class="online-support">
                                <h4 class="sub-title">24/7 Online<br><span> Support</span></h4>
                                <form class="contact-form" action="sendemail.php">
                                    <div class="form-group mb_20">
                                        <i class="flaticon-user"></i>
                                        <input type="text" name="yourname" placeholder="Enter Your Name">
                                    </div>
                                    <div class="form-group mb_20">
                                        <i class="flaticon-airplane-2"></i>
                                        <input type="text" name="t-number" placeholder="Enter Tracking Number">
                                    </div>
                                    <div class="form-group mb_20">
                                        <i class="flaticon-envelope"></i>
                                        <input type="text" name="yourmail" placeholder="Enter Your Mail">
                                    </div>
                                    <div class="form-group mb_20">
                                        <i class="flaticon-document"></i>
                                        <textarea name="message" placeholder="Please Discribe Your Problem"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="button-style-three"><i class="flaticon-document"></i>Send
                                            Message</button>
                                    </div>
                                </form>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why Choose Us Section -->

    <!-- How To Work Section -->
    @include('includes.principal.how_work_section')
    <!-- End How To Work Section -->

    <!-- Service Section -->
    <section class="service-section" style="background-image: url(vervoer/images/background/service-bg.jpg);">
        <div class="fulid-container">
            <div class="service-carousel owl-theme owl-carousel owl-dots-none">
                <div class="service-slide">
                    <div class="service-image" style="background-image: url(vervoer/images/service/service-1.jpg);">
                    </div>
                    <div class="service-text">
                        <div class="hide-icon"><i class="flaticon-package"></i></div>
                        <div class="icon-box"><i class="flaticon-package"></i></div>
                        <h5><a href="service-details.html">Vehicle <br>Manufacturing</a></h5>
                        <p>Dapibus interdum senectus malesuada <br>est nec morbi cursus. Amet in mollis <br>consectetur
                            amet.</p>
                        <a href="service-details.html" class="link-button">More Details</a>
                    </div>
                </div>
                <div class="service-slide">
                    <div class="service-image" style="background-image: url(vervoer/images/service/service-2.jpg);">
                    </div>
                    <div class="service-text">
                        <div class="hide-icon"><i class="flaticon-logistics"></i></div>
                        <div class="icon-box"><i class="flaticon-logistics"></i></div>
                        <h5><a href="service-details.html">Packaging <br>& Distribution</a></h5>
                        <p>Dapibus interdum senectus malesuada <br>est nec morbi cursus. Amet in mollis <br>consectetur
                            amet.</p>
                        <a href="service-details.html" class="link-button">More Details</a>
                    </div>
                </div>
                <div class="service-slide">
                    <div class="service-image" style="background-image: url(vervoer/images/service/service-3.jpg);">
                    </div>
                    <div class="service-text">
                        <div class="hide-icon"><i class="flaticon-compliance"></i></div>
                        <div class="icon-box"><i class="flaticon-compliance"></i></div>
                        <h5><a href="service-details.html">Transportation <br>Process</a></h5>
                        <p>Dapibus interdum senectus malesuada <br>est nec morbi cursus. Amet in mollis <br>consectetur
                            amet.</p>
                        <a href="service-details.html" class="link-button">More Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service Section -->

    <!-- Testimonials Section -->
    <section class="testimonial-section sec-padd-150">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-12 offset-xl-1">
                    <div class="section-title mb_30 wow fadeInUp animated" data-wow-delay="200ms"
                        data-wow-duration="1500ms">
                        <div class="sub-title">~ Testimonial~</div>
                        <h3 class="title">What Our Client <span>Says</span></h3>
                        <p class="title-text">Dapibus interdum senectus malesuada est nec morbi cursus. Amet in mollis
                            consectetur amet.</p>
                        <div class="link-button">
                            <a href="news-grid.html" class="button-style-three"><i class="flaticon-document"></i>All
                                View Testimonials</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-12">
                    <div class="testimonials-area">
                        <div class="bxslider">
                            <div class="slider-content">
                                <div class="slider-pager">
                                    <ul class="thumb-box">
                                        <li>
                                            <a class="active" data-slide-index="0" href="#">
                                                <figure class="thumb thumb-1"><img
                                                        src="{{ asset('/vervoer/images/testimonials/author-1.png')}}" alt="">
                                                </figure>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-slide-index="1" href="#">
                                                <figure class="thumb thumb-2"><img
                                                        src="{{ asset('/vervoer/images/testimonials/author-2.png')}}" alt="">
                                                </figure>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-slide-index="2" href="#">
                                                <figure class="thumb thumb-3"><img
                                                        src="{{ asset('/vervoer/images/testimonials/author-3.png')}}" alt="">
                                                </figure>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="testimonials-block">
                                    <div class="inner-box">
                                        <div class="text">Nam nec purus gravida arcu ultrices placerat. Lorem ipsum
                                            dolor sit amet, consectetur adipiscing elit. Nulla cursus, tellus ac
                                            consectetur varius.</div>
                                        <ul class="ratting-star">
                                            <li><i class="flaticon-star"></i></li>
                                            <li><i class="flaticon-star"></i></li>
                                            <li><i class="flaticon-star"></i></li>
                                            <li><i class="flaticon-star"></i></li>
                                            <li><i class="flaticon-star"></i></li>
                                        </ul>
                                        <div class="author">Jemmy Catter / <span>CEO Founder</span></div>
                                    </div>
                                    <div class="author-image">
                                        <div class="tag">“</div>
                                        <figure>
                                            <img src="{{ asset('/vervoer/images/testimonials/author-1.png')}}" alt="">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-content">
                                <div class="slider-pager">
                                    <ul class="thumb-box">
                                        <li>
                                            <a class="active" data-slide-index="0" href="#">
                                                <figure class="thumb thumb-1"><img
                                                        src="{{ asset('/vervoer/images/testimonials/author-1.png')}}" alt="">
                                                </figure>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-slide-index="1" href="#">
                                                <figure class="thumb thumb-2"><img
                                                        src="{{ asset('/vervoer/images/testimonials/author-2.png')}}" alt="">
                                                </figure>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-slide-index="2" href="#">
                                                <figure class="thumb thumb-3"><img
                                                        src="{{ asset('/vervoer/images/testimonials/author-3.png')}}" alt="">
                                                </figure>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="testimonials-block">
                                    <div class="inner-box">
                                        <div class="text">Nam nec purus gravida arcu ultrices placerat. Lorem ipsum
                                            dolor sit amet, consectetur adipiscing elit. Nulla cursus, tellus ac
                                            consectetur varius.</div>
                                        <ul class="ratting-star">
                                            <li><i class="flaticon-star"></i></li>
                                            <li><i class="flaticon-star"></i></li>
                                            <li><i class="flaticon-star"></i></li>
                                            <li><i class="flaticon-star"></i></li>
                                            <li><i class="flaticon-star"></i></li>
                                        </ul>
                                        <div class="author">Haris Gulati / <span>CEO Founder</span></div>
                                    </div>
                                    <div class="author-image">
                                        <div class="tag">“</div>
                                        <figure>
                                            <img src="{{ asset('/vervoer/images/testimonials/author-2.png')}}" alt="">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-content">
                                <div class="slider-pager">
                                    <ul class="thumb-box">
                                        <li>
                                            <a class="active" data-slide-index="0" href="#">
                                                <figure class="thumb thumb-1"><img
                                                        src="{{ asset('/vervoer/images/testimonials/author-1.png')}}" alt="">
                                                </figure>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-slide-index="1" href="#">
                                                <figure class="thumb thumb-2"><img
                                                        src="{{ asset('/vervoer/images/testimonials/author-2.png')}}" alt="">
                                                </figure>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-slide-index="2" href="#">
                                                <figure class="thumb thumb-3"><img
                                                        src="{{ asset('/vervoer/images/testimonials/author-3.png')}}" alt="">
                                                </figure>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="testimonials-block">
                                    <div class="inner-box">
                                        <div class="text">Nam nec purus gravida arcu ultrices placerat. Lorem ipsum
                                            dolor sit amet, consectetur adipiscing elit. Nulla cursus, tellus ac
                                            consectetur varius.</div>
                                        <ul class="ratting-star">
                                            <li><i class="flaticon-star"></i></li>
                                            <li><i class="flaticon-star"></i></li>
                                            <li><i class="flaticon-star"></i></li>
                                            <li><i class="flaticon-star"></i></li>
                                            <li><i class="flaticon-star"></i></li>
                                        </ul>
                                        <div class="author">Jemmy Catter / <span>CEO Founder</span></div>
                                    </div>
                                    <div class="author-image">
                                        <div class="tag">“</div>
                                        <figure>
                                            <img src="{{ asset('/vervoer/images/testimonials/author-3.png')}}" alt="">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offset-xl-1"></div>
            </div>
        </div>
    </section>
    <!-- End News Section -->

    <!-- Clients Section -->
    <section class="client-section sec-padd-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="client-logo mb_30 wow fadeInUp animated" data-wow-delay="300ms"
                        data-wow-duration="1500ms">
                        <a href="#"><img src="{{ asset('/vervoer/images/clients/client-1.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="client-logo mb_30 wow fadeInUp animated" data-wow-delay="600ms"
                        data-wow-duration="1500ms">
                        <a href="#"><img src="{{ asset('/vervoer/images/clients/client-2.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="client-logo mb_30 wow fadeInUp animated" data-wow-delay="900ms"
                        data-wow-duration="1500ms">
                        <a href="#"><img src="{{ asset('/vervoer/images/clients/client-3.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="client-logo mb_30 wow fadeInUp animated" data-wow-delay="1200ms"
                        data-wow-duration="1500ms">
                        <a href="#"><img src="{{ asset('/vervoer/images/clients/client-4.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Clients Section -->

    <!-- News Section -->
    <section class="news-section sec-padd-150">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12">
                    <div class="section-title mb_30 wow fadeInUp animated" data-wow-delay="200ms"
                        data-wow-duration="1500ms">
                        <div class="sub-title">~ News Update ~</div>
                        <h3 class="title">Our vervoer Latet <span>Blog Post</span></h3>
                        <p class="title-text">Dapibus interdum senectus malesuada est nec morbi cursus. Amet in mollis
                            consectetur amet.</p>
                        <div class="link-button">
                            <a href="news-grid.html" class="button-style-three"><i class="flaticon-document"></i>
                                View All Post</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12">
                    <div class="news-block-one mb_30 wow fadeInUp animated" data-wow-delay="400ms"
                        data-wow-duration="1500ms">
                        <div class="image-box">
                            <figure>
                                <a href="news-details.html"><img src="{{ asset('/vervoer/images/blog/blog-1.jpg') }}" alt=""></a>
                            </figure>
                        </div>
                        <div class="inner-box">
                            <div class="blog-content">
                                <ul class="post-info">
                                    <li class="author"><i class="flaticon-user"></i>author</li>
                                    <li class="post-date"> <i class="flaticon-calender-1"></i>Feb 14 2022</li>
                                </ul>
                                <div class="post-body">
                                    <h5 class="blog-title"><a href="news-details.html">Nam nec purus gravida arcu
                                            ultrices placerat</a></h5>
                                    <div class="blog-text">Dapibus interdum senectus malesuada est nec purus gravida
                                        arcu ultrices placerat morbi cursus. Amet in mollis consectetur amet.</div>
                                </div>
                            </div>
                            <div class="vertical-text"><a href="news-details.html">Read More</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="news-block-one mb_30 wow fadeInUp animated" data-wow-delay="600ms"
                        data-wow-duration="1500ms">
                        <div class="image-box">
                            <figure>
                                <a href="news-details.html"><img src="{{ asset('/vervoer/images/blog/blog-2.jpg') }}" alt=""></a>
                            </figure>
                        </div>
                        <div class="inner-box">
                            <div class="blog-content">
                                <ul class="post-info">
                                    <li class="author"><i class="flaticon-user"></i>author</li>
                                    <li class="post-date"> <i class="flaticon-calender-1"></i>Oct 28 2022</li>
                                </ul>
                                <div class="post-body">
                                    <h5 class="blog-title"><a href="news-details.html">Nam nec purus gravida arcu
                                            ultrices placerat</a></h5>
                                    <div class="blog-text">Dapibus interdum senectus malesuada est nec morbi cursus.
                                        Amet in mollis consectetur amet.</div>
                                </div>
                            </div>
                            <div class="vertical-text"><a href="news-details.html">Read More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End News Section -->

    <!-- Cta Section -->
    <section class="cta-section">
        <div class="cta-inner-box">
            <div class="cta-left-image" style="background-image: url(vervoer/images/resource/cta-left-image.jpg);">
                <div class="icon-box"><i class="flaticon-freight"></i></div>
            </div>
            <div class="cta-right-content">
                <div class="title-box">
                    <h4>Would you like to get the best Transport <br> services?</h4>
                    <span>Dapibus interdum senectus malesuada est nec morbi cursus.</span>
                </div>
                <div class="link-button">
                    <a href="service-details.html" class="button-style-four"><i
                            class="flaticon-document"></i>Services</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Cta Section -->
@stop