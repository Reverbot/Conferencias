<?php include_once './includes/templates/header.php'; ?>


<section class="seccion contenedor">
    <h2>Calendario de eventos</h2>

    <?php
        try{
            require_once('./includes/funciones/db_conexion.php');
            $sql = "SELECT * FROM eventos";
            $resultado = $conn->query($sql);

        }catch(\Exception $s){
            echo $e->getMessage();
        } 

    ?>
    <div class="calendario">
    <?php 
        $eventos = $resultado->fetch_assoc();
    ?>
    </div>
    

     
</section>














<?php include_once './includes/templates/footer.php'; ?>