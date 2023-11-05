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
define( 'DB_NAME', 'utspemweblanjut' );

/** Database username */
define( 'DB_USER', 'utspemweblanjut' );

/** Database password */
define( 'DB_PASSWORD', 'utspemweblanjut' );

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
define( 'AUTH_KEY',         '$Xz8xSq2m$Vf3L~*3*]PX9:!NOc37zvn%N$|::M3X-$50uw;Zy{]]7hy>h>=PQ!H' );
define( 'SECURE_AUTH_KEY',  'gAl]@U[n^7ONGER(o-Y4wRk1aJ)%f_^E9)oOgQ|hq#h2/ k7w]_0N@8eG;:e=tin' );
define( 'LOGGED_IN_KEY',    '<BRvNxN,G]AD#c9AmE,!GKK;8%}L<6i2|rllo`LWb$7hv$TfC3vT(C(|DrJV$D&r' );
define( 'NONCE_KEY',        'jJz#/NH+>%;vL,(ae{Moitpn<q7:$18!y8pS?2zw!m-Ww>O-oNYA;+.ovaH0zh%>' );
define( 'AUTH_SALT',        'oHYV%`Av~2f~,>9 (3X0X2E4-b[qvrg+/n`_cX({W!N!x*o4Nf/?Ws-`0ZT;l~v*' );
define( 'SECURE_AUTH_SALT', 'P:7iG}Cji 4&Xt%&m}pkgc8<$*i,mWXM5W_iC!+pj1UTKlEAf6VF!OCA:v*e#w%r' );
define( 'LOGGED_IN_SALT',   '`^ywyTWw&NX-f^ow_|wK~G6^}5bOHSng&v,42[wX]xn:N|V #8h#lk$b6g(ElC)Z' );
define( 'NONCE_SALT',       'p$K}KAc;t%qhj~N&I+7oN.oKPBLq9%,H=[l.v8Y_AxvU2,z1NnHQ[,vj4$Y28o~ ' );

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
