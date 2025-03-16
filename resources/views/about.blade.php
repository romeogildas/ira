@extends('layouts.site.app')
@section('title')
  <title> Promo Fruits-Bénin | Qui sommes-nous </title>
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
                        <h1 class="text-anime-style-2" data-cursor="-opaque"> <span>Qui sommes</span>-nous ?</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">qui sommes-nous</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Us Images Start -->
                    <div class="about-us-images">
                        <!-- About Image 1 Start -->
                        <div class="about-img-1">
                            <figure class="image-anime">
                                <img src="images/about-img-1.jpg" alt="">
                            </figure>
                        </div>
                        <!-- About Image 1 End -->

                        <!-- About Image 2 Start -->
                        <div class="about-img-2">
                            <figure class="image-anime">
                                <img src="images/about-img-2.jpg" alt="">
                            </figure>
                        </div>
                        <!-- About Image 2 End -->

                        <!-- Need Fund Box Start -->
                        <div class="need-fund-box">
                            <img src="images/icon-funded-dollar.svg" alt="">
                            <p>We've funded <span class="counter">75</span>k Dollars</p>
                        </div>
                        <!-- Need Fund Box End -->
                    </div>
                    <!-- About Us Images End -->
                </div>

                <div class="col-lg-6">
                    <!-- About Us Content Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">about us</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">United in compassion, changing lives</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Driven by compassion and a shared vision, we work hand-in-hand with communities to create meaningful change.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Body Start -->
                        <div class="about-us-body">
                            <div class="about-us-body-content">
                                <!-- About Support Box Start -->
                                <div class="about-support-box wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="icon-box">
                                        <img src="images/icon-about-support.svg" alt="">
                                    </div>
                                    <!-- About Support Content Start -->
                                    <div class="about-support-content">
                                        <h3>Healthcare Support</h3>
                                        <p>Providing essential healthcare services and resources to communities.</p>
                                    </div>
                                    <!-- About Support Content End -->
                                </div>
                                <!-- About Support Box End -->
                                
                                <!-- About Button Start -->
                                <div class="about-btn wow fadeInUp" data-wow-delay="0.6s">
                                    <a href="donation.html" class="btn-default">donate now</a>
                                </div>
                                <!-- About Button End -->
                            </div>

                            <!-- Helped Fund Item Start -->
                            <div class="helped-fund-item">
                                <div class="helped-fund-img">
                                    <figure class="image-anime">
                                        <img src="images/helped-fund-img.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="helped-fund-content">
                                    <h2><span class="counter">75,958</span></h2>
                                    <h3>helped fund</h3>
                                    <p>Supporting growth through community- funding.</p>
                                </div>
                            </div>
                            <!-- Helped Fund Item End -->
                        </div>
                        <!-- About Body End -->
                    </div>
                    <!-- About Us Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->

    <!-- Our Approah Section Start -->
    <div class="our-approach">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Our Approach Box Content Start -->
                    <div class="our-approach-box-content">
                        <!-- Our Approach Content Start -->
                        <div class="our-approach-content">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h3 class="wow fadeInUp">our approach</h3>
                                <h2 class="text-anime-style-2" data-cursor="-opaque">Compassionate solutions for lasting impact</h2>
                                <p class="wow fadeInUp" data-wow-delay="0.2s">Our approach focuses on creating sustainable change by addressing root causes, empowering communities, and delivering compassionate solutions.</p>
                            </div>
                            <!-- Section Title End -->

                            <!-- Our Approach Button Start -->
                            <div class="our-approach-btn wow fadeInUp" data-wow-delay="0.4s">
                                <a href="" class="btn-default">Lire plus</a>
                            </div>
                            <!-- Our Approach Button End -->

                            <!-- Mission Vision Box Start -->
                            <div class="mission-vision-box wow fadeInUp" data-wow-delay="0.6s">
                                <!-- Mission Vision Item Start -->
                                <div class="mission-vision-item">
                                    <div class="icon-box">
                                        <img src="images/icon-our-mission.svg" alt="">
                                    </div>

                                    <div class="mission-vision-content">
                                        <h3>Notre mission</h3>
                                        <p id="short-text"></p>
                                        <span class="readmore-btn" onclick="showPopup()"></span>
                                    </div>

                                    <div class="popup-overlay" id="popup-overlay"></div>
                                    <div class="popup" id="popup">
                                        <button class="close-btn" onclick="closePopup()">X</button>
                                        <h3>Notre mission</h3>
                                        <p id="full-text"></p>
                                    </div>
                                </div>
                                <!-- Mission Vision Item End -->

                                <!-- Mission Vision Item Start -->
                                <div class="mission-vision-item">
                                    <div class="icon-box">
                                        <img src="images/icon-our-vision.svg" alt="">
                                    </div>

                                    <div class="mission-vision-content">
                                        <h3>our vision</h3>
                                        <p>We strive to create positive change, empower.</p>
                                    </div>
                                </div>
                                <!-- Mission Vision Item End -->

                                <!-- Mission Vision Item Start -->
                                <div class="mission-vision-item">
                                    <div class="icon-box">
                                        <img src="images/icon-our-value.svg" alt="">
                                    </div>

                                    <div class="mission-vision-content">
                                        <h3>our value</h3>
                                        <p>We strive to create positive change, empower.</p>
                                    </div>
                                </div>
                                <!-- Mission Vision Item End -->
                            </div>
                            <!-- Mission Vision Box End -->
                        </div>
                        <!-- Our Approach Content End -->

                        <!-- Our Approach Image Start -->
                        <div class="our-approach-image">
                            <figure class="image-anime">
                                <img src="images/mission.jpeg" alt="">
                            </figure>
                        </div>
                        <!-- Our Approach Image End -->
                    </div>
                    <!-- Our Approach Box Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Approah Section End -->

    <!-- Our Team Section Start -->
    <div class="our-team">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Notre équipe</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Dedicated hearts behind our mission</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Meet the passionate individuals driving our mission forward, committed to creating meaningful change and building a brighter future for all.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <a href="team-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="images/team.jpeg" alt="">
                                </figure>
                            </a>
                        </div>	
                        <!-- Team Image End -->

                        <!-- Team Content Start -->
                        <div class="team-content">
                            <h3><a href="team-single.html">Chris tchrist</a></h3>
                            <p>Directeur</p>
                        </div>
                        <!-- Team Content End -->
                        
                        <!-- Team Social Icon Start -->
                        <div class="team-social-icon">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <!-- Team Social Icon End -->
                    </div>
                    <!-- Team Item Start -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <a href="team-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="images/team.jpeg" alt="">
                                </figure>
                            </a>
                        </div>	
                        <!-- Team Image End -->

                        <!-- Team Content Start -->
                        <div class="team-content">
                            <h3><a href="team-single.html">Sophie sophie</a></h3>
                            <p>Directrice com</p>
                        </div>
                        <!-- Team Content End -->
                        
                        <!-- Team Social Icon Start -->
                        <div class="team-social-icon">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <!-- Team Social Icon End -->
                    </div>
                    <!-- Team Item Start -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <a href="team-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="images/team.jpeg" alt="">
                                </figure>
                            </a>
                        </div>	
                        <!-- Team Image End -->

                        <!-- Team Content Start -->
                        <div class="team-content">
                            <h3><a href="team-single.html">Roméo romeo</a></h3>
                            <p>Ingenieur web</p>
                        </div>
                        <!-- Team Content End -->
                        
                        <!-- Team Social Icon Start -->
                        <div class="team-social-icon">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <!-- Team Social Icon End -->
                    </div>
                    <!-- Team Item Start -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp"  data-wow-delay="0.6s">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <a href="team-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="images/team.jpeg" alt="">
                                </figure>
                            </a>
                        </div>	
                        <!-- Team Image End -->

                        <!-- Team Content Start -->
                        <div class="team-content">
                            <h3><a href="team-single.html">Alix alix</a></h3>
                            <p>community manager</p>
                        </div>
                        <!-- Team Content End -->
                        
                        <!-- Team Social Icon Start -->
                        <div class="team-social-icon">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <!-- Team Social Icon End -->
                    </div>
                    <!-- Team Item Start -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Team Section End -->

@endsection('content')

@section('scripts')
<script>
    const fullText = "Promo Fruit s'est donné comme mission de créer un marché d'écoulement rémunérateur pour chaque type de fruit à travers la transformation à grande échelle. Par ailleurs, nous articulons nos efforts pour l'optimisation des rendements à l'hectare afin d'améliorer le revenu des petits producteurs. Pour chaque consommateur de nos produits, nous garantissons un produit sans additif chimique issu d'une agriculture plus saine et durable pour un bien-être parfait.";

    const words = fullText.split(" ");
    const shortText = words.slice(0, 7).join(" ") + "...";

    document.getElementById("short-text").innerText = shortText;
    document.getElementById("full-text").innerText = fullText;

    function showPopup() {
        document.getElementById("popup").style.display = "block";
        document.getElementById("popup-overlay").style.display = "block";
    }

    function closePopup() {
        document.getElementById("popup").style.display = "none";
        document.getElementById("popup-overlay").style.display = "none";
    }
</script>
@endsection('scripts')