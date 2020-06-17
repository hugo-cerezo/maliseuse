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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '> P3QLCOXmU7MhY(+BNf]peSmZSMq:zP?WQlAh]_z!e#^!Z(:Ph;xS-v7UJUp(:Q' );
define( 'SECURE_AUTH_KEY',  'f>f1kS@?C 1b9b3|jCGo$[bMb>~y8{dFKO2w@~khtL=UsF:1Ec>.Duf.BwQf+/!V' );
define( 'LOGGED_IN_KEY',    '&Y_rtnu3QZy<~U:u%qkIi!NK.aF6/[*e(&gAI>5NPi @I=8RlpV(%i}gS_Rh*TBe' );
define( 'NONCE_KEY',        'i,XtxxV/kX`iMP.Ob<_#*Yv/,.xa!fVKEI UB%}t%b<)^qT?M6yO_Qm^^%^i0VSg' );
define( 'AUTH_SALT',        '#)n1[?=myq*3#rJF(g&[OnJ`9A%9U56YnQ(}^1Rwszg5jL{:X<})I&?^%$Ai9+T}' );
define( 'SECURE_AUTH_SALT', '2uh6j($GY,uwMQ8}/`z7o1dIqBw^YUtgA!z.M5pFoB+ q@/57`RH.zG>f&U{5Q$>' );
define( 'LOGGED_IN_SALT',   '-M>pJ))7j}qghoakTY|cLvNRT4wH*_+H@~Yy}E,0eGCU]FRgo3*:,2^8.sQkJt-#' );
define( 'NONCE_SALT',       'IEouMN}la6*E2rGLMI2b{YNgi0?ocWE4/;tF@3MeTs2wp,S~-K!(VK.z^}mzo/UA' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
