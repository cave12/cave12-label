<?php  

	include( 'functions.php' );
	
	echo c12_head( 
		'Francisco Meirino - La Plainte', // title
		'Francisco Meirino - La Plainte' // descr
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
			'credits' => 'crédits',
			'bio' => 'bio',
			'order' => 'commander'
		);
		
		$c12_page_nav = c12_page_nav_global( $items, $active );
		
		return $c12_page_nav;
		
	} 

	/*
	 * Custom CSS for current page only
	*/
	
?>
<style>
	.album-la-plainte .main {
    background: #000 url(/img/la-plainte/label-A-crpd.jpg) repeat left top;
    background-position: 50% 50%;
    background-size: cover;
    background-attachment: fixed;
		float: left;
	}
	
	.article-bloc {
	  box-shadow: none;
	}
	
	.album-la-plainte .bloc-texte {
	  box-shadow: inset 0 0 27px #7f7f7f;
	}
</style>
<body class="album-la-plainte v4" id="body">

  <div id="container" class="">
    
    <?php 
     	echo c12_header('francisco-meirino-la-plainte');  
    ?>
    
    <article id="main" role="main" class="main">
    	<div class="main-inside">
    	
    	<header class="album-title serif">
	    	<h1 class="title-h1 title-one">
	    	Francisco Meirino
	    	</h1>
	    	
	    	<h1 class="title-h1 title-two">
	    	La Plainte
	    	</h1>
	    	
	    	<div class="title-h1 title-labelinfo">
	    	<p>cave12</p>
	    	<p >Alive III</p>
	    	<p class="indent">c12 A 05</p>
	    	</div>
    	</header>
    	
        	
		
<section class="article-bloc" id="about">
	<div class="bloc-image"><img src="/img/la-plainte/label-A-crpd.jpg" />
	</div>
	<div class="bloc-texte">
		<?php 
		 	echo c12_page_nav('about');  
		?>	
		<article class="article cl serif">
			
			<h2>La Plainte</h2>
			
			<p>Cette pièce de Francisco Meirino, une commande du festival Mos Espa est composée en grande partie à partir des archives sonores du MEG. Créée en 2016, elle a été remaniée par l’artiste pour la présente édition du label Cave12 en 2017.</p>
			
			<p class="newpar"><i>Dans les archives du MEG, j’ai avant tout cherché des événements acoustiques que j’ai volontairement modifiés, filtrés, édités et extraits de leur contexte d’origine. J’ai ainsi obtenu une substance suffisamment abstraite pour pouvoir la transformer en une pièce sonore où le montage et le mixage des sons, spatialisés pour créer des effets psycho-acoustiques, sont faits dans l’esprit de la musique concrète.</i></p>
			
			<p class="newpar"><i>Ces mêmes effets sont parfois également utilisés comme techniques de transcommunication par les chamans et autres acteurs sociaux ou religieux qui utilisent le son pour rassembler/combler/manipuler leurs auditeurs. C’est dans cette corrélation que mon travail trouve un écho au concept de Mos Espa : les esprits de la jungle, le chamanisme, la musique de transe etc.</i></p>
			<p>F.Meirino.</p>
						
		</article>
	</div>	
</section>

<section class="article-bloc extrait-sonore" id="audio">
	<div class="bloc-image"><img src="/img/la-plainte/c12A05-vinyl-side-A.jpg" />
	</div>
	<div class="bloc-texte">
		<?php 
		 	echo c12_page_nav('audio');  
		?>	
		<article class="article cl serif">
		
			<h2>La Plainte – Extrait sonore</h2>
			
			<div class="listen-mp3-box large">
			  	<ul class="playlist dark blisc unstyled">
				  	<li>
						<a class="none" href="../ziq/la_plainte_A_07min.mp3">face a (fragment) - 07’07”-12’27”</a>
					</li>
					<li>
						<a class="none" href="../ziq/la_plainte_B.mp3">face b (fragment) - 00’00”-06’31”</a>
					</li>
				</ul>
			</div>
			
		 		
		</article>
	</div>	
</section>

<section class="article-bloc" id="credits">
	<div class="bloc-image"><img src="/img/la-plainte/c12A05-vinyl-side-B.jpg" />
	</div>
	<div class="bloc-texte">
		<?php 
		 	echo c12_page_nav('credits');  
		?>		
		<article class="article cl serif">
		
		<h2>La Plainte – Crédits</h2>
					
			<p>Francisco Meirino : mixing and composition</p>
			<p>Rashad Becker : dubplate &amp; mastering (berlin)</p>
			<p>Xavier Robel : design</p>
			
		</article>
	</div>	
