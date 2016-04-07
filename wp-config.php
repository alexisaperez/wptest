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
define('DB_USER', 'ncoa');

/** MySQL database password */
define('DB_PASSWORD', 'ncoa');

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
define('AUTH_KEY',         '%OM(j;%:P|%jO{i|]CFc^5S11A:~t}Qy8W-N>[~wunEO[Wsn^}[qAkSb{fXEW);M');
define('SECURE_AUTH_KEY',  '0YxDB}^LL%L3hulXi`*tg,Obt)gjUEdw&H+Y[5ZG)mAs&apt-Hco+1!a:v#]K|e,');
define('LOGGED_IN_KEY',    'uN>.,X,Ohv}~WI9?Bfxi?J`yjz#1,c8HN +j&]+L-V0ipzQ1O35XnL:BHNo**T<u');
define('NONCE_KEY',        '+e0-|{|rZ.o9-=ax,ds{4LHSN-P9Xx7&sy?6W+A0|p%)FOD,hc.BS?0!|6 9y]68');
define('AUTH_SALT',        'Y`&Tu: 7?Wu@V|Phm0+,nM&y_nP]=YqYQ!C_ZcW`eej8xDdm(UcsoMAn)s,1^[=l');
define('SECURE_AUTH_SALT', 'PH!/y.UH|KD#*Da.ZH/_Yw.NW@q:F^_+:X[sUC|&dDb6,+q2IZyV0NbGS_g0~j7S');
define('LOGGED_IN_SALT',   'rclFpppJfF] 78hUTep2Jq0iT``>~n(||e^Ffww$|Oh/q-[vM@Ejr|KEOW0W+eR;');
define('NONCE_SALT',       ':ect%]kXl/{9-`yFR~UG~YVJ-uKxAyx| ej1<HyYGI2Sj@k?_XBc3@40??HNvo6k');

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
