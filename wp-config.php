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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'dbuser' );

/** Database password */
define( 'DB_PASSWORD', 'w0rdpr3ss' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         '7;-jtMj|I-3$g_.pX6sE@5jOS$3#D;_c:b9?ydyItJZ(>b:?#E bXH1bF(/m0FP:' );
define( 'SECURE_AUTH_KEY',  'a]RfkPS<fjpku3K#fdB0tLf57ilKz3%R_UQ),O1@v$7zq(z8!~V:m2d~4=A)COh.' );
define( 'LOGGED_IN_KEY',    '2ssN,OfuXz.6I|sor3i;bI|yr-/2|Oz4C2K-VI~W3>nqNgVRm;]L5KtVF,?~:7#h' );
define( 'NONCE_KEY',        'r]JGvB{JKbfQ&dqPep|cN#GJ;1W^P3kyNX$[I#PlQ>)`!i~tW?O3KWHoZP#P~,{H' );
define( 'AUTH_SALT',        'om({3Zxjj!(k!FnlfPH^bc#j2v;?_(c}5J45Wy)l<RoyU55Mc~FUAx/f[fu0!~CL' );
define( 'SECURE_AUTH_SALT', 'C&)1n:{[~(~GDjBq6;!bbat58Ui+-lVm,x;CCzAm9liK8@{Y]u1}?]jVZO|0??Y:' );
define( 'LOGGED_IN_SALT',   '3O@]RJ/fwo.^<|G;*q]Xe?yO+|Nv`,[Z}/d/g=#P38E(95ChA/6/mCT__`cnZt@9' );
define( 'NONCE_SALT',       '_c,Y_3,Tvtbr4AR%JU9SBc@@4.RdpcL#AF89R>Pr89^A#:*LrMpZBYOWRF$i>&70' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
