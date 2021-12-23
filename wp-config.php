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
define( 'DB_NAME', 'intell77_consult' );

/** MySQL database username */
define( 'DB_USER', 'eronumaj_majiero' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Majiyebo73@' );

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
define( 'AUTH_KEY',         'JdI{DE4U|@Zv{c{G&U.;^mb,N5nrYW<5s^ZIz}08^l.h7F2ZZSX)6=cUdA+E}5fQ' );
define( 'SECURE_AUTH_KEY',  '9t&W,?Y[t`T[=s]^|>VSJikmt(D[0K[uws4u-/U5*YGBgbPm!(7&s@EXr4PT`!xV' );
define( 'LOGGED_IN_KEY',    'g&KT>-G%,-wmPCt?hw;lr#8OW#/}hXNTuo])?LtX?UX*30Q(&N<oZ8KRN-.Fs3zX' );
define( 'NONCE_KEY',        '07T$&,}Bo#nSD2ayw77c8;bfLLYmPUK*^u|z2yZY9[LV#$m/V{1s_>Y;JZe?U(i!' );
define( 'AUTH_SALT',        '%Sw][Wi_RZ>]:(iv{vBaOZt&.z-mE|}gv<@mbiO^f:b4)I7ww1$[n:Wo4y,zSR.+' );
define( 'SECURE_AUTH_SALT', 'z(y]izY4Ak5it<Q}FkH4bF}X0y}5M!@vSze77CC_hSSpwWOK+=+&2^XoL4Y sM4F' );
define( 'LOGGED_IN_SALT',   '_YXz3tqjoUV&r4z0#IvW6S~V NfB$&@YKqRY4W~qDMm;h/9(ZjdP[S?5trzhNLnp' );
define( 'NONCE_SALT',       'u2XMLC1LSmZtxlWE(XWtNr*~8P7(LMte#^xK]JU/JjJ$qnb$MfbCF0%$-28nWs25' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'con_';

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
