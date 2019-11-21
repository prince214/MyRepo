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
define( 'DB_NAME', 'x912_wordpress' );

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
define( 'AUTH_KEY',         '60[59idKr3?ja4N*.!+Lg9soGY$H,/zvRv2/DcedC9S3e8)su{%&;Bht:TTJ@<V4' );
define( 'SECURE_AUTH_KEY',  '^-/IS[2FHz*@a,[_)?)eYsZ7*/d_Ho7Z4}NM7PzC.Y3X}ge2?bEW6 %G8l&bHABu' );
define( 'LOGGED_IN_KEY',    'I|D ;vwSga`~j(`.P5/2-4&GsEcSqy+JO;-Hid>7%?VwZ3uFv:a7N=gP[ RdEz||' );
define( 'NONCE_KEY',        'EL:F~y(Vcw$_Olg2w5tdSd,s,_D=YC{+Md_pB_V<z4CW6oB6dC*6Gl8S!:tcJY-&' );
define( 'AUTH_SALT',        '<uC7c>O,1lF,d(8T=oWinz~]BeOXkZ@6P4nb6rI]`t0EQkTJ8}C1%1Ld1-&nxfrX' );
define( 'SECURE_AUTH_SALT', '_rGE=4?]9$)&t(37vn,?L%@UdMk!]GYEHn5M(nH.=eN<B@(|G{k+Nkr~)8&Y%~)~' );
define( 'LOGGED_IN_SALT',   '*JSzb&y]x#.pCi[n6;inb HsCDgdGS74/mNS%*: M@FbGKTd68vY9I1OCR?ipq8b' );
define( 'NONCE_SALT',       '=Eo_]]n.QV@G(@dT)s2@4Ht$lZ)SoOk7TjP<8~Ei@|PZEbPL|$fb.Vc?[BE|4`:>' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'x912_';

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
define('FS_METHOD','direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

