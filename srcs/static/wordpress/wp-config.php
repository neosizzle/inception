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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'jngroot' );

/** Database password */
define( 'DB_PASSWORD', 'Passw0rdroot' );

/** Database hostname */
define( 'DB_HOST', 'nszl-mariadb' );

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
define( 'AUTH_KEY',          'kOA?IwE%`}fre7nv@_6LPRl=}I jYM<DKZ#%i4$Bx<=ZniC>((oy:1-C7c85l(2K' );
define( 'SECURE_AUTH_KEY',   ':;#`B.NvNP,]|.@~NuQ!^$6#6Y8NZ}8uUd!%E6k?H@5!>tXxEMv{`G(t-q[proV_' );
define( 'LOGGED_IN_KEY',     '4-]}>mtMNx$~|l9J6cIIt#BdD@pV _Ge,D%)VU2 Dzs<2msF}3[EzLK.-:tFL&5-' );
define( 'NONCE_KEY',         'sRm]Qs>XFOd+@q5a]GtvLw><bnJa9a%%DvIYNP3E#>,!I`MXfUxV AlsKNA*C&Ok' );
define( 'AUTH_SALT',         'YF)=q#8L/rpR)z=IpcC7EwNvh*Kb0b$ozk:3u m16Or6@L-aUp?r4n[Y52T1 `5W' );
define( 'SECURE_AUTH_SALT',  'g~m&@)N/{{jsVAOp8urro&F%Onfq.f04aVPL(#VvEM_j7OsL&>Afj{BS<47JfZ+&' );
define( 'LOGGED_IN_SALT',    'mG_2JK`cQz>lxt#q:$swj/dREkF%Y9jvRL` )n?~()Jv><ullkI/noCdn(`kNleO' );
define( 'NONCE_SALT',        '^Wh1=U~]au:%y) pv[Nvr@-,47Y#>m]h8-;< -&|/v$T*L`=^*T3(d%+r]$!WC6?' );
define( 'WP_CACHE_KEY_SALT', 'pdC)v1Y>tc9JGP C6ai{S5HY#O=Fo-Os]M.[XR`c*~.eK9w}p+%E@w=R8C0)<6HD' );


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
define('WP_SITEURL', 'https://localhost/wordpress');
define('WP_HOME', 'https://localhost/wordpress');
define( 'WP_REDIS_HOST', 'nszl-redis' );
define( 'WP_REDIS_PORT', 6379 );
define( 'WP_REDIS_TIMEOUT', 1 );
define( 'WP_REDIS_READ_TIMEOUT', 1 );
define( 'WP_REDIS_DATABASE', 0 );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
