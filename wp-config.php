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
define('DB_NAME', 'gridinta');

/** MySQL database username */
define('DB_USER', 'gridinta');

/** MySQL database password */
define('DB_PASSWORD', 'TuX2tyqRBKnTwdnF');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Lp2e3R!7rY R9$llZ&mzJ21AnVAcrm_aDL40WlXxCy| J:.tY,o0H7&F_IQ|qr&2');
define('SECURE_AUTH_KEY',  '9uFK?iTT,NRFa|vm#IoI&;*!&,*Rd%GWt}Lr/3O$0RcvksjAn{G?wgs~NsR[$g/a');
define('LOGGED_IN_KEY',    'xV}ZC$:4MZ{%Qb-meqgt|kPBT`Rd-gwQM6z@khCk9~yc-j4wUyV[E,Ewr!6(c<[6');
define('NONCE_KEY',        '`Y[[1xa}yP/xDl8K[F@C L:Q25ZtDN+n QEbjXzg;GmJ8tyTD[Vy0+ F+9(Kss.b');
define('AUTH_SALT',        'iaut{c3`S<P9uyLSS,>uL}!c_n=mUxQLH]tp mJarPU5>b=SwB]{u.?g&HjPt<4+');
define('SECURE_AUTH_SALT', 'x!ilRfw#>HXT)A4@OFWbkhcl]C$ncZ37`Im5A4K$-*UEaV}?bdTEbK-]whYLk)Az');
define('LOGGED_IN_SALT',   'a0l+DY22&%6,P_0GiH_o_{z9(:J]<}fDJ&etmNAT`^-:PKw/L>uY!o3>w+ryPTRg');
define('NONCE_SALT',       'QP}2Q@O|f<kDYdV6s)dei!!cWV]Z)@Y`)~dOd1P@=<JD/ iqVRiff7pF|wn~w{,o');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpgridinta_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
