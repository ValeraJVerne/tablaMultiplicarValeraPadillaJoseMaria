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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '&]BVk?vsYc<kd}>UgCU6EQcU*x}6GYK%kemsLu3&_p`4#Z$I F{C`SM3Ku[eT}+V' );
define( 'SECURE_AUTH_KEY',  '7;Q$b6<n#%GHpAz:;!uw)K#[Wa|H-%U0WN[M_.Dg_PR$dt96?8#;L$Zz4LoCd+@l' );
define( 'LOGGED_IN_KEY',    'vF[=zp&Qe#cC;IEtq/6s}K!O5h4p=YOH,ccP.726AuyHAY]Iv1G#.WBYOI*{CuV|' );
define( 'NONCE_KEY',        'R~83b.C)bE[cM<lgJ,CY[M+>&bC~.EvACdpHsv1? *NWeubY:`tVyHF!Q0ub^ex2' );
define( 'AUTH_SALT',        ',^Kqj|tOhBCU&NXwoy2QqlWeGCXx69C=%#IO*bGk3^!>5!Q=g~*vgf]A^aI9,*v$' );
define( 'SECURE_AUTH_SALT', 'M6i70-X[XwDq2P^1Fi;f&msANMsbR[ <8!H{-&=0it[2*Z7+:9>;b8(V|/:eH/3%' );
define( 'LOGGED_IN_SALT',   '<{~7#s&M=!QQ4?PeV2.=_!5^CV*eGY}7M)`PS6P@p!r5+HsQYh:?EM.%k],9P=)z' );
define( 'NONCE_SALT',       'V%rq=@z!P9%wdI.9Yk.p7dThCRF?{t#dLQG+wyfwm:!dHVtT&BS.QRF$?tuv^z5d' );

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
