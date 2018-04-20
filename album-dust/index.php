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
		'Antoine Chessex - Dust', // title
		'Antoine Chessex - Dust, for 3 violins, backtape and electronics' // descr
	 );

?>
<body class="album-dust v4" id="body">

  <div id="container" class="">
    <?php 
     	echo c12_header('album-dust');  
    ?>
    
    <article id="main" role="main" class="main">
    	<div class="main-inside">
    	
    	<header class="album-title serif">
	    	<h1 class="title-h1 title-one">
	    	Antoine Chessex
	    	</h1>
	    	
	    	<h1 class="title-h1 title-two">
	    	Dust<br/>
	    	for 3 violins, backtape<br/>
	    	and electronics
	    	</h1>
	    	
	    	<div class="title-h1 title-labelinfo">
	    	<p>cave12</p>
	    	<p >Orchestra II</p>
	    	<p class="indent">c12O02</p>
	    	</div>
    	</header>
    	
		
		<section class="article-bloc" id="about">
			<div class="bloc-image"><img src="../img/dust/dust-cover-10.jpg" />
			</div>
			<div class="bloc-texte">
				<nav role="navigation" class="nav nav-article mono">
					<ul>
					<li><a href="#about" class="active">à propos</a></li>
					<li><a href="#credits">crédits</a></li>
					<li><a href="#bio">bio</a></li>
					<li><a href="#presse">presse</a></li>
					<li><a href="#order">commander</a></li>
					<li><a href="#body">&uarr;</a></li>
					</ul>
				</nav>		
				<article class="article cl serif">
					
					<h2>Dust</h2>
					
					<p>est une pièce composée par l'artiste suisse Antoine Chessex.</p>
					
					<p>Une lente progression meta-physique, la jonction de violons tendus et d'une poussière revoxienne, se juxtaposant, se recouvrant, se résorbant et s'accompagnant, avant d'exploser en une puissante catharsis finale.</p>
					
					<p>Comme une proposition de départ vers l'infini, un avant-après Big Bang imagé, fortement réussi, inquiétant par moment comme l'est le vaste inconnu...  la musique d'un vaisseau en partance vers les limites du cosmos peut-être, en tout cas elle peut résonner comme ça à nos simples oreilles terriennes.</p>
					
					<p>Une superbe pièce, savamment orchestrée et puissamment réalisée par des interprètes complètement à leur affaire... </p>
					
					
					
				</article>
			</div>	
		</section>

<section class="article-bloc" id="credits">
	<div class="bloc-image"><img src="../img/dust/dust-cover-07.jpg" />
	</div>
	<div class="bloc-texte">
		<nav role="navigation" class="nav nav-article">
			<ul>
			<li><a href="#about">à propos</a></li>
			<li><a href="#credits" class="active">crédits</a></li>
			<li><a href="#bio">bio</a></li>
			<li><a href="#presse">presse</a></li>
			<li><a href="#order">commander</a></li>
			<li><a href="#body">&uarr;</a></li>
			</ul>
		</nav>		
		<article class="article cl serif">
		
		<h2>Crédits</h2>
		
			<p>Composed by Antoine Chessex</p>
			
			<p>Performed by <br/>
			Elfa Rún Kristinsdóttir: Violin <br/>
			Ekkehard Windrich: Violin <br/>
			Steffen Tast: Violin <br/>
			Valerio Tricoli: reel to reel tape recorder, electronics
			</p>
			
			<p>Recorded at Berghain in Berlin, january 2010 by Kassian Troyer</p>

			<p>Mixed and edited by Valerio Tricoli and Antoine Chessex in Berlin</p>

			<p>Mastered by Rashad Becker at Clunk studio in Berlin, December 2010</p>
			
			<p>Cover design by Eva Rittmeyer + Xavier Robel</p>
			
			<p>Produced by cave12, Geneva</p>
			
			<p>Distribution by Metamkine</p>
			
		</article>
	</div>	
</section>

