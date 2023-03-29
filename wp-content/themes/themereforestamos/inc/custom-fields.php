<?php
/**
 * Inicio (Principal)
 */
add_action( 'cmb2_admin_init', 'reforestamos_menu_sitio_general' );
function reforestamos_menu_sitio_general() {
    $prefix = 'reforestamos_home_';
    $id_home = get_option('page_on_front');

	$reforestamos_color_menu = new_cmb2_box( array(
		'id'           => $prefix . 'homepage',
		'title'        => esc_html__( 'Color Menú Llamados a la acción', 'cmb2' ),
		'object_types' => array( 'page' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array(
			'id' => array( $id_home ),
		), // Specific post IDs to display this metabox
	) );

	/**  Color Menú   */
	$reforestamos_color_menu->add_field(  array(
		'name'             => esc_html__( 'Color del fondo del menú llamados a la acción', 'cmb2' ),
		'id'               => 'back_general',
		'type'             => 'radio_inline',
		'options'          => array(
			'bg-primary' => esc_html__( 'Color Verde Reforestamos', 'cmb2' ),
			'bg-light'   => esc_html__( 'Color Verde Claro', 'cmb2' ),
			'bg-warning' => esc_html__( 'Color Amarillo', 'cmb2' ),
			'bg-danger'   => esc_html__( 'Color Rojo', 'cmb2' ),
		),
	) );
}
/** Titulo nuestras notas y bellota refotestamos*/ 
add_action( 'cmb2_admin_init', 'reforestamos_campos_homepage' );
function reforestamos_campos_homepage() {
    $prefix = 'reforestamos_home_';
    $id_home = get_option('page_on_front');

	$reforestamos_campos_homepage = new_cmb2_box( array(
		'id'           => $prefix . 'homepage',
		'title'        => esc_html__( 'Titulo nuestras notas - Bellota titulo reforestamos', 'cmb2' ),
		'object_types' => array( 'page' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array(
			'id' => array( $id_home ),
		), // Specific post IDs to display this metabox
	) );

    /** Bellota Titulo **/
    $reforestamos_campos_homepage->add_field( array(
		'name' => esc_html__( 'Bellota Titulo Reforestamos', 'cmb2' ),
		'desc' => esc_html__( 'Bellota Titulo Reforestamos', 'cmb2' ),
		'id'   => $prefix . 'imagen_bellota',
		'type' => 'file',
	));

    $reforestamos_campos_homepage->add_field( array(
		'name' => esc_html__( 'Titulo Nuestras Notas', 'cmb2' ),
		'desc' => esc_html__( 'Titulo Nuestras Notas', 'cmb2' ),
		'id'   => $prefix . 'titulo_nuestras_notas',
		'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 5,
        ),
	));
}

/** Carousel */
add_action( 'cmb2_admin_init', 'reforestamos_homepage_carousel' );
function reforestamos_homepage_carousel() {
    $prefix = 'reforestamos_home_';
    $id_home = get_option('page_on_front');

	$reforestamos_carousel = new_cmb2_box( array(
		'id'           => $prefix . 'carousel_main',
		'title'        => esc_html__( 'Casousel Principal', 'cmb2' ),
		'object_types' => array( 'page' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array(
			'id' => array( $id_home ),
		), // Specific post IDs to display this metabox
	) );

    $reforestamos_carousel->add_field( array(
		'name' => esc_html__( 'Imagen Principal Carousel', 'cmb2' ),
		'desc' => esc_html__( 'Carga la imagen principal del carousel', 'cmb2' ),
		'id'   => $prefix . 'imagen_principal_carousel',
		'type' => 'file',
	) );

	$group_field_id = $reforestamos_carousel->add_field( array(
		'id'          => $prefix . 'carousel',
		'type'        => 'group',
		'description' => esc_html__( 'Agregar Imagenes Principal Home', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Imagen {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Agregar grupo', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => true,

		),
	) );

    $reforestamos_carousel->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Imagen Carousel', 'cmb2' ),
		'id'   => 'imagen_carousel',
		'type' => 'file',
	) );


    $reforestamos_carousel->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'URL - Dirección Imagen si tiene una', 'cmb2' ),
		'desc' => esc_html__( 'Ejemplo => https://www.reforestamosmexico.org/', 'cmb2' ),
		'id'   => 'url_imagen_carousel',
		'type' => 'text_url',
	) );
}

