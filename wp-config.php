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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'yI9bslu.C#V>kz3`T7(zh2`8.3X92.)K&b4@9oy}X| ?c2XnbcP@rm(HXh--s&h8' );
define( 'SECURE_AUTH_KEY',   'BSP#210XHq)vg*$Z3OvRiLLd=D&#+STqEV3ag7v4O4FN-)Y.bn0^sNj4]Sz2B#IJ' );
define( 'LOGGED_IN_KEY',     'BZw3KZGZYL]4b}o/u*k_KSvdv+B3xa>Ny8]f!T!)U{ZQ[t2J5Vr1O240>N|bo8mw' );
define( 'NONCE_KEY',         '^)d{pz-Q%)+Xp=[iVvvH %GpTX0P j#Vtz Yr!2`OoX3r-urNXR#hZPzpu=vH(z%' );
define( 'AUTH_SALT',         '};2C#6b[pNNvrL[ZQ[|U{+4opTATK%GJlR:$HoyF6kW],X[2xKp7{q+e&!SIg/}Q' );
define( 'SECURE_AUTH_SALT',  'qrWji8;W3ppbK#4(k4%,ep+uJXFN>v(rI~@[~]]z*4M.H)U!l-T`i`6-VHT>;(#N' );
define( 'LOGGED_IN_SALT',    'pW9Tr9LitD!d+Z/KL)1]CbHfb/EM=R1jTzo$=h`Wdw{bBVGrB6Y>fY~=*Z{pqhZb' );
define( 'NONCE_SALT',        'Izv0SkR@NaaoIhwV5)8pg(T]pjRm,uLSlI>%P=a3]:*BC1KLC)rE}tz7Pi4AGlE]' );
define( 'WP_CACHE_KEY_SALT', '69D_&at(i4=].MNx>pcP^I6C&5db5?0W4G0:{.*w1{s}/88^qP=IQc}O9xrB_g!/' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
