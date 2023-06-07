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
define( 'DB_NAME', 'sohail_db' );

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
define( 'AUTH_KEY',         'sD}/wGR6@[+F48~2!Cs3d+}g8 UeBa.K(RqU(WzajZN1FkJI5:MAARRM ](nZN}?' );
define( 'SECURE_AUTH_KEY',  'Y)H#~N0pGUZIzf!*>!7~>)*;ejkv@^=$Ov!O}@YlFJR99Y.2Z?v:TJ=#QV0{D93N' );
define( 'LOGGED_IN_KEY',    'Rdwxcuz)+cp`Buv847[}&=.:Ozr62d])A_R%Sd`fWc/FofcvTXG-}^gO<W04;uT^' );
define( 'NONCE_KEY',        'Wrt,4((F*=_@mv|i@DF|.*6x}0Jh0`UvVSJblhS1X.eLy8w@pR.~dyaKQb@*w<h+' );
define( 'AUTH_SALT',        'quWU/M)m=|e5`ev5hEKn;l-y]tHZle_(@lu:DOaeF7E)jWc>!C|s3r<F6kiW`)DD' );
define( 'SECURE_AUTH_SALT', 'SoWs;Qk?Eo#tm7V`b<vlSt;nD#yr;@ ?1&PVZq{_CMc]@wi6VUgi7HuXjiW?tHWV' );
define( 'LOGGED_IN_SALT',   'V.a,NklCq?vc_%nuM?TxHQekAj??c7v<53Xe8tG#D7kGQmRd?)C)C[64CjU5vfze' );
define( 'NONCE_SALT',       'fA]NDe+Sv:HseDA.~~2sp A~ZLg>U=^1S=24cYJz},]VGP,^L|w7MeG8tA<nUo:e' );

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
