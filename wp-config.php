<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'americha_AC3' );

/** MySQL database username */
define( 'DB_USER', 'americharter' );

/** MySQL database password */
define( 'DB_PASSWORD', 'spank1' );

/** MySQL hostname */
define( 'DB_HOST', 'db.americharter.com' );

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
define('AUTH_KEY',         ';8d6voK-.,cy0Ye]%1N,>q}oJUR8N}UET@ L~{+M6kZsXC|cnrV>$-%g/F)%q*<e');
define('SECURE_AUTH_KEY',  '_u_:CKcuWr;M%Yn2J -uu F9Lm)iH|31=l^vn!1>!6~+<r],,^R*i;;UJNX,dsD{');
define('LOGGED_IN_KEY',    'o03909Prk0-UHZC6/ybip}m&DS-1(/OCkIe`~v:s*~G9Aas-H81`pHS%T$&C;cJe');
define('NONCE_KEY',        'b$fl(}cRfK]]xl2k#NroLAyWN41dVV6lws:VWxXMX1Ht&,(h}E?QP{jp!*aeF580');
define('AUTH_SALT',        ')-M&4rxbt|OpbPP86*-~doJ|NOg[TDa?{|cgw?:UR t|J%:h|OX5_``26tYy<7RQ');
define('SECURE_AUTH_SALT', '<8(J?1Ag18bL/+v(yCf;2p@`I&S[A]/xQ|9FdAykd}+z#RJy:8n)Vo;nemI_%F-;');
define('LOGGED_IN_SALT',   'q{-;?!=2^6VJxSSgG;V0Vd35cNnq^>Y2+ UIy}P|ZcLhQ&t?1wb=mT5reTn$g8vJ');
define('NONCE_SALT',       'lFsy>bnR1Y||HIv9$E d.uK||5I$:+DM]Q]N4.x0+t3H/0B&7W&M=Kjo+k>DWvCM');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