/** Nuestras Lineas de acción */
add_action( 'cmb2_admin_init', 'reforestamos_homepage_lineas_accion' );
function reforestamos_homepage_lineas_accion() {
    $prefix = 'reforestamos_home_';
    $id_home = get_option('page_on_front');

	$reforestamos_lineas_accion = new_cmb2_box( array(
		'id'           => $prefix . 'lineas_accion',
		'title'        => esc_html__( 'Lineas de Acción', 'cmb2' ),
		'object_types' => array( 'page' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array(
			'id' => array( $id_home ),
		), // Specific post IDs to display this metabox
	) );

    $reforestamos_lineas_accion->add_field( array(
		'name' => esc_html__( 'Titulo Lineas de acción', 'cmb2' ),
		'desc' => esc_html__( 'Agrega el titulo de la sección ', 'cmb2' ),
		'id'   => $prefix . 'titulo_lineas_accion',
		'type' => 'text',
	) );

	$group_field_id = $reforestamos_lineas_accion->add_field( array(
		'id'          => $prefix . 'lineas_accion',
		'type'        => 'group',
		'description' => esc_html__( 'Agrega Lineas de acción', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Linea de acción {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Agregar grupo', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => true,
			// 'closed'      => true, // true to have the groups closed by default
			// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );

    $reforestamos_lineas_accion->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Imagen Linea de Acción', 'cmb2' ),
		'id'   => 'imagen_linea_acción',
		'type' => 'file',
	) );

	$reforestamos_lineas_accion->add_group_field( $group_field_id, array(
		'name'       => esc_html__( 'Texto Linea de Acción', 'cmb2' ),
		'id'         => 'texto_linea_acción',
		'type'       => 'textarea',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );
}
/** Sitios de interes */
add_action( 'cmb2_admin_init', 'reforestamos_homepage_sitios_interes' );
function reforestamos_homepage_sitios_interes() {
    $prefix = 'reforestamos_home_';
    $id_home = get_option('page_on_front');

	$reforestamos_sitios_interes = new_cmb2_box( array(
		'id'           => $prefix . 'sitios_interes',
		'title'        => esc_html__( 'Sitios de Interés', 'cmb2' ),
		'object_types' => array( 'page' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array(
			'id' => array( $id_home ), 
		), // Specific post IDs to display this metabox
	) );

    $reforestamos_sitios_interes->add_field( array(
		'name' => esc_html__( 'Titulo Sitios Interés', 'cmb2' ),
		'desc' => esc_html__( 'Agrega el titulo de la sección ', 'cmb2' ),
		'id'   => $prefix . 'titulo_principal',
		'type' => 'text',
	) );

	$group_field_id = $reforestamos_sitios_interes->add_field( array(
		'id'          => $prefix . 'sitios_interes',
		'type'        => 'group',
		'description' => esc_html__( 'Agrega logos de las organizaciones', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Organización {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Agregar grupo', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => true,
			// 'closed'      => true, // true to have the groups closed by default
			// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );

    $reforestamos_sitios_interes->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Logo Organización, Empresa, A.C.', 'cmb2' ),
		'id'   => 'imagen_sitio_interes',
		'type' => 'wysiwyg',
	) );
}



/**
 * Nosotros
 */
/** Sección Principal Página Nosotros **/  
add_action( 'cmb2_admin_init', 'reforestamos_principal_nosotros' );
function reforestamos_principal_nosotros() {
    $prefix = 'reforestamos_group_';

	$reforestamos_campo_principal = new_cmb2_box( array(
		'id'           => $prefix . 'campo_principal',
		'title'        => esc_html__( 'Sección principal nosotros', 'cmb2' ),
		'object_types' => array( 'page' ), 
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, 
		'show_on'      => array(
            'key'      => 'page-template',
            'value'    => 'page-nosotros.php' 
		), 
	) );

    $reforestamos_campo_principal->add_field( array(
		'name' => esc_html__( 'Titulo campo principal', 'cmb2' ),
		'desc' => esc_html__( 'Titulo campo principal', 'cmb2' ),
		'id'   => 'titulo_principal_nosotros',
		'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 5,
        ),
	));

    $reforestamos_campo_principal->add_field( array(
		'name' => esc_html__( 'Descrpción campo principal', 'cmb2' ),
		'desc' => esc_html__( 'Descrpción campo principal', 'cmb2' ),
		'id'   => 'descripcion_principal_nosotros',
		'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 5,
        ),
	));

    $reforestamos_campo_principal->add_field( array(
        'name' => esc_html__( 'Imagen campo principal', 'cmb2' ),
        'desc' => esc_html__( 'Imagen campo principal', 'cmb2' ),
        'id'   => 'imagen_principal_nosotros',
        'type' => 'file',
    ));

}

/** Campos repetibles Sección Misión, Visión **/
add_action( 'cmb2_admin_init', 'reforestamos_seccion_nosotros' );
function reforestamos_seccion_nosotros() {
    $prefix = 'reforestamos_group_';

	$reforestamos_nosotros = new_cmb2_box( array(
		'id'           => $prefix . 'mision_vision',
		'title'        => esc_html__( 'Sección Misión, Visión', 'cmb2' ),
		'object_types' => array( 'page' ),
        'context'      => 'normal',
        'priority'     => 'high', 
        'show_names'   => 'true',
        'show_on'      => array(
            'key'      => 'page-template',
            'value'    => 'page-nosotros.php' 
        )
	) );

	$group_field_id = $reforestamos_nosotros->add_field( array(
		'id'          => $prefix . 'nosotros',
		'type'        => 'group',
		'description' => esc_html__( 'Agrega opciones según sea necesrio', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Campo {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Agregar grupo', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => true,
			// 'closed'      => true, // true to have the groups closed by default
			// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );

	$reforestamos_nosotros->add_group_field( $group_field_id, array(
		'name'       => esc_html__( 'Titulo', 'cmb2' ),
		'id'         => 'titulo_seccion_nosotros',
		'type'       => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	$reforestamos_nosotros->add_group_field( $group_field_id, array(
		'name'        => esc_html__( 'Descripción', 'cmb2' ),
		'description' => esc_html__( 'Agrege una Descripción', 'cmb2' ),
		'id'          => 'descripcion_seccion_nosotros',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 30,
		),
	) );

	$reforestamos_nosotros->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Imagen', 'cmb2' ),
		'id'   => 'imagen_seccion_nosotros',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 15,
		))
	);
}

/* Objetivos Reforestamos Campos iterables */
add_action( 'cmb2_admin_init', 'reforestamos_seccion_objetivos' );
function reforestamos_seccion_objetivos() {
    $prefix = 'reforestamos_group_';

	$reforestamos_objetivos = new_cmb2_box( array(
		'id'           => $prefix . 'objetivo',
		'title'        => esc_html__( 'Sección Objetivos', 'cmb2' ),
		'object_types' => array( 'page' ),
        'context'      => 'normal',
        'priority'     => 'high', 
        'show_names'   => 'true',
        'show_on'      => array(
            'key'      => 'page-template',
            'value'    => 'page-nosotros.php' 
        )
	) );

    $reforestamos_objetivos->add_field( array(
		'name' => esc_html__( 'Titulo Objetivos', 'cmb2' ),
		'desc' => esc_html__( 'Agrega el titulo ', 'cmb2' ),
		'id'   => $prefix . 'titulo_objetivos',
		'type' => 'text',
	) );

	$group_field_id = $reforestamos_objetivos->add_field( array(
		'id'          => $prefix . 'objetivos',
		'type'        => 'group',
		'description' => esc_html__( 'Agrega Objetivos', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Objetivo {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Agregar grupo', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => true,
		),
	) );

    $reforestamos_objetivos->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Imagen Objetivo', 'cmb2' ),
		'id'   => 'imagen_objetivos',
		'type' => 'file',
	) );

	$reforestamos_objetivos->add_group_field( $group_field_id, array(
		'name'       => esc_html__( 'Titulo Objetivo', 'cmb2' ),
		'id'         => 'objetivos',
		'type'       => 'text',
	) );

	/** Colores */
	$reforestamos_objetivos->add_group_field( $group_field_id, array(
		'name'             => esc_html__( 'Fondo card del objetivo', 'cmb2' ),
		'desc'             => esc_html__( 'Selecciona el color de fondo del objetivo', 'cmb2' ),
		'id'               => 'background_objetivo',
		'type'             => 'radio_inline',
		'options'          => array(
			'bg-danger' => esc_html__( 'Color rojo', 'cmb2' ),
			'bg-primary'   => esc_html__( 'Color verde institucional', 'cmb2' ),
			'bg-success' => esc_html__( 'Color verde claro', 'cmb2' ),
			'bg-light'   => esc_html__( 'Color verde-agua claro', 'cmb2' ),
		),
	) );
}

/* Valores Reforestamos Campos iterables */
add_action( 'cmb2_admin_init', 'reforestamos_seccion_valores' );
function reforestamos_seccion_valores() {
    $prefix = 'reforestamos_group_';

	$reforestamos_valores = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => esc_html__( 'Sección Valores', 'cmb2' ),
		'object_types' => array( 'page' ),
        'context'      => 'normal',
        'priority'     => 'high', 
        'show_names'   => 'true',
        'show_on'      => array(
            'key'      => 'page-template',
            'value'    => 'page-nosotros.php' 
        )
	) );

    $reforestamos_valores->add_field( array(
		'name' => esc_html__( 'Titulo Valores Reforestamos', 'cmb2' ),
		'desc' => esc_html__( 'Agrega el titulo ', 'cmb2' ),
		'id'   => $prefix . 'titulo_valores',
		'type' => 'text',
	) );

	$group_field_id = $reforestamos_valores->add_field( array(
		'id'          => $prefix . 'valores',
		'type'        => 'group',
		'description' => esc_html__( 'Agrega Valores', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Valor {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Agregar grupo', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => true,
			// 'closed'      => true, // true to have the groups closed by default
			// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );

    $reforestamos_valores->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Imagen Valores', 'cmb2' ),
		'id'   => 'imagen_valores',
		'type' => 'file',
	) );

}

/** Logros y Reconocimientos Campos iterables */
add_action( 'cmb2_admin_init', 'reforestamos_seccion_logros' );
function reforestamos_seccion_logros() {
    $prefix = 'reforestamos_group_';

	$reforestamos_logros = new_cmb2_box( array(
		'id'           => $prefix . 'logros',
		'title'        => esc_html__( 'Sección Logros', 'cmb2' ),
		'object_types' => array( 'page' ),
        'context'      => 'normal',
        'priority'     => 'high', 
        'show_names'   => 'true',
        'show_on'      => array(
            'key'      => 'page-template',
            'value'    => 'page-nosotros.php' 
        )
	) );

	// Titulo Logros
    $reforestamos_logros->add_field( array(
		'name' => esc_html__( 'Titulo logros y reconocimientos reforestamos', 'cmb2' ),
		'desc' => esc_html__( 'Agrega el titulo ', 'cmb2' ),
		'id'   => $prefix . 'titulo_logros',
		'type' => 'text',
	) );
 
	$group_field_id = $reforestamos_logros->add_field( array(
		'id'          => $prefix . 'logros',
		'type'        => 'group',
		'description' => esc_html__( 'Agrega Logros y/o Reconocimientos', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Logro o Reconocimiento {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Agregar grupo', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => true,
			// 'closed'      => true, // true to have the groups closed by default
			// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );
    // Imagen logros
    $reforestamos_logros->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Logo de la Organización - Empresa', 'cmb2' ),
		'id'   => 'imagen_logros',
		'type' => 'file',
	) );
    // Año Logro
    $reforestamos_logros->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Año que se obtuvo el logro - reconocimiento', 'cmb2' ),
		'id'   => 'anio_logro',
		'type' => 'text',
	) );
	// Texto logro	
    $reforestamos_logros->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Descripción del logro - reconocimiento', 'cmb2' ),
		'id'   => 'texto_logro',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 30,
		))
	);

	// Posición Logro	
	$reforestamos_logros->add_group_field( $group_field_id, array(
		'name'             => esc_html__( 'Posición del logro (Derecha - izquierda)', 'cmb2' ),
		'desc'             => esc_html__( 'Selecciona la posición del campo del logro', 'cmb2' ),
		'id'               => 'posicion_logro',
		'type'             => 'radio_inline',
		'options'          => array(
			'left' => esc_html__( 'Izquierda', 'cmb2' ),
			'right'   => esc_html__( 'Derecha', 'cmb2' ),
		),
	) );

}



/**
 * ¿Qué Hacemos?
 */
/** Iniciativa (Modelos de manejo de paisajes) */
add_action( 'cmb2_admin_init', 'reforestamos_hacemos_contenido' );
function reforestamos_hacemos_contenido() {
    $prefix = 'reforestamos_group_';

	$reforestamos_hacemos_contenido_cards = new_cmb2_box( array(
		'id'           => $prefix . 'que_hacemos',
		'title'        => esc_html__( 'Modelos de manejo de paisajes', 'cmb2' ),
		'object_types' => array( 'page' ),
        'context'      => 'normal',
        'priority'     => 'high', 
        'show_names'   => 'true',
        'show_on'      => array(
            'key'      => 'page-template',
            'value'    => 'page-que-hacemos.php' 
        )
	) );

	$reforestamos_hacemos_contenido_cards->add_field( array(
		'name' => esc_html__( 'Titulo principal de la sección', 'cmb2' ),
		'id'   => 'titulo_principal',
		'type' => 'text',
	) );

	$group_field_id = $reforestamos_hacemos_contenido_cards->add_field( array(
		'id'          => $prefix . 'que_hacemos_cards',
		'type'        => 'group',
		'description' => esc_html__( 'Modelos de manejo de paisajes (Iniciativas)', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Iniativa {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Agregar grupo', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => true,
			// 'closed'      => true, // true to have the groups closed by default
			// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );

	$reforestamos_hacemos_contenido_cards->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Nombre de la iniciativa', 'cmb2' ),
		'id'   => 'nombre_iniciativa',
		'type' => 'textarea',
	) );


	$reforestamos_hacemos_contenido_cards->add_group_field( $group_field_id, array(
		'name'    => esc_html__( 'Logo Iniciativa', 'cmb2' ),
		'desc'    => esc_html__( 'Agrega el Logo de la iniciativa', 'cmb2' ),
		'id'      => 'logo_iniciativa',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 18,
		),
	) );

	$reforestamos_hacemos_contenido_cards->add_group_field( $group_field_id, array(
		'name'    => esc_html__( 'Descripción de la iniciativa (Modal - Pop Up)', 'cmb2' ),
		'desc'    => esc_html__( 'Agrega el Logo de la iniciativa', 'cmb2' ),
		'id'      => 'desc_iniciativa_modal',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 18,
		),
	) );

	$reforestamos_hacemos_contenido_cards->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Link en el botón "Saber Más" de la iniciativa (Modal - Pop Up)', 'cmb2' ),
		'id'   => 'link_iniciativa',
		'type' => 'text',
	) );


}

/** Iniciativa (Incidencia en políticas públicas)  */
add_action( 'cmb2_admin_init', 'reforestamos_hacemos_incidencia' );
function reforestamos_hacemos_incidencia() {
    $prefix = 'reforestamos_group_';

	$reforestamos_hacemos_contenido_incidencia = new_cmb2_box( array(
		'id'           => $prefix . 'que_hacemos_incidencia',
		'title'        => esc_html__( 'Incidencia en políticas públicas', 'cmb2' ),
		'object_types' => array( 'page' ),
        'context'      => 'normal',
        'priority'     => 'high', 
        'show_names'   => 'true',
        'show_on'      => array(
            'key'      => 'page-template',
            'value'    => 'page-que-hacemos.php' 
        )
	) );

	$reforestamos_hacemos_contenido_incidencia->add_field( array(
		'name' => esc_html__( 'Titulo principal de la sección', 'cmb2' ),
		'id'   => 'titulo_principal_incidencia',
		'type' => 'text',
	) );

	$group_field_id = $reforestamos_hacemos_contenido_incidencia->add_field( array(
		'id'          => $prefix . 'que_hacemos_cards_incidencia',
		'type'        => 'group',
		'description' => esc_html__( 'Incidencia en políticas públicas (Iniciativas)', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Iniciativa {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Agregar grupo', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => true,
			// 'closed'      => true, // true to have the groups closed by default
			// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );

	$reforestamos_hacemos_contenido_incidencia->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Nombre de la iniciativa', 'cmb2' ),
		'id'   => 'nombre_incidencia',
		'type' => 'textarea',
	) );


	$reforestamos_hacemos_contenido_incidencia->add_group_field( $group_field_id, array(
		'name'    => esc_html__( 'Logo Iniciativa', 'cmb2' ),
		'desc'    => esc_html__( 'Agrega el Logo de la iniciativa', 'cmb2' ),
		'id'      => 'logo_inicidencia',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 18,
		),
	) );


	$reforestamos_hacemos_contenido_incidencia->add_group_field( $group_field_id, array(
		'name'    => esc_html__( 'Descripción de la iniciativa (Modal - Pop Up)', 'cmb2' ),
		'desc'    => esc_html__( 'Agrega el Logo de la iniciativa', 'cmb2' ),
		'id'      => 'desc_incidencia_modal',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 18,
		),
	) );

	$reforestamos_hacemos_contenido_incidencia->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Link en el botón "Saber Más" de la iniciativa (Modal - Pop Up)', 'cmb2' ),
		'id'   => 'link_incidencia',
		'type' => 'text',
	) );


}

