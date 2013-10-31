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
define('DB_NAME', 'alliedfa_afs');

/** MySQL database username */
define('DB_USER', 'alliedfa_afs');

/** MySQL database password */
define('DB_PASSWORD', '+oJ.#)=N,$S&');

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
define('AUTH_KEY',         '=+Jx9uZ /#~q#jbK&)w+SJD|Xd<5:wp/*rd-zK $dyF<@)o>>e6c^N3|2+O|-)vO');
define('SECURE_AUTH_KEY',  ']W<XQgtZ!?hh;uW{Y[4l{Wc<km(`!h/@=F||oI7jPW+6Kt?-fBJ%r1?.~sr9nSWp');
define('LOGGED_IN_KEY',    '/,N&Oa_9i_&C9@a}-N*-ZF]+C7SCjNnGx:}m@hVMy`ajj2pg4v`.6u{tYEl[_CkG');
define('NONCE_KEY',        '[|F1j9>P-ly:hYPO7CM3Ot39kyk5KNu}1?]{y%>1ZR{K$K<(~ozZ,/w^*kUffjXL');
define('AUTH_SALT',        'xd![8FZppK-%vDDpl3!OC&5O+~e5I#O`;fs38%>~%44=%z),%UEV^_BLMxg(-%1M');
define('SECURE_AUTH_SALT', 'wR&TCvP!Bxz[[Sa7LCiX o0,oNjOaFkLGc*d8~+@cb3M|ryv%|5mll5plmlwJq.*');
define('LOGGED_IN_SALT',   '2t<+<39L3=8PCp5NA<H_:*TCk/3452;k8U-L_3#9SoSXvn[7B:-s[$*[;1PP-SA-');
define('NONCE_SALT',       '+H74 PgsWYv)GJ<^ -p<]pE[xr}zS^g](fxO|a-*F;se+1t`_7d9)UT_;P#:,dgu');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'aFS694_';

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
