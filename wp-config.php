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
define('DB_NAME', 'db_equity');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'j=d&:nDlf;~iL`/]{!EdPEhKi99uso)S?ZWY;_HQmW}Pj75HgCQ%|Bzs+hi5OxjC');
define('SECURE_AUTH_KEY',  'IFu>Ffe@^)86-^(:3C:|x0<<$N~.Hvz4k5-pXQ+lHi7qsy=(F5V`}!/N I|$B9,W');
define('LOGGED_IN_KEY',    'je^Y8NYg24_a-=dI[Uq>~/2c5LO@mw}ZN8f Q5IJjtae(Y;$]7Uba/HaQ=$G/W~5');
define('NONCE_KEY',        'o<d-on:5?<xx1V>DX+vfX^W3+pJ~LRU.Ym;b, _Tx:j1 C&1SmLIkLV3&N&m4~Td');
define('AUTH_SALT',        '$_8gKStU4MLg>?x^&Q<M!g^?]^Hs:sifZ^-5386b*x9V@=8l*sX&uE>kV}#|!vg0');
define('SECURE_AUTH_SALT', 'HCf6ii&)$hX@e0qZ4KnS|_FXk>Yk{T&$|@662u)^KR(xK 3!h?N f|,jY(gDI}IM');
define('LOGGED_IN_SALT',   'P)@CxV`?ff sJ*;]B)JSGdZ]b7&D7Kf/fP^L)fZ>2=<}&F@^%vhhK8+@[,qT8=7E');
define('NONCE_SALT',       '(!H5INI,(IGeU~dl{1^!Ox)TL#3g!%C%eQnh|5@:<U72WpM7NCwnJe1Zo*NT)c@=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
