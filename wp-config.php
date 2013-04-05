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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '~__7$<f,-i 2uiOa!f]p ?WkZ/{|W(sX?v;n6&XI%BYj|@^j)e}^v& fkiZQ:RC~');
define('SECURE_AUTH_KEY',  '{,K&wZ` -}%p7#h+fqYT]j!5M<EBGybQb8:iMh?g)1cQD2TC>cw|CBx-y(*]fsv~');
define('LOGGED_IN_KEY',    'w m(CcMWG8-$RVW?xI}6d[@ET&Ox61Vfel+t>:X]aZJOJ?/4[C+l)dbC..`+Y=h_');
define('NONCE_KEY',        'ndD#+.Yeo#4])IK@a*/t?y}rSnVPM0++*!Dh0:xJ}X(+-$=Y-|l[v&TeDZY;~>$-');
define('AUTH_SALT',        'uPA6?wgx{j$c9_hj0qba@&+xR?M[aHIRuZFG.(+U$[;F[t-V7JI`!vEdMk/iM.MF');
define('SECURE_AUTH_SALT', 'uD.WEWH(*I;7=;DH/0<e#WF|w5jD@{MQQOg-xqaR-qAd-6</QehIMm jU@>^S3Q,');
define('LOGGED_IN_SALT',   '!E1ZXMjJmg(`)?)eEQk!r~+HKu:^-sBQp2jZj_>Y>POk>PIxjk*R`Dhs5.{!hX^2');
define('NONCE_SALT',       '}7jH1C<VYUgPiE[FM,4(&C4`uv1)$G/I0dd-.+Y.Ahxii+GaZQ]STYc.C3hyRbQ@');

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