</section>

<section class="article-bloc" id="bio">
	<div class="bloc-image"><img src="../img/upic/meirino-bio.jpg" />
	</div>
	<div class="bloc-texte">
		<?php 
		 	echo c12_page_nav('bio');  
		?>		
		<article class="article cl serif">
		
		<h2 class="serif">Francisco Meirino - Biographie</h2>
			
			<p>1975 (CH/E)</p>
			
			<p>Actif depuis 1994 (sous le pseudo « phroq » jusqu’en 2009) dans le milieu de la musique expérimentale, Francisco Meirino explore la tension entre le matériel programmable et le potentiel de son échec, il est principalement intéressé par l’idée d’enregistrer ce qui n’est pas censé l’être : pannes d’appareils, la mort de systèmes de sonorisation, les champs magnétiques et électrostatiques.</p>
			
			<p>La musique de Francisco Meirino est un paysage sonore complexe, en constante évolution qui est fascinant par son intensité physique, son niveau de détails et de précision. Il travaille principalement avec l’ordinateur, des magnétophones à bandes, des capteurs de champs magnétiques, toutes sortes de microphones et des enregistreurs de terrain. </p>
			
			<p>Plus de 150 concerts dans différents lieux en Europe, au Japon et en Amérique du Nord et dans des festivals tels que: Activating The Medium (San Francisco, Etats-Unis) / Observatori (Valence, Espagne) / Musica Genera (Varsovie, Pologne) / Norberg Electronic (Norberg, Suède) / Akousma (Montréal, Canada) / LUFF (Lausanne, Suisse) / Ertz (Bera, Espagne) / Impetus (Lausanne, Suisse) / Art Sonora  (Santander, Espagne).</p> 
			
			<p>Au fil des ans, Francisco Meirino eu l’honneur de collaborer en studio et en direct avec des artistes tels que: Dave Phillips / Scott Arford / Michael Gendreau / Randy HY Yau / Lasse Marhaug / Jason Kahn / Gerritt Wittmer / Hong Chulki / Zbigniew Karkowski / Astro / Cindy Van Acker / Tim Olive / Mike Shiflet / ILIOS / Kiko C. Esseiva / Michael Esposito, entre autres.</p>
			
			<p>Il a composé de la musique et proposé des installations sonores pour Radio Airplane (Japon) / Compagnie Greffe, Cindy Van Acker (Suisse) /  Mostra d’Art i Visual Sonor de Barcelone (Espagne) / Compagnie Linga (Suisse) / Gallerie Standard-Deluxe (Suisse).</p>
			
			<p>Francisco Meirino a été récompensée par le prix de composition pour la musique électronique en 2003 par Pro Helvetia.</p>
			
			<p>Il vit et travaille à Lausanne, en Suisse.</p>
			
			<p class="newpar">Pour plus d’infos: <br/>
			<a href="http://www.franciscomeirino.com/" target="blank" title="Francisco Meirino sur franciscomeirino.com (nouvelle fenêtre)">http://www.franciscomeirino.com/</a> </p>
		</article>
	</div>	
</section>	

<section class="article-bloc" id="order">
	<div class="bloc-image"><img src="/img/la-plainte/cover-border.jpg" />
	</div>
	<div class="bloc-texte">
		<?php 
		 	echo c12_page_nav('order');  
		?>		
		<article class="article cl serif">
		
			<h2>Commander (via Paypal)</h2>
			
			<?php 
			
			 	echo c12_paypal(
			 		'Total: 20.- CHF (+ frais de port)', // $text
			 		'CHF', // $currency
			 		'GYKHDXYMTRL3U' // $code
			 	); 
			 	
			 	echo c12_paypal(
			 			'Total: 20 EUR (+ frais de port)', // $text
			 			'EUR', // $currency
			 			'6AWYPYA4CJ56C' // $code
			 		);  
			
			?>			
			<p class="cl">Pour connaître les frais de livraison pour des quantités plus importantes,
			      merci de <a href="/contact/">nous contacter</a>.</p>
			
		</article>
	</div>	
</section>
	

		<?php echo c12_footer(); ?>