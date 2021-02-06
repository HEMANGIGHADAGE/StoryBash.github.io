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
define( 'DB_NAME', 'practice' );

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
define( 'AUTH_KEY',         '4ES$[>|h{ sqps+6LP/gdRxRLNScl=h-7{R9K>%++KS]tP}w3!6_4L,[Z4WiX+UB' );
define( 'SECURE_AUTH_KEY',  '2q4G*`?MZ6y#.%SI4%E07/l`EeculUzWbwxtka!-kNgh`xp<X5GH~0cqF1W3n7Et' );
define( 'LOGGED_IN_KEY',    'cwm9{~VDY1);e51r92fQ0]F-[=7g/5TP;M-*^7zrH0>SD]mfJrQ+tCBj3[,53;s>' );
define( 'NONCE_KEY',        '|oth2^z:bNr{3Lzv.(-O&SFVV-*n#?<v]8j?*/)xwlhB$(D59Y@v)CXqa&udgmf6' );
define( 'AUTH_SALT',        '?&n{vXMP1*G8^UiCqPL_7CwZ$0S{l]:TnpS!z%uvc;gLp?/nURwROTM1A_c}`nKT' );
define( 'SECURE_AUTH_SALT', 'T-)QmHv/&[Y#+d>KcBb0w4&Zff}+{Et{9a{cQ-t]fe}A1|<;jz(A.g+K-*[RJjdD' );
define( 'LOGGED_IN_SALT',   '3YF;),<! 25i?gl1eL+6%4k0oiKa(bwr2,MDrJ|SseU!0Q5{@BKJvx(i?o_o|)6_' );
define( 'NONCE_SALT',       'lUd=`te:1VVdP.1`$K,__]GH.!=&(-fSmf=PpkVJp_S|xqmk<4e~AXe*J_7.@MBd' );

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
