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
define( 'AUTH_KEY',         'VkGjj7v.~(s>Tg>*N#T4=oS2vQ;+h`3l*L[f$i]rmS9F{s_{.`xGiAr%MnOyu:IQ' );
define( 'SECURE_AUTH_KEY',  'iO1X]ekcjAz>BY/IV6H5E~D:JrDQAX;Zg,_Zzty?@z+hFFo]GDr]A#4)6L7Lrqh+' );
define( 'LOGGED_IN_KEY',    '`$A=u#=9w-(J$Fc):?7/jP9$e>8y8?X sz73A#Jxv-89!`p{*[+_S-+l)lE1X#DH' );
define( 'NONCE_KEY',        '-IC|&WT0|4gA?+rKTS@D-R>F^%,PFam,my3Jxq 6t;,b1xAKwIsajNM33}zH=uW7' );
define( 'AUTH_SALT',        '*@XLv <UY-:td;m{G353]Z.nO(6szr=J(zY1NCw02)&xg%-U6/E!,[y3D3WRxO?B' );
define( 'SECURE_AUTH_SALT', 'mj<F> aiZ!L*Oa=deUd*yi:S^58vga5RQO2$8W.98W<XjFO>M b6?[[{;x-RlA@p' );
define( 'LOGGED_IN_SALT',   'H!?xv2y$PUd8*4|?n&@pP+<%YhMqbX432D22p?NICTex2I!N+rLgdaW% Iq]tzNg' );
define( 'NONCE_SALT',       '3Kh|*ZCMD[FW`t*(7aP)3N.r <OsvAn:#<@,owUQE0q:/C3`v8lPWR(zwK3+-rRw' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
