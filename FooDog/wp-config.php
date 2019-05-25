<?php
define('WP_CACHE', false); // Added by WP Rocket
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
define( 'DB_NAME', 'Foodog' );

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
define( 'AUTH_KEY',         'q=m.o-a?T+)g$yKwdL?Y-]Dqg1fjfYMpwO&cWc7*#T>s`*jlbJug&{~9zR.r~LK7' );
define( 'SECURE_AUTH_KEY',  'x@E~r=qI6I3.?&q$Y%q,bxU@S{_B{R[/o=uYuYf7e1G$=@+Ze|1}UTz`n]``Nj`$' );
define( 'LOGGED_IN_KEY',    'qPL+(=h66hh{>5/XkP4Qt5~3^z<us3:aVhOcec*wA9SsE>{JbEs&1mMuDT@w%~nW' );
define( 'NONCE_KEY',        'U+P!+EVWf3wxUXkLGA.7&j/]1M$@Gsu`9aXb.Ef[#L?46(:-$u`&ePhmaoz)6A+p' );
define( 'AUTH_SALT',        'C)~uqPf4=$lE4v0wVb_YfBDrnn*?/|WBYV{H#[ukWMz3=.m}L]:U/9gW$@LT=,38' );
define( 'SECURE_AUTH_SALT', 'Chl$|WiZbj&&>pT@a6;sd#@3Zkzbq*-Ct5_0K+p8rxplmZ;y iEIdAJZmjH`V-)h' );
define( 'LOGGED_IN_SALT',   '`)|B>y7gX&bseKg2482KonJb2nId]r1B/BF.O!.i}}fceP0WUyVGx9TPii>OD%,z' );
define( 'NONCE_SALT',       'jUIBFGtO!r`hPSn]:/PsP?x{So{7=?uj,?pn|>e+Dv?(6!Z uA2L{#<e!{$;=V|m' );

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
