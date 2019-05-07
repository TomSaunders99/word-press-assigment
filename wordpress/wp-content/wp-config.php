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
define( 'DB_NAME', 'thomas92_wp203' );

/** MySQL database username */
define( 'DB_USER', 'thomas92_wp203' );

/** MySQL database password */
define( 'DB_PASSWORD', 'p0P64.3.MS' );

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
define( 'AUTH_KEY',         'yxg498jbpaz777kqdllvr4zmtvkj8npnn7jm25t5dvgor2fb7qukjftdrzioaizh' );
define( 'SECURE_AUTH_KEY',  'vwp4q8wtmxmi8z04wgruipzcrbt6ecxvb4urtlwdktl5399mc50v9y6u39sauw08' );
define( 'LOGGED_IN_KEY',    'xdipk8nvxqfjd5yjidtcadsdxjw83mez5hjlxb6xo1r4cov7mcumoffm5pbu3lks' );
define( 'NONCE_KEY',        'gwomqas3izrrsvzlfdumyextid7g31x6deectfzqbdvzejee6dzaprdhezzgfksw' );
define( 'AUTH_SALT',        'osd2ieghr54hhras92s9qk5ywbvlzcgwkunl8zud8jhqrgfrvg9yfddkqlgqthw9' );
define( 'SECURE_AUTH_SALT', 'lehofotha06hzz0yjvkb96krle9bmc6mejvdacusbctohfcu5yrwxqt4qzbmijur' );
define( 'LOGGED_IN_SALT',   '713gng0yj2pilblvzkyvmf5wcxdwtcajmd5dqbj9vkuwcjw4lin6dgosuz4ohlgd' );
define( 'NONCE_SALT',       'tipfliymsbcim5hnplp7ablumuzpyuyzlxorydneu39sw8lzrjkqbfiom6jaspdj' );

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
