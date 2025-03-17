@extends('layouts.site.app')

@section('title')
  <title> Promo Fruits-Bénin | Contact </title>
@endsection('title')

@section('styles')

@endsection('styles')

@section('content')

    <!-- En-tête de page Début -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Boîte d'en-tête de page Début -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque"><span>Contactez</span> nous</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">contact</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Boîte d'en-tête de page Fin -->
                </div>
            </div>
        </div>
    </div>
    <!-- En-tête de page Fin -->

    <!-- Page Contactez-nous Début -->
    <div class="page-contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Boîte d'information de contact Début -->
                    <div class="contact-info-box">
                        <!-- Élément d'information de contact Début -->
                        <div class="contact-info-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="images/icon-phone-primary.svg" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>nous contacter</h3>
                                <p><a href="tel:+22995424537">+229 01 95 42  45 37</a></p>
                            </div>
                        </div>
                        <!-- Élément d'information de contact Fin -->

                        <!-- Élément d'information de contact Début -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="images/icon-mail.svg" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>nous envoyer un e-mail</h3>
                                <p><a href="mailto:produitbio2002@promofruits-benin.com">produitbio2002@promofruits-benin.com</a></p>
                            </div>
                        </div>
                        <!-- Élément d'information de contact Fin -->

                        <!-- Élément d'information de contact Début -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="images/icon-location.svg" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>localisation</h3>
                                <p>Allada, Bénin</p>
                            </div>
                        </div>
                        <!-- Élément d'information de contact Fin -->
                    </div>
                    <!-- Boîte d'information de contact Fin -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contactez-nous Fin -->


   <!-- Section Formulaire de Contact Début -->
   <div class="contact-form-section">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-6 order-lg-1 order-2">
                    <!-- Carte Google Début -->
                    <div class="google-map-iframe">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96737.10562045308!2d-74.08535042841811!3d40.739265258395164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1703158537552!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- Carte Google Fin -->
                </div>

                <div class="col-lg-6 order-lg-2 order-1">
                    <!-- Formulaire de Contact Début -->
                    <div class="contact-form-box">
                        <!-- Titre de la Section Début -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">nous contacter</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Entrez en contact avec nous</h2>
                        </div>
                        <!-- Titre de la Section Fin -->

                        <div class="contact-form">
                            <form id="contactForm" action="#" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.2s">
                                <div class="row">                                
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="fname" class="form-control" id="fname" placeholder="Prénom" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
    
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="lname" class="form-control" id="lname" placeholder="Nom" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
    
                                    <div class="form-group col-md-12 mb-4">
                                        <input type="email" name ="email" class="form-control" id="email" placeholder="Entrez votre e-mail" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
    
                                    <div class="form-group col-md-12 mb-4">
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Entrez votre numéro de téléphone" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
    
                                    <div class="form-group col-md-12 mb-5">
                                        <textarea name="message" class="form-control" id="message" rows="4" placeholder="Écrire un message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
    
                                    <div class="col-md-12">
                                        <button type="submit" class="btn-default"><span>Envoyer le message</span></button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Formulaire de Contact Fin -->
                </div>
            </div>
        </div>
    </div>
    <!-- Section Formulaire de Contact Fin -->

@endsection('content')

@section('scripts')
  <script>
  </script>
@endsection('scripts')
