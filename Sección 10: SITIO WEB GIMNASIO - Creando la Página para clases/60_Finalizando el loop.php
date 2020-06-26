1. En el archivo "queries.php" agregar a la etiqueta li la clase class="clase card".

2. Sustituir el contenido de la etiqueta li por:

<?php the_post_thumbnail('mediano'); ?> <!-- Agrega la imagen de fondo del post -->

<div class="contenido">
	<a href="<?php the_permalink(); ?>">
		<h3><?php the_title(); ?></h3>
	</a>
	<?php
		$hora_inicio = get_field('hora_inicio');
		$hora_fin = get_field('hora_fin');
	?>
	<p><?php the_field('dias_clase'); ?> - <?php echo $hora_inicio . " a " . $hora_fin; ?></p>
</div>