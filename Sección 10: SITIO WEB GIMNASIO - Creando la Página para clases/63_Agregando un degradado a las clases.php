1. Para generar el degradado con código en CSS podemos ir a la página
	https://www.colorzilla.com/gradient-editor/

2. Elegir la opción vertical en el campo orientación.

3. Invertir los límites superiores en el cuadro de muestra debajo de la paleta de colores. Copiar el código generado a la derecha.

4. Agregar a la etiqueta li del archivo "queries.php" la clase "gradient".

5. En el archivo "style.css", debajo del comentario título "Cards", agregar el media query (con el contenido copiado de la página indicada arriba):

	@media (min-width: 768px) {
		.gradient::after {
			content: '';
			display: block;
			position: absolute;
			left: 0;
			right: 0;
			bottom: 0;
			top: 0;
			/* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#000000+0,000000+100&0+53,0.65+77,0.65+100 */
			background: -moz-linear-gradient(top,  rgba(0,0,0,0) 0%, rgba(0,0,0,0) 53%, rgba(0,0,0,0.65) 77%, rgba(0,0,0,0.65) 100%); /* FF3.6-15 */
			background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0) 53%,rgba(0,0,0,0.65) 77%,rgba(0,0,0,0.65) 100%); /* Chrome10-25,Safari5.1-6 */
			background: linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0) 53%,rgba(0,0,0,0.65) 77%,rgba(0,0,0,0.65) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#a6000000',GradientType=0 ); /* IE6-9 */
		}
	}

6. Agregar al final del media query del .card . contenido para que el texto se ubique por encima del degradado:
	z-index: 2;

7. Guardar los cambios.