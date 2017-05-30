<?php  

	include( 'functions.php' );
	
	echo c12_head( 
		'günter müller / norbert möslang - vlan_voilà', // title
		'günter müller - norbert möslang' // descr
	 );
	 
	function c12_page_nav( $active ) {
		
		/*
		 * Usage:
		 * echo c12_page_nav('bio');
		*/
		
		$c12_page_nav = '';
		
		$items = array(
			'about' => 'à propos',
			// 'audio' => 'audio',
			// 'bio' => 'bio',
			'norbert' => 'NM',
			'guenter' => 'GM',
			'credits' => 'credits',
			// 'presse' => 'presse',
			'order' => 'commander'
		);
		
		$c12_page_nav = c12_page_nav_global( $items, $active );
		
		return $c12_page_nav;
		
	} 

?>
<style>
	
	.album-title {
		display: flex;
		flex-direction: row;
	}
	
	.title-one {
		width: 20em;
	}
	
	.album-vlan-voila .main {
		background: #fff;
		background: linear-gradient(180deg, #D4D2CD, #fff 30em);
		background-image: url("/img/vlan-voila/bgalt.jpg");
		width: 100%;
		margin: 0 auto;
	}
	
	
	
	@supports ( object-fit:cover ) {
	
		.bloc-image img {
			object-fit: cover;
			height: 100%;
			width: 100%;
		}
		
	}
	
	@supports ( display:flex ) {

		.article-bloc {
			margin-bottom: 5em;
			display: flex;
			width: auto;
		}
		
		.bloc-image, .bloc-texte {
			width: auto;
			height: auto;
			flex: 1;
			/*float: none;
			width: auto;
			height: auto;
			*/
		}
		
		.album-title {
			margin-bottom: 0;
		}
		
		.main-inside {
			display: flex;
			flex-direction: column;
			max-width: 1000px;
		}
		
		.header {
			display: flex;
			align-content: flex-end;
		}
		
		.logo, 
		.nav-albums, 
		.v4 .nav-head {
			position: relative;
			margin: 0;
			
		}
		
		.logo {
			left: 0px;
			padding: 0 30px 0 20px;
		}
		
		.nav-albums {
			margin: 0;
		}
		
		.v4 .nav-head {
			margin: 0;
			width: auto;
			flex: 1;
		}
		

	}
	
	@media only screen and (max-width: 999px) {
	    
	    .header {
	    	width: auto;
	    }
	    
	    .nav-albums li:nth-child(2) {
	    	display: none;
	    }
	    
	}
	
	@media only screen and (max-width: 832px) {

	    .nav-albums li:nth-child(3) {
	    	display: none;
	    }
	    
	}
	
	@media only screen and (max-width: 734px) {
	
		    .nav-albums li:nth-child(4) {
		    	display: none;
		    }
		    
	}
	
	
	@media only screen and (max-width: 642px) {
	
		    .nav-albums li:nth-child(5) {
		    	display: none;
		    }
		    
		    .article-bloc {
		    	flex-direction: column;
		    }
		    
		    .bloc-image {
		    	max-height: 20vh;
		    	order: 2;
		    }
		    
	}
	
	@media only screen and (max-width: 550px) {
		
		.header {
			flex-wrap:  wrap;
		}
		
		.nav-albums {
			order: 3;
			
		}
		
		.nav-albums ul {
			display: flex;
			width: 90vw;
			padding: 1vw;
		}
		
		#top .nav-albums li {
			display: block;
		}
		    
	}

