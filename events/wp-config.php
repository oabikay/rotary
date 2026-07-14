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
define( 'DB_NAME', 'luabikoye_rotary' );

/** Database username */
define( 'DB_USER', 'luabikoye_rotary' );

/** Database password */
define( 'DB_PASSWORD', 'Aledoy@@2025!' );

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
define( 'AUTH_KEY',         '1&fCSpS$iu[~;yFYis+L*(@4fQ~,w)mCm|&RYg3Y=}T%SNHKb}l$iYT^GcOMH8&W' );
define( 'SECURE_AUTH_KEY',  'boxlq^A)i;;@2A/9c#$EJ%8n9P eFSdFP*[Obvz-#wr1ck#-}>phb(^#Pv,TQB37' );
define( 'LOGGED_IN_KEY',    's;r*V0i{[6ZnQQqp,4<a!_%Ivk6FvWbSGwkYl/9$oIJ,.{Dwo>tnbS9}Kh*?Vmi?' );
define( 'NONCE_KEY',        '(Hs2>%3(/Spfo@P7woKCo6(c| <1CCn>ZQ03?bDy@YtVKY)X;ngmA<B-wR.wUlQM' );
define( 'AUTH_SALT',        'L}o~2d<>Ozd$;#j:G^wto|L[Zs9u &k4uJrpsU=YOU5e+ZA-?#v,tK6.l;*O;/ID' );
define( 'SECURE_AUTH_SALT', 'GgOX+g53q=t<]f+1vxO#J`#hzm!y{6XLhMo@A)^hZD,.k_kziWY+axg#%k0Cxfu]' );
define( 'LOGGED_IN_SALT',   '[5[Ny%h>Fj:-)r5m8T+Qc+|%2{7VqtocS,gCo2%PrlMEECYDYlP%ufG6L4xuUjq4' );
define( 'NONCE_SALT',       '7:kyBM+aT>^+^}=u4J_(a)DL%L@45~r=rTLyf~3Su2G!)M0-7pK5YsLMTHW&6]sw' );

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
