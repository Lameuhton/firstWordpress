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
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '3112' );

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
define( 'AUTH_KEY',         'KGjcVBG-hGZ1UDj:B#[<(~#04:^F1,Bl42dpfwbnDENmRMPD?yGnl(616oa#M,f,' );
define( 'SECURE_AUTH_KEY',  'e>4q/JmU_#igVseKfI_R}!Q wI7buo?+XT@=[+xz<.FA&}!g&),mczqS$hLSGssy' );
define( 'LOGGED_IN_KEY',    ')(7:5I,St$M0Fp{1Nl68y!u2wy=a;uV/9spdgne6n(-b5tY9UA$H&4(_@ K=!xK-' );
define( 'NONCE_KEY',        'Ti O68ylvAB<QSUKJ!O;)0g7=g]C5nZ^v?U|pb-H0!.J _Lg{/Eh/5<? 3IH_:M9' );
define( 'AUTH_SALT',        '`I3CGrLqjV9]a}-C~*nn~QQc/X(E)M6|P4dAy=QB+YHo6s0[@3vB86OjZ]: *6}R' );
define( 'SECURE_AUTH_SALT', 'wBY{rN&(ObWp>;8xO*()[4`T=-@a-uG6LKo4UNWw&{)]:/+TY|E%Z?vid}=*%Ole' );
define( 'LOGGED_IN_SALT',   'M[mwd-qdV,Gu3q17i&AB%~ yq<=aCsOh*_esCRLEE<boa5JvVu&R:|b2)-zuoW/R' );
define( 'NONCE_SALT',       '`58z[tk%1LAT6+g:DAoLFU6ml8I6bSUODVwT+tc72#;gGk8Y=Gjt$.i`2NzLUD]n' );

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
