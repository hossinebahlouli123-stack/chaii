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
define( 'DB_NAME', 'houcine' );

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
define( 'AUTH_KEY',         'R6O~A@uVkc[R,v6;h77yA!,aVbLq~4,e;6%+fZkS`wP~$+tM_8M[IQFqS57 ySJ$' );
define( 'SECURE_AUTH_KEY',  'zP%7VNo0h0Q|$=7dVY<kpG3~Gu|{yRF t5Skb0tP+uxVz-dLm1T%MFY!Ch]>X(NH' );
define( 'LOGGED_IN_KEY',    'fB^BW.>0r?P-/&!z1ZHI#jK):erJ-=FVD9t7(,,7?H=Z?F!M;;6jS|dGJy.+lf2<' );
define( 'NONCE_KEY',        'd|R&RIYX<M}Br,F;+m};xX8GdntcD#`Tz|(p_CMu<;9ERX;.(3MUxFhwrhR }?qQ' );
define( 'AUTH_SALT',        '=ksLR[y(1*EQs](SIZP$|{Q[V*+J@m<sdrgdjP-SY?dH/%*,}&7>St1TeC@VTfz?' );
define( 'SECURE_AUTH_SALT', 'Xn!xp|Uihm9Q3w>*}a~Y?6[>e0 {_VW9r:zSiKdU#Db{MX$Be9*PeSghix]5L~96' );
define( 'LOGGED_IN_SALT',   'QDiFAsS*$)D#)b[e2@EO||(jXGA92W4:FP^2-D:2O#l&M0n~:@S7@Z#0$^P)kd^|' );
define( 'NONCE_SALT',       '[tfZ?}V(8btIhi3?Ab sQ(DH9jh;bd11gUz,38W!njh@NFK(YJ&& 6dqFjK#$$u/' );

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



define( 'SURECART_ENCRYPTION_KEY', 'fB^BW.>0r?P-/&!z1ZHI#jK):erJ-=FVD9t7(,,7?H=Z?F!M;;6jS|dGJy.+lf2<' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
