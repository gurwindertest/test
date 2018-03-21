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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Admin123');

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
define('AUTH_KEY',         'kZh!9%s#Nz!sY|]MC$~hXN?rM~br/6HNOItj_y1HYTtS<^C^k;G1@OcvPZk@Hy63');
define('SECURE_AUTH_KEY',  '9cu[?UR[2$1H61jQ_Vn[-+xegz!AiH5Y3U%.?C7(Ck! $:Ewk;3Gz272.fO3cOHT');
define('LOGGED_IN_KEY',    '@GH>UjD$V}c:I^.TgwaK1q.v[0c05x$5x,j/MGDP~5p4&YIZ_ezm^;]qjL..P[oT');
define('NONCE_KEY',        '`=Jnuko80mR7r#8oU&D?dtHSD+N.;wtpha*MaP{1B+r2,YTjoW.DQ^rV<z(]G?O_');
define('AUTH_SALT',        '?PfFtPYPkh?Gt}OdRu-dU}`3(yUwRK(z]37/d=<TCbcoU)l9y/`J(u5MK2,i1;:y');
define('SECURE_AUTH_SALT', 'HdC6@<-(2~?aU0*;c>O ftyr`bLB+AAh95O*Av1}_v&5}I9{p9#z%zrwezDV</K)');
define('LOGGED_IN_SALT',   'u7Rd5s*-y&{(}.pG*be*|q87xQM2L086$0Of4otIRspT>Y`?X.*m:9uGtB>I [H ');
define('NONCE_SALT',       'SMl:!*n$xR=X<alE0US:Gk5Q^;t<]<j^/OO7/%KA;9IPg`tYqPLJ}O-WB?H rZzZ');

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
