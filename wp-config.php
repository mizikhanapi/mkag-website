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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mkag' );
/** MySQL database username */
define( 'DB_USER', 'root' );
/** MySQL database password */
define( 'DB_PASSWORD', 'Pna508#@!' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost:3307' );
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
define( 'AUTH_KEY',         'wneyCYD@ma5qL9#_=cwdELFM}r-wzNNFLUc(9~jrQ pdUGIRPz=@P eA&*nr}~L@' );
define( 'SECURE_AUTH_KEY',  'tu_`jNi nDE7kuF`,;G ;CFE].eBP%%h8@(IWM(M)4kKs74W]A,1dxf;b:4/eW`=' );
define( 'LOGGED_IN_KEY',    'eK%;IMDdv]y::6bBrF-;B:Th}9#K9Yj=gQd.RIy+`8~rQ/heX8=QPHDk;18iq&zi' );
define( 'NONCE_KEY',        'S)tfU5iq$k<1.y~R_)r9ke9OI/CZp 2}6}Twbpc4LdiV4mBFZRQwWP-d(MN:aO|^' );
define( 'AUTH_SALT',        '2Kv1q:vP;7S~?cA/L+!};Fv-kb?dR9B1MMD*tHU$Gfv<a dh@vwFusrhWlP$.q:6' );
define( 'SECURE_AUTH_SALT', 'HWHF.&(HlS#S#I(}xVu1o/:<-l@#-O=52nPwm{?Gz~>6LfD:R-[2r.]ag]Zp>E=L' );
define( 'LOGGED_IN_SALT',   'JkX1??: -DR*=cf/_;x0Kz%&*u];8tc#r[h5uTGL|bK(b<,c6p6*FJ##>cAPTZ 9' );
define( 'NONCE_SALT',       '!pknGIa@f4waHDiC1[%RE>/SKl@%X`E{8DC}@`LDB7KgkdyWHYTs3t/ny*dI@jVx' );
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hola_';
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );