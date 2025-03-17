@extends('layouts.site.app')
@section('title')
  <title> Promo Fruits-Bénin | Qui sommes-nous </title>
@endsection('title')

@section('styles')
    <style>
        .service-entry p {
            text-align: justify;
            text-justify: inter-word;
            word-spacing: 2px;
            line-height: 1.6;
        }

        .mission-vision-content p {
            display: inline;
        }

        .read-more-btn {
            color: #e67e22; 
            cursor: pointer;
            text-decoration: underline;
            margin-left: 5px;
            font-weight: bold;
            transition: color 0.3s ease-in-out;
        }

        .read-more-btn:hover {
            color: #d35400; 
        }

        .popup {
            display: none;
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            background: #fffaf0; 
            padding: 20px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            z-index: 1000;
            width: 90%;
            max-width: 500px;
            text-align: center;
        }

        .popup h3 {
            margin-top: 0;
            color: #27ae60; 
        }

        .popup-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4); 
            z-index: 999;
        }

        .close-btn {
            background: #2ecc71; 
            color: white;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
            border-radius: 20px;
            font-weight: bold;
            transition: background 0.3s ease-in-out;
        }

        .close-btn:hover {
            background: #27ae60; 
        }
        

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

    <!-- Page Service Single Start -->
    <div class="page-service-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Page Single Sidebar Start -->
                    <div class="page-single-sidebar">
                        <!-- Page Sidebar Category List Start -->
                        <div class="page-sidebar-catagery-list wow fadeInUp">
                            
                            <!-- Sidebar CTA Box Start -->
                            <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.2s">
                                <!-- Cta Content Start -->
                                <div class="icon-box">
                                    <img src="images/icon-cta.svg" alt="">
                                </div>
                                
                                <!-- Sidebar CTA Content Start -->
                                <div class="sidebar-cta-content">
                                <p><strong>Promo Fruits Bénin</strong> en un mot</p>

                                </div>
                                <!-- Sidebar CTA Content End -->
                                
                                <!-- Sidebar CTA Button Start -->
                                <div class="sidebar-cta-btn">
                                    <a href="/contact" class="btn-default">Contactez-nous</a>
                                </div>
                                <!-- Sidebar CTA Button End -->
                            </div>
                            <!-- Sidebar CTA Box End -->
                        </div>
                        <!-- Page Sidebar Category List End -->

                    </div>
                    <!-- Page Single Sidebar End -->
                </div>

                <div class="col-lg-8">
                    <!-- Service Single Content Start -->
                    <div class="service-single-contemt">

                        <!-- Service Entry Start -->
                        <div class="service-entry">
                            <p class="wow fadeInUp">Bienvenue dans l’avenir que nous travaillons à bâtir ensemble avec nos partenaires agriculteurs. Notre dynamique dans l’univers <strong>Promo Fruits</strong> est de faire de chaque producteur travaillant fidèlement avec nous, un agriculteur qui vit pleinement de ses efforts. Dans notre vison de partenariat, nos décisions et perspectives sont prises pour assurer un futur où ensemble et graduellement nous bâtissons un avenir prospère. Pour Promo Fruit chaque producteur ayant choisi de travailler avec nous est un allié, et pour cela nous mettons tout en œuvre pour lui assurer une récolte saine et conséquente. Nos techniciens sont présents aux côtés de chaque producteur sur le terrain pour veiller à une saison de récolte fructueuse et nous demeurons à votre écoute à chaque étape de croissances jusqu’à ce que nous réceptionnons les fruits de votre production dans nos entrepôts. Dans notre vision, vous êtes un précieux partenaire.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Nous sommes la marque du fruit pressé et pour tenir cette ligne de conduite, <strong>Promo Fruits</strong> veille à vos côtés à obtenir des fruits mûrs et juteux. <strong>Promo Fruits</strong> ayant à cœur de faire bénéficier le maximum de producteurs, nous œuvrons à travers des producteurs agriculteurs sérieux fédérer en association afin de leur rendre toutes les ressources nécessaires à la production disponible. Nos années d’expériences et la multitude de possibilités que nous offrons particulièrement à chaque producteur agriculteur fait de nous le meilleur garant pour une saison réussie. Nous en avons l’expérience, la méthode et les moyens dont vous voyez les photos.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.3s">Voici les explications de notre Directeur Général sur comment devenir un producteur agriculteur affilié à <strong>Promo Fruit</strong>, les lignes de notre engagement envers vous et les obligations que nous attendons dans notre relation mutuelle de croissance.</p>

                        </div>
                        <!-- Service Entry End -->

                    </div>
                    <!-- Service Single Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Service Single End -->


    <!-- Page Contact Us Start -->
    <div class="our-approach">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Contact Info Box Start -->
                    <div class="contact-info-box">
                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="images/icon-our-mission.svg" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>Notre mission</h3>
                                <p id="short-mission"></p>
                                <span class="readmore-btn" onclick="showPopup('mission')">Lire plus</span>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="images/icon-our-vision.svg" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>Notre vision</h3>
                                <p id="short-vision"></p>
                                <span class="readmore-btn" onclick="showPopup('vision')">Lire plus</span>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="images/icon-our-value.svg" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>Nos valeurs</h3>
                                <p id="short-values"></p>
                                <span class="readmore-btn" onclick="showPopup('values')">Lire plus</span>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->
                         <!-- Popup Section -->
                        <div class="popup-overlay" id="popup-overlay"></div>
                        <div class="popup" id="popup">
                            <button class="close-btn" onclick="closePopup()">X</button>
                            <h3 id="popup-title"></h3>
                            <p id="popup-text"></p>
                        </div>
                            <!-- Mission Vision Box End -->
                    </div>
                    <!-- Contact Info Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us End -->

    <!-- Début de la section Notre Équipe -->
    <div class="our-team">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Début du titre de la section -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Notre équipe</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Les cœurs dévoués derrière notre mission</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Rencontrez les individus passionnés qui portent notre mission, engagés à créer un changement significatif et à bâtir un avenir meilleur pour tous.</p>
                    </div>
                    <!-- Fin du titre de la section -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-item wow fadeInUp">
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="images/team.jpeg" alt="Photo de Chris tchrist">
                            </figure>
                        </div>    
                        <div class="team-content">
                            <h3>Chris Tchrist</h3>
                            <p>Directeur</p>
                        </div>
                        <div class="team-social-icon">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="images/team.jpeg" alt="Photo de Sophie Sophie">
                            </figure>
                        </div>    
                        <div class="team-content">
                            <h3>Sophie Sophie</h3>
                            <p>Directrice communication</p>
                        </div>
                        <div class="team-social-icon">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="images/team.jpeg" alt="Photo de Roméo Roméo">
                            </figure>
                        </div>    
                        <div class="team-content">
                            <h3>Roméo Roméo</h3>
                            <p>Ingénieur web</p>
                        </div>
                        <div class="team-social-icon">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-image">
                            <figure class="image-anime">
                                <img src="images/team.jpeg" alt="Photo de Alix Alix">
                            </figure>
                        </div>    
                        <div class="team-content">
                            <h3>Alix Alix</h3>
                            <p>Community manager</p>
                        </div>
                        <div class="team-social-icon">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de la section Notre Équipe -->


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