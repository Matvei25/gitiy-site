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
define( 'DB_NAME', 'gitiy-site' );

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
define( 'AUTH_KEY',         ']lq=.KMiJc)0W4Na3ajcy{5UHVQMz*aZS=|NP>d$~%S@3,yb7T/OVFE!^}0NLe3a' );
define( 'SECURE_AUTH_KEY',  ':6%wy]WxQlED-coI_Y-f]4W?l1:d?))%:n{w~G@R++PlDmxI5;cmG9I#Xf7:7T$!' );
define( 'LOGGED_IN_KEY',    '|>*&,V=rO*4bN+4lz# _2T>Z+A  $t.k10+n?K_euAFh!w*^?osDX#m7n0[d+J1q' );
define( 'NONCE_KEY',        'wPyDiZ(FN}HXos=x m]: >@jM7O{i6EN)@pd?7n*)_jj2.1K>R9F/g,7oa:d@rN$' );
define( 'AUTH_SALT',        '1`JCYkWMIngjGk!KnBJRgaA&6$,FFitO~~iO]$ &0.3GMnA I6H SYRMi.YtC}sq' );
define( 'SECURE_AUTH_SALT', 'oPNAZArnFYUzB@I0)`J- b=j6@~7=lY75gD=Awn2Y@I95advrj/rIZc,[|eR(f_Q' );
define( 'LOGGED_IN_SALT',   '3$UE LI{7%:=BeZKY;E:6/bH%u^Bb6feYKf-+6?+pd0G=nQ,,*QaIV8Z7&.wzb|h' );
define( 'NONCE_SALT',       '~Nc=VY*{{L9AzI7pJdrw4&8:H2+fU%v?vN#g~,-T/MAYA$kzC4%Z^$@HD6!:A0i(' );

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
