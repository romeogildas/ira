@extends('layouts.site.app')

@section('title')
  <title> Promo Fruits Bénin | Détails de l'article </title>
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
                        <h1 class="text-anime-style-2" data-cursor="-opaque"><span>Détails</span> de l'article</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">accueil</a></li>
                                <li class="breadcrumb-item"><a href="/article">articles</a></li>
                                <li class="breadcrumb-item active" aria-current="page">détails</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Détail de l'Article -->
    <div class="page-single-post">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Image en vedette de l'article -->
                    <div class="post-image">
                        <figure class="image-anime reveal">
                            <img src="images/mission.jpeg" alt="Mission">
                        </figure>
                    </div>
                    <!-- Fin de l'image en vedette -->

                    <!-- Contenu de l'article -->
                    <div class="post-content">
                        <!-- Début de l'article -->
                        <div class="post-entry">
                            <p class="wow fadeInUp">Protéger les forêts est au cœur de notre mission environnementale, car elles sont essentielles à la santé de notre planète et au bien-être des générations futures. Les forêts jouent un rôle crucial dans la lutte contre le changement climatique en absorbant le dioxyde de carbone, en préservant la biodiversité et en fournissant de l'air et de l'eau propres. Notre organisation se consacre à la conservation et à la restauration des écosystèmes forestiers à travers des projets de reboisement, des initiatives communautaires et des pratiques agricoles durables.</p>

                            <p class="wow fadeInUp" data-wow-delay="0.2s">En travaillant main dans la main avec les communautés locales, les gouvernements et les partenaires mondiaux, nous visons à créer une relation équilibrée entre l'homme et la nature. Ensemble, nous pouvons nous assurer que les forêts continuent de prospérer, soutenant les moyens de subsistance, la faune et la planète pour les générations à venir.</p>
                            
                            <blockquote class="wow fadeInUp" data-wow-delay="0.4s">
                                <p>Protéger les forêts est essentiel pour la santé de notre planète et des générations futures. Grâce au reboisement, aux pratiques durables et à l'engagement communautaire, nous visons à protéger les écosystèmes, à lutter contre le changement climatique et à préserver la biodiversité.</p>
                            </blockquote>

                            <p class="wow fadeInUp" data-wow-delay="0.6s">Notre mission consiste à protéger les forêts pour préserver la biodiversité, lutter contre le changement climatique et soutenir des moyens de subsistance durables. Grâce au reboisement, aux efforts de conservation et aux partenariats communautaires, nous travaillons pour un avenir plus vert et plus sain pour notre planète.</p>

                            <h2 class="wow fadeInUp" data-wow-delay="0.8s">Construire un avenir plus vert ensemble</h2>

                            <p class="wow fadeInUp" data-wow-delay="1s">Construire un avenir plus vert ensemble implique des efforts collaboratifs pour protéger et restaurer les écosystèmes vitaux de notre planète. Grâce au reboisement, aux pratiques durables et à l'implication des communautés, nous travaillons collectivement pour garantir un monde plus sain et plus durable pour tous.</p>

                            <ul class="wow fadeInUp" data-wow-delay="1.2s">
                                <li>Initiatives de reboisement et de plantation d'arbres</li>
                                <li>Programmes de conservation communautaire</li>
                                <li>Pratiques de gestion durable des terres</li>
                                <li>Autonomisation des communautés et formations</li>
                                <li>Soutien aux communautés locales et indigènes</li>
                            </ul>

                            <p class="wow fadeInUp" data-wow-delay="1.4s">Construire un avenir plus vert ensemble, c'est se rassembler en tant que communauté mondiale pour protéger les ressources naturelles de notre planète. Grâce au reboisement, aux efforts de conservation et aux pratiques durables, nous affrontons de front les défis du changement climatique et de la dégradation de l'environnement. En donnant le pouvoir aux individus, en engageant les communautés et en formant des partenariats stratégiques, nous créons un héritage durable.</p>
                        </div>
                        <!-- Fin de l'article -->

                        <!-- Liens des tags de l'article -->
                        <div class="post-tag-links">
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <!-- Début des tags -->
                                    <div class="post-tags wow fadeInUp" data-wow-delay="0.5s">
                                        <span class="tag-links">
                                            Tags :
                                            <a href="#">autonomisation</a>
                                            <a href="#">communauté</a>
                                            <a href="#">éducation</a>
                                        </span>
                                    </div>
                                    <!-- Fin des tags -->
                                </div>

                                <div class="col-lg-4">
                                    <!-- Début des liens sociaux -->
                                    <div class="post-social-sharing wow fadeInUp" data-wow-delay="0.5s">
                                        <ul>
                                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- Fin des liens sociaux -->
                                </div>
                            </div>
                        </div>
                        <!-- Fin des liens des tags -->
                    </div>
                    <!-- Fin du contenu de l'article -->
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de la page Détail de l'Article -->

@endsection('content')

@section('scripts')
  <script>
  </script>
@endsection('scripts')
