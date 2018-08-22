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
define('DB_NAME', 'dlm_dev_db');

/** MySQL database username */
define('DB_USER', 'blog_usr');

/** MySQL database password */
define('DB_PASSWORD', 'SB123Blog');

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
define('AUTH_KEY',         'N:xnjk7B`Qy3{v[I2ORD(U6V>;; 8^yh;hJ>{J&e2I(N{UNQHx7uB24F~DztKR4+');
define('SECURE_AUTH_KEY',  '*%BU0mM?2[<;w*T+>W! U6~K:o&Yx2L[DRMO0(Qa#t0oEoB<Y>KIR27,MJI&9;3I');
define('LOGGED_IN_KEY',    ']|$zD!jEc|AI5*Z/Y-*_jJ#rj@aJGqH^]hgA:p5UP@$1Kmo#5pEVFw]IaL,}g$+$');
define('NONCE_KEY',        'Tievj&f`~)7LezJTv}A+y9]9pF@$Q><c?R(yCAh/]sjjYtCLjjMBp`f*}7i:qW^&');
define('AUTH_SALT',        'l#VHI:*EiGBPEWH_94r3=>R*Ei?N~fKBhXj#oY<8IoI*q|I{= ?:Y*AQ]67Hz&A:');
define('SECURE_AUTH_SALT', ':Iv@!iUw:=Bk.G8Y/lPeleRHI6La[#QMSY+B|8#Hfgo>Ztqb v08ue~W-Weo3fi~');
define('LOGGED_IN_SALT',   'f7-w7QS!cJ}JMzYVn1K,07=(k E4[B(|aX8/rNgStM5Q[(qSlfzP6>`BW)Ila{Y~');
define('NONCE_SALT',       '/JkrTy*`bk{9uG{l/,f&o_nxe|l|bJVvlw[h/VN9=b/l_piP@{UD$![677+xYx^G');

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
