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
define( 'DB_NAME', 'nicolaikring_dk_db' );

/** MySQL database username */
define( 'DB_USER', 'nicolaikring_dk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Kring111' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql78.unoeuro.com' );

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
define( 'AUTH_KEY',         '6_=W1-r!Q7nsEI^+KJ|Y)GBIUjTk;)2&7v/PEni(fIjdwP98odV>^/T^M8lRxy&y' );
define( 'SECURE_AUTH_KEY',  '_a8WG}RwD9[f#{ua0]P]C!%]E#m9vP-; e~)$?4ZK_kw`>~TU!zWH#jMEAM^k{K,' );
define( 'LOGGED_IN_KEY',    ',{4u5YQ.oExI`:fD(ph9[h?D#OrXSb(Q<b)0tURDW/_7`2qo;%O+}jJ#DW ]nf:E' );
define( 'NONCE_KEY',        '`FJ4=R/:bb/j$dk(dh|U!Y>W+28A~A# KYVgHNyptT8FeMkTf/$J5=FD T+[!._*' );
define( 'AUTH_SALT',        '5GTGPz@=B1YZGaDY]&Ss^ 9{B^^SioTp9uw1q<}7`C9lI=}PTx5-jjrn9ziPIgnn' );
define( 'SECURE_AUTH_SALT', '9b|sV?Ir{J<pRmA,>W7GZ^-3Q.l8C$vx`6@5?5FtOBfQ7W;IszX/Z4c,&|n-6bhE' );
define( 'LOGGED_IN_SALT',   '6f3k44b(7nGq$,`@J`<[{gO`Bhr-FTT+Tmln^Bkp,A7!*9I,o)p]~|&I1#zRl+V`' );
define( 'NONCE_SALT',       'Al,8gi9u2}YPcQ2PR%#[zQT^&;*^1p,S@4nvTyL{_gE#`I#vHtC^/K-Jp;XXS)C5' );

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
