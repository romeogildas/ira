@extends('layouts.site.app')

@section('title')
  <title> Promo Fruits Bénin | Nos partenairs </title>
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
            <h1 class="text-anime-style-2" data-cursor="-opaque">Nos <span>Partenaires </span></h1>
            <nav class="wow fadeInUp">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Partenaires</li>
              </ol>
            </nav>
          </div>
          <!-- Page Header Box End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Page Header End -->



    <!-- Notre Section Partenaires Début -->
    <div class="our-features">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Titre de la Section Début -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Tous Nos Partenaires</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Découvrez nos partenaires engagés</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Nos collaborations stratégiques renforcent nos actions en matière de production, distribution et innovation technique.</p>
                    </div>
                    <!-- Titre de la Section Fin -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">

                    <!-- Boîte de Partenaires Début -->
                    <div class="member-about-box tab-content wow fadeInUp" data-wow-delay="0.6s" id="myTabContent">
                        
                        <!-- Onglets Début -->
                        <div class="member-about-nav">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="personal-info-tab" data-bs-toggle="tab" data-bs-target="#personal_info" type="button" role="tab" aria-selected="true">Nos Producteurs</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="professional-skills-tab" data-bs-toggle="tab" data-bs-target="#professional_skills" type="button" role="tab"  aria-selected="false">Partenaires Techniques</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="award-win-tab" data-bs-toggle="tab" data-bs-target="#award_win" type="button" role="tab"  aria-selected="false">Nos Distributeurs</button>
                                </li>
                            </ul>
                        </div>
                        <!-- Onglets Fin -->

                        <!-- Nos Producteurs Début -->
                        <div class="member-about-tab-item tab-pane fade" id="personal_info" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="causes-item wow fadeInUp">
                                        <div class="causes-image">
                                            <figure class="image-anime">
                                                <img src="images/mission.jpeg" alt="">
                                            </figure>
                                        </div>
                                        <div class="causes-body">
                                            <div class="causes-content">
                                                <h3>Production Responsable</h3>
                                                <p>Nos producteurs garantissent une agriculture durable et de qualité.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="col-lg-4 col-md-6">
                                    <div class="causes-item wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="causes-image">
                                            <figure class="image-anime">
                                                <img src="images/mission.jpeg" alt="">
                                            </figure>
                                        </div>
                                        <div class="causes-body">
                                            <div class="causes-content">
                                                <h3>Normes de Qualité</h3>
                                                <p>Nos partenaires respectent les standards de qualité et d’éthique.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-md-6">
                                    <div class="causes-item wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="causes-image">
                                            <figure class="image-anime">
                                                <img src="images/mission.jpeg" alt="">
                                            </figure>
                                        </div>
                                        <div class="causes-body">
                                            <div class="causes-content">
                                                <h3>Engagement Écologique</h3>
                                                <p>Un impact positif sur l’environnement grâce à nos pratiques durables.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Nos Producteurs Fin -->

                        <!-- Partenaires Techniques Début -->
                        <div class="member-about-tab-item tab-pane fade show active" id="professional_skills" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="causes-item wow fadeInUp">
                                        <div class="causes-image">
                                            <figure class="image-anime">
                                                <img src="images/mission.jpeg" alt="">
                                            </figure>
                                        </div>
                                        <div class="causes-body">
                                            <div class="causes-content">
                                                <h3>Innovation Technologique</h3>
                                                <p>Nos experts apportent des solutions innovantes pour améliorer la production.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="col-lg-4 col-md-6">
                                    <div class="causes-item wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="causes-image">
                                            <figure class="image-anime">
                                                <img src="images/mission.jpeg" alt="">
                                            </figure>
                                        </div>
                                        <div class="causes-body">
                                            <div class="causes-content">
                                                <h3>Optimisation des Processus</h3>
                                                <p>Nous mettons en place des stratégies pour maximiser l'efficacité.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-md-6">
                                    <div class="causes-item wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="causes-image">
                                            <figure class="image-anime">
                                                <img src="images/mission.jpeg" alt="">
                                            </figure>
                                        </div>
                                        <div class="causes-body">
                                            <div class="causes-content">
                                                <h3>Accompagnement Technique</h3>
                                                <p>Formation et assistance pour améliorer les compétences et la qualité.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Partenaires Techniques Fin -->

                        <!-- Nos Distributeurs Début -->
                        <div class="member-about-tab-item tab-pane fade" id="award_win" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="causes-item wow fadeInUp">
                                        <div class="causes-image">
                                            <figure class="image-anime">
                                                <img src="images/mission.jpeg" alt="">
                                            </figure>
                                        </div>
                                        <div class="causes-body">
                                            <div class="causes-content">
                                                <h3>Réseau de Distribution</h3>
                                                <p>Nos distributeurs assurent une large diffusion de nos produits.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="col-lg-4 col-md-6">
                                    <div class="causes-item wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="causes-image">
                                            <figure class="image-anime">
                                                <img src="images/mission.jpeg" alt="">
                                            </figure>
                                        </div>
                                        <div class="causes-body">
                                            <div class="causes-content">
                                                <h3>Logistique et Transport</h3>
                                                <p>Une chaîne d’approvisionnement efficace et optimisée.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-md-6">
                                    <div class="causes-item wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="causes-image">
                                            <figure class="image-anime">
                                                <img src="images/mission.jpeg" alt="">
                                            </figure>
                                        </div>
                                        <div class="causes-body">
                                            <div class="causes-content">
                                                <h3>Présence Nationale</h3>
                                                <p>Nos partenaires permettent d’atteindre tous les marchés locaux.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Nos Distributeurs Fin -->

                    </div>
                    <!-- Boîte de Partenaires Fin -->

                </div>
            </div>
        </div>
    </div>
    <!-- Notre Section Partenaires Fin -->





@endsection('content')

@section('scripts')
  <script>
  </script>
@endsection('scripts')