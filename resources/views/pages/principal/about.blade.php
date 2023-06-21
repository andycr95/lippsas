@extends('layouts.principal')

@section('content')


<!-- Main Header -->
@include('includes.principal.navbar_second')
<!-- End Main Header -->

<!-- Page Banner Section -->
<section class="page-banner-section" style="background-image: url(/images/bg-3_about.png);">
    <div class="container">
        <h1 class="page-banner-title">Sobre nosotros</h1>
        <ul class="breadcrumb">
            <li><a href="index.html">Inicio</a></li>
            <li><i class="far fa-angle-right"></i></li>
            <li>Nosotros</li>
        </ul>
    </div>
</section>
<!-- End Page Banner Section -->

<!-- Company About -->
<section class="company-about about-page">
    <div class="shape" data-parallax='{"y": 50}'>
        <img src="{{ asset('/vervoer/images/shape/Illustration-shape.png') }}" alt="">
    </div> 
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-12">
                <div class="image-colmun">
                    <div class="image-box">
                        <img src="{{ asset('/vervoer/images/resource/about-image-5.jpg') }}" alt="">
                    </div>
                    <div class="image-box-1" style="background-image: url(/vervoer/images/resource/about-image-6.jpg);">
                        <div class="text-inner">
                            <div class="logo"><img style="width: 134px" src="{{ asset('/vervoer/images/logo_b1.png') }}" alt=""></div>
                            <div class="qoute">“</div>
                            <div class="text">Dapibus interdum senectus malesuada est nec morbi cursus. Amet in mollis.</div>
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
            <div class="col-xl-6 col-lg-12">
                <div class="content-colmun">                                       
                    <div class="section-title">
                        <div class="sub-title">~ Sobre la empresa ~</div>
                        <h3 class="title">¿Quiénes Somos? <br><span>Desde 1948</span></h3>
                        <p class="title-text">Logística Integral Portuaria del Pacífico SAS, es un operador logístico integral en Buenaventura que le ofrece a sus clientes el diseño de un servicio logístico a la medida de cada necesidad, ofreciendo soluciones eficientes y personalizadas.
                            Atendemos cualquier tipo de urbaneo de puerto a Bodega y cualquier tipo de almacenamiento, equipos para el recibo y despacho de mercancías cargas sueltas y paletizadas. Urbaneo de contenedores y cargas sueltas.
                            Tenemos la experiencia para el manejo de todo tipo de cargas, carga general contenerizadas y cargas sueltas, bultos, cajas, Big Bag, paletizada.
                            Manejo y almacenaje de rollos de lamina en frio y caliente, lamina en atados, perfilería y contenerizadas. 
                            Tenemos una capacidad de almacenamiento de 5.000 toneladas de mercancía contenerizadas  bajo techo, con posibilidad de aumentar la capacidad de almacenamiento.</p>
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
                                <h6 class="title">Shot Time Delivery</h6>
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
                    <div class="mail-info">Get Free Assessment: <a href="">temlate_path@example.com</a></div>
                    <div class="link-button">
                        <a href="about.html" class="button-style-three"><i class="flaticon-document"></i>Read More</a>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</section>
<!-- End Company About -->

