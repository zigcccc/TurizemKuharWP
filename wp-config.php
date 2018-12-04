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

// ** MySQL settings ** //
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
define('AUTH_KEY',         '4m68SFbvXwNCLhnJI/D/lGhhGkKOy4YH9IRl7/eOwesg/xPwRa/jp1UZni4RuLcT9HU4RiU9jqfAtYdU1uhmSw==');
define('SECURE_AUTH_KEY',  'sLEXu33O2EOwalpp0yqikm8IuMOWTqC+u+Vt1npRPYRrjFnHQxohF/b0PxZcCqcAvpU/q54Q658p3nUXiYtUQQ==');
define('LOGGED_IN_KEY',    'mfWZc4ryJwsdvA3fOcqo+/fX1V71SRa74Sth31YEV59/MWb2xSrg4Ln/nbBKftG6eClR+ARwentUDTOMSzk7Tg==');
define('NONCE_KEY',        't/FU1VhGHIcFoEnHuvMw5ZpyY7DGeBMKeRrw6buS3WhmpscIDkCXtUhnSyDItSROTyHx981xcTl7w9cTAaRmtw==');
define('AUTH_SALT',        '76zMuqvdfSU91E7533ClUmEFMCrNjYrvszAqxWIqodVr9sSWuoEeMPauGSG4dnLRedObVEf5RlWSw7zDMYApSg==');
define('SECURE_AUTH_SALT', 'q0tEWPsJ8lkU0k2jAF7jpbAQGkJuUza+VBphk912F4sDg4PZuyU1Xb/pCjOr9D9OaPO139qogNRFHmBr/Ggj3w==');
define('LOGGED_IN_SALT',   'fBAATQqxhg81FWZKG0X/EA6CksvvvBD1bQGJ0HD/xJA+dRaK3x0l4nV5CJl6YyS9ZWjlQkT++7BJF/WSoYBPaQ==');
define('NONCE_SALT',       'hAamjrRFtVowCq8HgL49m9AplHCuijCXMo6BGV1xuBBxNFBLs0cPaY1zB/+pmQD6QYgrrFMB8+BDLHotp2QEhA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
