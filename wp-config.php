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
define( 'DB_NAME', 'sitioreforestamos' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'Q@Qz<*^b>9M2,r_ 3b`cNg<o@Pd^s@ kHAd6}@{7T)jlvjkU9,tRL6+S0a_:_X{I' );
define( 'SECURE_AUTH_KEY',  'Pv9YMKT-5<b~#ecIs]?zhKLg!@4pgb=dmBM]]1}K}9sH!N?f8%J/ws@iRuLX232H' );
define( 'LOGGED_IN_KEY',    '{&G?Ezrc<uIa&?pd?Bm#i+d9dXa:|L<n 2O={zgs[FaF&{GS5s0EiitP<ulE_|h:' );
define( 'NONCE_KEY',        'SGZ38n0)QhgrLk+]c8Z$)K&:6nT(2m7m#29*8Q(&hbmZ7jFc2A3jmZYVQ2jiv|Rk' );
define( 'AUTH_SALT',        'Asm=JzTHyM.$@Kou~Ji:(EEVMigC^?m9tUnp!=foX$ce]}|g5~rGJ%|Lxl>RRR{g' );
define( 'SECURE_AUTH_SALT', '7t /ju8-h#9bzKVYt&qSul,@QZA~QVV?%8QJL1x&]5LJ0Jbx69a*9,$#<da3[pQ/' );
define( 'LOGGED_IN_SALT',   'P}8;|TcX =:O.}KwaD68+~^DxI-0grKY|[_&pW*?}qq^||Gej`+hED WC6(e|D U' );
define( 'NONCE_SALT',       '0QQG(U:+`axr1^-SO)]Wm^LPB!:To*_5;&zb10$0|$#G(akuBX2Z7{>7S.53G>RU' );

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
