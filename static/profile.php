<?php
$conv = array();
$user_info = json_decode($user_info);

foreach ($user_info as $key => $value) {
    # code...
    $conv = array_merge($conv, array($key => $value));
}

$user_info = $conv;


$validation = $user_info['validation'];
unset($user_info['validation']);

$validation = $validation == 0 ? false : true;

?>
<!doctype html>
<html class="no-js" lang="zxx">

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


    <!-- Place favicon.ico in the root directory -->
    <!-- CSS here -->
    <link rel="stylesheet" href="<?= base_url("static/assets/core/css/bootstrap.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("static/assets/core/css/owl.carousel.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("static/assets/core/css/animate.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("static/assets/core/css/magnific-popup.css") ?>">
    <link rel="stylesheet" href="<?= base_url("static/assets/core/css/themify-icons.css") ?>">
    <link rel="stylesheet" href="<?= base_url("static/assets/core/css/meanmenu.css") ?>">
    <link rel="stylesheet" href="<?= base_url("static/assets/core/css/slick.css") ?>">
    <link rel="stylesheet" href="<?= base_url("static/assets/core/css/default.css") ?>">
    <link rel="stylesheet" href="<?= base_url("static/assets/core/css/style.css?v=1659069208") ?>">
    <link rel="stylesheet" href="<?= base_url("static/assets/core/css/responsive.css") ?>">
    <script src="https://use.fontawesome.com/bd6e00fa3c.js"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url("static/assets/core/css/richtext.min.css") ?>">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">

</head>
<style type="text/css">
    .preloader {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 4343623240;
        width: 100%;
        height: 100%;
        background-image: url(<?= base_url("img/loading.gif") ?>);
        background-repeat: no-repeat;
        background-color: #0081bc;
        background-position: center;
    }


    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400italic);

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

    .hidden {
        display: none;
    }

    .ck-content {
        min-height: 60vh;
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

    @media screen and (max-width: 760px) {
        .btn {
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
        .primary-color {
            font-size: 16px;
        }

        .blockquote {
            font-size: 12px !important;
        }
    }
</style>

<body>

    <div class="preloader"></div>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
    <!-- Add your site or application content here -->
    <!-- header-start -->
    <div id="main" class="hidden">
        <section id="blog">

            <section id="callaction" class="home-section paddingtop-40 pt-5 white-color-overlay">
                <div class="container" id="user_action">

                    <div class="row">
                        <div class="col-xs-12 col-sm-3 ">
                            <span class="profile-picture">
                                <img class="editable img-responsive img-thumbnail mx-auto d-block" alt=" Avatar" id="avatar2" src="<?= base_url('images/profiles/' . $user_info['image']) ?>">
                                <?php unset($user_info['image']) ?>
                                <h6 class="blue text-center">
                                    <span class="middle"><?= ($user_info['Noms']); ?></span>

                                    <?php if ($validation) { ?>
                                        <span class="label label-purple arrowed-in-right">
                                            <i class="text-primary ace-icon fa fa-circle smaller-80 align-middle"></i>
                                        </span>
                                    <?php } else { ?>
                                        <span class="label label-red arrowed-in-right text-danger">
                                            <i class="text-danger ace-icon fa fa-circle smaller-80 align-middle"></i>
                                            <p>(compte pas encore validé, nous y travaillons dans le bref delai)</p>
                                        </span>
                                    <?php } ?>
                                    <span>
                                        <a class="btn btn-info btn-sm m-1" href="<?= site_url("logout") ?>">Deconnexion</a>

                                        <?php if ($this->session->userdata('type') == 'admin') : ?><a class="btn btn-info btn-sm m-1" href="<?= site_url("dashboard") ?>">Cpanel</a><?php endif; ?>
                                    </span>

                                </h6>
                            </span>

                            <div class="space space-4"></div>



                        </div><!-- /.col -->

                        <div class="col-xs-12 table-responsive col-sm-9">

                            <table class="table table-striped table-hover">
                                <tbody>
                                    <?php
                                    foreach ($user_info as $key => $value) {
                                        echo '<tr>';
                                        echo '<th scope="row">';
                                        echo $key;
                                        echo '</th>';
                                        echo '<td>';
                                        echo $value;
                                        echo '</td>';
                                        echo '</tr>';
                                    }

                                    ?>
                                </tbody>
                            </table>


                            <div class="row pb-30">
                                <?php if ($validation) { ?>
                                    <div class="col">
                                        <a href="#profile" class="btn btn-link shadow  mt-2" style="width: 250px; text-align: left;color:#2c3e50;">Editer mon profile</a>
                                        <a href="#post" class="btn btn-link shadow  mt-2 " style="width: 250px; text-align: left; color:#2c3e50;">Publier un article</a>
                                        <a href="<?= base_url() ?>#blog" class="btn btn-link shadow  mt-2" style="width: 250px; text-align: left;color:#2c3e50;">Forum</a>
                                    </div>
                                <?php } else { ?>
                                    <div class="col">
                                        <a class="btn btn-link shadow  mt-2 disabled" style="width: 250px; text-align: left; color:#2c3e50; cursor: not-allowed;">Editer mon profile</a>
                                        <a class="btn btn-link shadow  mt-2 disabled" style="width: 250px; text-align: left; color:#2c3e50; cursor: not-allowed;">Publier un article</a>
                                    </div>
                                <?php } ?>



                            </div>

                        </div>
                    </div><!-- /.row -->
                    <?php if ($validation) : ?>
                        <div class="row mt-5">

                            <div class="col-xs-12 col-sm-12" v-if="edit_profile" id="profile">
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <span class="anchor" id="formUserEdit"></span>
                                        <hr class="my-5">
                                        <!-- form user info -->
                                        <div class="card card-outline-secondary">
                                            <div class="card-header">
                                                <h3 class="mb-0">Editer vos informations</h3>
                                            </div>
                                            <div class="card-body">

                                                <?= form_open('profile/mettre_ajour', ['class' => 'form-signin', 'enctype' => 'multipart/form-data']); ?>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label">Noms</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" type="text" name="noms" value="<?= $user_info['Noms'] ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label">Pseudo</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" type="text" name="pseudo" value="<?= $user_info['pseudo'] ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label">Contacts</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" type="email" name="contacts" value="<?= $user_info['contacts'] ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label">Profession</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" type="text" name="fonction" value="<?= $user_info['profession'] ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label">Decrivez vous!</label>
                                                    <div class="col-lg-9">
                                                        <textarea class="form-control" type="text" name="Apropos"><?= $user_info['Apropos'] ?></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label">Image de profile</label>
                                                    <div class="col-lg-9">
                                                        <input type="file" accept=".jpg, .jpeg, .png" name="profile_pic" size="20">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                                    <div class="col-lg-9">
                                                        <input class="btn btn-secondary" type="reset" value="Annuler" @click="ToggleProfile()">
                                                        <input class="btn btn-primary" type="submit" value="Enregister">
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div><!-- /form user info -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12" v-if="edit_post" id="post">


                                <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        <span class="anchor" id="formContact"></span>
                                        <hr class="my-5">
                                        <!-- form contact -->
                                        <div class="card card-outline-secondary">
                                            <div class="card-header">
                                                <h3 class="mb-0">Soumettre un article</h3>
                                            </div>
                                            <div class="card-body">
                                                <?= form_open('profile/post_update', ['class' => 'form-signin', 'enctype' => 'multipart/form-data']); ?>
                                                <fieldset>
                                                    <label class="mb-0" for="titre">Titre</label>
                                                    <div class="row mb-1">
                                                        <div class="col-lg-12">
                                                            <input class="form-control" id="titre" name="titre" required="" type="text">
                                                        </div>
                                                    </div>
                                                    <label class="mb-0" for="post_caption">Description Breve</label>
                                                    <div class="row mb-1">
                                                        <div class="col-lg-12">
                                                            <input class="form-control" id="post_caption" name="post_caption" required="" type="text">
                                                        </div>
                                                    </div>
                                                    <label class="mb-0" for="contenu">contenu</label>
                                                    <div class="row mb-1">
                                                        <div class="col-lg-12">
                                                            <textarea class="form-control" name="contenu" rows="20">Please write some content</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-1">
                                                        <div class="col-lg-12">
                                                            <input type="file" accept=".jpg, .jpeg, .png" name="illustration" size="20" required>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-secondary btn-lg float-right" type="submit">Soumettre</button>
                                                </fieldset>
                                                </form>
                                            </div>
                                        </div><!-- /form contact -->
                                    </div>
                                    <!--/col-->
                                </div>

                            </div>


                        </div>
                        <div class="space-20"></div>
                    <?php endif; ?>
                </div>
            </section>

            <!-- subscribe end -->
            <!-- footer start -->
    </div>
    <footer id="footer" class="footer">

<div class="footer-legal text-center mt-5">
    <div class="container d-flex flex-column flex-lg-row justify-content-center align-items-center">

        <div class="d-flex flex-column align-items-center">
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
    <!-- footer end -->

    <script src="<?= base_url("static/assets/core/js/vendor/modernizr-3.5.0.min.js") ?>"></script>
    <script src="<?= base_url("static/assets/core/js/vendor/jquery-1.12.4.min.js") ?>"></script>
    <script src="<?= base_url("static/assets/core/js/popper.min.js") ?>"></script>
    <script src="<?= base_url("static/assets/core/js/bootstrap.min.js") ?>"></script>
    <script src="<?= base_url("static/assets/core/js/owl.carousel.min.js") ?>"></script>
    <script src="<?= base_url("static/assets/core/js/isotope.pkgd.min.js") ?>"></script>
    <script src="<?= base_url("static/assets/core/js/one-page-nav-min.js") ?>"></script>
    <script src="<?= base_url("static/assets/core/js/slick.min.js") ?>"></script>
    <script src="<?= base_url("static/assets/core/js/jquery.meanmenu.min.js") ?>"></script>
    <script src="<?= base_url("static/assets/core/js/ajax-form.js") ?>"></script>
    <script src="<?= base_url("static/assets/core/js/wow.min.js") ?>"></script>
    <script src="<?= base_url("static/assets/core/js/jquery.scrollUp.min.js") ?>"></script>
    <script src="<?= base_url("static/assets/core/js/jquery.barfiller.js") ?>"></script>
    <script src="<?= base_url("static/assets/core/js/imagesloaded.pkgd.min.js") ?>"></script>
    <script src="<?= base_url("static/assets/core/js/jquery.counterup.min.js") ?>"></script>
    <script src="<?= base_url("static/assets/core/js/waypoints.min.js") ?>"></script>
    <script src="<?= base_url("static/assets/core/js/jquery.magnific-popup.min.js") ?>"></script>
    <script src="<?= base_url("static/assets/core/js/plugins.js") ?>"></script>
    <script src="<?= base_url("static/assets/core/js/jquery.malihu.PageScroll2id.min.js") ?>"></script>
    <script src="<?= base_url("static/assets/core/js/main.js") ?>"></script>

    <!--script type="text/javascript" src="<?= base_url() ?>js/jquery.richtext.min.js"></script-->
    <!--script src="<?= base_url("modules/ckeditor/build/ckeditor.js") ?>"></script-->

    <!--script src="https://cdn.quilljs.com/1.3.6/quill.js"></script-->

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        <?php if (isset($notification)) : ?>
            <?= !empty($notification) ? "alert(`$notification`)" : "console.log(`Hey`)" ?>
        <?php endif; ?>
    </script>


    <script type="text/javascript" src="<?= js_url('vue'); ?>"></script>

    <!--script type="text/javascript">
			const app = new Vue({
		  	el: '#user_action',
			  	data: {
			  		edit_profile:false,
			  		edit_post:false,
			  		Contribuer:false
			  },

			methods:{
				Togglecontribute : function (){this.Contribuer=!this.Contribuer},
				ToggleProfile : function (){this.edit_profile=!this.edit_profile},
				TogglePost: function(){this.edit_post=!this.edit_post}
				
			}
		});

		</script-->

    <script type="text/javascript" src="<?= js_url('bootstrap-notify') ?>"></script>

    <!--script>
        var quill = new Quill('#content', {
            theme: 'snow'
        });
    </script-->

    <script>
        $(document).ready(function() {
            /*
            ClassicEditor
                .create(document.querySelector('#content'), {
                    licenseKey: '',
                })
                .then(editor => {
                    window.editor = editor;
                })
                .catch(error => {
                    console.error('Oops, something went wrong!');
                    console.error('Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:');
                    console.warn('Build id: vctt56mjro30-pcpgyoiz9zo3');
                    console.error(error);
                });

            /**
                        $('#content').richText({
                                // text formatting
                                bold: true,
                                italic: true,
                                underline: true,

                                // text alignment
                                leftAlign: true,
                                centerAlign: true,
                                rightAlign: true,
                                justify: true,

                                // lists
                                ol: true,
                                ul: true,

                                // title
                                heading: true,

                                // fonts
                                fonts: true,
                                fontList: ["Arial",
                                    "Arial Black",
                                    "Comic Sans MS",
                                    "Courier New",
                                    "Geneva",
                                    "Georgia",
                                    "Helvetica",
                                    "Impact",
                                    "Lucida Console",
                                    "Tahoma",
                                    "Times New Roman",
                                    "Verdana"
                                ],
                                fontColor: true,
                                fontSize: true,

                                // uploads
                                imageUpload: true,
                                fileUpload: true,

                                // media<a href="https://www.jqueryscript.net/tags.php?/video/">video</a>
                                Embed: true,

                                // link
                                urls: true,

                                // tables
                                table: true,

                                // code
                                removeStyles: true,
                                code: true,

                                // colors
                                colors: [],

                                // dropdowns
                                fileHTML: '',
                                imageHTML: '',

                                // translations
                                translations: {
                                    'title': 'Title',
                                    'white': 'White',
                                    'black': 'Black',
                                    'brown': 'Brown',
                                    'beige': 'Beige',
                                    'darkBlue': 'Dark Blue',
                                    'blue': 'Blue',
                                    'lightBlue': 'Light Blue',
                                    'darkRed': 'Dark Red',
                                    'red': 'Red',
                                    'darkGreen': 'Dark Green',
                                    'green': 'Green',
                                    'purple': 'Purple',
                                    'darkTurquois': 'Dark Turquois',
                                    'turquois': 'Turquois',
                                    'darkOrange': 'Dark Orange',
                                    'orange': 'Orange',
                                    'yellow': 'Yellow',
                                    'imageURL': 'Image URL',
                                    'fileURL': 'File URL',
                                    'linkText': 'Link text',
                                    'url': 'URL',
                                    'size': 'Size',
                                    'responsive': '<a href="https://www.jqueryscript.net/tags.php?/Responsive/">Responsive</a>',
                                    'text': 'Text',
                                    'openIn': 'Open in',
                                    'sameTab': 'Same tab',
                                    'newTab': 'New tab',
                                    'align': 'Align',
                                    'left': 'Left',
                                    'justify': 'Justify',
                                    'center': 'Center',
                                    'right': 'Right',
                                    'rows': 'Rows',
                                    'columns': 'Columns',
                                    'add': 'Add',
                                    'pleaseEnterURL': 'Please enter an URL',
                                    'videoURLnotSupported': 'Video URL not supported',
                                    'pleaseSelectImage': 'Please select an image',
                                    'pleaseSelectFile': 'Please select a file',
                                    'bold': 'Bold',
                                    'italic': 'Italic',
                                    'underline': 'Underline',
                                    'alignLeft': 'Align left',
                                    'alignCenter': 'Align centered',
                                    'alignRight': 'Align right',
                                    'addOrderedList': 'Add ordered list',
                                    'addUnorderedList': 'Add unordered list',
                                    'addHeading': 'Add Heading/title',
                                    'addFont': 'Add font',
                                    'addFontColor': 'Add font color',
                                    'addFontSize': 'Add font size',
                                    'addImage': 'Add image',
                                    'addVideo': 'Add video',
                                    'addFile': 'Add file',
                                    'addURL': 'Add URL',
                                    'addTable': 'Add table',
                                    'removeStyles': 'Remove styles',
                                    'code': 'Show HTML code',
                                    'undo': 'Undo',
                                    'redo': 'Redo',
                                    'close': 'Close'
                                },

                                // privacy
                                youtubeCookies: false,

                                // preview
                                preview: true,

                                // placeholder
                                placeholder: '',

                                // dev settings
                                useSingleQuotes: false,
                                height: 0,
                                heightPercentage: 0,
                                id: "",
                                class: "blog_content",
                                useParagraph: false,
                                maxlength: 0,
                                useTabForNext: false,

                                // callback function after init
                                callback: undefined
                            });
                            */
        })
    </script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5ef5c72e9e5f6944229158ea/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

</body>

</html>