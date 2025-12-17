<?php
# BEGIN WP Cache by 10Web
define( 'WP_CACHE', true );
define( 'TWO_PLUGIN_DIR_CACHE', '/home/ebookghostwritin/public_html/blog/wp-content/plugins/tenweb-speed-optimizer/' );
# END WP Cache by 10Web
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ebookghostwritin_wpblogs' );

/** Database username */
define( 'DB_USER', 'ebookghostwritin_wpblogs' );

/** Database password */
define( 'DB_PASSWORD', 'Gs(mhvcS8VBvT5^^MM' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '9=?6;c2R&2z$KF*2)M6?BkE/p6ELfL,;?CvWj5GF}3E|~DTT4U.Vy{E=<WUU~nBO' );
define( 'SECURE_AUTH_KEY',  'SAm7K@x<-F8)X:f,-:Pqks?_Q+sZDh8M8}B_66)lj%.@:42IC((-5$&TT(xa#6$0' );
define( 'LOGGED_IN_KEY',    'KGU-_FS5N|1}!3p@I!TO&N3ZG&qzCEI>*a{U?OoqL`Uys*3{>c$-5i;Lw*C <{1r' );
define( 'NONCE_KEY',        'zUVc@{A5g*esU|AUQJE{ p_!:hnsp=#pZV=}LEN8T/GQQ#2@d4+yh5Qx(4f1:rMH' );
define( 'AUTH_SALT',        'yL#<0=68X/bW[:R4aQ43*op}-(KG)}3ELwhZtxtX+AiUDoOw1JzfSU`ow-8/&P*N' );
define( 'SECURE_AUTH_SALT', 'MW<I9tQB(i^I>=/lHQ.!>(.KVxh$z]N~^s6vOI?=G/J7Xi/ht)u``l:+j _$f.g*' );
define( 'LOGGED_IN_SALT',   '{a|K5IXY8+y2K*; $B0d:P-h4;lUEIum;0q$B/B~T-F!:8IN1bTup4[r~}njp o*' );
define( 'NONCE_SALT',       'A%/tltgO/:]hp9=!_z7Jwn9ndNPjTe/QU<L&D[HNjD&Zj&m~:.1NgH#3,Y1otb)/' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
