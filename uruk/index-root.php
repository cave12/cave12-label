<?php  

	include( 'functions.php' );
	
	echo c12_head( 
		'Uruk - The Descent Of Inanna', // title
		'Uruk - The Descent Of Inanna' // descr
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
			// 'bio' => 'bio',
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
    background: #000 url(/img/uruk/cover-minimal.png) repeat left top;
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
     	echo c12_header('uruk');  
    ?>
    
    <article id="main" role="main" class="main">
    	<div class="main-inside">
    	
    	<header class="album-title serif">
	    	<h1 class="title-h1 title-one">
	    	Uruk
	    	</h1>
	    	
	    	<h1 class="title-h1 title-two">
	    	The Descent Of Inanna
	    	</h1>
	    	
	    	<div class="title-h1 title-labelinfo">
	    	<p>cave12</p>
	    	<p >Alive</p>
	    	<p class="indent">c12 A 06</p>
	    	</div>
    	</header>
    	
        	
		
<section class="article-bloc" id="about">
	<div class="bloc-image"><img src="/img/uruk/cover-detail3.png" />
	</div>
	<div class="bloc-texte">
		<?php 
		 	echo c12_page_nav('about');  
		?>	
		<article class="article cl serif">
			
			<h2>The Descent Of Inanna</h2>
						
			<p>Une plongée d’immersion auditive sur stimulante et à la profondeur exceptionnelle. URUK emporte l’auditeur au sein d’un phénoménal paysage dark ambient et de drones souterrains avec une richesse de textures constantes générant une atmosphère à l’intensité extraordinaire.</p>
			
			<p class="newpar">Un voyage dans un monde opaque et aux flux sonore immersif prodigieux, non absent de touches lumineuses par moment, et duquel nous ne voulons plus ressortir.</p>
			
			<p class="newpar">Excellente et magistrale dérive sonore par deux musiciens-héros de très TRES haut-calibre de la scène aventureuse internationale. URUK est la rencontre musicale remarquable entre deux titans de la scène exploratoire internationale, le bassiste italien MASSIMO PUPILLO (membre entre autre du culte trio ZU) et THIGHPAULSANDRA, l’un des majestueux cerveaux/penseurs électroniques se cachant derrière l’ô combien cultissime entité COIL.</p>
			
			<p>////</p>
			
			
			<p class="newpar">An over-stimulating immersive auditive dive with exceptional depth. URUK carries the listener away within a phenomenal landscape of dark ambient and subterranean drones with constant rich textures generating an atmosphere of extraordinary intensity.</p>
			
			<p class="newpar">A journey into an opaque world of prodigious sound flows, not without luminous touches at times, from which we do not want to come back again.</p>
			
			<p class="newpar">Excellent and masterful sound drifts by two very VERY high-caliber musical heroes from the audacious international scene. Uruk is the outstanding musical encounter between two titans of this international exploratory scene, the Italian bassist MASSIMO PUPILLO (member amongst others of the cult trio ZU) and THIGHPAULSANDRA, one of the majestic brains / electronic thinkers hiding behind the oh so very cult entity COIL.</p>
						
		</article>
	</div>	
</section>

<section class="article-bloc extrait-sonore" id="audio">
	<div class="bloc-image"><img src="/img/uruk/cover-minimal.png" />
	</div>
	<div class="bloc-texte">
		<?php 
		 	echo c12_page_nav('audio');  
		?>	
		<article class="article cl serif">
		
			<h2>The Descent Of Inanna – Extrait sonore</h2>
			
			<div class="listen-mp3-box large">
			  	<ul class="playlist dark blisc unstyled">
				  	<li>
						<a class="none" href="../ziq/uruk-fragment.mp3">Queen Of The Great Below (fragment)</a>
					</li>
				</ul>
			</div>
			
		 		
		</article>
	</div>	
</section>

<section class="article-bloc" id="credits">
	<div class="bloc-image"><img src="/img/uruk/uruk-lp-label.jpg" />
	</div>
	<div class="bloc-texte">
		<?php 
		 	echo c12_page_nav('credits');  
		?>		
		<article class="article cl serif">
		
		<h2>Crédits</h2>
					
			<p>Massimo Pupillo : electric bass, electronics</p>
			<p>Thighpaulsandra : synthesisers, electronics, piano</p>
			<p>&nbsp;</p>
			<p>Recorded at Cave12 17.12.2017 by Jérôme Leonard</p>
			<p>Mastered at Triple Sun by Lorenzo Stecconi</p>
			
		</article>
	</div>	
</section>

<section class="article-bloc" id="order">
	<div class="bloc-image"><img src="/img/uruk/vinyl.png" />
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
			 		'HQ7NZSBLCP7DY' // $code
			 	); 
			 	
			 	echo c12_paypal(
			 		'Total: 20 EUR (+ frais de port)', // $text
			 		'EUR', // $currency
			 		'FDF59JEJKYJ7A' // $code
			 	);  
			
			?>			
			<p class="cl">Pour connaître les frais de livraison pour des quantités plus importantes,
			      merci de <a href="/contact/">nous contacter</a>.</p>
			
		</article>
	</div>	
</section>

<?php echo c12_footer(); ?>