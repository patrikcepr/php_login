<?php
    //Allow config
    define('__CONFIG__', true);
    //Require the config
    require_once '../assets/includes/config.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      //always give JSON format
      // header('Content-Type: application/json');
      // data need to exist
      $return = [];

      $email = Filter::String( $_POST['email'] );
      $password = $_POST['password'];

      //find the user
      $findUser = $con->prepare("SELECT user_id, password from users WHERE email = LOWER(:email) LIMIT 1");
      $findUser->bindParam(':email', $email, PDO::PARAM_STR);
      $findUser->execute();

      if($findUser->rowCount() == 1) {
        //user exist, try to sign them in
        $User = $findUser->fetch(PDO::FETCH_ASSOC);

        $user_id = (int) $User['user_id'];
        $hash = (string) $User['password'];

        if(password_verify($password, $hash)) {
          //user is signed in
            $return['redirect'] = 'dashboard.php';

            $_SESSION['user_id'] = $user_id;
        }  else {
            //invalid user email/password combo
            $return['error'] = 'Invalid user email/password combination.';
          }

      } else {
          //user does not exist, need to register
			     $return['error'] = "You do not have an account. <a href='/register.php'>Create one now?</a>";
      }

      echo json_encode($return, JSON_PRETTY_PRINT);
      exit();
    } else {
      //Die
      exit('Invalid URL');
    }

?>
