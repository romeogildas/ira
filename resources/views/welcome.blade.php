@extends('layouts.site.app')

@section('title')
  <title> Promo Fruits Bénin | Accueil </title>
@endsection('title')

@section('styles')
  <style>
    .mission-vision-content p {
            display: inline;
        }
        .read-more-btn {
            color: blue;
            cursor: pointer;
            text-decoration: underline;
            margin-left: 5px;
        }
        .popup {
            display: none;
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
            border-radius: 5px;
            z-index: 1000;
            width: 80%;
            max-width: 500px;
        }
        .popup h3 {
            margin-top: 0;
        }
        .popup-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
        .close-btn {
            background: red;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            float: right;
            border-radius: 3px;
        }
  </style>
@endsection('styles')

@section('content')

    <!-- Hero Section Start -->
    <div class="hero hero-slider-layout">
        <div class="swiper">
            <div class="swiper-wrapper">
                <!-- Hero Slide Start -->
                <div class="swiper-slide">
                    <div class="hero-slide">
                        <!-- Slider Image Start -->
                        <div class="hero-slider-image">
                            <img src="images/home1.jpeg" alt="">
                        </div>
                        <!-- Slider Image End -->

                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <!-- Hero Content Start -->
                                    <div class="hero-content">
                                        <!-- Section Title Start -->
                                        <div class="section-title">
                                            <h1 class="text-anime-style-2" data-cursor="-opaque">Bienvenue chez <span>Promo Fruits Bénin</span></h1>
                                            <p class="wow fadeInUp" data-wow-delay="0.2s">Votre référence en jus 100% naturel, pressé avec soin pour une explosion de saveurs et de bienfaits pour votre santé.</p>
                                        </div>
                                        <!-- Section Title End -->
                
                                        <!-- Hero Content Body Start -->
                                        <div class="hero-body wow fadeInUp" data-wow-delay="0.4s">
                                            <!-- Hero Button Start -->
                                            <div class="hero-btn">
                                                <a href="/contact" class="btn-default">rejoignez-nous</a>
                                            </div>
                                            <!-- Hero Button End -->
                                        </div>
                                        <!-- Hero Content Body End -->  
                                    </div>
                                    <!-- Hero Content End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Slide End -->

                <!-- Hero Slide Start -->
                <div class="swiper-slide">
                    <div class="hero-slide">
                        <!-- Slider Image Start -->
                        <div class="hero-slider-image">
                            <img src="images/home2.jpeg" alt="">
                        </div>
                        <!-- Slider Image End -->

                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <!-- Hero Content Start -->
                                    <div class="hero-content">
                                        <!-- Section Title Start -->
                                        <div class="section-title">
                                            <h1 class="text-anime-style-2" data-cursor="-opaque">Chez <span>Promo Fruits Bénin</span></h1>
                                            <p class="wow fadeInUp" data-wow-delay="0.2s">Nos jus sont sans additifs ni conservateurs, préparés avec des ananas soigneusement sélectionnés pour vous offrir une expérience saine et rafraîchissante à chaque gorgée. Fraîcheur garantie !</p>
                                        </div>
                                        <!-- Section Title End -->
                
                                        <!-- Hero Content Body Start -->
                                        <div class="hero-body wow fadeInUp" data-wow-delay="0.4s">
                                            <!-- Hero Button Start -->
                                            <div class="hero-btn">
                                                <a href="/contact" class="btn-default">rejoignez-nous</a>
                                            </div>
                                            <!-- Hero Button End -->
                                        </div>
                                        <!-- Hero Content Body End -->  
                                        
                                    </div>
                                    <!-- Hero Content End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Slide End -->
            </div>
            <div class="hero-pagination"></div>
        </div>        
    </div>
    <!-- Hero Section End -->

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
                                <h2 class="text-anime-style-2" data-cursor="-opaque">Un mot du Directeur Général</h2>
                                <p class="wow fadeInUp" data-wow-delay="0.2s">Bienvenue dans l’avenir que nous travaillons à bâtir ensemble avec nos partenaires agriculteurs. Notre dynamique dans l’univers Promo Fruits est de faire de chaque producteur travaillant fidèlement avec nous, un agriculteur qui vit pleinement de ses efforts.</p>
                            </div>
                            <!-- Section Title End -->

                            <!-- Our Approach Button Start -->
                            <div class="our-approach-btn wow fadeInUp" data-wow-delay="0.4s">
                                <a href="/about" class="btn-default">Lire plus</a>
                            </div>
                            <!-- Our Approach Button End -->

                            <!-- Mission Vision Box Start -->
                            <div class="mission-vision-box wow fadeInUp" data-wow-delay="0.6s">
                                <!-- Mission Start -->
                                <div class="mission-vision-item">
                                    <div class="icon-box">
                                        <img src="images/icon-our-mission.svg" alt="">
                                    </div>

                                    <div class="mission-vision-content">
                                        <h3>Notre mission</h3>
                                        <p id="short-mission"></p>
                                        <span class="readmore-btn" onclick="showPopup('mission')">Lire plus</span>
                                    </div>
                                </div>
                                <!-- Mission End -->

                                <!-- Vision Start -->
                                <div class="mission-vision-item">
                                    <div class="icon-box">
                                        <img src="images/icon-our-vision.svg" alt="">
                                    </div>

                                    <div class="mission-vision-content">
                                        <h3>Notre vision</h3>
                                        <p id="short-vision"></p>
                                        <span class="readmore-btn" onclick="showPopup('vision')">Lire plus</span>
                                    </div>
                                </div>
                                <!-- Vision End -->

                                <!-- Valeurs Start -->
                                <div class="mission-vision-item">
                                    <div class="icon-box">
                                        <img src="images/icon-our-value.svg" alt="">
                                    </div>

                                    <div class="mission-vision-content">
                                        <h3>Nos valeurs</h3>
                                        <p id="short-values"></p>
                                        <span class="readmore-btn" onclick="showPopup('values')">Lire plus</span>
                                    </div>
                                </div>
                                <!-- Valeurs End -->
                            </div>

                            <!-- Popup Section -->
                            <div class="popup-overlay" id="popup-overlay"></div>
                            <div class="popup" id="popup">
                                <button class="close-btn" onclick="closePopup()">X</button>
                                <h3 id="popup-title"></h3>
                                <p id="popup-text"></p>
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
    
   <!-- Why Choose Us Section Start -->
   <div class="why-choose-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Why Choose Images Start -->
                    <div class="why-choose-images">
                        <div class="why-choose-image-1">
                            <figure class="image-anime">
                                <img src="images/why-choose-img-1.jpg" alt="">
                            </figure>
                        </div>
                        <div class="why-choose-image-2">
                            <figure class="image-anime">
                                <img src="images/why-choose-img-2.jpg" alt="">
                            </figure>
                        </div>
                    </div>
                    <!-- Why Choose Images End -->
                </div>
                
                <div class="col-lg-6">
                    <!-- Why Choose Content Start -->
                    <div class="why-choose-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">why choose us</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Why we stand out together</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Our dedication, transparency, and community-driven approach set us apart. partnering with us,programs that create meaningful change.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Why Choose List Start -->
                        <div class="why-choose-list wow fadeInUp" data-wow-delay="0.4s">
                            <ul>
                                <li>community-centered approach</li>
                                <li>transparency and accountability</li>
                                <li>empowerment through partner</li>
                                <li>volunteer and donor engagement</li>
                            </ul>
                        </div>
                        <!-- Why Choose List End -->

                        <!-- Why Choose Counters Start -->
                        <div class="why-choose-counters">
                            <!-- Why Choose Counters Item Start -->
                            <div class="why-choose-counter-item">
                                <h2><span class="counter">25</span>+</h2>
                                <p>Years of experience</p>
                            </div>
                            <!-- Why Choose Counters Item End -->
                            
                            <!-- Why Choose Counters Item Start -->
                            <div class="why-choose-counter-item">
                                <h2><span class="counter">230</span>+</h2>
                                <p>Thousands volunteers</p>
                            </div>
                            <!-- Why Choose Counters Item End -->
                            
                            <!-- Why Choose Counters Item Start -->
                            <div class="why-choose-counter-item">
                                <h2><span class="counter">400</span>+</h2>
                                <p>Word wide office</p>
                            </div>
                            <!-- Why Choose Counters Item End -->
                        </div>
                        <!-- Why Choose Counters End -->
                    </div>
                    <!-- Why Choose Content End -->
                </div>
            </div>
        </div>
   </div>
   <!-- Why Choose Us Section End -->

    <!-- Scrolling Ticker Start -->
    <div class="scrolling-ticker">
        <div class="scrolling-ticker-box">
            <div class="scrolling-content">
                <span><img src="images/icon-asterisk.svg" alt="">Health Support</span>
                <span><img src="images/icon-asterisk.svg" alt="">Education Support</span>
                <span><img src="images/icon-asterisk.svg" alt="">Food Support</span>
                <span><img src="images/icon-asterisk.svg" alt="">Health Support</span>
                <span><img src="images/icon-asterisk.svg" alt="">Education Support</span>
                <span><img src="images/icon-asterisk.svg" alt="">Food Support</span>
            </div>

            <div class="scrolling-content">
                <span><img src="images/icon-asterisk.svg" alt="">Health Support</span>
                <span><img src="images/icon-asterisk.svg" alt="">Education Support</span>
                <span><img src="images/icon-asterisk.svg" alt="">Food Support</span>
                <span><img src="images/icon-asterisk.svg" alt="">Health Support</span>
                <span><img src="images/icon-asterisk.svg" alt="">Education Support</span>
                <span><img src="images/icon-asterisk.svg" alt="">Food Support</span>
            </div>
        </div>
    </div>
	<!-- Scrolling Ticker End -->

    <!-- Our Testimonials Section Start -->
    <div class="our-testimonials">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Testimonials Image Start -->
                    <div class="testimonials-image">
                        <div class="testimonials-img">
                            <figure class="image-anime reveal">
                                <img src="images/temoignage.jpeg" alt="">
                            </figure>
                        </div>

                        <div class="client-review-box">
                            <h2><span class="counter">20</span>k</h2>
                            <p>customer review</p>
                        </div> 
                    </div>
                    <!-- Testimonials Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- Testimonials Content Start -->
                    <div class="testimonials-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">testimonials</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">What people say about us</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Testimonial Slider Start -->
                        <div class="testimonial-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper" data-cursor-text="Drag">
                                    <!-- Testimonial Slide Start -->
                                    <div class="swiper-slide">
                                        <!-- Testimonial Item Start -->
                                        <div class="testimonial-item">
                                            <!-- Testimonial Header Start -->
                                            <div class="testimonial-header">
                                                <!-- Author Info Start -->
                                                <div class="author-info">
                                                    <!-- Author Image Start -->
                                                    <div class="author-image">
                                                        <figure class="image-anime">
                                                            <img src="images/author-1.jpg" alt="">
                                                        </figure>
                                                    </div>    
                                                    <!-- Author Image End -->

                                                    <!-- Author Content Start -->
                                                    <div class="author-content">
                                                        <h3>eleanor pena</h3>
                                                        <p>volunteer coordinator</p>
                                                    </div>
                                                    <!-- Author Content End -->
                                                </div>
                                                <!-- Author Info Author End -->
                                                
                                                <!-- Testimonial Rating Start -->
                                                <div class="testimonial-rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <!-- Testimonial Rating End -->
                                            </div>
                                            <!-- Testimonial Header End -->
                                            
                                            <!-- Testimonial Content Start -->
                                            <div class="testimonial-content">
                                                <p>"Working with [NGO Name] has been a truly inspiring experience. Their dedication to uplifting communities and creating sustainable change is unmatched. Through their programs, I've seen lives transformed and hope restored"</p>
                                            </div>
                                            <!-- Testimonial Content End -->
                                        </div>
                                        <!-- Testimonial Item End -->
                                    </div>
                                    <!-- Testimonial Slide End -->

                                    <!-- Testimonial Slide Start -->
                                    <div class="swiper-slide">
                                        <!-- Testimonial Item Start -->
                                        <div class="testimonial-item">
                                            <!-- Testimonial Header Start -->
                                            <div class="testimonial-header">
                                                <!-- Author Info Start -->
                                                <div class="author-info">
                                                    <!-- Author Image Start -->
                                                    <div class="author-image">
                                                        <figure class="image-anime">
                                                            <img src="images/author-2.jpg" alt="">
                                                        </figure>
                                                    </div>    
                                                    <!-- Author Image End -->

                                                    <!-- Author Content Start -->
                                                    <div class="author-content">
                                                        <h3>michael carter</h3>
                                                        <p>program manager</p>
                                                    </div>
                                                    <!-- Author Content End -->
                                                </div>
                                                <!-- Author Info Author End -->
                                                
                                                <!-- Testimonial Rating Start -->
                                                <div class="testimonial-rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <!-- Testimonial Rating End -->
                                            </div>
                                            <!-- Testimonial Header End -->
                                            
                                            <!-- Testimonial Content Start -->
                                            <div class="testimonial-content">
                                                <p>"Working with [NGO Name] has been a truly inspiring experience. Their dedication to uplifting communities and creating sustainable change is unmatched. Through their programs, I've seen lives transformed and hope restored"</p>
                                            </div>
                                            <!-- Testimonial Content End -->
                                        </div>
                                        <!-- Testimonial Item End -->
                                    </div>
                                    <!-- Testimonial Slide End -->

                                    <!-- Testimonial Slide Start -->
                                    <div class="swiper-slide">
                                        <!-- Testimonial Item Start -->
                                        <div class="testimonial-item">
                                            <!-- Testimonial Header Start -->
                                            <div class="testimonial-header">
                                                <!-- Author Info Start -->
                                                <div class="author-info">
                                                    <!-- Author Image Start -->
                                                    <div class="author-image">
                                                        <figure class="image-anime">
                                                            <img src="images/author-3.jpg" alt="">
                                                        </figure>
                                                    </div>    
                                                    <!-- Author Image End -->

                                                    <!-- Author Content Start -->
                                                    <div class="author-content">
                                                        <h3>sophi martinez</h3>
                                                        <p>communications director</p>
                                                    </div>
                                                    <!-- Author Content End -->
                                                </div>
                                                <!-- Author Info Author End -->
                                                
                                                <!-- Testimonial Rating Start -->
                                                <div class="testimonial-rating">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <!-- Testimonial Rating End -->
                                            </div>
                                            <!-- Testimonial Header End -->
                                            
                                            <!-- Testimonial Content Start -->
                                            <div class="testimonial-content">
                                                <p>"Working with [NGO Name] has been a truly inspiring experience. Their dedication to uplifting communities and creating sustainable change is unmatched. Through their programs, I've seen lives transformed and hope restored"</p>
                                            </div>
                                            <!-- Testimonial Content End -->
                                        </div>
                                        <!-- Testimonial Item End -->
                                    </div>
                                    <!-- Testimonial Slide End -->
                                </div>
                                <div class="testimonial-pagination"></div>
                            </div>
                        </div>
                        <!-- Testimonial Slider End -->
                    </div>
                    <!-- Testimonials Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Testimonials Section End -->

