<?php  

	include( '../functions.php' );
	
	echo c12_head( 
		'Francisco Meirino - Untitled Phenomenas In Concrete', // title
		'Francisco Meirino - Untitled Phenomenas In Concrete' // descr
	 );
	 
	function c12_page_nav( $active ) {
		
		/*
		 * Usage:
		 * echo c12_page_nav('bio');
		*/
		
		$c12_page_nav = '';
		
		$items = array(
			'about' => 'à propos',
			'about2' => 'about',
			'credits' => 'crédits',
			'bio' => 'bio',
			'order' => 'commander'
		);
		
		$c12_page_nav = c12_page_nav_global( $items, $active );
		
		return $c12_page_nav;
		
	} 

	// page starts at <body>

?>
<body class="album-upic v4" id="body">

  <div id="container" class="">
    
    <?php 
     	echo c12_header('francisco-meirino-upic');  
    ?>
    
    <article id="main" role="main" class="main">
    	<div class="main-inside">
    	
    	<header class="album-title serif">
	    	<h1 class="title-h1 title-one">
	    	Francisco Meirino
	    	</h1>
	    	
	    	<h1 class="title-h1 title-two">
	    	Untitled Phenomenas In Concrete
	    	</h1>
	    	
	    	<div class="title-h1 title-labelinfo">
	    	<p>cave12</p>
	    	<p >Orchestra III</p>
	    	<p class="indent">c12O03</p>
	    	</div>
    	</header>
    	
        	
		
<section class="article-bloc" id="about">
	<div class="bloc-image"><img src="/img/upic/img065-464.jpg" />
	</div>
	<div class="bloc-texte">
		<nav role="navigation" class="nav nav-article mono">
			<ul>
			<li><a href="#about" class="active">à propos</a></li>
			<li><a href="#audio">audio</a></li>
			<li><a href="#credits">crédits</a></li>
			<li><a href="#bio">bio</a></li>
			<li><a href="#order">commander</a></li>
			</ul>
		</nav>		
		<article class="article cl serif">
			
			<h2>Untitled Phenomenas In Concrete</h2>
			
			<p>Composée entre 2008 et 2011, "Untitled Phenomenas In Concrete"  est une pièce assemblée à partir de 85 sessions <strong>UPIC</strong>*, agrémentés de 18 sons externes (entre autres, des enregistrements de neige qui tombe, de craquements d’os, de champs magnétiques et d’insectes).</p>
			
			<p class="newpar">Intéressé par l’approche de Xenakis et désireux de dessiner le son avant de l’entendre, Francisco Meirino a donc passé quasiment 4 ans à composer TRAIT PAR TRAIT "Untitled Phenomenas In Concrete", écoutant chaque trait, ajoutant au fur et à mesure un trait/son, supprimant, remontant, réassemblant, etc, etc… parsemant discrètement l’oeuvre d’enregistrements de sons externes pour humaniser le son et l’outil puis finalisant le tout sur bande magnétique pour ajouter un peu de chaleur à la froideur du traitement digital par UPIC. Bref, un véritable travail de fourmi orfèvrique dont le résultat, documenté sur ce cd, dévoile une cohérence d’agencement sonore de tout premier ordre. Un travail d’une immense délicatesse, au résultat aussi captivant qu’englobant, d’une puissance rampante, avec grande attention aux détails sonores, comme peuvent l’être certains travaux de l’artiste, à notre sens (évidemment) totalement réussi, s’écoutant sans peine et ajoutant un élément/témoignage non-négligeable à la déjà imposante discographie de Meirino. Un excellent travail d’expérimentation sonore que nous nous réjouissons de faire écouter.</p>
			
			<p class="newpar"><i>*L’UPIC est un outil de composition musicale assisté par ordinateur inventé par le compositeur Iannis Xenakis. D’un point de vue matériel, l’UPIC est une tablette graphique, reliée à un ordinateur, avec un affichage vectoriel.</i></p>
			
		</article>
	</div>	
</section>

