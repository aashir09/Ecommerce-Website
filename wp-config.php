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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'unaux_34144368_422' );

/** Database username */
define( 'DB_USER', '34144368_1' );

/** Database password */
define( 'DB_PASSWORD', 'g@E9p57S)A' );

/** Database hostname */
define( 'DB_HOST', 'sql112.byetcluster.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'kk5vncxn4jovuypwhyff0yjmd6aic51wal5uxgbdgdrm4f1rmtcymzaqrl2y7whp' );
define( 'SECURE_AUTH_KEY',  'naih9o5orxz0wwtrnrs1tjeoellqcl4tdl5xnbhnypl5zjzbgxzkm5rykc8zrhyz' );
define( 'LOGGED_IN_KEY',    '3iugrnpii1tjuxfdt2u8errbxxv5kf7tq00fmhvt9rdrgya0l1tof17oortbzhy6' );
define( 'NONCE_KEY',        'qh8iz8zhyqwc4wxchvw8yiwwm9knifcpbypyf5pfmox1r5ns1qjm0zqpjlkn329h' );
define( 'AUTH_SALT',        'jwhkhp955wl2rijkdtgrvidear03xapcwumu6kuyswwyueyzatdsoz29xce5mrqe' );
define( 'SECURE_AUTH_SALT', 'a039komlfgjwtmcn0bhze4z4brhbc9qvnefkpenzvcm85gspykmf9fksjv0s3bi5' );
define( 'LOGGED_IN_SALT',   'mbmq4ybcvitcqjh3vlmgw3guu0douqmakvdukdixrmgrhbqb7uae382x0tdywlkj' );
define( 'NONCE_SALT',       'y2f7iahsrqwhjirmnxko14siamqktzokjxjywjc0yi2sgpkwpjmg9zhouzmcaiff' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp4x_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
