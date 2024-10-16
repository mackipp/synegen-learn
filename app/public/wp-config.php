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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '>ZD-q3*9_how!z6|O{_eHcG.UWD:G[w$@O)$oNh,n_1Z,}<+7Bdf>Avg{z{3/Pmf' );
define( 'SECURE_AUTH_KEY',   'Wo)t[c7koUn?BZ%7)/chHfBo:He!m/<)j%mT!dO1YaQ&C;zIKt@W]9KMwQ.8rR/U' );
define( 'LOGGED_IN_KEY',     '**;SBkj1>6YQI;P|X39_@qWR4Ii)v{2rmU$!$&~Kv>( H?a~imNB?oxRzlQh8q:i' );
define( 'NONCE_KEY',         'g0SR{CC:~Aue9Y#!Ylpj9%JV|^1NIQi(nf&e68g^uF$Jw9s`?$Gjm5:,#YBJ&%m,' );
define( 'AUTH_SALT',         '^MEbrb+R@L >ErLY3aCSq{<Lj,msxu7o gScdh?hW`REu:MTPWu)6:;iTFCi`R%Y' );
define( 'SECURE_AUTH_SALT',  '[[q!j&!CBJ{Q;*~WI 0@EF+C*.hd`{xKX(E:w-T`yq;J54p$@Bl}4HM/qEYPOu5 ' );
define( 'LOGGED_IN_SALT',    ';yt@RNfN;]!y#,^<O#nwWuA[[nU3$5Eqned],RsUYG[>kitS5Tn1 j#N)|.#aOM0' );
define( 'NONCE_SALT',        '}%?_S9JVwL45lqV8gEZDElJC$.08)Y=e7Ff$GzHh~:7M@SQqw7w:%@tqe|XMX}K?' );
define( 'WP_CACHE_KEY_SALT', '[qga,BK.@bvJ}goxm8Sb@ GZFK)<LNsi8J3l,9}(HWH>Wqog#N.P^RJewJO,^!sB' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
