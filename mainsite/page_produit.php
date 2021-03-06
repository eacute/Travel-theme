<?php include './data/theme_front-data.php' ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<meta charset="utf-8">
	<title>Travel Theme v1</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

	<link rel="icon" type="image/png" href="../webroot/img/favicon.ico" />

	<link type="text/css" href="../webroot/css/bootstrap.css" rel="stylesheet">
	<link type="text/css" href="../webroot/css/slideshow-core.css" rel="stylesheet">
	<link type="text/css" href="../webroot/css/ays.css" rel="stylesheet">
	<!--[if IE 8]>
		<link type="text/css" href="../webroot/css/ie8.css" rel="stylesheet">
	<![endif]-->
	<link type="text/css" href="../webroot/css/print.css" rel="stylesheet" media="print">
		<link type="text/css" href="../webroot/css/colors/rouge.css" rel="stylesheet">

	<script type="text/javascript" src="../webroot/js/theme_front-socle/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="../webroot/js/theme_front-socle/jquery-ui-effect.min.js"></script>
	<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4f6e9cb7474031f4"></script>
	<script type="text/javascript" src="../webroot/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../webroot/js/jquery.placeholder.min.js"></script>
	<script type="text/javascript" src="../webroot/js/jquery.slideshow.pack.js"></script>
	<script type="text/javascript" src="../webroot/js/default.js"></script>
</head>

