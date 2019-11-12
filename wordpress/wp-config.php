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
define( 'DB_NAME', 'ecoproducts28' );

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
define( 'AUTH_KEY',         '*F?A$6`b^47Ts50*-C:QZg[ZXmwFxh!$@iw+YOb;9%=W.bCI<`,]Pfy|:V!!]sZh' );
define( 'SECURE_AUTH_KEY',  '+:K98Az*d}6:C2^Bq5^!-_>-D*t+Q;!0{}/l81j9Y|rX*K~Y5+(Or1>y]2*v-e)V' );
define( 'LOGGED_IN_KEY',    'ulU_D+-`1d?+{;|;0,,ZiA^U(Sycrb7wW|6g|xm!4,9[+CaFO*#eB$;K$C?|4[]O' );
define( 'NONCE_KEY',        '=UY}1LXN3_!Q3us<bo7~&ckkWF+:sTV/0]XiNy_gsT`jVs.;Y8Z0>zxq8RLui@d#' );
define( 'AUTH_SALT',        '6+yob<^k=7a/q&^ffs=?)-{D_0SZcDRhs,Wk5<u(3;]Z]<}Lq/3Gm@pe%.>I^; 1' );
define( 'SECURE_AUTH_SALT', 'ugVwa*78zyp@6HQSgdf=WPpk^e`;%udaCchVP4[Z.]Fc.m#kPa|F6Z13EJ356z%h' );
define( 'LOGGED_IN_SALT',   '2(41T-uiuPi*~[^P{.hq+vwVF399njq]Yh7l{~hY!*#}jv/nHO_S*H)82%|b-m1n' );
define( 'NONCE_SALT',       '$+a3^UwO|Xp5X|zfkl!Rz-$34K1vE.ig%7D1_G7//OfNU[WJn(P[HWIEjR@/Rh]F' );

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
