<section class="custom_serach_form">
    <form role="search" method="get" class="search-form px-3" action="<?php echo home_url( '/' ); ?>">
        <label class="buscar">
            <input type="search" class="search-field buscar-input-wp"
                placeholder="<?php echo esc_attr_x( 'Palabra clave', 'placeholder' ) ?>"
                value="<?php echo get_search_query() ?>" name="s"
                title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
        </label>
        <input type="submit" class="search-submit bg-transparent rounded-2 buscar-boton-wp"
            value="<?php echo esc_attr_x( 'Buscar', 'submit button' ) ?>" />
    </form>
</section>