/** Iniciativa (Comunidades de emprendimiento)  */
add_action( 'cmb2_admin_init', 'reforestamos_hacemos_comunidades' );
function reforestamos_hacemos_comunidades() {
    $prefix = 'reforestamos_group_';

	$reforestamos_hacemos_contenido_comunidades = new_cmb2_box( array(
		'id'           => $prefix . 'que_hacemos_comunidades',
		'title'        => esc_html__( 'Comunidades de emprendimiento', 'cmb2' ),
		'object_types' => array( 'page' ),
        'context'      => 'normal',
        'priority'     => 'high', 
        'show_names'   => 'true',
        'show_on'      => array(
            'key'      => 'page-template',
            'value'    => 'page-que-hacemos.php' 
        )
	) );

	$reforestamos_hacemos_contenido_comunidades->add_field( array(
		'name' => esc_html__( 'Titulo principal de la sección', 'cmb2' ),
		'id'   => 'titulo_principal_comunidades',
		'type' => 'text',
	) );

	$group_field_id = $reforestamos_hacemos_contenido_comunidades->add_field( array(
		'id'          => $prefix . 'que_hacemos_cards_comunidades',
		'type'        => 'group',
		'description' => esc_html__( 'Comunidades de emprendimiento (Iniciativas)', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Iniciativa {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Agregar grupo', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => true,
			// 'closed'      => true, // true to have the groups closed by default
			// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );

	$reforestamos_hacemos_contenido_comunidades->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Nombre de la iniciativa', 'cmb2' ),
		'id'   => 'titulo_comunidad',
		'type' => 'textarea',
	) );


	$reforestamos_hacemos_contenido_comunidades->add_group_field( $group_field_id, array(
		'name'    => esc_html__( 'Logo Iniciativa', 'cmb2' ),
		'desc'    => esc_html__( 'Agrega el Logo de la iniciativa', 'cmb2' ),
		'id'      => 'logo_comunidad',
		'type'    => 'wysiwyg',
	) );

	$reforestamos_hacemos_contenido_comunidades->add_group_field( $group_field_id, array(
		'name'    => esc_html__( 'Descripción de la iniciativa (Modal - Pop Up)', 'cmb2' ),
		'desc'    => esc_html__( 'Agrega el Logo de la iniciativa', 'cmb2' ),
		'id'      => 'desc_comunidad_modal',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 18,
		),
	) );

	$reforestamos_hacemos_contenido_comunidades->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Link en el botón "Saber Más" de la iniciativa (Modal - Pop Up)', 'cmb2' ),
		'id'   => 'link_comunidad',
		'type' => 'text',
	) );


}

