<?php
/** Agregar CMB2 **/
require_once dirname(__FILE__) . '/cmb2.php';
require_once dirname(__FILE__) . '/inc/custom-fields.php';

/** Función que muestra la imagen destacada en el page */
add_action('init', 'reforestamos_imagen_destacada');
function reforestamos_imagen_destacada($id) { 
    $imagen = get_the_post_thumbnail_url($id, 'full'); 
    $titulo = get_the_title();

    $html = '';

    if($imagen) {
        $html .= '<section class="title-background imagen-destacada">';
        $html .= '<h1 class="text-center text-white fw-bold title-general display-2">';
        $html .=  "  $titulo  ";
        $html .= '</h1>';
        $html .= '</section>';

        // Agregamos los estilos linealmente
        wp_register_style('custom', false);
        wp_enqueue_style('custom');

        // Creamos el css para el custom
        $imagen_destacda_css = "
            .imagen-destacada {
                background-image: url( $imagen );
                padding: 0.1px;
            }
        ";
        wp_add_inline_style('custom', $imagen_destacda_css);
    } else {
        $html .= '<section class="title-background bg-info p-1">';
        $html .= '<h1 class="text-center text-white fw-bold title-general display-2">';
        $html .=  "$titulo";
        $html .= '</h1>';
        $html .= '</section>';
    }
    return $html;


}

/** Función que muestra la imagen destacada la nota de blog */
add_action('init', 'reforestamos_imagen_destacada_nota_blog');
function reforestamos_imagen_destacada_nota_blog($id) { 
    $imagen = get_the_post_thumbnail_url($id, 'full'); 
    $titulo = get_the_title();

    $html = '';

    if($imagen) {
        $html .= '<section class="container">';
            $html .= '<div class="row justify-content-center align-items-center title-post imagen-destacada rounded-3">';
                $html .= '<h1 class="text-center text-white fw-bold title-general display-2">';
                $html .=  "  $titulo  ";
                $html .= '</h1>';
            $html .= "</div>";
        $html .= '</section>';

        // Agregamos los estilos linealmente
        wp_register_style('custom', false);
        wp_enqueue_style('custom');

        // Creamos el css para el custom
        $imagen_destacda_css = "
            .imagen-destacada {
                background-image: url( $imagen );
                padding: 0.1px;
            }
        ";
        wp_add_inline_style('custom', $imagen_destacda_css);
    } else {
        $html .= '<section class="title-post bg-info p-1">';
        $html .= '<h1 class="text-center text-white fw-bold title-general display-2">';
        $html .=  "$titulo";
        $html .= '</h1>';
        $html .= '</section>';
    }
    return $html;


}

/** Función que muestra la palabra error */
add_action('init', 'reforestamos_nota_error');
function reforestamos_nota_error() { 
    $error = ' ';
    $error .= ' <h3 class="text-danger text-justify p-3">Agrega un dato y sí el problema continua consúltalo con el administrador</h3>';

    return $error;
}

/* Funciones que se activan al cargar el tema */
function reforestamos_setup() {
    // Definir tamaños de las imagenes
    add_image_size('mediano', 424, 320, true);

    // Añadir Imagen destacada
    add_theme_support('post-thumbnails');



    // Menú de Navegación
    register_nav_menus(array(
        'menu-principal' => esc_html__('Menú Principal', 'Reforestamos México'),
        'menu-llamados-accion' => esc_html__('Menú Llamados a la Acción', 'Reforestamos México'),
        'menu-redes-sociales' => esc_html__('Menú Redes Sociales', 'Reforestamos México'),
        'menu-footer-sitios-interes' => esc_html__('Menú Sitios de Interés', 'Reforestamos México'),
        'menu-mapa-footer'           => esc_html__('Directorio Footer', 'Reforestamos México'),
        'menu-contacto-footer'       => esc_html__('Contacto Footer', 'Reforestamos México'),
        'aviso-privacidad'       => esc_html__('Aviso de privacidad', 'Reforestamos México'),   
    ));
}
add_action('after_setup_theme', 'reforestamos_setup' );


/** * Agrega la clase nav-link de bootstrap al menu principal * **/
function reforestamos_enlace_class($atts, $item, $args) {
    if($args->theme_location == 'menu-principal') {
        $atts['class'] = 'nav-link';
    }

    if($args->theme_location == 'menu-footer-sitios-interes') {
        $atts['class'] = 'nav-link px-0';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'reforestamos_enlace_class', 10, 3);




/** Carga los scripts y css del theme **/
function reforestamos_scripts() {
    /** Styles */
    wp_enqueue_style('style', get_stylesheet_uri(), '5.3.0');
    wp_enqueue_style('chat', get_template_directory_uri() . './dist/chat.css', array('style'));
    
    wp_enqueue_style('icons-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css');

    /** Shared Icons */
    wp_enqueue_script('sharedIcons', 'https://platform-api.sharethis.com/js/sharethis.js#property=62d1c674ebc31f0019d5bde7&product=inline-share-buttons', '1.0.0', false);

    /** Scripts */
    wp_enqueue_script('jquery');
    wp_enqueue_script('jqueryWeb', 'https://code.jquery.com/jquery-3.6.1.min.js', '3.6.1', false);
    /** Slider  */
    wp_enqueue_script('sliderJs', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('jquery'), '1.0.0', false);
    /** Slider CSS */
    wp_enqueue_style('sliderCss', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', array(), '1.0.0' );
    wp_enqueue_style('sliderCss01', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), '1.0.0');


    /* Links footer */
    wp_enqueue_script('popperBootstrap', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js', array(), '1.0.0', true);
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js',array(), '5.0.5', true);

    /** Slider JS footer */
    wp_enqueue_script('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '2.3.1', true);

    /** ChatBot */
    wp_enqueue_script('response', get_template_directory_uri() . './src/js/response.js', '1.0.0', true);
    wp_enqueue_script('chat',  get_template_directory_uri() .  './src/js/chat.js', array('response'), '1.2.3', true);

    /** JS General */
    wp_enqueue_script('script', get_template_directory_uri() . './src/js/script.js', '1.0.0', true );
}
add_action('wp_enqueue_scripts', 'reforestamos_scripts');


// Crear Shortcode 
function reforestamos_contacto_shortcode() {
    echo 'Desde shortcorde';
}
add_shortcode('reforestamos_contacto', 'reforestamos_contacto_shortcode');