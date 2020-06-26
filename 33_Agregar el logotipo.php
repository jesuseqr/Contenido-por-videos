Agregar el logotipo directamente por código.

    Entre las etiquetas de header, se debe agregar las siguientes líneas:

    <div class="contenedor">
        <div class="barra-navegacion">
                <div class="logo">
                    <img src="<?php echo get_template_directory_URI(); ?>/img/logo.svg" alt="logo sitio">
                </div>
                <nav class="menu-principal">
                    <?php
                        $args = array(
                            'theme_location' => 'menu-principal',
                            'container' => 'nav',
                            'container_class' => 'menu-principal'
                        );
                    wp_nav_menu($args);
                    ?>
                </nav>
        </div>
    </div>
