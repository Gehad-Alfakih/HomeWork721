<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Gehad21' );

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
define( 'AUTH_KEY',         '.-1XekaVb{u piE}X`qvz(?5oFCO$l(Ny*~y/&qFP@fJ?jG$v&WwJrN0sBZ!j{Qw' );
define( 'SECURE_AUTH_KEY',  '6e[R6$`v |g#1^S6`7hw(*<_ULah!T=!]Q3MR(Gz_o-#SMod2dfY(bo({;?6YVOD' );
define( 'LOGGED_IN_KEY',    ']4kO6:|3 [gG88#r!}{|UtHYrrB(Kp7cn?XaP7#zt$r)-NRbYyh]gr8L=55?hn7@' );
define( 'NONCE_KEY',        'q#zfvN/%7iPBXrLA17Y<.43^&bPlvD] 8NbuL3)*b![elz,FnTRhd^Wz&hjxYS+B' );
define( 'AUTH_SALT',        '?NlZ`BIrYChFYU>/wLVvvMY?s?FiNx^Ry7mC?/p$G(oG>qqbx56.|Cao^m3J4CR ' );
define( 'SECURE_AUTH_SALT', '):}(6|+_#Gb/I kWLtM43tiC_$x@#N@kUW;15>rmj`<+?e%mhIPpSAe^p$B[6Q0?' );
define( 'LOGGED_IN_SALT',   ';.p4jSIuhkuTj/1-639f(YS^(<ZjB H1RdeHw PRJjIj9?cQNW#1c6yrmnn][`0p' );
define( 'NONCE_SALT',       '2uAp;a[rUtM~|Q}/Hcg$+)&Az/<Wp?zAH3tv4S|eEt0DE`.ljR%!AreZ{0Ffm@Tf' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
