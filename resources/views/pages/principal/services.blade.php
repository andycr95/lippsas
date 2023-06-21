@extends('layouts.principal')

@section('content')


    <!-- Main Header -->
    @include('includes.principal.navbar_second')
    <!-- End Main Header -->

    <!-- Page Banner Section -->
    <section class="page-banner-section" style="background-image: url(/images/service/bg-7_back.png);">
        <div class="container">
            <h1 class="page-banner-title">Servicios</h1>
            <ul class="breadcrumb">
                <li><a href="index.html">inicio</a></li>
                <li><i class="far fa-angle-right"></i></li>
                <li>Servicios</li>
            </ul>
        </div>
    </section>
    <!-- End Page Banner Section -->

    <!-- Service Section One -->
    <section class="service-001 sec-padd-150 inner-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 colmun">
                    <div class="service-block-001 mb_30 wow fadeInUp animated" data-wow-delay="600ms"
                        data-wow-duration="1500ms">
                        <div class="service-inner" style="background-image: url(images/service/bg-10_back.png);">
                            <div class="logo-icon">
                                <img src="{{ asset('/vervoer/images/icons/air-freight.svg') }}" alt="">
                            </div>
                            <div class="tag"><img src="{{ asset('/vervoer/images/icons/01.png') }}" alt=""></div>
                            <div class="show-content">
                                <div class="text-area">
                                    <h4><a href="#">Importación</a></h4>
                                    <p>Transporte Integral urbano de contendores de importacion.</p>
                                </div>
                                <div class="image-box" >
                                    <img src="{{ asset('/images/service/bg-10_bottom.png') }}" alt="">
                                </div>
                            </div>
                            <div class="hidden-content">
                                <div class="text-area">
                                    <h4><a href="#">Importación</a></h4>
                                    <p>Transporte Integral urbano de contendores de importacion.</p>
                                    <div class="link-button"><a href="service-details.html"><i class="flaticon-right-arrow-1"></i></a></div>
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
                            <div class="tag"><img src="{{ asset('/vervoer/images/icons/02.png') }}" alt=""></div>
                            <div class="show-content">
                                <div class="text-area">
                                    <h4 style="font-size: 30px;"><a href="#">Transporte Integral</a></h4>
                                    <p
                                        style="overflow: hidden;white-space: pre-wrap;-webkit-line-clamp: 2;display: -webkit-box;-webkit-box-orient: vertical;">
                                        LIPP cuenta con una flota de tractocamiones propia, la cual cuenta con sistema de
                                        seguimineto satelital, brindando un servicio confiable y oportuno.</p>
                                </div>
                                <div class="image-box">
                                    <img src="{{ asset('images/service/bg-2_bottom.png') }}" alt="">
                                </div>
                            </div>
                            <div class="hidden-content">
                                <div class="text-area">
                                    <h4><a href="#">Transporte Integral</a></h4>
                                    <p>LIPP cuenta con una flota de tractocamiones propia, la cual cuenta con sistema de
                                        seguimineto satelital, brindando un servicio confiable y oportuno.</p>
                                    <div class="link-button"><a href="service-details.html"><i class="flaticon-right-arrow-1"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 colmun">
                    <div class="service-block-001 mb_30 wow fadeInUp animated" data-wow-delay="00ms"
                        data-wow-duration="1500ms">
                        <div class="service-inner" style="background-image: url(images/service/bg-6_back.png);">
                            <div class="logo-icon">
                                <img src="{{ asset('/vervoer/images/icons/road-freight.svg') }}" alt="">
                            </div>
                            <div class="tag"><img src="{{ asset('/vervoer/images/icons/03.png') }}" alt=""></div>
                            <div class="show-content">
                                <div class="text-area">
                                    <h4><a href="#">Almacenamiento</a></h4>
                                    <p
                                        style="overflow: hidden;white-space: pre-wrap;-webkit-line-clamp: 2;display: -webkit-box;-webkit-box-orient: vertical;">
                                        Incluir mapa de ubicación de las instalaciones en el mapa hacer un diagrama de
                                        distancia de los puertos</p>
                                </div>
                                <div class="image-box">
                                    <img src="{{ asset('/images/service/bg-6_bottom.png') }}" alt="">
                                </div>
                            </div>
                            <div class="hidden-content">
                                <div class="text-area">
                                    <h4><a href="#">Almacenamiento</a></h4>
                                    <p>Incluir mapa de ubicación de las instalaciones en el mapa hacer un diagrama de
                                        distancia de los puertos</p>
                                    <div class="link-button"><a href="service-details.html"><i class="flaticon-right-arrow-1"></i></a></div>
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
    <section class="cta-001 style-two">
        <div class="container">
            <div class="cta-inner">
                <div class="title-box">
                    <i class="flaticon-package"></i>
                    <h3>Estamos listos 24/7 para brindarte los servicios</h3>
                </div>
                <div class="link-button"><a href="/#booking" class="button-style-four"><i
                            class="flaticon-document"></i>Reserva tu cita</a></div>
            </div>
        </div>
    </section>
    <!-- End Cta 001 -->

    <!-- Service Section 002 -->
    <section class="service-002 sec-padd-150">
        <div class="shape-five" data-parallax='{"x": 200}'><img src="{{ asset('/vervoer/images/shape/shape-5.png') }}"
                alt=""></div>
        <div class="shape-six" data-parallax='{"x": 200}'><img src="{{ asset('/vervoer/images/shape/shape-6.png') }}"
                alt=""></div>
        <div class="shape-seven" data-parallax='{"x": 200}'><img src="{{ asset('/vervoer/images/shape/shape-7.png') }}"
                alt=""></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 colmun">
                    <div class="service-block-002 mb_30 wow slideInUp animated" data-wow-delay="00ms"
                        data-wow-duration="1500ms">
                        <div class="service-inner">
                            <div class="image-box" style="width: 100%;height:347px;">
                                <a href="service-details.html"><img style="object-fit: cover; width: 100%;height: 100%;"
                                        src="{{ asset('/images/service/bg-1.webp') }}" alt=""></a>
                                <div class="icon-box"><i class="flaticon-shipped"></i></div>
                            </div>
                            <div class="content-box">
                                <h5><a href="service-details.html">Transporte Integral <span>urbano de lamina</span></a>
                                </h5>
                                <p>Dapibus interdum senectus malesuada est nec morbi cursus. Amet in mollis consectetur
                                    amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 colmun">
                    <div class="service-block-002 mb_30 wow slideInUp animated" data-wow-delay="300ms"
                        data-wow-duration="1500ms">
                        <div class="service-inner">
                            <div class="image-box" style="width: 100%;height:347px;">
                                <a href="service-details.html"><img style="object-fit: cover; width: 100%;height: 100%;"
                                        src="{{ asset('/images/service/bg-3.webp') }}" alt=""></a>
                                <div class="icon-box"><i class="flaticon-trailer"></i></div>
                            </div>
                            <div class="content-box">
                                <h5><a href="service-details.html">Almacenamiento de <span>carga</span></a></h5>
                                <p>Dapibus interdum senectus malesuada est nec morbi cursus. Amet in mollis consectetur
                                    amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 colmun">
                    <div class="service-block-002 mb_30 wow slideInUp animated" data-wow-delay="300ms"
                        data-wow-duration="1500ms">
                        <div class="service-inner">
                            <div class="image-box" style="width: 100%;height:347px;">
                                <a href="service-details.html"><img style="object-fit: cover; width: 100%;height: 100%;"
                                        src="{{ asset('/images/service/bg-2.webp') }}" alt=""></a>
                                <div class="icon-box"><i class="flaticon-shipped"></i></div>
                            </div>
                            <div class="content-box">
                                <h5><a href="service-details.html">Transporte integral urbano de <span>Big Bag</span></a>
                                </h5>
                                <p>Dapibus interdum senectus malesuada est nec morbi cursus. Amet in mollis consectetur
                                    amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 colmun">
                    <div class="service-block-002 mb_30 wow slideInUp animated" data-wow-delay="300ms"
                        data-wow-duration="1500ms">
                        <div class="service-inner">
                            <div class="image-box" style="width: 100%;height:347px;">
                                <a href="service-details.html"><img style="object-fit: cover; width: 100%;height: 100%;"
                                        src="{{ asset('/images/service/bg-4.webp') }}" alt=""></a>
                                <div class="icon-box"><i class="flaticon-shipped"></i></div>
                            </div>
                            <div class="content-box">
                                <h5><a href="service-details.html">Transporte integral urbano de <span>maquinaria
                                            amarilla</span></a></h5>
                                <p>Dapibus interdum senectus malesuada est nec morbi cursus. Amet in mollis consectetur
                                    amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 colmun">
                    <div class="service-block-002 mb_30 wow slideInUp animated" data-wow-delay="100ms"
                        data-wow-duration="1500ms">
                        <div class="service-inner">
                            <div class="image-box" style="width: 100%;height:347px;">
                                <a href="service-details.html"><img style="object-fit: cover; width: 100%;height: 100%;"
                                        src="{{ asset('/images/service/bg-5.webp') }}" alt=""></a>
                                <div class="icon-box"><i class="flaticon-shipped"></i></div>
                            </div>
                            <div class="content-box">
                                <h5><a href="service-details.html">Transporte Integral urbano de <span>contendores de
                                            importación</span></a></h5>
                                <p>Dapibus interdum senectus malesuada est nec morbi cursus. Amet in mollis consectetur
                                    amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 colmun">
                    <div class="service-block-002 mb_30 wow slideInUp animated" data-wow-delay="200ms"
                        data-wow-duration="1500ms">
                        <div class="service-inner">
                            <div class="image-box" style="width: 100%;height:347px;">
                                <a href="service-details.html"><img style="object-fit: cover; width: 100%;height: 100%;"
                                        src="{{ asset('/images/service/bg-6.webp') }}" alt=""></a>
                                <div class="icon-box"><i class="flaticon-shipped"></i></div>
                            </div>
                            <div class="content-box">
                                <h5><a href="service-details.html">Transporte Integral urbano de <span>contendores de
                                            exportación</span></a></h5>
                                <p>Dapibus interdum senectus malesuada est nec morbi cursus. Amet in mollis consectetur
                                    amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 colmun">
                    <div class="service-block-002 mb_30 wow slideInUp animated" data-wow-delay="300ms"
                        data-wow-duration="1500ms">
                        <div class="service-inner">
                            <div class="image-box" style="width: 100%;height:347px;">
                                <a href="service-details.html"><img style="object-fit: cover; width: 100%;height: 100%;"
                                        src="{{ asset('/images/service/bg-7.webp') }}" alt=""></a>
                                <div class="icon-box"><i class="flaticon-trailer"></i></div>
                            </div>
                            <div class="content-box">
                                <h5><a href="service-details.html">Llenado de contenedores con <span>mercancía de
                                            exportación</span></a></h5>
                                <p>Dapibus interdum senectus malesuada est nec morbi cursus. Amet in mollis consectetur
                                    amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service Section 002 -->

@stop
