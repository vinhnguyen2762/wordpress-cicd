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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '01268797378Zx' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         '_o)43JMOdSyHe[{d2B9dI2A0<Z4AB+I+{=aH%6wruS:i(n9.zDdL(,ICtv.35HX<' );
define( 'SECURE_AUTH_KEY',  'Cfg8&pkL3f?RQnd%O:D9lpG5uxx*d+=OGJs(X}cFUQnk4HvhsWL[HKJL*?C=4$^|' );
define( 'LOGGED_IN_KEY',    'xI7r!c>XhHLej3qGC)FU1~a80-r RRB Uk>;)]9j.a2:M;b7>1V><vdo/UKs%~$)' );
define( 'NONCE_KEY',        'W|IKrTjfD*o;tp3.#]bp!!cCozji8?ev$4-pPB7{+D,jJ@i5zJjQ<YXWyTd$Ao),' );
define( 'AUTH_SALT',        's1(2:)~A#~n%cyU@XD[uUdqaYP,<I4HGG{Y8.]AM<}NBW7hD[#`qlshLyz}G,coL' );
define( 'SECURE_AUTH_SALT', 'jM2ZcE(p7(QsOksgqu)8~2=,Oo%1Ud0vyt|QOZ|m X]r3I`|1d/?[B>i@8TZdt5Z' );
define( 'LOGGED_IN_SALT',   '0[gKI w^,GPNYnx=zTMkJyk0rWzDhZxW4J!0?wv7(hPf3azP%VJD.3),iT*y}?RF' );
define( 'NONCE_SALT',       '~=0&[?.sGgED%/Q$LbALc1q]yDdRJ |{kWCWUn;fhe:Yd`ioewZ2lB4;!Q5#0c)9' );

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
