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
define('DB_NAME', 'site_dev');

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
define('AUTH_KEY',         'j=O`m@[qFevCuxH&a^Q#X4F*NoBtd-Iucx+[9|3ID@0~a+$<uu8a[vl|!{oIy)Us');
define('SECURE_AUTH_KEY',  'iqZOljKcqE=$<=y`OJN|M$tQ-H~t!banR*0+o5Yrw?a$dZ}~<fX8*;CKkmqD=F[N');
define('LOGGED_IN_KEY',    'Cm-Ft9s{2jvkxO4[lgs?|R@+}n+ghc8Q+1S$F)4D`?$t$C`bR-Fh>y&=D*TeRJQ@');
define('NONCE_KEY',        'U v!:l4|&hA:U-t4&|,6I3V&9|;iM#1hVtFDc9Q>+H=yKsE<B)8c%B!cBK{?lKc[');
define('AUTH_SALT',        '@4EF])b.;7BpY<uK.fzy&~ }xW= pq-Vz@3Mxg-/k![Q>2w0fYLjb)1uI]mS~qD4');
define('SECURE_AUTH_SALT', '</VUk9RcqXk^5|I3qIAPT-+Q * 14fezAL<wkiEH$2&o}mO6mcFoTeF#pH6?L]Dp');
define('LOGGED_IN_SALT',   '`S@cW<9BC~f+~Qg~MHmKY>i!dmGmhJ#Fk#0J0@>Ltpx&klx%olu9o`3t7+aArM:<');
define('NONCE_SALT',       'hDZ])vvd[/0<xmLGBRK9+|LBpEO>W753gz/#A# u^j[dV3Wc5>lRbPGR64H ?.P@');

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
