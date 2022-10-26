<?php
/*
* File : Config
* Project : Casting Agency Network
* Leader : Nguyen Minh Phu
* Framework : MP Code
*/

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for MP Code */
define( 'DB_NAME', 'casting' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 */
define( 'AUTH_KEY',         'sjdhfklo3r8eriu4fu8fdjdjkw3uf9ur92jr' );
define( 'SECURE_AUTH_KEY',  '182uehdf84uedfugt543ewd9fuyghtrj4e9u' );
define( 'LOGGED_IN_KEY',    'fdbdkafsoughiewdufhgire9our3eugrwueu' );
define( 'NONCE_KEY',        '83y2ueugyuregrbughurtyuhururguhuguhf' );
define( 'AUTH_SALT',        '32e87fueuughguhffuhigfuvdhffuvhifudh' );
define( 'SECURE_AUTH_SALT', 'sduhrufgi4erhurfghrewuhgifhifsjhjihf' );
define( 'LOGGED_IN_SALT',   'dghfdshjkwefsghffihoefwopihgtr3efwrh' );
define( 'NONCE_SALT',       'uhgsdfhdhoufhgofeohfifgjfhifhfjhfjoh' );

define( 'MP_DEBUG', true );
define( 'table_prefix', 'mp_' );
//$GLOBALS['table_prefix'] = 'mp_';
?>