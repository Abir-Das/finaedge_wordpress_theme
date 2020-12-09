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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'finaedge' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '?=/ed[pc%T;EXpnQE47J(gd@%RY{23zL1`e3q(=I(*jp_]Y.Ym=R4b>LE$$7gxgA' );
define( 'SECURE_AUTH_KEY',  'xatu]71ZB~feJjWAB`@ @%UkpQdt^%i&>9OTeVdSf^B5_:|6WUne8cX&(^`[O_0e' );
define( 'LOGGED_IN_KEY',    '*0ECX/y.@<{zgD&ozru1r!#vr>N86GsE^*V`(w=+eE@p5Eae$g^}=x!0JU~GAR|!' );
define( 'NONCE_KEY',        '!5{/%#`1u%@x46[uP!o)R(?Nyzm?.sy:lx.TbSO_TEB/3x^=Xq: J&Bs6:w,Pw/h' );
define( 'AUTH_SALT',        '+dO<~9A~DlgGb5s9`#a*rOr.Lh$j{9|t$.{e?bV+8>d_DW>*AfAT6q0X|a`ny?s+' );
define( 'SECURE_AUTH_SALT', '<Tfy3)g@O!b)-X?B*wP6g}L%by,d?bHRCr1D`$)XjhW%GDqgk)5|?z)kz*[1<Oxi' );
define( 'LOGGED_IN_SALT',   'YQVD{5T~G1k.{t`Za2{3KIVSq~]v[7qfjK>jLAlvz zM9gR=Yrutw0]|C7A*EqPx' );
define( 'NONCE_SALT',       'Q=oa<qABoyF^%Gg_!sk_2od6^6P]pQ7][8Ot:r.tt^-e2i~W-[$zlh7OOFJ$1jY*' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
