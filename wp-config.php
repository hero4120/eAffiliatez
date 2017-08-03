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
define( 'SAVEQUERIES', true );
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'honghanh');

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
define('AUTH_KEY',         '9E=mD$Q!rb=!Xj0WLEPGL))RtT0e+qguvSu0v:J3*`k9YA@-QHa+2O 1*:K@y3}D');
define('SECURE_AUTH_KEY',  '(.([FTLZq:QAGAVAey5y14Q(j$rN}`jBy:cOwu&S#Y%QO(wUJi`{T8{88jxI=[@d');
define('LOGGED_IN_KEY',    'YsHXD:+?Z752.sT}LN78W2M^KGKHbpOEA<<ci$zF Yu><lpAq7m|e^vl89s4{fY=');
define('NONCE_KEY',        '.THQUzD|2CZX/ja|~hG:XT[Y^UuXng|;qi2TcBG3`biRp8I}GX;2CH^Y%XfZ^IP)');
define('AUTH_SALT',        'n:m46(gKizjG``q i&UC,}%X]%HPMZ5=Ts>j_kPil953Qa6mUzC2wz1X^?i4`l J');
define('SECURE_AUTH_SALT', ',V8LPca1Fxs8Be,RxZs0!qAn[hidT#F(m uY,t5NlTkesY%R.q/hNq$w$h%#w#t9');
define('LOGGED_IN_SALT',   'aod=:[r7b_r7XovJc9t4 RzP_CddQ{]yH:c{4b]l76hGmj*M~%`oHrO=2GVmqC8f');
define('NONCE_SALT',       '.Hd<fj2/#)9xbD0, t=>jhHOFYARlOkgQ)NqZ4(`e4NxD4EWFt7<S!D/S&Z63! q');

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
