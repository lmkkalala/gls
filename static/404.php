
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>page not found</title>
</head>
<body>
	<section class="page_404">
	<div class="container-fluid">
		<div class="row">	
		<div class="col-sm-12  text-center">
		<img src="<?=base_url()?>assets/gif/404.gif">
		
		<div class="contant_box_404 pt-5">
		<h4 class="h2">
		Il semble que vous etes perdu
		</h4>
		
		<p>Cette page n'est pas disponible</p>
		
		<a href="<?=base_url()?>" class="link_404">Retour à l'accueil</a>
	</div>
		</div>
		</div>
	</div>
</section>


</body>
</html>
<style type="text/css">
	
/*======================
    404 page
=======================*/


@import url('https://fonts.googleapis.com/css2?family=Macondo&family=Montserrat:wght@300&display=swap');
.page_404{ 
	padding:5% 25%; 
	background:#fff; 
	font-family: 'Montserrat','Montserrat', sans-serif;
}

.page_404  img{ width:100%;}

.four_zero_four_bg{
 
 	background-image: url(<?=base_url()?>assets/gif/404.gif);
    height: 50vh;
    background-position: center;
    width: auto;
    display: block;
    width: 50vw;
 }
 
 
 .four_zero_four_bg h1{
 font-size:80px;
 }
 
  .four_zero_four_bg h3{
			 font-size:80px;
			 }
			 
			 .link_404{	
	text-decoration: none;		 
	color: #fff!important;
    padding: 10px 20px;
    background: #0081bc;
    margin: 20px 0;
    display: inline-block;

}

</style>