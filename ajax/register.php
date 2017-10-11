<?php
    //Allow config
    define('__CONFIG__', true);
    //Require the config
    require_once '../assets/includes/config.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      //always give JSON format
      header('Content-Type: application/json');
      // data need to exist
      $return = [];

      //make sure user does not exist

      //make sure user CAN BE and IS ADDED

      //return the proper information to javascript to redirect us
      $return['redirect'] = 'dashbard.php';
      $return['name'] = 'Patrik Cepr';
      echo json_encode($return, JSON_PRETTY_PRINT);
      exit();
    } else {
      //Die
      exit('test');
    }

?>
