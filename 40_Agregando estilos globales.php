Al final del archivo style.css

/** Globales **/
a {
	text-decoration: none; Elimina el subrayado de los enlaces
}

ul {
	list-style: none; Elimina la viñeta de la lista no ordenada
	margin: 0; Elimina el margen adicional
	padding: 0; Elimina la separación interna
}

Hacer las imagenes responsivas
img {
	max-width: 100%; Hace que la imagen siempre tenga su mayor dimensión
	height: auto; Hace que la imagen crezca se adapte al tamaño del dispositivo
}

Evitar que los elementos se vayan al borde
.contenedor {
	max-width: 1200px; 
	width: 95%;
	margin: 0 auto;
}