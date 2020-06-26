Agregar en el archivo functions:

	// Styles y Scripts

	function X3JQ_scripts_styles() {
		// Hoja de estilos principal
		wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0');// ('$handle', '$src', '$deps', '$ver', '$media'); el primero es el nombre del archivo, el segundo es la ubicación, el tercero son las dependencias, se le pasa un arreglo vacío en este caso, el cuarto es la versión, el quinto y último es el media, que indica donde se va a cargar la página, como impresora o pantalla; si se elimina queda el default, el cual significa que cargará en todos los medios.
	}

	add_action('wp_enqueue_scripts', 'X3JQ_scripts_styles');

Agregar la etiqueta WP del encabezado al final del head en el archivo header:

	<?php wp_head() ?>