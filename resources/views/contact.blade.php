@extends('layouts.site.app')

@section('title')
  <title> Promo Fruits-Bénin | Contact </title>
@endsection('title')

@section('styles')
  <style>
  </style>
@endsection('styles')

@section('content')

    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque"><span>Contactez</span> nous</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">contact</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Contact Us Start -->
    <div class="page-contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Contact Info Box Start -->
                    <div class="contact-info-box">
                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="images/icon-phone-primary.svg" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>contact us</h3>
                                <p><a href="tel:+22995424537">+229 01 95 42  45 37</a></p>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="images/icon-mail.svg" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>e-mail us</h3>
                                <p><a href="mailto:produitbio2002@promofruits-benin.com">produitbio2002@promofruits-benin.com</a></p>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="images/icon-location.svg" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>localisation</h3>
                                <p>Allada, Bénin</p>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->
                    </div>
                    <!-- Contact Info Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us End -->


    <!-- Team Member Experience Start -->
    <div class="team-member-experience">
                            <!-- Team Experience Box Start -->
                            <div class="team-experience-box">
                                
                                mettre google map ici
                                
                            </div>
                            <!-- Team Experience Box End -->

                            <!-- Team Contact Form Start -->
                            <div class="team-contact-form">
                                <!-- Section Title Start -->
                                <div class="section-title">
                                    <h2 class="text-anime-style-2" data-cursor="-opaque">Get in Touch with Us</h2>
                                </div>
                                <!-- Section Title End -->

                                <!-- Contact Form Start -->
                                <div class="contact-form">
                                    <!-- Contact Form Start -->
                                    <form id="contactForm" action="#" method="POST" data-toggle="validator" class="wow fadeInUp">
                                        <div class="row">
                                            <div class="form-group col-md-6 mb-4">
                                                <input type="text" name="fname" class="form-control" id="fname" placeholder="First name" required>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group col-md-6 mb-4">
                                                <input type="text" name="lname" class="form-control" id="lname" placeholder="Last name" required>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group col-md-6 mb-4">
                                                <input type="email" name="email" class="form-control" id="email" placeholder="E-mail address" required>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group col-md-6 mb-4">
                                                <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone no." required>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="form-group col-md-12 mb-5">
                                                <textarea name="message" class="form-control" id="message" rows="4" placeholder="Write message"></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="col-md-12">
                                                <button type="submit" class="btn-default">send message</button>
                                                <div id="msgSubmit" class="h3 hidden"></div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- Contact Form End -->
                                </div>
                                <!-- Contact Form End -->
                            </div>
                            <!-- Team Contact Form End -->
                        </div>
                        <!-- Team Member Experience End -->

@endsection('content')

@section('scripts')
  <script>
  </script>
@endsection('scripts')