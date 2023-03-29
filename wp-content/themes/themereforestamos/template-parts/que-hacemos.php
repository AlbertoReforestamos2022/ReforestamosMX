    <!-- Card Modelos de manejo de paisajes -->
    <div class="container-xxl" id="manejo-paisajes">
        <?php  $titulo_principal = get_post_meta( get_the_ID(), 'titulo_principal', true ); ?>
        <h1 class="espacio-lineas-accion text-center text-primary fs-1"> <?php echo $titulo_principal; ?> </h1>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 justify-content-center px-5"> 
            <?php  $contenidos_iniciativa = get_post_meta( get_the_ID(), 'reforestamos_group_que_hacemos_cards', true ); ?>
            <?php  if($contenidos_iniciativa) { ?>
            <?php  foreach($contenidos_iniciativa as $contenido) { ?>
              <?php $target = str_replace(' ', '-', $contenido['nombre_iniciativa']); ?>
              <!-- Card - Modelos de manejo de paisajes  -->
              <div class="col py-5 py-md-1">
                  <div class="card border-0 shadow-lg h-100 rounded-3 d-grid align-items-end justify-content-center">
                      <div class="card-header border-0 bg-transparent ">
                          <?php echo $contenido['logo_iniciativa'];?>
                      </div>

                      <div class="card-body">
                          <h4 class="text-primary text-center" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?php echo $target; ?>"><?php echo $contenido['nombre_iniciativa'];?></h4>
                      </div>
                  </div>
              </div>

              <!-- Modal - Modelos de manejo de paisajes  -->
              <div class="modal fade" id="<?php echo $target; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="<?php echo $target; ?>Label" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                            <h3 class="modal-title text-light text-center" id="<?php echo $target; ?>"><?php echo $contenido['nombre_iniciativa'];?> </h3>
                            
                          </div>
              
                          <div class="modal-body py-5">
                            <?php echo $contenido['desc_iniciativa_modal'];?>
                          </div>
              
                          <div class="modal-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal" aria-label="Close">Salir </button>
                            <a class="btn btn-outline-primary" href="<?php echo $contenido['link_iniciativa'];?>" target="_blank">Saber Más</a>
                          </div>
            
                      </div>
                  </div>
              </div>
            <?php }?>
            <?php } else { ?> 
              <?php echo reforestamos_nota_error( get_the_ID() ); ?>
            <?php } ?>
        </div>
    </div>
    <!-- ./Card Modelos de manejo de paisajes -->

    <!-- ---------------------------------------------- -->

    <!-- Incidencia en políticas públicas -->
    <div class="container-xxl" id="incidencia-politica">
        <?php  $titulo_incidencia = get_post_meta( get_the_ID(), 'titulo_principal_incidencia', true ); ?>
        <h1 class="espacio-lineas-accion text-center text-primary fs-1"><?php echo $titulo_incidencia ?></h1>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 justify-content-center px-5">
            <?php  $contenidos_incidencias = get_post_meta( get_the_ID(), 'reforestamos_group_que_hacemos_cards_incidencia', true ); ?>

            <?php if($contenidos_incidencias) { ?>
            <?php foreach($contenidos_incidencias as $contenido_incidencia) { ?>
            <?php $incidencia_target = substr(str_replace(' ', '-', $contenido_incidencia['nombre_incidencia']), 0, 5 ); ?> 

              <div class="col py-5 py-md-1">
                  <div class="card border-0 shadow-lg h-100 rounded-3 d-grid align-items-end justify-content-center">
                        <div class="card-header border-0 bg-transparent ">
                            <?php echo $contenido_incidencia['logo_inicidencia'];?>
                        </div>

                        <div class="card-footer border-0 bg-transparent">
                            <h4 class="text-primary text-center" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?php echo $incidencia_target; ?>"><?php echo $contenido_incidencia['nombre_incidencia']?></h4>
                        </div>
                  </div>
              </div>

              <!-- Modal - Modelos de manejo de paisajes  -->
              <div class="modal fade" id="<?php echo $incidencia_target; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="<?php echo $incidencia_target; ?>Label" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                            <h3 class="modal-title text-light text-center" id="<?php echo $incidencia_target; ?>"><?php echo $contenido_incidencia['nombre_incidencia'];?> </h3>
                            
                          </div>
              
                          <div class="modal-body py-5">
                            <?php echo $contenido_incidencia['desc_incidencia_modal'];?>
                          </div>
              
                          <div class="modal-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal" aria-label="Close">Salir </button>
                            <a class="btn btn-outline-primary" href="<?php echo $contenido_incidencia['link_incidencia'];?>" target="_blank">Saber Más</a>
                          </div>
            
                      </div>
                  </div>
              </div>
            <?php } ?>  
            <?php }else { ?>
              <?php echo reforestamos_nota_error( get_the_ID() ); ?>
            <?php }?>  



        </div>
    </div>
    <!-- ./ Incidencia en políticas públicas -->

    <!-- ---------------------------------------------- -->

    <!-- Comunidades de emprendimiento -->
    <div class="container-xxl" id="comunidades-emprendimiento">
        <?php  $titulo_comunidades = get_post_meta( get_the_ID(), 'titulo_principal_comunidades', true ); ?>
        <h1 class="espacio-lineas-accion text-center text-primary fs-1"><?php echo $titulo_comunidades;?></h1>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 justify-content-center px-5">
        <?php  $contenidos_comunidades = get_post_meta( get_the_ID(), 'reforestamos_group_que_hacemos_cards_comunidades', true ); ?>
        <?php if($contenidos_comunidades) {
            foreach($contenidos_comunidades as $comunidad){ ?>
            <?php $comunidad_target= substr(str_replace(' ', '-', $comunidad['titulo_comunidad']), 0, 5 ); ?>
            <div class="col py-5 py-md-1">
                <div class="card border-0 shadow-lg h-100 rounded-3 d-grid align-items-end justify-content-center ">
                    <div class="card-header border-0 bg-transparent ">
                        <?php echo $comunidad['logo_comunidad'];?>
                    </div>

                    <div class="card-body">
                        <h4 class="text-primary text-center" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?php echo $comunidad_target; ?>"><?php echo $comunidad['titulo_comunidad'];?></h4>
                    </div>
                </div>
            </div>

              <!-- Modal - Modelos de manejo de paisajes  -->
              <div class="modal fade" id="<?php echo $comunidad_target; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="<?php echo $comunidad_target; ?>Label" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                            <h3 class="modal-title text-light text-center" id="<?php echo $comunidad_target; ?>"><?php echo $comunidad['titulo_comunidad'];?> </h3>
                            
                          </div>
              
                          <div class="modal-body py-5">
                            <?php echo $comunidad['desc_comunidad_modal'];?>
                          </div>
              
                          <div class="modal-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal" aria-label="Close">Salir </button>
                            <a class="btn btn-outline-primary" href="<?php echo $comunidad['link_comunidad'];?>" target="_blank">Saber Más</a>
                          </div>
            
                      </div>
                  </div>
              </div>
        <?php  }
        } else { ?>
          <?php echo reforestamos_nota_error( get_the_ID() ); ?>
        <?php }?>

        </div>
    </div>
    <!-- ./Comunidades de emprendimiento -->

    <!-- ---------------------------------------------- -->

    <!-- Compromisos del sector privado -->
    <div class="container-xxl" id="sector-privado">
        <?php  $titulo_privado = get_post_meta( get_the_ID(), 'titulo_principal_privado', true ); ?>
        <h1 class="espacio-lineas-accion text-center text-primary fs-1"><?php echo $titulo_privado; ?></h1>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 justify-content-center px-5">
            <?php  $contenidos_privados = get_post_meta( get_the_ID(), 'reforestamos_group_que_hacemos_cards_privado', true ); ?>
            <?php if($contenidos_privados){
              foreach($contenidos_privados as $privado) { ?>
              <?php $privado_target = substr(str_replace(' ', '-', $privado['titulo_privado']), 0, 5 );; ?>
              <div class="col py-5 py-md-1">
                  <div class="card border-0 shadow-lg h-100 rounded-3 d-grid align-items-end justify-content-center">
                      <div class="card-header border-0 bg-transparent ">
                          <?php echo $privado['logo_privado'];?>
                      </div>

                      <div class="card-body">
                          <h4 class="text-primary text-center" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?php echo $privado_target;?>" ><?php echo $privado['titulo_privado'];?></h4>
                      </div>
                  </div>
              </div>
              
              <!-- Modal - Modelos de manejo de paisajes  -->
              <div class="modal fade" id="<?php echo $privado_target; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="<?php echo $privado_target; ?>Label" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                            <h3 class="modal-title text-light text-center" id="<?php echo $privado_target; ?>"><?php echo $privado['titulo_privado'];?> </h3>
                            
                          </div>
              
                          <div class="modal-body py-5">
                            <?php echo $privado['desc_privado_modal'];?>
                          </div>
              
                          <div class="modal-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal" aria-label="Close">Salir </button>
                            <a class="btn btn-outline-primary" href="<?php echo $privado['link_privado'];?>" target="_blank">Saber Más</a>
                          </div>
            
                      </div>
                  </div>
              </div>
            <?php  }
            } else {?>
                <?php echo reforestamos_nota_error( get_the_ID() ); ?>
            <?php }?>
        </div>
    </div>
    <!-- ./Compromisos del sector privado -->

    <!-- ---------------------------------------------- -->

    <!-- Campañas de empoderamiento ciudadano -->
    <div class="container-xxl legabilidad-transparencia" id="empoderamiento-ciudadano">
        <?php  $titulo_ciudadano = get_post_meta( get_the_ID(), 'titulo_principal_ciudadano', true ); ?> 
        <h1 class="espacio-lineas-accion text-center text-primary fs-1"><?php echo $titulo_ciudadano ?></h1>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 justify-content-center px-5">
        <?php  $contenidos_ciudadanos = get_post_meta( get_the_ID(), 'reforestamos_group_que_hacemos_cards_ciudadano', true ); ?>
        <?php if($contenidos_ciudadanos) {
              foreach($contenidos_ciudadanos as $ciudadano) { ?>
              <?php $ciudadano_target = substr(str_replace(' ', '-', $ciudadano['titulo_ciudadano']), 0, 5 );; ?>
                <div class="col py-5 py-md-1">
                    <div class="card border-0 shadow-lg h-100 rounded-3 d-grid align-items-end justify-content-center">
                        <div class="card-header border-0 bg-transparent">
                            <?php echo $ciudadano['logo_ciudadano'];?>
                        </div>

                        <div class="card-body">
                            <h4 class="text-primary text-center" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?php echo $ciudadano_target;?>" ><?php echo $ciudadano['titulo_ciudadano'];?></h4>
                        </div>
                    </div>
                </div>

               <!-- Modal - Modelos de manejo de paisajes  -->
              <div class="modal fade" id="<?php echo $ciudadano_target; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="<?php echo $ciudadano_target; ?>Label" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                            <h3 class="modal-title text-light text-center" id="<?php echo $ciudadano_target; ?>"><?php echo $ciudadano['titulo_ciudadano'];?> </h3>
                            
                          </div>
              
                          <div class="modal-body py-5">
                            <?php echo $ciudadano['desc_ciudadano_modal'];?>
                          </div>
              
                          <div class="modal-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal" aria-label="Close">Salir </button>
                            <a class="btn btn-outline-primary" href="<?php echo $ciudadano['link_ciudadano'];?>" target="_blank">Saber Más</a>
                          </div>
            
                      </div>
                  </div>
              </div>
        <?php  }
        } else { ?>
          <?php echo reforestamos_nota_error( get_the_ID() ); ?>
        <?php } ?>
        </div>
    </div>
    <!-- ./Campañas de empoderamiento ciudadano -->