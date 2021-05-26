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
define( 'DB_NAME', 'business' );

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
define( 'AUTH_KEY',         'S{khQn}PtUh*^$|f]3[#AWv:P{h!Y#MH,HfMV4>?98(?y:mN}tuNcxLC1)1tf8>$' );
define( 'SECURE_AUTH_KEY',  'WwvWDn[h~*CKa+[/X8f1x9XJm)b,VS>{a8Iq|q`SJCIFd-/Q`O-a6WUt3|^f_:<7' );
define( 'LOGGED_IN_KEY',    'Q.T= Q-.-*R`|`nU>w[ldnu3VczVkK4Cah=rC~KI__H@|2y&8[PX%-p-4-Kt_{u*' );
define( 'NONCE_KEY',        '(qvM7^KQtjmpT4#M9^_TQ/k8]S=#<-l[U;{m&aTs8bP]4q>h<A7NLp*:Mi gUgYB' );
define( 'AUTH_SALT',        'HG?:g<qwcw~k y,n(a&DSgWm2@f^I7Z}MI6eP<t&%n{#y>rT<gV<|q:9gl_)EPRY' );
define( 'SECURE_AUTH_SALT', '5Nll*g*uQmep-GmjA=fg6Y}/ML>p{X-l-odwm0lmt]mQE&&/:n#*h]}GpbEu`?Md' );
define( 'LOGGED_IN_SALT',   'Iq_T:x4#n!.C[ >IC4M~xADb7m];Gh>&m(q07x8<e?80Ho4*4cDJ|]@X;`%[o-al' );
define( 'NONCE_SALT',       'mqV8rs`^U9tx5N;244=6Wl wrYZ~FyE`Nw3$N4qEHa}>gif|fs#37!;LmkF_|j?j' );

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
