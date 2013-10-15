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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '1%IrjN^#5NTMJ IEDy`mBe l)|h(]1rt;yu$NLWu Fm<)p!mKtDx.|w!apWfCKVZ');
define('SECURE_AUTH_KEY',  'PGu@rTVZIn6PJeW@|M(Usy#`fc$f?-*Ob3vn[WF& SWwYwj~h_d)Zm@!m7y2.+/~');
define('LOGGED_IN_KEY',    '`Y&BDZ+C+kW`HiK_OzptfdgSzm/^-*QsoVV:{$Xee9;I*2}82VJ9WZ/D>%2,fx4b');
define('NONCE_KEY',        '@`r#.)p98E*zw6]F+FS_Akoco>L+gBg&n7@M%,KOslE@rOvSm}.!-c9(v#2a&|,V');
define('AUTH_SALT',        '^0v6^-@>n(XL/9_#iV@,Z9(pI5|ja>KNUiv.Us$rj0/+RYmgRvv?]Ee}vC/I--@-');
define('SECURE_AUTH_SALT', 'f66Gg;(,QeI4kDkdqv1^e ?XQO;RK8[l9S4sf)n0$(Aax$CR4-]H#XYMv7b_} U[');
define('LOGGED_IN_SALT',   'gGvm)ijL0,a8u|jm6|q2YXCiR_uu`a#0-P^Czc=$`qQpA*1ZkiSZ)~,0:|[vcDh2');
define('NONCE_SALT',       'SIE[@@!m(T<XBba-NYGN<s:;__i4cZpCDirYL6J:LS2lE|_!~:8 +J9rHr J>:YZ');

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
