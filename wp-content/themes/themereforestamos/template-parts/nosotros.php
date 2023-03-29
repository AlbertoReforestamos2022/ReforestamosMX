<?php  /** printf('<pre>%s</pre>', var_export( get_post_custom( get_the_ID() ), true )); */  ?>
        
    <!-- Sobre Nosotros Mision-Vision -->
    <main class="container-xxl">
        <div class="row">
            <div class="col-12 px-4 py-5" >
                <div class="row flex-lg-row-reverse align-items-center justify-content-center quienes-somos shadow rounded-2 p-4">
                    <div class="col-10 col-sm-8 col-lg-6 ">
                        <img src="<?php echo get_post_meta( get_the_ID(), 'imagen_principal_nosotros', true ); ?>" class="d-block mx-lg-auto img-fluid" alt="Sobre Nosotros" width="400" loading="lazy">
                    </div>

                    <div class="col-lg-6 quienes-somos-info text-light">
                        <?php echo get_post_meta( get_the_ID(), 'titulo_principal_nosotros', true ); ?>
            
                        <?php echo get_post_meta( get_the_ID(), 'descripcion_principal_nosotros', true ); ?>

                    </div>
                </div>
            </div>

            <?php  $nosotros = get_post_meta( get_the_ID(), 'reforestamos_group_nosotros', true ); 
                foreach($nosotros as $nos) {
            ?>  

            <div class="col-12 px-4 py-5">
                <div class="row align-items-center justify-content-center vision shadow rounded-2 p-4 px-1 px-md-5">
                    <div class="col-10 col-sm-8 col-lg-6">
                        <?php echo $nos['imagen_seccion_nosotros']?>
                    </div>

                    <div class="col-lg-6 mision-info text-primary text-justify">
                        <?php echo $nos['descripcion_seccion_nosotros']?>
                    </div>

                </div>
            </div> 

        <?php } ?>
        </div>
    </main>
    <!-- /. Sobre Nostros Mision-Vision -->

    <!-- Objetivos -->
    <section class="container-xxl">
        <?php $titulo = get_post_meta( get_the_ID(), 'reforestamos_group_titulo_objetivos', true );?>
        <h1 class="text-primary text-center fw-semibold display-5 espacio-lineas-accion"><?php echo $titulo; ?></h1>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 justify-content-center gap-4 gap-md-0 px-lg-1 px-5">
            <!-- bg-danger bg-primary bg-success bg-light  -->

            <?php  $objetivos = get_post_meta( get_the_ID(), 'reforestamos_group_objetivos', true ); 
                foreach($objetivos as $objetivo) {
            ?> 
            <div class="col my-2">
                <div class="card border-0 shadow-lg h-100 <?php echo $objetivo['background_objetivo'];?>"> 
                    <div class="card-header d-flex justify-content-center border-0 bg-transparent">
                        <img src="<?php echo $objetivo['imagen_objetivos'];?>" class="linea-accion-img" alt="">
                    </div>
                    <div class="card-body py-5">
                        <h4 class="text-center text-white"><?php echo $objetivo['objetivos']?></h4>
                    </div>
                </div>
            </div>

            <?php } ?>

        </div>
    </section>
    <!-- ./objetivos -->

    <!-- Valores -->
    <section class="container-xxl"> 
        <?php $tituloValores = get_post_meta( get_the_ID(), 'reforestamos_group_titulo_valores', true); ?>
        <h1 class="text-primary text-center fw-semibold display-5 espacio-lineas-accion"><?php echo $tituloValores ?></h1>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 gap-4 gap-md-0 px-5 px-lg-1">
        <?php  $valores = get_post_meta( get_the_ID(), 'reforestamos_group_valores', true ); 
                foreach($valores as $valor) {
        ?> 

            <div class="col my-2">
                <div class="card-cover rounded-2 shadow valores">
                    <div class="d-flex flex-column p-3 pt-5 text-white text-shadow-1">
                    <ul class="d-flex justify-content-center list-unstyled mt-auto">
                        <li class="">
                            <img src="<?php echo $valor['imagen_valores']?>" height="200" alt="Generar Información">
                        </li>
                    </ul>
                    </div>
                </div>
            </div>

        <?php }?>

        </div><!-- /.row row-cols-1 -->
    </section>
    <!-- ./Valores -->

    <!-- Logros y Reconocimientos -->
    <section class="container-xxl">
        <?php $tituloLogros = get_post_meta( get_the_ID(), 'reforestamos_group_titulo_valores', true); ?>
        <h1 class="text-primary text-center fw-semibold display-5 espacio-lineas-accion"><?php $tituloLogros ?></h1>
        
        <div class="row">
            <div class="container timeline">
                <?php
                    $logros = get_post_meta( get_the_ID(), 'reforestamos_group_logros', true );
                    foreach ($logros as $logro) {
                ?>

                <div class="contenedor <?php echo $logro['posicion_logro'] ?>">
                    <div class="bg-white shadow-lg content logros">

                        <div class="d-flex justify-content-center py-4">
                            <img src="<?php echo $logro['imagen_logros'] ?>" width="150" alt="">
                        </div>
                        <h1 class="text-center text-light fw-semibold "><?php echo $logro['anio_logro'] ?></h1>
                        <p class="text-black-50 text-justify"><?php echo $logro['texto_logro'] ?></p>

                    </div>
                </div>


                <?php  } ?>

            </div>
        </div>
    </section>
    <!-- ./Logros y Reconocimientos -->