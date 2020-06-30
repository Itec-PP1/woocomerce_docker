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
define( 'DB_NAME', 'db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '0{G<fu/E/z%lQ!ob$>&UXJ3;~SgDi?g)$^gYSFqNs;ra/+.+qQ8Q`;;.[M [F6|u' );
define( 'SECURE_AUTH_KEY',  'R^4GnHP%Kvx*BioFzlS1W%J_&:!2br=y4@*0/%u|_q%8iK;15nSD%3mhEdRXW.x-' );
define( 'LOGGED_IN_KEY',    '6nLTpas2Z_Zb[!#Qj#)HS_TyOD6Eln,- ]u>%b-FG$Z;n0V^2mII=ORWJ.X]ly7q' );
define( 'NONCE_KEY',        '2 tQND!.)Qhd=NNC;(@##%X=sMd^kn7O-BW^(;8guGw!ez1dB?pT.$/|2IMLLVt%' );
define( 'AUTH_SALT',        'J%7uj/RH z$ss$) qERvxH(&qoN{ll-q1,cVuTYeu<xm~8zKCkDsAF]>~,/E?%WS' );
define( 'SECURE_AUTH_SALT', 'oW92n1GQxy/!f,FV,,,q_lm#h}m0}mva.MOWH=x*Gt^Q6.G66?YOOO76?mgc]+U1' );
define( 'LOGGED_IN_SALT',   '6KL7k%C>SiIV7V#-zj};!zGq$r~dPb..,j3;O2GQ|r_Znp{0g%d)C*,d]vgUR|zy' );
define( 'NONCE_SALT',       '(k}YIkw?BqcV~[iRgn`C7ebg?>/B,q[1|,-PhDL*@O[gM6iP~(1BAEzi.m&U$b?w' );

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
