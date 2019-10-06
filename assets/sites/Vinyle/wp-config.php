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
define( 'DB_NAME', 'dbs181557' );

/** MySQL database username */
define( 'DB_USER', 'dbu83602' );

/** MySQL database password */
define( 'DB_PASSWORD', 'MaBaSe2184&' );

/** MySQL hostname */
define( 'DB_HOST', 'db5000186675.hosting-data.io' );

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
define( 'AUTH_KEY',          't(9U>e?P`HP-^m+!=cT1kp7xh.v3/Oy; +};F2aSmw_Zu$hN1;r@99)YHxm^}<Yp' );
define( 'SECURE_AUTH_KEY',   '[l!dggYl|u 1FEG(O^+,DPq~N2O}u5g;33_[q9GV10tM@XP1EO!dT87WhM,aG<m!' );
define( 'LOGGED_IN_KEY',     't)|ERS!kSW[;JUTg>Lr9B2=.9*(t7o./Bnn^|6A{X_w{6;wS,VLZ&v=NS6zw5i6X' );
define( 'NONCE_KEY',         'r/K38p2=Cg|&sV,{ApPgsXFj[0H:*Ec}g9:>T(qqdHd -dX>f-XC-71/Z_crnC{z' );
define( 'AUTH_SALT',         'G~a/dV^a5r7.x_-Aa_]HpfdND!|7X<2j37>(c*t>lp9T)-uY,TWW{i[QE*54az]1' );
define( 'SECURE_AUTH_SALT',  'Qo#ZQ]_=]rgpKj<OHDOH1wC8T5D5Lxx3hasl4QNfc%>tTQD_US.7PQUlDt1 {hZ8' );
define( 'LOGGED_IN_SALT',    ']]0>JchU.h0pX5d[f~O(dMfg<1w&o 28!*}<&^#nVN$b~lLaza<w?l=PJmaP0&%d' );
define( 'NONCE_SALT',        'SgR.g2~yAAwX+LHj})7`*/cZ[N[J`x0|SN5OWXXrUi&<1x:Fxxfoh,6S9W}}[:Fn' );
define( 'WP_CACHE_KEY_SALT', 'VYnWY o+TyJMdyWk`6XJge /nwV+IT;}R2! I|hgE0GqJ`E``VY0n0{wf4*9.x>y' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
