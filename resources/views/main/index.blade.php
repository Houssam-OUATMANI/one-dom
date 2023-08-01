@extends('layout')
@php
    $title =  'OneDom Agence de domiciliation';
@endphp
@section('title', $title)

@section('body')
    @include('main.navbar')
    <section class="banner-part">
        <div class="banner-bg">
            <div class="container">
                <img class="circle-shape" src="images/assets/circle.png" alt="circle">
                <img class="star-shape" src="images/assets/star.png" alt="star">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="banner-img">
                            <img src="{{asset('images/banner/hero.png')}}" alt="hero">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="banner-content">
                            <ul class="banner-icon">
                                <li><a class="icon icon-inline" href="https://www.facebook.com/CGFdeveloppement" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="icon icon-inline" href="https://www.youtube.com/channel/UCguVVGHFCj4pycekeTuFiUQ" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                <li><a class="icon icon-inline" href="https://www.linkedin.com/company/onedom/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a class="icon icon-inline" href="https://www.instagram.com/cgfdeveloppement/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                            <div class="banner-text">
                                <span>Bienvenue</span>
                                <h1>Votre cabinet de conseils en gestion d'entreprises.</h1>
                                <p>Vous proposant ses services pour la création, le conseil et la gestion de sociétés, social, fiscal, domiciliation commercial et bien plus.</p>
                            </div>
                            <div class="banner-btn duel-btn">
                                <a class="btn btn-inline" href="#about_us">
                                    <i class="fas fa-arrows-alt"></i>
                                    <span>Lire plus</span>
                                </a>
                                <a class="btn btn-inline" href="#our_offers">
                                    <i class="fas fa-boxes"></i>
                                    <span>Nos offres</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section resume-part" id="about_us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <p>One<span>dom</span></p>
                        <h2>Quelque informations à propos de nous</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="resume-cate-btn">
                        <li>
                            <button class="cate-btn active" onclick="filter('about-part')">
                                <i class="fas fa-user"></i>
                                <span>A propos</span>
                            </button>
                        </li>
                        <li>
                            <button class="cate-btn" onclick="filter('exper-part')">
                                <i class="fas fa-address-card"></i>
                                <span>Compétences</span>
                            </button>
                        </li>
                        <li>
                            <button class="cate-btn" onclick="filter('edu-part')">
                                <i class="fas fa-user-graduate"></i>
                                <span>Nos valeurs</span>
                            </button>
                        </li>
                        <li>
                            <button class="cate-btn" onclick="filter('refer-part')">
                                <i class="fas fa-users"></i>
                                <span>Partenaires</span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section about-part cate-active">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="about-summery">
                        <h3>ONE<span style="color: #FFB001">DOM</span> est votre cabinet de conseils en gestion d'entreprises.</h3>
                        <p style="text-align: justify;">Vous proposant ses services pour la création, le conseil et la gestion de sociétés, social, fiscal, domiciliation commercial et bien plus.
                            Vous accompagnez et vous conseiller dans la gestion financière et le développement de votre entreprise, vous aider pour l'aboutissement de vos projets tels sont nos objectifs.
                            Que vous souhaitez réaliser un audit interne ou une étude de marché, mettre en place des outils de gestion et de pilotage de coûts ou monter un business plan, l'équipe ONEDOM s'occupe de tout.
                            En relation étroite avec nos clients, nous accompagnons les dirigeants des chefs PMS, TPE, PMI, dans la gestion stratégique de leurs entreprises et écarter toutes contraintes liées à l'intendance.
                            Vous trouverez tous les détails de nos tarifs, de nos offres ci-après.</p>
                    </div>
                    <div class="about-list">
                        <ul>
                            <li>
                                <h6 style="font-size: 14px !important;">Tel:</h6>
                                <p style="font-size: 14px !important;">(+33) 9 53 95 88 17</p>
                            </li>


                        </ul>
                        <ul>
                            <li>
                                <h6 style="font-size: 14px !important;">Siège social:</h6>
                                <p style="font-size: 14px !important;">8-10 rue des blès, La plaine saint-denis</p>
                            </li>


                        </ul>
                    </div>
                    <div class="about-btn duel-btn">
                        <a class="btn btn-inline" href="images/plaquette_not_finished_yet.pdf" download="">
                            <i class="fas fa-download"></i>
                            <span>NOTRE PLAQUETTE</span>
                        </a>
                        <a class="btn btn-inline" href="#contact_us">
                            <i class="fas fa-headset"></i>
                            <span>CONTACTEZ NOUS</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-img">
                        <img src="images/banner/6913.jpg" alt="about">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
               EXPERIENCE PART START
   =======================================-->
    <section class="section exper-part cate-active">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="resume-card">
                        <div class="resume-content">
                            <div class="resume-icon">
                                <i class="fas fa-toolbox"></i>
                            </div>
                            <div class="resume-meta">
                                <h4 style="position: relative; top: 17px;">NOS ATOUTS</h4>
                            </div>
                        </div>
                        <div class="resume-text mt-3">
                            <p>Nous mettons en œuvre toutes nos compétences pour déployer les solutions les plus optimales pour nos clients.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="resume-card">
                        <div class="resume-content">
                            <div class="resume-icon">
                                <i class="fas fa-running"></i>
                            </div>
                            <div class="resume-meta">
                                <h4 style="position: relative; top: 17px;">NOS MOTIVATIONS</h4>
                            </div>
                        </div>
                        <div class="resume-text mt-3">
                            <p>Faire Vivre aux clients une expérience inoubliable. L’enjeu ? Se démarquer de la concurrence. Concentrez-vous sur vos points forts et laisser nous le reste.. </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-6">
                    <div class="resume-card">
                        <div class="resume-content">
                            <div class="resume-icon">
                                <i class="fas fa-handshake"></i>
                            </div>
                            <div class="resume-meta">
                                <h4 style="position: relative; top: 17px;">NOTRE APPROCHE CLIENT</h4>
                            </div>
                        </div>
                        <div class="resume-text mt-3">
                            <p> La satisfaction de la clientèle est au centre de nos préoccupations, nous accompagnons nos clients afin de répondre de manière efficace a tous leurs besoins.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="resume-card">
                        <div class="resume-content">
                            <div class="resume-icon">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <div class="resume-meta">
                                <h4 style="position: relative; top: 17px;">NOS QUALIFICATIONS</h4>
                            </div>
                        </div>
                        <div class="resume-text mt-3">
                            <p>Nous mettons à disposition de nos clients des équipes pluridisciplinaires pour les accompagner dans tous leurs projets.</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--=====================================
                EXPERIENCE PART END
    =======================================-->


    <!--=====================================
                EDUCATION PART START
    =======================================-->
    <section class="section edu-part cate-active">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="resume-card">
                        <div class="resume-content">
                            <div class="resume-icon">
                                <i class="fas fa-brain"></i>
                            </div>
                            <div class="resume-meta">
                                <h4 style="position: relative; top: 17px;">INNOVATION</h4>
                            </div>
                        </div>
                        <div class="resume-text mt-3">
                            <p>l'équipe ONEDOM est en permanence à la recherche de nouvelles approches et de nouvelles méthodes pour une constante amélioration des services. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="resume-card">
                        <div class="resume-content">
                            <div class="resume-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="resume-meta">
                                <h4 style="position: relative; top: 17px;">PROFESSIONNALISME</h4>
                            </div>
                        </div>
                        <div class="resume-text mt-3">
                            <p>ONEDOM garantit : fiabilité, honnêteté et intégrité. Nous nous engageons à offrir un travail de qualité.<br><br></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="resume-card">
                        <div class="resume-content">
                            <div class="resume-icon">
                                <i class="fas fa-assistive-listening-systems"></i>
                            </div>
                            <div class="resume-meta">
                                <h4 style="position: relative; top: 17px;">A L'ECOUTE</h4>
                            </div>
                        </div>
                        <div class="resume-text mt-3">
                            <p>ONEDOM est à votre écoute afin d'identifier vos attentes et vous permettre un meilleur apport.<br><br></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="resume-card">
                        <div class="resume-content">
                            <div class="resume-icon">
                                <i class="fas fa-handshake"></i>
                            </div>
                            <div class="resume-meta">
                                <h4 style="position: relative; top: 17px;">TRANSPARENCE</h4>
                            </div>
                        </div>
                        <div class="resume-text mt-3">
                            <p>ONEDOM assure une transmission complète des informations stratégiques et mutualise le partage entre le client et l'équipe. </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--=====================================
                EDUCATION PART END
    =======================================-->


    <!--=====================================
                REFERENCE PART START
    =======================================-->
    <section class="section refer-part cate-active">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="refer-card">
                        <div class="refer-img">
                            <img src="images/reference/ilycode2.jpg" alt="reference">
                        </div>
                        <div class="refer-content">
                            <h4>ILYCODE</h4>
                            <p>Développement Web<span>Mobile & Logiciel</span></p>
                            <ul class="refer-contact">
                                <li><a class="icon icon-inline" href="https://ilycode.com" target="_blank"><i class="fab fa-chrome"></i></a></li>
                                <li><a class="icon icon-inline" href="https://ilycode.com/#contactlink" target="_blank"><i class="fas fa-envelope"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="refer-card">
                        <div class="refer-img">
                            <img src="images/reference/afribos.png" alt="reference">
                        </div>
                        <div class="refer-content">
                            <h4>AFRIBOS</h4>
                            <p><span>Economie & Stratégie</span></p>
                            <ul class="refer-contact">
                                <li><a class="icon icon-inline" href="https://afribos.com/" target="_blank"><i class="fab fa-chrome"></i></a></li>
                                <li><a class="icon icon-inline" href="https://afribos.com/afribos/" target="_blank"><i class="fas fa-envelope"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                REFERENCE PART END
    =======================================-->


    <!--=====================================
                SERVICE PART START
    =======================================-->
    <section class="section service-part" id="my_services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <p>Nos <span>services</span></p>
                        <h2>Nous n'arrêtons jamais de construire votre future</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <h3>01</h3>
                        <span class="flaticon-seo"></span>
                        <i class="flaticon-seo"></i>
                        <h4>Domiciliation d'entreprise</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card service-ghape">
                        <h3>02</h3>
                        <span class="flaticon-development"></span>
                        <i class="flaticon-development"></i>
                        <h4>Création</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <h3>03</h3>
                        <span class="flaticon-smartphone"></span>
                        <i class="flaticon-smartphone"></i>
                        <h4>Formalités juridique</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <h3>04</h3>
                        <span class="flaticon-artwork"></span>
                        <i class="flaticon-artwork"></i>
                        <h4>Formation</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card service-ghape">
                        <h3>05</h3>
                        <span class="flaticon-computer"></span>
                        <i class="flaticon-computer"></i>
                        <h4>Assistance & conseil</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <h3>06</h3>
                        <span class="flaticon-promotion"></span>
                        <i class="flaticon-promotion"></i>
                        <h4>GRH & social</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                SERVICE PART END
    =======================================-->


    <!--=====================================
                CODING PART START
    =======================================-->
    <!--=====================================
            CODING PART END
