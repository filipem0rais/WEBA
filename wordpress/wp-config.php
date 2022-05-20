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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '=}`HR78)Cwr][c K5jz(Hh&{o#:srEZ[}yPfw=z2!VApT^bb&c?s;k.H5OR:CnGu' );
define( 'SECURE_AUTH_KEY',  'twf%nK:dg|[wA9ifni9}hvEuLLbfC?>0vA6=(,3!A38#PnYLbMCT|e8=f=`40/c^' );
define( 'LOGGED_IN_KEY',    '_iJ683(ecSyI>GkL~@!^.oPEkwvujFS!XN$i*lcdms/(F9de(BSNkKRi/2wi5`@)' );
define( 'NONCE_KEY',        '_><)Z])M+%j1bpUr+oExh8,O2LW4z.GeI1=4Z%;KX=N/5M~0%=.1@,+!4f2js_*f' );
define( 'AUTH_SALT',        'Az.f/+8gAT(h:nnF>r[DWq(5ElU:fC?/y<v)owkeN9k@5G<_7d=Pzb$:F<w}w$! ' );
define( 'SECURE_AUTH_SALT', '9[yb-}q8u[L49aSeH|x6hO,_PfOLg.PLtGW|dGMEoRkep.ru=gvx872|N#{3oD-]' );
define( 'LOGGED_IN_SALT',   'i+!/}T]fYDNK##(;C4jF42@a1e$v.S)vH#(R,d)A~*9?h|SZ`w;.Gr|~%d|+C`kJ' );
define( 'NONCE_SALT',       'WAZj`>?+sVeXLqa)8e+n%%*NiW#*UvSPskBZOCY;55^M2$kQT1GB+-{p0bBv>(c2' );

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
