1. Agregar debajo de .lista-clases:

@media (min-width: 768px) {
	.lista-clases {
		display: flex; // coloca todos los post uno junto al otro
		flex-wrap: wrap; // elimina el scroll hacia los lados y distribuye de dos en dos los post debido a sus dimensiones
		justify-content: space-between; // separa los post al distribuir el espacio sobrante hacia el medio de los post
	}
}

2. Agregar debajo de .card:

@media (min-width: 768px) {
	.card {
		flex: 0 0 calc(50% - 2rem); // 50% indica que va a tomar la mitad del espacio y - 2rem deja un espacio de separación
		position: relative; // da acceso a sus hijos de utilizar la opción position absolute (.card.contenido)
	}
}

3. Eliminar la clase "contenido principal" en el archivo "page-nuestras-clases.php" del div anidado en el main para que tome todo el espacio del ancho, quedando:
	<main class="contenedor pagina seccion no-sidebar">
		<div class="text-center">

4. Agregar debajo de .card.contenido:

@media (min-width: 768px) {
	.card.contenido {
		position: absolute;
		bottom: 0;
		left: 0;
		text-align: left;
	}
}

5. Agregar debajo de .card.contenido h3:

@media (min-width: 768px) {
	.card.contenido h3 {
		color: var(--blanco);
	}
}

6. Guardar los cambios.