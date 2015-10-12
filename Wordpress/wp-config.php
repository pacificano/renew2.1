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
define('DB_NAME', 'pacificano');

/** MySQL database username */
define('DB_USER', 'pacificano');

/** MySQL database password */
define('DB_PASSWORD', '5mwEq9Sb7XdDyyfB');

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
define('AUTH_KEY',         'mt}kC?L+!IJ.*M2bv==E@cV|wE6~Nx_,K6MwCa0)*|$v4{qorIkV7%4-Hmbz]-0)');
define('SECURE_AUTH_KEY',  'e/_-jhcm-6Wr19GL.*0+[|+~=YY9t8K>SM0X=D<A55SNNaZR{B+TjQlXe^F9QJ3Q');
define('LOGGED_IN_KEY',    'bPkr+%-to*I5+icx+|Z$U;+G+cd-H+wDp`ZK<#-[(Yv;#[a?VL+|JuQ{RG* =9+L');
define('NONCE_KEY',        '8C_byKZ)x/-_,:l.e?awsqU4pIfRMw-1<%=``iNv9WtP+}qepz$Yl&HH5!A!@bVE');
define('AUTH_SALT',        '$7 1DMF(hMKc`x<#;)El[=l,f/<]-JpmUiiY<Ajc*+o?&ebe#,]zX|=-2s.%%M8B');
define('SECURE_AUTH_SALT', '|/kO?KJ;oohKeuL/qs!t4Hrc`KCU_N~:O{bG]cg,OV&kR;zOx/8hD*-YFS4S`.e$');
define('LOGGED_IN_SALT',   '|gV7tarMqH!F;wYXv^6i2fx@eQB{VX|v:RB)savkR?Qp+V<[T}/RJn9{.xm~Pm%_');
define('NONCE_SALT',       'RUkF;K-Ps|^l+`qNO]V4Pn1_rFt+ekSsnjgniW|?5:[`n;w?); :W7h6szioK )p');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pac_';

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

// CONTACT FORM 7 changes
define ('WPCF7_AUTOP', false); // Stop adding p tags

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
