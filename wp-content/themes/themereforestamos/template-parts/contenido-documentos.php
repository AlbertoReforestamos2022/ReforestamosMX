<?php   /* printf('<pre>%s</pre>', var_export( get_post_custom( get_the_ID() ), true )); */  ?> 
    <!-- Informes Anuales -->
    <div class="container-xxl my-5">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 ">
            <?php  $titulo_documentos = get_post_meta( get_the_ID(), 'reforestamos_group_documento_btn_', true );
                if($titulo_documentos === "") { ?>
                    <p></p>
                <?php } else { 

                foreach($titulo_documentos as $titulo_doc) {
                ?> 
                    <div class="p-2">
                        <button class="btn btn-success text-white shadow w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo substr( $titulo_doc['anio_titulo_documento'], 0, 5 ); ?>" aria-expanded="false" aria-controls="collapse<?php echo substr( $titulo_doc['anio_titulo_documento'], 0, 5 ); ?>">
                            <h4><?php echo $titulo_doc['anio_titulo_documento'] ?></h4>
                        </button>

                        <div class="collapse" id="collapse<?php echo substr( $titulo_doc['anio_titulo_documento'], 0, 5 ); ?>">                        
                            <div class="card card-body border-0 text-center mt-3 shadow text-docoration-none text-sucess documentos_link w-100">
                                <?php echo $titulo_doc['link_documento']; ?>
                                
                            </div>
                        </div>
                    </div>

                <?php } ?>
            <?php } ?>

        </div>
    </div>
    <!-- ./Informes Anuales -->