/**Iniciativa (Compromisos del sector privado) */
add_action( 'cmb2_admin_init', 'reforestamos_hacemos_privado' );
function reforestamos_hacemos_privado() {
    $prefix = 'reforestamos_group_';

	$reforestamos_hacemos_contenido_privado = new_cmb2_box( array(
		'id'           => $prefix . 'que_hacemos_privado',
		'title'        => esc_html__( 'Compromisos del sector privado', 'cmb2' ),
		'object_types' => array( 'page' ),
        'context'      => 'normal',
        'priority'     => 'high', 
        'show_names'   => 'true',
        'show_on'      => array(
            'key'      => 'page-template',
            'value'    => 'page-que-hacemos.php' 
        )
	) );

	$reforestamos_hacemos_contenido_privado->add_field( array(
		'name' => esc_html__( 'Titulo principal de la sección', 'cmb2' ),
		'id'   => 'titulo_principal_privado',
		'type' => 'text',
	) );

	$group_field_id = $reforestamos_hacemos_contenido_privado->add_field( array(
		'id'          => $prefix . 'que_hacemos_cards_privado',
		'type'        => 'group',
		'description' => esc_html__( 'Compromisos del sector privado (Iniciativas)', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Iniciativa {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Agregar grupo', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => true,
			// 'closed'      => true, // true to have the groups closed by default
			// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );

	$reforestamos_hacemos_contenido_privado->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Nombre de la iniciativa', 'cmb2' ),
		'id'   => 'titulo_privado',
		'type' => 'textarea',
	) );


	$reforestamos_hacemos_contenido_privado->add_group_field( $group_field_id, array(
		'name'    => esc_html__( 'Logo Iniciativa', 'cmb2' ),
		'desc'    => esc_html__( 'Agrega el Logo de la iniciativa', 'cmb2' ),
		'id'      => 'logo_privado',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 18,
		),
	) );


	$reforestamos_hacemos_contenido_privado->add_group_field( $group_field_id, array(
		'name'    => esc_html__( 'Descripción de la iniciativa (Modal - Pop Up)', 'cmb2' ),
		'desc'    => esc_html__( 'Agrega el Logo de la iniciativa', 'cmb2' ),
		'id'      => 'desc_privado_modal',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 18,
		),
	) );

	$reforestamos_hacemos_contenido_privado->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Link en el botón "Saber Más" de la iniciativa (Modal - Pop Up)', 'cmb2' ),
		'id'   => 'link_privado',
		'type' => 'text',
	) );


}

/**Iniciativa (Campañas de empoderamiento ciudadano) */
add_action( 'cmb2_admin_init', 'reforestamos_hacemos_ciudadano' );
function reforestamos_hacemos_ciudadano() {
    $prefix = 'reforestamos_group_';

	$reforestamos_hacemos_contenido_ciudadano = new_cmb2_box( array(
		'id'           => $prefix . 'que_hacemos_ciudadano',
		'title'        => esc_html__( 'Campañas de empoderamiento ciudadano', 'cmb2' ),
		'object_types' => array( 'page' ),
        'context'      => 'normal',
        'priority'     => 'high', 
        'show_names'   => 'true',
        'show_on'      => array(
            'key'      => 'page-template',
            'value'    => 'page-que-hacemos.php' 
        )
	) );

	$reforestamos_hacemos_contenido_ciudadano->add_field( array(
		'name' => esc_html__( 'Titulo principal de la sección', 'cmb2' ),
		'id'   => 'titulo_principal_ciudadano',
		'type' => 'text',
	) );

	$group_field_id = $reforestamos_hacemos_contenido_ciudadano->add_field( array(
		'id'          => $prefix . 'que_hacemos_cards_ciudadano',
		'type'        => 'group',
		'description' => esc_html__( 'Campañas de empoderamiento ciudadano (campañas)', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Campaña {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Agregar grupo', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => true,
			// 'closed'      => true, // true to have the groups closed by default
			// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );

	$reforestamos_hacemos_contenido_ciudadano->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Nombre de la iniciativa', 'cmb2' ),
		'id'   => 'titulo_ciudadano',
		'type' => 'textarea',
	) );


	$reforestamos_hacemos_contenido_ciudadano->add_group_field( $group_field_id, array(
		'name'    => esc_html__( 'Logo Iniciativa', 'cmb2' ),
		'desc'    => esc_html__( 'Agrega el Logo de la iniciativa', 'cmb2' ),
		'id'      => 'logo_ciudadano',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 18,
		),
	) );

	$reforestamos_hacemos_contenido_ciudadano->add_group_field( $group_field_id, array(
		'name'    => esc_html__( 'Descripción de la iniciativa (Modal - Pop Up)', 'cmb2' ),
		'desc'    => esc_html__( 'Agrega el Logo de la iniciativa', 'cmb2' ),
		'id'      => 'desc_ciudadano_modal',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 18,
		),
	) );

	$reforestamos_hacemos_contenido_ciudadano->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Link en el botón "Saber Más" de la iniciativa (Modal - Pop Up)', 'cmb2' ),
		'id'   => 'link_ciudadano',
		'type' => 'text',
	) );


}

/** Pop up (Ventana Modal) */


 /**
 * Eventos
 */



 /**
* Empresas
*/
/** Sección Principal */
/** Aliados tipo A */
add_action( 'cmb2_admin_init', 'reforestamos_empresas' );
function reforestamos_empresas() {
    $prefix = 'reforestamos_group_';

	$reforestamos_seccion_logos = new_cmb2_box( array(
		'id'           => $prefix . 'logos_empresas',
		'title'        => esc_html__( 'Logos Empresas A', 'cmb2' ),
		'object_types' => array( 'page' ),
        'context'      => 'normal',
        'priority'     => 'high', 
        'show_names'   => 'true',
        'show_on'      => array(
            'key'      => 'page-template',
            'value'    => 'page-empresas.php' 
        )
	) );

    $reforestamos_seccion_logos->add_field( array(
		'name' => esc_html__( 'Titulo Sección', 'cmb2' ),
		'desc' => esc_html__( 'Agrega el titulo si tiene', 'cmb2' ),
		'id'   => $prefix . 'titulo_principal',
		'type' => 'text',
	) );

	$group_field_id = $reforestamos_seccion_logos->add_field( array(
		'id'          => $prefix . 'logos',
		'type'        => 'group',
		'description' => esc_html__( 'Agrega Logos de la empresa "Tipo A"', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Empresa {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Agregar grupo', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => true,
			// 'closed'      => true, // true to have the groups closed by default
			'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );

    $reforestamos_seccion_logos->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Logo Empresas A / ORG / Gobierno', 'cmb2' ),
		'id'   => 'imagen_logo',
		'type' => 'file',
	) );

	$reforestamos_seccion_logos->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Link logo', 'cmb2' ),
		'id'   => 'link_logo',
		'type' => 'text_url',
	) );

}

