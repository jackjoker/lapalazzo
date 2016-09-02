<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'lapalazz_mapplink');

/** MySQL database username */
define('DB_USER', 'lapalazz_mpl');

/** MySQL database password */
define('DB_PASSWORD', 'mapplinks123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '{h/!J;#$iG|nO;CxcT 66N,E3u1_HXIesxB@b%u$C G] 6WWh3-4rR3F}.}m}#2z');
define('SECURE_AUTH_KEY',  '>8LRV*NFZN6lMhV}i ,g:+/9}&A+2T&PW*m~@NX;-1I+*!_y -;Ne__O{u||;S n');
define('LOGGED_IN_KEY',    '08,|6|P}<U6$H%+/}1WOt[1^,gR1a}=D);CMYAWrLA.7bj0U*6F|qsRbPD?}tcau');
define('NONCE_KEY',        'D][%jAZX&<}T<^,{L<2>C<OfR@Hnqbm5(Hb39=a-B@9W>*=miuj^h+v^:]-A<-Cc');
define('AUTH_SALT',        'Pan|Zz]+HX0J7`&M{7Lo+[w<{0pG[!Thom<S%71aJI3Fk#^^eO:WDUzQF]C3y(,n');
define('SECURE_AUTH_SALT', '%Q|qb-p>R=s(M+mNhkQ=~zcqhURrMpcvV+ 47U.F^9{8>Zp~A?Guy0Ym,j5&A98W');
define('LOGGED_IN_SALT',   'o.;T1MNpAE>?q-{|6;q|[:20qf}T,j!95|.RCGy-,p(>/>wmfL@_]7Y[EPS3`cbZ');
define('NONCE_SALT',       'F[4+_cO=#+e%Y9JZBp$+>Z[h5C!k^i[pOfNE@^BJgW=i{Pb_lRm+l`><.lh`e}P.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
