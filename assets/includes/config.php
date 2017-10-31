<?php
    // if there is no config file define, do not load this page
    if (!defined('__CONFIG__')) {
    # config not defined, no access
      exit('You do not have a config file.');
    }
    //if the config is defined, go on from here

    //Session is always on
    if(!isset($_SESSION)) {
      session_start();
    }

    //Include classes DB File
    include_once "classes/DB.php";
    include_once "classes/filter.php";

    $con = DB::getConnection();
    // include_once "database.php";
?>
