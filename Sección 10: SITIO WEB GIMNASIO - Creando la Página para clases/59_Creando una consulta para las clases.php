1. Crear la carpeta "inc" de include, son archivos que se pueden incluir en otros. Dentro crear el archivo "queries.php".

2. Agregar en el archivo "functions.php", al principio debajo de la etiqueta de php:

/** Consultas reutilizables  **/

require get_template_directory() . '/inc/queries.php';

3. En el archivo "queries.php" colocar los siguiente:

<?php

function gymfitness_lista_clases(){
	echo "funciona";
}

// este cierre no va?>

4. En el archivo page-nuestras-clases.php, debajo de get_template_part('template-parts/paginas'), llamar la función agregando la línea:

<?php gymfitness_lista_clases(); ?>

5. De nuevo en "queries.php", eliminar el contenido de las llaves y agregar html en ellas como sigue, para hacer un consulta a la base de datos de WP para traer los resultados que tenemos en nuestro custom post types, por medio de un query post, get post o WP query (consultar en codex):

?>
	<ul class="lista-clases">
		<?php
			$args = array(//se crea un arreglo para almacenar los posts
				'post_type' => 'gymfitness_clases', // 1. Que post type queremos consultar
				'posts_per_page' => 10, // 2. Cantidad de posts por página
				'orderby' => 'title',
				'order' => 'ASC'
			);
			$clases = new WP_Query($args); // WP Query es la clase que WP da para consultar la base de datos
			while ( $clases->have_posts() ): $clases->the_post();// Muestra los posts que hayan si los hay (itera sobre los resultados)
		?>
			<li>
				<h1><?php the_title(); ?></h1> <!-- Trae el título de los posts solicitados en el query -->
			</li>

	<?php endwhile; wp_reset_postdata();//Indica a WP que se terminó de usar el WP Query ?>
	</ul>
<?php