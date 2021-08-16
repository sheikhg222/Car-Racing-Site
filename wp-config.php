<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'carracingsite' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '#)1wG__^yyxi(!I{sF6EHYQC{C6$!IYsFqd+,Um0w5(W4Z%wN7J.5t}QM4#3om[H' );
define( 'SECURE_AUTH_KEY',  '}co../T-LC~:V@>Af0.x^k,yXb<imTgOD_4D,2bo?X+KnC;?]I!<Q+OrTb[2k}k[' );
define( 'LOGGED_IN_KEY',    '<G1XPIm<`9nS0HGi`L-}BAu2/IOVo1ivMR`M]:*kzxZN M[A:Hd:.XFGWs6!FhPo' );
define( 'NONCE_KEY',        '}KiW^e[=9vo1@=9JacUtjP,v]dilp;uZA,V=M^xlaNs8vO]8(my/xh%3>Q2f; 8O' );
define( 'AUTH_SALT',        'Rgp#jS6U_i&9KlYYSvRI?OoN)krbYi*9k78mn0A^@GeHq4B@W9V%!9Vi_HvH]KPW' );
define( 'SECURE_AUTH_SALT', 'uf^{c886Yu/NfDLQ}Wl>w3p=LS[JHTeO++NYFZl_@!Q:+hCsx.?#!RF^(P`k,WJd' );
define( 'LOGGED_IN_SALT',   '_hvd2Eij_]dfm*&b@7;ixref?K|s`j]uXbDtTs(@ms~>1$)K9Lp8=v^=N%1[.2JW' );
define( 'NONCE_SALT',       '_`C6fK l%Q1N9&%{bcyYRUZG(sHr2%5t09BG:J=k>-YR}:zMRd]3ScJq1D+BFZT8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