</style>
<body class="album-vlan-voila v4" id="body">

  <div id="container" class="">
    
    <?php 
     	echo c12_header('vlan-voila');  
    ?>
    
    <article id="main" role="main" class="main">
    	<div class="main-inside">
    	
    	<header class="album-title serif article-bloc">
	    	<h1 class="title-h1 title-one">
	    	günter müller - norbert möslang
	    	</h1>
	    	
	    	<h1 class="title-h1 title-two">
	    	vlan_voilà
	    	</h1>
	    	
	    	<div class="title-h1 title-labelinfo">
	    	<p>cave12</p>
	    	<p >Alive IV</p>
	    	<p class="indent">c12 A 04</p>
	    	</div>
    	</header>
    	
		
		<section class="article-bloc" id="about">
			<div class="bloc-image"><img src="/img/vlan-voila/vlan-voila-pattern3.png" alt="" />
			</div>
			<div class="bloc-texte">
				<?php 
				 	echo c12_page_nav('about');  
				?>
				<article class="article cl serif">
					
					<h2>vlan_voilà</h2>
					
						<p>Cette oeuvre sonore a été enregistrée le 10 avril 2016 à la cave12, Genève.<br/>
						Il s’agit d’une performance live d’une durée de 42’37”</p>
						
						<p>Deux figures clés, historiques et essentielles si il en est de la scène expérimentale “abstract &amp; electronics” helvète de ces 40 dernières années!</p>
						
						<p>ADN premier d’excursions aventureuses sonores radicales pour l’époque en Suisse et aujourd’hui totalement “assimilées” par une pléthore infinie de musiciens jeunes et moins jeunes, la fantastique paire formée par Günter Müller et Norbert Möslang (fondateur du culte duo voicecrack en 1972 déjà...) délivre avec une maîtrise hors-pair une fabuleuse épopée sonore à la diversité confondante.</p>
						
						<p>Drones profonds lardés de power electronics fantastiquement englobants, crépitements/grésillements, tics-tacs, particules sonores croustillantes, etc... sont répartis en d’épaisses couches stellaires et/ou organiques, en mouvement permanent. Fascinant, captivant, énergique et dans le genre, puissamment magistral !</p>
						
						<p>Le travail graphique a été réalisé par Xavier Robel.</p>
						
				</article>
			</div>	
		</section>
		
		
		<section class="article-bloc" id="norbert">
					<div class="bloc-image"><img src="/img/vlan-voila/bgalt.jpg" alt="" />
					</div>
					<div class="bloc-texte">
						<?php 
						 	echo c12_page_nav('bio');  
						?>		
						<article class="article cl serif">
							
							<h2>Norbert Möslang</h2>
							
								<p>Norbert Möslang
								1952 St.Gall 
								
								<p>Travaille dès le début des années 80 à étendre les possibles d’interventions / investigations / détournements sonores. Intervient souvent in situ, et réalise avec Andy Guhl ses premières installations et performances documentées en autre dans le film de Peter Liechti <i>Kick that Habit</i> (1989).<br/> 
								Actif dans le domaine des arts visuels et sonores, il réalise en 2001 l’installation sound_shifting conçue pour l’église San Stae durant la 49e Biennale de Venise, documentée dans le livre-cd San Stae aux ed. Memory Cage. <br/>
								Le duo Voice Crack, qu’il forme avec Andy Guhl sera actif jusqu’en 2002. 
								Il développe un langage sonore et visuel en utilisant les vibrations, champs magnétiques, fréquences, de composants électroniques trafiqués : “cracked everyday electronics” </p>
								
								<blockquote>
									<p>All of life consists of vibrations, and all of these relate to particular resonances. There are light waves, sound waves, microwaves... In this context you can start to combine things and, for example, use a radio as resonator for the waves from a remote control. And if it maybe doesn't work, then you just have to go on changing the frequencies and looking for connections until you've cracked it. nm </p>
								</blockquote>
								
								<p>Il collabore avec de nombreux artistes de la scène expérimentale suisse et internationale : poire_z and king UbU Orchestra, Borbetomagus, Otomo Yoshihide, Günter Müller, ErikM, Jérome Noetinger, Lionel Marchetti, Jim O'Rourke, Kevin Drumm, Jason Kahn, Oren Ambarchi, Tomas Korber, Keith Rowe, I-sound, Toshi Nakamura, Maria, Keiichiro Shibuya, Aube, Carlos Zingaro, Christian Weber, Florian Hecker, entre autres. </p>
								
								<p class="emphasis">Récompensé en 2007 par le Prix Namics pour les nouveaux médias<br/>
								Récompensé en 2010 pour la meilleure musique de film The sound of insects, un film de Peter Liechti, par le SwissFilm Award <br/>
								Reco̧it en 2011 le Cinema Eye Award (New York) <br/>
								Nominé en 2014 pour le Prix Suisse de Musique </p>
								
								<p>Site internet:
								<a href="http://moeslang.com">http://moeslang.com</a>
								</p>
								
							
					
						</article>
					</div>	
		</section>
		
		<section class="article-bloc" id="guenter">
					<div class="bloc-image"><img src="/img/vlan-voila/vlan-voila-pattern2.png" alt="" />
					</div>
					<div class="bloc-texte">
						<?php 
						 	echo c12_page_nav('bio');  
						?>		
						<article class="article cl serif">
							
							<h2>Günter Müller</h2>
							
								<p>1954 München</p>
								
								<p>Lebt seit 1966 in der Schweiz.<br/>
								Er begann in den 70-er Jahren als Schlagzeuger im Bereich der improvisierten Musik, erweiterte in den frühen 80-er Jahren sein Instrumentarium mit einem mobilen Tonabnehmer und Mikrofonsystem und beschäftigt sich fortan vermehrt und dann ausschliesslich mit elektronischer Musik.</p>
								
								<p>Müller spielte in Europa, in Russland, USA, Mexico und Südamerika, Canada, Japan, Korea, Australien und Neuseeland.<br/>
								Etliche Veröffentlichungen erschienen auf dem von ihm 1990 gegründeten Label For4Ears, weitere auf Erstwhile, Cut, Grob, List, Audiosphere, Amoebic, Rossbin, Creative Sources, Monotype, Mikroton und andern Labels.</p>
								
								<p>Müller spielte und machte Aufnahmen mit Musikern wie Jim O'Rourke, Christian Marclay, Butch Morris, Otomo Yoshihide, Keith Rowe, Oren Ambarchi, John Tilbury, Toshi Nakamura, Lee Ranaldo und vielen mehr.<br/> 
								Müller war Gründungsmitglied des Trios <i>Nachtluft</i> mit Andres Bosshard und Jacques Widmer, welches in den 80ern und 90ern Klang-Installationen und Klang-Architektur kreierte, und des elektronischen Quartetts <i>poire_z</i> mit eRikm und Voice Crack.</p>
								
								<p>Mit Norbert Möslang arbeitet Müller seit bald 20 Jahren zusammen, so aktuell im Duo und im Trio MKM zusammen mit Jason.</p>
								
						</article>
					</div>	
		</section>
		
		
		

