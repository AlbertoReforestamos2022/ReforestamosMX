<?php get_header(); 
    /*
    * Template Name: Página Documentos Info
    */
?>
    <?php while(have_posts()): the_post();

    /** Titulo Imagen destacada  */
    get_template_part('template-parts/contenido', 'paginas'); 

    /** Contenido Sobre Nostros */

    /** Aliados tipo A */
    get_template_part('template-parts/contenido', 'documentos'); 

    endwhile; ?>


<?php get_footer(); ?>