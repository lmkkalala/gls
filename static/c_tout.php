<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>GLS | Nouvelles</title>
    <meta content="Group Lualaba Service sarl" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/favicon-16x16.png">
    <link rel="manifest" href="<?= base_url() ?>/site.webmanifest">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>/static/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/static/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>/static/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url() ?>/static/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/static/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <!--link href="static/assets/css/variables.css" rel="stylesheet"-->
    <!-- <link href="static/assets/css/variables-blue.css" rel="stylesheet"> -->
    <!-- <link href="static/assets/css/variables-green.css" rel="stylesheet"> -->
    <!---->
    <link href="<?= base_url() ?>/static/assets/css/variables-orange.css" rel="stylesheet">
    <!-- <link href="static/assets/css/variables-purple.css" rel="stylesheet"> -->
    <!-- <link href="static/assets/css/variables-red.css" rel="stylesheet"> -->
    <!-- <link href="static/assets/css/variables-pink.css" rel="stylesheet"> -->

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>/static/assets/css/main.css" rel="stylesheet">

</head>

<body>
    <header id="header" class="header fixed-top" data-scrollto-offset="0">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <a href="<?= base_url() ?>" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <!--h1 class="text-warning fw-bold">GLS sarl<span>.</span></h1-->
                <img src="<?= base_url() ?>static/assets/img/logo.png">
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="<?= base_url() ?>#hero-animated">Accueil</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url() ?>#about">A Propos</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url() ?>#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url() ?>#portfolio">Gallerie</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url() ?>#team">Equipes</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url() ?>#recent-blog-posts">Nouvelles</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url() ?>#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle d-none"></i>
            </nav><!-- .navbar -->

            <a class="btn-getstarted scrollto" href="index.html#about">Bienvenu</a>

        </div>
    </header><!-- End Header -->
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Les nouvelles</h2>
                    <ol>
                        <li><a href="index.html">Accueil</a></li>
                        <li>Nouvelles</li>
                    </ol>
                </div>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row g-5">

                    <div class="col-lg-8">

                        <div class="row gy-4 posts-list">
                            <?php foreach ($news as $news_item) : $str_titre_url = urlencode($news_item['post_titre']); ?>
                                <div class="col-lg-6">
                                    <article class="d-flex flex-column">

                                        <div class="post-img">
                                            <img src="<?= base_url('images/news-pic/' . $news_item['post_illustration']); ?>" alt="" class="img-fluid">
                                        </div>

                                        <h2 class="title">
                                            <a href="<?= site_url('welcome/lire/' . $str_titre_url); ?>"><?= $news_item['post_titre']; ?></a>
                                        </h2>

                                        <div class="content">
                                            <p>
                                                <?= $news_item['post_caption']; ?>
                                            </p>
                                        </div>

                                        <div class="read-more mt-auto align-self-end">
                                            <a href="<?= site_url('welcome/lire/' . $str_titre_url); ?>">Lire plus</a>
                                        </div>

                                    </article>
                                </div><!-- End post list item -->
                            <?php endforeach; ?>

                        </div><!-- End blog posts list -->
                    </div>
                </div>
            </div>
        </section><!-- End Blog Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-legal text-center">
            <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

                <div class="d-flex flex-column align-items-center align-items-lg-start">
                    <div class="copyright">
                        &copy; Copyright <strong><span><a href="http://ctlcosarl.com" target="_blank" rel="noopener noreferrer">CTLCO SARL</a></span></strong>. Tous les droits reservés.
                    </div>
                    <div class="credits"></div>
                </div>

                <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>

            </div>
        </div>

    </footer><!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="<?= base_url() ?>/static/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/static/assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url() ?>/static/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url() ?>/static/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url() ?>/static/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url() ?>/static/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>/static/assets/js/main.js"></script>
    <script type="text/javascript">
        <?php if (isset($notification)) : ?>
            <?= !empty($notification) ? "alert(`$notification`)" : "console.log(`Hey`)" ?>
        <?php endif; ?>
    </script>

</body>

</html>