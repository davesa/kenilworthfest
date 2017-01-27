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
define('DB_NAME', 'kenilworthfest');

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
define('AUTH_KEY',         'u4f>6K!%)o>(E<f-$qbT4AaF#1thL;VsP(~},4[T7QWX[dEVC(2U74W9yH|Zkg(Y');
define('SECURE_AUTH_KEY',  'W]yeDyMbgs@^j3Jhc#W^PD SN|^o_%m4TFE?gN;W&{l8[Uscn*$Qe<-f, juO#Ki');
define('LOGGED_IN_KEY',    '&7/=|SI9J}N9QoG/VxC<96;x0$gd+WKCFi>vmEm?(uGL)stU7[ZtM>4{LEBJ!ecH');
define('NONCE_KEY',        'x*50q66i) J;txSO^qO_~u9OQ d>9Y`F)|ci*@B:N|p)nt/kG MuSu} o+Id^h=&');
define('AUTH_SALT',        '^(tCUH*]WP3-Kt/xwAEyrK! .!x/pUK4CMG$oLg05~r:U`8K&4k,bv3o}p&XM=GL');
define('SECURE_AUTH_SALT', '0}CA*mS9_a5Yj^tjB+>Ez)MQV?ag[aM!Z7*4,-`Pd?{8NCN6j(z3HSCIc)$|dD6N');
define('LOGGED_IN_SALT',   '&yQf2p|4K^fY3EnjolIWt^;l/;w0vZ>;o $=&#(N:w$e5K:;[M0fhqD,x4<]rJU@');
define('NONCE_SALT',       ',}e$LZ}~ ?,[QAP|eFg|[G)fP#Z9nDgI0/30Z]YDoeC?$:j@Wup92=~}Mjod(ufM');

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
