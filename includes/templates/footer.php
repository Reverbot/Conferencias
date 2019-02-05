<footer class="site-footer">
 	<div class="contenedor clearfix">
 		<div class="footer-informacion">
 			<h3>sobre <span>GDLwebcamp</span></h3>
 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet necessitatibus explicabo eaque, excepturi quibusdam reiciendis rem.</p>
 		</div>
 		<div class="ultimos-tweets">
 			<h3>ultimos <span>Tweets</span></h3>
 			<ul>
 				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, dicta, adipisci! Dolorem laborum commodi impedit, quia quasi,t aspernatur sit.</li>
 				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, dicta, adipisci! Dolorem laborum commodi impedit, quia quasi,t aspernatur sit.</li>
 				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, dicta, adipisci! Dolorem laborum commodi impedit, quia quasi,t aspernatur sit.</li>
 			</ul>
 		</div>
		<div class="menu">
			<h3>Redes<span>Sociales</span></h3>
			<nav class="redes-sociales">
 				<a href="#"><i class="fab fa-facebook-f"></i></a>
 				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-pinterest-p"></i></a>
				<a href="#"><i class="fab fa-youtube"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
 			</nav><!-- redes sociales -->
		</div>
 		
 	</div>
 	
 	<p class="copyright">Todos los derechos Reservados Donald Schiffmann</p>
 </footer>
 
 
  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <?php
		$archivo = basename($_SERVER['PHP_SELF']);
		$pagina = str_replace('.php', "", $archivo);
		if($pagina == 'invitados'){
			echo '<script src="js/jquery.colorbox-min.js"></script>';
		}else if($pagina == 'conferencia'){
			echo '<script src="js/lightbox.js"></script>';
		}
	 ?>
	
  
  
  <script src="js/main.js"></script>
  <script src="js/mapa.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
