<link rel="stylesheet" type="text/css" href="<?=css_url('responsive');?>">
<link rel="stylesheet" type="text/css" href="<?=css_url('theme_blog');?>">
<link rel="stylesheet" type="text/css" href="<?=css_url('style_blog');?>">

<body>
	
	    	<div class="container-fluid mb-5">
	    		<div class="fixed-top-style fixed-top">
					<nav class="navbar navbar-expand-xl navbar-dark">
						<a href="<?=site_url();?>" class="navbar-brand">ITIG Don Bosco</a>
						<button class="navbar-toggler" type="button"  data-toggle="collapse" data-target="#navbarText"  aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
							<i class="fas fa-bars"></i>
							<!--span class="navbar-text">MENU</span-->
						</button>
						

						<div class="collapse navbar-collapse" id="navbarText">
							<!--ul class="navbar-nav mr-auto mt-2 mt-lg-0"-->
							<ul class="navbar-nav ml-auto mt-2 mt-lg-0 nav-pills">
								<li class="nav-item ">
									<a href="<?=site_url();?>" class="nav-link "><i class="fa fa-home"></i> ACCUEIL <span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item">
									<a href="<?=site_url().'education';?>" class="nav-link "><i class="fa fa-graduation-cap "></i> EDUCATION</a>
								</li>
								<!--li class="nav-item">
									<a href="<?=site_url().'galerie';?>" class="nav-link"><i class="fa fa-database"></i> GALERIE</a>
								</li-->
								<li class="nav-item">
									<a  href="<?=site_url().'news';?>" class="nav-link active"><i class="fa fa-bullhorn"></i> ARTICLE</a>
								</li>
								<li class="nav-item">
									<a href="<?=site_url().'infrastructure';?>" class="nav-link"><i class="fa fa-ship"></i> INFRASTRUCTURE</a>
								</li>
								<!--li class="nav-item dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-rss-square" ></i> ESPACE AEDB</a>
									<div class="dropdown-menu">
										<a href="#" class="dropdown-item">Repertoire</a>
										<a href="#" class="dropdown-item">S'identifier</a>
									</div>
								</li-->
								<!--li class="nav-item">
									<a href="#" class="nav-link"><i class="fa fa-rss-square" ></i> ESPACE AEDB</a>
								</li>
								<li class="nav-item" > 
									<a href="#" class="nav-link"><i class="fa fa-globe"></i> E-LEARNING</a>
								</li-->
							
								<li class="nav-item dropdown mr-5">
				                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"  role="button" aria-haspopup="true" aria-expanded="false">
				                    	<?php 
				                    	if(isset($username)) :
				                    		echo '<img style="max-height:30px; max-width:50px;" class=" rounded-circle" src="';
				                    		echo  img_url('profiles/'.$img_profile);
				                    		echo '"></img> ';
				                    		echo $username;
				                    	else: echo '<i class="fa  fa-user fa"></i>';
				                    	endif;

				                    	?>
				                    	<b class="caret"></b>
				                    </a>
				                    <ul class="dropdown-menu mt-3  bg-white text-dark mb-1 shadow pt-1 pb-1 users ">  
				                     <?php 
					                    if(isset($username)){
					                      	echo 
					                      	'<li class="nav-item">
					                            <a href="'.site_url().'profile" class="nav-link text-dark"><i class="fa fa-fw fa-user"></i> Profile</a>
					                        </li>
					                        <!--li class="nav-item">
					                            <a href="#" class="nav-link text-dark"><i class="fa fa-fw fa-envelope"></i> forum</a>
					                        </li-->
					                        <li class="nav-item">
					                            <a href="'.site_url().'news" class="nav-link text-dark"><i class="fa fa-fw fa-bullhorn"></i>Infos<a>
					                        </li>
					                        <li class="nav-item divider"></li>
					                        <li class="nav-item">
					                            <a href="'.site_url().'logout" class="nav-link text-dark"><i class="fa fa-fw fa-power-off"></i> Deconnexion</a>
					                        </li>';
					                        if(isset($type)){
					                        	if($type=="admin"){
					                        	echo '
					                        	<li class="nav-item">
					                            	<a href="'.site_url().'Dashboard" class="nav-link text-dark"><i class="fa fa-fw fa-bullhorn"></i> Dashboard</a>
					                        	</li>';
					                        	
					                        	}
					                        	else{
					                        		echo '
					                        		<li class="nav-item">
					                            		<a href="'.site_url().'news" class="nav-link text-dark"><i class="fa fa-fw fa-bullhorn"></i>Articles</a>
					                        		</li>'
					                        	;
					                        	
					                        	}
					                        }
					                      }
					                      else{
					                      	echo'
					                      	 <li class="nav-item">
					                            <a class="nav-link text-primary" href="'.site_url().'news"><i class="fa fa-fw fa-bullhorn"></i> Infos</a>
					                        </li>
					                        <li class="divider"></li>
					                        <li class="nav-item">
					                            <a class="nav-link text-primary" href="'.site_url().'login"><i class="fa fa-fw fa-power-off"></i> connexion</a>
					                        </li>';

					                        
					                      }
									?>
				                  		

				                    </ul>
				                </li>
							</ul>
							
						</div>
					</nav>
				</div>
		    </div>


	<div class="white-color-overlay container-fluid">

	  	<section id="callaction" class="home-section paddingtop-40 pt-5 white-color-overlay">	
	        <div class="container">

				<div class="row">
						<div class="col-md-12">
							<div class="callaction white-color-overlay">
								<div class="row">
									<div class="col-md-8">
										<div class="wow fadeInUp" data-wow-delay="0.1s">
										<div class="cta-text">
										<h1>Etes vous eleve et vous desirez faire un meilleur choix?</h1>
										<p>ITIG vous organise un test d'orientation chaque fois que vous vous inscrivez</p>
										</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="wow lightSpeedIn" data-wow-delay="0.1s">
											<div class="cta-btn">
											<a href="<?=site_url()?>education/#admission" class="btn btn-skin  w-100">consultez le programme</a>	
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
	            </div>
		</section>	
	</div>

	<div class="main-content paddsection">
	    <div class="container">
	      <div class="row justify-content-center">
	        <div class="col-md-8 col-md-offset-2">
	          <div class="row">
	            <div class="container-main single-main">



	              <div class="col-md-12">
	                <div class="block-main mb-30">
	                  <img src="<?= base_url('images/news-pic/'.$news_item['post_illustration'])?>" class="img-responsive" style="max-height: 350px;" alt="reviews2">
	                  <div class="content-main single-post padDiv">
	                    <div class="journal-txt">
	                      <h4><a href="#"><?=$news_item['post_titre']?></a></h4>
	                    </div>
	                    <div class="post-meta">
	                      <ul class="list-unstyled mb-0">
	                        <li class="author">by:<a href="#"><?=$news_item['post_owner']?></a></li>
	                        <li class="date">date:<a href="#"><?=$news_item['post_date']?></a></li>
	                        <li class="commont"><i class="fa fa-heart"></i><a href="#"><?=$news_item['nombre_de_commentaire'];?> <i class="fa fa-comments"></i> Comments</a></li>
	                      </ul>
	                    </div>
	                    <?=$news_item['post_content']?>
	                  </div>
	                </div>
	              </div>


	              <div class="col-md-12">
	                <div class="comments text-left padDiv mb-30">
	                  <div class="entry-comments">
	                    <h6 class="mb-30"><?=$news_item['nombre_de_commentaire'];?> commentaires</h6>
	                    <ul class="entry-comments-list list-unstyled">
	                    	<?php foreach ($post_comment as $comment): ?>
		                      <li>
		                        <div class="entry-comments-item">
		                          <img src="<?=img_url('profiles/'.$comment['comment_owner_profile'])?>" class="entry-comments-avatar" alt="">
		                          <div class="entry-comments-body">
		                            <span class="entry-comments-author"><?=$comment['comment_owner']?></span>
		                            <span><?=$comment['comment_date']?></span>
		                            <p class="mb-10">
		                            <?=$comment['comment_content']?>
		                            </p>
		                          </div>
		                        </div>
		                      </li>
		                     <?php endforeach;?>
	                    </ul>
	                  </div>
	                </div>
	              </div>
	              <div class="col-lg-12">
	                <div class="cmt padDiv">

	                <?php 
	                if (isset($username)){

	                $str_titre_url=str_replace(' ', '_', $titre);
	                ?>
	                <form action="<?=site_url('news/'.$str_titre_url)?>" class ='form-horizontal' method="post">
	                <?php echo  '
	                    <div class="row">
	                        <div class="col-lg-12">
	                          <div class="form-group">
	                            <textarea id="form_message" name="message" class="form-control" placeholder="Message *" style="height: 200px;" required="required"></textarea>
	                          </div>
	                        </div>
	                        <div class="col-lg-12">
	                          <input type="submit" class="btn btn-primary btn-send" value="REPONDRE">
	                        </div>
	                    </div>
	                  </form>';
	              }
	                  else{
	                  	echo '<p>
	                  	<span class="text-warning">Pour repondre vous devez vous connecter</span>
	                  	<a href="'.base_url().'login">ici</a>
	                  	';
	                  }
	                 ?>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>


