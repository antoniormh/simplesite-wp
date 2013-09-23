<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'simplesite_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '=kr}L-Pta pEba?$syF`rE`c=y [H |Y>, z3[+.m$MAB&#r-+Q-/d4K#h?cCp!e');
define('SECURE_AUTH_KEY',  '%Wwx#akAnzY3-:h}jaPR4(O-;~tDC^Y^qR}jx~E#%$agsz +P*f2Ui|gd>G=mhg)');
define('LOGGED_IN_KEY',    'CCh<HW6_1V}rQ)r;{ 5?.^+l/^FLP.jMJZIm4xE8Y,jko1pEGHDI{n m!C+v+3uv');
define('NONCE_KEY',        '`Rpj6os:-&9U<(oCqqVyr}/!+XX-ej.:[/&l1g,dp?!I~QctGbSAVT+1`IxddEyR');
define('AUTH_SALT',        't_Ry/n@i-JA2|;*jew;o^x3{RN1R]q5mKY3>UL[{LTXN$)_TXIhY]^//.Uo&IN,*');
define('SECURE_AUTH_SALT', 'b+@2Va,9-mDnDUh3f> y-1w>-T4`kN4$[q^KbNq-w}cITGGB_,.nm)i,.Lrm`]C;');
define('LOGGED_IN_SALT',   'Ogq[=@E%@Sw}4+s3&T+[E!dyZTq T:&X*Pp_!(%NXhpbd8y(}q.F*BQiMshLKbkq');
define('NONCE_SALT',       'tP23<3)+R ~0NpzAY8Ff0 lT~|I->cnzs]Yvj}q}SLLQRl]~1;bCmy|:t,1O9}1R');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
