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
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

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
define('AUTH_KEY',         'b|W~z(h,5e0ZJw2~`+b5K^Ii2U &>qx2xIVV60 s$t-$J`HL?W^?57Lv}/tf_Mia');
define('SECURE_AUTH_KEY',  'F3{!xj,P!`,/.9U3?z[+>]mhM4sk1S?H#_-C8KUAEK]}>KsWAry10{rn;3j-7Toj');
define('LOGGED_IN_KEY',    'f=mgGd+D{<So+~ugvR7cx#%OZ&7ZHF!:_VcQjHA}`LGc#H;hFp+,+d+@N.Fvf9vJ');
define('NONCE_KEY',        '-]6K[W[m9r1Kc+5#25yUfuX|0T%J Z?M11|irEw$o)I eCnHp#OfS`9} |sTg{Na');
define('AUTH_SALT',        '{pe=i.?wb}XpcJT} |&uLm9UR)fWr2N)PAaO4-Zh*9}$m7x8t[f{a/&kII[4b`47');
define('SECURE_AUTH_SALT', '@ynqiS}!Lw=,oYqI_+KSf#(iLjG46Sc`u!||-9F(#8?Xs!WftX8`9;J6Ug4(|}=@');
define('LOGGED_IN_SALT',   ')<)9t1<wxPPz$9d|+2>J$hO}C831ZM}W0U|dOier!]vnU?_tq$i|Aj#H+kfIIA*q');
define('NONCE_SALT',       'xZ7e:cX0>;{|9(HL3dHT&1E&yQr-AmOqc@ck2dY&f>R^y u _w]lLD=6auIT_T3+');

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