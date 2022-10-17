<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Group Lualaba Service sarl</title>
    <meta content="Group Lualaba Service sarl" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="static/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <!--link href="static/assets/css/variables.css" rel="stylesheet"-->
    <!-- <link href="static/assets/css/variables-blue.css" rel="stylesheet"> -->
    <!-- <link href="static/assets/css/variables-green.css" rel="stylesheet"> -->
    <!---->
    <link href="static/assets/css/variables-orange.css" rel="stylesheet">
    <!-- <link href="static/assets/css/variables-purple.css" rel="stylesheet"> -->
    <!-- <link href="static/assets/css/variables-red.css" rel="stylesheet"> -->
    <!-- <link href="static/assets/css/variables-pink.css" rel="stylesheet"> -->

    <!-- Template Main CSS File -->
    <link href="static/assets/css/main.css" rel="stylesheet">
    <style>
        .btn-color {
            background-color: orangered;
            color: #fff;
        }

        .btn-color:hover {
            color: orangered;
            background-color: #fff;
            border-color: orangered;
            border-width: 2px;
        }

        .profile-image-pic {
            height: 200px;
            width: 200px;
            object-fit: cover;
        }

        .cardbody-color {
            background-color: #ebf2fa;
        }

        a {
            text-decoration: none;
        }

        .img-header {
            height: 80px;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center text-dark mt-5">Inscrivez-vous!</h2>
                <div class="text-center mb-5 text-dark"><a href="<?= base_url() ?>"><img class="img-header" src="static/assets/img/logo.png"></a></div>
                <div class="card my-5">
                    <?= form_open('Inscription', ['class' => 'card-body cardbody-color p-lg-5']); ?>
                    <div class="text-center">
                        <img src="https://cdn.pixabay.com/photo/2017/01/10/03/54/avatar-1968236_960_720.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px" alt="profile">
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="text" placeholder="Noms" id="noms" name="noms" v-model="noms" minlength="8" style="border-style: solid; border-color: rgba(0,0,0,.3);">
                    </div>

                    <div class="mb-3">
                        <input class="form-control" type="text" placeholder="Pseudo noms" id="noms" name="pseudo" style="border-style: solid; border-color: rgba(0,0,0,.3);" v-model="pseudo" minlength="8">
                    </div>

                    <div class="mb-3">
                        <input class="form-control" type="email" style="border-style: solid; border-color: rgba(0,0,0,.3);" placeholder="Adress e-mail ou numero" id="inputEmail" name="contacts" v-model="email" novalidate>
                    </div>

                    <div class="mb-3">
                        <input class="form-control" type="password" style="border-style: solid; border-color: rgba(0,0,0,.3);" placeholder="Mot de passe" id="inputPassword1" name="password" v-model="motdepasse1" minlength="6" maxlength="15">
                    </div>

                    <div class="mb-3">
                        <input class="form-control" type="password" style="border-style: solid; border-color: rgba(0,0,0,.3);" placeholder="Reentrez le mot de passe" id="inputPassword2" name="passwordRex" v-model="motdepasse2" minlength="6" maxlength="15">
                    </div>

                    <div class="mb-3">
                        <input class="form-control" type="text" name="fonction" style="border-style: solid; border-color: rgba(0,0,0,.3);" placeholder="Votre job pour le moment">
                    </div>

                    <div class="mb-3">
                        <textarea class="form-control" rows="4" type="" id="inputAbout" style="border-style: solid; border-color: rgba(0,0,0,.3);" name="about">Bref description a propos de vous</textarea>
                    </div>

                    <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100">Se connecter</button></div>
                    <div id="emailHelp" class="form-text text-center mb-5 text-dark">Vous avez déjà un compte? <a href="<?= site_url('login') ?>" class="text-dark fw-bold">Se connecter</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Pills content -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="static/assets/vendor/aos/aos.js"></script>
    <script src="static/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="static/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="static/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="static/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="static/assets/js/main.js"></script>
</body>

<script type="text/javascript">
    <?php if (isset($notification)) : ?>
        <?= !empty($notification) ? "alert(`$notification`)" : "console.log(`Hey`)" ?>
    <?php endif; ?>
</script>

</html>