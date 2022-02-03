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
define('DB_NAME', 'francois-niang_wordpress_a');

/** MySQL database username */
define('DB_USER',       'wordpress_a4');

/** MySQL database password */
define('DB_PASSWORD',       '02Id!kOZm1');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',       'TECoUeufkJ9z!n@fxzS0FGKG8UI!euMF)AveOjZn5weJlIF31vIxbuMqAvK0dmiK');
define('SECURE_AUTH_KEY',       '5eDVI28xe!gYM1)#9HO^K%HI%OTyR2rZhSCEN#X(7x8nNcvEBt0mHEt&LnPvJyzk');
define('LOGGED_IN_KEY',       '6Jmf#p4Jm&7DgHHNqPJgJAsGS21gb(P@MoML8juYPTzYJRyPz#Njo#Q)()kSXpQW');
define('NONCE_KEY',       'J0ewVGrkoz*aJn0uWCjq7Lj9lp4m!tiUHG959#r2pFKOIl)EZ2d*hY(4bWL^@H*b');
define('AUTH_SALT',       'QGSKrafU#TAxhMyPr6zIVkp*%t9)C1l&Y#lZn4Y91n6E4eAmO9MYT*S8Zp7s6QU@');
define('SECURE_AUTH_SALT',       ')hBU7kp4A*HxXHf0r*Yc4ECw0&)nFfVILBqryExghYu49*nYj7mzO!J8E)Dij%CY');
define('LOGGED_IN_SALT',       '&ykuFqrTM#01mLc*T9lytr5SNsxP!wgv%!JBa3^K9EcNTe*n9MQtLpROWUeu(Oa5');
define('NONCE_SALT',       'KZ7qJluC^Uvpzf)Zd0CgTwEwkgg^F(SA49jM8ID6M&mpb9n7F!O6Y4dnhGST*msj');
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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
