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
define('DB_NAME', 'walcraft_live');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '*technoadmin#');

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
define('AUTH_KEY',         'GvD)V0cmFU0u;&`ZEq%-tpRr8<gBTTn.F.y)dC]7|CTz2E9LTUZ1sV6|Z3]Ts(k@');
define('SECURE_AUTH_KEY',  '&2NBb8O%}v5PsKm=3YtH+pRbr!z`X2,.ikiA(i3_yd6LlmiJ,.?uIk~[w(M&8QDN');
define('LOGGED_IN_KEY',    'wf.K]PgIprWG`)&`]0_-pd-g&$A5K)<l;3R3]Vn*xKi^_lfW/b8zJ^e+N0`7sD>r');
define('NONCE_KEY',        '8xd98K$MrsfZ#s5@&%jJxYs&iZ[6$oNq*pAI>jM5=yW*R-47%&acz8/Hwidm_JFv');
define('AUTH_SALT',        'ZrxV9 IbrdK,B|?jRMmD2HN7KgpmB_$3fD{`d,;xLROP9l{XbzGb`)A+iJSMBORX');
define('SECURE_AUTH_SALT', 'eVfMDrlUObRygLxb9Oj$%TNk;7oRtsWUd@ADYvNZZANIcR]vDh]Vtq z,-N_G$!r');
define('LOGGED_IN_SALT',   'KpYIL:|~0o$-p2~87gSA0xuvVscX<v3+c_Uq !*:?CCG|OM:M7X{k-pPFZ1x%(sb');
define('NONCE_SALT',       '6TqiIGJVX^^+^IHj,0V$bNTBa#l.pe:0btgSm!#k&]]U8#~3qTTWvn^l>rq?Cl#n');

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
