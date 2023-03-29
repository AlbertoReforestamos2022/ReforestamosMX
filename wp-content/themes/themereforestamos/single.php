<?php get_header(); ?>
<!-- Fondo titulo Nuestras notas -->
    <?php while(have_posts()): the_post();?>
        <!-- Titulo-Background -->
        <?php  get_template_part('template-parts/contenido', 'post'); ?>
        <!-- /. Titulo-Background -->
    <?php endwhile; ?>
<?php get_footer(); ?>