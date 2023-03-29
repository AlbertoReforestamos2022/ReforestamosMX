
        <!-- Documentos -->
        <div class="container my-5">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 justify-content-center">
            <?php  $informacion_documentos = get_post_meta( get_the_ID(), 'reforestamos_group_documento', true ); 


            if($informacion_documentos === "") { ?>
                <p> </p>
            <?php } else { 

                foreach($informacion_documentos as $info_doc) {
                ?> 
                    <div class="col">
                        <div class="card border-0 h-100">
                            <div class="card-header bg-transparent border-0 d-flex align-items-center justify-content-center img-nota">
                            <?php echo $info_doc['imagen_logo']; ?>
                            </div>
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <div class="">
                                    <button class="text-center btn btn-outline-success text-center link-documento">
                                        <?php echo $info_doc['link_logo']; ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } ?>
            <?php } ?>

            

    

            </div>
        </div>
        <!-- ./Documentos -->