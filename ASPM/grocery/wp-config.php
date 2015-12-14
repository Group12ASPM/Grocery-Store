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
define('DB_NAME', 'aspm');

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
define('AUTH_KEY',         'YK3;f|BKs}<Y_W=`=tb-k/Vx%l?}=A.hnnQl{tMb-I:.KG0tO~U()&QpJ2spmsLh');
define('SECURE_AUTH_KEY',  'x}za%:y-Ex,[.D-/`&AE>wK-wgd+4i&y]/#ahQ)t2Xh4*Y6(LmRQdqc]I$]@, A!');
define('LOGGED_IN_KEY',    'djqWhRDp5oHqe#mETJw=0l;}300 2c5RvTXF<[=xcu- yEZ]uSj+hklWsc]x>j,G');
define('NONCE_KEY',        '>RGS@@[lG*5M.@RN7:a4MEQcNq/e+13E>nW9ep$V:;v9Kf19Pk^~t>#fHcgZvnYN');
define('AUTH_SALT',        'lDFOa|dl8acrS7`$Q}wKe$=yuOg`Ga&|Hc+hS.XUaN):m,L%8|)8[+v.|-um$1oW');
define('SECURE_AUTH_SALT', '5j9^|+A-!3YcL>2z8o{&H+XBPI8B0b1]FbI=9N9,?el_crX-Go/I0Q6LsoBk(nH3');
define('LOGGED_IN_SALT',   'zD{*5|aP$Gtm?xr0n.fegK_%=5|lA=#6T2>6(dHUxP;Aw|X>}Cex[.4iGCxrEO8T');
define('NONCE_SALT',       'i7s&6(Nw0k!r[H:>t@[Sgc5$a&wJh]6[R2C(c!G7nP^)~y6F@yV&(kq3c~!UrM4X');

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
