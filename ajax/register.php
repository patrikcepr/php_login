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

      $email = Filter::String( $_POST['email'] );

      //make sure user does not exist
      $findUser = $con->prepare("SELECT user_id from users WHERE email = LOWER(:email) LIMIT 1");
      $findUser->bindParam(':email', $email, PDO::PARAM_STR);
      $findUser->execute();

      if($findUser->rowCount() == 1) {
        //user exist
        //check if he can login
        $return['error'] = "You already have an account.";
        $return['is_logged_in'] = false;
      } else {
        //user does not exist add him now
        $password = password_hash( $_POST['password'], PASSWORD_DEFAULT );

        $addUser = $con->prepare("INSERT INTO users(email, password) VALUES(LOWER(:email), :password)");
        $addUser->bindParam(':email', $email, PDO::PARAM_STR);
        $addUser->bindParam(':password', $password, PDO::PARAM_STR);
        $addUser->execute();

        $user_id = $con->lastInsertId();

        $_SESSION['user_id'] = (int) $user_id;

        $return['redirect'] = 'dashbard.php?message=Welcome';
        $return['is_logged_in'] = true;
      }

      echo json_encode($return, JSON_PRETTY_PRINT);
      exit();
    } else {
      //Die
      exit('Invalid URL');
    }

?>