<!-- Why Choose Us Section Inner Page -->
<section class="why-choose-us-section two">
    <div class="container">
        <div class="inner-page">
            <div class="row tabs-box">
                <div class="col-xl-3 col-lg-12">
                    <div class="section-title mb_30 wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="sub-title">~  Why Chhoose Us  ~</div>
                        <h3 class="title">Why to Choose Our <span>Freight Services</span></h3>
                        <p class="title-text">Dapibus interdum senectus malesuada est nec morbi cursus. Amet in mollis consectetur amet.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-12">
                    <ul class="tab-buttons">
                        <li class="tab-btn active-btn" data-tab="#tab-1">
                            <div class="icon-one"><i class="flaticon-online-shop"></i></div>
                            Trasparent Pricing 
                            <div class="icon-two"><i class="flaticon-right-chevron"></i></div>
                        </li>
                        <li class="tab-btn" data-tab="#tab-2">                            
                            <div class="icon-one"><i class="flaticon-layer"></i></div>
                            Real Time Tracking
                            <div class="icon-two"><i class="flaticon-right-chevron"></i></div>
                        </li>
                        <li class="tab-btn" data-tab="#tab-3">
                            <div class="icon-one"><i class="flaticon-phone-call"></i></div>
                            24/7 Online Support 
                            <div class="icon-two"><i class="flaticon-right-chevron"></i></div>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="tabs-content">
                        <div class="tab active-tab" id="tab-1">
                            <div class="freight-calclution-box">
                                <h4 class="sub-title">Freight<br><span> Calclution</span></h4>
                                <form class="calclution-form" action="sendemail.php">
                                    <div class="row">
                                        <div class="col-xl-6 col-md-6 col-sm-12">
                                            <div class="form-group mb_20">
                                                <label>Your name:</label>
                                                <i class="flaticon-user"></i>
                                                <input type="text" name="yourname" placeholder="Enter your name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-sm-12">
                                            <div class="form-group mb_20">
                                                <label>Your Mobile:</label>
                                                <i class="flaticon-telephone-2"></i>
                                                <input type="text" name="yourphone" placeholder="Enter your mobile">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-sm-12">
                                            <div class="form-group mb_20">
                                                <label>Weight, kg</label>
                                                <i class="flaticon-kilogram"></i>
                                                <input type="text" name="weight" placeholder="Pakage weight">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-sm-12">
                                            <div class="form-group mb_20">
                                                <label>Distance, km</label>
                                                <i class="flaticon-location"></i>
                                                <input type="text" name="distance" placeholder="Distance">
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-md-12 col-sm-12">
                                            <div class="form-group mb_30">
                                                <label>Freight type:</label>
                                                <i class="flaticon-freight"></i>
                                                <div class="select-box">
                                                    <select class="wide">
                                                    <option data-display="Select Flight">Select Freight</option>
                                                    <option value="1">Air Freight</option>
                                                    <option value="2">Ocean Freight</option>
                                                    <option value="3">Expedited Freight</option>
                                                    <option value="4">Intermodal Rail Freight</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-md-12 col-sm-12">
                                            <div class="form-group mb_0">
                                                <button class="button-style-three"><i class="flaticon-document"></i>Send</button>
                                            </div>
                                        </div>
                                    </div>                                
                                </form>
                            </div>
                        </div>
                        <div class="tab" id="tab-2">
                            <div class="time-traking-box">
                                <h4 class="sub-title">Real Time<br><span>Tracking</span></h4>
                                <div class="tracking-number-search">
                                    <strong>Tracking ID :</strong>
                                    <input type="text" name="trackingid" placeholder="Tracking ID number">
                                    <button>Track</button>
                                    <p>Enter the ID of your project to track its status. <br>(Demo project IDs are 1234, 2234 and 3234.)</p>
                                    <div class="level-bar"></div>
                                    <ul class="tracking-step">
                                        <li>Payment Pending</li>
                                        <li>Processing</li>
                                        <li>Shipped</li>
                                        <li>Delivered</li>
                                    </ul>
                                    <div class="tracking-text"><div class="date">12 March, 2022 - 19:03</div>Thank you for shiping to Vervoer </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-3">
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
                                        <button class="button-style-three"><i class="flaticon-document"></i>Send Message</button>
                                    </div>                           
                                </form>
                            </div>  
                        </div>
                    </div> 
                </div> 
            </div>
        </div>
        
    </div>
</section>
<!-- End Why Choose Us Section Inner Page -->

<!-- How To Work Section -->
@include('includes.principal.how_work_section')
<!-- End How To Work Section -->

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

