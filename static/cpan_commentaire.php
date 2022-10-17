

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Primary Meta Tags -->
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

</style>


  <title>ITIG Don Bosco</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=css_url('dashboard/bootstrap.3.min');?>" rel="stylesheet" >
    <link href="<?=css_url('dashboard/dashboard_style');?>" rel="stylesheet" >

 <script src="https://use.fontawesome.com/bd6e00fa3c.js"></script>

</head>

<body>

    <div  class="preloader"></div>


    <div id="main">
        <div id="wrapper">

        <!-- Navigation -->
       <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              <a class="navbar-brand" style ="color: white; font-weight: bolder; letter-spacing: 4px; text-transform: uppercase;" href="<?=site_url('dashboard')?>">Admin Control Panel</a>
            </div>
            <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
                <!--li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>administration</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Requete d'acceptation compte</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>administration</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Before yesterday at 4:32 PM</p>
                                        <p>Requete de publication article.</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Elvis Ansima</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:37 PM</p>
                                        <p>Quelques idees sur le color scheme du site</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Lire  Tous</a>
                        </li>
                    </ul>
                </li-->
                
                <li class="dropdown">

                                <li class="nav-item dropdown">
                                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                        <i class="fa  fa-user"></i> 
                                        <?php if(isset($username)) echo $username;?>
                                        <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu pt-1 pl-2 white-color-blur mb-1">  
                                    <?php 
                                        if(isset($username)){
                                            echo 
                                            '<li>
                                                <a href="'.site_url().'Profile"><i class="fa fa-fw fa-user"></i> Profile</a>
                                            </li>
                                            <!--li>
                                                <a href="#"><i class="fa fa-fw fa-envelope"></i> forum</a>
                                            </li-->
                                            <li>
                                                <a href="'.site_url().'welcome/tout"><i class="fa fa-fw fa-bullhorn"></i> Infos<a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="'.site_url().'logout"><i class="fa fa-fw fa-power-off"></i> Deconnexion</a>
                                            </li>';
                                          }
                                          else{
                                            echo'
                                             <li>
                                                <a href="'.site_url().'welcome/tout"><i class="fa fa-fw fa-bullhorn"></i> Infos<a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="'.site_url().'login"><i class="fa fa-fw fa-power-off"></i> Connexion</a>
                                            </li>';
                                          }
                                    ?>
                                        }
                                    
                                </ul>
                            </li>
                    </li>


                <li>
                    <a href="<?=site_url();?>"><i class="fa fa-fw fa-arrow-alt-circle-left"></i>Retour au site</a>
                </li>

            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li >
                        <a href="<?=site_url()?>dashboard"><i class="fa fa-fw fa-home"></i> Dashboard</a>
                    </li>
                    <!--li>
                        <a href="#"><i class="fa fa-fw fa-table"></i> Management du contenu</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-bullhorn"></i> Fil des activites</a>
                    </li-->
                    <li class="current">
                        <a href="<?=site_url()?>dashboard/cpan_commentaire"><i class="fa fa-fw fa-comments"></i> commentaire</a>
                    </li>
                     <li>
                        <a href="<?=site_url()?>dashboard/cpan_articles"><i class="fa fa-fw fa-edit"></i> Articles</a>
                    </li>
                    <!--li>
                        <a href="#"><i class="fa fa-fw fa-chart-line"></i> Insight et statiques</a>
                    </li-->

                    <li>
                        <a href="<?=site_url()?>dashboard/cpan_profiles"><i class="fa fa-users fa-edit"></i> Profiles</a>
                    </li>

                    <!--li>
                        <a href="#"><i class="fa fa-fw fa-database"></i> Medias</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-cog"></i> Configurations<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Base de donnees</a>
                            </li>
                            <li>
                                <a href="#">Environement et backend</a>
                            </li>
                        </ul>
                    </li-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Rapport statistique</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard/commentaire
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Aimeriez vous activer les notifications importantes par e-mail?</strong> essayez! <a href="#" class="alert-link">Notifications</a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
  <div class="row">
                       <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comment-alt fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?=$new_users_number?></div>
                                        <div><br>Nouveaux membres (Compte crée mais pas encore validé)</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Gestion des comptes</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-info fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?=$new_post_number?></div>
                                        <div>Nouveaux Articles (Non encore confirmés pour etre publiés)</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Voir plus</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-layer-group fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?=$post_number?></div>
                                        <div>Articles au total brut(confirmés et/ou non encore publiquement visible)</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Voir plus</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user-edit fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?=$users_number?></div>
                                        <div>Membres au total brut(pour les utilisateurs confirmés et non encore confirmés)</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Gestion des comptes</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
                
            </div>
            <!-- /.container-fluid -->
            <div class="container-fluid blog-container ml-1 mr-n1">

              <div class="journal-block">
                <div class="row">



                <?php 

                if(empty($comment)){
                    echo '<h1 class="text-danger">Aucun commentaire</h1>';
                }

                foreach ($comment as $comment_item):

                ?>
                  <div class="col-md-12 col-md-6 m-5">
                    <div class="pb-5 pt-5" style="margin-bottom:20px; background-color:#efefef !important; padding:20px; border-radius:10px;">

                      <div class="journal-txt">
                        <?php if($comment_item['validation'] == '0'):
                               echo '
                               <div>
                               <h4><a class="text-danger "> Titulaire: '.$comment_item['comment_owner'].' , en date du '.$comment_item['comment_date'].'<h5>(commentaire pas encore validé)</h5></a></h4>

                                <h4 class="text-danger"> Contenu : '.$comment_item['comment_content'].'</h4>
                               </div>';
                               echo '<a href="'.site_url('dashboard/cpan_commentaire/Supprimer/'.$comment_item['comment_id']).'" class="btn btn-danger btn-sm">Supprimer</a> ';
                                echo '<a href="'.site_url('dashboard/cpan_commentaire/valider/'.$comment_item['comment_id']).'" class="btn btn-primary btn-sm">Valider</a><br>';

                                else: 
                                echo '
                                   <div>
                                   <h4><a class="text-primary "> Titulaire: '.$comment_item['comment_owner'].' , en date du '.$comment_item['comment_date'].'<h5>(commentaire  validé)<h5></a></h4>

                                    <h4 class="text-primary">Contenu :'.$comment_item['comment_content'].'</h4>
                                   </div>';

                                 echo '<a href="'.site_url('dashboard/cpan_commentaire/Supprimer/'.$comment_item['comment_id']).'" class="btn btn-danger btn-sm">Supprimer</a> ';
                                endif;
                            ?>

                      </div>

                    </div>
                  </div>
                <?php endforeach; ?>

                </div>
              </div>
            </div>

        </div>
        <!-- /#page-wrapper -->

    </div>
</div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?=js_url('jquery');?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=js_url('bootstrap.3.min');?>"></script>


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
    <script src="<?=base_url("js/main.js")?>"?></script>

</body>

</html>
