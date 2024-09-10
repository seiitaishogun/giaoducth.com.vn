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
define( 'DB_NAME', 'giaoducth' );

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
define( 'AUTH_KEY',         'mg3]pSae=H;S7,i$ojQt[~APN4X-N4UFq|`1)?b39/E1?bnM,eFS~_]/OmrOZ+yB' );
define( 'SECURE_AUTH_KEY',  'Jj}gaD}9oIQDUc>sV1vJQ]YnJ}5Tu@hkzQ>7Qk@LPxBF4Kw-2G[U(KKd:j,_$%a:' );
define( 'LOGGED_IN_KEY',    '|[4kY_* wU7m#cdp+|{hM4+<W`$xw~G`Ef+cq?r4Xnk/+KR}v%VHeI|FZ75`?-7a' );
define( 'NONCE_KEY',        'ermD VXz0?k3N^}}-I(1~ ! n(pcB&^~Z>OYr7uA2|;ygm],J dpl_NB U1({ECu' );
define( 'AUTH_SALT',        'Kwt$d?OpwS>xk!BnnN|2-?[fo$/s.rOMP6%U 3bS!KdCM$H*uKq1^ui,SVmPYK/#' );
define( 'SECURE_AUTH_SALT', '!<^2?ZS8xc1xr#U;q_G3YT t(w6,QD&?ZI~.+^f&(qf7gwkE!hu4 K)2mAt6/wYQ' );
define( 'LOGGED_IN_SALT',   '!VBprl68?44ZhgJAETeTc#r:p{`,y@1R1ZYgWxN(H FxUn.Zkz2#V[w*%Je?4vp:' );
define( 'NONCE_SALT',       'FqxeY?a(/nJ:4@l}-fhVSp&J[G?a0YnFuqEd)z`>B/AxKR:@)2=!u.UL3Q/1il[S' );

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
