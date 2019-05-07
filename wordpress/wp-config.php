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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'RefVcqU>5e^Zy s?!bY08S i$^k(j&kA??X l& zwIM4cO0|iJAvoqw?[W7U7?=n' );
define( 'SECURE_AUTH_KEY',  'e/FZCM/, iJqaT%N{2H ]!Pu#>&xW,YmS<>_ys0r,TaO,<K]C[$a+(F.^LMZ]avX' );
define( 'LOGGED_IN_KEY',    '*l8~:AB9N1|f07yc!aW^sJSI#1gEkn;=z(fIf-le%0A6n~u@vOw.`X)SKES;:%Sc' );
define( 'NONCE_KEY',        'mL:^ll5-tO~I2 T6v^;RDAOZ(k {)m] SI(rz2*wBsG[on<@?Q~kIJ5M_wYCq+}g' );
define( 'AUTH_SALT',        'W`SggTR}Yspl~<u{o w8!A`]7>G!Z63dZclS>#J;&RXm~c{T>zlw#4:~8NSo9AeW' );
define( 'SECURE_AUTH_SALT', 'mv^fbOb0]1A:Naaf;4n#0R()Lv43;x#Q*IN<$3dDs-.}`wG{HM!SCxKS`*eYO3L=' );
define( 'LOGGED_IN_SALT',   '@62CA3hZFg3BGxLT?F[2;!WV^5^5}DF1O0}Qz,lS-fYNWKP0k%:2$vh2qmG5|ZBb' );
define( 'NONCE_SALT',       '%xvrejVU59Uw:u tp?E!BREa[Z)zwBVWoa#;9na;BhGYb3JH>Swjfl*ZHJo. f51' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
