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
define('DB_NAME', 'reweave');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Q^L&|eeF-(zf0})C&)n5Xa~/` Jid<tn/#b4{I`UOn_0Lt9fo@k#?7Ryj+<_PT*C');
define('SECURE_AUTH_KEY',  'pJnb%U5g{&n$3{>?rR)!HMv)t`LsAFy6>ua7WV o4u30SQ+Ta:N*:q1UD{k})zV,');
define('LOGGED_IN_KEY',    'QFWWzwZHplIB,%+88JgZb;9fY@JQj$T[ic*&UwW_I_4<paZgf~-<rh9PhFx2TT72');
define('NONCE_KEY',        'Wl.@Ih=$^>XBe#bIIOX`S[CqiYoX,mM52h^F)zy]L@&OQ:/wjk<f:,l64fxcI;,#');
define('AUTH_SALT',        '-B?Eu}>?/~/5%QD1Y]e1V`eSw3}%+ah-?+#]``l4r]Q.OjK-/v3[(!%9_H&mu<`%');
define('SECURE_AUTH_SALT', 'RXQs/j{WWOcfYoJ;oP*v[Dt9vvW8:snDs}>D79sthC(:b?@o.g5^m*1lOJ:?gJ[8');
define('LOGGED_IN_SALT',   'PI|R15DfT;0*6Ap6t;LBe^Z3Jt[^Xz|,A:oCfqMD}f_uzwJIz$Ly#8@,I7f9|dNi');
define('NONCE_SALT',       'q>!Oq`OI%2SsJ!$n3O4I-BG>@?Y^K:P$~*1u#Fda.7.YR/iLpcja=_V$;}Mq,Fbj');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
