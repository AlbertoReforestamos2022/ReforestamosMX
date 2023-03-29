    <!-- Adopta un arbol texto -->
    <div class="container-xxl espacio">
        <div class="row shadow rounded-4 p-5 my-5">
        <?php $info_principal = get_post_meta( get_the_ID(), 'info_principal', true); ?> 
            <div class="col text-primary text-justify my-3">
                <?php echo $info_principal; ?>
            </div>
        </div>


        <div class="row row-cols-1 row-cols-md-2 align-items-center shadow rounded-4 p-1">
            <?php $infos_principales = get_post_meta( get_the_ID(), 'reforestamos_group_adopta_info_principal', true); ?> 

            <?php if($infos_principales !== ' '){
                foreach($infos_principales as $info) { ?>
                <div class="col-12 col-md-7 p-5 text-justify">
                    <?php echo $info['info_texto_principal'];?>
                </div>

                <div class="col-12 col-md-5">
                    <?php echo $info['info_imagen_principal'];?>
                </div>
            <?php }
            } else { ?>
                <h3 class="text-danger">Error</h3>
            <?php }?>


        </div>
    </div>
    <!-- ./adopta un árbol texto -->


    <!-- Sección adopción -->
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2">
            <?php $cards_adoptas = get_post_meta( get_the_ID(), 'reforestamos_group_adopta_arbol_principal', true); ?> 
            <?php if($cards_adoptas !== ' ') {
                foreach($cards_adoptas as $card) { ?>
                <div class="col">
                    <div class="card border-0 bg-transparent shadow rounded-2 p-2 h-100">
                        <div class="card-header bg-transparent border-0">
                            <?php echo $card['card_header_adopta']; ?>
                        </div>
                        <div class="card-body">
                            <?php echo $card['card_body_adopta'];?>

                            <div class="d-flex justify-content-center">
                                <a href="<?php echo $card['link_card_adopta']?>" class="btn btn-outline-light">Quiero Adoptar</a>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                            <?php echo $card['card_footer_adopta'];?>
                        </div>
                    </div>
                </div>                    

            <?php }
            } else { ?>
                <h3 class="text-danger fw-bold">Error</h3>
            <?php } ?>
        </div>
    </div>
    <!-- ./Sección adopción -->