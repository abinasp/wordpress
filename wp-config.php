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
define('DB_NAME', 'codeline_wordpress');

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
define('AUTH_KEY',         '-_Kbl]&-]4K;|/>rKLkCPG>Eri19~dr)^mV:lj6YOavF8hZ}@-J9HG=JSpTu+u_$');
define('SECURE_AUTH_KEY',  '=f>L_{m=8z9LMlko!OEVi*]#B4H?Ix}3eNhV+v&>k2uF,=<c;s4 DzQ<!)O[73_V');
define('LOGGED_IN_KEY',    '.fn y;inc+QJi6o:=V_*@Gm`z zOJmaSV#+?&2J``)4)[ENu]Y6:I9`fi+3o+Mal');
define('NONCE_KEY',        ':ZMq,`7zWHD&?nMiG[Yc9r}p)r-p!0cr !szt?+==r-=;]fl7uBR9N[]*b_NGglF');
define('AUTH_SALT',        '}*|Q3hLMR@%NQc:B&zya<gQ]I1x!9HPYwMkWP,M,EdLoatzv|JL)Sa$Uw,Md_i~P');
define('SECURE_AUTH_SALT', '_V1R]m(xs} q%T*!e3#FVtJ8zhk+/Q&m|):)s_ Ab(o^VhC!#`915!sRG9WsVq,G');
define('LOGGED_IN_SALT',   'h[+6saincZ-J)^^}!HtdX]Utlve(Ad=gB)B.A~R%I%yt7>RPUlBurrvH-sDsn=`}');
define('NONCE_SALT',       'D<E;sbX2D6bPe}4E@BlP@ggW]gEs}N876_p4<}@}3|WRYTkTVNRl]j,;Wc;e7%Ep');

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
