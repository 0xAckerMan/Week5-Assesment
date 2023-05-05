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
define( 'DB_NAME', 'wkfive' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'W%_<c].VJZbOe!,^Hozg.?dQ2(V+rXn_L}vQd`G.g/bX&~pK0ea@^jtkPm%GV+CW' );
define( 'SECURE_AUTH_KEY',  'W2m_7x%NOErCrf)W}MCA<I2gakkch0mUy3J@<*EVKP{]s|_,Sq]-v2Gm%0=1ykC2' );
define( 'LOGGED_IN_KEY',    '5M5PZ&=%tIq($gz`TFEIVX,@T%L;A|49dT?$;_at`6h B8GR$F*:{!G;&]HEtvzx' );
define( 'NONCE_KEY',        'Z3Xm@!,mYdt0~bydmbQ8x``VcDDKHSONKm AQ{Yv9>b6<=|Q8Ela[EG`&il`]`(b' );
define( 'AUTH_SALT',        '}FP<+_w${c*jcZO( =tum;08dJ|D]X?vD`8u-7)8.5,pfSR9bf96>?<4;1y*0%[f' );
define( 'SECURE_AUTH_SALT', 'K6]UfHL3qKwc+e$)Pn|5_U,pNN1zKB>.=?Sq{t(V-PrmES(|rJ0}`=vK,RFp*VFe' );
define( 'LOGGED_IN_SALT',   '*7w=dCMe|!aAp=J/lH7D|{A.pk;_mHu|yZBff-8ua2X==g5rCyi3X2bKXl%N;Lw1' );
define( 'NONCE_SALT',       '.xjvg,Q:-O?3flZ7mjTpv9yl]T:C9.Bm&x6bv4/>FAvpQFH.GUZho`kA{_4M~Hqt' );

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
define('FS_METHOD', 'direct');
define('FS_METHOD', 'direct'); define('FS_CHMOD_DIR', 0755); define('FS_CHMOD_FILE', 0644);
