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
define('DB_NAME', 'wpongithub');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'RU)(2[h9%dH:b`q;n0xoP=L31SMH*EJPr:Omk]M4<n1 )m[ Wtqi]|2un J-E+^)');
define('SECURE_AUTH_KEY',  '8}RYRlKbe0FWZNLyKN1-p?p{s;|TJ&mH[<5wMP I8$]F07=M~t=e~gh.~ZVTm?&3');
define('LOGGED_IN_KEY',    ']4bslOPOv>sB)otd)k4ONH(@f`r>z:eAv-!I=FBc.X#>HG9Ee/9Y&G[b-O)5snF{');
define('NONCE_KEY',        '7; |*jOz_FP^._8xBc;I0m]A+`>`qxN%+J}Z=oou|!iE.?us<(stB]kRgGdM;5v;');
define('AUTH_SALT',        '+>P#7N>!mi]7?kF#$OOgMyV4>5WNI:t?)[7Sa+^tev(mzTj_]d-t9cYE;T,!; ~.');
define('SECURE_AUTH_SALT', 'DPI];o%O|6Di6R6a4ImmFpT<?Cv!88G*Dx!~*pLQ3XhAY.a[SJ+|KS`_JYZ-zB3/');
define('LOGGED_IN_SALT',   'NWio`$%m$h-2i!$hgDa w t!GK5!N.*3jP65C4X/>9+-Xa<=W::y[6n{d2n:dxU3');
define('NONCE_SALT',       '_#yZ+#U#Z;I} vUC^x]CQk!z[O`ctK}W(&E=}w^_DHAc~}<tX|^PUEzuL@Sj42.b');

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