<section class="article-bloc" id="credits">
	<div class="bloc-image"><img src="/img/vlan-voila/vinyl-label4.jpg" alt="" />
	</div>
	<div class="bloc-texte">
		<?php 
		 	echo c12_page_nav('credits');  
		?>	
		<article class="article cl serif">
				
		<h2>Crédits</h2>
							
							<section class="info-block">
								<p class="newpar">Recorded april 2016 at cave12</p>
								<p>Günter Müller: ipods electronics</p>
								<p>Norbert Möslang: cracked everyday electronics</p>
							</section>
							
							<section class="info-block">
								 	<p class="newpar">Format: 12” vinyl, 33rpm</p>
								 	<p>Side A - 21:23</p>
								 	<p>Side B - 21:26</p>
								 	<p>Released May 2017</p>
							</section>
							
							<section class="info-block">
								 <p class="newpar">Jérôme Léonard: engineer</p>
								 <p>Norbert Möslang: mixing</p>
								 <p>Rashad Becker: mastering cut</p>
								 <p>Xavier Robel: design</p>
							 </section>
							 				      	  
		</article>
	</div>	
</section>


<section class="article-bloc" id="order">
	<div class="bloc-image"><img src="/img/vlan-voila/order-vinyl.jpg" alt="" />
	</div>
	<div class="bloc-texte">
		<?php 
		 	echo c12_page_nav('commander');  
		?>
		<article class="article cl serif">
		
			<h2>Commander (via Paypal)</h2>
			
			<?php 
			
			 	echo c12_paypal(
			 		'Total: 20.- CHF (+ frais de port)', // $text
			 		'CHF', // $currency
			 		'J922ES36258VQ' // $code
			 	); 
			 	
			 	echo c12_paypal(
			 			'Total: 20 EUR (+ frais de port)', // $text
			 			'EUR', // $currency
			 			'RA64PVMD8GYJ6' // $code
			 		);  
			
			?>
			
			<p class="cl">Pour connaître les frais de livraison pour des quantités plus importantes,
			      merci de <a href="/contact/">nous contacter</a>.</p>
			
		</article>
	</div>	
</section>

<?php echo c12_footer(); ?>