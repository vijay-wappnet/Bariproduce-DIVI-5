<?php
@include '/home/customer/www/bariproduce.com/public_html/malcare-waf.php';
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbgbjcdmaqobns' );
/** Database username */
define( 'DB_USER', 'uoj6pgy5mi4ll' );
/** Database password */
define( 'DB_PASSWORD', 'pjdpgmmzb4fw' );
/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
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
define( 'AUTH_KEY',          '?!Xp6WbUApR=|^3][{8$&fBrC SV_N=Lao}(?EKUTbhnr6[yVD)F7-Fv;UCbAS3]' );
define( 'SECURE_AUTH_KEY',   '<M^+L3VuY1QNZ2+oFl%H,f~/I!Itu6DDXQXnAxGt9L6FO;>}hNI-%VlU<T6O%c#D' );
define( 'LOGGED_IN_KEY',     'xH;Ii}Ye4Wq4<=*Jb?g>=$A]u,.7x+tjG6>d`Kw`Q+q8kVake)E:AmO_a{wS6HMn' );
define( 'NONCE_KEY',         'w_!Pu4%~xK ;#5:YMW/jWnQ>I?YYF(}b;KxHBu$pShus):2<I^inD)=>0OA^d820' );
define( 'AUTH_SALT',         'JiM6Q$i^(.MzrCoK|}G%5Q:<,vI89r+fR=kdC,l,74KC>hP;$tl=ZPc1MQiQ!{c9' );
define( 'SECURE_AUTH_SALT',  '5F,soRb:5|{P8>|)mni1G7=/*p5]2GL_{j%v3^{0xz;MbLX4A}I&e<ceMWeLwGYS' );
define( 'LOGGED_IN_SALT',    '2eNnGDZ||Z9,Pzv:wlU1cTA~&,>8$nZJZk8#b4_JpzBC;{T]j2P!N JaRPOZM+Q:' );
define( 'NONCE_SALT',        'E8W()q`dGx<hdHi~S*+#ctfm9aJ=L, L+?(GyQS)NRceB0+C.g$I@0:B5WkQ1F7k' );
define( 'WP_CACHE_KEY_SALT', '=s7Q&.Leg Cc1I%d{m6{/j&FT_(DUud|F#Dg+jcA.}9V_!v7!VEsq4bRL/J0DSa&' );
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'aod_';
/* Add any custom values between this line and the "stop editing" line. */
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
define( 'WP_DEBUG_LOG', false );

/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
@include_once('/var/lib/sec/wp-settings-pre.php'); // Added by SiteGround WordPress management system
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
