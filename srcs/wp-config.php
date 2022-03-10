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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'cchromos' );

/** MySQL database password */
define( 'DB_PASSWORD', 'cchromos' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'M!~#>%))EMLcZ4|z8:1!JR+XtETGzH5|qMR]vF}o!VIo+I-p60 pkK? 4T>#InST' );
define( 'SECURE_AUTH_KEY',  ')3Dn{W;eLa-]0GsoIZ7^oB2Po(5rqFKIpb)W8DK85cEoAC5QF8+1n)qc6bp^@w+;' );
define( 'LOGGED_IN_KEY',    ')-|8]W~_Kzp)L194JP+[c4.Vh}S[Bj*y$zPs|`2v[o[8&, fH;|P%UA;r3cYNGJ>' );
define( 'NONCE_KEY',        'w 1Nqj`][-j)MIB=imw_X_Xj=Bj&Jk~>e~V|ZP8R>_?x3&!0s!(XC$.i$Zr,C&bj' );
define( 'AUTH_SALT',        's|MTCbzDvV3Cfq-jR<b8_:jzIPvw^*VoWec[3:_7ofLa&fk1`+i4^:@D^-;W}16W' );
define( 'SECURE_AUTH_SALT', ' 1Q(ZpO5a;+Wv3B(#-PB0G bdV^dmDCtyF`=HwdgF-.jAbW:cnn+gKK$/r$q0uP6' );
define( 'LOGGED_IN_SALT',   '2H^Fjzu=|Pg^U7k4`]Z~iE<}{)C7_9jJ^6^uVs7?#pGR50,q4pC>1FB<=d^;e[&E' );
define( 'NONCE_SALT',       'h;<]%M|=&2$H|D~?XjKAfJ+$b[3y|o?$fG<WCYcDq^F<+w+#f{;*vTm]$d>&M8}s' );

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