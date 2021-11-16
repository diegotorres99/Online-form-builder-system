<?php // datos para la conexion a mysql
define('DB_SERVER','mysql-26513-0.cloudclusters.net:26513');
define('DB_NAME','globals_formularios_master');
define('DB_USER','diego');
define('DB_PASS','ASPW-12345');
$conex = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
mysqli_select_db($conex, DB_NAME);