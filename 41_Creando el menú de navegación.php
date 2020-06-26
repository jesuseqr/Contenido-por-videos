/*Al diseñar el sitio se comienza por mobile first :)*/
/** Header **/
.site-header {
	background-color: var(--blanco);
	padding: 2rem 0;
}

.logo {
	text-align: center;
	/*<Flexbox>*/
	display: flex;
	justify-content: center;
	/*</Flexbox>*/
	
}

/** Menú principal **/

.menu-principal {
    /*No se mostrará el menú en mobile*/
    display: none;
}

@media (min-width: 768px) {
    .menu-principal {
        display: flex;
    }
}