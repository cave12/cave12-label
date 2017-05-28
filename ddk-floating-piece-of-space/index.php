<?php  

	include( '../functions.php' );
	
	echo c12_head( 
		'DDK - floating piece of space', // title
		'Jacques Demierre Axel Dörner Jonas Kocher - floating piece of space' // descr
	 );
	 
	function c12_page_nav( $active ) {
		
		/*
		 * Usage:
		 * echo c12_page_nav('bio');
		*/
		
		$c12_page_nav = '';
		
		$items = array(
			'about' => 'à propos',
			'audio' => 'audio',
			'bio' => 'bio',
			'credits' => 'crédits',
			// 'presse' => 'presse',
			'order' => 'commander'
		);
		
		$c12_page_nav = c12_page_nav_global( $items, $active );
		
		return $c12_page_nav;
		
	} 

?>
<body class="album-moeslang v4" id="body">

  <div id="container" class="">
    
    <?php 
     	echo c12_header('ddk');  
    ?>
    
    <article id="main" role="main" class="main">
    	<div class="main-inside">
    	
    	<header class="album-title serif article-bloc">
	    	<h1 class="title-h1 title-one">
	    	DDK - Jacques Demierre Axel Dörner Jonas Kocher
	    	</h1>
	    	
	    	<h1 class="title-h1 title-two">
	    	floating piece of space
	    	</h1>
	    	
	    	<div class="title-h1 title-labelinfo">
	    	<p>cave12</p>
	    	<p >Alive III</p>
	    	<p class="indent">c12 A 03</p>
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
					
					<h2>floating piece of space</h2>
					
						<p>Enregistré live à la cave12 en Octobre 2014 lors d’un concert qui fut remarquable de tensions acoustiques, contre-pieds suspendus, intrications de sonorités scalpelisées, dépôts sonores orfévriques hautement focalisés, 
						éruptions éparses, retenues  magnificentes, une trompette-rayon-laser tout bonnement fantastique,  
						voire extraterrestre, c’est avec un immense plaisir que la cave12, en étroite collaboration avec les musiciens 
						du trio sort ce vinyle, «&nbsp;floating piece of space&nbsp;».</p>
						
			
				</article>
			</div>	
		</section>
		
		<section class="article-bloc extrait-sonore" id="audio">
			<div class="bloc-image"><img src="/img/ddk/pattern5.png" />
			</div>
			<div class="bloc-texte">
				<?php 
				 	echo c12_page_nav('audio');  
				?>		
				<article class="article cl serif">
				
					<h2>Extrait sonore</h2>
					
					<div class="listen-mp3-box large">
					  	<ul class="playlist dark blisc unstyled">
						  	<li>
								<a class="none" href="/ziq/ddk-the-mirror-fragment.mp3">the mirror (fragment)</a>
							</li>
						</ul>
					</div>
					
				 		
				</article>
			</div>	
		</section>
		
		
		<section class="article-bloc" id="bio">
					<div class="bloc-image"><img src="/img/ddk/pattern2.png" alt="" />
					</div>
					<div class="bloc-texte">
						<?php 
						 	echo c12_page_nav('bio');  
						?>		
						<article class="article cl serif">
							
							<h2>Jacques Demierre</h2>
							
								<p>Pianiste, compositeur et improvisateur basé à Genève. Qu’elle soit acoustique ou électroacoustique, respectueuse de l’écriture musicale traditionnelle ou embrassant l’improvisation libre, ses expérimentations alimentent autant la musique que la poésie sonore ou des interventions sonore in situ. Ses expérimentation sont toutes conduites par la même quête constante pour une conscience du son. Auteur de nombreuses pièces pour ensemble ou voix, il explore également la puissance des bruits de tous les jours. Elargissant les possibilités sonores du piano, Jacques Demierre interroge également les voies par lesquelles celui-ci peu approcher la sphère du langage. Il développe une conception critique très transversale et interdisciplinaire de la musique ce qui lui donne l’opportunité de travailler avec des artistes aux backgrounds différents.</p>
								
								<p>Il travaille régulièrement avec des personnalités telles Vincent Barras, Chris Mann, Caroline Bergvall, Cindy van Acker, Noemi Lapzeson, Barre Philips, Urs Leimgruber, Thomas Lehn, Martial Solal, Joëlle Léandre, Radu Malfatti, Axel Dörner, Fritz Hauser, Sainkho Namtchylak, Isabelle Duthoit, Brandon Labelle, Hans Koch, Jason Kahn, Charlotte Hug, Butch Morris, Roger Turner, Okkyung Lee, Peter Evans, Carlos Zingaro, Gunter Müller, Jaap Blonk, Barry Guy, Sylvie Courvoisier, Hann Bennink, Rhodri Davis, Paul Lovens, Dorothea Schürch, Phil Minton, Elliott Sharp, etc, etc, etc…</p>
								
								<p>Il a par ailleurs reçu le prix de la ville de Genève section Musique en 2007 et a sorti des enregistrements sur des labels tels Tzadik, héros-limite, Psi, Victo, Leo, Plainisphare, Creative Sources, INSUB., Intakt, Bocian Records, Unit Record, etc, etc…</p>
								
							<h2>Jonas Kocher</h2>
							
							<p>Accordéoniste et compositeur né en 1977, Jonas Kocher a étudié entre autres auprès de Teodoro Anzellotti et Georges Aperghis. Depuis le milieu des années 2000, il collabore régulièrement en tant qu’accordéoniste improvisateur et dans des contextes conceptuels avec Michel Doneda, Christian Wolfarth, Olivier Toulemonde, duo Diatribes, Jacques Demierre, Chris Heenan, Alfredo Costa Monteiro, Gaudenz Badrutt, Christian Kesten … </p>
							<p>Le travail de Jonas Kocher explore les relations entre son, bruit et silence, ainsi que le processus de l’écoute.</p>
							<p>En tant que compositeur, il réalise des oeuvres entre théâtre musical, installations et pièces de concert. Ses compositions ont été jouées à la Biennale de Berne 2010, Theater Basel, Zentrum Paul Klee, Festival Encuentros Buenos Aires, Umlaut Festival Berlin, Centre Dürrenmatt Neuchâtel .</p>
								
							<h2>Axel Dörner</h2>
							
							<p>Après des études de piano, Axel Dörner se tourne vers la trompette et se produit dans différents groupes de jazz avant de former à Cologne un quartet avec Frank Gratkowski, Hans Schneider et Martin Blume. Installé à Berlin en 1994, il se penche sur le répertoire de Monk, Dolphy et travaille avec Alex Schlippenbach, Aki Takase, Sven-Åke Johansson, Butch Morris...</p>
							<p>Par ailleurs, l’étendue de sa pratique notamment vers un certain réductionnisme en fait un musicien déterminant de la scène expérimentale berlinoise. Il est ou a été membre de The Contest Of Pleasures (avec John Butcher et Xavier Charles), The Electrics, Otomo Yoshihide’s New Jazz Orchestra (avec notamment Otomo Yoshihide et Mats Gustafsson)... Il a également joué ou sorti des disques avec Kevin Drumm, Keith Rowe, Toshimaru Nakamura, Diego Chamy, Lucio Capece, Andrea Neumann, Burkhard Beins, etc.</p>
					
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