<?php
header("Content-Type: text/html; charset=UTF-8");

?>


<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta property="og:image" content="http://www.fsvelicka.cz/gallery/hurka.jpg" />
		<meta property="og:description" content="Národopisný soubor zpracovává tance, písně a zvyky z jihomoravského regionu Horňácko a z přilehlých oblastí Kopanic, Slovácka a Slovenska." />
		<link rel="shortcut icon" href="znak.ico">
		
		<title>Velička</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="blueimp/css/blueimp-gallery.min.css">
		<link rel="stylesheet" href="css/mynav.css" type="text/css"> 
		<link rel="stylesheet" href="css/mypanel.css" type="text/css"> 
		<link rel="stylesheet" href="css/background.css" type="text/css"> 
		
		
		<link href='http://fonts.googleapis.com/css?family=Courgette&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
		
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	
		<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
			<div class="slides"></div>
			<h3 class="title"></h3>
			<a class="prev">‹</a>
			<a class="next">›</a>
			<a class="close">×</a>
			<a class="play-pause"></a>
			<ol class="indicator"></ol>
		</div>
		
		
		<nav class="navbar navbar-fixed-top navbar-default">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a id="top" class="link navbar-brand hidden-xs">
						<span><img style="max-width:70px; margin-bottom: 10px;" src="znak.ico"></span>	  
							Folklórní soubor Velička
					</a>
					<a id="top" class="link navbar-brand hidden-lg hidden-md hidden-sm">
						<span><img style="max-width:70px; margin-bottom: 10px;" src="znak.ico"></span>	 
							Velička
					</a>
				</div>
			
			<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  
			 
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a id="aboutus" class="link"><strong>O nás</strong></a>
						</li>
						<li>
							<a id="events" class="link"><strong>Události</strong></a>
						</li>
						<li>
							<a id="gallery" class="link"><strong>Galerie</strong></a>
						</li>
						<li>
							<a id="contact" class="link"><strong>Kontakt</strong></a>
						</li>
						<li>
							<a href="https://www.facebook.com/fsvelicka/" target="_blank">
								<strong>
									<i class="fa fa-facebook-square"></i>
									Facebook
								</strong>   
							</a>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><strong>CZ</strong><span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a id=red href="en"><strong>EN</strong></a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
   
    
		<div class="bg"></div>

		
		
		
		<div class="container-fluid">
		
			
			<div class="form-group row">
					&nbsp;
			</div>
			
			<span class="anchor" name="aboutus"></span>
			
			
			<div class="form-group row">
					&nbsp;
			</div>
			
			
		
			<div class="form-group row">
			<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
			  
			<div class="form-group row">
				<div class="col-lg-12" style="padding-left:0; padding-right:0">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="10000">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
						<div class="item active">
						  <img class="img-responsive" src="aboutus/vetrnakcard.png">
						  <div class="carousel-caption">
							
						  </div>
						</div>
						<div class="item">
						  <img class="img-responsive" src="aboutus/velkacard.png">
						  <div class="carousel-caption">
							
						  </div>
						</div>
						<div class="item">
						  <img class="img-responsive" src="aboutus/fnukalovocard.png" width="100%">
						  <div class="carousel-caption">
							
						  </div>
						</div>
					  </div>

					  <!-- Controls -->
					  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					  </a>
					</div>
				</div>
			</div>
			</div>
			</div>
			
			<div class="form-group row">
					&nbsp;
			</div>
			
			<div class="form-group row">
				<div class="hdl text-center">
					<strong>
						O nás
					</strong>
				</div>
			</div>
			
			<div class="form-group row">
				&nbsp;
			</div>
			
			<div class="form-group row">
				<div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1 text-justify">
					<div class="desc">
					
			  
							Lidová hudba (hudební folklór) je ryze spontánní projev lidové hudebnosti. 
							Jedná se o písně a tance, ale též o obyčeje a zvyky, při nichž hraje hudba 
							významnou roli. Rozvíjí se a uchovává ústní tradicí a její tvůrci zůstávají 
							většinou anonymní. Základem evropské lidové hudby je píseň. Mnohé z písní 
							byly natolik oblíbeny, že si je předávaly celé generace a staly se tak 
							nejpřirozenějším a také nejčistším projevem obecné hudebnosti, současně 
							však též neocenitelným dokumentem hudebních kořenů příslušného etnika. 
							Zpívá se v nich o přirozených lidských potřebách a tužbách, nejčastěji o 
							lásce, práci a přírodě. Folklór vznikal a dosud vzniká v nejrůznějších 
							částech světa a na mnoha místech je dosud jediným hudebním projevem vůbec. 
							
				  
					
				    </div>
				</div>
				<div class="col-lg-5 col-md-5 col-sm-5 text-justify">
					<div class="desc">
						
			  
							Velmi se různí podle kontinentů, zemí a tradic v melodice, rytmu i harmonii 
							a odlišnost užívaných hudebních nástrojů). Zatímco v některých světadílech 
							dosud žije a vzniká, v některých zemích, hlavně evropských v průběhu 
							20. století téměř vymizel. Je to důsledek komercionalizace umění, které 
							drtí prostřednictvím mediální globalizace průměrné umělé hudební tvorby vše,
							co podobnými možnostmi a metodami šíření nedisponuje. Je svým způsobem zákonité,
							že společenství méně závislá na tom, co nazýváme civilizací jsou více schopna
							rozvíjet potenciál vlastních hudebních kořenů.
				  
				
				    </div>
				</div>
			</div>
		
			
			  
			<span class="anchor" name="events"></span>
			
			<div class="form-group row">
				&nbsp;
			</div>
			
			<div class="form-group row">
				<div class="hdl text-center">
					<strong>
						Události
					</strong>
				</div>
			</div>
			
			<div class="form-group row">
				&nbsp;
			</div>
			
			<div class="form-group row">
			<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			  <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-target="#collapseOne">
				  <h4 class="panel-title">
					  Kuželovský fašanek
					<p class="hidden-xs pull-right">5. února 2016</p>
				  </h4>
				</div>
				<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
				  <div class="panel-body">
				    
					<a href="https://mapy.cz/zakladni?x=17.4942979&y=48.8447729&z=13&source=muni&id=5638" target="_blank">
						<strong>
							<i class="fa fa-fw fa-home"></i>
							Kuželov
						</strong>
				    </a>
					<div>
						<strong>
							<i class="fa fa-fw fa-calendar"></i>
							5. února 2016
						</strong>
				    </div>
				    <a href="https://www.facebook.com/events/1497992350508816/" target="_blank">
						<strong>
							<i class="fa fa-fw fa-facebook-square"></i>
							Facebook
						</strong>
					</a>
					<br><br>
					
					
					<img class="img-responsive" src="events/kuzelov_fasanek.jpg"></img>
					
				   
				  </div>
				</div>
			  </div>
			  <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo">
				  <h4 class="panel-title">
					  Velikonoční slavnosti
					<p class="hidden-xs pull-right">25. března 2016</p>
				  </h4>
				</div>
				<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
				  <div class="panel-body">
				    <a href="https://www.google.com/maps/place/Lova%C5%88,+Belgie/@50.884089,4.6353904,12z/data=!3m1!4b1!4m2!3m1!1s0x47c160d05ebbdf85:0x40099ab2f4d5690" target="_blank">
						<strong>
							<i class="fa fa-fw fa-home"></i>
							Lovaň
						</strong>
				    </a>
					<div>
						<strong>
							<i class="fa fa-fw fa-calendar"></i>
							25. - 28. března 2016
						</strong>
				    </div>
					<a href="http://www.paasfeestenleuven.be/" target="_blank">
						<strong>
							<i class="fa fa-fw fa-globe"></i>
							paasfeestenleuven.be
						</strong>
					</a>
					<br>
				    <a href="https://www.facebook.com/paasfeesten.leuven/?fref=ts" target="_blank">
						<strong>
							<i class="fa fa-fw fa-facebook-square"></i>
							Facebook
						</strong>
					</a>
					<br><br>
					
					<img class="img-responsive" src="events/leuven.jpg"></img>
				  </div>
				</div>
			  </div>
			  <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingThree" data-toggle="collapse" data-target="#collapseThree">
				  <h4 class="panel-title">
					  Horňácké slavnosti
					<p class="hidden-xs pull-right">22. července 2016</p>
				  </h4>
				</div>
				<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
				  <div class="panel-body">
					<a href="http://mapy.cz/zakladni?x=17.5287147&y=48.8846708&z=12&source=muni&id=5680" target="_blank">
						<strong>
							<i class="fa fa-fw fa-home"></i>
							Velká nad Veličkou
						</strong>
				    </a>
					<div>
						<strong>
							<i class="fa fa-fw fa-calendar"></i>
							22. - 24. července 2016
						</strong>
				    </div>
					
				
				  </div>
				</div>
			  </div>
			</div>
			</div>
			</div>
			
			<div class="form-group row">
				&nbsp;
			</div>
			<div class="form-group row">
				&nbsp;
			</div>
			<div class="form-group row">
				&nbsp;
			</div>
			<div class="form-group row">
				&nbsp;
			</div>
			<div class="form-group row">
				&nbsp;
			</div>
			<div class="form-group row">
				&nbsp;
			</div>
			<div class="form-group row">
				&nbsp;
			</div>
			<div class="form-group row">
				&nbsp;
			</div>
			<div class="form-group row">
				&nbsp;
			</div>
			<div class="form-group row">
				&nbsp;
			</div>
			<div class="form-group row">
				&nbsp;
			</div>
			<div class="form-group row">
				&nbsp;
			</div>
			  
			    
			<span class="anchor" name="gallery"></span>
			  
			  
		
			  
			<div class="form-group row">
				&nbsp;
			</div>
			
			<div class="form-group row">
				<div class="hdl text-center">
					<strong>
						Galerie
					</strong>
				</div>
			</div>
			
			<div class="form-group row">
				&nbsp;
			</div>
			
			<div id="links">
				
			
			<div class="form-group row">
				<div class="col-lg-7 col-lg-offset-1 col-md-7 col-md-offset-1 col-sm-7 col-sm-offset-1">
					<a href="gallery/hurka.jpg">
						<img class="lazy img-responsive img-rounded" data-original="gallery/hurka.jpg" width="100%" height="100%"></img>
					</a>
				</div>
				<br class="hidden-lg hidden-md hidden-sm">
				<div class="col-lg-3 col-md-3 col-sm-3">
					<div class="form-group row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<a href="gallery/ana_david.jpg">
								<img class="lazy img-responsive img-rounded" data-original="gallery/ana_david.jpg" width="100%" height="100%"></img>
							</a>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12">
							&nbsp;
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12">
							<a href="gallery/daniela_jura.JPG">
								<img class="lazy img-responsive img-rounded" data-original="gallery/daniela_jura.JPG" width="100%" height="100%"></img>
							</a>
						</div>
					</div>
				</div>
				
			</div>
			
			<div class="form-group row">
				<div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1">
					<div class="form-group row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<a href="gallery/zavazovani.jpg">
								<img class="lazy img-responsive img-rounded" data-original="gallery/zavazovani.jpg" width="100%" height="100%"></img>
							</a>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12">
							&nbsp;
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12">
							<a href="gallery/bota.jpg">
								<img class="lazy img-responsive img-rounded" data-original="gallery/bota.jpg" width="100%" height="100%"></img>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-7 col-md-7 col-sm-7">
					<a href="gallery/vrbka_spolecna.jpg">
						<img class="lazy img-responsive img-rounded" data-original="gallery/vrbka_spolecna.jpg" width="100%" height="100%"></img>
					</a>
				</div>
				
			</div>
			
			<div class="form-group row">
				
				<div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1">
					<a href="gallery/palicovy.jpg">
						<img class="lazy img-responsive img-rounded" data-original="gallery/palicovy.jpg" width="100%" height="100%"></img>
					</a>
				</div>
				<br class="hidden-lg hidden-md hidden-sm">
				<div class="col-lg-5 col-md-5 col-sm-5">
					<a href="gallery/fertusky.jpg">
						<img class="lazy img-responsive img-rounded" data-original="gallery/fertusky.jpg" width="100%" height="100%"></img>
					</a>
				</div>
				
			</div>
			
			<div class="form-group row">
				
				<div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1">
					<div class="form-group row">
						<div class="col-lg-4 col-md-4 col-sm-4">
							<a href="gallery/martina.jpg">
								<img class="lazy img-responsive img-rounded" data-original="gallery/martina.jpg" width="100%" height="100%"></img>
							</a>
						</div>
						<br class="hidden-lg hidden-md hidden-sm">
						<div class="col-lg-8 col-md-8 col-sm-8">
							<a href="gallery/daniela_kaja.jpg">
								<img class="lazy img-responsive img-rounded" data-original="gallery/daniela_kaja.jpg" width="100%" height="100%"></img>
							</a>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12">
							&nbsp;
						</div>
						<div class="col-lg-8 col-md-8 col-sm-8">
							<a href="gallery/slunecnice.jpg">
								<img class="lazy img-responsive img-rounded" data-original="gallery/slunecnice.jpg" width="100%" height="100%"></img>
							</a>
						</div>
						<br class="hidden-lg hidden-md hidden-sm">
						<div class="col-lg-4 col-md-4 col-sm-4">
							<a href="gallery/anicka_david.jpg">
								<img class="lazy img-responsive img-rounded" data-original="gallery/anicka_david.jpg" width="100%" height="100%"></img>
							</a>
						</div>
					</div>
				</div>
				
				
				
				<div class="col-lg-4 col-md-4 col-sm-4">
					<a href="gallery/holky.jpg">
						<img class="lazy img-responsive img-rounded" data-original="gallery/holky.jpg" width="100%" height="100%"></img>
					</a>
				</div>
				
			</div>
			
			<div class="form-group row">
				
				<div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1">
					<a href="gallery/hurka2.jpg">
						<img class="lazy img-responsive img-rounded" data-original="gallery/hurka2.jpg" width="100%" height="100%"></img>
					</a>
				</div>
				<br class="hidden-lg hidden-md hidden-sm">
				<div class="col-lg-5 col-md-5 col-sm-5">
					<a href="gallery/ozveny_spolecna.jpg">
						<img class="lazy img-responsive img-rounded" data-original="gallery/ozveny_spolecna.jpg" width="100%" height="100%"></img>
					</a>
				</div>
				
			</div>
			
			<div class="form-group row">
				&nbsp;
			</div>
			<div class="form-group row">
				&nbsp;
			</div>
			<div class="form-group row">
				&nbsp;
			</div>
			<div class="form-group row">
				&nbsp;
			</div>
			<div class="form-group row">
				&nbsp;
			</div>
			
			</div>
			
		
			
			
			  
			  
			<span class="anchor" name="contact"></span>
			  
			
			
			<div class="form-group row">
				<div class="hdl col-lg-10 col-lg-offset-1 text-center">
					<strong>
						Kontakt
					</strong>
				</div>
			</div>
			  
			<div class="form-group row">
				&nbsp;
			</div>
			
			
			<div class="contact">
				<div class="form-group row">
					<div class="col-lg-3 col-lg-offset-2 col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-1">
						<div class="thumbnail">
							<img class="lazy img-responsive img-rounded" data-original="contact/irca.jpg" width="100%" height="100%"></img>
							<div class="caption">
								<strong>
									<i class="fa fa-fw fa-user"></i>
									Irena Sedlářová
								</strong>
								<br>
								<strong>
									<i class="fa fa-fw fa-mobile"></i>
									Tel
								</strong>
								<br>
								<strong>
									<i class="fa fa-fw fa-envelope-o"></i>
									Mail
								</strong>
							</div>	
						</div>	
					</div>
					<div class="col-lg-3 col-lg-offset-2 col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2">
						<div class="thumbnail">
							<img class="lazy img-responsive img-rounded" data-original="contact/martin.jpg" width="100%" height="100%"></img>
							<div class="caption">
								<strong>
									<i class="fa fa-fw fa-user"></i>
									Martin Kománek
								</strong>
								<br>
								<strong>
									<i class="fa fa-fw fa-mobile"></i>
									Tel
								</strong>
								<br>
								<strong>
									<i class="fa fa-fw fa-envelope-o"></i>
									Mail
								</strong>
							</div>	
						</div>	
					</div>
				</div>
				
			</div>
			
		  
		</div>
		
	
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery-1.12.0.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<script src="blueimp/js/blueimp-gallery.min.js"></script>
		<script>
			document.getElementById('links').onclick = function (event) {
				event = event || window.event;
				var target = event.target || event.srcElement,
					link = target.src ? target.parentNode : target,
					options = {index: link, event: event},
					links = this.getElementsByTagName('a');
				blueimp.Gallery(links, options);
			};
		</script>
		<script src="js/jquery.lazyload.js"></script>
		<script src="js/scrolleffect.js"></script>
		<script src="js/mynav.js"></script>
		<script src="js/delayimg.js"></script>
		<script src="js/pagefade.js"></script>
  
	</body>
</html>

