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
define( 'DB_NAME', 'cms' );

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
define( 'AUTH_KEY',         '%I*G(^pbBDL~35$jp/xycn$/<nzD=HbUiXYCLTL4oUe56{tq9:zlsP]{Gay;1C0W' );
define( 'SECURE_AUTH_KEY',  ',(8nDHv3N<YjhwQva+A;|O+Tj/QDo|Qg=L[/P,#-.Dj ugf-k5]hKa+AKpn#S_(N' );
define( 'LOGGED_IN_KEY',    'RP[Za>AXo-8t*EG9W)?mKHE6#,YfGmSVWXs5H&3;SIGE*>s?Dp2CYgmk_j_0-m=8' );
define( 'NONCE_KEY',        '7Z&Qgse]i3!51!_|u1uBAPxKG0KvFBrOF5(ccC[-KF]>iG{;4h[qL*ZnBvI^}vF~' );
define( 'AUTH_SALT',        '.#mU2]`BK80vp`u|qa(7!;[Z$!C~<u;4;Dt3yE4OF`p5oJL:VNPZB{@.56WqKn@L' );
define( 'SECURE_AUTH_SALT', '2/>tkxgz]V;=rph4*k0t+`X-2_+zd9I+0#5m.TyCFu6Cg+4JWOq{Jvz8ak(UK:VV' );
define( 'LOGGED_IN_SALT',   ',P<}|@T_H6HoKtM%~K||XfNVp<A_)OJGC=<y[({g^pyK+-jYgS@rY549-q%R<lMY' );
define( 'NONCE_SALT',       '>e}<i`Cm@FFiPTNT|S2mnqz;4/-Zbz I`@B}J1j4Y,{m#,}BQMUa]T/oTe@|&zG3' );

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
