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
define('DB_NAME', 'kiro');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '2o T0*?Qx4]![7(&l|wv[!-e@x<_aD)|}Ur9cAg/2-T;a/Iw#|C#_-D3^:6nv3YZ');
define('SECURE_AUTH_KEY',  '=vK=TUGA+(ZtkJY-$PWx`=$6A1+q]8Db](C:6kMw4 SFz6Lj{*Zl ^$-D,1./A+v');
define('LOGGED_IN_KEY',    '*zv{@6|rlskkDsR$t[`YYi>[H)3nu>Ckk?K)l|qW|~pH7cCUPkWu^UK|u%.W7tYJ');
define('NONCE_KEY',        'BVEq6WvK:YB5LaC(lVttty0MfpR_<?])Eo4tuV!<gCzW1,R#!&Uj8.rn2/CZ/{]x');
define('AUTH_SALT',        '|6B$pv!~-@_5=Gw<lP<49_,1*yf#-4NPqoW<n(,xv{q:$~oz]mf(<`IfEDyEPKu+');
define('SECURE_AUTH_SALT', ',?vnDvbYlhwa?-PUTF2s]yXe-%j=DwiwOxs%)G:-gm[1-vdMGkrd2!zjdN.>0mfe');
define('LOGGED_IN_SALT',   ' q%RPa@WPJW25x@W>z&>n/.`8VU laR@ntFyL<ZY?gF}BdRt|soRtE~W3+cXl4:<');
define('NONCE_SALT',       '@-M7Erb1%l2 v*{PoBB}d%@xhh-n]GpXT4W6O~P<:>R]*;pU;YQ%u0W`af~{}g<-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_kiro';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'sv_SE');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
