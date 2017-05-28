<?php  

	include( '../functions.php' );
	
	echo c12_head( 
		'Liens', // title
		'Liens - Label Cave12' // descr
	 );
	 
	// page starts at <body>

?>
<body class="page-contact page-info v4" id="body">

  <div id="container" class="">
    <?php 
     	echo c12_header('liens');  
    ?>
    
    <article id="main" role="main" class="main">
    	<div class="main-inside">
    	
    	<header class="album-title serif">
    		<h1 class="title-h1 title-one">
    		Liens
    		</h1>
    	</header>
    			
<section class="article-bloc mini-bloc" id="about">

	<div class="bloc-texte-mini">
		
		<article class="article cl serif">
						
			<div id="text">
			
			<a href="http://www.plattfon.ch">http://www.plattfon.ch</a><br>
			  <br>
			  <a href="http://www.recrec-shop.ch">http://www.recrec-shop.ch</a><br>
			  <br>
			  <a href="http://www.metamkine.com">http://www.metamkine.com</a><br>
			  <br>
			<a href="http://www.audiotong.net">http://www.audiotong.net</a>
			
			</div>
			
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
  
  
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
  <script type="text/javascript">
              $(function() {
                  $('.nav-article a').bind('click',function(event){
                      var $anchor = $(this);
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
