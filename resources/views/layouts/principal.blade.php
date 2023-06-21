<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Tu Aliado Logístico</title>

    <!-- Stylesheets -->
    <link href="{{ asset('/vervoer/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('/vervoer/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('/vervoer/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('/vervoer/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('/vervoer/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('/vervoer/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/vervoer/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('/vervoer/css/icofont.css') }}" rel="stylesheet">
    <link href="{{ asset('/vervoer/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('/vervoer/css/global.css') }}" rel="stylesheet">
    <link href="{{ asset('/vervoer/css/elpath.css') }}" rel="stylesheet">
    <link href="{{ asset('/vervoer/css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('/vervoer/css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('/vervoer/css/banner-section.css') }}" rel="stylesheet">
    <link href="{{ asset('/vervoer/css/blog-section.css') }}" rel="stylesheet">
    <link href="{{ asset('/vervoer/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/vervoer/css/correction.css') }}" rel="stylesheet">
    <link href="{{ asset('/vervoer/css/responsive.css') }}" rel="stylesheet">
    <!-- End Stylesheets -->

    <!-- Fav Icon -->
    @vite(['resources/js/app.js'])
    <link rel="shortcut icon" href="{{ asset('/vervoer/images/icons/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('/vervoer/images/icons/favicon.png') }}" type="image/x-icon">
    <!-- End Fav Icon -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
    <!-- End Google Fonts -->

    <!-- page wrapper -->

<body class="boxed_wrapper">

    <!-- Preloader -->
    <div class="loader-wrap">
        <div class="preloader">
            <div class="preloader-close">x</div>
            <div id="handle-preloader" class="handle-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                    <div class="txt-loading">
                        <span data-text-preloader="L" class="letters-loading">
                            L
                        </span>
                        <span data-text-preloader="I" class="letters-loading">
                            I
                        </span>
                        <span data-text-preloader="P" class="letters-loading">
                            P
                        </span>
                        <span data-text-preloader="P" class="letters-loading">
                            P
                        </span>
                        <span data-text-preloader="S" class="letters-loading">
                            S
                        </span>
                        <span data-text-preloader="A" class="letters-loading">
                            A
                        </span>
                        <span data-text-preloader="S" class="letters-loading">
                            S
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End preloader -->

    @yield('content')

    <!-- Footer Section -->
    <footer class="main-footer">
        <div class="shape-weight"><img src="{{ asset('/vervoer/images/shape/weight.png')}}" alt=""></div>
        <div class="footer-top">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget about-widget">
                            <figure class="footer-logo mb_30">
                                <a href="index.html">
                                    <img src="{{ asset('/vervoer/images/logo_b1.png') }}" alt="">
                                </a>
                            </figure>
                            <p class="text mb_30">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry.</p>
                            <div class="link-btn"><a href="#" class="button-style-three">Nosotros</a></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget info-widget">
                            <div class="widget-title">
                                <h5>Información de contacto</h5>
                            </div>
                            <ul class="contact-info-two">
                                <li><a href="#"><i class="flaticon-telephone-1"></i>+57 316 785 1618 </a></li>
                                <li><a href="#"><i class="flaticon-envelope-1"></i>info@lippsas.com</a></li>
                                <li><i class="flaticon-pin"></i>Avenida Simón Bolívar Kilometro <br>5 No. 16-30
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget links-widget">
                            <div class="widget-title">
                                <h5>Newsletter</h5>
                            </div>
                            <p class="text">Suscríbase a nuestro boletín para recibir nuestras últimas actualizaciones y noticias</p>
                            <form class="newsletter-form" action="action_page.php">
                                <div class="icon"><i class="flaticon-envelope"></i></div>
                                <input type="text" placeholder="Correo electrónico" name="mail" required>
                                <button type="submit"><i class="flaticon-send"></i></button>
                            </form>
                            <div class="social-midea mt_25">
                                <ul>
                                    <li>Redes Sociales</li>
                                    <li><a href="#"><i class="flaticon-facebook-1"></i></a></li>
                                    <li><a href="#"><i class="flaticon-instagram"></i></a></li>
                                    <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget project-widget">
                            <div class="widget-title">
                                <h5>Our Projects</h5>
                            </div>
                            <div class="wrapper-box">
                                <div class="image">
                                    <a href="images/project/project-1.png')}}" class="lightbox-image"
                                        data-fancybox="gallery"><img src="{{ asset('/vervoer/images/project/project-1.png')}}"
                                            alt=""></a>
                                </div>
                                <div class="image">
                                    <a href="images/project/project-2.png')}}" class="lightbox-image"
                                        data-fancybox="gallery"><img src="{{ asset('/vervoer/images/project/project-2.png')}}"
                                            alt=""></a>
                                </div>
                                <div class="image">
                                    <a href="images/project/project-3.png')}}" class="lightbox-image"
                                        data-fancybox="gallery"><img src="{{ asset('/vervoer/images/project/project-3.png')}}"
                                            alt=""></a>
                                </div>
                                <div class="image">
                                    <a href="images/project/project-4.png')}}" class="lightbox-image"
                                        data-fancybox="gallery"><img src="{{ asset('/vervoer/images/project/project-4.png')}}"
                                            alt=""></a>
                                </div>
                                <div class="image">
                                    <a href="images/project/project-5.png')}}" class="lightbox-image"
                                        data-fancybox="gallery"><img src="{{ asset('/vervoer/images/project/project-5.png')}}"
                                            alt=""></a>
                                </div>
                                <div class="image">
                                    <a href="images/project/project-6.png')}}" class="lightbox-image"
                                        data-fancybox="gallery"><img src="{{ asset('/vervoer/images/project/project-6.png')}}"
                                            alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-inner">
                    <div class="copyright-text">&copy; 2023 <a href="#">PACIFICODE</a> - LOGISTICA INTEGRAL PORTURIA DEL PACIFICO SAS. Todos los derechos reservados.</div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Section -->

    <!-- Scroll to Top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="flaticon-right-arrow-1"></i>
    </button>
    <!--End Scroll to Top -->

    <!-- Jequery Plugins -->
    <script src="{{ asset('/vervoer/js/jquery.js') }}"></script>
    <script src="{{ asset('/vervoer/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/vervoer/js/appear.js') }}"></script>
    <script src="{{ asset('/vervoer/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('/vervoer/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('/vervoer/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('/vervoer/js/owl.js') }}"></script>
    <script src="{{ asset('/vervoer/js/wow.js') }}"></script>
    <script src="{{ asset('/vervoer/js/parallax-scroll.js') }}"></script>
    <script src="{{ asset('/vervoer/js/parallax.min.js') }}"></script>
    <script src="{{ asset('/vervoer/js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('/vervoer/js/validation.js') }}"></script>
    <script src="{{ asset('/vervoer/js/bxslider.js') }}"></script>
    <!-- End Jequery Plugins -->

    <!-- Main Js -->
    <script src="{{ asset('/vervoer/js/main.js') }}"></script>
    <!-- End Main Js -->

</body>
<!-- End Page Wrapper -->

</html>
