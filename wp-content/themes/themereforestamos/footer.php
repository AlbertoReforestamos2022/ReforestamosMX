
    <!-- footer -->
    <hr class="featurette-divider espacio-footer text-black-50 text-light">
    <footer class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 mb-3 d-flex justify-content-md-center">
                <div class="">
                    <?php
                        $args = array(
                            'menu_class' => 'nav flex-column',
                            'theme_location' => 'menu-footer-sitios-interes'
                        );

                        echo '<h4 class="text-primary mb-3">Sitios de interés</h4>';
                        wp_nav_menu($args);
                    ?>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-5 mb-3 d-flex justify-content-md-center"> 
                <div class="">
                    <?php 
                        $args = array(
                            'menu_class' => 'nav flex-column text-decoration-none p-2 mapa-footer',
                            'theme_location' => 'menu-mapa-footer'
                        );

                        echo '<h4 class="text-primary mb-3 mt-4 mt-md-1">Mapa</h4>';
                        wp_nav_menu($args); 
                    ?>
                </div>
            </div>

            <div class="col-12 mb-3 col-lg-2">
                <?php 
                    $args = array(
                        'menu_class'      => 'flex-grow-1 mx-auto list-unstyled',
                        'theme_location'  => 'menu-contacto-footer',
                        'container_id'    => 'contacto-footer',
                        'container_class' => 'd-flex justify-content-center flex-sm-row text-center text-success',
                        'li_class'    => 'holas321',   
                    );
                    
                    echo '<h4 class="text-primary text-center mb-3 mt-4 mt-md-1">Contáctanos:</h4>';
                    wp_nav_menu($args);
                ?>
            </div>
        </div>

        <div class="d-flex align-items-center flex-column py-4 my-4 border-top border-1 border-black-50">
            <?php 
                $args = array(
                    'menu_class'      => 'flex-grow-1 mx-auto list-unstyled',
                    'theme_location'  => 'aviso-privacidad',
                    'container_id'    => 'aviso-privacidad',
                    'container_class' => 'd-flex justify-content-center flex-sm-row text-center text-success',
                    'li_class'    => 'holas321',   
                );
                wp_nav_menu($args);
            ?>
            <p class="text-light">&copy; Reforestamos México A.C.</p>
            <p class="text-light"> <?php echo date('Y'); ?> </p>
        </div>
    </footer>
    <!-- /.footer-->

    <?php wp_footer(); ?>

    <script>
        AOS.init();
    </script>
    <script>
    $(".wrapper-list").owlCarousel({
        margin: 10,
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsive: {
        0: {
            items: 1,
            nav: false
        }, 
        600: {
            items: 3,
            nav: false
        },
        1000: {
            items: 5,
            nav:false
        }
        }
    })
    </script>


</body>
</html>