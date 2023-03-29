<?php get_header(); ?>

    <div class="container espacio-general">
        <div class="row">
            <div class="col">
                <h1 class="text-info text-center" >Resultados</h1>
            </div>
        </div>
    </div>

    <div class="search-page  container">

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        <?php while(have_posts()): the_post();  ?>
                    <div class="col px-4 px-md-2">
                        <div class="card h-100 border-0 shadow-sm">
                            <!--  -->
                            <?php the_post_thumbnail('mediano', array('class' => 'card-img-top p-2 rounded-1 shadow-sm img-nota'));?>
          
                          <div class="card-header border-0 bg-transparent p-3">

                          </div>
          
                          <div class="card-body px-3">
                            <h4 class="card-title fw-normal"><a href="<?php the_permalink();?>" class="text-decoration-none text-info"><?php the_title(); ?></a></h4>
                          </div>
          
                        </div>
                    </div>
         <?php endwhile; ?>
        </div>
    </div>

<?php get_footer();?>