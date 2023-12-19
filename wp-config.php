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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nextkick_propelkicks' );

/** MySQL database username */
define( 'DB_USER', 'nextkick_PropelKick' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pg?kwX[E?@h9' );

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
define( 'AUTH_KEY',         '1Dm&*=g*J6,!ufGN=8Z7O-H9e{V&xvuv:|8M|q)^7$N$-:Z/x=y|t}<GwY7<%iHa' );
define( 'SECURE_AUTH_KEY',  'UHmSzUGF+gS57akAv)6 O|k%>V_E-i:I_<1ZOf_<2x4X5>ZGIj)w@6Uuc{,|D1C`' );
define( 'LOGGED_IN_KEY',    'dic@S:^V@}pBP^3SBBkptg8,o_XgRHf$4(KJ4D|u+ug%}ix :Eul/Z:5vp.6 z%R' );
define( 'NONCE_KEY',        '[vfd^/Z{C71)li&M@94S~P{c-[uo{91l+e6s83yBzAsNaTn[#arU<7H47NQ?S}$G' );
define( 'AUTH_SALT',        'JVbPICi(Jc_~Cd hmHIk~^n2^?=Py+|&I>D}_%:rBPwE1PRuCjCd,Dh.gE86kZKQ' );
define( 'SECURE_AUTH_SALT', '@,{??=PKz|p43/pHC]]hx:dPYI j_JF|}~p,Pw9V<R<PtH!t0z@6auq@m9:{y^6w' );
define( 'LOGGED_IN_SALT',   '^n&Cwz>ER*Py>_r}D%vCuU}Jw:JkD=+QZE7XE+SPX0Tg3X^0#[97:5Qz[wCqThs[' );
define( 'NONCE_SALT',       'TDF&~;h:.{Kbjxz;9{ti5Ae@I*ruI}*loG&wXBr:|tWdo3#;`hbR^wm`+C-cV(Tn' );

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
