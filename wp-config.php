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
define('DB_NAME', 'huerqrts_cas');

/** MySQL database username */
define('DB_USER', 'huerqrts_cas');

/** MySQL database password */
define('DB_PASSWORD', 'qqfk3BFf');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define( 'WP_HOME', 'https://casasdeconvivencias.org.ar' );
define( 'WP_SITEURL', 'https://casasdeconvivencias.org.ar' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'mkde}%phY5Ryhj@V/px<qSDe1Xr_4LP9YIG=&Qk3rG,8n^[Hzj$^L^d[kP,4CME-');
define('SECURE_AUTH_KEY',  'ex#UgcJ!KwTOnc?39>7^j{^uj`5TV,.SSZoU!g|v`Eo{;n8u}5pfdv_Dx1[5m*XQ');
define('LOGGED_IN_KEY',    ']<^O&+xmY{bC3{eAS=b8Ua:tJ)Ebu4+rR7@RZZRi<N:_LFVV@I=(jOzutKItL=R}');
define('NONCE_KEY',        '~j3Wb(T~TmftefU5I^6#PMN58mFzb;SCDJ&1fVBO b0%zlnvNY[hRrU3u11|<Qof');
define('AUTH_SALT',        'hm`|J+WJT6 U1xLSv1I EdCpu`d(:%FIw{g!~8KwM`N]2&7|+m(3gw9a,T!/U8DR');
define('SECURE_AUTH_SALT', 'gL`i/SjuBpv]j:X0Jd2xXW*PJaqo*r&(8A%4jWRZ2a|ZEG/zL(Xk7h_{ZubEJ3Mf');
define('LOGGED_IN_SALT',   '^sX>F@S8}s/OJFcu_AS3KNg6F-^oJnDjEd~5Tj&V+*E(jEoIi/.2]^$e}-a$EzI4');
define('NONCE_SALT',       'NH0`V *6lj#ERF]Pe:t#2k9C:02jd!L.4$2w5jg{+B}tAsgT85]a}W#oK!_u=XjQ');

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
/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'casasdeconvivencias.org.ar');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

