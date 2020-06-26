1. Copiar el código del recurso gist en la URL:

https://gist.github.com/juanpablogdl/2ff8f4a6f0ed075fb284767a520f99f9

Pegarlo en la parte final del archivo php creado anteriormente.

El plugin lo creamos con la función gymfitness_clases_post_type() y hace hook al "init" por medio del add_action al final del código.

El arreglo labels es para realizar las traducciones que realizará el dashboard al momento de mostrar el plugin.

El arreglo argumentos ($args) contiene los campos que se mostrarán en el dashboard.

Con el nombre que se registra el post type, que se encuentra dentro del parentesis de register_post_type(), se pueden realizar queries personalizados y decirle, por ejemplo que queremos mostrar todas las clases.

Se guardan los cambios.

2. Activar el plugin. Esto activa una nueva opción en el menú del dashboard con el nombre asignado. Al hacer click en esta nueva opción, abrirá una ventana con la interfaz nativa para crear un post.

Para crear otro post type solo copiar el código del gist y pegar debajo del código anterior, y modificar para que no sea igual al anterior y no generar un conflicto y personalizar según sea necesario.

3. Para evitar que el código del plugin sea visualizado directamente del navegador por medio de la URL, agregar debajo de la descripción comentada del plugin la línea de código:

	if(!defined('ABSPATH')) die();