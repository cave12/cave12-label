<?php 

function c12_albums( ) {

 /*
  * Takes and array with Key -> Value pairs.
  
  $key is used for URL and image URL.
  $value is used for title tag.
  
  Images are stored in : /img/covers-small/
  
 */
	
	$albums = array(
		// 'album-darling' => 'Darling',
		// 'album-pateras-baxter-brown' => 'Pateras/Baxter/Brown - Live at l’Usine',
		// 'album-multitude' => 'Diatribes & Barry Guy - multitude',
		'albums' => 'Albums',
		// 'album-dust' => 'Antoine Chessex - Dust',
		// 'francisco-meirino-upic' => 'Francisco Meirino - Untitled Phenomenas In Concrete',
		// 'norbert-moeslang' => 'Norbert Möslang - killer_kipper',
		'ddk-floating-piece-of-space' => 'DDK - floating piece of space',
		'vlan-voila' => 'Norbert Möslang - vlan_voilà',
		'francisco-meirino-la-plainte' => 'Francisco Meirino - La Plainte',
		'uruk' => 'Uruk',
		'mika-vainio-last-live' => 'Mika Vainio - Last Live',
	);
	
	return $albums;
	
}

/**
  * Generate header
  @param title
*/

function c12_head( $title, $description ) {

	$head = '<!doctype html>
	<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
	<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
	<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	';
	
	$head .= '<title>'.$title.' - Label Cave12</title>';
	$head .= '<meta name="description" content="'.$description.'">';
	
	$head .= '
	  <meta name="author" content="Manuel Schmalstieg - ms-studio.net">
	
	  <meta name="viewport" content="width=device-width,initial-scale=1">
	
	  <link rel="stylesheet" href="/css/style-v5.css">
	  <link href="//fonts.googleapis.com/css?family=Droid+Sans+Mono|Merriweather:400,400italic,700" rel="stylesheet" type="text/css">
	  
	  <link rel="icon" type="image/png" sizes="149x149" href="/icon.png">
	  <link rel="apple-touch-icon" href="/icon.png">
	
	  <script src="/js/libs/modernizr-2.0.6.min.js"></script>
	  <script src="/js/pourriel.js"></script>
	</head>
	';
	
	return $head;

}


/*

  */
  
function c12_header( $active ) {
	
	$header = '<header class="header" id="top" role="navigation">
	  
	    	<div id="logo" class="logo" role="banner">
	    		<a href="/"><img src="/img/label180.png" width="180" height="74" alt="Label cave12, Genève" /></a>
	    	</div>
	    	
	    	<nav class="nav nav-albums">
		    	<ul>';
	
	$items = c12_albums();
	
	foreach ($items as $key => $value) {
		
		$header .= '<li><a href="/'.$key.'/" title="'.$value.'" ';
		
		if ( $key == $active ) {
			$header .= 'class="active"';
		} 
		
		$header .= '><img src="/img/covers-small/'.$key.'.png" alt="'.$value.'" /></a></li>';
		
	}
	
	$header .= '</ul></nav>';
	
	$header .= '<nav class="nav nav-head mono">
			 <ul>
				 <li><a href="/presentation/">présentation</a></li>
				 <li><a href="/contact/">contact</a></li>
				 <li><a href="http://cave12.org">cave12</a></li>
			 </ul>
		 </nav>
	</header>';
	
	return $header;
	
}

/**
 * Generate internal nav
 *
 * @param array $items   
 * @param string $active 
 */

function c12_page_nav_global( $items, $active ) {

	// à partir des éléments fournis, créer une navigation
	// marquer l'élément actif
	$nav = '<nav role="navigation" class="nav nav-article mono">
						<ul>
				';
	
	foreach ($items as $key => $value) {
		
		$nav .= '<li><a href="#'.$key.'" ';
		
		if ( $key == $active ) {
			$nav .= 'class="active"';
		} 
		
		$nav .= '>'.$value.'</a></li>';
		
	}
	
	$nav .= '<li><a href="#body">&uarr;</a></li>';
	
	$nav .= '</ul></nav>';
	
 	return $nav;

}



function c12_footer( ) {

	$footer = '</div><!-- end of .main-inside -->
	    </article><!-- end of #main -->
	    <footer class="footer hidden">
			-
	    </footer>
	    
	  </div> <!-- end of #container -->
	  ';
	
	// JavaScript
	
	$footer .= '
	  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	    <script>window.jQuery || document.write(\'<script src="/js/libs/jquery-1.6.2.min.js"><\/script>\')</script>
	  
	    <script defer src="/js/jquery.easing.1.3.min.js"></script>
	    
	    <!-- scripts for audio player -->
	    <script src="/js/mylibs/sound.js"></script>
	     <script>
	     soundManager.url = \'/lib/soundmanagerv2/swf/\';
	     soundManager.onready(function() {
	     });
	     </script>
	     <!-- end scripts-->
	    
	    <!--[if lt IE 7 ]>
	      <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
	      <script>window.attachEvent(\'onload\',function(){CFInstall.check({mode:\'overlay\'})})</script>
	    <![endif]-->
	    
	    <script type="text/javascript">
        $(function() {
          $(\'.nav-article a\').bind(\'click\',function(event){
              var $anchor = $(this);
              $(\'html, body\').stop().animate({
                  scrollTop: $($anchor.attr(\'href\')).offset().top
              }, 500);
              
              event.preventDefault();
          });
        });
      </script>
	    ';
	    
	    // Piwik analytics
	    
//	    $footer .= '
//	    <script type="text/javascript">
//	    var pkBaseURL = (("https:" == document.location.protocol) ? "https://www.cave12.org/piwik/" : "http://www.cave12.org/piwik/");
//	    document.write(unescape("%3Cscript src=\'" + pkBaseURL + "piwik.js\' type=\'text/javascript\'%3E%3C/script%3E"));
//	    </script><script type="text/javascript">
//	    try {
//	    var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 5);
//	    piwikTracker.trackPageView();
//	    piwikTracker.enableLinkTracking();
//	    } catch( err ) {}
//	    </script><noscript><p><img src="http://www.cave12.org/piwik/piwik.php?idsite=5" style="border:0" alt="" /></p></noscript>
//	    ';
	    
	    // end Piwik analytics
	    
	    $footer .= '
	  </body>
	  </html>';
	
	return $footer;
}

/**
 * Generate paypal button
 * Pour info, comment les générer?
 * Lien: https://www.paypal.com/us/cgi-bin/customerprofileweb?cmd=_button-management
 *
 * @param string $code 
 * @param string $currency = CHF or EUR 
 * @param string $text 
 */

function c12_paypal( $text, $currency, $code ) {
	
	$button = '<form class="form-paypal cl" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
	<input type="hidden" name="cmd" value="_s-xclick">
	<input type="hidden" name="hosted_button_id" value="'.$code.'">';
	
	if ( $currency == 'CHF' ) {
		
		$button .= '<input type="image" src="/img/bouton1.png" name="submit" alt="PayPal - commander pour la Suisse">';
		
	} else if ( $currency == 'EUR' ) {
		
		$button .= '<input type="image" src="/img/bouton2.png" name="submit" alt="PayPal - commander pour l’Europe">';
	}
	
	$button .= '<img alt="" src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" width="1" height="1">
	</form>';
	
	$button .= '<p class="label-prix">'.$text.'</p>';
	
	return $button;
}