<?php include_once './includes/templates/header.php'; ?>


<section class="seccion contenedor">
    <h2>Invitados</h2>

    <?php
        try{
            require_once('includes/funciones/bd_conexion.php');
            $sql = " SELECT * FROM `invitados` ";
            $resultado = $conn->query($sql);

        }catch(\Exception $s){
            echo $e->getMessage();
        } 

    ?>
        <section class="invitados contenedor seccion">
 	        <h2>Nuestros Invitados</h2>
 	        <ul class="lista-invitados clearfix">
                <?php  while( $invitados = $resultado->fetch_assoc() ) { ?>
                
                    <li>
                        <div class="invitado">
                            <img src="img/invitado<?php echo $invitados['url_imagen'] ?>" alt="">
                            <p><?php echo $invitados['nombre_invitado'] . " " . $invitados['apellido_invitado']; ?></p>
                        </div>
                    </li>
                
                <?php  }   ?>
      
            </ul><!--lista-invitados-->
        </section><!--invitados-->    
       
      
      
    <?php $conn->close(); ?>
    
    

     
</section>














<?php include_once './includes/templates/footer.php'; ?>