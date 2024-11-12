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
define( 'AUTH_KEY',          'tT6!S-pbB|}SfTUv;``%]{CB-tPvX~)Vk;Nt|t1aUNs0$W2Zc3i;$L}>IV2(r?8F' );
define( 'SECURE_AUTH_KEY',   'TSI5x!=Xqhyha:xE3E#8q5MYA|AGcp!^i.+{~4%b4pkR gQD9s&tjW!@,$O+*h;z' );
define( 'LOGGED_IN_KEY',     '36;f8ybo@)H>>qv$lm75(!/[}+!n!EmMW8Nm,%6F+EF;MLw|Nb_~=#(uEXSS.Me&' );
define( 'NONCE_KEY',         '!aFb8Z?0zI>O)TM~t&l)k2|5%N)Hi<t<wC/f?R-oym5 2&bX}3,ThJ62S!KyXT.R' );
define( 'AUTH_SALT',         'z%+Xq,M|Hun_Z+.-m>qm1%<Iaao+uHb+B?E=zs_tQs}3e%8Q(#Nwprgj-nwMUVNk' );
define( 'SECURE_AUTH_SALT',  '=,LV{._@|<Sb]T_Ds9ba &-<U Q;lTFU&4{3uVxS(zQlvTga:zBI&J1G~OQA@MI?' );
define( 'LOGGED_IN_SALT',    'S!Hx~>_.YfQ(RwS`?YLAz%E L%#`np$wgug%4GH]jT`Q3~7wNo63?q27!X7tzn%r' );
define( 'NONCE_SALT',        '0c#&#R{7TxdnO>wpc}8gg`.I*xPV&]bDg9B9(&!P7RfIP2u95os8IPTa9mb@G|sf' );
define( 'WP_CACHE_KEY_SALT', 'zy:eL20Z_~kWko,sOd;^GY:)%C]{kK`Lme/ 7`#eHE|3U#ER?)Bi~VBccSh[lXf5' );


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
