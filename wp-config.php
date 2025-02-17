<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'intel' );

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
define( 'AUTH_KEY',         '=*bR[{G0ZZ$ T N5oTirm2,^9Ly278s2mVBmQPp7&L1!YgGwKr,xPQ``4d~nqff5' );
define( 'SECURE_AUTH_KEY',  'E{Si20,bWR~VDE@Z>X5>AWQ(|H^wVN&kj]!MO8&y=u|qRePX#@eHD4v0dOfl6A4,' );
define( 'LOGGED_IN_KEY',    '&3SnX%ER `rO!w|M=i84i|Q2,D./U*/zkIPumwl|uj+I)k[6w``Fl:]Tsr2)8`ea' );
define( 'NONCE_KEY',        '(9+Vh.E&#8%H&wj/O_88CyFSXI,oF~hp9,8P;d_8Dh8V[FVmz[5Os*k8cZ{oO;0r' );
define( 'AUTH_SALT',        'TmrwFe,U7?_TDNc[+c+|V%ANIUEv7e`]C?@nRChsXWQS44TrO*eRv0x3OE*,(Tby' );
define( 'SECURE_AUTH_SALT', '{|gXwJWTl|$I;I~3ahi7x l@lA0Z^H|$ m:/KWh+Nk+]Kl>}84g<e[xP?]sPLWUo' );
define( 'LOGGED_IN_SALT',   'QO(@Ll4|bgTu2k.r`!Xx>9)ZV|L!8]JEZ>jd 9NU+J02S]XA#o+2#?38CD|ZA00A' );
define( 'NONCE_SALT',       '9e6A.FT?<Yt<`.G0ozb4moJ<?Ed00iKXdoHxj>?qm;dYQu-v} W4sm5XG:.P-[@f' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'inwtepl_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
