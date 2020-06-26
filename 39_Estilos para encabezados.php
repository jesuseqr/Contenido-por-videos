En el archivo de style.css, agregar el snipet de Paul Irish (https://www.paulirish.com/2012/box-sizing-border-box-ftw/) para evitar que los elementos crezcan al agregarles un padding habiendo definido un ancho.

Luego agregar el primer resultado de la busqueda en google de "gist 1rem = 10px" ("Sanity-ize"). Agregar la linea de font-size de html y el código de body completo.

html {
	box-sizing: border-box;
	font-size: 62.5%; /* 10px = 1rem! */
}

body {
	font-size: 16px;
	font-size: 1.6rem;
	line-height: 2;
	font-family: var(--fuenteSecundaria);
}

*, *:before, *:after {
	 box-sizing: inherit;
}

/** Headings **/

h1,h2, h3, h4 {
	font-family: var(--fuentePrincipal);
	margin: 1rem 0;
	line-height: 1.2;
}

h1 {
	font-size: 6rem;
}

h2 {
	font-size: 4.8rem;
}

h3 {
	font-size: 3.6rem;
}

h4 {
	font-size: 2.4rem;
}