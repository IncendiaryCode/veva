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
define( 'DB_NAME', 'viveroot_vive' );

/** MySQL database username */
define( 'DB_USER', 'viveroot_vive' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ptXCl&b?R%&@' );

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
define( 'AUTH_KEY',         'IzsPU9nOWS+??1`_W*5DlZLDokWS-UO#~ny3I#|gQHh_n2*o}nwk)P{p-)vB2MXO' );
define( 'SECURE_AUTH_KEY',  'suA#rUY}i6y#pg0/Ta[,b)=CPsN}3pK#q(!o4.^w6*%J+Qv^vzNQDyawzhH;_mqo' );
define( 'LOGGED_IN_KEY',    'tQ/K19P~e(esM7]~/xtxZc%m8v`]M/gq,5W<j3S{;aq;smE~bVm$+_TZwcjYQVCg' );
define( 'NONCE_KEY',        '+4<WJGittD.qZFp+}hZ[WaBAeDblI,H|$xdTj.@_RfC30A~sy;p6AD_[zq6N!kXm' );
define( 'AUTH_SALT',        'E|_A:hJoiIs|Gx3uN;4SSED`Ag,G#w=7`wK~jlz?,in(%.cL?cA(!Xc!J~Vu23ct' );
define( 'SECURE_AUTH_SALT', '#IB+`wmz2MBGs&ou=;m/R[iR5kI0,V+M > 2u9aL]x4J9L;YyTwh+)0l&$4dAF&y' );
define( 'LOGGED_IN_SALT',   'R/$40+7IUS`5HB[$%zs*}fxy}.4wDbxnLI>_WL}6J`WYy-2zN_QhLZ;F&#V;X6}H' );
define( 'NONCE_SALT',       ';_TQV|UZeFhFN8x1Px[(?7+l>C0AP^!iQY+Rxac#$LH+ROwptElNPxu5oO)/)~F!' );

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