/** Aliados tipo B carousel */
add_action( 'cmb2_admin_init', 'reforestamos_aliados_carousel' );
function reforestamos_aliados_carousel() {
    $prefix = 'reforestamos_group_';

	$reforestamos_logos_carousel = new_cmb2_box( array(
		'id'           => $prefix . 'logos_aliados_carousel',
		'title'        => esc_html__( 'Empresas "Tipo B"', 'cmb2' ),
		'object_types' => array( 'page' ),
        'context'      => 'normal',
        'priority'     => 'high', 
        'show_names'   => 'true',
        'show_on'      => array(
            'key'      => 'page-template',
            'value'    => 'page-empresas.php' 
        )
	) );

    $reforestamos_logos_carousel->add_field( array(
		'name' => esc_html__( 'Titulo Sección', 'cmb2' ),
		'desc' => esc_html__( 'Agrega el titulo si tiene', 'cmb2' ),
		'id'   => 'titulo_principal',
		'type' => 'text',
	) );

	$group_field_id = $reforestamos_logos_carousel->add_field( array(
		'id'          => $prefix . 'seccion_empresas_b',
		'type'        => 'group',
		'description' => esc_html__( 'Agrega el logo de la empresa "Tipo B"', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Logo {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Agregar grupo', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => true,
			// 'closed'      => true, // true to have the groups closed by default
			'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );

	$reforestamos_logos_carousel->add_group_field( $group_field_id, array(
		'name'         => esc_html__( 'Logo empresa "Tipo B" ', 'cmb2' ),
		'id'   		   => 'logo_empresa_b',
		'type'         => 'wysiwyg',
		'options'      => array(
			'textarea_rows'   => 15,
		),
	) );

}

 /**
* Organizaciones de la sociedad civil --- Gobierno 
*/
/* Logo Organizaciones de la sociedad civil - Gobierno */
add_action( 'cmb2_admin_init', 'reforestamos_aliados_logos' );
function reforestamos_aliados_logos() {
    $prefix = 'reforestamos_group_';

	$reforestamos_logos_aliados = new_cmb2_box( array(
		'id'           => $prefix . 'logos_aliados_',
		'title'        => esc_html__( 'Logos aliados ', 'cmb2' ),
		'object_types' => array( 'page' ),
        'context'      => 'normal',
        'priority'     => 'high', 
        'show_names'   => 'true',
        'show_on'      => array(
            'key'      => 'page-template',
            'value'    => 'page-aliados.php' 
        )
	) );

	$reforestamos_logos_aliados->add_field( array(
		'name' => esc_html__( 'Titulo Sección', 'cmb2' ),
		'desc' => esc_html__( 'Agrega el titulo si tiene', 'cmb2' ),
		'id'   => 'titulo_principal',
		'type' => 'text',
	) );

	$group_field_id = $reforestamos_logos_aliados->add_field( array(
		'id'          => $prefix . 'seccion_aliados',
		'type'        => 'group',
		'description' => esc_html__( 'Agrega el logo del aliado (Organización de la sociedad civil -- Gobierno)', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Logo {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Agregar grupo', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => true,
			// 'closed'      => true, // true to have the groups closed by default
			'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );

	$reforestamos_logos_aliados->add_group_field( $group_field_id, array(
		'name'         => esc_html__( 'Ingresa el icono de la sección ', 'cmb2' ),
		'id'   		   => 'imagen_logo',
		'type'         => 'wysiwyg',
		'options'      => array(
			'textarea_rows'   => 15,
		),
	) );

}


/**
 * Documentos 
 */
/** Documentos Template Inicio */
add_action( 'cmb2_admin_init', 'reforestamos_documentos' );
function reforestamos_documentos() {
    $prefix = 'reforestamos_group_';

	$reforestamos_documentos_principal = new_cmb2_box( array(
		'id'           => $prefix . 'documentos',
		'title'        => esc_html__( 'Sección Documentos ', 'cmb2' ),
		'object_types' => array( 'page' ),
        'context'      => 'normal',
        'priority'     => 'high', 
        'show_names'   => 'true',
        'show_on'      => array(
            'key'      => 'page-template',
            'value'    => 'page-documentos.php' 
        )
	) );

	$group_field_id = $reforestamos_documentos_principal->add_field( array(
		'id'          => $prefix . 'documento',
		'type'        => 'group',
		'description' => esc_html__( 'Agrega sección documento', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Sección dodumento {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Agregar grupo', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => true,
			// 'closed'      => true, // true to have the groups closed by default
			// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );

	$reforestamos_documentos_principal->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Ingresa el icono de la sección ', 'cmb2' ),
		'id'   => 'imagen_logo',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 20,
		),
	) );


	$reforestamos_documentos_principal->add_group_field( $group_field_id, array(
		'name'    => esc_html__( 'Titulo Documento', 'cmb2' ),
		'desc'    => esc_html__( 'Agrega el titulo del documento ', 'cmb2' ),
		'id'      => 'link_logo',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 20,
		),
	) );


}


/**
 * Documentos (Informes Anuales - Documentos de interés - Infográfias - Recursos)
 */
add_action( 'cmb2_admin_init', 'reforestamos_documentos_btn_titulo' );
function reforestamos_documentos_btn_titulo() {
    $prefix = 'reforestamos_group_';

	$reforestamos_documentos_principal = new_cmb2_box( array(
		'id'           => $prefix . 'documentos_btn',
		'title'        => esc_html__( 'Información Documentos', 'cmb2' ),
		'object_types' => array( 'page' ),
        'context'      => 'normal',
        'priority'     => 'high', 
        'show_names'   => 'true',
        'show_on'      => array(
            'key'      => 'page-template',
            'value'    => 'page-informes-anuales.php', 
        )
	) );

	$group_field_id = $reforestamos_documentos_principal->add_field( array(
		'id'          => $prefix . 'documento_btn_',
		'type'        => 'group',
		'description' => esc_html__( 'Titulo Documentos', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Información Documento {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Agregar grupo', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => true,
			'closed'      => true, // true to have the groups closed by default
 			'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );

	$reforestamos_documentos_principal->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Titulo sección', 'cmb2' ),
		'id'   => 'anio_titulo_documento',
		'type' => 'text',
	) );

	$reforestamos_documentos_principal->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Documento', 'cmb2' ),
		'id'   => 'link_documento',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 100,
		),
	) );
}

/** Nuestras Notas */
/** Siderbar content */
add_action( 'cmb2_admin_init', 'reforestamos_nuestras_notas_sidebar' );
function reforestamos_nuestras_notas_sidebar() {
    $prefix = 'reforestamos_group_';

	$reforestamos_siderbar_rrss = new_cmb2_box( array(
		'id'           => $prefix . 'nuestras_notas',
		'title'        => esc_html__( 'Sidebar nuestras notas', 'cmb2' ),
		'object_types' => array( 'page' ),
        'context'      => 'normal',
        'priority'     => 'high', 
        'show_names'   => 'true',
        'show_on'      => array(
            'key'      => 'page-template',
            'value'    => 'sidebar.php', 
        )
	));

	/* Sidebar*/
	$group_field_id = $reforestamos_siderbar_rrss->add_field( array(
		'id'          => $prefix . 'sibedar_rrss',
		'type'        => 'group',
		'description' => esc_html__( 'Redes Sociales', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Red Social {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Agregar grupo', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => true,
			'closed'      => true, // true to have the groups closed by default
 			'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	));

	$reforestamos_siderbar_rrss->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Titulo Red Social', 'cmb2' ),
		'id'   => 'titulo_rs',
		'type' => 'text',
	));

	$reforestamos_siderbar_rrss->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Link feed', 'cmb2' ),
		'id'   => 'link_feed',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 30,
		),
	));
}


/* Contacto */
/** Pagina Contacto*/
add_action( 'cmb2_admin_init', 'reforestamos_contacto' );
function reforestamos_contacto() {
    $prefix = 'reforestamos_group_';

	$reforestamos_contacto = new_cmb2_box( array(
		'id'           => $prefix . 'contacto_',
		'title'        => esc_html__( 'Sección de Contacto', 'cmb2' ),
		'object_types' => array( 'page' ),
        'context'      => 'normal',
        'priority'     => 'high', 
        'show_names'   => 'true',
        'show_on'      => array(
            'key'      => 'page-template',
            'value'    => 'page-contacto.php', 
        )
	));

	/** Imagen Formulario */
	$reforestamos_contacto->add_field( array(
		'name' => esc_html__( 'Term Image', 'cmb2' ),
		'desc' => esc_html__( 'Imagen Formulario', 'cmb2' ),
		'id'   => 'imagen_formulario',
		'type' => 'file',
	));

	/* Formulario de Contacto */
	$reforestamos_contacto->add_field( array(
		'name'    => esc_html__( 'Campo Formulario', 'cmb2' ),
		'desc'    => esc_html__( 'Ingresa el ShortCode del Formulario, está ubicado en menú lateral con el nombre de "Contacto" ', 'cmb2' ),
		'id'      => 'campo_formulario',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 30,
		),
	));

	/* Ubicaciones Reforestamos (CDMX - Guadalajara) */
	$group_field_id = $reforestamos_contacto->add_field( array(
		'id'          => $prefix . 'seccion_contacto_ubicacion',
		'type'        => 'group',
		'description' => esc_html__( 'Ubicación Oficinas Reforestamos', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Oficina {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Agregar grupo', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => true,
			'closed'      => true, // true to have the groups closed by default
 			'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	));
	$reforestamos_contacto->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Titulo de la Ubicación', 'cmb2' ),
		'id'   => 'titulo_ubicacion',
		'type' => 'text',
	));

	$reforestamos_contacto->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Ubicación Oficina', 'cmb2' ),
		'id'   => 'ubicacion_oficina',
		'type' => 'textarea',
	));

	$reforestamos_contacto->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Teléfono Oficina', 'cmb2' ),
		'desc' => esc_html__('Ingresa el Teléfono de la oficina', 'cmb2'),
		'id'   => 'tel_oficina',
		'type' => 'text',
	));

	$reforestamos_contacto->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Correo Institucional', 'cmb2' ),
		'desc' => esc_html__('Ingresa el Correo Institucinal', 'cmb2'),
		'id'   => 'mail_oficina',
		'type'    => 'text',
	));

	$reforestamos_contacto->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Archivo - Link Ubicación', 'cmb2' ),
		'desc' => esc_html__('Ingresa la imagen de la úbicación de la Oficina', 'cmb2'),
		'id'   => 'imagen_oficina',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 100,
		),
	));
}


