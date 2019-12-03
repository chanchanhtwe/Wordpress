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
define( 'DB_NAME', 'wordpress_lesson' );

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
define( 'AUTH_KEY',         '1h!6q(*y3Tl/_>+K<$p9C7`J*uYp0B&=ZW]>hQ#ul(%i;k-1~n7O+;b ssn7YM#3' );
define( 'SECURE_AUTH_KEY',  'wxDT.E]aAQ=AK_w(ZXon;P,[iS+?fOI{gk;HK8V)7=#/ODu,wCdGquUP>$QOkRo5' );
define( 'LOGGED_IN_KEY',    '1xfd(_pB ~*ER~M.n*/guB2mL*RUA{qDnU22[VAp~xV:dS>-(-ICU9|uAL3[oM,h' );
define( 'NONCE_KEY',        'R0K+`d`dzX>@YZ^/6^j%u8)RxO8-3k]D,F2**+JY(i3G6KZ(-x $2acZV#Sz7,*/' );
define( 'AUTH_SALT',        '=Dx/w,!G;[ BrKnBjnGLhpO+u5C$&&/Vt(wH,z}7=n(=3+*ht}8XgrYQ=9f7ZMH8' );
define( 'SECURE_AUTH_SALT', 'HI-+3/W4%rZgW#Zr)>;>RCEN0 5_x}mF/+uh84JC>$nX,~+XAZn&~OWP O@s,W!D' );
define( 'LOGGED_IN_SALT',   '}@sXzky`G7,(OsQOa s$%h:IO=C<2gxg2,0+~L:U|azQ2{X*[)_Fr8VyAzwxRBS,' );
define( 'NONCE_SALT',       'gN&nH/%AS66i2M~g{&sp$Tmvn{HAkPY8mLuiG>KyM_|dV8~I:gt[o+Nm-{2YTLI0' );

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
