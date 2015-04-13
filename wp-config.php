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
define('DB_NAME', 'zagara');

/** MySQL database username */
define('DB_USER', 'sergio');

/** MySQL database password */
define('DB_PASSWORD', 'sergio');

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
define('AUTH_KEY',         '26+lB{6ms(,ls)w|W]]}8<*:b:/+[tgl@XAQ6HFF.Nce|LVSj-&L>Jw2P;-Vx]r9');
define('SECURE_AUTH_KEY',  'WyPjY<--&:34=JB?$Q1erk;SO7</_>)1~t9UqE^JK(YOFm@D0*>!>q@u-k5tj;Jc');
define('LOGGED_IN_KEY',    'cSAbPIHN6Aa!e_>8gY~/!Vv<kQ=ClBB7X+zgaepI(W}Ec}yd$eD&~6bZ)Y+O$<Tl');
define('NONCE_KEY',        '8KD$b3LA GbjlW :o%+4,/,<#[+/C2g4<5OO:G6qFbkGE}Un!T,sL@2iE>8P`DWi');
define('AUTH_SALT',        '(Wu$Q,ihS#5|H%lkLEIqQfWi`O|>P(4:sBaH)%U<_+h6gaIY7]HUW4bYz&Cqc Tk');
define('SECURE_AUTH_SALT', '4y!=&jh{`!<*2YnQO=J>3`Zd8/+8<q2~a{{;U+4bf)EK(IV0@KhltgN]3SWX`d./');
define('LOGGED_IN_SALT',   'u0D[=$zBptKY+@a5lm--2VM?#)a<Hm9O-v0q<.<AT>QjlnOT|$[}M[dKhL@ueSTg');
define('NONCE_SALT',       '!]z)}v2$+AE^J-$p+`8.?@pAT^X9zo&>RCB#TVpkZi&qR&Z8zm[F^u-U#EoQx<q&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

