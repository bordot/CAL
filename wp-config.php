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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressdefault' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ah.Q~K`G?(j<ug^TQdov`Z}qg@D}!ZngebuVQY7STyLP/ReE[(MAqp^c.Vrs@{!*' );
define( 'SECURE_AUTH_KEY',  'w{ZQdMjriCd+SwM5MfGDWJ?lhR,uGlPM&^<pr)cmdJr?hhsts$v%yx#jYC:M3Ix]' );
define( 'LOGGED_IN_KEY',    '[`!C5 Zd&-g*acH*OXN8x|K}(z;7y.d_&-^t:,S7R1b+Awq~m xlTR+(8Z?WGN`,' );
define( 'NONCE_KEY',        'pz0FW~}(L`4Q[B+i<r(&sy[j45cBz0?1#]:mS&Vawc+MT3|sK=Q[XCs{w~B)xh>t' );
define( 'AUTH_SALT',        '-U/2;(nyob;=/kMXM tU(=_2mWTnf>~n8#R$jrj`=Ko~ApBaI|6P,gPadb)ZUFuE' );
define( 'SECURE_AUTH_SALT', ')-<0zC-33L@z.#O6FSY( HI^(^#O{.3);QC Im7fc|m$hcpbd~sjwLYZ&1q/-oMr' );
define( 'LOGGED_IN_SALT',   'FBjpKc.DjdXE ERHYbm?Z-]C/44J|))/;J8m+#Hm^A7z{lA[>tB@uwDz3(wb626?' );
define( 'NONCE_SALT',       ' !1V_)-JCw?r0=jSA8jZmcCgB S/rcyl:Z|E_<.*ia/,m:5:5T~ E*9bn*&Q_7aW' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
