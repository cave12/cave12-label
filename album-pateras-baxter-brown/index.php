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
		'Pateras/Baxter/Brown - Live à l’Usine', // title
		'Pateras/Baxter/Brown - Live à l’Usine' // descr
	 );

?>
<body class="album-pbb v4" id="body">

  <div id="container" class="">
    <?php 
     	echo c12_header('album-pateras-baxter-brown');  
    ?>
    
    <article id="main" role="main" class="main">
    	<div class="main-inside">
    	
    	<header class="album-title serif article-bloc">
	    	<h1 class="title-h1 title-one">
	    	Pateras / Baxter / Brown
	    	</h1>
	    	
	    	<h1 class="title-h1 title-two">
	    	Live at l’Usine
	    	</h1>
	    	
	    	<div class="title-h1 title-labelinfo">
	    	<p>cave12</p>
	    	<p >Alive I</p>
	    	<p class="indent">c12a01</p>
	    	</div>
    	</header>
    	
		
		<section class="article-bloc" id="about">
			<div class="bloc-image"><img src="../img/pbb/pbb-detail-03.jpg" alt="" />
			</div>
			<div class="bloc-texte">
				<nav role="navigation" class="nav nav-article mono">
					<ul>
					<li><a href="#about" class="active">à propos</a></li>
					<li><a href="#credits">crédits</a></li>
					<li><a href="#bio">bio</a></li>
<!--					<li><a href="#presse">presse</a></li>-->
					<li><a href="#order">commander</a></li>
					<li><a href="#body">&uarr;</a></li>
					</ul>
				</nav>		
				<article class="article cl serif">
					
					<h2>Live at l’Usine</h2>
					
					<p>Piano pr&eacute;par&eacute; percussif</p>
					
						 <p>Guitare pr&eacute;par&eacute;e percussive</p>
						 <p>Batterie percussive...</p>
						
						 <p class="newpar">Fascinant amoncellement et enchev&ecirc;trement progressif de sonorit&eacute;s percussives par l’un des meilleurs trios improvis&eacute;s de la sc&egrave;ne internationale actuelle, capt&eacute; en live lors d’un dense concert dans la b&acirc;tisse noire &amp; rock de l’Usine.</p>
						 
						 <p class="newpar">Percussive Impro de haute tenue!</p>
			
					
				</article>
			</div>	
		</section>

<section class="article-bloc" id="credits">
	<div class="bloc-image"><img src="../img/pbb/pbb-detail-04.jpg" alt="" />
	</div>
	<div class="bloc-texte">
		<nav role="navigation" class="nav nav-article">
			<ul>
			<li><a href="#about">à propos</a></li>
			<li><a href="#credits" class="active">crédits</a></li>
			<li><a href="#bio">bio</a></li>
<!--			<li><a href="#presse">presse</a></li>-->
			<li><a href="#order">commander</a></li>
			<li><a href="#body">&uarr;</a></li>
			</ul>
		</nav>		
		<article class="article cl serif">
		
		<h2>Crédits</h2>
		
			<p><b>Anthony Pateras</b>
						<p>prepared piano</p>
			
				      <p class="newpar"><b>Sean Baxter</b>
				       <p>percussion</p>
				      
				      <p class="newpar"><b>David Brown</b>
				       <p>prepared guitar</p>
				       
				       <p class="newpar">Recorded live in concert at l’Usine, Geneva, December 2006 by Adrien Kessler</p>
				        <p>Mastered at Wilkinsound, Melbourne, August 2008 by James Wilkinson</p>
				        <p>Photo &amp; design Marion Innocenzi, Claire Goodyear
				        </p>
			
		</article>
	</div>	
</section>

