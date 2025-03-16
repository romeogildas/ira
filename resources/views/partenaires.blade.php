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



    <!-- Our Features Section Start -->
    <div class="our-features">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Tous Nos Partenaires</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Highlights our impactful work</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Discover the positive change we've created through our programs, partnerships, and dedicated efforts. From healthcare and education to environmental sustainability.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">

                  <!-- Member About Box Start -->
                  <div class="member-about-box tab-content wow fadeInUp" data-wow-delay="0.6s" id="myTabContent">
                    <!-- Sidebar Our Consultancy Nav start -->
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
                    <!-- Sidebar Our Consultancy Nav End -->

                    <!-- Member About Tab Item Start -->
                    <div class="member-about-tab-item tab-pane fade" id="personal_info" role="tabpanel">
                      <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <!-- Causes Item Start -->
                            <div class="causes-item wow fadeInUp">
                                <div class="causes-image">
                                    <figure class="image-anime">
                                        <img src="images/causes-img-1.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="causes-body">
                                    <div class="causes-content">
                                        <h3>Healthcare access</h3>
                                        <p>Ensuring quality education and resources for underserved communitie.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Causes Item End -->
                        </div>
                
                        <div class="col-lg-4 col-md-6">
                            <!-- Causes Item Start -->
                            <div class="causes-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="causes-image">
                                    <figure class="image-anime">
                                        <img src="images/causes-img-2.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="causes-body">
                                    <div class="causes-content">
                                        <h3>Education for all</h3>
                                        <p>Ensuring quality education and resources for underserved communitie.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Causes Item End -->
                        </div>
                        
                        <div class="col-lg-4 col-md-6">
                            <!-- Causes Item Start -->
                            <div class="causes-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="causes-image">
                                    <figure class="image-anime">
                                        <img src="images/causes-img-3.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="causes-body">
                                    <div class="causes-content">
                                        <h3>Hunger and food security</h3>
                                        <p>Ensuring quality education and resources for underserved communitie.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Causes Item End -->
                        </div>
                      </div>
                    </div>
                    <!-- Member About Tab Item End -->

                    <!-- Member About Tab Item Start -->
                    <div class="member-about-tab-item tab-pane fade show active" id="professional_skills" role="tabpanel">
                      <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <!-- Causes Item Start -->
                            <div class="causes-item wow fadeInUp">
                                <div class="causes-image">
                                    <figure class="image-anime">
                                        <img src="images/causes-img-1.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="causes-body">
                                    <div class="causes-content">
                                        <h3>Healthcare access</h3>
                                        <p>Ensuring quality education and resources for underserved communitie.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Causes Item End -->
                        </div>
                
                        <div class="col-lg-4 col-md-6">
                            <!-- Causes Item Start -->
                            <div class="causes-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="causes-image">
                                    <figure class="image-anime">
                                        <img src="images/causes-img-2.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="causes-body">
                                    <div class="causes-content">
                                        <h3>Education for all</h3>
                                        <p>Ensuring quality education and resources for underserved communitie.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Causes Item End -->
                        </div>
                        
                        <div class="col-lg-4 col-md-6">
                            <!-- Causes Item Start -->
                            <div class="causes-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="causes-image">
                                    <figure class="image-anime">
                                        <img src="images/causes-img-3.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="causes-body">
                                    <div class="causes-content">
                                        <h3>Hunger and food security</h3>
                                        <p>Ensuring quality education and resources for underserved communitie.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Causes Item End -->
                        </div>
                      </div>
                    </div>
                    <!-- Member About Tab Item End -->

                    <!-- Member About Tab Item Start -->
                    <div class="member-about-tab-item tab-pane fade" id="award_win" role="tabpanel">
                      <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <!-- Causes Item Start -->
                            <div class="causes-item wow fadeInUp">
                                <div class="causes-image">
                                    <figure class="image-anime">
                                        <img src="images/causes-img-1.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="causes-body">
                                    <div class="causes-content">
                                        <h3>Healthcare access</h3>
                                        <p>Ensuring quality education and resources for underserved communitie.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Causes Item End -->
                        </div>
                
                        <div class="col-lg-4 col-md-6">
                            <!-- Causes Item Start -->
                            <div class="causes-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="causes-image">
                                    <figure class="image-anime">
                                        <img src="images/causes-img-2.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="causes-body">
                                    <div class="causes-content">
                                        <h3>Education for all</h3>
                                        <p>Ensuring quality education and resources for underserved communitie.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Causes Item End -->
                        </div>
                        
                        <div class="col-lg-4 col-md-6">
                            <!-- Causes Item Start -->
                            <div class="causes-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="causes-image">
                                    <figure class="image-anime">
                                        <img src="images/causes-img-3.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="causes-body">
                                    <div class="causes-content">
                                        <h3>Hunger and food security</h3>
                                        <p>Ensuring quality education and resources for underserved communitie.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Causes Item End -->
                        </div>
                      </div>
                    </div>
                    <!-- Member About Tab Item End -->
                  </div>
                  <!-- Member About Box End -->

                </div>
            </div>
        </div>
    </div>
    <!-- Our Features Section End -->




@endsection('content')

@section('scripts')
  <script>
  </script>
@endsection('scripts')