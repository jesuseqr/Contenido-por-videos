1. Crear en el Dashboard de WP una página llamada "Nuestras clases".

2. Le damos editar y le pegamos contenido de Lorem Ipsum en el campo grande del contenido que se muestra en el Dashboard.

3. Habilitar en el menú despleglable "Opciones de pantalla" en la parte superior del Dashboard la opción "Slug", el cual creará un Slug con el nombre de la página para mostrar el template o archivo jerárquico correspondiente a page-$slug.php. Copiar el texto creado en un nuevo campo que aparece debajo del campo del contenido de la página.

4. Crear el archivo "page-$slug.php" en la carpeta raíz del tema. En este caso sustituiremos "$slug" con "nuestras-clases".

5. Agregamos el mismo contenido del template "page.php" y sustituimos "con-sidebar" por "no-sidebar".

6. Eliminamos el sidebar y se guardan los cambios.

7. En la clase del div que tiene "contenido-principal", se agrega la clase "text-center". Guardar el archivo.