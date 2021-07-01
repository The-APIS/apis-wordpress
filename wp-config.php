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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Crypto' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'UZzt2N@cFIef/B6e9)DH;5%tf<eo]jIf{65}Hq~,e2g,tinZ}$XVYg6G9/:!wKR[' );
define( 'SECURE_AUTH_KEY',  'ts8zs}|RdPffo+^~J4G&^ ?7+SjB9IgWIYE>VVJ~[10I8.XOe[x(wAXd]G.-I.%%' );
define( 'LOGGED_IN_KEY',    'C<-iQ#<LQM66ob Ln;$e}jEg1b>Rdlm;nB;8Jq%M.2y1YYN<$I^?+pC[NThkXWc*' );
define( 'NONCE_KEY',        'lk*HZRx7RE;Ko4ogZ_@X&8os_#aq}q;cdg)KG(!j^C1qV.M:unrB8z9.dDqGJ2@r' );
define( 'AUTH_SALT',        '2_<9Y7?bbEUe8o1EM2gY,wKVi`5yI:RrT/5Za Xiw:HZo%to-/nn]^sfL3YZNUjW' );
define( 'SECURE_AUTH_SALT', 'UN-TvAMqFrm1Ib =XsDnT=PN/dl~366a:2=<%6<Dp2G(;]/DkJnj#L%]j}5I<5B5' );
define( 'LOGGED_IN_SALT',   '8GG5J:lx+@lq+,R&StKBa?Y@TM4iUB+$OBL,Enro2,Bxu9UMyOrp`cEGk[<ro:iw' );
define( 'NONCE_SALT',       '#KFx|cWhI4~{@dqQ~`m|i~! kYJ[+9A&~;-y^-?` IjYc&A%+d0eSGH$5vq*]3Z(' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
