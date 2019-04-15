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
define( 'DB_NAME', 'Labs' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'SF8({S=i3!r*i`ZL 7vDL>Uj-bgZg>4rM|]O8zsQp8JD;;9?<Tc9Q,<}F_!dEw%|' );
define( 'SECURE_AUTH_KEY',  'Pm+&k=C-cErFlZr?i#Xy0(/,-d/g%;ihPsTE2k8y&(!|1t4pB1MFdAJrbNpI>eL^' );
define( 'LOGGED_IN_KEY',    'tCawYaLPmv$oLa2X)O`eg2FS,]<x$oP1zYb<Cd<E!C$0/bt%>V3uChauGNlF~t7s' );
define( 'NONCE_KEY',        'jrLo[Rb,7)n7@v#Q*dpN5LmMo`2/|gf19p(fMQ/e>q<R2eJDF*m LXf@tHf_;46s' );
define( 'AUTH_SALT',        '>5UIhK7z/FHir5U_!8(I%Z5.y(4<B3X4.k*5x[2Il{8T621I9J1R*6;h6fvbcufQ' );
define( 'SECURE_AUTH_SALT', 'TRw-N9@PHwtn?L(>MCa%v}Cj^pE:L6-B4w6]Tju!{b@B0awiUV},?6dX,u olb2%' );
define( 'LOGGED_IN_SALT',   '67NmE)qyse9c1G|kFZ*X&P!5^*R ~<%<L@OvOZp^(AY&ekegsVFRjs$SV0z-#4v[' );
define( 'NONCE_SALT',       'L`!^+32Ky]H6a}fqCU-F6F/OnwP[SAkSdv2T O&eZX$4R*;`-JsFCXyn.=n9:7Un' );

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
