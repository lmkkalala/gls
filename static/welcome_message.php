<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ITIG Don Bosco</title>
    <meta name="description" content="L'Institut Technique Industrielle de Goma, une ecole d'excelence">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="<?=base_url("img/logo.png")?>">
    <link rel="apple-touch-icon" href="img/logo.png">
    <meta name="theme-color" content="#0081bc">
  <!-- Chrome, Firefox OS and Opera -->
  <meta name="theme-color" content="#4287f5">
<!-- Windows Phone -->
  <meta name="msapplication-navbutton-color" content="#0081bc">
<!-- iOS Safari -->
  <meta name="apple-mobile-web-app-status-bar-style" content="#0081bc">


    <meta name="title" content="ITIG Don Bosco ">
    <meta name="description" content="L'Institut Technique Industrielle de Goma, une ecole d'excelence">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?=site_url()?>">
    <meta property="og:title" content="ITIG Don Bosco">
    <meta property="og:description" content="L'Institut Technique Industrielle de Goma, une ecole d'excelence">
    <meta property="og:image" content="<?=base_url("img/logo.png")?>">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?=site_url()?>">
    <meta property="twitter:title" content="ITIG Don Bosco ">
    <meta property="twitter:description" content="L'Institut Technique Industrielle de Goma, une ecole d'excelence">
    <meta property="twitter:image" content="<?=base_url("img/logo.png")?>">


    <!-- Place favicon.ico in the root directory -->
    <!-- CSS here -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Macondo&family=Montserrat:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?=base_url("css/bootstrap.min.css")?>">
    <link rel="stylesheet" href="<?=base_url("css/owl.carousel.min.css")?>">
    <link rel="stylesheet" href="<?=base_url("css/animate.min.css")?>">
    <link rel="stylesheet" href="<?=base_url("css/magnific-popup.css")?>">
    <link rel="stylesheet" href="<?=base_url("css/meanmenu.css")?>">
    <link rel="stylesheet" href="<?=base_url("css/slick.css")?>">
    <link rel="stylesheet" href="<?=base_url("css/default.css")?>">
    <link rel="stylesheet" href="<?=base_url("css/style.css?v=1659069208")?>">
    <link rel="stylesheet" href="<?=base_url("css/responsive.css")?>"> 

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">

  </head>
<style type="text/css">
    .preloader {
   position: absolute;
   top: 0;
   left: 0;
   z-index: 4343623240;
   width: 100%;
   height: 100%;
   background-image: url(<?=base_url("img/loading.gif")?>);
   background-repeat: no-repeat; 
   background-color: #0081bc;
   background-position: center;
}

.with-line-left {
    border-left: solid;
    border-width: 10px;
    padding-left: 30px;
    display: block;
    border-left-color: #fdba2d;
}

.mobile_menu a {
    font-size: 12px;
}

#mobile_menu a {
    font-size: 12px;
}

.btn-menu {
    color: #0b1153 !important;
    font-weight: bolder;
    width: 150px;
    background-color: #fbd900;
    text-align: center;
    padding-left: 10px;
    padding-right: 10px;
    display: block;
}

.hidden{
    display: none;
}

@media screen and (min-width: 760px) {
    #logo {
        height: 122px;
        position: absolute;
        z-index: 4343623232;
        border-color: #132b75;
        width: 122px;
        border-radius: 61px;
        border-width: 5px;
        border-style: solid;
    }
    #brand-text {
        display: none;
    }
}
.mobile-menu {
    display:none;
}

@media screen and (max-width: 760px) {
   .btn{
    font-size: 12px;
   }

    #logo {
        height: 90px;
        position: absolute;
        z-index: 4343623232;
        border-color: #132b75;
        width: auto;
        border-radius: 45px;
        border-width: 2px;
        border-style: inset;
    }
    #brand-text {
        display: inline-block;
        margin-left: 100px;
        margin-top: 10px;
        padding: 5px;
        font-size: 15px;
        position: absolute;
    }
    .mobile-menu {
        display:block;
        margin-top: 5px;
        margin-left: 90px;
    }
}

#logo2 {
    display: none;
    height: 122px;
    border-color: #132b75;
    width: 122px;
    border-radius: 61px;
    border-width: 25px;
}

blockquote {
    font-size: 0.8em;
    margin: 50px auto;
    font-family: Open Sans;
    font-style: italic;
    color: #555555;
    padding: .9em 30px .9em 75px;
    border-left: 8px solid #141964;
    line-height: 1.6;
    position: relative;
    background: #EDEDED;
}

blockquote::before {
    font-family: Arial;
    content: "\201C";
    color: #141964;
    font-size: 6em;
    position: absolute;
    left: 10px;
    top: -10px;
}

blockquote::after {
    content: '';
}

blockquote span {
    display: block;
    color: #333333;
    font-style: normal;
    font-weight: bold;
    margin-top: 1em;
}