<div id="journal-blog" class="text-left  paddsections">

    <div class="container-fluid">
      <div class="section-title text-center">
        <h2>Toutes les nouvelles</h2>
      </div>
      <div class="search mt-2  mb-4 ml-1">
		<button class="btn btn-link" id="button-recherche-image">
			<span class="fa fa-search"></span>
		</button>
			<input type="search" id="news_recherche" placeholder="Recherche un article.">
	</div>
    </div>

    <div class="container-fluid blog-container ml-1 mr-n1">

      <div class="journal-block">
        <div class="row">

        <?php foreach ($news as $news_item):

        	$str_titre_url=$news_item['post_titre'];
            $str_titre_url=str_replace(' ', '_', $str_titre_url);
        ?>
          <div class="col-lg-4 col-md-6">
            <div class="journal-info mb-5 pt-5  pl-2 pr-2">

              <a href="<?=site_url('news/'.$str_titre_url); ?>"><img src="<?= img_url('news-pic/'.$news_item['post_illustration']); ?>" class="img-responsive img-thumbnail " alt="img"></a>

              <div class="journal-txt">

                <h4><a href="<?=site_url('news/'.$str_titre_url); ?>" class="text-primary"><?=$news_item['post_titre'];?></a></h4>
                <span class="bagde"><?=$news_item['nombre_de_commentaire']?> <i class="fa fa-comments "></i> commentaires</span>

                <h6 class="text-primary text-left">
                	<?='Par: '?><?=$news_item['post_owner']?><?=' au: '?><?=$news_item['post_date']?>
                </h6>
                
                <p ><?=$news_item['post_caption'];?>
                </p>
                 <p class="mt-2"><a class="text-left btn btn-lg btn-primary" href="<?=site_url('news/'.$str_titre_url);?>">Lire l'article</a></p>

              </div>

            </div>
          </div>
		<?php endforeach; ?>

        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="<?=js_url('bootstrap-notify')?>"></script>

		<script type="text/javascript">
			<?php if ($notification!=false)?>
			$(document).ready(function(){


        	$.notify({
            	icon: 'fa fa-bullhorn',
            	message: "<?=$notification?>"

            },{
                type: 'danger',
                timer: 4000
            });

    		});

			<?php ;?>
</script>