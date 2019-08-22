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
define( 'DB_NAME', 'people' );

/** MySQL database username */
define( 'DB_USER', 'homestead' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8_general_ci' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.~vH*w-W872aV04Zfdlm`&j),)w%G+mw^ kV*zJ!0_]_Rq.J*[-xavanugo(|ZC-' );
define( 'SECURE_AUTH_KEY',  'TX``?BRAhim2-Hhioi!u1&INY/A_p6B}lXNBIoZ%2R<O?IM+|GoTlv!W[>Hzhii4' );
define( 'LOGGED_IN_KEY',    '}YvPRV|l{0vqfcf*ZPo!AB!`vW&cDs(/vyGUxPTs$.%EjfYUCyAj`0--16Kl+05|' );
define( 'NONCE_KEY',        '}65G4-Ly3o`Q$J+@* 2fQro,kxeE)+_fK^?qP2z1a{%l9(E484+4YB/N?@dfGfaw' );
define( 'AUTH_SALT',        'JKBh+F}?r;X- dFbHh[wc_[6vV5b(?0J^Z)Y(Bj+1YD[#b*iY[ex[`{aRmC6hMR.' );
define( 'SECURE_AUTH_SALT', '-=5x5(h4gC.{)aR%Q%P]+ItYJl+Z:>${w$J,CUHaDY5@+@::u9sYL|<W*0DQFkfa' );
define( 'LOGGED_IN_SALT',   '|!v/D7O/9+wfirq}4oo._Mkr[32;W|69_n7}<QEwXHNHH-|WQh6S|H`4Jq~bp4L-' );
define( 'NONCE_SALT',       '$)rTt^*Fc(HX+Vt)`U?k|ouz<{Uu}81cV7cwYyZkoID-vv1IcCA=}R!#$+u>tv/w' );

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
define( 'WP_DEBUG', true );

define( 'WP_DEBUG_LOG', true );

define( 'WP_DEBUG_DISPLAY', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