<section class="article-bloc extrait-sonore" id="audio">
	<div class="bloc-image"><img src="../img/upic/fragment-19-35-c.jpg" />
	</div>
	<div class="bloc-texte">
		<nav role="navigation" class="nav nav-article">
			<ul>
			<li><a href="#about">à propos</a></li>
			<li><a href="#audio" class="active">audio</a></li>
			<li><a href="#credits">crédits</a></li>
			<li><a href="#bio">bio</a></li>
			<li><a href="#order">commander</a></li>
			<li><a href="#body">&uarr;</a></li>
			</ul>
		</nav>		
		<article class="article cl serif">
		
			<h2>Extrait sonore</h2>
			
			<div class="listen-mp3-box large">
			  	<ul class="playlist dark blisc unstyled">
				  	<li>
						<a class="none" href="../ziq/upic-19m35.mp3">UPIC - 19'35''-22'02''</a>
					</li>
				</ul>
			</div>
			
		 		
		</article>
	</div>	
</section>

<section class="article-bloc" id="credits">
	<div class="bloc-image"><img src="/img/upic/img062-464-d.jpg" />
	</div>
	<div class="bloc-texte">
		<nav role="navigation" class="nav nav-article">
			<ul>
			<li><a href="#about">à propos</a></li>
			<li><a href="#audio">audio</a></li>
			<li><a href="#credits" class="active">crédits</a></li>
			<li><a href="#bio">bio</a></li>
			<li><a href="#order">commander</a></li>
			<li><a href="#body">&uarr;</a></li>
			</ul>
		</nav>		
		<article class="article cl serif">
		
		<h2>Crédits</h2>
		
			<p>85 HighC-UPIC sessions
			and various field &amp; electronics recordings assembled and mastered by Francisco Meirino at Shiver Mobile, Lausanne, Switzerland, between 2008 and 2012.</p>
			
			<p class="newpar">Produced by cave12, Geneva</p>
			<p>Distributed by Metamkine</p>
			<p>Avec le soutien de la Ville de Lausanne et des affaires culturelles de l’Etat de Vaud</p>
			<p>Cover design by Eva Rittmeyer + Xavier Robel</p>
			
		</article>
	</div>	
</section>

<section class="article-bloc" id="bio">
	<div class="bloc-image bloc-image-telechargements"><img src="../img/upic/meirino-bio.jpg" />
	<div class="article-sub-bloc telechargements mono">
	<!-- img065-extr.jpg -->
		<h3 class="padlft">Télécharger:</h3>
		
		<ul class="arrow-list big-list blacklinks">
		<li><a href="/img/upic/Cave12_Meirino_Upic.pdf" target="_blank">Dossier de presse</a> [pdf]</li>
		<li><a href="/img/upic/Meirino_photo_by_RandyYau.jpg" target="_blank">Portrait en moyenne résolution</a> [jpg]</li>
		</ul>
		
		<p>Crédit photo: Randy Yau</p>
		
		
	</div>
	
	
	</div>
	<div class="bloc-texte">
		<nav role="navigation" class="nav nav-article">
			<ul>
			<li><a href="#about">à propos</a></li>
			<li><a href="#audio">audio</a></li>
			<li><a href="#credits">crédits</a></li>
			<li><a href="#bio" class="active">bio</a></li>
			<li><a href="#order">commander</a></li>
			<li><a href="#body">&uarr;</a></li>
			</ul>
		</nav>		
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
	<div class="bloc-image"><img src="../img/upic/img061-web.jpg" />
	</div>
	<div class="bloc-texte">
		<nav role="navigation" class="nav nav-article">
			<ul>
			<li><a href="#about">à propos</a></li>
			<li><a href="#audio">audio</a></li>
			<li><a href="#credits">crédits</a></li>
			<li><a href="#bio">bio</a></li>
			<li><a href="#order" class="active">commander</a></li>
			<li><a href="#body">&uarr;</a></li>
			</ul>
		</nav>		
		<article class="article cl serif">
		
			<h2>Commander (via Paypal)</h2>
			
			<form class="form-paypal cl" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="SUPDKDMPTJA8A">
			<input type="image" src="../img/bouton1.png" border="0" name="submit" alt="PayPal - commander pour la Suisse">
			<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
			</form>
			
			<p class="label-prix">Total: 20.- CHF</p>
			
			<form  class="form-paypal cl" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="4YJ7JKQRP8NSQ">
			<input type="image" src="../img/bouton2.png" border="0" name="submit" alt="PayPal - commander pour l'Europe">
			<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
			</form>
			
			<p class="label-prix">
			Total: 15.50 EUR
			</p>
			
			<p class="cl">Pour connaître les frais de livraison pour des quantités plus importantes,
			      merci de <a href="../contact.html">nous contacter</a>.</p>
			
		</article>
	</div>	
</section>
	

		<?php echo c12_footer(); ?>