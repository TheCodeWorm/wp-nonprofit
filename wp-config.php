<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'thecozwf_wp537');

/** MySQL database username */
define('DB_USER', 'thecozwf_wp537');

/** MySQL database password */
define('DB_PASSWORD', 'Q7S[Tp97@Q');

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
define('AUTH_KEY',         'p3qgyw7onvrf8k11yat3h3nxcyycfy91g6d6balkjl7wjrb4egpt2nbhbvkp6wap');
define('SECURE_AUTH_KEY',  'j2ii5bv7aqawakvuxmn1jzcoq3198dad957itnmxs3ziob6dr1oqitorclhlnes2');
define('LOGGED_IN_KEY',    'uzxtgz8cahja2dri8j77yxmgpy7jqkpgkgom6jssf7ph5u8ypzw4jjaezw2yfror');
define('NONCE_KEY',        'nqp4zjanuk7vqxsoliftw24n0qsuak0wfaminnfmchizs6yhispcenjzpsvtmer7');
define('AUTH_SALT',        'sduownidqxrcqatxztkezwlwopr22zd8untnqd1omlqaj5yxpai2ayifhgdjhffz');
define('SECURE_AUTH_SALT', '6qb5vkai7vxs5kbp2sy9mc56qaer7yjifeoafltbtdj6favtfh5emuqcpusslit2');
define('LOGGED_IN_SALT',   '7cwdcvhah2phtnwiydacydbfvyqutmygref2ypq3434muatyagvipkujjhkcnxnt');
define('NONCE_SALT',       'lcuz4dq9lrmhgqw7uw4oolfvagkmlko3b3fnulehsnzhyw2xiqlowkdhtdijwd4r');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp6l_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
