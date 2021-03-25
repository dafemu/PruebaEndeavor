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
define( 'DB_NAME', 'BD_pruebaEndeavor' );

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
define( 'AUTH_KEY',         'o0=fAJOG?Y6{Mh%WK.nXO1#S`mETI*wH/ETw|9UgJ}mU^$B5eiN#RhY7XyZ1P./@' );
define( 'SECURE_AUTH_KEY',  'AJOf4-k Ofy[~H!#<0i$/J#[<j2>Zd*@vPmxZ{MDd4zA?<-}o4Xx;i%@*T,1&}~n' );
define( 'LOGGED_IN_KEY',    'zau`6y@)|S8<TmH`Kd{/5qKHPgw97U{0L9k6}(yAJV<:TB3?r8(O+YciVe_7nM,8' );
define( 'NONCE_KEY',        'Q]>|,1S;&4HgdeHJ)OPrE[:N}`k#Al,%KO^-kvCJb`>OyG+p2f-}12[d5cMvh=JG' );
define( 'AUTH_SALT',        '^)&`RW8h 0&T=$|$%GHZEn&YDVppYHH*BPv yUEe`HMLk`u1Xc_tz&XR+CSx-Ss0' );
define( 'SECURE_AUTH_SALT', 'Oz;}T,&(N,u9*%|3BV7P!y/WXzXmgo6.BXGcPH}QG5[i,DaYo`@FjsL4_AFLy@Ac' );
define( 'LOGGED_IN_SALT',   'W#XwQ+aOPyS:GzqS.{:jv.&C4[kz-i?K=2,7qHq],2X0[t=3##`0y?[vU_iKnA[s' );
define( 'NONCE_SALT',       'Igu XP:>q=Z{R|lMxTa[m>:{)B:WRao^QiZ<3{?>Wp/:b2p#e<$~Og!#FJ{C Toj' );

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

define('FS_METHOD' , 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
