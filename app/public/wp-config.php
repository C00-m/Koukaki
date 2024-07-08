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
define( 'AUTH_KEY',          'qy8{.|/*XkT/gY^!VR[g&F#.u$d]|3>nnrO}&#(`TvFS+(^JA(S8>:< G>#AnrWj' );
define( 'SECURE_AUTH_KEY',   '?fDszgK/06F(E?1w|ka)U-Y2TlmYaMtlm~wTKY${uIOuM%LPY(nXkbab|[|;cUl9' );
define( 'LOGGED_IN_KEY',     'S*${dMyn(dwyk*19lO]fqFEH2c7S0`k22~Bb8_x[B~=::d]gil(jo<ms`DC}%;-D' );
define( 'NONCE_KEY',         'IMItdK1qv5`_;b$&Vd6RbSHJneL]dXPF*dY[YfuYN$<DQ/?R9q[&3`)PU:~t:/D=' );
define( 'AUTH_SALT',         ']|wKjgJy8V} kmuwBo/1;MXz:6b+|0@P KZ;9f]0Ok;s.(^v{3Ju=yAR[WDg6zJ6' );
define( 'SECURE_AUTH_SALT',  'W[MyJcZ@&s#jgJe[{*J9-9CSDjyi;Bb1OCR0.?p3`q{4;YarHN}8@:NbV8s$Nf,K' );
define( 'LOGGED_IN_SALT',    'uR=,W(xon;WqE&olrU#xt#@c;JVAaCW79,As58l; 0bL/ s4XmY]9AgKs-MVDm?i' );
define( 'NONCE_SALT',        'Xu/<r)fZ7w@t8R%uUnfOf]74fnHA0(>Pv<X},C?#{G?Hi{%H=h+)WPgYR`j-?|r;' );
define( 'WP_CACHE_KEY_SALT', 'e~?sk&|4Gy*x;6s~X;r#+;xEI)beI.,#Cf.x]K^l:?L6%}UYT|+f)lasi>]lh)x4' );


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
