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
define( 'DB_NAME', 'testing' );

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
define( 'AUTH_KEY',         'g[*!c:?oV*=P!;QrQXi7Dm& tU4phrgC2OLJs^@t(jBI}{s#n@1D#9)LX9c=o <,' );
define( 'SECURE_AUTH_KEY',  '43xAHm`qHh{K-,^gi[s?%X@1qyhZ80X[_[_naVit%h`ZfgS_iJU6xK, ediP:)a[' );
define( 'LOGGED_IN_KEY',    'KygQe69RnC6*F2:&nf*6C%?+{&vKjH8s^H*SmiF>*Zd&><RvVCQ8b);GRQC>K{pE' );
define( 'NONCE_KEY',        '9?z$TZUy;b{p^%r=g/DCs9[:Zc!/,,-2]cc^RrU(.9>`gs<Z0hSz.Z_+4u,!X2-]' );
define( 'AUTH_SALT',        'kYqqC(u6AYR+fhv]!nbx4>R%arITag}}Ez||7|[b9XRmA`s0,./(nVkASc7HCY4b' );
define( 'SECURE_AUTH_SALT', 'MJe0Z}#9bc$9I)CX+z<1_f%-J_$cxlcIK)u! <-|M7m-H29n 5=xKW_aGJ16~*A$' );
define( 'LOGGED_IN_SALT',   'CGQ]Su`3U}jUKs~YW1:H|5<hL_rm[g9zK)$ H}FYdDJT+Tq2jFr_}+0kMjAM4V_Q' );
define( 'NONCE_SALT',       'A&|ji!M-t.%.wLKFCH*Rt_2asV@2M5?Cm+XXt1pL&6@j)SU}]vXAh !hLh9q{@h<' );

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