=======================================-->


    <!--=====================================
                PORTFOLIO PART START
    =======================================-->
    <!--=====================================
            PORTFOLIO PART END
=======================================-->


    <!--=====================================
                SKILLS PART START
    =======================================-->
    <!--=====================================
            SKILLS PART END
=======================================-->


    <!--=====================================
                DISCUSS PART START
    =======================================-->
    <section class="discuss-part">
        <div class="container">
            <div class="discuss-oly">
                <div class="row discuss-bg">
                    <div class="col-md-7 col-lg-8">
                        <div class="discuss-content">
                            <h3>Discutons votre idée</h3>
                            <p>Nous vous aidons à concevoir votre projet de A à Z</p>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <div class="discuss-btn">
                            <a class="btn btn-inline" href="#contact_us">
                                <i class="fas fa-paper-plane"></i>
                                <span>Contactez nous</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                DISCUSS PART END
    =======================================-->


    <!--=====================================
                COUNTER PART START
    =======================================-->
    <section class="counter-part">
        <div class="counter-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-4">
                        <div class="counter-card count-1">
                            <i class="flaticon-project-management"></i>
                            <div class="counter-info">
                                <h3><span class="counter-number">122</span>+</h3>
                                <p>Projets réalisés</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="counter-card count-2">
                            <i class="flaticon-handshake"></i>
                            <div class="counter-info">
                                <h3><span class="counter-number">60</span>+</h3>
                                <p>Clients satisfaits</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="counter-card count-3">
                            <i class="flaticon-hand-gesture"></i>
                            <div class="counter-info">
                                <h3><span class="counter-number">98</span>%</h3>
                                <p>Feedback positifs</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                COUNTER PART END
    =======================================-->


    <!--=====================================
                PRICING PART START
    =======================================-->
    <section class="section pricing-part" id="our_offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <p>Nos <span>packs</span></p>
                        <h2>Sans engagement et sans caution</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="pricing-card">
                        <div class="pricing-money">
                            <h3>PackOne</h3>
                            <h4>17.50€ <span style="font-size: 20px; position: relative; top: -30px; color: grey">HT</span></h4>
                            <p>Par mois</p>
                        </div>
                        <ul class="pricing-list">
                            <li>Domiciliation commerciale</li>
                            <li>Tri & mise à disposition</li>
                            <li>Notification</li>

                        </ul>
                        <div class="pricing-btn">
                            <a class="btn btn-inline" href="#contact_us">
                                <i class="fas fa-paper-plane"></i>
                                <span>Contactez nous</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="pricing-card pricing-recom">
                        <div class="pricing-money">
                            <h3>PackPro</h3>
                            <h4>25.00€<span style="font-size: 20px; position: relative; top: -30px; color: grey">HT</span></h4>
                            <p>par mois</p>
                        </div>
                        <ul class="pricing-list">
                            <li>Domiciliation commerciale</li>
                            <li>Tri & mise à disposition</li>
                            <li>Notification</li>
                            <li>Réexpédition de courriers<span style="position: relative; top: -3px;">**</span></li>
                        </ul>
                        <div class="pricing-btn">
                            <a class="btn btn-inline" href="#contact_us">
                                <i class="fas fa-paper-plane"></i>
                                <span>CONTACTEZ NOUS</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="pricing-card">
                        <div class="pricing-money">
                            <h3>PackPrem</h3>
                            <h4>34.00€<span style="font-size: 20px; position: relative; top: -30px; color: grey">HT</span></h4>
                            <p>par mois</p>
                        </div>
                        <ul class="pricing-list">
                            <li>Domiciliation commerciale</li>
                            <li>Tri & mise à disposition</li>
                            <li>Notification</li>
                            <li>Réexpédition de courriers<span style="position: relative; top: -3px;">**</span></li>
                            <li>Scan du courriers</li>
                            <li>Logiciel de facturation</li>
                        </ul>
                        <div class="pricing-btn">
                            <a class="btn btn-inline" href="#contact_us">
                                <i class="fas fa-paper-plane"></i>
                                <span>Contactez nous</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                PRICING PART END
    =======================================-->


    <!--=====================================
                FAQ PART START
    =======================================-->
    <!--=====================================
            FAQ PART END
