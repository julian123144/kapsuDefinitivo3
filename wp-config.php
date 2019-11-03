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
define( 'DB_NAME', 'kapsuDefinitivo3' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'b614aac6b6e28dd7029e7518b0ef89832789fffa1fb318c5' );

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
define( 'AUTH_KEY',         'C^*-#MiI6rj2OM?lF{`QU#Dhzpd<Q{j / @dQz^GtlKAz%[iWmFg]P-71d^*kq 0' );
define( 'SECURE_AUTH_KEY',  'fbWu}z_`f.rl,/BK8+07{(LTacTyqH9=V;u(S9H <J*6P^&8{4(R}#E.P/LE: /%' );
define( 'LOGGED_IN_KEY',    '-zX3tO#e6USw6kSJBK9`e+=Q~o,6&F)PEeAg&g:LEK0()~]x}OS60bE49bDt`mob' );
define( 'NONCE_KEY',        '<_fxX~6:a^Ifo>Z{M0O*=%bTA[MBe?!$Qtr.y7Ev0r/!}q@tzq)vp+=WV*h}>~gF' );
define( 'AUTH_SALT',        '=>`]gByNx=3OEL9^|6JR1mFz?ir8f.Gv4Kj/r*=>IIfV/ug/R[UM9s/v>9T2jH,{' );
define( 'SECURE_AUTH_SALT', 'M|d:})Kp6I3|4QF XiSK<JG8Hh]du{IP0~A$+Yt_,fHkVXdNJd]I63QQxd MvCk@' );
define( 'LOGGED_IN_SALT',   'CTkBpL9|Bx&f#jh$+$Kqc,@)~*0yEC.[F*Z:qv(&NIh^8H3P?4LRcFnRdl*{AT,a' );
define( 'NONCE_SALT',       'Jjm}JBJ4ZV%]&hzk$Eu-CwgJ/DIw|=#^lowzKB1^^E&iBUVMiT;#^z>(V!tw7.N@' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
