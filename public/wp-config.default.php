<?php
/**
 * Default config settings
 *
 * Enter any WordPress config settings that are default to all environments
 * in this file. These can then be overridden in the environment config files.
 *
 * Please note if you add constants in this file (i.e. define statements)
 * these cannot be overridden in environment config files.
 *
 * @package    Studio 24 WordPress Multi-Environment Config
 * @version    1.0
 * @author     Studio 24 Ltd  <info@studio24.net>
 */


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
define('AUTH_KEY',         ';6iH{GE~%rUGy2rJlyN->JZc#kdu:4Yu|+Gzd:-HeQ_0O+5CgpsZU@ Ze49y&=CI');
define('SECURE_AUTH_KEY',  'xo )*[OTefA#%SDomgb/4ZVg!$2_dgWJ(5XP+OaPJ3<ry!Ht} WSY,?JITPL`&^F');
define('LOGGED_IN_KEY',    'Ar5.k1hyox~!0/8rZ+t4G}pd|s{3i+d%iIM6YVFkV|KR|(~T;PUnm9Hmy`cbiR|O');
define('NONCE_KEY',        'e2lXs;+QcxsA<4Jeye_P(4phL#Y<MpO=z-TZ~n1S6I8/}q_]<}wU/Lh+55pqX8W-');
define('AUTH_SALT',        'ULR$XW=> =FWj^XI7?tkx-,-AF!40&H;xx xO(+1MdrOsVpxLu[r;2)yUSB.J>tB');
define('SECURE_AUTH_SALT', '?m< vy8{|w;&J|e:A~2dSeg=G*f7TH:q|gD:;uc#O$;y44k^I3CcQM_CrfR{ltwf');
define('LOGGED_IN_SALT',   'fBDU&LUtbzQQ,ppFAc!i2M&kC_7CKlu{A$oaRCE3Cv(F-Npi<`m1ydJA C5vE14|');
define('NONCE_SALT',       ',z,uNAyvo+RQ>OnP1]I:h4&||2BHa<$do_HE?(=[ PxtqD>.)Cc:3t7C5PrpFFa4');

/**#@-*/
define('WP_CONTENT_DIR', __DIR__ . '/wp-content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');
define('WP_PLUGIN_DIR', __DIR__ . '/wp/wp-content/plugins');
define('WP_PLUGIN_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp/wp-content/plugins');
define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp');
define('WP_HOME', 'http://' . $_SERVER['SERVER_NAME']);
define('WP_DEFAULT_THEME', 'em-company');
define('WP_THEME_URI', __DIR__ . '/wp-content/themes/em-company' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'em_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');
