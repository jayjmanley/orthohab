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
define('DB_NAME', 't0pper_orthohab_');

/** MySQL database username */
define('DB_USER', 't0pper_orthohab_');

/** MySQL database password */
define('DB_PASSWORD', 'NEDPeP4f');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8_general_ci');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'FBUlEUW5czPctTq5sYbxSgjm9F3k12WBtaLsYCsEK04dGugNzWgBkzDJB574EbUE');
define('SECURE_AUTH_KEY', 'P9Vv4U1V11pekHVjBc1UNMFiZrgFdGxhSIDFbDFE9XpqibBsYh0ZCLZ30Dn7ImWi');
define('LOGGED_IN_KEY', '4zJ6sPB5O0aJu9k7WjTA2Zk1UfFsZCx9tIgamdrv916gzITkZiWY1FFgYN7WTYaX');
define('NONCE_KEY', 'DTPsZ1ZUvRvxEJUBi937QqqlFXWUVJoP8AZMKApLz4QLAHwoMyNdVvgkxUTf0IQW');
define('AUTH_SALT', 'BWXil2t5hZSTm5grEFouyYTPfx8wjsPavJuaVBTWiFO2JKIF1g4NrVfWQocUJKtH');
define('SECURE_AUTH_SALT', 'xwxjYYAD7oiokyjRT9d5qYcju3lKBEOCgZgrKYBPxARM9ViWVD0hxTasemgDEBuH');
define('LOGGED_IN_SALT', 'TRowKnaKM7tHrTYbGBzq4ZNVVHE5CXGO3Pkfm4XUY1mDYMLDVZK9M8eTPB4mSh20');
define('NONCE_SALT', 'u4RmpwalvZVtgXKYaldH16bGrZGPbsQbUi7H7N3zYmjuU1pP3UIeu6OhGliVuWtx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

define('WP_HOME','http://localhost/orthohab');
define('WP_SITEURL','http://localhost/orthohab');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
