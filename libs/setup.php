<?php
// Obtiene la instancia del objeto que guarda los datos de configuración
$config = Config::singleton();

// Carpetas para los Controladores, los Modelos y las Vistas
$config->set('controllersFolder', 'controllers/');
$config->set('modelsFolder', 'models/');
$config->set('viewsFolder', 'views/');

// Parámetros de conexión a la BD
// Parámetros de conexión a la BD
//$config->set('dbhost', 'localhost');
//$config->set('dbname', 'test');
//$config->set('dbuser', 'root');
//$config->set('dbpass', '');


$config->set('dbhost', 'monorail.proxy.rlwy.net:33942');
$config->set('dbname', 'railway');
$config->set('dbuser', 'root');
$config->set('dbpass', 'BF5AbFfb-5hEdGd1g4hgcGH31fE25Bd5');

//mysql://root:MReAICGr5qPiqK6JHE9C@containers-us-west-179.railway.app:5845/railway
//mysql://root:BF5AbFfb-5hEdGd1g4hgcGH31fE25Bd5@monorail.proxy.rlwy.net:33942/railway
?>