<body class="product-page single sidebar-right">
	<div id="header" class="clearfix">
		<div class="container">
			<div id="logo-box" class="pull-left"><a title="" href="#"><img src="../webroot/img/logo-travel.png" alt="COMPANY NAME"/></a></div>
			<div class="colwrapper pull-right clearfix">
				<div id="contact-box">
					<p class="ttre">Contactez-nous</p>
					<p class="desc">au 01.34.53.90.75 ou <a title="" href="#">par email</a></p>
				</div>
				<div id="share-box">
					<p class="ttre">Retrouvez-nous</p>
					<div class="addthis_toolbox addthis_16x16_style addthis_default_style clearfix">
						<a title="Facebook" class="addthis_button_facebook_follow" addthis:userid="YOUR-PROFILE"></a>
						<a title="Twitter" class="addthis_button_twitter_follow" addthis:userid="YOUR-USERNAME"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<div id="main-nav" class="navbar alternate navbar-top">
		<div class="navbar-inner">
			<div class="container">
				<ul class="nav">
					<li class="active"><a title="" href="#labels">Labels</a></li>
					<li class="active dropdown">
						<a title="" class="dropdown-toggle" data-toggle="dropdown" href="#">Navigation</a>
						<ul class="dropdown-menu">
							<li class=""><a title="" href="#navs">Nav, tabs, pills</a></li>
							<li class=""><a title="" href="#navbar">Navbar</a></li>
						</ul>
					</li>
					<li><a title="" href="#badges">Badges</a></li>
					<li><a title="" href="#misc">Miscellaneous</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
			  <li><a title="" href="#">Accueil </a> <span class="divider">&rsaquo;</span></li>
			  <li><a title="" href="#">Produits et services </a> <span class="divider">&rsaquo;</span></li>
			  <li><a title="" href="#">Type produit </a> <span class="divider">&rsaquo;</span></li>
			  <li class="active">Fiche</li>
			</ul>
		</div>
	</div>
	

	<div id="teaser_zone" class="clearfix">
		<div class="container">
		
				<div class="listing_controls top clearfix">
					<div class="ordering_wrap pull-left">
						<div class="order-controls btn-group">
							<a title="Retour à la liste"  href="javascript:;" class="nav-link">Revenir à la liste</a>
						</div>
						<div class="order-controls btn-group">
							<a title="Annonce précédente"  href="javascript:;" class="nav-link"><span>&lsaquo;</span> Produit précédent</a>
						</div>
						<div class="order-controls btn-group">
							<a title="Annonce suivante"  href="javascript:;" class="nav-link">Produit suivant <span>&rsaquo;</span></a>
						</div>
					</div>	 
			
				</div>
				
				
				<div class="detail_produit detail">
				
					<div id="top_detail" class="clearfix">
						<div class="print_btn clearfix"><a class="btn btn-primary" href="javascript:;"><span>Imprimer</span><i class="icon-print"></i></a></div>
						<div id="social-box" class="pull-right">
							<!-- AddThis Button BEGIN -->
							<div class="addthis_toolbox addthis_default_style ">
								<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
								<a class="addthis_button_tweet"></a>
								<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
								<a class="addthis_button_email"></a>
							</div>
							<!-- AddThis Button END -->
						</div>
					</div>
			
					<div class="highlight clearfix">
		                <div class="price_holder"><p class="price"><span class="old">12 €</span>  <span>10 €</span></p></div>
		                <h2 class="cat"><i class="icon-promo"></i><span>excursion</span></h2>
						<h1 class="page_ttre">Lorem ipsum vera etsem nec mergitur sodil questa</h1>
		                <div class="btn_contact"><a data-toggle="modal" title="Contactez le vendeur"  class="btn btn-xlarge  btn-primary" href="modal.php">Nous contacter</a></div>
		            </div>

					<div id="carousel-detail" class="sliderkit">
						
						<div class="sliderkit-panels">
							<div class="sliderkit-panel">
			    				<img src="http://lorempixel.com/640/480/city" alt="">
							</div>
							<div class="sliderkit-panel">
			    				<img src="http://lorempixel.com/640/480/city" alt="">
							</div>
							<div class="sliderkit-panel">
			    				<img src="http://lorempixel.com/640/480/city" alt="">
							</div>
							<div class="sliderkit-panel">
			    				<img src="http://lorempixel.com/640/480/city" alt="">
				    		</div>
							<div class="sliderkit-panel">
			    				<img src="http://lorempixel.com/640/480/city" alt="">
							</div>
						</div>
						
						<div class="sliderkit-nav clearfix">
							<div class="sliderkit-btn sliderkit-nav-btn sliderkit-nav-prev"><a href="#" title="Scroll to the left">&lsaquo;</a></div>
							<div class="sliderkit-nav-clip">
								<ul class="clearfix">
									<li><span class="arrow up"></span><a href="#" title="Photo sample 01"><img src="http://lorempixel.com/100/75/city" alt=""></a></li>
									<li><span class="arrow up"></span><a href="#" title="Photo sample 02"><img src="http://lorempixel.com/100/75/city" alt=""></a></li>
									<li><span class="arrow up"></span><a href="#" title="Photo sample 03"><img src="http://lorempixel.com/100/75/city" alt=""></a></li>
									<li><span class="arrow up"></span><a href="#" title="Photo sample 04"><img src="http://lorempixel.com/100/75/city" alt=""></a></li>
									<li><span class="arrow up"></span><a href="#" title="Photo sample 05"><img src="http://lorempixel.com/100/75/city" alt=""></a></li>
								</ul>
							</div>
							<div class="sliderkit-btn sliderkit-nav-btn sliderkit-nav-next"><a href="#" title="Scroll to the right">&rsaquo;</a></div>
						</div>
						
					</div>

					<ul class="images-video clearfix">
						<li><a class="btn btn-primary active" href="#"><span class="arrow up"></span> Images</a></li>
						<li><a class="btn btn-primary" href="#"><span class="arrow up"></span> Videos</a></li>
					</ul>
				</div>

		</div>
	</div>


	<div id="contentzone" class="clearfix">
	  	<div  class="container">
	  	
		   	<div id="content">

					<div id="box_desc" class="clearfix">
					
						<div id="productTabWrap" class="clearfix">
						
							<ul class="nav nav-tabs" id="productTab">
								<li class="active"><h3><a href="#desc">Descriptif</a></h3><span class="arrow down"></span></li>
								<li><h3><a href="#plus">Plus produit</a></h3><span class="arrow down"></span></li>
								<li><h3><a href="#promotion">Promotion</a></h3><span class="arrow down"></span></li>
								<li><h3><a href="#localisation">Localisation</a></h3><span class="arrow down"></span></li>
							</ul>
	
							<div class="tab-content">
								<div class="tab-pane active" id="desc">
									<h3>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invid</h3>
									<p class="desc">Magna aliquyam erat, sed diam voluptua. At vero eos et accu sam et justo duo
									dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est.
									Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing
									elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
									aliquyam erat, sed diam voluptua. Justo duo dolores et ea rebum. Stet clita
									asd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
									Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam</p>
									<p class="readmore"><a data-toggle="collapse" data-target="#readmore-box" class="btn btn-primary" title="" href="javascript:void(0)">En savoir plus</a></p>
									
									<div id="readmore-box" class="collapse">
										<div class="detail_desc">
											<h3>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invid</h3>
											<p class="desc">Magna aliquyam erat, sed diam voluptua. At vero eos et accu sam et justo duo
											dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est.
											Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing
											elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
											aliquyam erat, sed diam voluptua. Justo duo dolores et ea rebum. Stet clita
											asd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
											Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
											eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
										</div>
									</div>
																		
								</div>
								<div class="tab-pane" id="plus">...</div>
								<div class="tab-pane" id="promotion">...</div>
								<div class="tab-pane" id="localisation">...</div>
							</div>
							
						</div>
						
		                <div class="btn_contact">
		                <a data-toggle="modal" title="Contactez le vendeur" class="btn btn-xlarge btn-primary" href="modal.php">Nous contacter</a>
		                </div>

	       				<div class="dl_box">
		               		<p class="file_ttre">Document à télécharger</p>
		               		<p class="file_info">Nom du fichier (6 Mo - PDF)</p>
		               		<p class="file_link rpl"><a title="Télécharger : nom de fichier" class="ico-pdf" href="#">Filemane</a></p>
		               </div>

					</div>

			    	
	
		    	
		   	</div>
				
			<div id="sidebar-right">

				<div id="box-news" class="nom">
					<h4 class='ttre'>Nom De L'agence</h4>
					<p>Lorem ipsum dolor sit amet, consetetur sadipscing elit sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
					<p class="readmore"><a class="btn btn-primary" title="" href="#">En savoir plus</a></p>
				</div>

				<div id="search-form" class="box">
					<form class="clearfix">
						<h4 class="box_title">Rechercher une destination</h4>
					
						<div class="control-group">
							<div class="controls">
								<select name="test" id="weee">
									<option selected >Votre destination</option>
									<option>E-mail</option>
									<option value="With Value">Téléphone</option>
								</select>
							</div>
						</div>
									
						<div class="control-group">
							<div class="controls">
								<select name="test" id="prix">
									<option selected >Prix</option>
									<option value="With Value">E-mail</option>
									<option value="With Value">Téléphone</option>
								</select>
							</div>
						</div>
								
						<div id="slider-container" class="control-group">
							<label class="radio"> <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"> Recherchez uniquement parmi les promotions </label>
				                </div>
							
						<div class="form-actions">
						        <input type="submit" class="btn btn-primary" value="Valider"/>
					        </div>
					         <p class="readmore"><a  title="" href="#">Voir toutes les offres</a></p>
					</form>
				</div>
				<div id="box-book" class="">
					<h4 class="box_title">Réservez un vol</h4>
					<ul>
						<li><a class="btn btn-success" href="#"><i class="icon-2ways large"></i>  Aller / Retour</a></li>
						<li><a class="btn btn-primary" href="#"><i class="icon-1way large"></i>  Aller simple</a></li>
					</ul>
				</div>
		
		  		<div id="box-featured" class="box">
		  		 	<h4 class='box_title'>NOTRE SÉLECTION</h4>
					<ul class="thumbnails">
						<li>
							<div class="thumbnail clearfix">
								<img src="http://lorempixel.com/120/90/city" alt="" class="pull-left">
								<div class="caption">
									<div class="arrow left"></div>
									<p class="cat"><i class="icon-heart"></i> <span>séjour</span></p>
									<p class="price">à partir de 1630 €</p>
									<h5 class="ttre"><a title="" href="#">Lorem ipsum dolor sit amet consetet, duis autem vel eum.</a></h5>
									<p class="desc">Lorem ipsum dolor sit amet, consetetur sed diam nonumy eirmod tempor.</p>							
								</div>
							</div>
						</li>
						<li>
							<div class="thumbnail clearfix">
								<img src="http://lorempixel.com/120/90/city" alt="" class="pull-left">
								<div class="caption">
									<div class="arrow left"></div>
									<p class="cat"><i class="icon-heart"></i> <span>séjour</span></p>
									<p class="price">à partir de 1630 €</p>
									<h5 class="ttre"><a title="" href="#">Lorem ipsum dolor sit amet consetet, duis autem vel eum.</a></h5>
									<p class="desc">Lorem ipsum dolor sit amet, consetetur sed diam nonumy eirmod tempor.</p>							
								</div>
							</div>
						</li>
						<li>
							<div class="thumbnail clearfix">
								<img src="http://lorempixel.com/120/90/city" alt="" class="pull-left">
								<div class="caption">
									<div class="arrow left"></div>
									<p class="cat"><i class="icon-heart"></i> <span>séjour</span></p>
									<p class="price">à partir de 1630 €</p>
									<h5 class="ttre"><a title="" href="#">Lorem ipsum dolor sit amet consetet, duis autem vel eum.</a></h5>
									<p class="desc">Lorem ipsum dolor sit amet, consetetur sed diam nonumy eirmod tempor.</p>							
								</div>
							</div>
						</li>
						<li>
							<div class="thumbnail clearfix">
								<img src="http://lorempixel.com/120/90/city" alt="" class="pull-left">
								<div class="caption">
									<div class="arrow left"></div>
									<p class="cat"><i class="icon-heart"></i> <span>séjour</span></p>
									<p class="price">à partir de 1630 €</p>
									<h5 class="ttre"><a title="" href="#">Lorem ipsum dolor sit amet consetet, duis autem vel eum.</a></h5>
									<p class="desc">Lorem ipsum dolor sit amet, consetetur sed diam nonumy eirmod tempor.</p>							
								</div>
							</div>
						</li>
						<li>
							<div class="thumbnail clearfix">
								<img src="http://lorempixel.com/120/90/city" alt="" class="pull-left">
								<div class="caption">
									<div class="arrow left"></div>
									<p class="cat"><i class="icon-heart"></i> <span>séjour</span></p>
									<p class="price">à partir de 1630 €</p>
									<h5 class="ttre"><a title="" href="#">Lorem ipsum dolor sit amet consetet, duis autem vel eum.</a></h5>
									<p class="desc">Lorem ipsum dolor sit amet, consetetur sed diam nonumy eirmod tempor.</p>							
								</div>
							</div>
						</li>
					</ul>
					<p class="readmore"><a class="btn btn-primary" title="" href="#">Voir toutes les offres</a></p>
				</div>
			</div>
			<!-- end #content  -->
		</div>
		<!-- end .container  -->

	</div>
	<!-- end #content_zone  -->
	

	<div id="sub_content_zone">
		<div class="container">
			<div id="facebook-iframe">
					<img src="../webroot/img/fb-iframe.png" alt="" />
			</div>
		</div>
	</div>
		
					

	<div id="footer" class="notice clearfix">
		<div class="container">
			<div class="pull-left col col1">
				<ul class="" >
					<li><a title="" href="#">Accueil</a></li>
					<li><a title="" href="#">Menu 01</a></li>
					<li><a title="" href="#">Menu 02</a></li>
					<li><a title="" href="#">Menu 03</a></li>
					<li><a title="" href="#">Menu 04</a></li>
					<li><a title="" href="#">Menu 05</a></li>
					<li><a title="" href="#">Menu 06</a></li>
					<li><a title="" href="#">Menu 07</a></li>
				</ul>
			</div>

			<div class="pull-left col col2">
				<div class="gmap" >
					<a title="" href="#contact"><img src="http://maps.googleapis.com/maps/api/staticmap?center=Place+d+armes,Luxembourg&amp;zoom=14&amp;size=200x120&amp;maptype=roadmap&amp;markers=size:mid%7Ccolor:red%7CPlace+d+armes,Luxembourg,CA&amp;sensor=true" alt="#"/></a>
				</div>
				<div class="gmap_address" >
					<h5 class="ttre">Adressse : </h5>
					<ul class="" >
						<li>103 avenue de Vaugirard, 75009 Paris</li>
						<li>Tel : 01.34.53.74.03 Fax : 01.34.54.34.67</li>
					</ul>
					<h5 class="ttre">Horaires d'ouverture : </h5>
					<ul class="" >
						<li>Lundi : 9h-18h, Mardi : 9h-18h, Mercredi : 9h-18h,</li>
						<li>Jeudi : 9h-18h, Vendredi : 9h-18h, Samedi : 9h-18h</li>
					</ul>
				</div>

			</div>

			<div class="pull-left col col3">
				<div id="box_newsletter">
					<h3>Abonnez-vous à notre newsletter</h3>
					<form action="#" method="post" class="newsletter_form">
						<input type="text" name="newsletter_email" class="input-small"  placeholder="Votre email" />
						<button class="btn btn-primary" name="newsletter_submit" type="button">Validez</button>
					</form>
				</div>
				<ul class="" >
					<li><a title="" href="#">Mentions légales</a> <p class="copyright">© logotype 2012</p></li>
				</ul>
			</div>
		</div>
	</div>

</body>
</html>