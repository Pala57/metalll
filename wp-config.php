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
define( 'DB_NAME', 'metall_db' );

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
define( 'AUTH_KEY',         '~V:f@7G1$6.>td.Fs=e&sXkNKq2kO>i.ZTz1Q)68!3nI-.2b$PwUf>jrPZF}-y:[' );
define( 'SECURE_AUTH_KEY',  'LYR1;3y*WFr%pBE,z0@#O?*)dc/:!qUp_Sb1(Yo<5XYSM[2P^ztNdvGtbXp2:$)>' );
define( 'LOGGED_IN_KEY',    '4&ZHAx`dInBkztt/wYU<4I=4qm,yBA20|I1QZ(b{e4;/zAv{2{AY<>iYATb[2wkl' );
define( 'NONCE_KEY',        'MJ33L;xHr`?2w3!`z$)?/cAt`jrRvqg?#!XEld_b&_T#PK(irG.t_jCEpbBsiruQ' );
define( 'AUTH_SALT',        'd+ <Gg7Nf3)|b?eT;K)#3-IRp5ZY;o-9G(8Ia^ud<6YJfu<vNAllObII$.k[n7==' );
define( 'SECURE_AUTH_SALT', 'ZA>kvD1K6@&mt%p?+?pB[Xu{mqm#QKA]I>G=E38R)pM/6wO#iyq<pw@#IGA&kS|Q' );
define( 'LOGGED_IN_SALT',   'w15A~o1-FSRaH^gy&n&[oKo$i/Sc}2`Ub4 ~Ok<Opcu@.3.^Yo1NP_9 {jbX}]{/' );
define( 'NONCE_SALT',       '<K-/Xk]B6P8t=u&z8d>JGEpJv$seDpm)H4HhDn^>(!CCx7i?USG,t(t`*0j(%tbc' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
