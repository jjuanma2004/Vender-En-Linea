<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'sweet_world_db');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'dimofra9');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '*damf12345*');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'FUi{J}|6@jMB*bw{g$drKZ;e$nf8|O@9&p!W1>D&nn8wa>?}ybAtSd]iF4G)Lhg|');
define('SECURE_AUTH_KEY', '<8Dqptymj4vb!Vd_?pe>P+j+UejQG]EjD,5H?o;Hu[lQ4Q-Z<#ZJBeP}hobGHqr-');
define('LOGGED_IN_KEY', 'MiX.5UMxeByMAyUNg.{GgojAh$1g3eBG5kGhG.|ERlsRH7bu`/WD98q,Yt`|/_j7');
define('NONCE_KEY', '[2<5O3D$|LIPS3roQMqn2t(Oj m4Q1p#wGZhj!?~l+^*Y6tm`fc&Du=k7Nwp1XcL');
define('AUTH_SALT', '4{xv:.J~{*Y:_J~#IN`,uu3M>2M85xankgay33l :7^oT-*-)Y..xfL,p;z#+#A<');
define('SECURE_AUTH_SALT', 'mESg=G>q#ZVBmXvnN-vG)4Grg3k4I:n6E~7lu#uFUMO?$&SSA8T&?G7K:CZ<57&w');
define('LOGGED_IN_SALT', '.dfc:2~sCG]iOSu3=>6&-Y`I;d]XN$P{ue|CpiC=6N_jk|S5=Z$vh$xq7wO-M<f@');
define('NONCE_SALT', 'g4ieqv2WIWLmtwAtt`Z=Zss0^w[vAk6j?#_}iV=+%yOW;$w_G5(49S-HLiGSqEJ5');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

