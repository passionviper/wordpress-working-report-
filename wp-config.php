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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'hBw^`>rJ6Q-EYR<)eq%NLP^1bKv)lcYxKX/caSZkcU$b @FVQz`4sgjl,e~xQFd,');
define('SECURE_AUTH_KEY',  ')1Y~D@D?ML WG7n-e$$~#zrq[!xmg26J4O-cQTbPFlPj)^{9+Y#ZPtbh,>u:Cfbr');
define('LOGGED_IN_KEY',    ':]IE#u<!*pt%-rqx/4ZtWrNBBbnxI9c.$H;+;y3t}!OOwi^[%HB|ip9&d/8H&mK)');
define('NONCE_KEY',        'O@^5&S;_f]G>FQ&S9^6xx%c<c*+;zj&CwL;.`n#{b,17B5opBR)^-3$6SA(a9JSz');
define('AUTH_SALT',        '-Xc}=4+O%d]m8wky]/dXRG5 !^>hG_V?8vI2WnQ.NhZe>{f:f498Ywmi3]]<rGPL');
define('SECURE_AUTH_SALT', 'HMj=nJB.|^Y3emAOh!-4(xBRboZL0{Z2C^!!q#&^Yv*!dMl[1EWHuEec>SNhUwT4');
define('LOGGED_IN_SALT',   'Z5W(poA-n)2g9eqIY,T&yCO|Hx[kbg{biwK]}_Q!PgK_9ujOt%Xu K@mvN1kwT!3');
define('NONCE_SALT',       '@6}#VQDtL]j[EJftd%$cR$Ms/d#l;;Ez=M3xA&ZCA9rwiiCRMhSU+zsV1NE/BLPy');

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
