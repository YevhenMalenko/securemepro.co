<?php

//Begin Really Simple SSL Server variable fix
$_SERVER["HTTPS"] = "on";
//END Really Simple SSL

//Begin Really Simple SSL Load balancing fix
if ((isset($_ENV["HTTPS"]) && ("on" == $_ENV["HTTPS"]))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "1") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "on") !== false))
|| (isset($_SERVER["HTTP_CF_VISITOR"]) && (strpos($_SERVER["HTTP_CF_VISITOR"], "https") !== false))
|| (isset($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_X_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_PROTO"]) && (strpos($_SERVER["HTTP_X_PROTO"], "SSL") !== false))
) {
$_SERVER["HTTPS"] = "on";
}
//END Really Simple SSL
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
define( 'DB_NAME', 'fanllkfx_securemedb' );

/** MySQL database username */
define( 'DB_USER', 'fanllkfx_securemeUser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Eu[DXcTx?3&]Lon1@' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'l$/Meq1VUe!n=zBUpze#G^JasIpOE8}^}+ %dG>[qB>h?G!EXO-rY83+<fq{%VEr' );
define( 'SECURE_AUTH_KEY',  '?+rpNGmh:hq~_E11hW7H/FKE_jkw0io<Co[u`O{oFsaRpMcX=0m.0&Qd;_.6w*r$' );
define( 'LOGGED_IN_KEY',    '0>~CPuH@ ]fL]x).?i,E$)}E:(n7t3kmMBLLqb+N,JW2aAq`V$Q>/uFU`SGP|G2Y' );
define( 'NONCE_KEY',        'uZeaS,-[k#v8|tIg2Bx1cZr89[!WDl`h8;l@E_)4zQi!oZFwnf?3{Q=^?B5 8I;;' );
define( 'AUTH_SALT',        '> (XAfdE/$I8ZFYqJeZ;Z)C9,K<CUWD&RkOE#86D0Eg(.Z/8%EzrlL:sN)al~DFW' );
define( 'SECURE_AUTH_SALT', '.1iWKMPRZOw0~Xm!E2;-.A+j)9~o&}ozZNEo CZ:(WAYH#a&KO]=xp$/kS1)U/lx' );
define( 'LOGGED_IN_SALT',   'Ip3_OPkv6-T)B^WBU5IVd;j32wix28WI,]U:g[0fsA)oHe9&wCYgmrt/=1|*R]IR' );
define( 'NONCE_SALT',       'M)4I6lA!FdDN gA}@k;6vh^^2iT:*[=95}c]{wsBgEb%d BpoB0U6C#hY+:gb]+R' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
