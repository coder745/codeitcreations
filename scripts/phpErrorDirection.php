<?php
//The dirname(__FILE__) refers to the current directory

//Prevents the display of unnecessary PHP error messages on the page:
//ini_set("display_errors", "0");

ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/errorLog.txt');
error_reporting(E_ALL);
?>