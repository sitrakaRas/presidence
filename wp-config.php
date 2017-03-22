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
define('DB_NAME', 'presidence');

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
define('AUTH_KEY',         '!=/aeWrgJ#9~Y1ZB)[#CL)@yk~p[5h^8V(chJ)]r^^iKORuCVe3mbLWj)0Q`by!Q');
define('SECURE_AUTH_KEY',  'z?k;O2PH53Z<U2&^*2R$<U,R$N6`0c3.I4&6~Oy}?Om9|Lv1c^E?(U9t4[W`U UD');
define('LOGGED_IN_KEY',    'W/b@L}t1l!^f.-)O]A3F3jL!APd:THHdY]hZ6{W-Ci|%a8,NfgM00_K~%p6^o?k$');
define('NONCE_KEY',        '8#A1G%T[FjOQ*86Z(qqJQ~k*}vIpjMp~()Hvm~=) ZBrzW2@q$@uzxuUc?)A;(;m');
define('AUTH_SALT',        'a3]EH>]xi5,1m7fzN,x3XF({_EPQ0g`dzH+KodnbjBZb`zo)c^U?7w*~=`:M=&rc');
define('SECURE_AUTH_SALT', 'yZ)p|@*5]X,lF~~*d`ynYU&!]7+auNK,6YQf}08N%7hgq&t.Un@I|{njjUEduQ(=');
define('LOGGED_IN_SALT',   'Uz1#Q^PsHhW+rs)Q3%rv@]Lx7>%74*o{x+f(-PC,zvR%5#-zsB^64F+0NB0`z.+&');
define('NONCE_SALT',       'K@JbsGcPXYGP:P06f8gktD^OR1wxC:ngek>Pf>Aou@rHv%;^PU-j9%)K>gR{)VfO');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pr_';

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