/**
 * Incendios Forestales 
 */
/* Sección Video Incendios Forestales */
add_action( 'cmb2_admin_init', 'reforestamos_incendios_menu' );
function reforestamos_incendios_menu() {
    $prefix = 'reforestamos_group_';

	$reforestamos_incendios_color_menu = new_cmb2_box( array(
		'id'           => $prefix . 'incendios_menu_',
		'title'        => esc_html__( 'Color Menú Incendios Forestales ', 'cmb2' ),
		'object_types' => array( 'page' ),
        'context'      => 'normal',
        'priority'     => 'high', 
        'show_names'   => 'true',
        'show_on'      => array(
            'key'      => 'page-template',
            'value'    => 'page-incendios-forestales.php', 
        )
	));

	/**  Color Menú   */
	$reforestamos_incendios_color_menu->add_field(  array(
		'name'             => esc_html__( 'Color del Menú llamados a la acción', 'cmb2' ),
		'id'               => 'back_incendios',
		'type'             => 'radio_inline',
		'options'          => array(
			'bg-danger' => esc_html__( 'Color Rojo', 'cmb2' ),
			'bg-light'   => esc_html__( 'Color Verde', 'cmb2' ),
		),
	) );
}
add_action( 'cmb2_admin_init', 'reforestamos_incendios_forestales_video' );
function reforestamos_incendios_forestales_video() {
    $prefix = 'reforestamos_group_';

	$reforestamos_incendios_inicio = new_cmb2_box( array(
		'id'           => $prefix . 'incendios_inicio',
		'title'        => esc_html__( 'Inicio - Video Incendios Forestales ', 'cmb2' ),
		'object_types' => array( 'page' ),
        'context'      => 'normal',
        'priority'     => 'high', 
        'show_names'   => 'true',
        'show_on'      => array(
            'key'      => 'page-template',
            'value'    => 'page-incendios-forestales.php', 
        )
	));

	/** Titulo Video Incendios Forestales  */
	$reforestamos_incendios_inicio->add_field( array(
		'name'    => esc_html__( 'Titulo Incendios Forestales', 'cmb2' ),
		'desc'    => esc_html__( 'Ingresa el titulo de la sección" ', 'cmb2' ),
		'id'      => 'titulo_video',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 100,
		),
	));
	
	/* Texto Incendios 1 */
	$reforestamos_incendios_inicio->add_field( array(
		'name' => esc_html__( 'Texto 1 video incendios forestales', 'cmb2' ),
		'desc' => esc_html__( 'Ingresa el primer texto del video', 'cmb2' ),
		'id'   => 'texto_1_incendios',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 100,
		),
	));

	/** Texto Incedios 2 */
	$reforestamos_incendios_inicio->add_field( array(
		'name'    => esc_html__( 'Texto 2 video incendios forestales', 'cmb2' ),
		'desc'    => esc_html__( 'Ingresa el segundo texto del video ', 'cmb2' ),
		'id'      => 'texto_2_incendios',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 100,
		),
	));

	/* Video Incendios */
	$reforestamos_incendios_inicio->add_field( array(
		'name' => esc_html__( 'Video incendios forestales', 'cmb2' ),
		'desc' => esc_html__( 'Ingresa el video', 'cmb2' ),
		'id'   => 'video_incendios',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 100,
		),
	));
}

/** Sección Donar Incendios Forestales */
add_action( 'cmb2_admin_init', 'reforestamos_incendios_forestales_donar' );
function reforestamos_incendios_forestales_donar() {
    $prefix = 'reforestamos_group_';

	$reforestamos_incendios_donar = new_cmb2_box( array(
		'id'           => $prefix . 'incendios_donar_',
		'title'        => esc_html__( 'Sección Donar', 'cmb2' ),
		'object_types' => array( 'page' ),
        'context'      => 'normal',
        'priority'     => 'high', 
        'show_names'   => 'true',
        'show_on'      => array(
            'key'      => 'page-template',
            'value'    => 'page-incendios-forestales.php', 
        )
	));

	/** Titulo Donar  */
	$reforestamos_incendios_donar->add_field( array(
		'name'    => esc_html__( 'Titulo sección donar', 'cmb2' ),
		'desc'    => esc_html__( 'Ingresa el titulo de la sección donar', 'cmb2' ),
		'id'      => 'titulo_donar',
		'type'    => 'textarea',
		'options' => array(
			'textarea_rows' => 80,
		),
	));

	/* Intro Donar  */
	$reforestamos_incendios_donar->add_field( array(
		'name' => esc_html__( 'Texto sección donar', 'cmb2' ),
		'desc' => esc_html__( 'Ingresa el texto de la sección donar', 'cmb2' ),
		'id'   => 'texto_donar',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 100,
		),
	));

	/** Logo paypal */
	$reforestamos_incendios_donar->add_field( array(
		'name'    => esc_html__( 'Imagen Paypal', 'cmb2' ),
		'desc'    => esc_html__( 'Ingresa la imagen de Paypal ', 'cmb2' ),
		'id'      => 'imagen_paypal',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 100,
		),
	));

	/** Imangen Donar */
	$reforestamos_incendios_donar->add_field( array(
		'name'    => esc_html__( 'Imagen sección donar', 'cmb2' ),
		'desc'    => esc_html__( 'Ingresa la imagen de Donar ', 'cmb2' ),
		'id'      => 'imagen_donar',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 100,
		),
	));

	/** Titulo Datos Bancarios */
	$reforestamos_incendios_donar->add_field( array(
		'name'    => esc_html__( 'Titulo datos bancarios', 'cmb2' ),
		'desc'    => esc_html__( 'Ingresa el titulo de la sección ', 'cmb2' ),
		'id'      => 'titulo_datos_bancarios',
		'type'    => 'textarea',
		'options' => array(
			'textarea_rows' => 100,
		),
	));

	/** Datos Beneficiario  */
	$reforestamos_incendios_donar->add_field( array(
		'name'    => esc_html__( 'Datos beneficiario', 'cmb2' ),
		'desc'    => esc_html__( 'Ingresa los datos del beneficiario" ', 'cmb2' ),
		'id'      => 'datos_beneficiario',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 100,
		),
	));

	/** Texto de cierre (Footer) */
	$reforestamos_incendios_donar->add_field( array(
		'name'    => esc_html__( 'Texto cierre (Footer)', 'cmb2' ),
		'desc'    => esc_html__( 'Ingresa el texto de cierre" ', 'cmb2' ),
		'id'      => 'texto_cierre',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 100,
		),
	));
}

