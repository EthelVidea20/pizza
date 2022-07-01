<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rinconpizza' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ft%Jn;+eca/l+,K-,]<3x5{7LBY6#[fnI(R-%-m%$R]pd;w[ja]&un}r%#A}` ^L');
define('SECURE_AUTH_KEY',  'c9,K9=NZF&udv2-nZO*@=Qa-mf25aWl,Y,yV|ct[O,&`0-a1qpsk5Xi[eV||r|NN');
define('LOGGED_IN_KEY',    '<x1K$dXwbN%O/A(U&4wInDJ`@pYt+3=8{e1#v+@g: @k#ma/?P$/VQG~N&[|sn#E');
define('NONCE_KEY',        '5#k3:(g_Y>i9` T9Pm2|#8Vrn}@rQa`TUl0<2V_iWGq) Q1Q=QA6NhJVkHB>+%4w');
define('AUTH_SALT',        't9y-_Qzh{@@(%c#{(VY|B+Fu1V^<zp7,f!X[f6D^xCMwt.EgFSZ5>O3yO.EEU-HE');
define('SECURE_AUTH_SALT', 'ON,+u]+j.rx;9Dc@P#+%?sI.fbtN Zrk#OzkvdVdSS#-r&^3pHhm>?Mh]9+1CdvV');
define('LOGGED_IN_SALT',   '8ku9,;8]5#U3[bt4|x=}p{x6w3!OnSZND!k+8lU/Po^|FaK!YJ~+f%9v1m*eg?:b');
define('NONCE_SALT',       'P7,b4!3&&LY[#qpGgQIxAzmVSu*cIq2c#nCw;EnQWEE|c|O)O7Z?-;MOdzp`nv/l');

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