<section class="article-bloc" id="bio">
	<div class="bloc-image"><img src="../img/pbb/pbb-detail-05.jpg" alt="" />
	<div class="article-sub-bloc telechargements mono hidden">
	
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
<!--			<li><a href="#presse">presse</a></li>-->
			<li><a href="#order">commander</a></li>
			<li><a href="#body">&uarr;</a></li>
			</ul>
		</nav>		
		<article class="article cl serif">
		
		<h2 class="serif">Pateras/Baxter/Brown</h2>
			
			<p>Le trio Pateras/Baxter/Brown joue de la musique acoustique exploratoire, utilisant
			divers processus de composition pour cr&eacute;er des structures et des sons fluides
			et dynamiques. Form&eacute; mi-2002 &agrave; Melbourne, le trio a &eacute;t&eacute; inspir&eacute; par un d&eacute;sir
			commun d’explorer des formes extr&ecirc;mes de techniques &eacute;tendues sur des instruments
			acoustiques conventionnels dans un contexte improvis&eacute;.</p>
			
			<p>Le point commun du groupe est l’utilisation de la pr&eacute;paration - un processus
			de manipulation de sons acoustiques familiers en introduisant des objets &eacute;trangers
			directement sur et/ou dans les &#8222;planches&#8220; &agrave; sons et les composants produisant
			du son. A travers l’utilisation de la pr&eacute;paration, le groupe a &agrave; sa disposition
			un set partag&eacute; de possibilit&eacute;s sonores dans lequel il devient souvent ambig&uuml;
			de cerner quel instrument ou performeur produit les sons particuliers que l’auditeur
			entend.</p>
			
			
			<p>Le trio a d&eacute;velopp&eacute; un langage solide dans lequel tous les musiciens sont simultan&eacute;ment
			conscients de la logique qu’une performance donn&eacute;e a prise et sont libres de
			d&eacute;velopper cette logique dans pratiquement n’importe quelle direction. Ce langage
			interne acquiert m&ecirc;me une plus grande profondeur par l’allusion &agrave; de nombreuses
			traditions de musique contemporaine ou traditionnelle bas&eacute;e sur le percussif,
			comme la musique de chambre contemporaine, l’improvisation et les traditions
			percussives non-occidentales telles que le gamelan. En octobre 2004, ils font
			leur premi&egrave;re tourn&eacute;e europ&eacute;enne, salu&eacute;e par <i>The Wire</i> (l’icontournable magazine
			anglais des musiques aventureuses) qui les cite comme l’un des meilleurs concerts
			de l’ann&eacute;e 2004.</p>
			
			  <p class="newpar">
			  <strong>Plus d’infos :</strong><br>
			<a href="http://anthonypateras.com/" target="_blank">http://anthonypateras.com/</a></p>
			  
			  
		</article>
	</div>	
</section>	

<section class="article-bloc" id="order">
	<div class="bloc-image"><img src="../img/pbb/pbb-detail-06.jpg" alt="" />
	</div>
	<div class="bloc-texte">
		<nav role="navigation" class="nav nav-article">
			<ul>
			<li><a href="#about">à propos</a></li>
			<li><a href="#credits">crédits</a></li>
			<li><a href="#bio">bio</a></li>
<!--			<li><a href="#presse">presse</a></li>-->
			<li><a href="#order" class="active">commander</a></li>
			<li><a href="#body">&uarr;</a></li>
			</ul>
		</nav>		
		<article class="article cl serif">
		
			<h2>Commander (via Paypal)</h2>
			
			<form class="form-paypal cl" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="9Z92RMBDWXH9L">
			<input type="image" src="../img/bouton1.png" name="submit" alt="PayPal - commander pour la Suisse">
			<img alt="" src="https://www.paypalobjects.com/WEBSCR-640-20110429-1/de_DE/i/scr/pixel.gif" width="1" height="1">
			</form>
			
			<p class="label-prix">Total: 20.- CHF</p>
			
			<form  class="form-paypal cl" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="2R7GJFQX83WC6">
			<input type="image" src="../img/bouton2.png" name="submit" alt="PayPal - commander pour l'Europe">
			<img alt="" src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" width="1" height="1">
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
  <script defer src="../js/plugins.js"></script>
  <script defer src="../js/script.js"></script>
  <script defer src="../js/jquery.easing.1.3.min.js"></script>
  <!-- end scripts-->

  
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
