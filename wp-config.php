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
define('DB_NAME', 'fotoshooting');

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
define('AUTH_KEY',         '7XY(G2-3i=6Y66o_>AkF_f.&5&+nuACrY54TV>gbg{+Tw%/Y~!Ulsk`Zo|RSyH+@');
define('SECURE_AUTH_KEY',  '(!#T|aLqAa|Znq%vtoNhL,r!g^gW+*X/z,8-6XH7o+P sTh`i&S1FFI?k5dss@bH');
define('LOGGED_IN_KEY',    '*+5)D@fV9<j!(Ed22WviOjxAI|A5O)kN<P ^vGFDfnAd:icQNJ@n3o53@fS[lZ^t');
define('NONCE_KEY',        '|M2.hNM0G~OOLlMXeC2,-Ai<i|uFRc%[z8;M<Gtcb.)?pFC&mG-6G`YQb)EX*Cf.');
define('AUTH_SALT',        'nG+T+F8sNje@2q`Pe*-M!V5OU60v* SW++4Tyg)N&8h|0[N;}5_vT@=^Pe:Xbuu8');
define('SECURE_AUTH_SALT', '+1FVx2lz^5,(hs%h6O]?`do>h=5-SC2[KsDC6M<PQ70up9>D`m)$KnjQ+J>yVmQ#');
define('LOGGED_IN_SALT',   '*;L,jXB`RSY~iVa{~?.zTSE}GulK5qL8FWqR1&9riE|u+-3MhL*o8zD7]>MCH^L6');
define('NONCE_SALT',       'uzgn[1Ajuix+RH>KafulKD`/S6+)/A^_$X(0/uGs$wDs%2iQ?Z8J)-4?Z#<tdmjH');

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