<section class="article-bloc" id="bio">
	<div class="bloc-image bloc-image-telechargements"><img src="../img/dust/portrait-chessex.jpg" />
	<div class="article-sub-bloc telechargements mono">
	
		<h3 class="padlft">Télécharger:</h3>
		
		<ul class="arrow-list big-list blacklinks">
		<li><a href="/img/dust-downloads/DUST_Chessex.pdf" target="_blank">Dossier de presse</a> [pdf]</li>
		<li><a href="/img/dust-downloads/Antoine-Chessex-TIF.zip" target="_blank">Portrait en haute résolution</a> [tif]</li>
		</ul>
		
		
	</div>
	
	
	</div>
	<div class="bloc-texte">
		<nav role="navigation" class="nav nav-article">
			<ul>
			<li><a href="#about">à propos</a></li>
			<li><a href="#credits">crédits</a></li>
			<li><a href="#bio" class="active">bio</a></li>
			<li><a href="#presse">presse</a></li>
			<li><a href="#order">commander</a></li>
			<li><a href="#body">&uarr;</a></li>
			</ul>
		</nav>		
		<article class="article cl serif">
		
		<h2 class="serif">Antoine Chessex - Biographie</h2>
			
			<p>Antoine Chessex (né en 1980 à Vevey en Suisse) est un compositeur, saxophoniste et artiste sonore.</p>
			
			<p>Ses travaux se basent sur l'exploration de la physicalité du son et des espaces ainsi que sur les phénomènes psychoacoustiques liés aux réactions du son à l'architecture. Chessex s'est produit dans de nombreux festivals de musique expérimentale autour du globe, notamment au Japon, en Chine, en Russie, aux États-Unis et en Europe.</p>
			
			<p>En 2009, il reçoit une commande de composition de la fondation Pro Helvetia pour <b class="soft"><i>"Dust"</i></b>, pièce pour trois violons et électronique. En 2010, l'Ensemble Phoenix de Bâle lui commande <b class="soft"><i>"Metakatharsis"</i></b> pour ensemble acoustique et électronique. En 2011, le Kammerensemble Neue Musik de Berlin lui commande <b class="soft"><i>"Spur"</i></b>, une pièce pour tuba, violon et percussions.</p>
			
			<p>En parallèle à ses activités de compositeur, Chessex est actif internationalement comme saxophoniste et performeur solo. Ses performances solos se déclinent soit en version acoustique (textures micro-tonales jouées en respiration circulaire interagissant avec l'architecture du lieu où il se produit) soit en amplifiant son instrument au moyen d´un dispositif électronique résultant en des expériences physiques en totale immersion dans le son, détournant radicalement le saxophone de sa tradition bien tempérée.</p>
			
			<p>En addition à de régulières tournées internationales comme performeur solo, il se produit également avec le groupe Monno (Conspiracy records) et au travers de collaborations avec des nombreux artistes tels que Valerio Tricoli, Maja Ratkje, Lasse Marhaug, Zbigniew Karkowski, Chris Corsano, C. Spencer Yeh, Thomas Ankersmit, Burkhard Beins, Mattin, Robin Hayward, Axel Dörner, Hans Koch, Kasper T. Toeplitz, Didi Bruckmayr, Christian Weber, Daniel Buess, Gilles Aubry, l'architecte Christian Waldvogel (Globus Cassus), ou l'artiste multimédia Ulrike Gabriel (flow 2002-2003).</p>
			
			<p>Pour plus d'infos: <br/>
			<a href="http://www.soundimplant.com/achessex.html" target="blank" title="Antoine Chessex sur soundimplant.com (nouvelle fenêtre)">http://www.soundimplant.com/achessex.html</a> </p>
		</article>
	</div>	
</section>	

<section class="article-bloc" id="presse">
	<div class="bloc-image"><img src="../img/dust/dust-cover-20.jpg" />
	</div>
	<div class="bloc-texte">
		<nav role="navigation" class="nav nav-article">
			<ul>
			<li><a href="#about">à propos</a></li>
			<li><a href="#credits">crédits</a></li>
			<li><a href="#bio">bio</a></li>
			<li><a href="#presse" class="active">presse</a></li>
			<li><a href="#order">commander</a></li>
			<li><a href="#body">&uarr;</a></li>
			</ul>
		</nav>		
		<article class="article cl serif">
		
		<h2>Presse</h2>
		
		<p>Moving, textural, orchestral, modern... now, if only all modern composing sounded like this!
		<cite><a href="http://www.vitalweekly.net/791.html" target="_blank">Vital Weekly/Fdw</a></cite></p>
		
			<p>When it comes to the impact of a statement, I’m all for conciseness. This piece by Antoine Chessex, which lasts 29 minutes, is a perfect specimen of how an essential concept can be entirely developed across a short time span if lucidity is there from the beginning.
			<cite><a href="http://touchingextremes.wordpress.com/2011/06/27/antoine-chessex-dust/" target="_blank">Touching Extremes/Massimo Ricci</a></cite></p>


			<p>Chessex et ses quatre comparses créent un décor où l’abstraction sonore cède le pas, petit à petit, à une très étonnante – et excitante – tension aux frontières du dantesque.
			<cite><a href="http://grisli.canalblog.com/archives/2011/09/30/22193022.html" target="_blank">Fabrice Vanoverberg / Le son du grisli</a></cite></p>
	
			<p>Ein bedrohliches, beängstigendes Szenario breitet Chessex vor unseren Ohren aus. 
			<cite><a href="/img/dust-reviews/Chessex_Freistil_Oct11.pdf" target="_blank">Freistil/ Felix</a></cite></p>
			
						<p>Monòcromo per tre violini e materiale eletronico, di estrema essenzialità e notevole impatto emotivo.
			<cite><a href="/img/dust-reviews/Chessex_BlowUp_Sep11.jpg" target="_blank">Blow Up</a></cite></p>
					
			<p>Die Violinen fächern auf und heben als Glissandos ab bis in höchste Höhen, umbraust wie eine startende Rakete, die mit schrillem Trillern dem Blick entschwindet und nur Stille hinterlässt.
			<cite><a href="/img/dust-reviews/Chessex_BA.pdf" target="_blank">Bad Alchemy/Rigo Dittmann</a></cite></p>
			
		</article>
	</div>	
</section>

<section class="article-bloc" id="order">
	<div class="bloc-image"><img src="../img/dust/dust-cover-01.jpg" />
	</div>
	<div class="bloc-texte">
		<nav role="navigation" class="nav nav-article">
			<ul>
			<li><a href="#about">à propos</a></li>
			<li><a href="#credits">crédits</a></li>
			<li><a href="#bio">bio</a></li>
			<li><a href="#presse">presse</a></li>
			<li><a href="#order" class="active">commander</a></li>
			<li><a href="#body">&uarr;</a></li>
			</ul>
		</nav>		
		<article class="article cl serif">
		
			<h2>Commander (via Paypal)</h2>
			
			<form class="form-paypal cl" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="KBM352G854WD4">
			<input type="image" src="../img/bouton1.png" border="0" name="submit" alt="PayPal - commander pour la Suisse">
			<img alt="" border="0" src="https://www.paypalobjects.com/WEBSCR-640-20110429-1/de_DE/i/scr/pixel.gif" width="1" height="1">
			</form>
			
			<p class="label-prix">Total: 20.- CHF</p>
			
			<form  class="form-paypal cl" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="H6J9RBL8QRZ6L">
			<input type="image" src="../img/bouton2.png" border="0" name="submit" alt="PayPal - commander pour l'Europe">
			<img alt="" border="0" src="https://www.paypalobjects.com/WEBSCR-640-20110429-1/de_DE/i/scr/pixel.gif" width="1" height="1">
			</form>
			
			<p class="label-prix">
			Total: 15.50 EUR
			</p>
			
			<p class="cl">Pour connaître les frais de livraison pour des quantités plus importantes,
			      merci de <a href="../contact.html">nous contacter</a>.</p>
			
		</article>
	</div>	
</section>
	

		</div><!--! end of .main-inside -->
    </article><!--! end of #main -->
    <footer class="footer hidden">
		-
    </footer>
    
  </div> <!--! end of #container -->


  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="../js/libs/jquery-1.6.2.min.js"><\/script>')</script>


  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="js/plugins.js"></script>
  <script defer src="js/script.js"></script>
  <script defer src="js/jquery.easing.1.3.min.js"></script>
  <!-- end scripts-->

  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
  <script type="text/javascript">
              $(function() {
                  $('.nav-article a').bind('click',function(event){
                      var $anchor = $(this);
                      
//                      $('html, body').stop().animate({
//                          scrollTop: $($anchor.attr('href')).offset().top
//                      }, 1000,'easeInOutExpo');
                      
//                      if you don't want to use the easing effects:
                      $('html, body').stop().animate({
                          scrollTop: $($anchor.attr('href')).offset().top
                      }, 500);
                      
                      event.preventDefault();
                  });
              });
          </script>
  
  <!-- Piwik -->
  <script type="text/javascript">
  var pkBaseURL = (("https:" == document.location.protocol) ? "https://www.cave12.org/piwik/" : "http://www.cave12.org/piwik/");
  document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
  </script><script type="text/javascript">
  try {
  var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 5);
  piwikTracker.trackPageView();
  piwikTracker.enableLinkTracking();
  } catch( err ) {}
  </script><noscript><p><img src="http://www.cave12.org/piwik/piwik.php?idsite=5" style="border:0" alt="" /></p></noscript>
  <!-- End Piwik Tracking Code -->
</body>
</html>
