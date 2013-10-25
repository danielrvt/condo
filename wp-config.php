<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ceiba');

/** MySQL database username */
define('DB_USER', 'ceiba');

/** MySQL database password */
define('DB_PASSWORD', 'ceiba');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-SxZ}LKr|B0vpK7|g%nr7ghrX2#So}KT&[_^6iGE)g1UjJ+v-JpUWYms<{0/#  .');
define('SECURE_AUTH_KEY',  'DqKFVi+2Kjr`wJ<VA<dV7^AZ-g9>&b!vbS(`_U-||r.{&|sn^RN%*+3+|ZH&<DJ#');
define('LOGGED_IN_KEY',    't`G.b]P}NW^Kr3qO/7qsgxKY.$+p{>-H0]u:i.`#&&t 8_Dr!]Ll:;:2v~R_-&R}');
define('NONCE_KEY',        'J-d,mVJWVs{H*E>Z.ST2+&?-YybI#StPI;0 Z4LbWh:0tA@$Qg.t_TAT~8g_~njm');
define('AUTH_SALT',        '0A&,T6%vZI+f5k+7//N7t~ONL.0w-utkrLC ={u(PBm;wqrE<p* _[=|3j::<_p/');
define('SECURE_AUTH_SALT', '7L=g_( Ja* y`ZT^9=SV0k$|y6H2~7,P>rW M;kkLX8.$IoLogAMP0~w;V|<`3m8');
define('LOGGED_IN_SALT',   ':P80C>]l5IZcQj9U@G},e|u[I)+].[uAf3JWY:LjD9@IJOwyC+X*Wle,%C{b0FEA');
define('NONCE_SALT',       '|m[ns.%Sd?,{Ru&7bc%>9H3%>z=B|9iIg)nky+[KTyB9Ax>~+gC}J8S/z2~CmMx+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
