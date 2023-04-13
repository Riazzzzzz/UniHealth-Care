<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'usitfoco_specter' );

/** MySQL database username */
define( 'DB_USER', 'usitfoco_specter' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Riaz.0123456' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Vv ?A;ecBsHIbe}uOU@ML,pc|VW`U9`I<2?&>8j+,w8(rl>PaCWL}nmXO)^GYQ5~' );
define( 'SECURE_AUTH_KEY',  '=1M$}rNvX>n1!+!@r~rWa`UD.fvf~IAYC. hPA.([u D{~~F(94z/{Gk]x[?uB9U' );
define( 'LOGGED_IN_KEY',    '.&!W&;#Ph.]npVk#_K!Z-aaJUPf90@=YqnR,_MhUn=|YEjlRF4y0f:ZOIsbqZa3B' );
define( 'NONCE_KEY',        '.i(eqY^<l3bDXmW#*bj.C:dW*pt?y?Qp+]k^tt+G7C2b]G^Jj,RB_0dbzl9h(a}[' );
define( 'AUTH_SALT',        '4d (}W]7&5f$| hTUc[sFNdjf&/5@8,0=),)bUc[rju8Sh_K/T#oC<Ow$bwd&hhi' );
define( 'SECURE_AUTH_SALT', 'sct4_tz2!Hzla]{t89vkLUrv-0*,`;vs9^E+1D^9{N;lQDIpp#YmhhI[7sxdA(R<' );
define( 'LOGGED_IN_SALT',   'f3FAJhFR*i`})>K`QGV#e}LS^]hvr/0zn[5F~)o[y`>$8Hf;;ux):NCel!)g@qn}' );
define( 'NONCE_SALT',       'Pa ~7wSUfA_EFp:q]U|0mviX!poS$Pn]J-S?@`_@6:B|nc;t6IbSHAEmg2v(7w]x' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mh_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
