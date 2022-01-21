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
define( 'DB_NAME', 'customstyles' );

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
define( 'AUTH_KEY',         'ZR^qT}%%ZIx7RQ}`Fx?/_8n<h%[QTEaAWyMPeAOTx{Ax_XLGA}yS0U-fp;r<F]F.' );
define( 'SECURE_AUTH_KEY',  '^^oXYG4d,bjwBjo]AUxY_[G2Z%qI&MD|{YRWYX!@ [qM]Yvs}/Q7DL eYGg3xPPd' );
define( 'LOGGED_IN_KEY',    'WD09z:^:><Oh@U5MWQ{wW>ic#BpPf(&0L$1vHgBGu_L^11*oZh~ {k4iWIKA#!vM' );
define( 'NONCE_KEY',        'e%h7D4@&pt&Kd^c7DLf/ZKJFI@>j1OlNk9]1_:96a,o{$^XNv=^oGMmv]`Qm.$rJ' );
define( 'AUTH_SALT',        ',avt<+|NY#VYz_CqVwF=l`?[lK~5]!z2AGzS<|48]W?`EyL ^f~8+!baZGxp]l1[' );
define( 'SECURE_AUTH_SALT', 'f3c_S&UH@ObykjBeQ4T}0mKA1`B@ZqQU)m+Fz?Ac0sO&?Y7WbJ51eP[HyV_}1o):' );
define( 'LOGGED_IN_SALT',   'NLETs5$3<[vOw#0:ozD{v4y|(xs^L`8A^j(Qw~HR(at_@tq$H6QT_lXz*ft[w5p^' );
define( 'NONCE_SALT',       'e}ccE6_SoeIaxcN-RX~EAYV{]n;*]Z/+C)AN6nq^X(y*AXUhA6^F)rD)G*D;_ -I' );

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
