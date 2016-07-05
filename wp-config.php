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
define('DB_NAME', 'ingrwf_rad');

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
define('AUTH_KEY',         'f$%50/069#g>7T;gm&x&yM&o9 ,XQI{quo0#pt0fm1,3%>4K/+$xM5uby2MmMw=B');
define('SECURE_AUTH_KEY',  '0<e|Ag2f1y.~2f+>XCFs%mWgxN6i5eDH/3#n6w@|CE7|{;d]IO])s[UPwL,o>LoO');
define('LOGGED_IN_KEY',    '@92*yspXGbMV<BGD ^y!`=Uy-4Lq(>ysKEi4GqdjE<4^^SJ}h&&{pXlu/qTFT:)o');
define('NONCE_KEY',        'yIZ*EI:!KiME<d,`}kw6/rYziARQZ`l*9j[C&l@B9*A<rMajwIFc8U3tV3Uqm)>|');
define('AUTH_SALT',        't#rzYpb; 1YRINnJjiuvWEF>_yM5D#n)d9~IvG_K]|}nMm{O&$ADt6m>+R([3a(Q');
define('SECURE_AUTH_SALT', 'CL|/LtN?A*P.F`n?Id;U/I(mb^?%m./S>s=*fN{n*&gc-nK8mD- &<do2}`m^ZS4');
define('LOGGED_IN_SALT',   'V&>n Fa8 KBG}lHW#~nZAOU84py./fjl*=h}nAWK2.Uykq}gt%{~j|mTMqH|~+wX');
define('NONCE_SALT',       '>FI.tku|b_a}[Hbc^cC$/3AGw3-If;N&xd}3P@O^E}Oi#Q&:FUb2B`:OZ8|U4Gk5');

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
