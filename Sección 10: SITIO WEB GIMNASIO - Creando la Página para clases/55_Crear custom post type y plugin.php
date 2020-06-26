Post types: WP almacena diferentes tipos de contenidos y los agrupa en algo llamado post types.

Cada entrada de blog es un post, y su post y su post type se conoce como posts.

Actualmente en WP existen 7 Post Types integrados.

Se pueden hacer Custom Post Types.

Post types nativos:

- Post.
- Pages.
- Attachments (fotos y videos).
- Menús de navegción.
- Revisiones (los cambios que se hacen y guardan a una entrada).
- CSS.
- Changesets (similar a una revisión pero para el customizer).

1. En la carpeta plugnins, ubicada en la carpeta raíz del tema, crear la carpeta del archivo con el nombre "gymfitness_post_types". Crear dentro un archivo php con el mismo nombre de la carpeta.

2. Colocar la descripción del plugin como se indica a continuación y guardar:

	<?php
		/*
			Plugin Name: Gym Fitness Post Types
			Plugin URI:
			Description: Añade Post Types al sitio Gym Fitness
			Version: 1.0.0
			Author: X3JQ
			Author URI:
			Text Domain: gymfitness

		*/