/** Infografía 1 Incendios Forestales */
add_action( 'cmb2_admin_init', 'reforestamos_incendios_forestales_infografia_1' );
function reforestamos_incendios_forestales_infografia_1() {
    $prefix = 'reforestamos_group_';

	$reforestamos_incendios_infografia_1 = new_cmb2_box( array(
		'id'           => $prefix . 'incendios_infografia_1',
		'title'        => esc_html__( 'Infografía 1 Incendios Forestales', 'cmb2' ),
		'object_types' => array( 'page' ),
        'context'      => 'normal',
        'priority'     => 'high', 
        'show_names'   => 'true',
        'show_on'      => array(
            'key'      => 'page-template',
            'value'    => 'page-incendios-forestales.php', 
        )
	) );

	/** Titulo Infografia */
	$reforestamos_incendios_infografia_1->add_field( array(
		'name' => esc_html__( 'Titulo infografía 1', 'cmb2' ),
		'id'   => 'titulo_infografia_1',
		'type' => 'textarea',
	) );

	$group_field_id = $reforestamos_incendios_infografia_1->add_field( array(
		'id'          => $prefix . 'incendios_infografia_1',
		'type'        => 'group',
		'description' => esc_html__( 'Datos Infografía', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Sección Infográfia {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Agregar grupo', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => true,
			'closed'      => true, // true to have the groups closed by default
 			'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );

	/** Imagen Infografía */
	$reforestamos_incendios_infografia_1->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Imagen Infografía', 'cmb2' ),
		'id'   => 'imagen_infografia',
		'type' => 'file',
	) );

	$reforestamos_incendios_infografia_1->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Texto alternativo imagen', 'cmb2' ),
		'id'   => 'alt_text',
		'type' => 'text',
	) );

	/** Texto infografía */
	$reforestamos_incendios_infografia_1->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Descripción de la infografía', 'cmb2' ),
		'desc' => esc_html__('Ingresa la descripción del icono de la infografía', 'cmb2'),
		'id'   => 'desc_infografia',
		'type' => 'textarea',
	) );

	/** Posición */
	$reforestamos_incendios_infografia_1->add_group_field( $group_field_id, array(
		'name'             => esc_html__( 'Posición campo infgrafía', 'cmb2' ),
		'desc'             => esc_html__( 'Selecciona la posición del campo en la infografía', 'cmb2' ),
		'id'               => 'posicion_campo_infografia',
		'type'             => 'radio_inline',
		'options'          => array(
			'derecha' => esc_html__( 'Derecha', 'cmb2' ),
			'izquierda'   => esc_html__( 'Izquierda', 'cmb2' ),
		),
	) );
}

/** Infografía 2 Incendios Forestales */
add_action( 'cmb2_admin_init', 'reforestamos_incendios_forestales_infografia_2' );
function reforestamos_incendios_forestales_infografia_2() {
    $prefix = 'reforestamos_group_';

	$reforestamos_incendios_infografia_2 = new_cmb2_box( array(
		'id'           => $prefix . 'incendios_infografia_2',
		'title'        => esc_html__( 'Infografía 2 Incendios Forestales', 'cmb2' ),
		'object_types' => array( 'page' ),
        'context'      => 'normal',
        'priority'     => 'high', 
        'show_names'   => 'true',
        'show_on'      => array(
            'key'      => 'page-template',
            'value'    => 'page-incendios-forestales.php', 
        )
	) );

	/** Titulo Infografia */
	$reforestamos_incendios_infografia_2->add_field( array(
		'name' => esc_html__( 'Titulo infografía 2', 'cmb2' ),
		'id'   => 'titulo_infografia_2',
		'type' => 'textarea',
	) );

	$group_field_id = $reforestamos_incendios_infografia_2->add_field( array(
		'id'          => $prefix . 'incendios_infografia_2',
		'type'        => 'group',
		'description' => esc_html__( 'Datos Infografía', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Sección Infográfia {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Agregar grupo', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => true,
			'closed'      => true, // true to have the groups closed by default
 			'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );

	/** Imagen Infografía */
	$reforestamos_incendios_infografia_2->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Imagen Infografía', 'cmb2' ),
		'id'   => 'imagen_infografia',
		'type' => 'file',
	) );

	$reforestamos_incendios_infografia_2->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Texto alternativo imagen', 'cmb2' ),
		'id'   => 'alt_text',
		'type' => 'text',
	) );

	/** Texto infografía */
	$reforestamos_incendios_infografia_2->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Descripción de la infografía', 'cmb2' ),
		'desc' => esc_html__('Ingresa la descripción del icono de la infografía', 'cmb2'),
		'id'   => 'desc_infografia',
		'type' => 'textarea',
	) );

	/** Posición */
	$reforestamos_incendios_infografia_2->add_group_field( $group_field_id, array(
		'name'             => esc_html__( 'Posición campo infgrafía', 'cmb2' ),
		'desc'             => esc_html__( 'Selecciona la posición del campo en la infografía', 'cmb2' ),
		'id'               => 'posicion_campo_infografia',
		'type'             => 'radio_inline',
		'options'          => array(
			'derecha' => esc_html__( 'Derecha', 'cmb2' ),
			'izquierda'   => esc_html__( 'Izquierda', 'cmb2' ),
		),
	) );

	/** Texto Footer  */
	$reforestamos_incendios_infografia_2->add_field( array(
		'name' => esc_html__( 'Texto footer infografía 2', 'cmb2' ),
		'id'   => 'text_footer',
		'type' => 'textarea',
	) );
}

/* Sección Acciones Reforestamos México */
add_action( 'cmb2_admin_init', 'reforestamos_incendios_forestales_acciones' );
function reforestamos_incendios_forestales_acciones() {
    $prefix = 'reforestamos_group_';

	$reforestamos_incendios_acciones = new_cmb2_box( array(
		'id'           => $prefix . 'incendios_acciones',
		'title'        => esc_html__( 'Sección Acciones Reforestamos', 'cmb2' ),
		'object_types' => array( 'page' ),
        'context'      => 'normal',
        'priority'     => 'high', 
        'show_names'   => 'true',
        'show_on'      => array(
            'key'      => 'page-template',
            'value'    => 'page-incendios-forestales.php', 
        )
	));

	/** Titulo Aciones Reforestamos México  */
	$reforestamos_incendios_acciones->add_field( array(
		'name'    => esc_html__( 'Titulo acciones reforestamos méxico', 'cmb2' ),
		'desc'    => esc_html__( 'Ingresa el titulo de las acciones ', 'cmb2' ),
		'id'      => 'titulo_acciones',
		'type'    => 'textarea',
		'options' => array(
			'textarea_rows' => 7,
		),
	));
	
	/* Texto Incendios 1 */
	$reforestamos_incendios_acciones->add_field( array(
		'name' => esc_html__( 'Lista acciones reforestamos méxico', 'cmb2' ),
		'desc' => esc_html__( 'Ingresa las acciones de reforestamos méxico', 'cmb2' ),
		'id'   => 'lista_acciones',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 100,
		),
	));

}

/** Sección que se necesita */
add_action( 'cmb2_admin_init', 'reforestamos_incendios_forestales_necesidades' );
function reforestamos_incendios_forestales_necesidades() {
    $prefix = 'reforestamos_group_';

	$reforestamos_incendios_necesidades = new_cmb2_box( array(
		'id'           => $prefix . 'incendios_necesidades',
		'title'        => esc_html__( 'Sección ¿Qué se necesita?', 'cmb2' ),
		'object_types' => array( 'page' ),
        'context'      => 'normal',
        'priority'     => 'high', 
        'show_names'   => 'true',
        'show_on'      => array(
            'key'      => 'page-template',
            'value'    => 'page-incendios-forestales.php', 
        )
	) );

	/** Titulo Necesidades */
	$reforestamos_incendios_necesidades->add_field( array(
		'name' => esc_html__( 'Titulo ¿Qué se necesita?', 'cmb2' ),
		'id'   => 'titulo_necesidades',
		'type' => 'textarea',
	) );

	$group_field_id = $reforestamos_incendios_necesidades->add_field( array(
		'id'          => $prefix . 'incendios_necesidades',
		'type'        => 'group',
		'description' => esc_html__( 'Datos Infografía', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Card necesidades {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Agregar grupo', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => true,
			'closed'      => true, // true to have the groups closed by default
 			'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );

	/** Imagen card necesidades */
	$reforestamos_incendios_necesidades->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Imagen card', 'cmb2' ),
		'id'   => 'imagen_card',
		'type' => 'file',
	) );

	$reforestamos_incendios_necesidades->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Titulo card (necesidades)', 'cmb2' ),
		'id'   => 'titulo_card',
		'type' => 'textarea',
	) );

	/** Texto card necesidades */
	$reforestamos_incendios_necesidades->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Lista card (necesidades)', 'cmb2' ),
		'desc' => esc_html__('Ingresa la lista de necesidades', 'cmb2'),
		'id'   => 'lista_card',
		'type' => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 100,
		),
	) );

}

