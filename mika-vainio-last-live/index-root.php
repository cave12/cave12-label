<?php  

	include( 'functions.php' );
	
	echo c12_head( 
		'Mika Vainio - Last Live', // title
		'Mika Vainio - Last Live' // descr
	 );
	 
	function c12_page_nav( $active ) {
		
		/*
		 * Usage:
		 * echo c12_page_nav('bio');
		*/
		
		$c12_page_nav = '';
		
		$items = array(
			'about' => 'about',
			'apropos' => 'à propos',
			'audio' => 'audio',
			'credits' => 'credits',
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
	.album-last-live .main {
    background: #000 url(/img/vainio/cover-900.jpg) repeat left top;
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
	
	.extrait-sonore .bloc-image {
		max-height: none;
	}
	
	ul.playlist.blisc li {
		margin: 12px 0;
	}
	ul.playlist li a {
		font-size: 160%;
		padding-bottom: 0.2em;
	}
	
	p {
		/*text-indent: 0;*/
	}
	
	.label-prix {
		padding-left: 1em;
		text-indent: 0;
	}
	
</style>
<body class="album-last-live v4" id="body">

  <div id="container" class="">
    
    <?php 
     	echo c12_header('mika-vainio-last-live');  
    ?>
    
    <article id="main" role="main" class="main">
    	<div class="main-inside">
    	
    	<header class="album-title serif">
	    	<h1 class="title-h1 title-one">
	    	Mika Vainio
	    	</h1>
	    	
	    	<h1 class="title-h1 title-two">
	    	Last Live
	    	</h1>
	    	
	    	<div class="title-h1 title-labelinfo">
	    	<p>cave12</p>
	    	<p >Alive VII</p>
	    	<p class="indent">c12 A 07</p>
	    	</div>
    	</header>
    	
        	
		
<section class="article-bloc" id="about">
	<div class="bloc-image"><img src="/img/vainio/cover-900.jpg" />
	</div>
	<div class="bloc-texte">
		<?php 
		 	echo c12_page_nav('about');  
		?>	
		<article class="article cl serif">
			
			
			<p>This edition was produced and finalized in a particular context, Mika Vainio having left us on 12.04.2017.</p>
			<p class="newpar">This material is the last concert he gave. It took place at Cave12 on 02.02.2017.</p>
			<p class="newpar">We needed time to listen to this archive again, which we did in situ in June 2020 with Cindy Van Acker. After this listening, we felt invested in having to make this archive public.</p>
			<p class="newpar">In order to work on this material, we asked Carl Michael von Hausswolff to do the editing. He extended the invitation to Stephen O’Malley who kindly joined in and headed the process to execute the pre-master in August 2020 at EMS, Stockholm, Sweden. At our request, this recording was organized in 4 movements. Denis Blackham did the mastering at Skye Mastering, Scotland.</p>
			<p class="newpar">This process was carried out in collaboration with Rikke Lundgreen.</p>
			<p class="newpar">Released in association with Editions Mego, Vienna.</p>
				
			<p>Thanks to Rikke Lundgreen, Cindy Van Acker, Franz Graf, Atte Vainio.</p>

		</article>
	</div>	
</section>

<section class="article-bloc" id="apropos">
	<div class="bloc-image"><img src="/img/vainio/circle-900-b.jpg" />
	</div>
	<div class="bloc-texte">
		<?php 
		 	echo c12_page_nav('apropos');  
		?>	
		<article class="article cl serif">
			
			
			<p>Cette édition a été finalisée et produite dans un contexte particulier, Mika Vanio nous ayant quittés en 2017.</p>
			<p class="newpar">Ce matériel est le dernier concert qu’il a donné, il a eu lieu à la Cave12 le 02.02.2017.</p>
			<p class="newpar">Nous avons eu besoin de temps pour réécouter cette archive, ce que nous avons fait in situ en juin 2020 en compagnie de Cindy Van Acker. Après l’écoute de cette œuvre, nous nous sommes sentis investis du devoir de publier cette archive.</p>
			<p class="newpar">Afin de travailler sur ce matériel, nous avons fait appel à Carl Michel von Hausswolff, il a étendu l’invitation à Stephen O’Malley qui s’est aimablement joint au processus et a réalisé le master en août 2020 aux Studios EMS à Stockholm, Suède.</p>
			
			<p class="newpar">À notre demande, cet enregistrement a été organisé en quatre mouvements.</p>
			<p class="newpar">Denis Blackham a fait le mastering au Studio Skye Mastering en Écosse.</p>
			<p class="newpar">Ce processus a été réalisé en collaboration avec Rikke Lundgreen.</p>
			<p class="newpar">Publié en association avec Editions Mego, Vienne.</p>
				
			<p>Thanks to Rikke Lundgreen, Cindy Van Acker, Franz Graf, Atte Vainio.</p>

		</article>
	</div>	
</section>

<section class="article-bloc extrait-sonore" id="audio">
	<div class="bloc-image"><img src="/img/vainio/movement-1.jpg" />
	</div>
	<div class="bloc-texte">
		<?php 
		 	echo c12_page_nav('audio');  
		?>	
		<article class="article cl serif">
		
			<h2>Excerpts</h2>
			
			<div class="listen-mp3-box large">
			  	<ul class="playlist dark blisc unstyled">
				  	<li>
						<a class="none" href="../ziq/vainio-movement-2-xcr-1.mp3">Movement 2 (excerpt 1)</a>
					</li>
					<li>
						<a class="none" href="../ziq/vainio-movement-2-xcr-2.mp3">Movement 2 (excerpt 2)</a>
					</li>
					<li>
						<a class="none" href="../ziq/vainio-movement-3-excerpt.mp3">Movement 3 (excerpt)</a>
					</li>
				</ul>
			</div>
			
		 		
		</article>
	</div>	
</section>

<section class="article-bloc" id="credits">
	<div class="bloc-image"><img src="/img/vainio/movement-3.jpg" />
	</div>
	<div class="bloc-texte">
		<?php 
		 	echo c12_page_nav('credits');  
		?>		
		<article class="article cl serif">
		
		<h2>Credits</h2>
					
			<p>Recorded at Cave12 Geneva by Benjamin Ephise</p>
			<p>Produced by Cave12 &amp; Editions Mego</p>
			<p>Edit by Stephen O’Malley and Carl Michael von Hausswolff at EMS Stockholm</p>
			<p>Mastered by Denis Blackham at Skye Mastering Scotland</p>
			<p>Design by Xavier Robel</p>
			<p>Cut by Andreas Kauffelt at Schnittstelle</p>
			<p>Artworks by Franz Graf, Mika Vainio Archive Oslo &amp; CM von Hausswolff collection</p>
			<p>Berlin studio photo by Atte Vainio 2010</p>
			
		</article>
	</div>	
</section>


<section class="article-bloc" id="order">
	<div class="bloc-image"><img src="/img/vainio/movement-4.jpg" />
	</div>
	<div class="bloc-texte">
		<?php 
		 	echo c12_page_nav('order');  
		?>		
		<article class="article cl serif">
		
			<h2>Commander (via Paypal)</h2>
			
			<?php 
			
			 	echo c12_paypal(
			 		'Total: 30.- CHF (+ envoi recommandé: 9.- CHF)', // $text
			 		'CHF', // $currency
			 		'5LT9FXJLXQBDG' // $code
			 	); 
			 	
			 	echo c12_paypal(
		 			'Total: 26 EUR (+ shipping: 9 EUR)', // $text
		 			'EUR', // $currency
		 			'RFH6WSB2E225Y' // $code
			 	);  
			
			?>			
			<p class="cl">Pour connaître les frais de livraison pour des quantités plus importantes,
			      merci de <a href="/contact/">nous contacter</a>.</p>
			
		</article>
	</div>	
</section>
	

		<?php echo c12_footer(); ?>