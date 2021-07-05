<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'db_deeprivers' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '=qt?<Q346X?fhaudS&)cZw**I#e=(]_,z.DZ7o7I%wW6POm+<nqGZ@ZGh,%dn#iP' );
define( 'SECURE_AUTH_KEY',  '*m7#*3.l^y*vWp ADjjsqpC*{)-Ged#k6 &i7K[K)Zkz2B{lg3G;s^QW*l-hI``t' );
define( 'LOGGED_IN_KEY',    '8lga2b@k.I?Y`pzTXF`l~9^X6$U2D16Oi<C93&w@Jf5q<4J$:2FF8_&)-oyQRe?|' );
define( 'NONCE_KEY',        '^Q{s6 f4Axf_MlB4&-VY-%Yx6!?+O*&e_N_/wg_J|*d,W^}:!l$,DN1q%ygx?XwL' );
define( 'AUTH_SALT',        '7IQ+~*@VF|:F=?BzWI0h= ,t*E97)0?j,REI?CGLqI4avV5jKlHZ}4R}SBQR3o!3' );
define( 'SECURE_AUTH_SALT', '4svA3qIQWU&u*:?k|DzX2?$4r1|-(H)HSwJVh,VWxiSJnrgY+[Xt7o&+a->]%ZLR' );
define( 'LOGGED_IN_SALT',   'X/18%dC$#&EI`oful(~(Y[IbXf^mhMe^rS!aQMC{ nwu4vPuqJe1Zf*_jP!]MUT5' );
define( 'NONCE_SALT',       's%ju1.6h@DlF42!Jr73mlA K1H7]~QjT_wDx}f*#I(ZZc-72KQ%Gk`N~FmukYp_k' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
