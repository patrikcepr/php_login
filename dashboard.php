<?php
    //Allow config
    define('__CONFIG__', true);
    //Require the config
    require_once 'assets/includes/config.php';

    echo $_SESSION['user_id'] . ' is your user id.';
    exit;
?>
<!DOCTYPE html>
<html lang="cs">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Login</title>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/css/uikit.min.css" />
  </head>
  <body>
    <div class="uk-section uk-container">
      
    </div>
    <?php require_once "assets/includes/footer.php" ?>
  </body>
</html>
