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
define( 'DB_NAME', 'itech_db' );

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
define( 'AUTH_KEY',         'Zu},YRoY4M?Q|P}VVY5:t!&qFS[#0mDYU9K-)U]-Pr|6z1~$00TY:)2 TC7wB&Ug' );
define( 'SECURE_AUTH_KEY',  'A-r]]y7ER07XhR&!}^G$-})]0x0BSlaNBmhYso@,]z1p).+G30R&jZ=AXN@McksE' );
define( 'LOGGED_IN_KEY',    'gU7-H5_05=7{D,Z{Z ixVf?)$y#n)VcBvsS]HBXU<*2@{7r&i([vA,iZih;O8R0e' );
define( 'NONCE_KEY',        'dcEf9cJF[5#}m8@k#!n`b%g0Mf-*WyICgF?>/fI(^,{WX~dmXCIrr3_(Xsl}-DtN' );
define( 'AUTH_SALT',        '(l^VI?/rl+w!IE.E7Hc***mmm3Z4*E;=r$ k:%pd.iswALqoCkH+=bgPf9lVKgRJ' );
define( 'SECURE_AUTH_SALT', 'J$ZT]cb(^e=,y6JPtqB7]q*O1!cXPaIE)6ip^V(tER.Js!6zgoDS f^7>+P2x43:' );
define( 'LOGGED_IN_SALT',   '{z<rWJO<0xUz=)!_AIy3:@T.IVY0R*<5v@n@SL|~+EQ$+G>JzXBmC+9D<lZjpH~4' );
define( 'NONCE_SALT',       '.(pB+v]f8V16ay^&~F6lrnk03t->mq!B4Fh*GoyxuHGY%N9w{rco!SM;(E5(U7r1' );

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
