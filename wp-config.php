<?php
define( 'WP_CACHE', true );
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         '$~V-Z.-pk4scv+Utjlr83%_%y%cI-H1!w{pQx.bdQarPA;SgII[Cqn&X>xN/JrsN' );
define( 'SECURE_AUTH_KEY',  ' b!z,r~<@A*Kfg|bMQkRpgf/mKWt sur(*Rs!I9Mw+*ZZ6/H j@#[<@sOM;U PiM' );
define( 'LOGGED_IN_KEY',    '}`Oz8Gi6>ThF4jeO=t<mOf-pO0ms.7J5PZQe%A3s8?Qw9T{_z49OV]CbF$HhwC,O' );
define( 'NONCE_KEY',        'oum{>s/yJo6P4{l$}F(67^(nH.%ntkA-GQc_Y:anWBWXyA[lor3A9&IZ&rXvkbMt' );
define( 'AUTH_SALT',        '5=7-L>eSyHQ@><^<qV`Hn0<H{-dtq}PQaX:S|uLYs7}C]XgXZY(vVj;zg_DP?fPu' );
define( 'SECURE_AUTH_SALT', '/xHb0|(MEem&YXov=hGjM*uHd&gIM^Hlgfc#hT-1M$>vQb&lohWuBt+k]Ic.iz.D' );
define( 'LOGGED_IN_SALT',   ']>#tN?>&05p;&3m_g _N2;v5[1imT {7e]JO|*U0lh3w1s[DqA@m6Qd5Tz#=ZtFK' );
define( 'NONCE_SALT',       'x 0rW|3|1{7!CKT(Svio?<j,&l{1m99/V>B868wS/D>+{nnMJv!Dr3zEXY{6,5B9' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