<!-- Team Section -->
<section class="team-section sec-padd-150">
    <div class="container">
        <div class="section-title centred mb_50 wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
            <div class="sub-title">~  Nuestro equipo ~</div>
            <h3 class="title">Global <span>Transportation</span></h3>
            <p class="title-text">Dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit <br>aspernatur aut odit aut fugit, sed quia.</p>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="team-block-one mb_40 wow fadeInUp animated" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <div class="team-image">
                        <figure>
                            <a href="team-details.html"><img src="{{ asset('/vervoer/images/team/team-1.jpg') }}" alt=""></a>
                        </figure>
                        <div class="share-box"><i class="flaticon-share"></i><div class="title-text">Share</div></div>
                        <ul class="social-icon">
                            <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont-vimeo"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-info">
                        <h5><a href="team-details.html">Darlene Robertson</a></h5>
                        <span>Employ</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="team-block-one mb_40 wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="team-image">
                        <figure>
                            <a href="team-details.html"><img src="{{ asset('/vervoer/images/team/team-2.jpg') }}" alt=""></a>
                        </figure>
                        <div class="share-box"><i class="flaticon-share"></i><div class="title-text">Share</div></div>
                        <ul class="social-icon">
                            <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont-vimeo"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-info">
                        <h5><a href="team-details.html">Jerome Bell</a></h5>
                        <span>Packager</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="team-block-one mb_40 wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="team-image">
                        <figure>
                            <a href="team-details.html"><img src="{{ asset('/vervoer/images/team/team-3.jpg') }}" alt=""></a>
                        </figure>
                        <div class="share-box"><i class="flaticon-share"></i><div class="title-text">Share</div></div>
                        <ul class="social-icon">
                            <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont-vimeo"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-info">
                        <h5><a href="team-details.html">Boris Jonson</a></h5>
                        <span>CEO</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Teean Section -->

<!-- Testimonials Style Seven -->
<section class="testimonial-style-seven sec-padd-150">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-12">
                <div class="image-box">
                    <figure style="width: 570px; height: 670px">
                        <img style="width: 100%;height: 100%;object-fit: cover;" src="{{ asset('/images/bg-9.webp') }}" alt="">
                    </figure>
                </div>
            </div>
            <div class="col-xl-7 col-lg-12">
                <div class="testimonial-seven-area">
                    <div class="content-title">
                        <h3>¿Qué opinan las personas y  <br><span>nuestros clientes?</span></h3>
                        <p class="title-text">Dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit <br> aspernatur aut odit aut fugit, sed quia.</p>
                    </div>
                    <div class="testimonial-left-minus">
                        <div style="overflow: hidden" class="testimonials-slide-six owl-carousel owl-theme owl-dots-none owl-nav-none">
                            <div class="testimonial-block-six">
                                <div class="inner-box">
                                    <h6>Quality Design</h6>
                                    <p>Nam nec purus gravida arcu ultrices placerat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla cursus, tellus ac consectetur varius.</p>
                                </div>
                                <div class="author-info">
                                    <div class="thumb-image">
                                        <img src="{{ asset('/vervoer/images/resource/thumb-5.png') }}" alt="">
                                    </div>
                                    <div class="info-box">
                                        <ul class="ratting">
                                            <li><i class="flaticon-star"></i></li>
                                            <li><i class="flaticon-star"></i></li>
                                            <li><i class="flaticon-star"></i></li>
                                            <li><i class="flaticon-star"></i></li>
                                            <li><i class="flaticon-star"></i></li>
                                        </ul>
                                        <h6>Jemmy Catter / <span>CEO Founder</span></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-block-six">
                                <div class="inner-box">
                                    <h6>Code Quality</h6>
                                    <p>Nam nec purus gravida arcu ultrices placerat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla cursus, tellus ac consectetur varius.</p>
                                </div>
                                <div class="author-info">
                                    <div class="thumb-image">
                                        <img src="{{ asset('/vervoer/images/resource/thumb-6.png') }}" alt="">
                                    </div>
                                    <div class="info-box">
                                        <ul class="ratting">
                                            <li><i class="flaticon-star"></i></li>
                                            <li><i class="flaticon-star"></i></li>
                                            <li><i class="flaticon-star"></i></li>
                                            <li><i class="flaticon-star"></i></li>
                                            <li><i class="flaticon-star"></i></li>
                                        </ul>
                                        <h6>Alex Muraf / <span>CTO</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>                     
                </div>       
            </div>
        </div>
    </div>
</section>
<!-- End Testimonials Style Seven -->

@stop