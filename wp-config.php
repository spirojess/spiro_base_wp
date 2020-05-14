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
define( 'DB_NAME', 'spiro-wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Kv5Tv&P=lM(pv((hx/RB$>l^v3}!k{`zY-xy6=K8jIc1f3g^_0s@A3z0&>%iO|.;' );
define( 'SECURE_AUTH_KEY',  '(u9!t{y-thO/-Jl$b7|54bv2$QyKa%{>Ob>3y9>UO95~;3kO(Q]B*8iuH$cIC{JM' );
define( 'LOGGED_IN_KEY',    'tuk=j|#Lo>5Anl&rpt<=0Gc7}};9/C=I;ukxh)Q7K%Ys$Bh3b.gOnxcr|}Q<ne]?' );
define( 'NONCE_KEY',        '#B6jGAjb9Jy1cSNc G<*!ahL~!M?.ATDpD/%#{}CkFLHr8AZ,raR@=7b>Y6u8&wq' );
define( 'AUTH_SALT',        'k^o4^HT-[KsTWkKYkvM.VyoNp<-ttbP8Vvx)-G9A`8SFHd<oGk)]n>aG#!6!-!l$' );
define( 'SECURE_AUTH_SALT', '_$do:fs6+mxg!G?|v+h5u :aJkPjP ZB)keY@FnB,dzb= K!`Lel7TiQ9j[Y8[ S' );
define( 'LOGGED_IN_SALT',   'r)*dRVHn*CZ4BJ&7LHq.NF<p?355j=[!:&HOqtU~|y{7Pd*-jBqc~bCs>We`{;n|' );
define( 'NONCE_SALT',       '-=(=~x:P 7(QY[Oas:0^ZY]cG80}xlrU0GNXXL#MwON%>],p8<uVPJ$:]]Gv-5-k' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
