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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'aatraveldb' );

/** Database username */
define( 'DB_USER', 'aatraveldbuser' );

/** Database password */
define( 'DB_PASSWORD', 'AVNS_r7NDWZ5ho7eUQAdfZ9e' );

/** Database hostname */
define( 'DB_HOST', 'db-mysql-tor1-02294-do-user-14051361-0.b.db.ondigitalocean.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '8v*ydNEAuo%N8F:M@X[%qr@XuzYle()Mc,t${]c^+$XcxHOYZ(wh(Pva;;_`h*/*' );
define( 'SECURE_AUTH_KEY',  'B?Cxbk.B8k1X[HgtGqbH,c@Whe+&bt>^lfrZ.eZxCTo&IQ2$~,!Iu!Ls1u>^@0@x' );
define( 'LOGGED_IN_KEY',    '|jX7Mq|#xaF1`FG8@B_4w+j6I50`4|IaP173w+Y9b=x4{| HW$!_iY[`j`C<ye=:' );
define( 'NONCE_KEY',        'x%<}>RzP{Un{Vlmu1uh;5tAya!b+a6SCSWY^]5BJ=(U#rcj#fvQ(njzl+9Q{}ieN' );
define( 'AUTH_SALT',        'QcGx]s*%L3h+TV6+1UqO[n|o87#8jmX~;ozb+^<g,Fvnr]G`m-6HVTPU8kD8$fhA' );
define( 'SECURE_AUTH_SALT', 'qPm]z@%Zy!,)SDzb]kL>:#E4:;8dM2<pV5f|0E3Ux05}R3Pfp-dj^<7+$T-3?mel' );
define( 'LOGGED_IN_SALT',   '`_e,j2B)E6u_Jjd;pQX0t/DO?Jp*+#<5yakDnuU_bJLThDVy`iEsw9g@|<.~!@Xi' );
define( 'NONCE_SALT',       'ICbf~h2f@h$0LQ_eqK}#~m4||)94>~_Jy^{fcCJpE6i1.oJw.P79NT~pCC+x$6=g' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'AA_trvl';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
