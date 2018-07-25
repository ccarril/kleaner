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
define('DB_NAME', 'kleaner_wp');

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
define('AUTH_KEY',         '``3#u]v#Ws5(z3w7;~-N/ai#<NDZg5gB9G*M+Gw|u!t_-RF+P- 2=;/A.U8r*7aD');
define('SECURE_AUTH_KEY',  'K!tuj~9Yh](;ci;)5~inH}[ # c@/ig{Qu&*4wK)cBfJ n#_?9LC/tn$pLl|LR!;');
define('LOGGED_IN_KEY',    '#N&q1HeEcW6./%i;#Yt2MqzRnb#Ke4_Qx`$Cu)BQ%|{ [ED1!nmoKE!EfU4jfS(@');
define('NONCE_KEY',        'PU2oka#?w&Uswl6CGXu Moa}3u,_X$4Nlh61Aw[(r]m.>41dqh!pb^OP<YF$c,{d');
define('AUTH_SALT',        ')PsY%6Yy5?0I-[PMX^$aTU[^fUkmAlhjm1m>SjpWTizv!^L<u.Z}c%+<f=6qW[b6');
define('SECURE_AUTH_SALT', '[2/>;mHDNpE%!R=V1M44+VRq=idqJ<|c5?m78wjEK3nKdP`0xHUr(Cc&/Zyu<uJB');
define('LOGGED_IN_SALT',   'T+lSA/>Vb!(GBv2HQ-M;q/|3zo*>.PXqyY#PJ;667!3k|-q>KY{-4$>H9}c/@UY:');
define('NONCE_SALT',       ' 9%`-Hl~H#s@DzlzaQp[rB)_Phi,#vg<o0>szkNJ[tsp:r3-oZ|@*[@w3#783!`0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'kl_';

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
