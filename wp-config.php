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
define( 'DB_NAME', 'porto' );

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
define( 'AUTH_KEY',         'rtg~T )th3FN&XVL~k1-aivW:#~]OUZ`iF{r)QKCgD#<t`m?Kz$:N-[%B*Mzy#+i' );
define( 'SECURE_AUTH_KEY',  'jZPHUn|@VCll*4?E`-1Y:m8h1N4H4&wdzA<e>wgDsMZ8#4EH0N=(^HKZRGteJV*f' );
define( 'LOGGED_IN_KEY',    'OSlV+($KbbC;3ZV!@V&Gx{E}^*93ir1+f_>zEw^vcurGGUZ1UJPfn_)uT1US^cMm' );
define( 'NONCE_KEY',        '4@;|?RI-IZ-~tE[^ybrpyqiKBGT!r*]OD,piT@MnW{+8,k!E(%FJ0c y2a9E]8^I' );
define( 'AUTH_SALT',        'rGReLaun[Eduof|$ZPYl%-X6!pfl*efMpd#H^=)W9X{<$H#tO}i#<,0i#e(t5[V+' );
define( 'SECURE_AUTH_SALT', 'ul^ 1bJqLb1Dvp@n!q-A]c<`$*Vhlgl>T+|Sa|7D2j[0<TW}Dw2tECrl[LldM#EG' );
define( 'LOGGED_IN_SALT',   'N:A41Gl|2fFuP&F%f |{*L^(9+@<>97^fGSBmAo&J#HqB>^X@h_TptRPY]hK*cV4' );
define( 'NONCE_SALT',       'q_7hZs0@6vpR1qt#Bar/2]V&}^3OIQfo!>XD1^{0Hw=pm[9n4eX_/ZG:N+)i^Y8F' );

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
