<?php

//En caso de requerir iniciar la sesion activa, despues del login.
//session_start();

//Area para definir las rutas de los archivos

//¡¡Importante!!:
//Definir URL BASE 
define('BASE_URL', '/practicantes');
//Definir la URL publica, para usar 
define('URL_PUBLIC', '/practicantes/client/assets');
//Definir la ruta del sistema de archivos, para incluir archivos PHP sin importar dónde esté el index.php
define('ROOT_PATH', __DIR__ . DIRECTORY_SEPARATOR);
