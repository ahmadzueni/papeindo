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

define( 'DB_NAME', "papj4853_d8_pap31nd0" );


/** Database username */

define( 'DB_USER', "papj4853_zhue" );


/** Database password */

define( 'DB_PASSWORD', "Andini#130687" );


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

define( 'AUTH_KEY',         ';}+*X~28I;<)^]4FasqjlS1jN]d&7&kjr{qVq(Wg8,G7ux@HVkeVDDvYX;|Tc`Z-' );

define( 'SECURE_AUTH_KEY',  '7`aXe>NPqs*oT=B4s=I__ij~26 BJWFk++69?G}I7X1.DR0wRt+Expw!WXYB>)5%' );

define( 'LOGGED_IN_KEY',    '.QD}7?B$!Hy/[qS1juQ> O/@0O0:K=Cde<(~}}#OK<u}cyV5W=ktHc`u3MOvf%!q' );

define( 'NONCE_KEY',        'EL7x87<Og]4H6;Bl{DT1NM_aZ|(-{kjiMuSO|Q+o5HFt}~LEyf+n;s LUniu..o#' );

define( 'AUTH_SALT',        '%d!2k,AW2O..W1[O?}]7Ejz;S>EV0U+P2,&WTWyqv-jx3cWe0svgzt9vj,Mk{<L|' );

define( 'SECURE_AUTH_SALT', '[gYer8Q3RpTrE )Z?Y+<jS8VH;z-j2lXs5.qtR&@BrSqn;Z{)/[@Iu<(),8T8(fS' );

define( 'LOGGED_IN_SALT',   'TW 5 ue0`D>X^2Ay5Z2FG}6`/VU;e~c+Q(>^]8mEZ1kkbE2_0E!S,E,+26AtU%Wx' );

define( 'NONCE_SALT',       '?-:p;Qx3>gnN(2F9QU49(F`<&}51k YG>JCf>I:.rp<+BAAiBWv@(l&+^Jmt:Y]/' );


/**#@-*/


/**

 * WordPress database table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'ri_';


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

