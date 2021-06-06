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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'maikostudio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'town20Stella' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*S`f+m<JAQ@t@iujBo8ZbOY?]xGf~&<{M_n[?frBDn]gE[bwB7ox.U = q%! i18' );
define( 'SECURE_AUTH_KEY',  'wmt}[Y@_$}w6%Y2M1o*(,u10L3)VW=CP)i./:.>i#$v?/} v7>A0KX3w#Z;pRK!y' );
define( 'LOGGED_IN_KEY',    '_$*9s+$ucXHG;Eewb?JWD2(;+WTR}oMPnjdgXnG92ef1a[AopJ7syUY]4L_!PWW#' );
define( 'NONCE_KEY',        ';<g;^43^|xDT>8nut*(a1(k^SB<mvkff!1{G=ClqW#7L=&F_(]C!xckg|EEJllKS' );
define( 'AUTH_SALT',        '_*x V6/2JBIq@;Hqfjy1<nLLXYv8H^{F%TD>9jwB};086Fi57,>-%(gG=QMG:]^T' );
define( 'SECURE_AUTH_SALT', 'V-LUcz!U{aP{M`Q[{D>C~!K^O$rWgB?+U5U$)+AP;V,C]ath-o[|<hbtBU?q@ZZO' );
define( 'LOGGED_IN_SALT',   'Z/KoI#YknMAuVP:8_H5zWe`in><);XWNPx^G0np]N7tZrZqFS<FW:dQhJB_9u^_2' );
define( 'NONCE_SALT',       'u0JNsl6nYuLiS1ylOt~@>.>EP*n2PBbDt9jLSYN!|K,$u]Ih]6[n)7-PaQNst`Xz' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

