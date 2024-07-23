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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'websiteBanHang.com' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         '9oK1Bl5oUxfYiI79D6yib2yfZWJQSFiDw1WcEg4hvgnYlKYxfu9xLipE3TfWzaDI' );
define( 'SECURE_AUTH_KEY',  'ce75vuMV2F8AZcX5OtXXcZKa4bEFi7w3elwFCD1UoewDu1K4zC3zyxD6RxU0eYYI' );
define( 'LOGGED_IN_KEY',    'BEhF34M312KGw6UTxjKS9CB7DybkbhIdgtOjigUZeIJiSd84dVjDcap7x7zMvCcw' );
define( 'NONCE_KEY',        'Ah2locPqiQh339OBpRkYaSNV29ztaOfXVitePGiu3xawQt6vFcaxZ5fv24a9PQpa' );
define( 'AUTH_SALT',        'QDl6rWzXqU5h2VxfIHKHK4mmrzaiOXPUk5NkPKBH267TPN0ACCICr6Epa8mnB8r3' );
define( 'SECURE_AUTH_SALT', 'YeeOFNVn4nSdzRNmDVFMqHqMxOCl0L7bhrORU7ii6ECfsxK1POq2pfkfcjVLzEiv' );
define( 'LOGGED_IN_SALT',   'Z5Gu4LSGccFPGVBWby5cdOXaiSVAag5KNoxQ4LogcdJBMHSNiNiIUziZ7BPgMqXz' );
define( 'NONCE_SALT',       'QoezICy0bLdFTTFjJbPhkq5remgxrcLiUxNNbU4dyheW1sJu56bDnTUZkf7FrYMN' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
