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
define('DB_NAME', 'wordpress01');

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
define('AUTH_KEY',         '1Fa^HSCifr)qClmr^%OLeib#h%7DLUP&lz&sRM!5D7Ftpl;2 V`6?[X5T{+pVNo$');
define('SECURE_AUTH_KEY',  '|x|36QGm}|G3@zl043rl*`Y>ONW5K#]n(f]-Wz4{P2HZ!GXD`b_G2lq1,iXOg_n.');
define('LOGGED_IN_KEY',    '`>#UziK48Zwp;h8Qo6r7ZrAsCv@w0ZuB45;eV?T9)I-?1o.;vRjV5hk+?8DKoMf,');
define('NONCE_KEY',        '.Gh}.US(!<zu2z1=eyhr!j_C!U:y}uRS?,WjT8p/MIMXvkl#:NiDGD{Nx[f1p|V6');
define('AUTH_SALT',        '~Q[0C1fL  n:srR)yUPF#&<EB8CGC4~z{zQd5@q.20g6^OTHSX4|NL|~|MZGfKF9');
define('SECURE_AUTH_SALT', '0xt>SpsU~eBf3hZ<WS3DJw.c@MGhW!T$K2-4*ERlkVoig%9E-1AeTH5;|5PM@=v9');
define('LOGGED_IN_SALT',   'vH%ux3kc2_TSy#<O(D^iN|.OQrtUng@>J>a:nbM:qu?>B9$#:in .3aE]q N/#Uj');
define('NONCE_SALT',       'uo>+RUpSBUf{/g-D1(;4-sUUuJpc[:Hc+St|kW7{4wVH{tqws-J-Ea/[B.-1jX+n');

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
