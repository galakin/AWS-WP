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
define( 'DB_NAME', 'wordpress');

/** MySQL database username */
define( 'DB_USER', 'wordpress');

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define( 'DB_HOST', 'db:3306');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'Ui%[IKcnrCIP=;WEPGjlaNJGSW()3Hj6#`pOW}oAG3Z[;D[75xqw#:{oM@;UGH:^' );
define( 'SECURE_AUTH_KEY',   '&b@ch*mP47ng`00qiY#UYRRdA^lXH`dmS^9&OC:NE&pNJX+Y7rviZA){NsiIZ`^i' );
define( 'LOGGED_IN_KEY',     't/7z;yaT(hPA$Op,T14{X_ITNCVdhw0kT*WTgS^L?hmc5l#H#o@OM !W PBg%9*E' );
define( 'NONCE_KEY',         '^ZiGxfy}r s&6U8i1D,e!d$nn$d3IoRDjONsM48Zh.?Gj3k`b]peTpJewD $S{wh' );
define( 'AUTH_SALT',         '!<YH4t{1(`Hh4E?jv/EG6~P`mO?T<0H@cgg6fsE>,lPSA2dRb6?hmca#^gTv5amA' );
define( 'SECURE_AUTH_SALT',  '@GV11`50n:r&eo[Rt`#v*IJdi5(-f*+r*a{]qr{&%kZ3eq!g~T>jZiFe*7T$,tMA' );
define( 'LOGGED_IN_SALT',    'V<4{u<j4z9G*K?tjTR`z5Iv#44GHx[~Xs$.~Y{;Tat|ozV0xl`yNTpr&()/_~UP7' );
define( 'NONCE_SALT',        'F%bvJ?.?zhciD4f|r<sWLd%k$6NO6/#5,d=>qzZU1T23HZ#$(lOj`$O|:qz`7)M/' );
define( 'WP_CACHE_KEY_SALT', '(Ua}DF@8sp?l/dR,LR~sek[0bkV2C7@]?PM$Nq,l#H}>N^ux.MD(=.mDaA/Ac#W9' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
