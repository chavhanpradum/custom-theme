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
define( 'DB_NAME', 'acf-realestate' );

/** Database username */
define( 'DB_USER', 'phpmyadmin' );

/** Database password */
define( 'DB_PASSWORD', 'Rdi@1234' );

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
define( 'AUTH_KEY',          'h^l,>4k=TF&8jcB47r>~BCB:F>x_-z-,UUp7v*&l1]b*9uF`(0nR]gp~>N2>`D-;' );
define( 'SECURE_AUTH_KEY',   'LtI>;_3v[5{r-F)a~*9W/dPJy2nS)yh@MMdf>|S#,7XcQD${DI$OvFQ`AqBfC:;*' );
define( 'LOGGED_IN_KEY',     'VwIyOjIF_v!b^S,9T+h(#e-r@Crm57?,0n*I4<SIzp*Beyk//O}kN{A+oBxi1HEu' );
define( 'NONCE_KEY',         'j_ZW@ HR`URz)7PYS%J!@6)/V<CKj,uWoNMKZ3>,F4{)Igga [*beoqOo!6nz(p8' );
define( 'AUTH_SALT',         'pkR>U<Fw<9fvT)gQ A^=_{,AG;%?M#Nf<cuhgxN<sXeocs_#94+RD1j{~pG_?~HE' );
define( 'SECURE_AUTH_SALT',  'H~pL`L:N~3fR+Fsl:a;XU3t]~;}BVbi_4S,$sXVaErYt^ga;*Lf_xd;Hn;(tcRaD' );
define( 'LOGGED_IN_SALT',    '{1+|c*onC0eo?{60Nu>e5k`^l}7}C95UnUN=slod0wR_UtzdjGSdDe8R|gM&;wO%' );
define( 'NONCE_SALT',        'L!,0|B~4nwtJ>n@0{^:XYwJIpy!ybLJ<O#gXtR4K^b*u{aM-{l~MNjMCQvZ3? Bn' );
define( 'WP_CACHE_KEY_SALT', 'qMyWPqw};wfhL;CkwhYVp*93%B5.Xn:m4dJpT.O<qe_iN<-l8<mASBM]9TH2:Faz' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