@media screen and (max-width: 760px) {
    .primary-color{
        font-size: 16px;
    }

    .blockquote{
        font-size: 12px !important;
    }
}

.feature-text p{
    line-height:1.3 !important;
}

#headerPopup{
  width:75%;
  margin:0 auto;
}

#headerPopup iframe{
  width:100%;
  margin:0 auto;
}


.display-none{
    display: none;
}

.apropos{
    font-size: 15px;
    text-transform: uppercase;
}

.quote::after{
    content:"\"";
    font-size:200px;
    font-family: 'Macondo', cursive;
    position:absolute;
    top:10px;
}

.tbl tr{
    border:solid 1px #efefef;
}

.tbl th{
    white-space: nowrap;
    width:90%;
}

.tbl th, .tbl td{
    vertical-align: top;
    text-align:left;
    padding:10px;
}

.team-teacher-info h1{
    text-transform:uppercase;
}
.mobile-menu{
    margin-top:50px;
}

</style>

<body>

    <div  class="preloader"></div>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
    <!-- Add your site or application content here -->
    <!-- header-start -->
<div id="main" class="hidden">
    <header id="home" class="white-bg">
        <div class="header-area">
            <div class="header-top primary-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="header-contact-info d-flex justify-content-center">
                                <div class="header-contact header-contact-email"> <span class="ti-email"></span>
                                    <p class="email-name text-center">direction@itigoma-db.tech <?php if($this->auth->loggedin()):?> - <i class="fa fa-user"></i> <a href="<?=base_url("profile.jsp")?>">Mon compte</a><?php endif;?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="header-social-icon-list">
                                <ul>
                                    <li><a href="#" target="_blank"><span class="ti-facebook"></span></a></li>
                                    <li><a href="https://twitter.com/ItigomaDonBosco?s=09" target="_blank"><span class="ti-twitter-alt"></span></a></li>
                                    <li><a href="#"><span class="ti-google" target="_blank"></span></a></li>
                                    <li><a href="https://instagram.com/itig_updates?igshid=1vcjexyu2d8kv" target="_blank"><span class="ti-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-bottom -->
            <div class="header-bottom-area header-sticky" id="top-header" style="transition: .6s;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <div class="logo">
                                <a href="<?=base_url()?>"> <img src="<?=base_url("img/logo.jpg")?>" id="logo" alt=""> </a> <span id="brand-text">ITIG <?php if($this->auth->loggedin()):?> - <a href="<?=base_url("profile.jsp")?>">Mon compte</a><?php endif;?></span> 
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-6 col-6">
                            <div class="main-menu f-right">
                                <nav id="mobile-menu" style="display: block; font-size: 10px;">
                                    <ul>
                                        <li> <a href="#home">Accueil</a> </li>
                                        <li> <a href="#about">à propos</a> </li>
                                        <li> <a href="#programme">éducation</a> </li>
                                        <li> <a href="#infrastructure">Infrastructure</a> </li>
                                        <li> <a href="#blog">blog</a> </li>
                                        <li> <a href="#contact">Contact</a> </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /end header-bottom -->
        </div>
    </header>
    <!-- header-end -->
    <!-- slider-start -->
    <div class="slider-area pos-relative">
        <div class="slider-active">
            <div class="single-slider slider-height slider-height-3 d-flex align-items-center justify-content-center" style="background-image: url(img/back1.jpg?v=1659044208);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2">
                            <div class="slider-content slider-content-2 slider-content-3 text-center mb-3">
                                <h1 class="white-color f-700" data-animation="fadeInUp" data-delay=".2s">Institut Technique Industrielle de Goma</h1>
                                <p data-animation="fadeInUp" data-delay=".4s">Ecole d'ingénieur par excelence
                                    <br> </p> <a class="btn yellow-bg-btn" target="_blank" rel="m_PageScroll2id" href="https://tawk.to/chat/5ef5c72e9e5f6944229158ea/default" data-animation="fadeInUp" data-delay=".6s">Chater avec nous</a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-height slider-height-3 d-flex align-items-center justify-content-center" style="background-image: url(img/back2.jpg?v=1659044208);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2">
                            <div class="slider-content slider-content-2 slider-content-3 text-center mb-3">
                                <h1 class="white-color f-700" data-animation="fadeInUp" data-delay=".2s">L'éducation Technique <br> Qui innove</h1>
                                <p data-animation="fadeInUp" data-delay=".4s">Avec des matériels à la pointe de la téchnlogie moderne...
                                    <br> faites nous confiance </p> <a class="btn yellow-bg-btn" rel="m_PageScroll2id" href="#infrastructure" data-animation="fadeInUp" data-delay=".6s">Vister notre infrastructure</a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-height slider-height-3 d-flex align-items-center justify-content-center" style="background-image: url(img/back3.jpg?v=1659044208);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2">
                            <div class="slider-content slider-content-2 slider-content-3 text-center mb-3">
                                <h1 class="white-color f-700" data-animation="fadeInUp" data-delay=".2s">ITIG un espace intègrale</h1>
                                <p data-animation="fadeInUp" data-delay=".4s">Chez nous, nous accueillons les élèves avec tout leurs talents</p> <a href="#about" rel="m_PageScroll2id" class="btn yellow-bg-btn" data-animation="fadeInUp" data-delay=".6s">A propos</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider-end -->
    <!-- about start -->
    <div id="about" class="about-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="about-right-img mb-30"> <img style="max-width:100%; border-bottom:solid 10px black; box-shadow: 0px 10px 30px 0px rgba(115, 115, 115, 0.1);" src="<?=base_url("img/head.jpeg?v=1659044208")?>" alt=""> </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7">
                    <div class="about-left mt-10">
                        <div class="about-title-section">
                            <h1 class="primary-color apropos">à PROPOS De l'institut Technique Industrielle de Goma</h1> </div>
                        <div class="about-content about-content-2">
                            <p>
                            Nous sommes une école agréée catholique sous la direction de la communauté salésienne de Don Bosco.
                            Dans notre école, nous offrons une formation complète et en dehors des activités scolaires nous 
                            valorisons les talents des étudiants dans diverses autres disciplines.
                            De par la qualité de l'enseignement proposé à nos élèves, très souvent, diverses récompenses 
                            et témoignages nous parviennent de différentes entreprises justifiant une piste incontournable 
                            pour tous ceux qui souhaiteraient recevoir une formation intégrale dans nos établissements.
                             </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--div class="row">
                <div class="offset-xl-3 col-xl-9 col-md-12 display-none">
                    <blockquote class="blockquote  text-right"> j’ai eu à souhaiter la bienvenue à tous les élèves après plus ou moins 7 mois d’arrêt de cours suite à la pandémie en même temps rendre grâce au seigneur pour nous avoir protégé tout en déplorant la disparition (la mort) de deux de nos élèves, l’un de la 2 HT Elo ( Augustin Sebiguri) et un de la 7e dont le nom n’est pas donné. Ensuite nous avons donné trois mois éléments qui vont nous accompagner pour cette année( mot d’ordre de l’année : la discipline, l’ordre et la ponctualité). L’itig est notre maison commune, nous devons l’aimer, le valoriser et le protéger. Être élève à l’itig c’est plus que être collègues mais c’est être membre d’une une famille. Ensuite la parole a été accordé au directeur de la communauté, le P. François pour son mot d’ouverture comme responsable de l’œuvre. Dans son mot il a rappelé que cette année itig (œuvre salésienne à Goma) <strong>totalisera 40 ans d’existence (1981-2021)</strong> et que tous doivent s’impliquer dans la préparation et la réussite de ces festivités. Enfin il a présenté tous les membres de la communauté salésienne. Enfin la parole a été accordé au directeur des études (Mr Mugabe) qui, à son tour, il a présenté le corps professoral de l’école avec trois nouveaux professeurs qui ont intégré ce corps professoral. <span>Père François,Préfet des études</span> </blockquote>
                </div>
            </div-->
            <div class="row pt-65">
                <div class="col-12 mb-50">
                    <div class="section-title-heading mb-20">
                        <h1 class="primary-color"><strong>OBJECTIFS & MISSION</strong></h1> </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="feature-wrapper mb-30 w-100">
                        <div class="feature-title-heading">
                            <h3>Former des hommes<br> intégres</h3> <span>01</span> </div>
                        <div class="feature-text">
                            <p>Nous ne nous focalisons pas que sur l’aspect scientifique, nous visons une formation intégrale des jeunes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="feature-wrapper mb-30 w-100">
                        <div class="feature-title-heading">
                            <h3>Former des bons<br> chrétiens</h3> <span>02</span> </div>
                        <div class="feature-text">
                            <p>Étant qu’une école Catholique, nous veillons a ce que nos élèves reçoivent les valeurs chrétiennes, en faisant d’eux des hommes qui craignent Dieu</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="feature-wrapper mb-30 w-100">
                        <div class="feature-title-heading">
                            <h3>Former des honnêtes<br> citoyens</h3> <span>03</span> </div>
                        <div class="feature-text">
                            <p>Nos élèves sont l’avenir de notre pays, dans leur éducation, nous veillons à ce qu’ils aiment leur pays et développons en eux un sens patriotique</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="feature-wrapper mb-30 w-100" >
                        <div class="feature-title-heading">
                            <h3>Fournir à la société<br> une main d’ oeuvre<br> de qualité</h3> <span>04</span> </div>
                        <div class="feature-text">
                            <p>Nous veillons également à ce que nos élèves soient dans les meilleurs conditions qui facilitent leur épanouissement en priorisant une formation pratique sur des problèmes réels de notre société.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="feature-wrapper mb-30 w-100">
                        <div class="feature-title-heading">
                            <h3>Donner aux jeunes<br> un cadre d'épanouissement<br> scientifique</h3> <span>05</span> </div>
                        <div class="feature-text">
                            <p>Nos ateliers et nos laboratoires sont équipés des matériels modernes et de qualité pour faire en sorte que nos élèves soient toujours en phase avec l'évolution scientifique</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about end -->
    <!-- courses start -->
    <div id="courses" class="courses-area courses-bg-height gray-bg pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2 col-md-12 offset-md-1">
                    <div class="section-title mb-50 text-center">
                        <div class="section-title-heading mb-20">
                            <h1 class="primary-color"><strong> MOTIVATION</strong></h1> </div>
                        <div class="section-title-para">
                            <p class="quote">ITIG s'est toujours mis au défi de fournir de bons ingénieurs, prêts à servir et à innover dans la technologie !
                                Nous avons toujours cherché à améliorer la qualité de notre enseignement, en créant des partenariats ici et là
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- courses end -->
    <!-- team start -->
    <div id="section-organisee" class="team-area pt-95 pb-70">
        <div class="container" id="section-organisee_div">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="section-title mb-50 text-center">
                        <div class="section-title-heading mb-20">
                            <h1 class="primary-color text-uppercase" id="section_organisee">SECTIONS ORGANISées</h1> </div>
                    </div>
                </div>
            </div>
            <div class="team-list">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="team-wrapper mb-30">
                            <div class="team-thumb"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTg48XTC_yTiMuLl1VKKf3QYBvAuXYKi34C86o9YHZNQUV9Ed5OT7oEt5cpRwqPK3si_k4&usqp=CAU" style="height: 200px; width:auto;" class="mx-auto d-block" alt=""> </div>
                            <div class="team-social-info text-center">
                                <div class="team-social-para">
                                    <p> Ajustage</br> Sous- ensemble de l’automobile.</br> Machines-outils
                                        <br> etc.. </p>
                                </div>
                            </div>
                            <div class="team-teacher-info text-center">
                                <h1>MECANIQUE GéNéRALE</h1>
                                <h2 class="text-info">Niveau A2 (ouverte en 1981)</h2> </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="team-wrapper mb-30">
                            <div class="team-thumb"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTg48XTC_yTiMuLl1VKKf3QYBvAuXYKi34C86o9YHZNQUV9Ed5OT7oEt5cpRwqPK3si_k4&usqp=CAU" style="height: 180px; width: auto;" class="mx-auto d-block" alt=""> </div>
                            <div class="team-social-info text-center">
                                <div class="team-social-para">
                                    <p> Concéption et réalisation des systèmes éléctroniques
                                        <br> Dépannage des appareils éléctroménagers
                                        <br> etc.. </p>
                                </div>
                            </div>
                            <div class="team-teacher-info text-center">
                                <h1>ELéCTRONIQUE GéNérALE</h1>
                                <h2>Niveau A2 (ouverte en 2010)</h2> </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="team-wrapper mb-30">
                            <div class="team-thumb"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTg48XTC_yTiMuLl1VKKf3QYBvAuXYKi34C86o9YHZNQUV9Ed5OT7oEt5cpRwqPK3si_k4&usqp=CAU" style="height: 180px; width: auto;" class="mx-auto d-block" alt=""> </div>
                            <div class="team-social-info text-center">
                                <div class="team-social-para">
                                    <p> Connaissance de l’automobile
                                        <br> Garage
                                        <br> Entretien général de l’automobile
                                        <br> etc.. </p>
                                </div>
                            </div>
                            <div class="team-teacher-info text-center">
                                <h1>MéCANIQUE AUTOMOBILE</h1>
                                <h2>Niveau A2 (ouverte en 2015)</h2> </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="team-wrapper mb-30">
                            <div class="team-thumb"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTg48XTC_yTiMuLl1VKKf3QYBvAuXYKi34C86o9YHZNQUV9Ed5OT7oEt5cpRwqPK3si_k4&usqp=CAU" style="height: 180px; width: auto;" class="mx-auto d-block" alt=""> </div>
                            <div class="team-social-info text-center">
                                <div class="team-social-para">
                                    <p> Installation domestique et industrielle</br> Démarrage et dépannage des machines électriques</br> etc.. </p>
                                </div>
                            </div>
                            <div class="team-teacher-info text-center">
                                <h1>ELéCTRICITé INDUSTRIELLE</h1>
                                <h2 class="text-info">Niveau A2 (ouverte en 1981)</h2> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="home-section nopadding px-3 container">
        <h1 class="text-primary ml-1 mr-1" id="programme">Système Educatif au sein de l'ITIG</h1>
        <div class="row bg-light-white pt-5" id="programme_div">
            <div class="col-sm-6 col-md-6">
                <div class="wow fadeInRight" data-wow-delay="0.1s">
                    <div class="service-box ">
                        <div class="service-desc">
                            <table class="table bg-light-white wow bounceInUp table-striped table-responsive-sm">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Education</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Type</th>
                                        <td>Ecole conventionnée</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tutelle</th>
                                        <td>Ecole conventionnée catholique sous direction de la congrégation Salésienne de Don Bosco</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Langues d'enseignement</th>
                                        <td>Français</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Options</th>
                                        <td>Eléctronique,Eléctricité,Mécanique Générale,Mécanique Automobile</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Admis</th>
                                        <td>Garçons uniquement</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 mb-5">
                <div class="wow fadeInRight" data-wow-delay="0.1s">
                    <div class="service-box clearfix">
                        <div class="service-desc">
                            <h5 class="h-light" style="font-weight:bolder; padding-top: 20px; padding-bottom: 20px;"><a href="">Description</a></h5>
                            <p>le systeme éducatif en république démocratique du congo est régi et établi par le ministère congolais de l'éducation <a href="https://www.eduquepsp.education/">EPST</a></p>
                            <p>Au congo la fin des études secondaires est sanctionnée par l'obtention du diplome d'Etat homologué par le ministre de l'enseignement primaire sécondaire et téchnique </p>
                            <p>Au congo la matière à enseigner est bel et bien définie dans ledit programme national d'enseignement</p>
                        </div>
                    </div>
                </div>
                <div class="wow fadeInRight" data-wow-delay="0.1s">
                    <div class="service-box clearfix">
                        <div class="service-desc">
                            <h5 class="h-light" style="font-weight:bolder; padding-top: 20px; padding-bottom: 20px;" id="Valeurs"><a href="">Facilitation</a></h5>
                            <p>A l'ITIG les élèves sont suivis et encadrés de près.Avec des outils modernes mis à la disposition de tout le corps professoral pour le suivi des élèves </p>
                            <p>Chez nous les élèves observent un modèle de discipline rigoureux, Eduqués pour faire des bons et honnetes citoyens!A l'ITIG nous visons la formation intègrale de l'élève. </p>
                        </div>
                    </div>
                </div>
                <div class="wow fadeInRight" data-wow-delay="0.1s">
                    <div class="service-box clearfix">
                        <div class="service-desc">
                            <h5 style="font-weight:bolder; padding-top: 20px; padding-bottom: 20px;" class="h-light"><a href="">Nos Valeurs</a></h5>
                            <p>ITIG alimente la ville de Goma principalement et la RDC généralement en téchniciens de bonne qualité depuis 40ans+. Ceux ci contribuent au dévélopement intègrale du pays!,celà nous rend fière d'eux</p> les oeuvres de Nos Anciens élèves parlent d'eux memê que ca soit dans le domaine d'adaptation professionnelle ou bien dans la continuation de leurs cursus académique.
                            <p> Nous instruisons pour faire d'eux des <b>BONS TECHNICIENS ET HONNETES CITOYENS</b> <span class="text-primary">
                                                <br><b>I</b>ntègres
                                                <br><b>T</b>ravailleurs
                                                <br><b>I</b>ntruits
                                                <br><b>G</b>énéreux
                                            </span> </p> Vous pouvez telecharger notre synopsis complet ici <a href="<?=base_url("uploads/ressources/HISTORIQUE.pdf")?>" class="btn btn-primary text-white" download>Télécharger</a>
                            <br> Lisez aussi ces différents programmes pour les sections dont nous disposons, programme bien sur revisé et adapté <a href="<?=base_url("uploads/ressources/MECANIQUEGENERALEINDUSTRIELLE.pdf")?>">Mécanique génénerale</a>, <a href="<?=base_url("ploads/ressources/MECANIQUE_AUTOMOBILE.pdf")?>">Mécanique automobile</a>, <a href="<?=base_url("uploads/ressources/ELECTRONIQUE.pdf")?>">Eléctronique </a> et enfin <a href="<?=base_url("uploads/ressources/ELECTRICITE.pdf")?>">Eléctricité</a> </div>
                    </div>
                </div>
                <div class="wow fadeInRight" data-wow-delay="0.1s" id="critere">
                    <div class="service-box clearfix">
                        <div class="service-desc">
                            <h5 style="font-weight:bolder; padding-top: 20px; padding-bottom: 20px;"><a href="">Critères d'admissions</a></h5>
                            <p>l'Institut Technique industrielle de Goma inscrit regulièrement les éleves dans les classes de 7ème, 8ème et 1ère pour le Cycle Technique.
                                <dl>
                                    <dd>Cependant pour être admis il vous faut au moins 63% et vous etes exemptés du test, en deça de celui là vous devez passer un test d'admission</dd>
                                    <dd>Il suffit que vous presentiez un dossier complet et valide des classes précédentes.</dd>
                                    <dd>La période d'inscription est généralement dans la deuxième quinzaine du mois de juillet!</dd>
                                </dl>
                        </div>
                    </div>
                </div>
                <div class="wow fadeInLeft" data-wow-delay="0.1s" id="admission">
                    <div class="service-box clearfix">
                        <div class="service-desc">
                            <h5 class="h-light" style="font-weight:bolder; padding-top: 20px; padding-bottom: 20px;"><a href="">Programme des cours</a></h5>
                            <p>A l'Institut Technique industrielle de Goma, les cours sont dispensés dans des salles de classe comme de coûtume pour les séances théoriques, au laboratoires et ateliers pour les séances pratiques.Les élèves apprenent aussi l'informatique dès le cycle inferieur.
                                <hr>
                                <div class="with-line-left"> 
                                        <table class="tbl">
                                            <tbody>
                                                
                                                <tr>
                                                    <th>7H00-7H20</th>
                                                    <td>Rensemblement et mot du matin</td>
                                                </tr>
                                                <tr>
                                                    <th>7H20-10H40</th>
                                                    <td>Cours (4)</td>
                                                </tr>
                                                <tr>
                                                    <th>10H40-11H00</th>
                                                    <td>Récréation</td>
                                                </tr>
                                                <tr>
                                                    <th>11H00-13H30</th>
                                                    <td>Cours (3)</td>
                                                </tr>
                                                <tr>
                                                    <th> 13H30-14H00</th>
                                                    <td>Pause avant Début étude</td>
                                                </tr>
                                                <tr>
                                                    <th>14H00-16H00</th>
                                                    <td>Etude surveillée pour tous les eleves (sauf mercredi et samedi)</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    <p>Le calendrier scolaire est toujours celui du ministere de l'EPST en vigueur.</p> 
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <div class="video-area" style="background-image: url(img/background-sections.jpg);" id="infrastructure">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="video-wrapper text-center">
                        <div class="video-content">

                            <a href="#headerPopup" id="headerVideoLink" target="_blank" class="btn btn-outline-danger popup-modal"> <img src="<?=base_url("img/video/play_icon.png")?>" alt=""></a>
                            <p> <span>Visiter notre patrimoine <i class="ti ti-hand-point-up"></i></span> 


                                 <div id="headerPopup" class="mfp-hide embed-responsive embed-responsive-21by9">
                                    <iframe width="842" height="484" src="https://www.youtube.com/embed/nmPFnb753UA?list=PLSBTZOVTCN4EnB_lNHhpDaP7TKhwIUkom" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>

                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- video end -->
    <!-- counter start -->
    <div class="counter-area">
        <div class="container pt-90 pb-65">
            <div class="row">
                <div class="col-xl-4 col-lg-3 col-md-4">
                    <div class="couter-wrapper mb-30 text-center"> <img src="<?=base_url("img/counter/counter_icon3.png")?>" alt=""> <span class="counter">1332</span>
                        <h3>Diplomés depuis la fondation</h3> </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="couter-wrapper mb-30 text-center"> <img src="<?=base_url("img/counter/counter_icon4.png")?>" alt=""> <span class="counter">45</span>
                        <h3>Membres du coprs professoral</h3> </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="couter-wrapper mb-30 text-center"> <img src="<?=base_url("img/counter/counter_icon1.png")?>" alt=""> <span>1500+</span>
                        <h3>Elèves inscrits (2021-2022)</h3> </div>
                </div>
                <!--div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="couter-wrapper mb-30 text-center">
                        <img src="img/counter/counter_icon4.png" alt="">
                        <span class="counter">354</span>
                        <h3>Expert Advisors</h3>
                    </div>
                </div--></div>
        </div>
    </div>
    <!-- counter end -->
    <!-- latest_news start -->
    <div id="blog" class="latest_news-area gray-bg pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="section-title mb-50 text-center">
                        <div class="section-title-heading mb-20">
                            <h1 class="primary-color">ITIG Blog et magazine</h1> </div>
                        <div class="section-title-para">
                            <p class="gray-color">Retrouver ici les derniers articles et magazine de l'ITIG, vous pouvez aussi contribuer via l'espace membres <a href="<?=base_url("login")?>">ici</a></p>

                            <p>
                              <a href="welcome/tout" class="btn btn-info">Tout lire</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                        <?php foreach ($news as $news_item):

                          $str_titre_url=$news_item['post_titre'];
                        ?>
                              <div class="col-xl-4 col-lg-4 col-md-6" style="display:flex;">
                                <div class="blog-wrapper mb-30" style="height:100%;">
                                    <div class="blog-thumb mb-25">
                                        <a href="<?=site_url('welcome/lire/'.urlencode($str_titre_url)); ?>">
                                          <img src="<?= base_url('images/news-pic/'.$news_item['post_illustration']); ?>" alt="">
                                        </a> 
                                        <span class="blog-category">news</span> 
                                      </div>
                                      <hr>
                                  <div class="blog-content align-self-end">
                                      <div class="blog-meta"> 
                                        <span><?=$news_item['post_date']?></span> 
                                        <span class="catagory">Par: <strong> <?=$news_item['post_owner']?></strong> <i class="fa fa fa-certificate"></i><i class="fa fa-check-square-o" aria-hidden="true"></i></span> 
                                      </div>
                                      <h5>
                                        <a href="<?=site_url('welcome/lire/'.urlencode($str_titre_url)); ?>"><?=$news_item['post_titre'];?></a>
                                      </h5>
                                      <p class="pb-3"><?=$news_item['post_caption'];?></p>
                                      <div class="read-more-btn" style="position:absolute; bottom:20px;">
                                          <a class="btn btn-info" href="<?=site_url('welcome/lire/'.urlencode($str_titre_url)); ?>">Lire</a>
                                      </div>
                                  </div>
                            </div>
                          </div>

                    <?php endforeach; ?>

            </div>
        </div>
    </div>
    <!-- latest_blog end -->
    <div class="container">
        <div class="row pt-25">
            <div class="col-md-12 ">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15952.468218689406!2d29.2415071!3d-1.6732567!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x81f0cd6d3855bbfa!2sITIG%20-%20Don%20Bosco!5e0!3m2!1sen!2scd!4v1593167702419!5m2!1sen!2scd" width="100%" height="550" frameborder="0" style="border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0"> </iframe>
            </div>
        </div>
    </div>
    <!-- brand start -->
    <div class="brand-area pt-80 pt-80 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="brand-list">
                        <ul>
                            <li><img src="https://delorenzoglobal.com/image/logo.png" style="max-width: 150px;" alt=""></li>
                            <li><img src="http://donbosco-rdc.org/img/1618132552.png" style="height: auto; max-width: 150px;" alt=""></li>
                            <li><img src="https://actec-ong.org/wp-content/uploads/2019/03/becas-para-las-ninas-logos-actec.jpg" style="height: 100px; max-width: 150px;" alt=""></li>
                            <li><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUllVA4zRUWw6Va1x7sOXlPvbbxjkccjumRg&usqp=CAU" style="height: 100px;max-width: 150px;" alt=""></li>
                            <li><img src="https://industrialautomationindia.in/images/content/products/1590989451Tektronix.jpg" style="height: 100px;max-width: 150px;" alt=""></li>
                            <li><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9XeOmasY5gdimBB_ObhkJuq9E4G2t_VrHEw&usqp=CAU" style="height: 100px; max-width: 150px;" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand end -->
    <!-- subscribe start -->
    <div class="subscribe-area">
        <div class="container">
            <div class="subscribe-box">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-12">
                        <div class="row">
                            <div class="col-xl-7 col-lg-7 col-md-8">
                                <div class="subscribe-text">
                                    <h1>Suggestion anonyme</h1> <span>Deposez nous toute suggestion anonyme, cela nous permettra d'ameliorer nos points defailants</span> </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-4">
                                <div class="email-submit-form">
                                    <div class="subscribe-form">
                                        <form action="<?=base_url('welcome')?>" method="POST">
                                            <input placeholder="contenu..." type="text" name="message" required>
                                            <button type="submit" name="envoyer" value="Envoyer" class="btn btn-info d-block mt-5" style="border-color: #141964; border-style: solid;">Envoyer</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- subscribe end -->
    <!-- footer start -->
    <footer id="contact">
        <div class="footer-area primary-bg pt-150">
            <div class="container">
                <div class="footer-top pb-35">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="footer-widget mb-30">
                                <div class="footer-logo"> <img src="<?=base_url("img/logo.jpg")?>" id="logo2" alt=""> </div>
                                <div class="footer-para">
                                    <p> Nous sommes une école convientionnée Catholique sous la direction de la communauté salésienne de Don Bosco.
