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
define( 'DB_NAME', 'storeph' );

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
define( 'AUTH_KEY',         'An]KZ<A%9KbVsrE:X?y+#?>;V;1<pgfP[z`~/T{sLf8~,.;,Ptk5Ze &:}}?#y9a' );
define( 'SECURE_AUTH_KEY',  '4dcuo;Zx ]`JdalozI=zkg{,/k<&a_q]odG(<j}<wR3v7Ta}:}x!V-)7EFl09EZ$' );
define( 'LOGGED_IN_KEY',    '!VPHj!ENqn{J[F3?5{)r<}-rooLa<Y/*>>A0xMR0CR@0?18:3fuxM^|m9cOtGd>z' );
define( 'NONCE_KEY',        'voX=|5]yt  cc+,&U,P+~_(aHBY<Ew&z*9r)AA+P_l5qqTzw;)}B)YM3T:&$sur+' );
define( 'AUTH_SALT',        '7NnNyk cR,KClcSu6PdSG08S}8(XJzst$QC4Jy<eb~EVHUHa3{2cDKyLQC_Cc[sL' );
define( 'SECURE_AUTH_SALT', '2Lw>bL#rrWGg/Jp*q8X3Rj])vqz&2&/o|0.)s)zWR&~:eFDbI1d}}@e/sJL2gSph' );
define( 'LOGGED_IN_SALT',   'HT%GX5@$5KvC8g07Nr;;eN,VzXZ2h6$(83p4wV2PxASbrBfwfH8!PnZ#.Z<%/?`L' );
define( 'NONCE_SALT',       'XOUChvC40K :OJL)O=)slCwu(}@i@T~<9(gZH`af$IhuKh!GLW47tqiah+DN|pKg' );

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
