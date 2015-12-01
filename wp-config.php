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
@ini_set('display_errors', 0);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'meemim_blog');

/** MySQL database username */
define('DB_USER', 'meemim_blog');
//define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'meemim_blog');
//define('DB_PASSWORD', 'pass@word1');

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
define('AUTH_KEY',         'Y,|QFBh?@Ua^wupyVO:tZUKdCnKMx$O`y#:_J}Lq.dVZ[^lpt:u<0?6?J8LIJUS+');
define('SECURE_AUTH_KEY',  '@FoDg^uq..?%^m`rd2q/-Ml<>Z%LpN|{C@nK;${|K-RY8<dbcKNs+~}Cn!ZUg>o_');
define('LOGGED_IN_KEY',    '9 p|=K[I&ki`Gw9`iY[zp#J<>.p<D6f$yH}J=Bx01O`,u KN(nJ}$!vs+e,WlKig');
define('NONCE_KEY',        'SA*$(T<tzfE7(ZBOIE|u+:W;3bMdbow@Z/nm+bKlusL+^8%i{O[l{EG{a+&Gp>H^');
define('AUTH_SALT',        'ILtz|aWb%^>i*W]U$R.LXG[dCo,[jooQ{m$TIj_+h4_`uGu_]eu`-64AvbwD*1@1');
define('SECURE_AUTH_SALT', 'CNaP2;_x;y5Fx?)JdA?)y(f6]{2jW_3t,D$61~P6}aB|JX!&gk6g@EpSF1l0+|xN');
define('LOGGED_IN_SALT',   '[vy*ZT%F_a5j.xmtP}d`.hn-R:|R;h(>Xq-5qu=>L(:qeT5Llbf-IoSH-g~d9P<s');
define('NONCE_SALT',       'YlLxr`|X*yT5KYAUdH(,C =p1O>Ik|9oTRM8ADvb0nFYtw;PQqrSb:Cw&bE+v<cw');

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
define("WP_DEBUG_DISPLAY", false);
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
