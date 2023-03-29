<?php get_header(); 
    /*
    * Template Name: Página Aliados (Organizaciones -- Gobierno)
    */
?>

    <?php while(have_posts()): the_post();

        /** Titulo Imagen destacada  */
        get_template_part('template-parts/contenido', 'paginas'); 

        /** Contenido Sobre Nostros */

        /** Aliados tipo A */
        get_template_part('template', 'parts/organizaciones'); 


     endwhile; ?>
<?php get_footer(); ?>