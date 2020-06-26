Para habilitar los menues del tema en el dashboard debemos hacerlo a través de una función en el archivo functions.

Crear el archivo functions.php.

<?php 

    // Menus de navegación, agregar más usando el arreglo
    // Arreglo asociativo cuya primera parte ('menu_principal') es el valor que la computadora entiende, usualmente sin minúsculas, sin espacios y sin caracteres especiales. La segunda parte ('Menu Principal', 'gymfitness' ) es la que puede leer el usuario más facilmente (doble guión bajo es para indicar que el texto se puede traducir). 
    function gymfitness_menus() {
        register_nav_menus(array(
            'menu_principal' => __('Menu Principal', 'gymfitness' )
        ));
    }
    // Agregar el hook para inicializar el menú en un momento específico. El primer parámetro es el hook que queremos usar como tal ('init'), el cual quiere decir que la función va a correr en cuanto WordPress arranque, es decir, en cuanto se visite el sitio web. El segundo ('gymfitness_menus') parámetro es la función a iniciar. Así ya se tiene la opción de menúes habilitada en el dashboard, lo que permite eliminarlos por completo (por defecto) y crearlos desde cero.
    add_action('init', 'gymfitness_menus');
    // En el dashboard, ir al menú Ajustes>Lectura, en la sección "Tu portada muestra", seleccionamos una página estática y en el menú desplegable elegimos la Inicio. guardar cambios.
?>

