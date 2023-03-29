    <!-- Empresas Tipo A -->
    <div class="container-lg espacio-lineas-accion">

        <div class="row row-cols-2 row-cols-md-2 row-cols-lg-3 g-2 align-items-center">

        <?php  $logos = get_post_meta( get_the_ID(), 'reforestamos_group_logos', true ); 
            if($logos === '') {?>
                <p> </p>        
            <?php } else {
                foreach($logos as $logo) {
                    ?> 
        
                    <div class="col px-0 px-md-5">
                        <div class="card border-0">
                            <div class="card-body d-flex justify-content-center ">
                                <a href="<?php echo $logo['link_logo'] ?>"><img src="<?php echo $logo['imagen_logo'] ?>" class="img-fluid my-auto" alt="#"></a>
                            </div>
                        </div>
                    </div>
        
                <?php } ?>
            <?php } ?>
        </div>
    </div>
    <!-- ./Empresas Tipo A -->

    <!-- Aliados Tipo B -->
    <section class="container-xxl espacio">    
        <div class="wrapper espacio">
            <div class="wrapper-list owl-carousel">
            <?php $logos_b = get_post_meta( get_the_ID(), 'reforestamos_group_seccion_empresas_b', true );?>
        
            <?php if($logos_b){?>
                <?php foreach($logos_b as $logo_b){?>
                    <div class="slide-item img-fluid d-flex align-items-center">
                        <?php echo $logo_b['logo_empresa_b']; ?>
                    </div>
                <?php }
            } else { 
                echo reforestamos_nota_error( get_the_ID() );
            }?>

            </div>
        </div>
    </section>
    <!--/.Aliados Tipo B-->




