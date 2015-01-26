<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
switch ($_SERVER['SERVER_ADDR'])
{
    //Ambiente Local
    case '127.0.0.1':
		/** The name of the database for WordPress */
		define('DB_NAME', 'iccardio');

		/** MySQL database username */
		define('DB_USER', 'root');

		/** MySQL database password */
		define('DB_PASSWORD', 'root');

		/** MySQL hostname */
		define('DB_HOST', 'localhost');

		/** Database Charset to use in creating database tables. */
		define('DB_CHARSET', 'utf8');

		/** The Database Collate type. Don't change this if in doubt. */
		define('DB_COLLATE', '');
		break;

	default:
		/** The name of the database for WordPress */
		define('DB_NAME', 'iccardio');

		/** MySQL database username */
		define('DB_USER', 'iccardio');

		/** MySQL database password */
		define('DB_PASSWORD', 'jwUs77yd2y');

		/** MySQL hostname */
		define('DB_HOST', 'localhost');

		/** Database Charset to use in creating database tables. */
		define('DB_CHARSET', 'utf8');

		/** The Database Collate type. Don't change this if in doubt. */
		define('DB_COLLATE', '');
		break;
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '{ 7)|#JJv+4=Zsu}?d|DxV8[DiS9%|E7 ~ GJ4Y+`iMd0>Vuu-]FT]l[<W(0le2f');
define('SECURE_AUTH_KEY',  'qU$;|Yn+f_mU%+cisq-39dPdkY(w($|`qC[$dZ0;%P=EsepgIk[)3~t|}PKyw[5c');
define('LOGGED_IN_KEY',    'LL<46-6N>[OWQ1+aDzeT+3+,|g0H36u ]_4gXTX)+u?g>.:~;a;XoCIt|u3zD3$m');
define('NONCE_KEY',        '1&8lMm4-^{/wyrR]?_I16gj{?&<)AS;O>JP#XeG_Iq0{Yo53pd%|b8s|F -9o2?5');
define('AUTH_SALT',        '3{V|<m*XB*~oHl!oGM5U[F(nLc;iq5m 2dy)]{Pp^S.,H/Vu}#b~foNtwob^ZC d');
define('SECURE_AUTH_SALT', 'Y%F^=?<.tY@Q?-iS)y}IHJ:?bc8++B_-yMtdYdD:F`^i&8a<GSCLI~Cd(OIO0.0f');
define('LOGGED_IN_SALT',   'D9c.wbu2Iy;UwR}CRm6<[.,I6o*(@;fUSCY835@?+>ed8-a[.CK{)[c*+&O.w]xI');
define('NONCE_SALT',       'S7Ib!C;PP|z]|V1/:$JC=HHpe_UJKeo+oThsyalhYsRM)a?+,MQ1ku!x1?qPLRdD');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
