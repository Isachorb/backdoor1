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
define('DB_NAME', 'isa');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'AIkukzyL(LZa:W>2%,b#M{CbCLb89CCY!G(obh6G5cI^2&yhGLfjG?cX2h3FjE8h');
define('SECURE_AUTH_KEY',  'r@[mK3&o#,:o&ARVyJD@%8<Y-Xx|:i#[D?L+7aqx>xpS=[2$RT9yG1_ef$j$fk@E');
define('LOGGED_IN_KEY',    'KTcTZ(o,Mt?VBL.^<0@joKS}Yqm?|/qlc``,fy&`@jR@8bLOf9:cx3,H1n9NMd}:');
define('NONCE_KEY',        'LW&C<d[q1oN`)?^cdxR*~1sToO:GV1tiKw7,X]6JQ%fAiVE.sXu&D<hf?l5`(62.');
define('AUTH_SALT',        'm]Rl/[B7Nd_G&XcZ/CRlfw?@U(onkH~jk|($r3M@mh%Eir6-b[:ry@i<+wWh_5@c');
define('SECURE_AUTH_SALT', '5[-BY(r4XVl:JzE}dl`PHTujqc@]=#gr}}t>nGWU..Pa67hdY0(o:Din&D/qLG&j');
define('LOGGED_IN_SALT',   'h7c,Pf*^f%uLW5[L0x<e(5>l>6<3YPoAqu/[;.;0Sg]_OFb3b#A92@VibwsLJ{{#');
define('NONCE_SALT',       'N[8O`}sE@j%=,`hR>K U)v9=SaPHs|{Y[!.$<UC>=sS#G0t1m+c!M*^w:v[tL9fY');

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
