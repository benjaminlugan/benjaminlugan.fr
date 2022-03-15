<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
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
define( 'WPCACHEHOME', '/home/clients/0a5dc0202261bef0fc731b77ebfcac57/sites/benjaminlugan.fr/wp-content/plugins/wp-super-cache/' );
define('WP_CACHE', true);
define('DB_NAME', 'nj8ni_WP732880');

/** MySQL database username */
define('DB_USER', 'nj8ni_WP732880');

/** MySQL database password */
define('DB_PASSWORD', 'zi70a7pJ5y');

/** MySQL hostname */
define('DB_HOST', 'nj8ni.myd.infomaniak.com');

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
define('AUTH_KEY',         'E54}A/r?v4kLycaWm@H?:AC|HN:D7~/V_Ga5+`{rQfvbQ*MY,,okRBGU#~1imn?!');
define('SECURE_AUTH_KEY',  '}bkNo2LTdO8O{tYPuYx<x%w!xzgM^6A:;wgV!89Jj_f.b:43i<U2drslK>,5{&rm');
define('LOGGED_IN_KEY',    'il=q{dm*iVaiG/*b0hh(q(Bm=^jan,uLqN+gY;M,.V=8u:{(&32AG(uHZ3Wi-G-p');
define('NONCE_KEY',        'w&P<5XpUsCK+?}d2=jLz<QD~G0~=;!YNt_&|,!j<GRTFc&hOU^yD@xOzwbTdg*(g');
define('AUTH_SALT',        ':rocVRtf+b(6Rn+ZPoNklq_ZJc-Gd#Q3~88j8sjD}fA5WE*d.<,z=jU0?%OQ82^t');
define('SECURE_AUTH_SALT', 'e)A;D#UoR7,V2lRR{E.#<UP)7Y|952MC-0&NRw70Wd->felXeEo4@5w_c5}:A5;}');
define('LOGGED_IN_SALT',   'xF<!0u*%MOJT*a^=AT?}Lb#d:;ErF6U4{{6?q5{Wk)k2ZK3`I6dM71<S:JY.@n@8');
define('NONCE_SALT',       'scVctktIsEsdCs+Iwj~~n*fVw^NWtTgvD6Y+`eAlbkP#BX%*!Y/E(KH5B?&6k7Ad');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_732880_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
//define('WPLANG', 'fr_FR');

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
define('WP_DEBUG',          false);
define('WP_DEBUG_LOG',      false);
define('WP_DEBUG_DISPLAY',  false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
