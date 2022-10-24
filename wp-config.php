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
define( 'DB_NAME', 'cursoemvideowp' );

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
define( 'AUTH_KEY',         'GFMw)/[5bD,)qfjIxR*UJ1twiux(4ar*Nw<yh}fgWdZ#>nx7V%LK@Eub/Lj y*9P' );
define( 'SECURE_AUTH_KEY',  '!t FJRxd(FD!h&V-VfD]-a=~robceUks&K!NY8>*^mhBI8uYEED)Iu|/K*,Z=[hd' );
define( 'LOGGED_IN_KEY',    '-7F1m}mw7JeLEn^2@DMcTlvl7sOo}9Vw,?JH3!_dl,sP6dn=;spb>)GLLEo2*mac' );
define( 'NONCE_KEY',        'qwXwyJL@-UHPm/t0f5Ya?-rxW{j3F$P`[c@5beza47Z A O1v$=9t(KNego^=mod' );
define( 'AUTH_SALT',        'Pk[t3Qf++=gb~n11f0`7;N4*znTn@!>^ZjZv.ylx@v.pBMg8Mt:(g#H`C-:/W2?T' );
define( 'SECURE_AUTH_SALT', 'dV MCQA@DE0.;I@= ~|9~1 ihY1N9$;I`Pfwr{z>k{o-mnA_b]vJ.af@o5itsE0O' );
define( 'LOGGED_IN_SALT',   '<f^),~vg{6Z9oMWEn?:Y)sr 4^5@(@-+XI Zwk$62CAwJJ@e9r~fdNE%UUnGL*li' );
define( 'NONCE_SALT',       '>:izyJRPG0b$!%iA~LuSE !-^1A)OgGRy]u&(YSXz&8B5@W&S@Bo)54pwoxZ-L0L' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cev_';

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
