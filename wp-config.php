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
define('DB_NAME', 'macsc_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
define('AUTH_KEY',         'b=%gE/oj-V9@*6:/zRLo-X=MV#*EL?|/sbkvhYacOL/N@K^;o<-XVR(YYoe#f6V4');
define('SECURE_AUTH_KEY',  '`UYgn]pm.-mg##_iOrO^x5.wMV}sV!#W=1]yv#)2#4M;@JZDOMp][u]PK+xQoy^?');
define('LOGGED_IN_KEY',    '0>qgiX}mIm47J{FivxM-VBP``u=8wc8y;|H$EbpT:Ba,<K2i0_jfBp_o#;;X2671');
define('NONCE_KEY',        '.[YEg`-^~*d?3SaCCQd{)8JT?Ez^P$i5f)wPe#2h:m34W@J*6LJjyGEr%}qOGNF}');
define('AUTH_SALT',        'D<|{HNER8,C`fVBt?c/<.u4@#Ua`&-F#d*dCcy7r?{>aQv9Ii U~xez%}NwH+HLn');
define('SECURE_AUTH_SALT', 'n6bK8$wpFF<8B5|~DojVu!Y1w .WauN=~b]mY/v^Vh9L:K;I]/#q`Lb/XReYsItU');
define('LOGGED_IN_SALT',   'mA@fJ|]:bw8(7=%>qxZkToP%}o.[&C?jSwP*} -SPCE~+b[CiMp[_(fg.:>NK<hN');
define('NONCE_SALT',       'b2>]^[q}LleX>8,B$v,!^b.~~-?=z8Xyl%3ILXs]i9#zdsQ*=,D ]11Z7VB%K3EP');

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
