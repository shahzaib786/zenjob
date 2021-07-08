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
define( 'DB_NAME', 'dbnzq1yfyziduc' );

/** MySQL database username */
define( 'DB_USER', 'ubgtxi1frr18g' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hyaixnhsilyq' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '^<@81E*o-vM][kem3j{c<Tn1|2I&-AU|jHnj,:axsc6lWWI`@zTbWu4t&A)y4(-Y' );
define( 'SECURE_AUTH_KEY',   'Hr*uP44&GR<lDQo6hOX*xP.YO2=JB@7WZP/7kQ^nB<0^9c~EaNKo`VSQY$%l?gy0' );
define( 'LOGGED_IN_KEY',     'H~CT[!bX%mNn]3Zafb`Uzd@h6funk9J9}OFf*3X;vLblm,VLh@2}HtdHJv!lf`~m' );
define( 'NONCE_KEY',         'c,27/yq#R2gv76G r@7t;*YTHQDClFt={eq>_w4~-QVC]vM13Si;yd4`X]-rCXGG' );
define( 'AUTH_SALT',         '7&PKSV05uV&kRKz! [7_xh,V/3eTo]jMZOs/E2H_;,5h>;28:D},P{:GQ/hMI<dE' );
define( 'SECURE_AUTH_SALT',  'F,+/d|6Xl7}W0WscOd99>**}zPL3 fq$~2fkf0W8M._eX!BWXET-F|Sjt[k%5>.6' );
define( 'LOGGED_IN_SALT',    'Ka[Cb5rmo,apii/R}ylE`EZ7xRf|KoL6XhdP-jsAllm&ALiJ5ch]F#BFhEn)9sxw' );
define( 'NONCE_SALT',        '|[i;34YRw3@*=^G`J($&HSG]0{}6EeO)db[i!mz-8FeN<U6Il-K<q<nYh4snc|aa' );
define( 'WP_CACHE_KEY_SALT', '>0Z7D8I;bE|bzL7bW1]j+9`:g^*VlleO;oi!3oT(8nWa#qaj;k#m?a;Ro|`^f$E0' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'duj_';






//define( 'WP_ALLOW_MULTISITE', true );
//define( 'MULTISITE', true );
//define( 'SUBDOMAIN_INSTALL', false );
//define( 'DOMAIN_CURRENT_SITE', 'zenjobc.sg-host.com' );
//define( 'PATH_CURRENT_SITE', '/' );
//define( 'SITE_ID_CURRENT_SITE', 1 );
//define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
