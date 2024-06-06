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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bisdi24' );

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
define( 'AUTH_KEY',         '`7WSwnH;YoU6AXT7U7SY.DT_=fl%GZk%zJC=XPViSI .WrSxJ0[kf)80:WV(?k~>' );
define( 'SECURE_AUTH_KEY',  'MqOW][6_v;V-z@0_Ge7B5~RRO|hy&d$a|Mb,By+OQQcCB.#m{h0;xNLa/,6Y6`Dc' );
define( 'LOGGED_IN_KEY',    'Tcx(O0w;pM.)rO))E(4@%>a:Q5D6)#p])U?_%TU%Hj=]65O^OHl<%ryPRI6[k?YH' );
define( 'NONCE_KEY',        '&N +H]WIRw8aIuo$G|WLJ7jJN,/QR#L%m/tilk_<wL?zg;%5,vW*QH7X>!4D718X' );
define( 'AUTH_SALT',        'k41B&=?2skH`&l7!GX/87J+^_J#q]/Nvs[3).{.0wwA26N`L|r<VXn)>QUc95p_W' );
define( 'SECURE_AUTH_SALT', '1NGxT_~]~Q^a:^1Z[FzTewEy5jqA}rCsfPz^Qg4n<M.QL$]x2&w.HE.@ei9EY.FE' );
define( 'LOGGED_IN_SALT',   '=2tfi~(8a3)k_Fl)-!hgGf-uu{N>E[]4l!z5>Y?=h^+HEch eiz9B[ Z~+{Umf$%' );
define( 'NONCE_SALT',       'PRU?Hz>[Y`_lvRf3@hOY*jB!n5Z3T*dZJ}(%}_?3FMH98t$P%aA<r T7%18lF=nt' );

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
