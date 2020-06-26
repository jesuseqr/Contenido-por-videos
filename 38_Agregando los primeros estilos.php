En el archivo style.css, vamos a usar "custom properties", la cuales son nativas de css. Se definen con el selector :root{}, que contiene variables, las cuales, al cambiar en este archivo, cambian en el lugar donde se hayan usado. Las variables se definen con doble guión (--). De la página de Google Fonts se puede obtener la descripción de las fuentes en la parte inferior del menú despleglable de la derecha.

Agregar el siguiente código al final del archivo

:root{
	/** Fuentes **/
	--fuentePrincipal : 'Staatliches', cursive;
	--fuenteTexto : 'Open Sans', sans-serif;
	--fuenteSecundaria : 'Raleway', sans-serif;

	/** Colores **/
	--colorPrimario : #FF5B00;
	--grisOscuro : #2F2E2E;
	--grisClaro : #EBEBEB;
	--blanco: #ffffff;
	--negro: #000000;

}

h1 {
	font-family: var(--fuentePrincipal);
}