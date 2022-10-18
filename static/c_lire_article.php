<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?=$news_item['post_titre']?></title>
  <meta content="Group Lualaba Service sarl" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url()?>/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url()?>/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>/favicon-16x16.png">
  <link rel="manifest" href="<?=base_url()?>/site.webmanifest">
  <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=base_url()?>/static/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url()?>/static/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=base_url()?>/static/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?=base_url()?>/static/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?=base_url()?>/static/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <!--link href="static/assets/css/variables.css" rel="stylesheet"-->
  <!-- <link href="static/assets/css/variables-blue.css" rel="stylesheet"> -->
  <!-- <link href="static/assets/css/variables-green.css" rel="stylesheet"> -->
  <!---->
  <link href="<?=base_url()?>/static/assets/css/variables-orange.css" rel="stylesheet">
  <!-- <link href="static/assets/css/variables-purple.css" rel="stylesheet"> -->
  <!-- <link href="static/assets/css/variables-red.css" rel="stylesheet"> -->
  <!-- <link href="static/assets/css/variables-pink.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="<?=base_url()?>/static/assets/css/main.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="<?=base_url()?>" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <!--h1 class="text-warning fw-bold">GLS sarl<span>.</span></h1-->
        <img src="<?=base_url()?>static/assets/img/logo.png">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="<?=base_url()?>#hero-animated">Accueil</a></li>
          <li><a class="nav-link scrollto" href="<?=base_url()?>#about">A Propos</a></li>
          <li><a class="nav-link scrollto" href="<?=base_url()?>#services">Services</a></li>
          <li><a class="nav-link scrollto" href="<?=base_url()?>#portfolio">Gallerie</a></li>
          <li><a class="nav-link scrollto" href="<?=base_url()?>#team">Equipes</a></li>
          <li><a class="nav-link scrollto" href="<?=base_url()?>#recent-blog-posts">Nouvelles</a></li>
          <li><a class="nav-link scrollto" href="<?=base_url()?>#contact">Contact</a></li>
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
          <h2>Nouvelles Detaillés</h2>
          <ol>
            <li><a href="index.html">Accueil</a></li>
            <li><a href="blog.html">Nouvelles</a></li>
            <li>Details</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8">

            <article class="blog-details">

              <div class="post-img" style="overflow:hidden;">
                <img src="<?= base_url('images/news-pic/' . $news_item['post_illustration']) ?>" alt="" class="img-fluid">
              </div>

              <h2 class="title"><?= $news_item['post_titre'] ?></h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#"><strong><?= $news_item['post_owner'] ?></strong></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="<?= $news_item['post_date'] ?>"><?= $news_item['post_date'] ?></time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="#"><?= $news_item['nombre_de_commentaire']; ?> commentaire(s)</a></li>
                </ul>
              </div><!-- End meta top -->

              <div class="content" style="word-break: break-word; overflow:hidden;">
                <?= $news_item['post_content'] ?>
              </div><!-- End post content -->

            </article><!-- End blog post -->

            <div class="comments">

              <h4 class="comments-count"><?= $news_item['nombre_de_commentaire']; ?> commentaire(s)</h4>

              <?php foreach ($post_comment as $key => $comment) : ?>
                <div id="comment-<?= $key ?>" class="comment">
                  <div class="d-flex">
                    <div class="comment-img"><img src="<?= base_url('images/profiles/' . $comment['comment_owner_profile']) ?>" alt=""></div>
                    <div>
                      <h5><a href="#"><?= $comment['comment_owner'] ?></a></h5>
                      <time datetime="<?= $comment['comment_date'] ?>"><?= $comment['comment_date'] ?></time>
                      <p>
                        <?= $comment['comment_content'] ?>
                      </p>
                    </div>
                  </div>
                </div><!-- End comment #<?= $key ?> -->
              <?php endforeach; ?>

              <div class="post-comments-form">
                <div class="section-title mb-30">
                  <h2>Laisser un commentaire</h2>
                </div>

                <?php
                if ($this->auth->loggedin() ? TRUE : FALSE) {
                  $str_titre_url = urlencode($titre);
                ?>
                  <form action="<?= site_url('welcome/lire/' . $str_titre_url) ?>" class='form-horizontal' method="post">
                  <?php echo  '<div class="row">
                                  <div class="col-xl-12">
                                    <textarea id="comments" name="message" cols="30" rows="4" class="form-control" placeholder="Votre commentaire...*"required></textarea>
                                      <button class="btn btn-danger my-3" style="background-color:var(--color-primary)" type="submit">Envoyer</button>
                                  </div>
                                </div>
                              </form>';
                } else {
                  echo '<p>
                          <span class="text-info">Pour repondre vous devez vous connecter</span>
                            <a href="' . base_url() . 'login">ici</a>
                        </p>
                    ';
                }
                  ?>

              </div>

            </div><!-- End blog comments -->

          </div>

          <div class="col-lg-4">
            <div class="sidebar">
              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Recent Posts</h3>
                <div class="mt-3">

                  <?php foreach ($news as $news_item) :
                    $str_titre_url = $news_item['post_titre'];
                  ?>
                    <div class="post-item mt-1">
                      <img src="<?= base_url('images/news-pic/' . $news_item['post_illustration']) ?>" alt="" class="flex-shrink-0">
                      <div>
                        <h4><a href="<?= site_url('welcome/lire/' . urlencode($str_titre_url)); ?>"><?= $news_item['post_titre'] ?></a></h4>
                        <time datetime="<?= $news_item['post_date'] ?>"><?= $news_item['post_date'] ?></time>
                      </div>
                    </div><!-- End recent post item-->

                  <?php endforeach; ?>

                </div>
              </div><!-- End sidebar recent posts-->
            </div><!-- End Blog Sidebar -->
          </div>
        </div>

      </div>
    </section><!-- End Blog Details Section -->

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
  <script src="<?=base_url()?>/static/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url()?>/static/assets/vendor/aos/aos.js"></script>
  <script src="<?=base_url()?>/static/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?=base_url()?>/static/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?=base_url()?>/static/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?=base_url()?>/static/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?=base_url()?>/static/assets/js/main.js"></script>
  <script type="text/javascript">
       <?php if (isset($notification)):?>
            <?=!empty($notification)?"alert(`$notification`)":"console.log(`Hey`)"?>
      <?php endif;?>
</script>

</body>

</html>