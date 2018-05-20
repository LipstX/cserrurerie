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
define('DB_NAME', 'cserrurerie');

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
define('AUTH_KEY',         '>gS=[a+<6!VpE4$2]5Kg2-K)utku#f4]gsSkDMFsipZ1T#y]SsSV0-KWa(rKajNJ');
define('SECURE_AUTH_KEY',  '3j+f3Esy6^cYWl~Q{[$UQzyjYC~TkqHhxRGT]|Qcfg)&fj{4&~d~+va^L.~P~^E.');
define('LOGGED_IN_KEY',    'bT6O.OlB@UWgN?LECwdZFLm>{kZ o*;S>htqqHE/WwlC }dov%C8R^G7D51a77ZM');
define('NONCE_KEY',        'c.bN|^S[^LRezgI2P?@x..W8D<WD^O(ox]AiutY+F[g)qD9i-F%/9)yG{g-~bMRN');
define('AUTH_SALT',        'v:O4vDBR2/t8b71F +[}78R7M7eR{c30l(>j^6p!y4(+L4c&c~/M.gB;P~PgDl!@');
define('SECURE_AUTH_SALT', 'BJ!1l|+7j^C`YiEA8QMEym*1;ty88>m+$FM)@NWN|.|?E=5gFdJ/V1o-[wPy.M1j');
define('LOGGED_IN_SALT',   'G>Z?MmqlUu|cRP4BU+Hi~>y`B=J}fVZ-8B~M}Y^w11eG@@OrHTK2O=N=n6k45<O4');
define('NONCE_SALT',       '}4jVdMO<[L64xN!MuuMMyTRH. P;ZoQl-n+{q3;ese>!/EhXE&X]8*Z$S?`3HTog');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cs_';

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
