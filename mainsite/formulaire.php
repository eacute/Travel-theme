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
	<link type="text/css" href="../webroot/css/jqslider.css" rel="stylesheet">
	<link type="text/css" href="../webroot/css/ays.css" rel="stylesheet">
	<!--[if IE 8]>
		<link type="text/css" href="../webroot/css/ie8.css" rel="stylesheet">
	<![endif]-->
	<link type="text/css" href="../webroot/css/print.css" rel="stylesheet" media="print">
	
	<script type="text/javascript" src="../webroot/js/theme_front-socle/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4f6e9cb7474031f4"></script>
	<script type="text/javascript" src="../webroot/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../webroot/js/jquery.placeholder.min.js"></script>
	<script type="text/javascript" src="../webroot/js/jqslider.js"></script>
	<script type="text/javascript" src="../webroot/js/theme_front-socle/jquery-ui-effect.min.js"></script>
	<script type="text/javascript" src="../webroot/js/jquery.slideshow.pack.js"></script>
	<script type="text/javascript" src="../webroot/js/default.js"></script>


</head>

<body class="sidebar-right">
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

	<div id="main-nav" class="navbar navbar-top">
		<div class="navbar-inner">
			<div class="container">
				<ul class="nav">
					<li class="active"><a title="" href="#labels">Labels</a></li>
					<li class="dropdown">
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

	<div id="contentzone" class="clearfix">
		<div class="container">
		   	<div id="content">

				<div id="contact-form" class="box">
	
		   	   	<h2 class="ttre">Titre Formulaire</h2>
	
	      		<div class="intro large"><p>Lorem ipsum dolor sit amet consetetur sadipscing elitr<br/>
					sed diam nonumy eirmod tempor invidunt ut labore</p></div>
	
					<div class="alert alert-block alert-error">
			            <h4 class="alert-heading">Oh ! Oh ! </h4>
			            	<p>xx est obligatoire.</p>
			            	<p>xxxx est obligatoire.</p>
			            </p>
		          	</div>
	
	
					<form id="importForm" class="twocols">
					  	<div class="control-group">
				        	<label>Civilité</label>
					        <div class="controls">
			              		<label class="radio inline"><input class="" type="radio" name="optionsRadios" id="optionsRadios1" value="option1"> Madame</label>
			              		<label class="radio inline"><input class="" type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Monsieur</label>
				          	</div>
		  				</div>
				
			          <div class="control-group col">
			            <label class="control-label" for="input01">Nom</label>
			            <div class="controls"><input type="text"  id="input01"/></div>
			          </div>
			          <div class="control-group col">
			            <label class="control-label" for="input01">Prénom</label>
			            <div class="controls"><input type="text"   id="input02"/></div>
			          </div>
			     
		          <div class="control-group full">
		            <label class="control-label" for="input01">Adresse</label>
		            <div class="controls">
		              <input type="text" class="span" id="input03"/>
		            </div>
		          </div>
	
		            
		          <div class="control-group col">
		            <label class="control-label" for="input01">Code postal</label>
	        		 <div class="controls">
		              <input type="text" class="span" id="input03"/>
		            </div>
		          </div>           
		          <div class="control-group error col">
		            <label class="control-label" for="input01">Ville</label>
	        		 <div class="controls">
		              <input type="text" class="span" id="input03"/>
		            </div>
		          </div>
		          <div class="control-group col">
		            <label class="control-label" for="input04">Téléphone</label>
		            <div class="controls">
		              <input type="text" class="span" id="input04"/>
		            </div>
		          </div>
		          <div class="control-group col">
		            <label class="control-label" for="input04">Email</label>
		            <div class="controls">
		              <input type="text" class="span" id="input04"/>
		            </div>
		          </div>
		          
		          <div class="control-group col error">
		            <label class="control-label" for="weee">Lorem</label>
		            <div class="controls">
		             	<select name="test" id="weee">
							<option>France</option>
							<option selected>Allemagne</option>
							<option value="With Value">Pays-bas</option>
						</select>
		            </div>
		          </div>  
		          <div class="control-group col">
		            <label class="control-label" for="weee2">Lorem</label>
		            <div class="controls">
		             	<select name="test" id="weee2">
							<option>France</option>
							<option selected>Allemagne</option>
							<option value="With Value">Pays-bas</option>
						</select>
		            </div>
		          </div>  
			      <div class="control-group full">
		            <label class="control-label" for="textarea">Description du Poste</label>
		            <div class="controls">
		              <textarea class="span" id="textarea" rows="3"></textarea>
		            </div>
			      </div>
	
		          
		          <div class="form-actions a-r clearfix">
		            <input type="submit" class="btn btn-primary btn-large" value="Envoyer"/>
		          </div>
				      			
				</form>
		    	
		   	</div>
		   </div>
				
			<div id="sidebar-right">

				<div id="box-news" class="nom">
					<h4 class='ttre'>Nom De L'agence</h4>
					<p>Lorem ipsum dolor sit amet, consetetur sadipscing elit sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
					<p class="readmore"><a class="btn btn-primary" title="" href="#">En savoir plus</a></p>
				</div>

				<div id="contact-publisher" class="box">
					<div id="search-form" class="box">
						<form>
							<h4 class="ttre"><i class="icon-searchform large"></i> Rechercher une destination</h4>
						
							<div class="control-group span1">
								<div class="controls">
									<select name="test" id="weee">
										<option selected >Votre destination</option>
										<option>E-mail</option>
										<option value="With Value">Téléphone</option>
									</select>
								</div>
							</div>
										
							<div class="control-group">
								<label class="control-label">Max : </label>
								<div class="controls">
									<select name="test" id="weee">
										<option selected >Prix</option>
										<option value="With Value">E-mail</option>
										<option value="With Value">Téléphone</option>
									</select>
								</div>
							</div>
									
							<div id="slider-container" class="control-group span1">
								<label class="radio"> <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"> Recherchez uniquement parmi les promotions </label>
					                </div>
								
							<div class="form-actions">
							        <input type="submit" class="btn btn-primary" value="Valider"/>
						        </div>
						         <p class="readmore">&#8594; <a  title="" href="#">Voir toutes les offres</a></p>
						</form>
					</div>
					<div id="box-book" class="">
						<h4 class="ttre">Réservez un vol</h4>
						<ul>
							<li><a class="btn btn-primary" href="#"><i class="icon-2ways large"></i>  Aller / Retour</a></li>
							<li><a class="btn btn-primary"  href="#"><i class="icon-1way large"></i>  Aller simple</a></li>
						</ul>
					</div>
				</div>

		  		<div id="box-news" class="box">
		  		 	<h4 class='ttre'>NOTRE SÉLECTION</h4>
					<ul class="thumbnails">
						<li class="span2">
							<div class="thumbnail clearfix">
								<img src="http://lorempixel.com/120/90/city" alt="" class="pull-left">
								<div class="caption">
									<h3 class="ttre"><img src="../webroot/img/heart.png" alt="Heart" /> | <span>séjour</span></h3>
									<p class="price">à partir de 1630 €</p>
									<p class="desc">Lorem ipsum dolor sit amet consetet,
										duis autem vel eum iriurehendrerit.
										<small>Lorem ipsum dolor sit amet, consetetur
											sed diam nonumy eirmod tempor.</small>
										</p>
								</div>
							</div>
						</li>
						<li class="span2">
							<div class="thumbnail clearfix">
								<img src="http://lorempixel.com/120/90/city" alt="" class="pull-left">
								<div class="caption">
									<h3 class="ttre"><img src="../webroot/img/heart.png" alt="Heart" /> | <span>Excursion</span></h3>
									<p class="price">à partir de 1630 €</p>
									<p class="desc">Lorem ipsum dolor sit amet consetet,
										duis autem vel eum iriurehendrerit.
										<small>Lorem ipsum dolor sit amet, consetetur
											sed diam nonumy eirmod tempor.</small>
										</p>
									</div>
								</div>
						</li>
						<li class="span2">
							<div class="thumbnail clearfix">
								<img src="http://lorempixel.com/120/90/city" alt="" class="pull-left">
								<div class="caption">
									<h3 class="ttre"><img src="../webroot/img/heart.png" alt="Heart" /> | <a title="" href="#">circuit</a></h3>
									<p class="price">à partir de 1630 €</p>
									<p class="desc">Lorem ipsum dolor sit amet consetet,
										duis autem vel eum iriurehendrerit.
										<small>Lorem ipsum dolor sit amet, consetetur
											sed diam nonumy eirmod tempor.</small>
									</p>
								</div>
							</div>
						</li>
						<li class="span2">
							<div class="thumbnail clearfix">
								<img src="http://lorempixel.com/120/90/city" alt="" class="pull-left">
								<div class="caption">
									<h3 class="ttre"><img src="../webroot/img/promo.png" alt="Promo" /> | <span>séjour</span></h3>
									<p class="price">630 €     420 €</p>
									<p class="desc">Lorem ipsum dolor sit amet consetet,
										duis autem vel eum iriurehendrerit.
										<small>Lorem ipsum dolor sit amet, consetetur
											sed diam nonumy eirmod tempor.</small>
									</p>
								</div>
							</div>
						</li>
						<li class="span2">
							<div class="thumbnail clearfix">
								<img src="http://lorempixel.com/120/90/city" alt="" class="pull-left">
								<div class="caption">
									<h3 class="ttre"><img src="../webroot/img/promo.png" alt="Promo" /> | <span>séjour</span></h3>
									<p class="price">630 €     420 €</p>
									<p class="desc">Lorem ipsum dolor sit amet consetet,
										duis autem vel eum iriurehendrerit.
										<small>Lorem ipsum dolor sit amet, consetetur
											sed diam nonumy eirmod tempor.</small>
									</p>
								</div>
							</div>
						</li>
					</ul>
					<p class="readmore"><a class="btn btn-primary" title="" href="#">Voir toutes les offres</a></p>
				</div>
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