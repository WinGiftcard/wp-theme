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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '^o5vAT+vA&z?);hDnHWR.P,2moiaa8V{!1q>a./v]lfWUzZq}m+wV)g3wAz}4-0|' );
define( 'SECURE_AUTH_KEY',   'n3vIGU4H^;[t.3pHu$GKiXL:i1;Hw]${F Q7_7=/>m8V~S 6B1.K`~ ,A;5}~>#t' );
define( 'LOGGED_IN_KEY',     'E8$=yqzm`sVR/7$Yi`NvYvpvi%JDx_o*bu&(BZ+4]j~OM D*ogQx[D|r*]jZNBnU' );
define( 'NONCE_KEY',         'ijbuw=&-7et-i+~M#.mRZ[`AA0NASP@D)DGHJ$|4pWhceajxty)>YdS/ep|j-K1;' );
define( 'AUTH_SALT',         'K8JluDsn*DKB0)0lLse=l35G|H+OK$X_xjvfmHmS@9H],r7IY%Os,c_|MErs]O=E' );
define( 'SECURE_AUTH_SALT',  'f`f7r=_q17,qL-)BRW_9~HBVIySW}R /CH*$v)^G3=f[yeCiQmOc_/K_L[hr (e*' );
define( 'LOGGED_IN_SALT',    '[jByHq6ik{}YK%Xg)K-?UbC;{l6z*P<d%c$[Okz-=#k0]Ld`amQ?^N$OA^bx_r0H' );
define( 'NONCE_SALT',        'f%&(>IlBg?R *F3qodSTLtJ$6sXMf=C(=`5Du8X0fKJpJ_QyZefEZ=wRR;bJbvq&' );
define( 'WP_CACHE_KEY_SALT', '3#cnep 8aSvzS@Cb},GDDj0~Cy<_zq`f$Q#,vqK l(F~`Q9+H^TRpS?}U{!5b`!_' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
