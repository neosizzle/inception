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
define( 'AUTH_KEY',          '$?u8R%<Ois.}}B^*jJO8Fr8`5X>0*eGEp-5o|Yp>Vd>A&=Bm2 E,*(j_NkGgl 3a' );
define( 'SECURE_AUTH_KEY',   'JbTU=GFb[<T]c$@C5F`Nyw3BNZj>?DxkB<<%mbFYN[IFeKmlJnaSkON}O#)ID9_H' );
define( 'LOGGED_IN_KEY',     '2,Byki~hGN>:$OvLQO6!OHOFAKD[f=bLkr1ox-#_4F/X67eh_T#,AQv/QKPfs1n&' );
define( 'NONCE_KEY',         'b&Hlx;v31$OcP;;D XHk_w,`kjc/+/X{k];qwp1F6Qi2D#/<kSrPJ@y22-a[]c>|' );
define( 'AUTH_SALT',         '+3}l-:is^;Ov/{?l6Qn#e`n*_1s@otfP?eVc=/qMiR|vm}W,g:kg+:&[I/G#,T&g' );
define( 'SECURE_AUTH_SALT',  'j*R[iZ^EZM*)aMtlR!zR*0^tGg[Yn/NqOIdeHP+W750.KM3|S`u+N(u^!R]O[w}e' );
define( 'LOGGED_IN_SALT',    'ufG)H=/^nS}+cbE X;FvaeLPO)Z3g.O@QeltA;?NcaDmyy/IfOH9r&~%_k~NOBr8' );
define( 'NONCE_SALT',        'rqVcL`6`-M:u3Mpsp[y1jntnU08 $@< 2V,X60&TPT)MD.#j}zV:ESOvrj!:fZ]b' );
define( 'WP_CACHE_KEY_SALT', '?iGQb-RH42{Dbw}#wzFrwSPt1]{$un3XTQ:wc-/GR0ZPdU+6C^bH;^OqN/#?JM!r' );


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
