<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '}U5uhfkJm2rF~R{J` %iK8TW^,{uJ`o>*1Z&OYg z=KYo#UjovX#ityvssU[Je@t' );
define( 'SECURE_AUTH_KEY',  'nBYf%ikaW4x5od5J7b3)FxDn2LX$/,ml&]6gV3,giEMaYenu&,XDynA!$n2[,&:T' );
define( 'LOGGED_IN_KEY',    '~_@AdZC,NCM%8QHcpn0)=~M(yCr))C0Bd2{gOp*X9xubo|Yb[B^jbO$_F.Y>rAm1' );
define( 'NONCE_KEY',        'PYPBoE85PhZw%@~T&hkIkyU(,!T|Faaa=V,Q09Dcs54&n;G:fyvy(N2~Vwo][P#G' );
define( 'AUTH_SALT',        'U1YD4C3.+2SEBq06|b*C=JPt#~%}AVFdXfho`^Jd83)9u!zvnZqUOaJS7<Kr{3iF' );
define( 'SECURE_AUTH_SALT', 'WrKiia_d_/(x3es[Ay;6ZaA;:$:wQ[JPp7&V+8C_~J<v5po4LH@/I}<]@WY[63/2' );
define( 'LOGGED_IN_SALT',   'HO6T.$&uO`<HrdO0 hAvhr(ZQ>1uwZVdN6Y?p8pD}fkC)44B8n5utxn#Mb-s.9Y9' );
define( 'NONCE_SALT',       'h6Z8%DK/Ru.lH7R7lb_Z`?JsR<$E%zdQO>8ZcWX{/zQ{KF6T^g4)s;;eV_O]=!x(' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
