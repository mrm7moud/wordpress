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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'MwhfAeZFUBieJa9S9DloR1//Z5UzbunSLbZjvHkBy3l0r8/JosiMMGT59x0uq2vpQLIOAMBke+pn0XgzhvOTWw==');
define('SECURE_AUTH_KEY',  'THaEpfdgICgteVVT4vNc11O0jcpd4LD/XdaWOw8blFpE66vt7EToOPtwy4n83Hlc8xLDwUWEzmG8yTpO4U2IuA==');
define('LOGGED_IN_KEY',    'tJxgbdX/qTbC7bCpUtjuWnsiSCqSMZHrOQjggRlDwT1dnaEgXwzJKhp0VvJjKFVgXsXjgHdB1f/nW5xuYbrUjA==');
define('NONCE_KEY',        '5rfG9db0ZrBVQ6p1xz4Yd1nVvjF5oRVBAplscOIblZ0iENzP8VIqMCjvqxIbWzUjaNf/bN3rNhfnKheNah+3Ww==');
define('AUTH_SALT',        'P5ZWq2ZNZlPeMu0nvDUz9cfTTd0jlwb/l6q/qwAcC5KC+90UwMKgBUIpy3qLKwpOAmpSUHzmIsGVoUjKsZKQrw==');
define('SECURE_AUTH_SALT', 'mIM6xCCCEQXpDL853g1L22rGw1HbMbJs5lJfX8bjtwW34jXxTmQHA+87GrV53zx+0eRvr3U2A7lsOe7gGq90pA==');
define('LOGGED_IN_SALT',   'i6zKuP5lCX7pWRcxr0QgfXzrO3xvmlByeClSAjP9sdn6eRZHtyQImfKdps9P9HjIktc1/5SC8YWX8v0q8XvxfA==');
define('NONCE_SALT',       '0rEeQmzuEWbZBB44Kaklok/9TS0vdfthfw6W7gIBSw9+GCrZpRjiiuBOgnhk1jwhvHU0zg/LYYTiP605lNVang==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
