<?php
define('WP_CACHE', true); // Added by WP Rocket

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
define( 'DB_NAME', 'AndroidEventsDB' );

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
define( 'AUTH_KEY',         '?e8gnl@,qhjmg{i0=p+{WmvK8`J^MN]XG53U) sZJG5:B}1+4#t4Us=0p,D3yfvH' );
define( 'SECURE_AUTH_KEY',  '0,t;c)|,l_DwbU&:]q6KAKbc],uDF[*dfW s$pb&Ng#2h|02)QE<uzhOl^_n; [R' );
define( 'LOGGED_IN_KEY',    '<pvJMUBimV^^rN:.c0y|?1^Lu9@5BRJGl<#TtKXi|=%r6xx/s*$7Ah;f_PW`f *n' );
define( 'NONCE_KEY',        'Cs|)M(i9qi,7oc_?KSr#-;n_}|-A0}mme (>|Cna~-K5)}:g6?su_kB:;Y]^sz8]' );
define( 'AUTH_SALT',        '_yu^U8A$Tk:j:XCw|L/HH 3x?mzyg//OdJxcd`j-]?[&JbJ8xY~Sb:7FdOF&O.ZO' );
define( 'SECURE_AUTH_SALT', 't~Jg+vF;.;rd9/[U:(n}WOl0Euo%YS<%%4OUTB}xR&j3;w|jn:F#*iZ!2SwJr(Xd' );
define( 'LOGGED_IN_SALT',   'Ae3vFU.pwAZFCd0THus5; |`)RCcF7bWM]u6[g5%c$C;i0r.%sv+rS{h@U|_DNip' );
define( 'NONCE_SALT',       'I@YZBYb3%z3%y2Z$x#RJp^ancPo`W,hW4Ov$#,){YsGMu%BYYVu_=(5cAGKy+je]' );

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
