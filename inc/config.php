<?php
// Starts session
if (!isset($_SESSION)) {
    session_start();
}

// CONSTANTS

// Website domain
// defined - checks if constant exists
// define - defines a constant (name, value)
defined("WEBSITE_URL") || define("WEBSITE_URL", "http://" . $_SERVER['SERVER_NAME']);

// Directory seperator i.e. Depending on Operating System
defined("DIR_SEP") || define("DIR_SEP", DIRECTORY_SEPARATOR);

// realpath - absolute path, here rootpath
// This constant takes us to root path, i.e. ECommerceApplication folder
defined("ROOT_PATH") || define("ROOT_PATH", realpath(dirname(__FILE__) . DIR_SEP . ".." . DIR_SEP));

// Classes folder
defined("CLASS_DIR") || define("CLASS_DIR", "classes");

// Classes folder
defined("PAGE_DIR") || define("PAGE_DIR", "pages");

// Modules folder
defined("MOD_DIR") || define("MOD_DIR", "modules");

// Include folder
defined("INC_DIR") || define("INC_DIR", "inc");

// Template folder
defined("TEMP_DIR") || define("TEMP_DIR", "template");

// Emails path
defined("EMAIL_PATH") || define("EMAIL_PATH", ROOT_PATH . DIR_SEP . "emails");

// Catalogue path
defined("CATALOGUE_PATH") || define("CATALOGUE_PATH", ROOT_PATH . DIR_SEP . "media" . DIR_SEP . "catalogue");

// set_include_path - Add all above directories to include path
// get_include_path - gets current include path
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(ROOT_PATH . DIR_SEP . CLASS_DIR),
    realpath(ROOT_PATH . DIR_SEP . PAGE_DIR),
    realpath(ROOT_PATH . DIR_SEP . MOD_DIR),
    realpath(ROOT_PATH . DIR_SEP . INC_DIR),
    realpath(ROOT_PATH . DIR_SEP . TEMP_DIR),
    get_include_path()
)));
