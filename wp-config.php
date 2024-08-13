<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'guia-cafe' );

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
define( 'AUTH_KEY',         'bsjp44y`3:d,!p3G]U$j;HVUQ{rF.BB]7R}%nXM2q]j%&!j)Y:5v}xBD7VC~zZ~4' );
define( 'SECURE_AUTH_KEY',  'A*k?ULSSkRU*g*8=^gE%V$Le|?t`}}d7}I L~bB6PE&K}>%5-K#@[)dm)&fL(# =' );
define( 'LOGGED_IN_KEY',    '{4U_cTQ|5u<ocIhb<:tV/t8x{nN^0<H=w*))Td[EoQSW!&Y6-*1OoxA|,a`E~WrS' );
define( 'NONCE_KEY',        '0ju?DAR{oV@MLEqHFcYP~~]u t{eE 3fqf^8(0JS,,~E s.MFCpxi+/_<-$^}y8n' );
define( 'AUTH_SALT',        'dc#1%)w<U&rXV>/hq}IU2:60s:9#L_fiht8fMCr;AZ>kv}_6)uS@!<KeagNu^j|z' );
define( 'SECURE_AUTH_SALT', '[MUX9;o^rdy;V@ey~]Y=5*-AA?#55M@(Do~Vm12bWNpw>n[n8IZir,hM(wMkH`@+' );
define( 'LOGGED_IN_SALT',   '> Ow.-Ml%>L|KlF|NRoWib`^H30>}@j]M,c!)1X[w<[l]4*F$I?L7#3]6TdZ`o?p' );
define( 'NONCE_SALT',       '0ichw~Yu:1{vipH1Eu`_ _Nk=U_9fL8e+kG*]9;ETAZvcJ5aAyHxU`mdE]:4Fr;7' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