=======================================-->


    <!--=====================================
                TESTIMONIAL PART START
    =======================================-->
    <!--=====================================
            TESTIMONIAL PART END
=======================================-->


    <!--=====================================
                BLOG PART START
    =======================================-->
    <!--=====================================
            BLOG PART END
=======================================-->


    <!--=====================================
                CONTACT PART START
    =======================================-->
    <section class="section contact-part" id="contact_us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <p>contactez <span>nous</span></p>
                        <h2>Toute l'équipe Onedom est à votre écoute</h2>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-md-4 col-lg-4">
                    <div class="contact-address">
                        <div class="address-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="address-text">
                            <h4>TEL</h4>
                            <p>+33 9 53 95 88 17 </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="contact-address">
                        <div class="address-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="address-text">
                            <h4>email</h4>
                            <p>contact@one-dom.fr</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="contact-address">
                        <div class="address-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="address-text">
                            <h4>Localisation</h4>
                            <p>8-10 Rue des blès, 93210, la plaine st-denis</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-7">
                    <div class="col-sm-12 alert contact_success_alert_js alert-success " role="alert" style="display:none ; border-radius: 25px 25px;">
                        <p class="contact_success_alert_text_js">Merci, votre message a été envoyé. </p>
                    </div>
                @include('shared.contact_form')
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="contact-img">
                        <img src="{{asset('images/banner/contact.png')}}" alt="contact">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                CONTACT PART END
    =======================================-->


    <!--=====================================
                FOOTER PART START
    =======================================-->
    <section class="section footer-part">
        <div class="container">
            <div class="" style="margin-left: auto; margin-right: auto; width: 9.1em; position: relative; top: -30px;">
                <img src="{{asset('images/domicil.jpg')}}" width="150px;">
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-logo">
                        <a href="#"><img src="{{asset('images/onedom.png')}}" alt="logo"></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <ul class="footer-text">
                        <li><h6>&copy; Copyright - <span>{{date('Y')}}</span></h6></li>
                        <li><h6>Tous droits réservés - CGF Developpement</h6></li>
                        <li><h6>Fait avec 💕 par <a target="_blank" href="https://fr.linkedin.com/in/houssam-ouatmani">Houssam</a> & <a target="_blank" href="https://ilycode.com">ilycode</a></h6></li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
@endsection
