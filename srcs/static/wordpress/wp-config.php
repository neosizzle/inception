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
define( 'AUTH_KEY',          '5zvb!YW4URP>e/b<$O<Avnx-OPmsJxS1mtdCuI|Sq5r9`Wp2?jyvf$H*zE]J[g`k' );
define( 'SECURE_AUTH_KEY',   'SiL^?}>8dgo_9<?TN~Qd,%8e$2fKNoAve=c |J<5IQlnOq3D*[/2xmf<Kqz{IquB' );
define( 'LOGGED_IN_KEY',     '`x;)T+^Ko}`ap+u4ue8q%Z51e!b@SoU#bc{b.smQa[;!~Y!h-JyBsAqzb0:Po2u?' );
define( 'NONCE_KEY',         'Y:52`er/mIK*Y7!WVpBYigKMOG]1k&]L_ZyoQTR&2x~sKK~}-],arTeog[z~fVVU' );
define( 'AUTH_SALT',         '3`8Q1/::U^Zhs4:9a`<FQGF^?|QuXOPKv?EV~oD3%`ew/B~nY;%vm#E?EnsC7>C}' );
define( 'SECURE_AUTH_SALT',  '=% .Z41chV:Yx^7uEn+vDLdV[Ib.ga^fh?q|%.1t>8m]w-M=:9)H|2nDk8EE+ ^Q' );
define( 'LOGGED_IN_SALT',    '~da(AEm1v6[P$DW)N!EXGl`l!k&vze}ez5zlD|1i+cECY1|AR^z5XDhqisCs#=)B' );
define( 'NONCE_SALT',        'UUJ_i}ZF_9e`I5j6Dg A#$?9j4R33YWlGpheyVF{4$.U!xm`[;[)NK:~<7hPbwNc' );
define( 'WP_CACHE_KEY_SALT', '>fB%)k4lg*sB;?1:60|F$p jaIvu;5RjTJ7Ae+~T5n>2b15Fh53@3<y1kJ=vev[.' );


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
