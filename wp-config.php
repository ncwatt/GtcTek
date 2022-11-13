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
define( 'AUTH_KEY',         ';`?|?G0zXua_VJ4t5]^ZEsia@;j$vyWH6h7F?v*E*H[}tNq~hoKlbOp2i[rH.m#V' );
define( 'SECURE_AUTH_KEY',  'X#BPZG6R81Fw31{Nu]FP]BoXV-qn~K!I0lU&pQ*P, m)+k=4sme3QB@Ou)GOBMWt' );
define( 'LOGGED_IN_KEY',    'u L(z:UMiT7(c1!CIR%#p@w$Gb&W/9o>5[=+Ps2M6jSQsP)d1O[{@a5jM8_H[>Z}' );
define( 'NONCE_KEY',        'Q0_z~rB({P=#%@o/01|ix[FdY=;*KS0!6{e.z$O2_{AfvCBlw?[&[(dHA3?^v]>p' );
define( 'AUTH_SALT',        '~@ruA1.3y7#A$[bfYdJgTE{PmC^J%elbQ3_9SOr)<];QGld]k2=C=vv(aH:9Uu;[' );
define( 'SECURE_AUTH_SALT', ']Wdt3fM60<I[7g:CH-&RZZvT1qK?swng9S%w6OcO%ef,Yp>9QHU6;9Lef bak74V' );
define( 'LOGGED_IN_SALT',   'fh&u2:vh;i;pS*7;Fgi3v_W|n[A:tge!!XpGv{PIaCJ/r!$1|iiX#KERwN;|p,8%' );
define( 'NONCE_SALT',       'zjhXg7O>6SjIyGA)t@!@MCe?K|gmm_8YBC!ZjK2{JmSZ^nPms9Z1;~?ma60Y*cSE' );

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
