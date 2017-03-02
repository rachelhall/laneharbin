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
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'laneharbin');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'root');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|`TO@2`@5#4cp ,b8*(GcQB}tjq:9)E5$2LOZ:Bm2Br [L`]<FpHpqa|vEM*%ima');
define('SECURE_AUTH_KEY',  'Jw@)+6XRvyI!h><:x4m1>qrP!>~/%B4;|,kyy&lh> *PDM /a>qjTuGWxY}{!H~M');
define('LOGGED_IN_KEY',    '2?_#~`[6t)pHaJ4H%:z 7+^_Ql`,dIx]U1S>,U16m^3Je1m~*,^I[(|Qtdz+2.]k');
define('NONCE_KEY',        '{5eK+0U;OeLXgAULEIn-FD-$mEKsvB@.]CcM/u%dYy`ilohaW]|mbN8*hEuTt-f,');
define('AUTH_SALT',        '5VNl}MK9m5RAILWvy<a0I;`XS(MRNvBgh9ncREgd3+gcUZs#|1EEn`syo-Ux#(:3');
define('SECURE_AUTH_SALT', 'i+kZkv1a78@CfGI|PjSfdcE|*fw0}pTN;,1qR8j=]uIZZ5*;Gqy3jC^>%m?R_[/4');
define('LOGGED_IN_SALT',   '_p(I.HxsZb]V0|Od+0oA_(2pQgz=!_]C6JM6`9)IJx3*@$@((*p y**@x&Eo{]{T');
define('NONCE_SALT',       'v>?pO|%kM@taJtz0tA2}[|JEe[mQ.v9T{vR|<7XvcUm}4x~{ax^bG7GYE-uvliVw');

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
 * Set custom paths
 *
 * These are required because wordpress is installed in a subdirectory.
 */
if (!defined('WP_SITEURL')) {
	define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . ':8888/cms');
}
if (!defined('WP_HOME')) {
	define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . ':8888');
}
if (!defined('WP_CONTENT_DIR')) {
	define('WP_CONTENT_DIR', dirname(__FILE__) . '/content');
}
if (!defined('WP_CONTENT_URL')) {
	define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . ':8888/content');
}


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', true);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
