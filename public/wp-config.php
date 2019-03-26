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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'scotchbox' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '+g^q)Ik_>+^UCabc`prJU,RXwj)Hw*9FL,fC6Vx!+d;XpWG>g`y)Q*mh?j3c8NZo' );
define( 'SECURE_AUTH_KEY',   'n)CS*(|6<eLk12;Dy5RH>5$b}Y{iJ2^V}>Ip7eQ0^2;*%TEA5c>&f)/r81zg2Q`S' );
define( 'LOGGED_IN_KEY',     'thp$[Y(|1cJvxM:TV_^`WyEa4Yqfbh@y>s`l>cX Gx0j>L1}Gq4_H-LLq*#fs;[m' );
define( 'NONCE_KEY',         'WgV1m`wbin?gwl0m|`,T+yHmzEjeZ`%! zApdR81e9|G:&NR _=pJy|Mg{Ul?j8<' );
define( 'AUTH_SALT',         '^)}#`{&-j(I~_dLlER!<g%#+OjpM=`B.onju_w}sCe_8jAva-D.)=cB,+QB@.@/!' );
define( 'SECURE_AUTH_SALT',  'A^oE@`U(xk[E~+$%vyMWUhgTR{Bd`jUL[svGpcPNEI^kw{iSsla.a0cS1oh(D0%#' );
define( 'LOGGED_IN_SALT',    'W7_Oz+7IdE8}j_THL2K82hMe6`=%AFyij3DVh}M-_n0hL1if2Ui@vzb,$I>we3@G' );
define( 'NONCE_SALT',        '|N1?;9?x>f@(XZbIp@lc9D;PsKMy4a,T/3TQ:^+=P}iwQ1ph:cqwH,1gfG{y:XXi' );
define( 'WP_CACHE_KEY_SALT', '6I+K3*,IFXrm]}yMAttgy(~N48(xJ `m!.ml&m>TZw$]D(mw^[)~ ]NQ~(!5#NMC' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
