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
define('DB_NAME', 'indexweb_ek788');

/** MySQL database username */
define('DB_USER', 'indexweb_ek788');

/** MySQL database password */
define('DB_PASSWORD', ')Skp9O-S74');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'mrcghlmu58sh8ydqw7s8e1pskndhxrwca6kpwquqzkahzluwf7nguv5nmtr4fhm3');
define('SECURE_AUTH_KEY',  'vv5fdqm3c995ykmj9jxmmdauomow5vfcbuq5nt1ckrn79ewdgho0qlx2qshddsse');
define('LOGGED_IN_KEY',    'mfkjurjguywit10t3nrcxdirnzi0q64htmxctc1omlo6qlxjhemmqihrnmzo5snn');
define('NONCE_KEY',        'lbumyisib2uxmuagro3wmfzkjqh0wgony9cifop6057r2swkc3cv5alzlp4rrqgb');
define('AUTH_SALT',        '8tcikkr9myrip1ae9cqmbqb0xfke4mal3fo4zbyff9n7jlwg3yzakw6nq74sssb3');
define('SECURE_AUTH_SALT', 'o9gfc7wcpvncoravuotq2mkvu5g7pxl6moqwe0palk0kkc9gzhyi2grvughgkxhe');
define('LOGGED_IN_SALT',   '7cscxgyxhitdmj4pvfsx3w1ufcza081uzavyj9iuvseiqepayr71oqfzupkwklyo');
define('NONCE_SALT',       '8f9ejnah18zf0bvploppzjtht9jpugcylxrifrv1afnyqblovccz6azlbjcm0pgl');

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

define( 'WP_DEBUG_LOG', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
@include_once('/var/lib/sec/wp-settings-pre.php'); // Added by SiteGround WordPress management system
require_once(ABSPATH . 'wp-settings.php');


@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
