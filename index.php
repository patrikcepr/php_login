<!-- <?php echo "Hello World"; ?> -->
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
          <form class="uk-form-stacked">

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
              <button class="uk-button uk-button-default" type="submit">Login</button>
            </div>
          </form>

      </div>
    </div>


    <!-- jQuery is required -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/js/uikit-icons.min.js"></script>
  </body>
</html>
