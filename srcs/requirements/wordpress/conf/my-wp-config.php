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
define( 'AUTH_KEY',          '+7H&oHpZOpZF0a!RU7sFP@,r;,!Aw?K*ZxYYFdTjvde}>!^Qbx+W1edL%!2o}G)?' );
define( 'SECURE_AUTH_KEY',   '_rl+Ji__4UppX!< `/bO6v7^U Lz}FYE}`$E*?F_`eerCYa?cUE;+n2FZ_??i4g(' );
define( 'LOGGED_IN_KEY',     'z?x6#?SBR5R9]3%^[89V5Z0+G<t|-d/<0>S` _}Y8I&(+{1*./rE$rJf>qa}_QZM' );
define( 'NONCE_KEY',         'Rj)/~;5%+BX]7R1foTbf2iR=yZvcow;L<y_i;|!n2|+egn)7kM^pC}.u]?zp7ty^' );
define( 'AUTH_SALT',         '7rPbD+T@B}H<5RgtA*FuUR}1^Ui(6IBFF66|MlV$9CWe@pNxZb&ef2o!cw[nbR-+' );
define( 'SECURE_AUTH_SALT',  'q;GsLlqXODe GrCcxq4vQb-EU%GHB(*kA>ZGKK}skk5?/.fm~2djV*Slf7$J95JL' );
define( 'LOGGED_IN_SALT',    ';l,$?m]T?,5n$PRv6Mr|U9iU(*=m|VlJ UcF0[t.vZ^0YmCvzaK8jK&TrQ )RTfN' );
define( 'NONCE_SALT',        'ir(CQ8F~1TBKNxnsj;Fy}7^YFP0?4TOq(3(cqA`83A`is[7fxJ!wj@(M_h~cr!Ej' );
define( 'WP_CACHE_KEY_SALT', 'zbP13A&lM39pzLCe?f~7Bz=mYyY9AQ;ImEJ5sNzJ~odh;[,0S9lB+]v[g<.sCir^' );


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

define('WP_SITEURL', 'https://' . ['SERVER_NAME'] . '/wordpress');
define('WP_HOME', 'https://' . ['SERVER_NAME']);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';