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
define( 'AUTH_KEY',          't%LYdq`1Ydt-P]DG%&51h9=H^SGym%G/H}xt3%QB@utzi,j7nLU}$hsfaHHmyW/1' );
define( 'SECURE_AUTH_KEY',   'i[*vEv!`sL#%MrwHUl7;@QdtVq1C^n [OU(mhD+3O[ :~mvoeY*T[gBr|<5wig9u' );
define( 'LOGGED_IN_KEY',     '8QQL3xn<K+Ut_L#-;X@u{C16gE*T^MwI2.BZ(C#gBGZ,`wb8HdrDfKe7tUE4,&vA' );
define( 'NONCE_KEY',         ';L0ro]b4OdGcF&qp|[WH0@~O^8ixpJ^C6t0A;GDX]|cttJ#zs[|n57]|!9?Ws,wS' );
define( 'AUTH_SALT',         '8R{:=a-kPV{rEI0ZqF[/=s9pz)FHP2-B1T~&kwjDs3h&RG_37ZR-!pzH0gCuconB' );
define( 'SECURE_AUTH_SALT',  '|qR;)S._c@>~q-@j[I^&=hpf}KYdZAx8cQCRxgO&S4n$_VB;[B)P55bd|eJXnagU' );
define( 'LOGGED_IN_SALT',    '{OXLe4(*}meCYm6zUeHsn~cw&Y=aCMw_h0#~##_Zcj&;|:jQp5ZLxm:P*fsu?I*.' );
define( 'NONCE_SALT',        '&II8wzeccNMZ|Ov6]z2BKHm#t[}R?J|1>=S^.)N}]CUR=;9DFdvB>N~R-4[X)0(]' );
define( 'WP_CACHE_KEY_SALT', 'a[M(z|8Lk!cZbNwR)M%IOYefdCloa{P[5UQ_oWo9*fwG*+vha@R&&UeCt_UsmNw?' );


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
