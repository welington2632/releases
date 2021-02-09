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
define('AUTH_KEY',         '+nOoVGu/2eiy2NSjxSkmpv6cy5QNrGOBQDuoTWj050LJt5IFIsfkVyC7YixCaAye7LQIllb41tYl2lim0dppZA==');
define('SECURE_AUTH_KEY',  'wwyCSeNlfN1/t9D3DCCvdndAHRumoltzr4RwHsZ58ZL7INVo4s6+Dw+BRR1Z+nKKrE1BWqwM1vgQQXLZkVW0OA==');
define('LOGGED_IN_KEY',    'PNrY+lc5mYnqz4yLBESU8RSl/YI6wbzKFoBON1vJCE1qu858ETPnQPNLjhSq9tcRB4W02BPf4Myz1GGN1zzoiA==');
define('NONCE_KEY',        '8z4MwN78cj6xie1jAL2L8mbO9OOEUkTn/x/3LQQtEzgGJtzfBDJjTHj1umWbnznxyNaZ/CzVeUC8PD4fArrRkA==');
define('AUTH_SALT',        'CBeJw249wiEBjOqsxiSvn309AW+PhW3KhD7xB1I9P2PYvzr3+7bv7nYFEZEgy8ozvA/ERGuJviFXUY8pK9kYsQ==');
define('SECURE_AUTH_SALT', '2KUBngwDuVmakKvH7yhG//iN40yX1gtA2oI6J/IaCptsnAj+n8/nsIB0be85/YiWoOjwpBEhnicLHu1K4oy5Dw==');
define('LOGGED_IN_SALT',   '1mgJZ8sHdZeMtQEz2rXgn9f9MfDV2D6qiEfTF+bjLI/bdfsADNlHpdTFjcg5+AYq3kYu4pL51yZOrMW6/l7oFw==');
define('NONCE_SALT',       'zEi1Uwyq+vbnYhq3p1+imY4qTJYynskR+Rlfk4DqPe8cvV+ZyESHC+w+k7JJFCEKXqXaqNIG6VdYfAiFajpBFw==');

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
