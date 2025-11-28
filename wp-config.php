<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sing_trade' );

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
define( 'AUTH_KEY',         '1h)s$fUHC8rZfEcbAY1PG|8_FoME7SoXbLi0^1kd1%}Do2=U*Al&f7Ah)[$Li!6s' );
define( 'SECURE_AUTH_KEY',  'JDPdJ;@=ZH<FzCR}vkf?p-hf*B*ME.+-md+L!n)($O+)[0)N|Yy?.GSi$Q!4v<R[' );
define( 'LOGGED_IN_KEY',    'vy?(<6Rg}xq~tkVj_F;b?xdjaXD:yte[YzXf~s7^N%~6t!4<[Yl/voj^y-QAn|ZS' );
define( 'NONCE_KEY',        '=-ya0(8:}2reGwh@=7s@V,|r5x!+UW gk.SNIZhl6/Ms!QrL^lQQ](!9lWmAWIa%' );
define( 'AUTH_SALT',        ';c>BU0b;O(Iq+-#Kx[,?~t3olD{Y$|5. !H6F?cm)~n25xW-N (_C <-4w^]UR1y' );
define( 'SECURE_AUTH_SALT', 'UD;{<Y1b-M!-*J_JxGDhUHpxNu^yG&CQ{xB4}AiyZX&;-aU(,?V-6)jcWqsFckf=' );
define( 'LOGGED_IN_SALT',   'A=7WdMdCw;Z[LaR*aQFnXdT8V$jMAiG5sDLd%;Xl7R$,4a6|?2/@S6twafkM)$;(' );
define( 'NONCE_SALT',       '`Dv.UJX6eHE)SgF4(,3]8x~*RL|<Gu{PO01+Q* XOIxw*~9Tz3Y1bD]lTvj>.[Xe' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
