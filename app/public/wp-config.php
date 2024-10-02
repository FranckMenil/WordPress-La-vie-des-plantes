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
define( 'AUTH_KEY',          'MLGe:BNVAI8^-c(BV0qJ>c<B&Fb/20^yN)rtbuZ#YNB4D_;NLCLTn5[$=WF{AYW1' );
define( 'SECURE_AUTH_KEY',   'ts.a6S^4^h8E2UhW^2Ja$0[R5JEbfqJt-xU!s@g5W:ngWZ3eP7<8,$_^=UrKRr3]' );
define( 'LOGGED_IN_KEY',     '^3rb5p_<SsH|eYY*&&6T&k_]>=6nCY;MM6|&Hh#x[6k)s$~5%+~!NT/] !uX7@`E' );
define( 'NONCE_KEY',         'Mwm7Lvsi4T<1 E<UgI(PvR?xZ-O6<=O5C:1k};>|*o0pQaP23!-Sz=J:?0`{,~}O' );
define( 'AUTH_SALT',         'oR)5Yk@Kk-9#$vO-0HB) ew_%[{vm}QHeR]O~_!t$#)M[8HaL|)H^?X#m`=5=-%k' );
define( 'SECURE_AUTH_SALT',  'G3#dvxScW&~<*}knOXPW3AucM|Jm!}ehkGy-k{F3rL:u|slrjN|>mp.J?kqFT%^Y' );
define( 'LOGGED_IN_SALT',    'lp1Bt?kt{]L|Af`~`rYc6C0AC:9R,IqK&`rXwwjU:_`P@JYrka0Tl]ReQ]+6CE/I' );
define( 'NONCE_SALT',        'KN4AnC3p~Y%eNBT!>`m2kd^|wPZR~ze.>9Qzne)K0T2e)*_>BrW|G=O$eMusN.zW' );
define( 'WP_CACHE_KEY_SALT', 'W^!YdZ6)6d^)+vTJ$&/JJ>K[+lnSU`M64$af?:<YP]Vp9$VbdDMaOrd}/qWKsQc`' );


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
