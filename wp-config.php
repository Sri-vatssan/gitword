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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gitword_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '# CSmq;*imJb}ssU7kz]Z./1m&dk6vz^xnHqg0EQ|w-P%:-z5[3%[VK!@DBzeftc' );
define( 'SECURE_AUTH_KEY',  '29o!*YCn|UHaATir)F;*N-L<||L{G#rj%M<|-NG~!)w8`Y_J*lQ~GjPE~3OJ<y0,' );
define( 'LOGGED_IN_KEY',    '=iGn9hF-N-g@#.Eoofjz^0jSO(q]QU kg[#Gk9K:xGy(EvR#[R`zRix~c/bVr7qX' );
define( 'NONCE_KEY',        'kAia7P{@4Rzv].mzDPUY?JEL)*4}=#/Wp+I&LFQ0[<M_Ua3anG+6}=p&sX5A*P [' );
define( 'AUTH_SALT',        'M:!]u-*xBI?bml=:W2OA{TR8Fn:29 mLqRMlHBwutwKN+$&Akga_cyXNjq ^&2m0' );
define( 'SECURE_AUTH_SALT', 'u/$1c98_]TjgQmP4G>H ;c/6rapXcF0r.24^+*n6e;?EjGbrb>P`|*ngHh:sW4Iv' );
define( 'LOGGED_IN_SALT',   'tpS%O|{A`]iWCN~c,p!1`7gLo[K I/hY.Ch5Z@W4YW7Z 9x)@.tP3UB0=+,+3V=:' );
define( 'NONCE_SALT',       '0gD2P@3=IVb1b%N%!Te }9[2IYl$5(?cBlC)8]D@C=5AI$j>$Eq@TF<kOZXo2q/ ' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
