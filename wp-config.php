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
define( 'DB_NAME', 'megastore' );

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
define( 'AUTH_KEY',         '8 iPd.V2@1vIO3MskmeM{G)n(v>=E:~>1SVcl1?FX*ucU$_eK.tp~- =?J&rcZ[:' );
define( 'SECURE_AUTH_KEY',  'ASC<YU:?@:?]nGEu^;M~@3X{aZ Uv?#hQtVs`f /~i^!_V O*MuiWJ$jq6I}f2RC' );
define( 'LOGGED_IN_KEY',    '.kKudpcC^L&hV&IWN<x+#TZk?^cAWG6?4c9[$<Fy4Zgf,_z$4`B1uQs^[9od*{Ee' );
define( 'NONCE_KEY',        'x=c^!>bdzL@9EMkA}r<=u)<d6F=I{wC9Ihnkc>i-zys[[x2|4W/rG,KbW,^,@zmx' );
define( 'AUTH_SALT',        '`DR%Pmn>%SZyU%,-;>SpE<YQJ1qcYnR/)e;zx-cxT68TZ@SP->bDfI$xGNt4_Fx@' );
define( 'SECURE_AUTH_SALT', '=/Jc#pk7KpZ6VY*[%!^tg[YL3y6Y_$S%=(p,T4xH#k_A4*}#6Doc*HK=Dq,9T1&E' );
define( 'LOGGED_IN_SALT',   '89]DgG^` {[q0&ueo(t12M9T+nvs7AGB%%x,=t)X/+D_~PF`PL!3BM5{<5D?JY<&' );
define( 'NONCE_SALT',       '^1[fzmP:=R.)TF.Fg~)XBux8$3$%`YKW48dgj_I9w^30A0<WU+@OpU3`f5#}5aEX' );

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
