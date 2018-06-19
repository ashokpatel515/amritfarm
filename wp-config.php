<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'amrit-farm');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6fOiFgrx?8Gj#-hN4E8Vv%#=AR*|nOm/Kn6UqI]f:/l-5m~1M#&inHkUW(`jlrja');
define('SECURE_AUTH_KEY',  'xvQ0e|*5GXKc%w(9b2_% cAX_*B wckB`+_Enm,V!-]wP{gmWq:@NIb*W{OiCNBn');
define('LOGGED_IN_KEY',    't*$7dln`m*sW4xs4+3D9;;U]~Sehf)C`$&rtz]U;A.SMM%IK)1{PC_&hv YxixOE');
define('NONCE_KEY',        'z?OH!K<s~^rG8SQ;$Dt[a}7ZF %{{)WqIh)p8#zTb|?<h~3#L[8PpG 4f%Psy8AV');
define('AUTH_SALT',        '?D0LS1qeQsJANnMmwjHiz``u`-8l2=9v}hUAzn?T[X`@)q6v]PL*BV?,_=dN#TZe');
define('SECURE_AUTH_SALT', 'hEH.!KMwp!5<7o& ?v[}KgAu9_as*nx `zw4c]hyV8! F?-8/`k3a~d%}uRtv<i>');
define('LOGGED_IN_SALT',   'ImNe~O@Co/q`w_;G%,q{Or&!drDty8->3$a8`.,5v:!34 &|0sJ2R;PK)1cb9dJY');
define('NONCE_SALT',       'jN.?q:Z<`#biSn6fdRg!(_NZDLu9HCD$gyy;NeKe]_>rmCFPio]b+gEXE^aDJ(m2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
