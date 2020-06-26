Descargar desde la dirección https://necolas.github.io/normalize.css/. Al seleccionar download carga la página del código, copiarlo y crear una carpeta llamada css en la carpeta raíz del tema, donde crearemos el archivo normalize.css y pegaremos el código copiado.

En el archivo functions.php, agregamos sobre el encolado (enqueue) de la hoja de estilo style.css el encolado de normalize:

	wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');

Normalize es un reset por lo tanto se tiene que cargar antes del style, es una dependencia, por tanto se debe agregar en el arreglo del encolado de style.css.

	array('normalize')

Agregando fuentes de google fonts:

Ir a la página Google Fonts, y buscar sumar Open Sans, Raleway y Staatliches. Hacer click en el menú despleglable de la esquina inferior izquierda, pestaña CUSTUMIZE, y para Raleway agregar bold 700, y black 900. Regresar a la pestaña EMBED y seleccionar todo el contenido de la ruta que empieza por <link href>.

De esta ruta solo vamos a necesitar la url, por tanto eliminamos el resto.

Debajo del encolado de normalize.css agregamos la siguiente línea:

	wp_enqueue_style('googleFont', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:ital,wght@0,700;0,900;1,400&family=Staatliches&display=swap', array(), '1.0.0');

Agregar 'googleFont' en el array del encolado de style.css para indicar que es una dependencia del mismo.