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
define( 'DB_NAME', 'netlifydomain-test-2' );

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
define( 'AUTH_KEY',         '3?iYX8r5Nw(;s1N3L#!X?rmOGcRUR;RS;uSS`/SBI%qh|NcxR`_>~a!&w-rtr!6b' );
define( 'SECURE_AUTH_KEY',  'KP^9~Oy4{;K>@P:>C.{^,T(:cWn0.;Ph^$CKVA!+z4g:ae2&K,y+dZC0-0XSYzo7' );
define( 'LOGGED_IN_KEY',    '67fP;g~jy<$RfFGq`a@ae*K~)JlJ@h1vsMrj&eKFyW@#%yg@I3+F.zweY>hupL:!' );
define( 'NONCE_KEY',        '.eZ]eYw~5}Q`XEm{E&x`aNAd?a-dT<jkdSog=,wb4H`UCQVd9Q4ziR*]Rp7/@x0%' );
define( 'AUTH_SALT',        '(ob%!#R!Z))@a84NxkVOQjHCLJ A)lp#p[<_|xG!bkp@)LS`]SZi6sIx|[+Gt}UZ' );
define( 'SECURE_AUTH_SALT', 'fZ_iG^e~P?2G_G3.!XqX}Ea$qG>-*X^,/?.R9T,={pq2CD.R8USN]_:JKl6$UeVB' );
define( 'LOGGED_IN_SALT',   '_C%ob/*dc5}YU^v<?(r=`Z0cdC)W8z48tN WG>:pA)9K1a_XZyRA&?1BD0R:vi@8' );
define( 'NONCE_SALT',       '@uJtqYAopTJGtMSFBB:)oFsnnvwM+$$(:At5]fE 6VzU^u%3o-Gw<JJ|AOABq%xA' );

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
