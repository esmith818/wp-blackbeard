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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'smithypc_WPCB7');

/** Database username */
define('DB_USER', 'smithypc_WPCB7');

/** Database password */
define('DB_PASSWORD', 'N1{vjk?R3Ci08Hn#^');

/** Database hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY', 'f04b0c13d9c594f697e5401ba5ff3efea35321fa1eab265de5b920c99e86081a');
define('SECURE_AUTH_KEY', 'eb07e59da0a8695e81355a88a5bdb2eda8c69e93c26f98e1378840f272b4de05');
define('LOGGED_IN_KEY', '0f779a338e6318ddb0f6ebbeb85f27ee28e6a28e8cc1e49f8f51d7cb81c67426');
define('NONCE_KEY', 'a11d73b25f09b5a7c5f24846b32ad86c7c446a1b7f9032daa41a71c4f6e99d97');
define('AUTH_SALT', '9778cc7f8b220880bcf9068560465b04cc873c4a842821b58331e0d824e79510');
define('SECURE_AUTH_SALT', 'bad2f3be410376d789bc4b8eaa5bde5cc899c7b7f47f805266dc9e27a552e021');
define('LOGGED_IN_SALT', '31abea96a63e50c99c3bea5f136cc786a865ed028053cf7f70ac13f4cbee751f');
define('NONCE_SALT', '15476ddff78fe87e98ff944c82486fa574b2088575315f42f2872ee8a033bd88');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'j9D_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 20);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
