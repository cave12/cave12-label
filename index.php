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
			'norbert' => 'Norbert Möslang',
			'guenter' => 'Günter Müller',
			'credits' => 'crédits',
			// 'presse' => 'presse',
			'order' => 'commander'
		);
		
		$c12_page_nav = c12_page_nav_global( $items, $active );
		
		return $c12_page_nav;
		
	} 

?>
<body class="album-vlan-voila v4" id="body">

  <div id="container" class="">
    
    <?php 
     	echo c12_header('ddk');  
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
	    	<p >Alive III</p>
	    	<p class="indent">c12 A 04</p>
	    	</div>
    	</header>
    	
		
		<section class="article-bloc" id="about">
			<div class="bloc-image"><img src="/img/ddk/pattern2.png" alt="" />
			</div>
			<div class="bloc-texte">
				<?php 
				 	echo c12_page_nav('about');  
				?>
				<article class="article cl serif">
					
					<h2>vlan_voilà</h2>
					
						<p>Cette oeuvre sonore a été enregistrée le 10 avril 2016 à la cave12, Genève.<br/>
						Il s’agit d’une performance live d’une durée de 42’37”</p>
						
						<p>Deux figures clés, historiques et essentielles si il en est de la scène expérimentale “abstract &amp; electronics” helvète de ces 40 dernières années!<br/>
						ADN premier d’excursions aventureuses sonores radicales pour l’époque en Suisse et aujourd’hui totalement “assimilées” par une pléthore infinie de musiciens jeunes et moins jeunes, la fantastique paire formée par Günter Müller et Norbert Möslang (fondateur du culte duo voicecrack en 1972 déjà...) délivre avec une maîtrise hors-pair une fabuleuse épopée sonore à la diversité confondante.</p>
						
						<p>Drones profonds lardés de power electronics fantastiquement englobants, crépitements/grésillements, tics-tacs, particules sonores croustillantes, etc... sont répartis en d’épaisses couches stellaires et/ou organiques, en mouvement permanent. Fascinant, captivant, énergique et dans le genre, puissamment magistral !</p>
						
						<p>Le travail graphique a été réalisé par Xavier Robel.</p>
						
				</article>
			</div>	
		</section>
		
		
		<section class="article-bloc" id="norbert">
					<div class="bloc-image"><img src="/img/ddk/pattern2.png" alt="" />
					</div>
					<div class="bloc-texte">
						<?php 
						 	echo c12_page_nav('bio');  
						?>		
						<article class="article cl serif">
							
							<h2>Norbert Möslang</h2>
							
								<p>Norbert Möslang
								1952 St.Gall 
								
								<p>Travaille dès le début des années 80 à étendre les possibles d’interventions / investigations / détournements sonores. Intervient souvent in situ, et réalise avec Andy Guhl ses premières installations et performances documentées en autre dans le film de Peter Liechti Kick that Habit (1989). 
								Actif dans le domaine des arts visuels et sonores, il réalise en 2001 l’installation sound_shifting conçue pour l’église San Stae durant la 49e Biennale de Venise, documentée dans le livre-cd San Stae aux ed. Memory Cage. 
								Le duo Voice Crack, qu’il forme avec Andy Guhl sera actif jusqu’en 2002. 
								Il développe un langage sonore et visuel en utilisant les vibrations, champs magnétiques, fréquences, de composants électroniques trafiqués : “cracked everyday electronics” </p>
								
								<p>All of life consists of vibrations, and all of these relate to particular resonances. There are light waves, sound waves, microwaves... In this context you can start to combine things and, for example, use a radio as resonator for the waves from a remote control. And if it maybe doesn't work, then you just have to go on changing the frequencies and looking for connections until you've cracked it. nm </p>
								
								<p>Il collabore avec de nombreux artistes de la scène expérimentale suisse et internationale : poire_z and king UbU Orchestra, Borbetomagus, Otomo Yoshihide, Günter Müller, ErikM, Jérome Noetinger, Lionel Marchetti, Jim O'Rourke, Kevin Drumm, Jason Kahn, Oren Ambarchi, Tomas Korber, Keith Rowe, I-sound, Toshi Nakamura, Maria, Keiichiro Shibuya, Aube, Carlos Zingaro, Christian Weber, Florian Hecker, entre autres. </p>
								
								<p>Récompensé en 2007 par le Prix Namics pour les nouveaux médias
								Récompensé en 2010 pour la meilleure musique de film The sound of insects, un film de Peter Liechti, par le SwissFilm Award 
								Reco̧it en 2011 le Cinema Eye Award (New York) 
								Nominé en 2014 pour le Prix Suisse de Musique 
								
								Site internet:
								http://moeslang.com
								</p>
								
							
					
						</article>
					</div>	
		</section>
		
		

<section class="article-bloc" id="credits">
	<div class="bloc-image"><img src="/img/ddk/pattern3.png" alt="" />
	</div>
	<div class="bloc-texte">
		<?php 
		 	echo c12_page_nav('credits');  
		?>	
		<article class="article cl serif">
				
		<h2>Crédits</h2>
							
							<div class="disk-format">
								<p>Format: 12” vinyl, 45t</p>
								<p>face A - the mirror : 18’06”</p>
								<p>face B - the garden : 17’41”</p>
							</div>
							
							 <p class="newpar">enregistré Live à la cave12 le 1<sup>er</sup> octobre 2014 par Benjamin Ephise</p>
							 
							 <p class="newpar">mixé par Axel Dörner</p>
							 
							 <p class="newpar">masterisé par Blaise Favre</p>
							 
							 <p class="newpar">graphisme: Xavier Robel</p>
							 
							 <p class="newpar">produit par la cave12 avec le soutien de la Ville de Genève</p>
							 
							 <p class="newpar">distribué par Metamkine </p>							
				      	  
		</article>
	</div>	
</section>


<section class="article-bloc" id="order">
	<div class="bloc-image"><img src="/img/ddk/disk-label.png" alt="" />
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
			 		'P79J7BGQR9JV4' // $code
			 	); 
			 	
			 	echo c12_paypal(
			 			'Total: 20 EUR (+ frais de port)', // $text
			 			'EUR', // $currency
			 			'BLMGPV68XDLTY' // $code
			 		);  
			
			?>
			
			<p class="cl">Pour connaître les frais de livraison pour des quantités plus importantes,
			      merci de <a href="/contact/">nous contacter</a>.</p>
			
		</article>
	</div>	
</section>

<?php echo c12_footer(); ?>