Una vez definir el menú, habilitarlo y crearlo, se debe indicar en que parte se va a mostrar. Para ello debemos incluirlo en el archivo header entre las etiquetas <nav> con el siguiente arreglo o matríz.

	<?php
		$args = array(
			'theme_location' => 'menu-principal', //'theme_location' es como WP ubica el menú en la base de datos. 'menu-principal' es el menú a mostrar.
			'container' => 'nav', //'container' indica que el menú estará anidado en una etiqueta html. 'nav' es la etiqueta en sí.
			'container_class' => 'menu-principal' // 'container_class' indica que la etiqueta hecha antes tendrá una clase. 'menu-principal' es la clase en sí.
		);
		wp_nav_menu($args);
	?>

Loop para mostrar el menú creado en el dashboard:

	<?php
		if (has_nav_menu('header-menu')){
			wp_nav_menu( array( 'theme_location' => 'header-menu' ) );
		}
	?>