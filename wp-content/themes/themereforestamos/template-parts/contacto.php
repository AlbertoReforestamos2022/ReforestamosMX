<?php   /** printf('<pre>%s</pre>', var_export( get_post_custom( get_the_ID() ), true )); */   ?>

    <!-- formulario de contacto -->
    <main class="container-xxl espacio-lineas-accion">   
        <div class="row g-5">
            <div class="col-12 col-lg-6 d-none d-md-block d-flex justify-content-center align-content-center">
                <div class="mt-5">
                    <?php $imagen = get_post_meta( get_the_ID(), 'imagen_formulario', true ); ?>
                    <img src="<?php echo $imagen?>" class="img-fluid" alt="">
                </div>
            </div>


          <div class="col-12 col-lg-6">
                <?php echo the_content(); ?>
          </div>
        </div>
    </main>
    <!-- ./formulario de contacto -->


    <!-- Ubicaciones Reforestamos -->
    <section class="container">
        <div class="row row-cols-1 row-cols-md-2 ">
            <?php $ubicaciones = get_post_meta( get_the_ID(), 'reforestamos_group_seccion_contacto_ubicacion', true ); ?>
            <?php if($ubicaciones) { 
                foreach($ubicaciones as $ubicacion){ ?>
                    <div class="col px-4 px-md-4">
                        <h3 class="text-center mb-5 text-primary"><i class="bi bi-globe"></i> <?php echo $ubicacion['titulo_ubicacion']; ?></h3>

                        <div class="card h-100 border-0 shadow-lg">  
                            <div class="card-header border-0 bg-transparent p-3 text-center d-flex align-items-center">
                                <?php echo $ubicacion['imagen_oficina']; ?>
                            </div>
            
                            <div class="card-body px-md-5 text-center">
                                <h3 class="text-primary fw-normal text-center"><i class="bi bi-geo-alt"></i></h3>
                                <h3 class="card-title text-primary text-center fw-normal p-3"> <?php echo $ubicacion['ubicacion_oficina']; ?></h3>
                            </div>

                            <div class="card-footer border-0 bg-transparent p-3 text-center">
                                <h4 class="text-primary"><span class="m-2"><i class="bi bi-telephone"></span></i><?php echo $ubicacion['tel_oficina']; ?></h4> 
                                <h4 class="text-primary"><span class="m-2"><i class="bi bi-envelope"></span></i><?php echo $ubicacion['mail_oficina']; ?></h4> 
                            </div>

                        </div>

                    </div>
            <?php }
            } else { ?> 
                   <h1> Error </h1> 
            <?php }?>
        </div>

    </section>
    <!-- ./Ubicaciones Reforestamos -->