<?php  

	include( '../functions.php' );
	
	 
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

	echo c12_head( 
		'Norbert M&ouml;slang - killer_kipper', // title
		'Norbert Möslang - killer_kipper' // descr
	 );

?>
<body class="album-moeslang v4" id="body">

  <div id="container" class="">
    <?php 
     	echo c12_header('norbert-moeslang');  
    ?>
    
    <article id="main" role="main" class="main">
    	<div class="main-inside">
    	
    	<header class="album-title serif article-bloc">
	    	<h1 class="title-h1 title-one">
	    	Norbert Möslang
	    	</h1>
	    	
	    	<h1 class="title-h1 title-two">
	    	killer_kipper
	    	</h1>
	    	
	    	<div class="title-h1 title-labelinfo">
	    	<p>cave12</p>
	    	<p >Alive II</p>
	    	<p class="indent">c12 A 02</p>
	    	</div>
    	</header>
    	
		
		<section class="article-bloc" id="about">
			<div class="bloc-image"><img src="/img/killer_kipper/cover01.jpg" alt="" />
			</div>
			<div class="bloc-texte">
				<?php 
				 	echo c12_page_nav('about');  
				?>		
				<article class="article cl serif">
					
					<h2>killer_kipper</h2>
					
						<p>Cette pièce sonore a été enregistrée le 23.9.11 au Bâtiment d’art contemporain, Genève, sur l’invitation de la cave12 et du FMAC dans le cadre de la manifestation d’art contemporain (MAC 11).</p>
						
						<p class="newpar"> Il s’agit d’une performance live d’une durée de 26’58” réalisée à partir de composants électroniques trafiqués<sup>*</sup>.</p>
						
						 <p class="newpar">Disque témoin d’une puissante et formidablement englobante expérience live.</p>
						 
						 <p class="newpar">Sortie coup-de-coeur en étroite collaboration avec l’artiste, désireuse de témoigner de l'impressionnant et imposant travail de Norbert Möslang, pour ce qui fut, sur le moment, une véritable leçon de virtuosité-manipulation des “cracked everyday electronics”.
						 </p>
						 
						 <p class="newpar"><i>“cracked everyday electronics” – All of life consists of vibrations, and all of these relate to particular resonances. There are light waves, sound waves, microwaves… In this context you can start to combine things and, for example, use a radio as resonator for the waves from	a remote control. And if it maybe doesn't work, then you just have to go on changing the fre quencies and looking for connections until you've cracked it. – Norbert Möslang</i></p>
			
				</article>
			</div>	
		</section>
		
		<section class="article-bloc" id="about2">
					<div class="bloc-image"><img src="/img/killer_kipper/cover03.jpg" alt="" />
					</div>
					<div class="bloc-texte">
						<?php 
						 	echo c12_page_nav('about2');  
						?>		
						<article class="article cl serif">
							
							<h2>killer_kipper</h2>
							
								<p>This sound piece was recorded on the 23.9.11 in the contemporary art building (Bâtiment d'art contemporain, Geneva), upon an invitation of the Cave 12 and the FMAC to the contemporary art festival (MAC 11).</p>
								
								<p class="newpar">It is a live performance of 27 min performed with cracked electronics. The vinyl is the testimony of a powerful and greatly encompassing live experience.</p>
								
								<p class="newpar">Produced working closely with the artist, this disc is the affirmation of the very impressing and powerful work of Norbert Möslang. Which was, at the moment of his live act, a striking demonstration of masterly skills in the manipulation of "cracked everyday electronics".</p>
					
						</article>
					</div>	
				</section>
		

<section class="article-bloc" id="credits">
	<div class="bloc-image"><img src="/img/killer_kipper/disk01.jpg" alt="" />
	</div>
	<div class="bloc-texte">
		<?php 
		 	echo c12_page_nav('credits');  
		?>			
		<article class="article cl serif">
		
		<h2>Crédits</h2>
							
							<div class="disk-format">
								<p>Format: 12” vinyl, black</p>
								<p>side_a: 13’38”</p>
								<p>side_b: 13’20”</p>
							</div>
		
							<p class="newpar"><b>Norbert Möslang</b></p>
							 <p>cracked everyday electronics</p>
							
							<p class="newpar"><b>Enregistrement</b></p>
							<p>Marc Gessler & Nicolas Favrod-Coune pour LUFF.fm</p>
							
							<p class="newpar"><b>Mastering</b></p>
							<p>Pierre Bendel @ zackstudio</p>
																
				      <p class="newpar"><b>Production</b></p>
				       <p>cave12 & LUFF</p>
				      
				      <p class="newpar"><b>Distribution</b></p>
				       <p>Metamkine</p>
				       
				      <p class="newpar"><b>Graphisme</b></p>
				      	<p>Xavier Robel & Eva Rittmeyer</p>
				      	
				      <p class="newpar">Avec le soutien du Fond d’art contemporain de la Ville de Genève (FMAC)</p>
				      	  
		</article>
	</div>	
</section>

<section class="article-bloc" id="bio">
	<div class="bloc-image"><img src="/img/killer_kipper/Norbert_Moeslang.jpg" alt="" />
	
	</div>
	<div class="bloc-texte">
		<?php 
		 	echo c12_page_nav('bio');  
		?>		
		<article class="article cl serif">
		
		<h2 class="serif">Norbert Möslang</h2>
			
			<p>1952 St.Gall</p>
			
			<p>Travaille dès le début des années 80 à étendre les possibles d’interventions / investigations / détournements sonores. Intervient souvent in situ, et réalise avec Andy Guhl ses premières installations et performances, documentées entre autre dans le film de Peter Liechti <i>Kick that Habit</i> (1989).</p>
			
			<p>Actif dans le domaine des arts visuel et sonore, il réalise en 2001 l’installation <i>sound_shifting</i> conçue pour l’église San Stae durant la 49e Biennale de Venise, documentée dans le livre-cd <i>San Stae</i> aux ed. Memory Cage.</p>
			
			<p>Le duo Voice Crack, qu’il forme avec Andy Guhl, sera actif jusqu’en 2002.</p>
			
			<p>Développe un langage sonore et visuel en utilisant les vibrations, champs magnétiques, fréquences, de composants électroniques trafiqués.</p>
			
			<p>Collabore avec de nombreux artistes de la scène expérimentale suisse et internationale : poire_z et king UbU Orchestra, Borbetomagus, Otomo Yoshihide, Günter Müller, ErikM, Jérome Noetinger, Lionel Marchetti, Jim O'Rourke, Kevin Drumm, Jason Kahn, Oren Ambarchi, Tomas Korber, Keith Rowe, I-sound, Toshi Nakamura, Maria, Keiichiro Shibuya, Aube, Carlos Zingaro, Christian Weber, Florian Hecker.</p>
			
			<p>Récompensé en 2007 par le <i>Prix Namics</i> pour les nouveaux médias, récompensé en 2010 pour la meilleure musique de film <i>The sound of insects</i>, un film de Peter Liechti, par le <i>SwissFilm Award</i> et reçoit en 2011 le <i>Cinema Eye Award</i> (New York) pour la même oeuvre.</p>
			
			  <p class="newpar">
			  <strong>Site internet:</strong><br>
			 <a href="http://moeslang.com/">http://moeslang.com</a></p>
			  
		</article>
	</div>	
</section>	

<section class="article-bloc" id="order">
	<div class="bloc-image"><img src="/img/killer_kipper/disk02.jpg" alt="" />
	</div>
	<div class="bloc-texte">
		<?php 
		 	echo c12_page_nav('order');  
		?>			
		<article class="article cl serif">
		
			<h2>Commander (via Paypal)</h2>
						
			<form class="form-paypal cl" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="YZAA86WX8PHMU">
			<input type="image" src="/img/bouton1.png" name="submit" alt="PayPal - commander pour la Suisse">
			<img alt="" src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" width="1" height="1">
			</form>
			
			<p class="label-prix">Total: 20.- CHF (+ frais de port)</p>
			
			<form  class="form-paypal cl" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="89QLWYV69Z7UC">
			<input type="image" src="/img/bouton2.png" name="submit" alt="PayPal - commander pour l'Europe">
			<img alt="" src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" width="1" height="1">
			</form>
			
			<p class="label-prix">
			Total: 20 EUR (+ frais de port)
			</p>
			
			<p class="cl">Pour connaître les frais de livraison pour des quantités plus importantes,
			      merci de <a href="/contact/">nous contacter</a>.</p>
			
		</article>
	</div>	
</section>

<?php echo c12_footer(); ?>