<?php get_header(); ?>

    <?php while(have_posts()): the_post();  ?> 
   
   <!-- Carousel -->
    <main class="">
        <div class="">
            <div id="myCarousel1" class="carousel slide" data-bs-ride="carousel">
    
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo get_post_meta( get_the_ID(), 'reforestamos_home_imagen_principal_carousel', true ); ?>" class="img-fluid imagen-carousel"  alt="Centinelas" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>
                </div>

                <?php $imagenes = get_post_meta( get_the_ID(), 'reforestamos_home_carousel', true );
                    foreach($imagenes as $imagen) {
                ?>
                <div class="carousel-item">
                    <img src="<?php echo $imagen['imagen_carousel']?>" class="img-fluid imagen-carousel"  alt="Centinelas" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>
                </div>
                <?php }?>    
            </div>
    
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel1" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
    
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel1" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
    
            </div>
        </div>
    </main>
    <!-- /. Carousel -->

    <!--  -->

    <!-- Lineas de Acción -->
    <section class="container-xxl espacio">        
        <?php $titulo_lineas = get_post_meta( get_the_ID(), 'reforestamos_home_titulo_lineas_accion', true ); ?>
        <div class="d-flex justify-content-center text-primary text-center espacio-lineas-accion">
            <img src="<?php echo get_post_meta( get_the_ID(), 'reforestamos_home_imagen_bellota', true ); ?>" alt="Bellota Reforestamos" class="mb-4 me-3 bellota-rm">
            <h1 class="fw-semibold display-5"><?php echo $titulo_lineas ?></h1>
        </div>
    
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 justify-content-center"> 
            <?php $lineas = get_post_meta( get_the_ID(), 'reforestamos_home_lineas_accion',true );
                foreach($lineas as $linea) {
            ?>  
            <div class="col px-5 px-lg-2 col-lineas-accion">
                <div class="card border-primary shadow-lg mb-3 espacio-card-lineas h-75">
                    <div class="card-header bg-transparent border-0 d-flex justify-content-center card-lineas">
                        <img class="p-lg-3 linea-accion-img img-lineas" src="<?php echo $linea['imagen_linea_acción']?>" alt="" srcset="">
                    </div>
                    <div class="card-body d-flex align-items-center text-primary">
                        <h4 class="card-title text-center"><?php echo $linea['texto_linea_acción'] ?></h4>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>
    <!-- ./ Lineas de Acccion-->

    <!-- Sitios de Interés -->
    <section class="container-xxl espacio">
        <!-- Sitos de Interés Titulo-->
        <div class="d-flex justify-content-center text-primary text-center py-3">
            <img src="<?php echo get_post_meta( get_the_ID(), 'reforestamos_home_imagen_bellota', true ); ?>" alt="Bellota Reforestamos" class="mb-4 me-3 bellota-rm">
            <?php echo get_post_meta( get_the_ID(), 'reforestamos_home_titulo_sitios_de_interes', true ); ?>
        </div>
        <!-- /.Sitos de Interés Titulo --> 
    
        <div class="wrapper espacio">
            <div class="wrapper-list owl-carousel">
                <?php $logos = get_post_meta( get_the_ID(), 'reforestamos_home_sitios_interes',true );?>
                <?php if($logos !==' ') { ?>
                    <?php  foreach($logos as $logo) { ?>
                    <div class="slide-item d-flex align-items-center justify-content-center">
                        <?php echo $logo['imagen_sitio_interes']?>
                    </div>
                    <?php }?>
                <?php } else {?>
                    <h4 class="text-danger text-center">Error</h4>
                <?php }?>
            </div>
        </div>

    </section>
    <!--/.Sitios de Interés-->            

    <!-- Nuestras Notas -->
    <div class="container-xxl">
        <div class="d-flex justify-content-center text-primary text-center py-3">
            <img src="<?php echo get_post_meta( get_the_ID(), 'reforestamos_home_imagen_bellota', true ); ?>" alt="Bellota Reforestamos" class="mb-4 me-3 bellota-rm">
            <?php echo get_post_meta( get_the_ID(), 'reforestamos_home_titulo_nuestras_notas', true ); ?>
        </div> 



        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        <?php
        // the query
        $the_query = new WP_Query( 'posts_per_page=4' ); ?>

        <?php if ( $the_query->have_posts() ) : ?>

            <!-- pagination here -->

            <!-- the loop -->
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="col px-4 px-md-2">
                <div class="card h-100 border-0 shadow-sm">

                    <!--  -->
                    <?php the_post_thumbnail('mediano', array('class' => 'card-img-top p-2 rounded-1 shadow-sm img-nota'));?>

                    <div class="card-header border-0 bg-transparent p-3">
                        <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->    
                    </div>

                    <div class="card-body px-3">
                    <h4 class="card-title fw-normal"><a href="<?php the_permalink();?>" class="text-decoration-none"><?php the_title(); ?></a></h4>
                    </div>

                    <div class="card-footer border-0 bg-transparent p-3">
                    <h5 class="text-black-50" ><?php the_time(get_option('date_format')); ?></h5>
                    </div>

                </div>
            </div> 
            <?php endwhile; ?>
            <!-- end of the loop -->

            <!-- pagination here -->

            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>    



        </div>
    </div>
    <!-- ./Nuestras Notas -->
    <?php endwhile; ?>

<?php get_footer(); ?>



