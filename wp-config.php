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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'practical' );

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
define( 'AUTH_KEY',         'C}Hw5d.7{cOHtfHyiWS2G|LW@Q_@36HgO/kBLCy*|2Mhkilh<I`xF![-H,;Nd%=Q' );
define( 'SECURE_AUTH_KEY',  '=6oChn*5k[nv7Yw=`7?x-b-gkYOc`Mli:q<J$gNm&[M0a]gjU_*Wwx.IX`kCxU?8' );
define( 'LOGGED_IN_KEY',    'yT<?}Hog;/+3g$1iAu^TPqPOYvaS-;i&d@22pzSo~]Imlc+nWxl.;yprRz%C-g1!' );
define( 'NONCE_KEY',        'U$hLdCVjKP]qoq/B<N6<rD:!!|veZ$wM+2.lKrTqy;t-cN<JqiLPY9y}x]<}4^jU' );
define( 'AUTH_SALT',        ',Yx1$jjRpn?K=H^J%#VbpI8Eho|9MA4s*/)narnP ;KZT8F{wCz!JKz+qke43kcX' );
define( 'SECURE_AUTH_SALT', 's{gt8DP^Qc;~UQDS$&o-abh$E}l_l5f0wIatBWWGM8|>>[s=0&c,nzFyF0zsh(&g' );
define( 'LOGGED_IN_SALT',   ']QbZ}9K&>aZn.x?YOylglbAZqPGF-MZ)>0?-6:quCD=+zq5XNi` 2/F}jqrg[RpK' );
define( 'NONCE_SALT',       'IO^.I}xV+:WRP;Yo@aWkIeHAHdjFx7jp8&zLOh f8W)_,S`Umn01J[kpS3xO3Wb9' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
