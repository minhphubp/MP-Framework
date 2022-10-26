<?php
/*
* File : Load
* Project : Casting Agency Network
* Leader : Nguyen Minh Phu
* Framework : MP Code
*/

/** Define MP_Path as this file's directory */
if (!defined('MP_Path')) {
    define('MP_Path', __DIR__.'/');
}

/** Define Includes as this folder directory */
if (!defined('MPINC')) {
    define('MPINC', 'mp-includes');
}
/** Define Public as this folder directory */
if (!defined('MPPUB')) {
    define('MPPUB', 'public');
}

require_once MP_Path.MPINC.'/mp_class.php';
/* Check mp-config.php exists in the MP Code root */
/* Load functions core */
 require_once MP_Path.MPINC.'/functions.php';
 /* Load Class core */

/* Set Languages */
setLang();

if (file_exists( MP_Path.'mp-config.php' )){
    require_once MP_Path.'mp-config.php';
    /* Check Error Log */
    if ( !MP_DEBUG) {
        error_reporting(0);
        }else{
            error_reporting(E_ALL);
            ini_set('display_errors', 1);

        }
    
}else{
  echo sprintf(__("There doesn't seem to be a %s file. I need this before we can get started."),'<code>wp-config.php</code>');
}
/** Open Class $Query Database */
$Query = new Query();

/** Test code here */
// $Query->delete("options","id","6");
// $value = array("option_value" => "default");
// $Query->update("options", $value, "option_name", "theme_domain");
echo get_theme();
/* End test code **/


/** Close Connect MySQL Databse */
$Query->close();
?>