<?php
require_once('config.php');

function __autoload($class_name)
{
    // explode - _ acts as a divider for the elements of the array
    $class = explode("_", $class_name);
    // implode - / acts joins the array elements
    $path = implode("/", $class) . ".php";
    require_once($path);
}