Dans notre école, nous offrons une formation complète et en dehors des activités scolaires, nous valorisons les talents que possèdent les élèves dans diverses autres disciplines.</p>
                                </div>
                                <div class="footer-socila-icon"> <span>Suivez nous</span>
                                    <div class="footer-social-icon-list">
                                        <ul>
                                            
                                    <li><a href="#" target="_blank"><span class="ti-facebook"></span></a></li>
                                    <li><a href="https://twitter.com/ItigomaDonBosco?s=09" target="_blank"><span class="ti-twitter-alt"></span></a></li>
                                    <li><a href="#"><span class="ti-google" target="_blank"></span></a></li>
                                    <li><a href="https://instagram.com/itig_updates?igshid=1vcjexyu2d8kv" target="_blank"><span class="ti-instagram"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="footer-widget mb-30">
                                <div class="footer-heading">
                                    <h1>Liens rapides</h1> </div>
                                <div class="clearfix">
                                    <ul>
                                        <li><a href="#" rel="m_PageScroll2id">Donations</a></li>
                                        <li><a href="<?=site_url('login')?>" rel="m_PageScroll2id">Espace des membres</a></li>
                                        <li><a href="#blog" rel="m_PageScroll2id">News</a></li>
                                        <li><a href="#about" rel="m_PageScroll2id">About</a></li>
                                        <li><a href="#critere" rel="m_PageScroll2id">Aide inscription</a></li>
                                        <li><a href="#admission" rel="m_PageScroll2id">Horaire des cours</a></li>
                                        <li><a href="http://www.salesien.com">La communaute salesienne</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4  col-md-6">
                            <div class="footer-widget mb-30">
                                <div class="footer-heading">
                                    <h1>Contact Us</h1> </div>
                                <div class="footer-contact-list">
                                    <!--div class="single-footer-contact-info"> <span class="fa fa-phone "></span> <span class="footer-contact-list-text"> +243 849 885 978</span>
                                        <p> <span class="fa fa-phone "></span> <span class="footer-contact-list-text">+243 978 887 987</span> </div-->
                                    <div class="single-footer-contact-info"> <span class="ti-email "></span> <span class="footer-contact-list-text">direction@itigoma-db.tech</span> </div>
                                    <div class="single-footer-contact-info"> <span class="ti-location-pin"></span> <span class="footer-contact-list-text">Goma, Karisimbi, Q.Kahembe ,Avenue Bahizi, Rue Aeroport</span> <span class="footer-contact-list-text"><a href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15952.468218689406!2d29.2415071!3d-1.6732567!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x81f0cd6d3855bbfa!2sITIG%20-%20Don%20Bosco!5e0!3m2!1sen!2scd!4v1593167702419!5m2!1sen!2scd">Direction maps <i class="fa fa-street-view"></i></a></span> </div>
                                </div>
                                <div class="opening-time"> <span>Ouvert du</span> <span class="opening-date">
                                        <i class="fa fa-calendar-minus fa-inverse"></i> Lundi au Samedi, de 07H:00 à 16H:00
                                    </span> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom pt-25 pb-25">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="sub-footer">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-6 col-lg-6">
                                                <div class="wow fadeInLeft" data-wow-delay="0.1s">
                                                    <div class="text-center visible-sm">
                                                        <p>&copy;Copyright <?=Date("Y")?> - ITIG. Tous droit reservé.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-6">
                                                <div class="wow fadeInRight" data-wow-delay="0.1s">
                                                    <div class="text-center">
                                                        <p class="btn btn-primary border shadow"><a href="" class="text-small">The </a>AEDB IT Team</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </footer>
