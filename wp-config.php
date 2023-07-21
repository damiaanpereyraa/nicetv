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
define( 'DB_NAME', 'basededatos' );

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
define( 'AUTH_KEY',         'S%wToQ7;t)J3/V~jXmhhYI@)4@Yx #Y%S)Wp 5n9{%0XxtLnF=@9*P@)y>|+ZQ73' );
define( 'SECURE_AUTH_KEY',  '4c{U#?-MH]4r9@e,sF(3ET1zh)%&O52:8Y5hq*2vmmH5RXl9~oz:pQ-0-JQ[t2ZJ' );
define( 'LOGGED_IN_KEY',    'bzn{i2SR|3_Iiau|3BXJESYyan,TLi{wsK,y{Kz9`,iX@KH7+d!K*_O8,9gL7qn[' );
define( 'NONCE_KEY',        'L@$Gb5D$605.w#Wt1{ek4gL-C^~]{WH{TvNR|QElE(GVlGLKae0Hd0%Q1,J>g<%g' );
define( 'AUTH_SALT',        'M5[D:ORg|qFlz{U8#sR>rs*+)$j*t#]icyariP0Hw%[iBb?zO#e3Y=7f2yA;(^vJ' );
define( 'SECURE_AUTH_SALT', '/`hJ.]?i^bU:l{wJ0/^Utl3{{tP1ofaGl5]f><Z`3jLs-[q+vng,9 pt^[*E1y7<' );
define( 'LOGGED_IN_SALT',   'JmGdzKBG-.$s=g$D@q~u|,f5U-lTm./+v3PYPn#g)N[[N(kS<aulTgu^pBkm.|97' );
define( 'NONCE_SALT',       '=YS)#qzD_{x`^4~vio8Vd$/y,4wp_JcT|xI@E_C,fA%g#2QV&lZ]H9bUJtp{1Zqj' );

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
