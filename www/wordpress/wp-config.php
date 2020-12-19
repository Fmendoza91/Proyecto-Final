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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mysql' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' , '127.0.0.1:3307');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|bfJGQ?U}oi_-&1fB!03XF]f+H}R*H*x}Zxo=jwLh:^4e3v~.v?5wN/5:*CH^!to' );
define( 'SECURE_AUTH_KEY',  'W4=/_qwo&9(,c+0f6FGT4#W^1a)c=bBS5k-B,=i+?76N/j3iNxcRG_B m #rq{.0' );
define( 'LOGGED_IN_KEY',    'tCDYRNd)o]j-^X& h42w!_-B=K f~zrx=@%A+^H![H4+2fgqlM<yG#s>2CAJ_1->' );
define( 'NONCE_KEY',        '2B zlxGgZaotQ^o~p& Z;]Cc%XWW!B`FTsuV.vf`Hz6YPyZ=U..WxY. 9VFK12C0' );
define( 'AUTH_SALT',        'Ut2{$}`D|@|v.yUvQ}`3l/[v$+@d2WDecG~.lRd+W1Cj$Me%/cPIM^&T#lg]ar_N' );
define( 'SECURE_AUTH_SALT', 'ag.PI&7|%YN;)sJqIak0(4+zBDC;GA]pvRh2-NNuURAV([$,[mQae`NtgrFnF)C5' );
define( 'LOGGED_IN_SALT',   '|.0/qmqat)W5%O&w^!8hv~|{pPixR{nq}Q+6a{pWV$~ |f Xq9^kk$Sk~_|:}9tb' );
define( 'NONCE_SALT',       '53(DWDL3s>[$5RN1NRr{3m=s065Jj+@?VyZ+1ehcBqgtm-(I8%kUZFdKg9w7I%@*' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
