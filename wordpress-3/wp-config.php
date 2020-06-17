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
define( 'DB_NAME', 'myplantes' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'A{ZGa!!W D!igfIhZ59W-n(RwKO)PZ@D=XS!GYojA#X{ls#.`t}+Qq4e?l]Nq:[~' );
define( 'SECURE_AUTH_KEY',  '!HP-+FH;P}GrSW5y,hU(J 3_KyGw4=^Lam8_+G70U~_<wX)#&`,Mv@**P,<)G!B)' );
define( 'LOGGED_IN_KEY',    '1n):2ckdGTQWi]:Dk5/r_ild$L S)L<k-W6W7b<hnpzK{;_b:C&3c>tK96irZU<.' );
define( 'NONCE_KEY',        'OpfLqBM9@TImB_^zhz%QGq0@}&PU1&WsD=2Ot+[gFT{p!@~2&Z+|J.;l4Cx&C/25' );
define( 'AUTH_SALT',        'H!|lpZ#/xz.U:>$S.NgddM-biC}iWiQ9<-/EJ[)/l[Cnzm~mg11a`Vn#(hs}Cb:3' );
define( 'SECURE_AUTH_SALT', '[-@DkaV4=s$PiPI`4[T2$lKJ1Yyj^HsQh?H%;IRt!#>O%[M,Iae>`tfR%.,Z=5*p' );
define( 'LOGGED_IN_SALT',   '3luPD7/g0X@FjMod#3ZW_XEGdr)TmtIFg/:TX%8^6v~2iej!oYU^):^.8WKen}rG' );
define( 'NONCE_SALT',       'cJg;uDx{,omEZ},.x)yO Gmom[iXt6Z*[&it>R]u$$-@j~+29HK}GhU(@iIj~g*{' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_myplantes';

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
