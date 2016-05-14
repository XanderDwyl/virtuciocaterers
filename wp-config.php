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
define('DB_NAME', 'vc_2016');

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
define('AUTH_KEY',         '-}`V|zC}[+!G2`v@@zXT5:N}ot-q  17`OD{yi1h%ZPHQK_qSboa<nWTV2[X=#|G');
define('SECURE_AUTH_KEY',  'Ui--3Kn2M_2%+L2Z21IA*JBj+]6A:>0Y)0%:`*SCSHt0H6vm45T+?i;-JI+eZ}+d');
define('LOGGED_IN_KEY',    'i+|Ag&1FBa$;AB-3+)ThdaF,AH0Um*<R[(NWDSLWaz3N$TR!-*&+A?=lf&6@&e]{');
define('NONCE_KEY',        ' `mNDrC00)W(6j+WpG)Vp_|HhK.R6<r tW~<73vgAj_#@5+U`sB@#?:M{Zowmmm+');
define('AUTH_SALT',        '/AR/MQ~-F;v/t1V^^k-c|8vB9I$C-<flqr#gK-)rvCS#ih{j(<~3m!;=%S0vy<yc');
define('SECURE_AUTH_SALT', ' wExq=HSlh{Vfhb2VIi+!^-&t=:}<lq.-Cw$>o#0grYA) 4pAH<9`f+277`h-l+e');
define('LOGGED_IN_SALT',   '}H+3q-[i2TtFFO|^1Nsc:Fa;Q_=>vhj/-~RQ0BxtoVVSV?W(ze-u*S{G5Sp&6J`a');
define('NONCE_SALT',       'yh,n!YmXNVOJfv>})st}mj9IW(S([qXrWE9BZvPh,/U/W_[_G=y+Y,!LL>XcQ}<Y');

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
