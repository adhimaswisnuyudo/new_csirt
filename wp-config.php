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
define( 'DB_NAME', 'new_csirt' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'rahasia123' );

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
define( 'AUTH_KEY',         't{=O/L][b$3U)o<o@,`ZmLu/vJijqywKUuO=19J$h$MbfXQTisq,-U`?U=zh/bHs' );
define( 'SECURE_AUTH_KEY',  '*-SHj |.ngoQ#Q<aAmFKUW+ikwuYU7jsz{Yyv4s.&apQqm$P=||e>7Q]rV@g+kTO' );
define( 'LOGGED_IN_KEY',    '!x%I!Gut+ =S6@$y}Mjw0v=T@*iD.Q!iJMPpg%{#y}c/.Ka@Vgrf?ppX3Y$getiK' );
define( 'NONCE_KEY',        'n~$vwHAhsb~=rROj`H@|9=v7qJQ?iZ&g}j&GSrBjG;Dt5{`0C;BeJEF8sS]%KlE@' );
define( 'AUTH_SALT',        'd>js-L!QN{+,$u|)KK[a$GBc6.r$vXP?]*@R2cRU113+R|F/rY2xqqtAKj~_`Ixh' );
define( 'SECURE_AUTH_SALT', 'q8vy*(X<^1T3P@v}<_o$6-rH;(os%iAw43a9>;W8+sXc,)y>/rz_dwY-[+Cd]@,4' );
define( 'LOGGED_IN_SALT',   'Eo5<fuKI,uzM-oBVg+cI`fNf_piy>-K=^AS[fTDB(8}Qu8BJK3d2VtbZpI$xDn1t' );
define( 'NONCE_SALT',       'LbNLCtV(^+l,y}T2 pfz=)xqXZqnROr7hD,WgV%>0(XaMc*4j;h.K[M!sgMK$F3 ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'csirt_';

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
