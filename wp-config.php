<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'PiKappSite');

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
define('AUTH_KEY',         '4@K(-`E|B$r~?bj~?M)x.vVcrgG!SS%0`cb%{-x!={?z&Hs-[yK;K) .]#blEXW|');
define('SECURE_AUTH_KEY',  'sm#/2}R,RkO9G+w*)1%o3#>jAOGF9%/7U3OYh6yK.:LE.vb+ pK#F>JZcKC;4-tu');
define('LOGGED_IN_KEY',    'g /*@49-xUPE[;;C4)KyCPCyHvY9b]{<p23>nvAG)N$q-@iZBt8[5!>*dUL8U1uS');
define('NONCE_KEY',        'f&Iji$,&LP[*q!oXVMnhMIFC3pt*LbR]_p/c9PRmB|vW7yD||GrJPI21<x=:$[>7');
define('AUTH_SALT',        'ti+V;?M/u+&]^3b-;E=VbMuS!lqBA/.iT|SFfe{vVfHUQh.HC)yspI 0T_pLZ]T|');
define('SECURE_AUTH_SALT', 'DwARZzkY$,Vo]+el+`}67INXd^u|]&P~LqgIs^8*YhC+vm50ce=5wK=KT8P]k{^|');
define('LOGGED_IN_SALT',   '@L6}XamLQ<j=,wR#-V{9i;<7;kaCd0WFm|I_cVM,:ay#w6$%-X91C06jx-W?y~wJ');
define('NONCE_SALT',       '@gIB(nv.:E:`/UGOG:o#1f.DS31>Sa84[+4[twhNXX6p|jdM+K5%$W|dUkgq!L%l');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
