@extends('layouts.principal')

@section('content')
    <!-- Main Header -->
    @include('includes.principal.navbar_second')
    <!-- End Main Header -->

    <!-- Map Section -->
    <section class="map-section">
        <div class="container-fluid">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55945.16225505631!2d-73.90847969206546!3d40.66490264739892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1601263396347!5m2!1sen!2sbd"></iframe>
        </div>
    </section>
    <!-- End Map Section -->

    <!-- Contact Page Section -->
    <section class="contact-page sec-padd-150">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="info-widget">
                        <h1 class="mb_30">¿Tiene preguntas?<br>
                            ¡Ponte en contacto!</h1>
                        <p class="text mb_30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Metus cursus in cras massa consectetur. Ut sed tellus praesent faucibus arcu. Hendrerit non diam porttitor tincidunt vel enim.</p>
                        <div class="widget-title">
                            <h5>Office Info</h5>
                        </div>
                        <ul class="contact-info-two">
                            <li><a href="#"><i class="flaticon-telephone-1"></i>+57 316 785 1618</a></li>
                            <li><a href="#"><i class="flaticon-envelope-1"></i>info@lippsas.com</a></li>
                            <li><a href="#"><i class="flaticon-pin"></i>Avenida Simón Bolívar Kilometro <br>5 No. 16-30</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="asked-any-query">
                        <h4 class="sub-title mb_50">¿Cualquier duda?</h4>
                        <form class="contact-form" action="sendemail.php">
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
                                        <label>Email Address :</label>
                                        <i class="flaticon-envelope"></i>
                                        <input type="text" name="email" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-sm-12">
                                    <div class="form-group mb_20">
                                        <label>Subject :</label>
                                        <i class="flaticon-prescription"></i>
                                        <input type="text" name="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-xl-12 col-md-12 col-sm-12">
                                    <div class="form-group message-box mb_20">
                                        <label>Subject :</label>
                                        <i class="flaticon-airplane-2"></i>
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>
                                    <button class="button-style-three mb_20"><i class="flaticon-document"></i>Contact Us</button>
                                </div>
                            </div>                                
                        </form>
                    </div>
                </div>
            </div>              
        </div>
    </section>
    <!-- End Contact Page Section -->
@stop