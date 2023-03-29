<?php  /**  printf('<pre>%s</pre>', var_export( get_post_custom( get_the_ID() ), true )); */  ?>
    
    
    <!-- Video Incendios forestales -->
    <div class="background-incendios bg-danger p-3">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-xl-2 align-items-center">

                <div class="col">
                    <div class="card text-center text-nar border-0 shadow rounded-2 gap-0 gap-sm-2">
                        <div class="card-header border-0 bg-transparent p-md-3">
                            <?php  $titulo_incendios = get_post_meta( get_the_ID(), 'titulo_donar', true ); ?>
                            <h2> <?php echo $titulo_incendios; ?> </h2>
                        </div>
                        <div class="card-body py-3">
                            <?php $texto_1_incendios = get_post_meta( get_the_ID(), 'texto_1_incendios', true ); ?>
                            <h2> <?php echo $texto_1_incendios; ?> </h2>
                        </div>
                        <div class="card-footer border-0 bg-transparent p-md-3">
                            <?php $texto_2_incendios = get_post_meta( get_the_ID(), 'texto_2_incendios', true ); ?>
                            <h2> <?php echo $texto_2_incendios; ?> </h2>
                        </div>
                    </div>
                </div>
                
                <div class="col mt-3 mt-xl-0">
                    <?php $video_incendios = get_post_meta( get_the_ID(), 'video_incendios', true ); ?>
                    <?php echo $video_incendios; ?>
                    <!-- <video class="video-incendios shadow rounded-2" src="img/IncendiosForestales/IncendiosForestales.mp4" autoplay muted preload="auto" loop></video> -->
                </div>
            </div>
        </div>
    </div>
    <!-- ./Video Incendios forestales -->

    <!-- Donar -->
    <main class="container">
        <?php $titulo_donar = get_post_meta( get_the_ID(), 'titulo_donar', true ); ?>
        <h1 class="text-danger fw-semibold text-center display-3 my-5"> <?php echo $titulo_donar; ?> </h1>

        <div class="row row-cols-1 row-cols-md-2 justify-content-center">
            <div class="col">
                <div class="card border-0 text-danger text-center">
                    <div class="card-body">
                    <?php $texto_donar = get_post_meta( get_the_ID(), 'texto_donar', true ); ?>
                    
                        <?php echo $texto_donar; ?>
                    </div>
                    <div class="card-footer bg-transparent border-0 d-flex justify-content-center">
                    <?php $imagen_paypal = get_post_meta( get_the_ID(), 'imagen_paypal', true ); ?>
                        <?php echo $imagen_paypal; ?>
                    </div>  
                </div>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 align-items-center">
            <div class="col">
                <div class="card border-danger p-md-4 py-4 shadow mt-5">
                    <div class="card-header text-center bg-transparent border-0">
                        <?php $titulo_datos_bancarios = get_post_meta( get_the_ID(), 'titulo_datos_bancarios', true ); ?>
                        <h2 class="text-danger"> <?php echo $titulo_datos_bancarios; ?> </h2>
                    </div>
                    <div class="card-body">
                        <?php $datos_beneficiario = get_post_meta( get_the_ID(), 'datos_beneficiario', true ); ?>
                        <?php echo $datos_beneficiario; ?>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card border-0">
                    <div class="card-body">
                        <?php $imagen_donar = get_post_meta( get_the_ID(), 'imagen_donar', true ); ?>
                        <?php echo $imagen_donar; ?>
                        <!-- <img src="./img/IncendiosForestales/donacion.png"  class="img-fluid" alt="donación imagen"> -->
                    </div>
                </div>
            </div>

        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="card border-0">
                    <div class="card-body text-center text-danger">
                        <?php $texto_cierre = get_post_meta( get_the_ID(), 'texto_cierre', true ); ?>
                        <?php echo $texto_cierre; ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- ./Donar -->

    <!-- Infográfia Incendios -->
    <div class="container-xxl">
        <?php $titulo_infografia_1 = get_post_meta( get_the_ID(), 'titulo_infografia_1', true ); ?>

        <h1 class="text-danger fw-semibold text-center display-3 my-5"> <?php echo $titulo_infografia_1; ?> </h1>

        <div class="row row-cols-1">
            <div class="col timeline-incendios">
            <?php $infografias_1 = get_post_meta( get_the_ID(), 'reforestamos_group_incendios_infografia_1', true ); ?>


            <?php 
                if($infografias_1) {
                    foreach($infografias_1 as $infografia) { ?>

                    <div class="contenido <?php echo $infografia['posicion_campo_infografia']; ?>"> 
                        <div class="card border-0 shadow-lg rounded-2">
                            <div class="card-body d-flex d-md-block d-lg-flex justify-content-between align-items-center">
                                <div class="img-incendios">
                                    <img class="img-fluid" src="<?php echo $infografia['imagen_infografia']; ?>" alt="<?php echo $infografia['alt_text']; ?>">
                                </div>

                                <div class="texto-incedios text-center text-danger">
                                    <h4 class="mx-2"><?php echo $infografia['desc_infografia']; ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php }
                } else {
                    var_dump($infografias_1);
                } ?>

            </div>
        </div>

    </div>
    <!-- ./Infográfia Incendios -->

    <!-- Segunda Infográfia incendios forestales -->
    <div class="container-xxl">
        <?php $titulo_infografia_2 = get_post_meta( get_the_ID(), 'titulo_infografia_2', true ); ?>       
        <h1 class="text-danger fw-semibold display-3 my-5 text-center"><?php echo $titulo_infografia_2?></h1>

        <?php $infografias_2 = get_post_meta( get_the_ID(), 'reforestamos_group_incendios_infografia_2', true ); ?>

        <div class="row row-cols-1">
            <div class="col timeline-incendios">
            <?php 
                if($infografias_2) {
                     foreach($infografias_2 as $infografia) { ?>

                    <div class="contenido <?php echo $infografia['posicion_campo_infografia']; ?>"> 
                        <div class="card border-0 shadow-lg rounded-2">
                            <div class="card-body d-flex d-md-block d-lg-flex justify-content-between align-items-center">
                                <div class="img-incendios">
                                    <img class="img-fluid" src="<?php echo $infografia['imagen_infografia']; ?>" alt="<?php echo $infografia['alt_text']; ?>">
                                </div>

                                <div class="texto-incedios text-center text-danger">
                                    <h4 class="mx-2"><?php echo $infografia['desc_infografia']; ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php }
                } else {
                    var_dump($infografias_2);
                } ?>

            </div>
        </div>

        <div class="row">
            <div class="col mt-5">
                <div class="card border-0">
                    <div class="card-body">
                    <?php $texto_footer_infografia = get_post_meta( get_the_ID(), 'text_footer', true ); ?>
                        <h2 class="card-title text-black-50"><?php echo $texto_footer_infografia; ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Segunda Infográfia incendios forestales -->

    <!-- Acciones Reforestamos Mexico -->
    <!-- style="background-image: linear-gradient(rgba(38, 64, 64, .3), rgba(38, 64, 64, .3)), url(img/FondoTitulo/fondo-3.JPG);  padding: 0.1px;" -->
    <section class="bg-warning p-1 p-md-5">
        <div class="container-xl">
            <div class="row row-cols-1 d-flex justify-content-center">
                <div class="col">
                    <div class="card shadow-lg border-0 py-4">
                        <div class="card-header border-0 bg-transparent text-center">
                            <?php $titulo_acciones= get_post_meta( get_the_ID(), 'titulo_acciones', true ); ?>
                            

                            <h1 class="text-primary"><?php echo $titulo_acciones; ?></h1>
                        </div>
                        <div class="card-body">    
                            <?php $titulo_acciones= get_post_meta( get_the_ID(), 'lista_acciones', true ); ?>
                            <?php echo $titulo_acciones;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./Acciones Reforestamos México -->

    <!-- Que se necesita -->
    <div class="container">
        <div class="card-header border-0 bg-transparent text-center">
            <?php $titulo_necesidades = get_post_meta( get_the_ID(), 'titulo_necesidades', true ); ?> 
            
            <h1 class="text-primary mt-5 display-4"><?php echo $titulo_necesidades; ?></h1>
        </div>

        <div class="row row-cols-1 row-cols-lg-3 gap-5 gap-md-0 d-flex justify-content-center mt-5">
            <?php $necesidades = get_post_meta( get_the_ID(), 'reforestamos_group_incendios_necesidades', true ); ?>
            <?php 
                if($necesidades) { ?>
                    <?php foreach($necesidades as $necesidad) { ?>
                        <div class="col">
                            <div class="card border-0 shadow-lg h-100">
                                <div class="card-header bg-transparent border-0 mb-5">
                                    <img class="img-fluid" src="<?php echo $necesidad['imagen_card']; ?>" alt="Víveres para brigadistas">
                                    <h3 class="text-light text-center mt-4"><?php echo $necesidad['titulo_card']; ?></h3>
                                </div>
                                <div class="card-body mt-3">
                                    <?php echo $necesidad['lista_card']; ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
            <?php } ?>

        </div>
    </div>
    <!-- ./Que se necesita -->

    <!--  -->

    <!-- Incendios a nivel nacional -->
    <?php $background_incendios = get_post_meta( get_the_ID(), 'background_incendios', true ); ?>
    <section class="mapa-incendios" style="background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.2)), url(<?php echo $background_incendios; ?>);">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 gap-5 justify-content-center gap-lg-0 my-5"> 
            <?php $tarjetas_informativas = get_post_meta( get_the_ID(), 'reforestamos_group_incendios_informacion_diaria', true ); ?>
           
            <?php 
                if($tarjetas_informativas){
                    foreach($tarjetas_informativas as $tarjeta) { ?>
                        <div class="col">
                            <div class="card border-warning bg-transparent h-100 p-3 d-grid align-items-center">
                                <div class="card-header bg-transparent border-0 text-white text-center">
                                    <?php echo $tarjeta['titulo_tarjeta']; ?>
                                </div>
                                <div class="card-body text-center text-white">
                                    <h3><?php echo $tarjeta['info_tarjeta']; ?></h3>
                                </div>
                            </div>
                        </div>
                    <?php  }

                } else {?>
                    <p class="text-danger"> Error </p>
                <?php } ?>        

            </div>
        </div>

        <div class="bg-danger mt-4">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card border-0 bg-transparent p-5">
                            <div class="card-body">
                                <?php $lista_informativa = get_post_meta( get_the_ID(), 'tarjeta_informativa', true ); ?>
                                <?php echo $lista_informativa; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 justify-content-center mt-5">
                <div class="col">
                    <?php $mapa_incendios = get_post_meta( get_the_ID(), 'mapa_incendios', true ); ?>
                    <?php echo $mapa_incendios; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- ./Incendios a nivel nacional -->

    <!-- Donar -->
    <main class="container">
        <?php $titulo_donar = get_post_meta( get_the_ID(), 'titulo_donar', true ); ?>
        <h1 class="text-danger fw-semibold text-center display-3 my-5"> <?php echo $titulo_donar; ?> </h1>

        <div class="row row-cols-1 row-cols-md-2 justify-content-center">
            <div class="col">
                <div class="card border-0 text-danger text-center">
                    <div class="card-body">
                    <?php $texto_donar = get_post_meta( get_the_ID(), 'texto_donar', true ); ?>
                    
                        <?php echo $texto_donar; ?>
                    </div>
                    <div class="card-footer bg-transparent border-0 d-flex justify-content-center">
                    <?php $imagen_paypal = get_post_meta( get_the_ID(), 'imagen_paypal', true ); ?>
                        <?php echo $imagen_paypal; ?>
                    </div>  
                </div>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 align-items-center">
            <div class="col">
                <div class="card border-danger p-md-4 py-4 shadow mt-5">
                    <div class="card-header text-center bg-transparent border-0">
                        <?php $titulo_datos_bancarios = get_post_meta( get_the_ID(), 'titulo_datos_bancarios', true ); ?>
                        <h2 class="text-danger"> <?php echo $titulo_datos_bancarios; ?> </h2>
                    </div>
                    <div class="card-body">
                        <?php $datos_beneficiario = get_post_meta( get_the_ID(), 'datos_beneficiario', true ); ?>
                        <?php echo $datos_beneficiario; ?>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card border-0">
                    <div class="card-body">
                        <?php $imagen_donar = get_post_meta( get_the_ID(), 'imagen_donar', true ); ?>
                        <?php echo $imagen_donar; ?>
                        <!-- <img src="./img/IncendiosForestales/donacion.png"  class="img-fluid" alt="donación imagen"> -->
                    </div>
                </div>
            </div>

        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="card border-0">
                    <div class="card-body text-center text-danger">
                        <?php $texto_cierre = get_post_meta( get_the_ID(), 'texto_cierre', true ); ?>
                        <?php echo $texto_cierre; ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- ./Donar -->

    <!-- Aliados -->
    <section class="container"> 
        <?php $titulo_aliados = get_post_meta( get_the_ID(), 'titulo_aliados', true );?>
        <h1 class="text-danger fw-semibold display-5 my-5 text-center"><?php echo $titulo_aliados; ?></h1>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center"> 
            <?php $logos_aliados = get_post_meta( get_the_ID(), 'reforestamos_group_incendios_imagenes_aliados', true ); ?>

            <?php if($logos_aliados) { ?>
                <?php foreach($logos_aliados as $logo_aliado){ ?>
                    <div class="col">
                        <div class="card border-0">
                            <div class="card-body d-flex justify-content-center">
                                <?php echo $logo_aliado['logo_aliados']; ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>    
            <?php } else { ?>
                <p class="text-danger"> Error </p>
            <?php } ?>
        </div>

        <div class="row">
            <div class="col mt-5">
                <?php $footer_aliados = get_post_meta( get_the_ID(), 'texto_aliados_footer', true ); ?>

                <?php echo $footer_aliados; ?>

            </div>
        </div>
    </section>
    <!-- ./Aliados -->