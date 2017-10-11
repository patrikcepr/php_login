<?php
    //Allow config
    define('__CONFIG__', true);
    //Require the config
    require_once 'assets/includes/config.php';
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
      <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid="">
          <form class="uk-form-stacked js-register">
            <h2>Register</h2>
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">E-mail</label>
                <div class="uk-form-controls uk-inline">
                    <span class="uk-form-icon" uk-icon="icon: user"></span>
                    <input class="uk-input" id="form-stacked-text" type="email" required="required" placeholder="Your e-mail...">
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-pass">Password</label>
                <div class="uk-form-controls">
                    <input class="uk-input" id="form-stacked-pass" type="password" required="required" placeholder="Your password...">
                </div>
            </div>
            <div class="uk-margin">
              <button class="uk-button uk-button-default" type="submit">Register</button>
            </div>
          </form>
      </div>
    </div>
    <?php require_once "assets/includes/footer.php" ?>
  </body>
</html>
