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
define('DB_NAME', 'bararade');

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
define('AUTH_KEY',         'T!`k 6}uykD6;j!R^p*LEs8F]t)aai3yH@X&o0~*U9FpxKet2b[0s_x#J/!R[ pc');
define('SECURE_AUTH_KEY',  'z,OlRJ]?U$pg1m+YPA8j9:!H+R|4pjp&3s:}SP 9oYu@fTn$ c0.=Cuu+2@RzqGK');
define('LOGGED_IN_KEY',    '!?4jG#5HhnS*^u9~(jure#Uj5Nrf|F}x@^@8~wh]8zMROkE@.a?w(D*7@5O@{N>3');
define('NONCE_KEY',        'm|Dze![5pPoU4[xID-DFnewqoO:NB)fLH,2`Ieno=oX^Xx*AytUgYa<F(m>E$N%`');
define('AUTH_SALT',        '0^V+k=/gp&+~u i.7hIOJ+frj>dM;y[jw~^SQ^k6e}5.Q>znDkvlA(`~E2YL1B|V');
define('SECURE_AUTH_SALT', 'FtdQ9HeekjFy0lJh]&tLYq`~!}fTju.4$.>Xu!8D SA,ndLn3qGm4PHG&z 6-s?4');
define('LOGGED_IN_SALT',   '1KbtPUH>NE3=w^9KK5ArDosr-=(P@g$:8 >p}6vqIL}iaHC|xzh:]2SD,LCd11s(');
define('NONCE_SALT',       'CGv8[x11K;6fOiInR)!=!rJkR#0G9lYJ$&|~br+UG[BO.w|&P,x/Di$r1)&Gf&,Y');

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
