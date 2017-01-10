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
define('DB_NAME', 'advTech');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'ga,P&O=ezlr:!3-SZd]5ZbPDh%j#<^L~+$~bOrp@]^w|SIQ/^~+lw5CfF{-Z<~ }');
define('SECURE_AUTH_KEY',  'z>c?i]YF4rIH^K)<@N{mZ&o-9;@-eF-PRB-Fk&kZNKZVI|$>2)O2CpylO-Fi#wkC');
define('LOGGED_IN_KEY',    '?:56ZFY?fJ28ko:@QdqBe^siS)/^T;uO8419r<K7|>|8!D3@VDd-]l|~TZu|#!c(');
define('NONCE_KEY',        'PoN@s+TRRT-rM!A|xx-JP3d+|i35sQQRH#VQAH<w.n{MSUN~JKy8rZ`Y@E|aPZM+');
define('AUTH_SALT',        '*Q~A7~tPo++M-LZAvLZ(xEt<Wk$uL*V8yw$jRIS@AffTTq5w>D9Rz)$:=2~Cm&1e');
define('SECURE_AUTH_SALT', '?WAmv`y&mMgI>4Ln=XJJK]nWMczs E)@c{Z[fWQQBm$[kr@32|f5ul1(`-Flst4a');
define('LOGGED_IN_SALT',   'd%9.l_C)x?F)<nDWT-0|/wPkG46#i`<+H(~r>z]YPJN}YX^e0a*|./BZDUv}Gb|+');
define('NONCE_SALT',       'Na!Ag|^~+NE|#{yk{k{v6kdnG|G~dw;djguFXte*<}i}@L)L/Mz7UJ!^%0o]YYRc');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'stP_';

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