/** Sección Incendios a nivel Nacional */
add_action( 'cmb2_admin_init', 'reforestamos_incendios_forestales_informacion' );
function reforestamos_incendios_forestales_informacion() {
    $prefix = 'reforestamos_group_';

	$reforestamos_incendios_informacion = new_cmb2_box( array(
		'id'           => $prefix . 'incendios_informacion',
		'title'        => esc_html__( 'Sección Incendios a nivel Nacional', 'cmb2' ),
		'object_types' => array( 'page' ),
        'context'      => 'normal',
        'priority'     => 'high', 
        'show_names'   => 'true',
        'show_on'      => array(
            'key'      => 'page-template',
            'value'    => 'page-incendios-forestales.php', 
        )
	) );

	/** Backgrond sección  */
	$reforestamos_incendios_informacion->add_field( array(
		'name' => esc_html__( 'Background Sección', 'cmb2' ),
		'id'   => 'background_incendios',
		'type' => 'file',
	) );


	$group_field_id = $reforestamos_incendios_informacion->add_field( array(
		'id'          => $prefix . 'incendios_informacion_diaria',
		'type'        => 'group',
		'description' => esc_html__( 'Sección tarjeta informativa de incendios', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Card tarjeta informativa {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Agregar grupo', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => true,
			'closed'      => true, // true to have the groups closed by default
 			'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );

	/** Titulo tarjeta informativa */
	$reforestamos_incendios_informacion->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Titulo tarjeta informativa', 'cmb2' ),
		'id'   => 'titulo_tarjeta',
		'type' => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 100,
		),
	) );

	/** Contenido tarjeta informativa */
	$reforestamos_incendios_informacion->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Información tarjeta informativa', 'cmb2' ),
		'id'   => 'info_tarjeta',
		'type' => 'textarea',
	) );

	/** Lista monitor tarjeta informativa */
	$reforestamos_incendios_informacion->add_field( array(
		'name' => esc_html__( 'Lista tarjeta informativa', 'cmb2' ),
		'id'   => 'tarjeta_informativa',
		'type' => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 100,
		),
	) );

	/** Mapa incendios forestales nacionales */
	$reforestamos_incendios_informacion->add_field( array(
		'name' => esc_html__( 'Mapa tarjeta informativa', 'cmb2' ),
		'id'   => 'mapa_incendios',
		'type' => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 100,
		),
	) );

}

/** Sección Aliados incendios forestales */
add_action( 'cmb2_admin_init', 'reforestamos_incendios_forestales_aliados' );
function reforestamos_incendios_forestales_aliados() {
    $prefix = 'reforestamos_group_';

	$reforestamos_incendios_aliados = new_cmb2_box( array(
		'id'           => $prefix . 'incendios_aliados',
		'title'        => esc_html__( 'Sección aliados', 'cmb2' ),
		'object_types' => array( 'page' ),
        'context'      => 'normal',
        'priority'     => 'high', 
        'show_names'   => 'true',
        'show_on'      => array(
            'key'      => 'page-template',
            'value'    => 'page-incendios-forestales.php', 
        )
	) );

	/** Titulo aliados */
	$reforestamos_incendios_aliados->add_field( array(
		'name' => esc_html__( 'Titulo aliados', 'cmb2' ),
		'id'   => 'titulo_aliados',
		'type' => 'textarea',
	) );


	$group_field_id = $reforestamos_incendios_aliados->add_field( array(
		'id'          => $prefix . 'incendios_imagenes_aliados',
		'type'        => 'group',
		'description' => esc_html__( 'Imagenes aliados', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Aliado {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Agregar grupo', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => true,
			'closed'      => true, // true to have the groups closed by default
 			'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );

	/** Logo - imagen aliados  */
	$reforestamos_incendios_aliados->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Titulo tarjeta informativa', 'cmb2' ),
		'id'   => 'logo_aliados',
		'type' => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 100,
		),
	) );

	/** Texto contacto footer  */
	$reforestamos_incendios_aliados->add_field( array(
		'name' => esc_html__( 'texto contacto', 'cmb2' ),
		'id'   => 'texto_aliados_footer',
		'type' => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 100,
		),
	) );


}


/**
 * Adopta un Árbol !! 
 */
/** Dashboard principal */
add_action( 'cmb2_admin_init', 'reforestamos_adopta_arbol_principal' );
function reforestamos_adopta_arbol_principal() {
    $prefix = 'reforestamos_group_';

	$reforestamos_adopta_principal = new_cmb2_box( array(
		'id'           => $prefix . 'adopta_principal',
		'title'        => esc_html__( 'Sección principal adopta un árbol', 'cmb2' ),
		'object_types' => array( 'page' ),
        'context'      => 'normal',
        'priority'     => 'high', 
        'show_names'   => 'true',
        'show_on'      => array(
            'key'      => 'page-template',
            'value'    => 'page-adopta-arbol.php', 
        )
	) );

	$reforestamos_adopta_principal->add_field( array(
		'name'    => esc_html__( 'Información principal', 'cmb2' ),
		'id'      => 'info_principal',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 30,
		),
	) );

	$group_field_id = $reforestamos_adopta_principal->add_field( array(
		'id'          => $prefix . 'adopta_info_principal',
		'type'        => 'group',
		'description' => esc_html__( 'Adopta un árbol', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Información {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Agregar grupo', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => true,
			'closed'      => true, // true to have the groups closed by default
 			'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );

	/* Texto  */
	$reforestamos_adopta_principal->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'texto de la sección', 'cmb2' ),
		'id'   => 'info_texto_principal',
		'type' => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 30,
		),
	) );

	/** imgagen */
	$reforestamos_adopta_principal->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Imagen principal', 'cmb2' ),
		'id'   => 'info_imagen_principal',
		'type' => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 30,
		),
	) );


}

/** Dashboard adopta */
add_action( 'cmb2_admin_init', 'reforestamos_adopta_arbol_card' );
function reforestamos_adopta_arbol_card() {
    $prefix = 'reforestamos_group_';

	$reforestamos_adopta_arbol = new_cmb2_box( array(
		'id'           => $prefix . 'adopta_card',
		'title'        => esc_html__( 'Cards adopta un árbol', 'cmb2' ),
		'object_types' => array( 'page' ),
        'context'      => 'normal',
        'priority'     => 'high', 
        'show_names'   => 'true',
        'show_on'      => array(
            'key'      => 'page-template',
            'value'    => 'page-adopta-arbol.php', 
        )
	) );

	$group_field_id = $reforestamos_adopta_arbol->add_field( array(
		'id'          => $prefix . 'adopta_arbol_principal',
		'type'        => 'group',
		'description' => esc_html__( 'Adopta un árbol', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Card adopta {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Agregar grupo', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => true,
			'closed'      => true, // true to have the groups closed by default
 			'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );

	/** Card Header  */
	$reforestamos_adopta_arbol->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'card header adopta', 'cmb2' ),
		'id'   => 'card_header_adopta',
		'type' => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 30,
		),
	) );

	/** Card body */
	$reforestamos_adopta_arbol->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Card body adopta', 'cmb2' ),
		'id'   => 'card_body_adopta',
		'type' => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 30,
		),
	) );

	/** Card footer */
	$reforestamos_adopta_arbol->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Card footer adopta', 'cmb2' ),
		'id'   => 'card_footer_adopta',
		'type' => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 30,
		),
	) );

	/** Card footer */
	$reforestamos_adopta_arbol->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Link card adopta', 'cmb2' ),
		'id'   => 'link_card_adopta',
		'type' => 'text',
	) );

}
