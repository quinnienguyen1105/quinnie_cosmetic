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

define( 'DB_NAME', "project" );


/** Database username */

define( 'DB_USER', "root" );


/** Database password */

define( 'DB_PASSWORD', "" );


/** Database hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         'sgrX`[NT-K-R~*j)q6;KQAY2oVr[%.(oy[Vh1+xcBw27ypxp?:oIJ(=s*YrQ$}=7' );

define( 'SECURE_AUTH_KEY',  '|nefZO!J3VB$)pI{XdMPK1<z2nz67Q29nv6<+.J!ez3P(~LA]MpN-~BPK;|m/:3T' );

define( 'LOGGED_IN_KEY',    '<mN7 U$`Xd++<^dxtZ]zr]:_]j|B4~+MrLIcU{y$~XFZqpR5ssB;e+AYKk+cv,Zc' );

define( 'NONCE_KEY',        'fhL7%w]6~>c8~:]sZbqpo:BS+I^oQs:HhV1R|{KtHeh5&Kpev6P]@%u+cn&&nb6f' );

define( 'AUTH_SALT',        'sjhgL#rJ{nTVz xF(x|l<4%{C8ZVk<3ahNMZ$,8g)<vRy|<x|{_d2fx-l~E!Z>#X' );

define( 'SECURE_AUTH_SALT', 'fDH^/f<D BaRMo1nUk7efXG%6;Ai7osZ._jcEGN)}pYA5.yR!!r*7Inj .MWdz^y' );

define( 'LOGGED_IN_SALT',   '`Wx]``M}BdnJLs$O[N``_T{^1J?$@$IVY4VT++N^X;7ww@ WHt8M[TC-Pc>vQnp7' );

define( 'NONCE_SALT',       'H4?}_(WKgk4fm`KGp*|2&(YdoX3*]V}b/7Xhr;N+SjY`0<6C*8F]u`.jf ZfG(Gi' );


/**#@-*/


/**

 * WordPress database table prefix.

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

