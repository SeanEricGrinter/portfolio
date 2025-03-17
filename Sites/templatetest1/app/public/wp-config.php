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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ':Ob}{^NuW}j(y*Te[})Sh`@u5*)BzP^yb+lw4%l5DE(%%6ck%3y(%(us[%&)(|zN' );
define( 'SECURE_AUTH_KEY',   '[grtxg,8mjg9jNg#g`i- w)aoZPg(=|5SIpKo$74t--rS/W}wFr%(`.b4cDCC:<t' );
define( 'LOGGED_IN_KEY',     '}C[i3J)?f,]g)>$N!/O6On|vHN^k]dvv=2Px7~R,pb+cz01]Oe><-2uf,lJSXTo=' );
define( 'NONCE_KEY',         '^mguPDV+#aeFB|6$`|4]>~UB.C0C,OE@@MFbz4(D<Fop>zq;GW5pr>cta9)$`.4A' );
define( 'AUTH_SALT',         'ZxPpzoIHiHaF+FoA;B6Qh$c3&]%OmBcaOL@nsRHT2}exzRK}3IoOb[-umtp%c`2V' );
define( 'SECURE_AUTH_SALT',  'u-e{WV#QFn?]AGm{If1/H066:0^ZPl29]q| KLZm;}Sd3#NkKuK&}h:`V*:b%u5V' );
define( 'LOGGED_IN_SALT',    '&I$oAH1s$O59iQ hiS8kJ2*bt5bNMeRMCtKqyO`M37NP>XWt<4][}+c/qE&ggeCe' );
define( 'NONCE_SALT',        'kv1~A<|PHRJ5q b6d083LOo21rh/YdTY}I9mgQm75BD#|0RL}G x6~2a^UVDBWQZ' );
define( 'WP_CACHE_KEY_SALT', '~7OouO>9{T4[IVs}5x7_!(!O>2RG-bSWwQE8QPW(C<z3M=IX~b/f=ANtI>[fgl01' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
