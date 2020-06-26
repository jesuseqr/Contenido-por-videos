Agregar al archivo style.css

1. Modificar el estilo de los enlaces del menú:
.menu-principal a {
    font-family: var(--fuentePrincipal);
    color: var(--blanco);
    font-size: 2.2rem;
    padding: .5rem 2rem;
    display: block;

2. Ordenar el contenido de la barra de navegación de forma horizontal. Agregar después del .site-header.

@media (min-width: 768px) { /*Aplicará a partir del ancho mínimo indicado*/
    .barra-navegacion {
		display: flex; /*Distribuye horizontalmente su primer nivel de hijos*/
		justify-content: space-between; /*El primer item al inicio, el último al final*/
	}		
}

3. Ordenar el contenido del menú de forma horizontal. Debajo de .menu-principal.

@media (min-width: 768px) {/*Aplicará a partir del ancho mínimo indicado*/
    .menu-principal {
        display: flex; /*Distribuye horizontalmente su primer nivel de hijos*/
        align-items: center; /*Alínea al centro de su contenido*/
        justify-content: flex-end; /*Justifica el contenido hacia el lado derecho*/
    }

4. WordPress crea un contenedor para el menu llamado "menu", el cual se modifica con el selector .menu-principal .menu. Agregar al final del media query del .menu-principal.

.menu-principal .menu { /*Aplica al contenido de la clase "menu"*/
        display: flex; /*Distribuye horizontalmente su primer nivel de hijos*/
        justify-content: space-around; /*Distribuye equitativamente los elementos*/
    }

5. Aumentar el tamaño de los enlaces del menú en versión de escritorio. Agregar después de .menu-principal a.

@media (min-width: 768px) {
    .menu-principal a {
        font-size: 2.6rem; /*Aumenta el tamaño de los enlaces del menú a partir de 768px*/
    }

6. Agregar margen derecho a los enlaces del menú. Debajo del media query .menu-principal .menu.
.menu-principal li {
	margin-right: 2rem; /*Aplica un margen a la derecha*/
}

7. Eliminar el margen derecho del último item de la lista. Seguido.
.menu-principal li:last-of-type{ /*last-of-type es un seudo selector*/
    margin-right: 0;
}

8. Agregar línea de color debajo del enlace de la página actual usando el contenedor o clase current_page_item. Al final del archivo.
.menu-principal .current_page_item { /*Selector del item de la página actual*/
    border-bottom: 3px solid var(--colorPrimario);
}

9. Agregar padding a los enlaces del menú. Al final de .menu-principal a.
padding: .5rem 2rem;
