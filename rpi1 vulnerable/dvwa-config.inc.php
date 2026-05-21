<?php

# DVWA Configuration File

# Base de datos
$_DVWA[ 'db_server' ]   = 'localhost';
$_DVWA[ 'db_database' ] = 'dvwa';
$_DVWA[ 'db_user' ]     = 'dvwa';
$_DVWA[ 'db_password' ] = 'p@ssw0rd';
$_DVWA[ 'db_port' ] = '3306';

# Seguridad (nivel bajo para pruebas)
$_DVWA[ 'default_security_level' ] = 'low';

# Recaptcha (deshabilitado)
$_DVWA[ 'recaptcha_public_key' ]  = '';
$_DVWA[ 'recaptcha_private_key' ] = '';

# Proxy
$_DVWA[ 'default_phpids_level' ] = 0;

?>