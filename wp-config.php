<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Ui}>QS  #<jo cG4]K+y}i$}LI#UvA}Y$)+[PMZjprCCY@k]!_]2o&Vs(pPUdoX_' );
define( 'SECURE_AUTH_KEY',  '/jk<ytOkGt9=8t?<4n*8YGJVQT(?n1>C-do>2v&XndX5_us9T{UqCG_BF=efhRU#' );
define( 'LOGGED_IN_KEY',    '1xa[!6KBC_uA#Oi(TXb]ck,k.1wX|7i_u+RxW6}aQ2|eFo&>NdXg|f?_q^cHa>,e' );
define( 'NONCE_KEY',        '|H:%^K>`)9A$L!-X }^By>)+=C!f(h?!Pdk>b-AKdbd1p0o8PNY9omF/MMb*$Y47' );
define( 'AUTH_SALT',        'K$F`>u>!{_GbprSbGSZ:3=};$Vn!6+g_dkky6J[#%#8X@!fig2 jjX;ypD] l)lF' );
define( 'SECURE_AUTH_SALT', '1`t#f >2h$jhIOVPq33HsEL:wEv|_D_1wW&#77TX31f~:%ZKy8-Zp|!^4a@`>4!v' );
define( 'LOGGED_IN_SALT',   'SM_)JHA]6EZY0SH,PRsL_0^^R.cNOZ)VNM6b91QIYasHfYi4ID_C-#gjZoNms/|7' );
define( 'NONCE_SALT',       '7#I}B;6Jb0]&d3};(XR5,VTdR=&C7r_Y@BiDT))ICRW7+:U#8oh/9+UA+:qvaN&w' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
