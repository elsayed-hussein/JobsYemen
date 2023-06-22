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
define( 'DB_NAME', 'wordPressTest' );

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
define( 'AUTH_KEY',         '9j!sY84%KFzHS^ayqY@.a]A%oql!Q@F;YdENW&njnE|M=!nC$7[/$U2Aj74bWt-/' );
define( 'SECURE_AUTH_KEY',  'BcadmNEUo+}15P_boK-<ia0Jq$JaduWu6RO+VP)O[-3,wI7@X??>~];`Yy){`/7b' );
define( 'LOGGED_IN_KEY',    'T#df_l*S7T)}k?Y_A:9tR(U{Bd?LDWips.uiAp/iJ-WL.dxQt?)aK1PErdX$=PRa' );
define( 'NONCE_KEY',        'f:MYbIY!qU8rfJ|Y}>fks^LXFkB|Or753}3/I(er?:K|+qDd~Z}Pbx=mmR?pAu_Q' );
define( 'AUTH_SALT',        '=#1 fG^pf(}9df&X]=Fsp1-e>0Dcw{E|~(jE i;OS^{kuaGtw-^ApKww.aGi|=i]' );
define( 'SECURE_AUTH_SALT', 'ZgM1Onw2,F~jc7)uG487]&Z4@es9TQmo$3hC-F$c@8Iy39_6-3=g$J2ry<t?L#X1' );
define( 'LOGGED_IN_SALT',   'Oa3OK[fZ?[U#u[B).;QKbS`He0s:/ypTX@bI4L:Do)AU+URl=Yw^^O$lYlG=u6D#' );
define( 'NONCE_SALT',       'VVX|tr1`P5.z=,7;soLh_qMPOO%!%ez2}.3rxe[?EKz+X8)[7t&ap&fg`xv4M}e.' );

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
