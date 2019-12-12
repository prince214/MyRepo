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
define( 'DB_NAME', 'x914_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'toor' );

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
define( 'AUTH_KEY',         '%;^,0!t(Z$;+Klue,r_3}KuOjg;jR)c,CC5Q_K=mWCsaA$~sB|N9{uvE#uee_PW2' );
define( 'SECURE_AUTH_KEY',  '}7Du6UQ;+4#OMKgN^hB9>Sh,:Lqi|]Y`S0m>m):55q7IX1S#1wkQi3J5)zJ#P|I,' );
define( 'LOGGED_IN_KEY',    'HX[YF:Rz(D;0S+Bz-JL|@r5HXvtOaLJjOiizXXx=Fuq/(89cj|%p.(MWrmqrGLB.' );
define( 'NONCE_KEY',        'O[yEtb8^w^A6n`}*Bk2GneHRUD;iNJcgSQJg{Ia1`Sa--2Qz]:8nfXUMGFVkPL9y' );
define( 'AUTH_SALT',        'F>%u+2z 6C!=1`7TMfi>`Z?6yMqg;%R=:<JZr%uD!I9hdB Uy8X+}BPqCKr?P=d$' );
define( 'SECURE_AUTH_SALT', '.|L@+.hS#}Ow]B;>gFJcQT<kRD&lLmiVK|nmn/UKVCXKs]IU9L-OF`o4{H l1%x`' );
define( 'LOGGED_IN_SALT',   'Kv.6d[Nkx|y18&.slxIE^*JeL8;y;y*p.,niH>yaM=W^Xqg:&|1:HQ%KQS]0> 93' );
define( 'NONCE_SALT',       'G[h^6ezB#=?6]!h=(]u:Xqs`,:sS_ZC1I=vrCT=n;EN3(]rue64`{sKph6YF4~k4' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'x914_';

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
define( 'WP_DEBUG', true );
define('FS_METHOD','direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
