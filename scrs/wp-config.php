<?php

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'aloha' );

/** MySQL database username */
define( 'DB_USER', 'bember' );

/** MySQL database password */
define( 'DB_PASSWORD', 'bember42' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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

define('AUTH_KEY',         '?%Pxpx*Rd.JG8oR-3jE:lESTEUQ@d TYrW-([E,I3Wt(EsOmHd+guzu}@/Tem*~d');
define('SECURE_AUTH_KEY',  'V+`;l|[`D@HkY1+iKe T}SeyK.cv4h:IA?nmcS6&eHH#e:13v|cf,S*ve$l~: *J');
define('LOGGED_IN_KEY',    'oVDZuZj]ImiyO$. !||-A58jTfzsONsrsO_-?5y0,R[Y( TQ/a,?N+Ir6;MiH-,>');
define('NONCE_KEY',        'rSF:PZ!@DGB+@B#_2`eNut ?s-iZ,?V1=EwLsa@a[{+X00#SMcXlSFAKFiJ;:Kij');
define('AUTH_SALT',        'W/MHm^- |}/Wb4zVZx*86uN3@NzG7|g0=%,!<eK1s~kE4h}ydJH_ ]m-5U)`Pf`l');
define('SECURE_AUTH_SALT', '!J; 2>=D+}MXb#3|poy.K2u7iz|lI+SK4J:yP--5lP~aRa+Pxw8+_V?g*H./v||y');
define('LOGGED_IN_SALT',   'iiRT0me![[JgFA:!|{,|)^+@i4jJ%`~5]6`/x:_( K?vPi;B# --8Z2iu6Di2vs,');
define('NONCE_SALT',       'Fn{k6[<W9aBkQsfbA[4J75;V|0|FddhSAFuX 3,yz+aN@nqf!H-(]3Fbjc~Q^Pp?');

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