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
define('DB_NAME', 'youralle_wpps');

/** MySQL database username */
define('DB_USER', 'youralle_wpsp');

/** MySQL database password */
define('DB_PASSWORD', 'fBM4r51?%?HG');

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
define('AUTH_KEY',         'i9ayt(.<2{6XbcqI,8MDOh1vKUp1<>umTh$:E-:%+lKUW<0*[,~V(`3*m1Teb$_&');
define('SECURE_AUTH_KEY',  'A-?1{yv/%M5,WFZ9[}kdW18@BW&vy-rBr0vg7)RwF4dx=]J>P09K|H~!Qz1jrEUS');
define('LOGGED_IN_KEY',    '(/jIP<c!MaZ0[,rM,m={T<8yX/ilXxzU0$usd+ykL,_Cq>j,iku;]3OC[K-Q-F}O');
define('NONCE_KEY',        'LymcU/tlhFO7_KKrsadH6Vhy9*K$Bui{I<9_rW_YtBQGtq?.fdt}mT#v2u9h(8i[');
define('AUTH_SALT',        'DPc>`2Q>gJ]#blpo^ZPC6x`z,3V1Ww7s[#G$H`(p^VzksQ>-5%%Gj~!u^U>Li q/');
define('SECURE_AUTH_SALT', '2PoP6*89l~:^rN.i+4V/^tAqX?&`Z;GxQRR1GZcV7_m/~jtGgJZ}mmlea!fd:KyW');
define('LOGGED_IN_SALT',   ':~K)x(!:{4hU;yDlBId{ZF8K)~S{m_duW<6rm,%..r2k$0C,s*4w9Jyp&P{VJXMR');
define('NONCE_SALT',       'N&EH<gOk*+V81O#.JnTP4.g51/r^RuzQpD!=SK!~TN2.vw(Hb1Y~jbqi_@FXJ:%{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'uralwprs_';

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