@endsection('content')

@section('scripts')
<script>
    const content = {
        mission: "Promo Fruits s'est donné comme mission de créer un marché d'écoulement rémunérateur pour chaque type de fruit à travers la transformation à grande échelle. Par ailleurs, nous articulons nos efforts pour l'optimisation des rendements à l'hectare afin d'améliorer le revenu des petits producteurs. Pour chaque consommateur de nos produits, nous garantissons un produit sans additif chimique issu d'une agriculture plus saine et durable pour un bien-être parfait.",
        
        vision: "Notre vision est de devenir un acteur incontournable dans la valorisation des fruits locaux en Afrique, en offrant des produits sains et naturels à grande échelle. Nous aspirons à un monde où chaque fruit cultivé trouve sa place dans une chaîne de transformation durable, réduisant ainsi le gaspillage et améliorant les conditions de vie des producteurs.",
        
        values: "Chez Promo Fruits, nous nous engageons à respecter des valeurs fondamentales : la qualité, l’innovation, l’intégrité et le respect de l’environnement. Nous croyons en une production responsable, en une relation de confiance avec nos partenaires et en une alimentation saine et accessible à tous."
    };

    function getShortText(text, limit) {
        // Supprimer la ponctuation et les espaces pour le comptage
        let cleanText = text.replace(/[^a-zA-ZÀ-ÿ]/g, ""); 
        let count = 0, result = "";

        for (let char of text) {
            if (/[a-zA-ZÀ-ÿ]/.test(char)) count++; // Compter uniquement les lettres
            result += char;
            if (count >= limit) break;
        }

        return result + "...";
    }

    document.getElementById("short-mission").innerText = getShortText(content.mission, 40);
    document.getElementById("short-vision").innerText = getShortText(content.vision, 40);
    document.getElementById("short-values").innerText = getShortText(content.values, 40);

    function showPopup(section) {
        document.getElementById("popup-title").innerText = 
            section === "mission" ? "Notre mission" :
            section === "vision" ? "Notre vision" : "Nos valeurs";
            
        document.getElementById("popup-text").innerText = content[section];
        document.getElementById("popup").style.display = "block";
        document.getElementById("popup-overlay").style.display = "block";
    }

    function closePopup() {
        document.getElementById("popup").style.display = "none";
        document.getElementById("popup-overlay").style.display = "none";
    }
</script>

@endsection('scripts')