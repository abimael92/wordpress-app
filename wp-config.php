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
define( 'DB_NAME', 'test_wordpressbd' );

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
define( 'AUTH_KEY',         'I/R^pIOM<s]ByB)kmNlqfF}hb>.Kx/4Tgqb{Bv*nR|IU./R)f?H!k9HB$EjMJV;8' );
define( 'SECURE_AUTH_KEY',  'mPd&Zi,54-by+18YXi>?:5Ez`*6`L`+2)<@J?:[regeTBY6JdK8G$~R-%D`z}OV|' );
define( 'LOGGED_IN_KEY',    'J;RaQr<aUh<faebc_+DIts[|VTm0!/ 6p;=-{||;JRkLs2fb#|? 2[Xhn/=^lq^R' );
define( 'NONCE_KEY',        'RtW}D,|g3:=WVJzv=!!zNIne^&fYLDC$JJ>{ver.o{Z!?ZShL!cX/0DK#bX(OCzs' );
define( 'AUTH_SALT',        '_P(dn^9644<6DL+j[9x^s&YnV^h^Dy!<ynf5-Q=Aw), A}Hr-|LQi=_nG[/pD/z+' );
define( 'SECURE_AUTH_SALT', '8tU0*Q8F-x0`U/^[1C2h!`Pm:ke=:_@z%Hw5ApmH%ojP_EizvY/m:2?~O1>|Z|aO' );
define( 'LOGGED_IN_SALT',   'Bi?E,CBwx}9sg}Xp0}g>c G[P7(5c_;;pc21:^(8)$IR,v{>;_Q^`|>CnlvJ!/@9' );
define( 'NONCE_SALT',       'DmtLYe%ytA r^cpfqB)ZHM@D~W4>Rh1l{NlU>+l_(I,61t=)f6A.{o$CVG=3gejH' );

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
