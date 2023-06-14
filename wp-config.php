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
define( 'DB_NAME', 'xokajsyert' );

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
define( 'AUTH_KEY',         'J/F*D*7Ux^1Z6TbAh2dQ~Qme/RqFL,zSSm,T PRy0q,7E!mwf/(WPOAyAK4P#PBd' );
define( 'SECURE_AUTH_KEY',  'A=47FY_P70pXz:xe/e>avYE*GRWdP:V|Qaj7t_![!t6@H}B{Dj`ENVN-tLp?AlOf' );
define( 'LOGGED_IN_KEY',    '!U7ooFh?=N?*d:nPL!6~B/s!b%`T U&*H1i-i%$8uNAQ6;>) [QHP$^Mt2;RKB+D' );
define( 'NONCE_KEY',        'vml#@>|IGoGh^289TkINXn&nfKY0GPzymr6sr.C@?VQI7vb;X2H})6z?CP5?6|==' );
define( 'AUTH_SALT',        '3(SLYw$ z|wqrj&inF%rxkV3l]IYnIr1-~rMM~.(DvAnpq3LKjy_wb=l{y<GfRfO' );
define( 'SECURE_AUTH_SALT', 'EnlKn .<JuMJVA6v3GyP>vvTa/R}|`niOO%O!g8S|c8Z&5k*nQ=: Y%C|:I@bO(P' );
define( 'LOGGED_IN_SALT',   'TVax/Z[KfW++@F5B$;26:8w{Eo!R.Rl:WO)5g}qa15MzB3_WFhZ1WH8}Dw3wjf-,' );
define( 'NONCE_SALT',       'h<*$e-AG-]nWg5m62*ggY(:^jemm]L_,d:W#J|epUqm_|S_cvE8Ft|,%WeK>i:;O' );

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
