<?php
// Script para configurar mi aplicación web
// Establece las variables que indican los directorios de las clases
// Establece las variables para hacer la conexión a la base de datos

// Obtiene la instancia del objeto que guarda los datos de configuración
$config = Config::singleton();

// Carpetas para los Controladores, los Modelos y las Vistas
$config->set('controllersFolder', 'controllers/');
$config->set('modelsFolder', 'models/');
$config->set('viewsFolder', 'views/');

// Parámetros de conexión a la BD
$config->set('dbhost', 'monorail.proxy.rlwy.net:40140');
$config->set('dbname', 'railway');
$config->set('dbuser', 'root');
$config->set('dbpass', 'Hgcb6CBccgghbb41Ee13caCBb1GFeCBa');

    



// hola
//mysql://root:Hgcb6CBccgghbb41Ee13caCBb1GFeCBa@monorail.proxy.rlwy.net:40140/railway
?>

