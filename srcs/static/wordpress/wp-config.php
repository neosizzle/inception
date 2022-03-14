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
define( 'AUTH_KEY',          '-/&[*bQ&3=Y|y3kvQ2T<tMA=Y-6TJn.V]CLt-V8U$TVz5EC<MN8xr@5?D#W7],Hs' );
define( 'SECURE_AUTH_KEY',   'SOUjN0W i]t|$ [U`#X3sN>mY@^v@4o8%@eY9-z>Yb!fI(NC2d/y/q:`o>xn5-|l' );
define( 'LOGGED_IN_KEY',     'eDbhitKyUL0;j<PmF?1l/HXSCkBilRDQNt74IfNZro}%F2]T?DF^IG 3*fY/a`YY' );
define( 'NONCE_KEY',         '(t; s<vY60v}lO{?fb}3d=x0UHsHhkEKi*&>0EImR8/2ZgcP`99E !Rz+Oak9p|}' );
define( 'AUTH_SALT',         '/UEB0:b6ZU4^14 . BbSoB*0P:cjukt/vWw|i9T{Ff]D)XbGe OQ-4-h/uWITooG' );
define( 'SECURE_AUTH_SALT',  'V,Rh*}dN40,BZrlr^J@GE>E<YSHNtm|;, {$T>e6Xz?)LR%aRC-*n(>i^0Y=TMZy' );
define( 'LOGGED_IN_SALT',    '5BeD-INdFiXmQ=#,>`$Tdc-f}8kGG_L9i>&N!?sd21fC`wPoXAB/p1dD(qZ9hGxU' );
define( 'NONCE_SALT',        'n}~T%E=bY39*lmsDGpKQSM@o%hLR VitAvlhhXqP&k5.&FY>Srxc4i8RdWM&QH8/' );
define( 'WP_CACHE_KEY_SALT', '=Na 9Pf3if^VM@dav1L7jlV*n@5 l=v{V7V2U/[+RwXnf-Bp(cG|3&O86: S<!lg' );


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
