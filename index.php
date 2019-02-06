
  <?php include_once './includes/templates/header.php'; ?>
 <section class="seccion contenedor">
 	<h2>La mejor conferencia de diseño web en español</h2>
 	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, nihil ipsa eum maxime fugiat, ipsam animi voluptatem, vitae nam vel nisi ut recusandae. Quam incidunt possimus voluptas voluptatum, molestias sapiente.</p>
 </section>
 
 <section class="programa">
 	<div class="contenedor-video">
 		<video autoplay loop poster="img/bg-talleres.jpg">
 			<source src="video/video.mp4" type="video/mp4">
 			<source src="video/video.webm" type="video/webm">
 			<source src="video/video.ogv" type="video/ogg">
 		</video><!--contenedor-video-->
 		
 		<div class="contenido-programa">
 			<div class="contenedor">
 				<div class="programa-evento">
					 <h2>Programa del evento</h2>
					 <?php
        					try{
									require_once('includes/funciones/bd_conexion.php');
									$sql = " SELECT * FROM `categoria_evento` ";
									$resultado = $conn->query($sql);

								}catch(\Exception $s){
									echo $e->getMessage();
								} 

    					?>
 					<nav class="menu-programa">
						 <?php while($cat = $resultado->fetch_array(MYSQLI_ASSOC)) {?>
							<?php $categoria = $cat['cat_evento']; ?>
							
						 <a href="#<?php echo strtolower($categoria) ?>"><i class="fa <?php echo $cat['icono']; ?>"></i> <?php echo $categoria ?></a>
						 
						 <?php } ?>
					 </nav>
					 
					 <?php 
					 	 
						  try{
							  require_once('includes/funciones/bd_conexion.php');
							  $sql = " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, icono, cat_evento, nombre_invitado, apellido_invitado ";
							  $sql .= " FROM eventos ";
							  $sql .= " INNER JOIN categoria_evento ";
							  $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
							  $sql .= " INNER JOIN invitados ";
							  $sql .= " ON eventos.id_inv = invitados.invitado_id ";
							  $sql .= " AND eventos.id_cat_evento = 1 ";
							  $sql .= " ORDER BY `evento_id` LIMIT 2; ";
							  
							  $sql .= " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, icono, cat_evento, nombre_invitado, apellido_invitado ";
							  $sql .= " FROM eventos ";
							  $sql .= " INNER JOIN categoria_evento ";
							  $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
							  $sql .= " INNER JOIN invitados ";
							  $sql .= " ON eventos.id_inv = invitados.invitado_id ";
							  $sql .= " AND eventos.id_cat_evento = 2 ";
							  $sql .= " ORDER BY `evento_id` LIMIT 2; ";
							  
							  $sql .= " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, icono, cat_evento, nombre_invitado, apellido_invitado ";
							  $sql .= " FROM eventos ";
							  $sql .= " INNER JOIN categoria_evento ";
							  $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
							  $sql .= " INNER JOIN invitados ";
							  $sql .= " ON eventos.id_inv = invitados.invitado_id ";
							  $sql .= " AND eventos.id_cat_evento = 3 ";
							  $sql .= " ORDER BY `evento_id` LIMIT 2; ";
							  
				  
						  }catch(\Exception $s){
							  echo $e->getMessage();
						  } 
					   ?>
					  
					  <?php $conn-> multi_query($sql); ?>

					  <?php
					  	do { 
							$resultado = $conn->store_result();
							$row = $resultado-> fetch_all(MYSQLI_ASSOC); ?>

					<?php $i = 0; ?>	
					<?php foreach($row as $evento): ?>	
					<?php if($i % 2 == 0){ ?>	
					<div id="<?php echo strtolower($evento['cat_evento']); ?>" class="info-curso ocultar clearfix">
						  <?php } ?>	
						<div class="detalle-evento">
							<h3><?php echo utf8_decode($evento['nombre_evento']) ?></h3>
							<p><i class="fa fa-clock"></i><?php echo $evento['hora_evento']; ?></p>
							<p><i class="fa fa-calendar"></i><?php echo $evento['fecha_evento']; ?></p>
							<p><i class="fa fa-user"></i><?php echo $evento['nombre_invitado'] . " " . $evento['apellido_invitado']; ?></p>
						</div>
						
						
						<?php if($i % 2 == 1){ ?>
							<a href="calendario.php" class="boton float-right">Ver Todos</a>
						</div><!--talleres-->
						<?php } ?>
							<?php $i++; ?>
						  <?php endforeach; ?>
						  <?php $resultado->free(); ?>
						<?php  } while ($conn->more_results() && $conn->next_result());
					  ?>
 					
 					
					 
					 
 				</div><!--programa evento-->
 			</div><!--contenedor-->
 		</div><!--contenido programa-->
 	</div><!--contenedor-video-->
 </section><!--programa-->
 
 
 <?php include_once './includes/templates/invitados.php'; ?>

 <div class="contador parallax">
 	<div class="contenedor">
 		<ul class="resumen-evento clearfix">
 			<li><p class="numero">6</p>Invitados</li>
 			<li><p class="numero">15</p>Talleres</li>
			<li><p class="numero">3</p>dias</li>
			<li><p class="numero">9</p>Conferencias</li>
 		</ul>
 	</div><!--contenedor-->
 </div><!--Contador-->
 
 <section class="precios seccion">
 <h2>Precios</h2>
 	<div class="contenedor">
 		<ul class="lista-precios clearfix">
 			<li>
 				<div class="tabla-precio">
 					<h3>Pase por dia</h3>
 					<p class="numero grande">$30</p>
 					<ul>
 						<li><i class="fas fa-check"></i>Bocadillos gratis</li>
 						<li><i class="fas fa-check"></i>Todas las conferencias</li>
						<li><i class="fas fa-check"></i>todos los talleres</li>
 					</ul>
 					<a href="" class="boton hollow">Comprar</a>
 				</div>
 			</li>
 			<li>
 				<div class="tabla-precio">
 					<h3>Todos los dias</h3>
 					<p class="numero grande">$50</p>
 					<ul>
 						<li><i class="fas fa-check"></i>Bocadillos gratis</li>
 						<li><i class="fas fa-check"></i>Todas las conferencias</li>
						<li><i class="fas fa-check"></i>todos los talleres</li>
 					</ul>
 					<a href="" class="boton ">Comprar</a>
 				</div>
 			</li>
			<li>
 				<div class="tabla-precio">
 					<h3>Pase por 2 dias</h3>
 					<p class="numero grande">$45</p>
 					<ul>
 						<li><i class="fas fa-check"></i>Bocadillos gratis</li>
 						<li><i class="fas fa-check"></i>Todas las conferencias</li>
						<li><i class="fas fa-check"></i>todos los talleres</li>
 					</ul>
 					<a href="" class="boton hollow">Comprar</a>
 				</div>
 			</li>
 		</ul><!--lista precios-->
 	</div><!--Contenedor-->
 </section><!--seccion precios-->
 
 <div class="mapa" id="mapa"></div><!--mapa-->
 
 <section class="seccion">
 	<h2>Testimoniales</h2>
 	<div class="testimoniales contenedor clearfix">
 	<div class="testimonial">
 		<blockquote>
 			<p><i class="fas fa-quote-right"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore porro debitis aperiam esse, culpa, dolorem quidem, nobis sequi.</p>
 			
 			<footer class="info-testimonial clearfix">
 				<img src="img/testimonial.jpg" alt="">
 				<cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
 			</footer>
 		</blockquote>
 	</div><!--testimonial-->
 	<div class="testimonial">
 		<blockquote>
 			<p><i class="fas fa-quote-right"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore porro debitis aperiam esse, culpa, dolorem quidem, nobis sequi.</p>
 			
 			<footer class="info-testimonial clearfix">
 				<img src="img/testimonial.jpg" alt="">
 				<cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
 			</footer>
 		</blockquote>
 	</div><!--testimonial-->
	 <div class="testimonial">
 		<blockquote>
 			<p><i class="fas fa-quote-right"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore porro debitis aperiam esse, culpa, dolorem quidem, nobis sequi.</p>
 			
 			<footer class="info-testimonial clearfix">
 				<img src="img/testimonial.jpg" alt="">
 				<cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
 			</footer>
 		</blockquote>
 	</div><!--testimonial-->
 	</div>
 </section><!--seccion-->
 
 <div class="newsletter parallax">
 	<div class="contenido contenedor">
 		<p>Registrate al Newsletter</p>
 		<h3>Gdlwebcamp</h3>
 		<a href="" class="boton transparente">Registro</a>
 	</div><!--contenido-->
 </div><!--newsletter-->
 
 <section class="seccion">
 	<h2>faltan</h2>
 	<div class="cuenta-regresiva contenedor">
 		<ul class="clearfix">
 			<li><p id="dias" class="numero grande"></p>Dias</li>
 			<li><p id="horas" class="numero grande"></p>Horas</li>
 			<li><p id="minutos" class="numero grande"></p>minutos</li>
			<li><p id="segundos" class="numero grande"></p>Segundos</li>
 		</ul>
 	</div><!--contenedor-->
 </section><!--seccion-->
 
 <?php include_once './includes/templates/footer.php'; ?>