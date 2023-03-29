<?php get_header(); ?>
    <?php 
        $pagina_blog = get_option('page_for_posts');
        $imagen_id = get_post_thumbnail_id($pagina_blog);
        $imagen_src = wp_get_attachment_image_src($imagen_id, 'full')[0];
    ?>

    <!-- Titulo-Background -->
    <section class="title-background" style="background-image: linear-gradient(rgba(38, 64, 64, .3), rgba(38, 64, 64, .3)), url(<?php echo $imagen_src ?>);  padding: 0.1px;">
        <h1 class="text-center text-white fw-semibold title-general display-2" ><?php echo get_the_title($pagina_blog) ?></h1>
    </section>
    <!-- /. Titulo-Background -->

    <!-- Notas Recientes -->
    <div class="container-xxl py-5">
        <div class="row justify-content-end">
            <div class="col">
                <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center">                 
                    <?php while(have_posts()): the_post();  ?>
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
                </div>

                <div class="row mt-5">
                    <ul class="pagination justify-content-center">
                        <li class="page-item  mx-3">
                            <?php previous_posts_link('
                                <span class="page-link" aria-hidden="true"> &laquo; Anterior </span>
                                <span class="sr-only"></span>
                                '); 
                            ?>
                        </li>

                        <li class="page-item mx-3">
                            <?php next_posts_link('
                                <span class="page-link" aria-hidden="true"> Siguiente &raquo; </span>
                                <span class="sr-only"></span>
                                ');
                            ?>
                        </li>
                    </ul>
                </div>
            </div>

            <?php get_sidebar(); ?>

        </div>

    </div>
    <!-- ./Notas Recientes -->


<?php get_footer(); ?>