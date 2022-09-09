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
define( 'DB_NAME', 'newsite' );

/** MySQL database username */
define( 'DB_USER', 'durjoy' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wkifXp2sWwTN5JG2' );

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
define( 'AUTH_KEY',         'o*UJQ1[3;/arna3b.Uo+%Pq#OHPOl!Gn/eHteqV[]BIfOPkp9xM]A5.14p1H}lv1' );
define( 'SECURE_AUTH_KEY',  'AG!$(}|2fu-VPJf<!:XeI3BFr;ncsI}!^DLeG-`xN`r{Nq$(.g4Mg=FhvPEh0/7N' );
define( 'LOGGED_IN_KEY',    '4|o`&]{|ce&Ox@~IQP,,Lo6I(=wDw2Lbf[Wkej(BXr:^L{cl@40@OAV}Lna`ASb^' );
define( 'NONCE_KEY',        'A7+46Bag<)CkQ#GxfVI:Xp3i3kHiG3SbJX#F;]#H93/E I3kWBALvf2g7)o]~&v&' );
define( 'AUTH_SALT',        ')73G?YhK+sG!nZIQCCi$42%`6;@vOY=Bpqj%!MdU0j<$9K4P n=Ox~$<^EKp@;t7' );
define( 'SECURE_AUTH_SALT', 'F[3FOBpwwDDFYF@K(s[`x]%E/#VUWnMEF+J[+tlSO6J};#}1r]jN11Te,aEfraK8' );
define( 'LOGGED_IN_SALT',   '>_f@pS7oHOV{LWUk46(a<@)Z4}G^e:yZVr2w0b+=VQuJB3D2NBVW}):[i%^WHyuT' );
define( 'NONCE_SALT',       '!0?Xm0.m]G5([NfP$yF6M#1_Le dZ]znA3S7j;aI%Ov2snT-{&Pyg-!N[xQx<8[D' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nrd_';

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