</div>
    <!-- footer end -->
    <!-- JS here -->
    <script src="<?=base_url("js/vendor/modernizr-3.5.0.min.js")?>"></script>
    <script src="<?=base_url("js/vendor/jquery-1.12.4.min.js")?>"></script>
    <script src="<?=base_url("js/popper.min.js")?>"></script>
    <script src="<?=base_url("js/bootstrap.min.js")?>"></script>
    <script src="<?=base_url("js/owl.carousel.min.js")?>"></script>
    <script src="<?=base_url("js/isotope.pkgd.min.js")?>"></script>
    <script src="<?=base_url("js/one-page-nav-min.js")?>"></script>
    <script src="<?=base_url("js/slick.min.js")?>"></script>
    <script src="<?=base_url("js/jquery.meanmenu.min.js")?>"></script>
    <script src="<?=base_url("js/ajax-form.js")?>"></script>
    <script src="<?=base_url("js/wow.min.js")?>"></script>
    <script src="<?=base_url("js/jquery.scrollUp.min.js")?>"></script>
    <script src="<?=base_url("js/jquery.barfiller.js")?>"></script>
    <script src="<?=base_url("js/imagesloaded.pkgd.min.js")?>"></script>
    <script src="<?=base_url("js/jquery.counterup.min.js")?>"></script>
    <script src="<?=base_url("js/waypoints.min.js")?>"></script>
    <script src="<?=base_url("js/jquery.magnific-popup.min.js")?>"></script>
    <script src="<?=base_url("js/plugins.js")?>"></script>
    <script src="<?=base_url("js/jquery.malihu.PageScroll2id.min.js")?>"></script>
    <script src="<?=base_url("js/main.js")?>"></script>


<script type="text/javascript">
       <?php if ($notification!=false)
            echo 'alert("'.$notification.'")';
        ?>
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ef5c72e9e5f6944229158ea/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();

   $( document ).ready(function() {
         $('#headerVideoLink').magnificPopup({
          type:'inline',
          midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
        });
          
        });
</script>
<!--End of Tawk.to Script-->


</body>

</html>
