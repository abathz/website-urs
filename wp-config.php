<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ursunpar_db');

/** MySQL database username */
define('DB_USER', 'ursunpar_admin');

/** MySQL database password */
define('DB_PASSWORD', 'samisami15');

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
define('AUTH_KEY',         'R;KV6nwNGg%Ud5q%<>D;ekkmmU+c+wzHA +[cBzG|j&.$NQt`g_x|qFEENAoLje:');
define('SECURE_AUTH_KEY',  'r+N;1_aZvf{@-|CD8<24]xbqfD=>8q.;U#vJ2F|w44GhV{U#|P>ib!25tX}Y7Q)W');
define('LOGGED_IN_KEY',    'v?9%`qXh>K{tgy%N]c[]heyRQD`ITY~OkAn$$fp5!>7ljZTQ6J45J+6f;l}mHI65');
define('NONCE_KEY',        '#Zn)fqf<&g7;e+A76iZN[EzVlo5R;c(Fg^9eidT]B^&DiC_,PoUxP?7>$^LyNqq_');
define('AUTH_SALT',        'X|q+l1{v@bJ5!4P)+.Hx{XJjYLdJm:hk{fo@P^ bf=QI9]3J(O6c!h<3eWeA|aoi');
define('SECURE_AUTH_SALT', 'U`u3u _-3op9<^~.3Mr)CSd$1Sp7k:1c3raw|.E9~jC>Ry#|+ NAgp5S<N6KnzmB');
define('LOGGED_IN_SALT',   '&;1z#},DL.VVdUcAAMUT;5>e8G_1*yPS)EAmcr).=D!d4iabi_Y|w&:wSU[oB~)/');
define('NONCE_SALT',       'yvP5|xz=FyJjiE*V) vUD5$<!*_7|D0qT|Qvd0a[%k/F62BH+}30[p|L(Q-_@lb1');

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
