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
define( 'DB_NAME', 'zenweb_wpv8' );

/** Database username */
define( 'DB_USER', 'zenweb_v8' );

/** Database password */
define( 'DB_PASSWORD', 'QDmJ^W(i{xSRGOkb' );

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
define( 'AUTH_KEY',         'B5KHTaFG=?fu$PK_z|-v_ak.*i3L-*%r?@[yo^?(j`)~oS}z7fjfuAc&,~<vu0KZ' );
define( 'SECURE_AUTH_KEY',  'e>sG|h&:-+YX$~r6R!L9DA@n{GgaE0rS0{dv4CdXvI+4|_0@Y]h4w/O>bfG.e1eq' );
define( 'LOGGED_IN_KEY',    '|@]y^F;E/O7HEay`.en`QO x:0WRA +*2S-t`k2xJd:0n +m;y=<NQx<41a3|N&C' );
define( 'NONCE_KEY',        'ZXKw(?V6<${fK`s$ %Bx;C|U1}5nxO~d[]{iPc#@MKcQ~QI+$p[SHribNOQg-=xZ' );
define( 'AUTH_SALT',        'Q@ttvboB]e~H/g!7m,+d&$YD$%+)~+N=ld06G0AAELEzyFk`jVg*I{5ugyQj_XYT' );
define( 'SECURE_AUTH_SALT', '-e*>Y|~1I$8W4~{bl}Y&:=4/v=?7L(5jDU-*;@4UHakZoo4p^tZzKS$euVm/YEl0' );
define( 'LOGGED_IN_SALT',   'g-7_HaR3uN#Cm@DD4`Ud$}ie[Vh+rL[%LdjXqSR&9MiB^8o|_94[Kqq`/X[Kc#~Q' );
define( 'NONCE_SALT',       ')n3g%d}w?AJ-C1A8Pl6&lBELkOSb.Hgpcj_&jUKG>M`~Eu$>-ko~ZqYvJ{O)/LFA' );

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

/** FTP Update Fix - REMOVE FROM LIVE */
define('FS_METHOD', 'direct');
