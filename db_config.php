<?php

/*
 * All database connection variables
 */
define('DB_SERVER', getenv('OPENSHIFT_MYSQL_DB_HOST'));
define('DB_PORT',getenv('OPENSHIFT_MYSQL_DB_PORT')); 
define('DB_USER',getenv('OPENSHIFT_MYSQL_DB_USERNAME'));
define('DB_PASSWORD',getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
define('DB_NAME',getenv('OPENSHIFT_GEAR_NAME'));
define('DB_DATABASE', "bd_face"); // database name

//define('DB_USER', "adminWXD58tN"); // db user
//define('DB_PASSWORD', "NUmVuQ4VuBB5"); // db password (mention your db password here)

//define('DB_SERVER', "127.7.194.130"); // db server
?>
