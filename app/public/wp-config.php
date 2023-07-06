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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'USOK2737V/Iuh1Y52Q24Ne2gHanvIXKgVGWyu6ZyeURuCRLoCisTf+AD1BjbVaT3kHs/WixSoYv4pKSHirFPHw==');
define('SECURE_AUTH_KEY',  'qbscmzfse5aJtYSOrbmQsXTdDxBQm3Ex60Iop1ZziP3JrcrfYvDIGAtk+jiDzeE1p8Xuo2kDKvH7gvE1rhVNSQ==');
define('LOGGED_IN_KEY',    'Q7ycY85kDeLMtlEuGKniaqdZl3xUojiKSA2wUiMIrxQgbXmRAhqhp+KSyc9GoZ1PAQ9Pcwp/5rZ5sinWZxPpig==');
define('NONCE_KEY',        '6ZoSqsz4NLU0z05ECIz9WCOtdFGxFhbSBQ8VnqtrM/92ZAAdQa8ln87dvt+Kl9GrN0IpqD+S7nFVoKc02xdtcg==');
define('AUTH_SALT',        'FRhRpQezPxgycT9CNRRcehsrJT9UpVFkiNWEhNUGKuB2dUP2iMb7HNbT1M15Ku2jt7KNGNyAmXaK6s/WLp84Bw==');
define('SECURE_AUTH_SALT', 'L63jpBYZCwSKtIM013TY4E4eT3iwcPBFPAYLJogNHPykf5Vw1kUY5uY7RlRyRsL1svQ1UDllvN84ZhA1tEdBgA==');
define('LOGGED_IN_SALT',   'nC9XfsuA2/l8c6olZ3wGrQBQVfipRQ+Gni4QoWNyN+T688wtDUmTeTWFPvLn6hU9CG97nv/Ljecv/X9eB9noog==');
define('NONCE_SALT',       'M5B/c578LX63cO2Tpdn/e/vHGaP1Bizu6p2TDQBcB5jmLDccY9qa49jhI7nweQuuH3j0ibYh2hgGTn/V5v5n9A==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
