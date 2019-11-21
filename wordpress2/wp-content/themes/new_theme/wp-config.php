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
define( 'DB_NAME', 'x911_wordpress' );

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
define( 'AUTH_KEY',         'p@ez; vz>bx<(YR27nvHA~Hi7!#bkZx %mW6T|ThEmb$7PNJY0h@R-/|,{df8,]a' );
define( 'SECURE_AUTH_KEY',  'B-JxTxF:#]4qoby&}u8z?1z4o1QY*hKj!ik^P`^dtu+lQ]bx!X*~ToyiIUZ]@XW`' );
define( 'LOGGED_IN_KEY',    'c~2^XLW4#+xcE}9E?wjI:0x`OQA-?y-R&T!.~yc<_(6p/aTaTyZA8ne7o8o+KkP`' );
define( 'NONCE_KEY',        ' eULeK?w)!^!$e_8tSG7|jR>DORR.b`q,adEoG(9VGNa0,8t%S}dI+d[gjQqh;XM' );
define( 'AUTH_SALT',        'i[/3:=++_|]p5%?/bt|wMOLp]se^EN~fc0JY^PUxZ]bkzq.<wIdKfe)Iub&aFarI' );
define( 'SECURE_AUTH_SALT', 'OIT+~]Xyb=kH.BsFO lC4nOX-e-jq.<#2p*l+K1)J#^jRBh!3m_*zsqD`MdWj (0' );
define( 'LOGGED_IN_SALT',   '$d.E3,6^lCw%Il[|g{:Km,o%:L1CTMd]b.$FX*Kpin(Fcf E)ljrRrg<N?cUz^S~' );
define( 'NONCE_SALT',       'vA,n>8g%Wj2y`L8Q5pu8*>y!;H!$0jIgyDQ-BKwuAYn~!q:ig]w`g:rn*;^k*JTs' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'x911_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
