    <!-- Aliados -- Organizaciones de la sociedad civil / Gobierno -->
    <div class="container-lg espacio-lineas-accion">
        <div class="row row-cols-2 row-cols-md-2 row-cols-lg-3 g-2 align-items-center">
        <?php  $logos_aliados = get_post_meta( get_the_ID(), 'reforestamos_group_seccion_aliados', true );?>

        <?php if($logos_aliados !== ' ') { ?>
            <?php  foreach($logos_aliados as $logo_aliado) { ?>
                <div class="col px-0 px-md-5">
                    <div class="card border-0">
                        <div class="card-body d-flex justify-content-center">
                            <?php echo $logo_aliado['imagen_logo']; ?>
                        </div>
                    </div>
                </div>
            <?php } 
         } else { ?>
            <h3 class="text-danger "> Error </h3>
        <?php } ?>

    </div>
    <!-- ./Aliados -- Organizaciones de la sociedad civil / Gobierno -->