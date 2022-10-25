<!DOCTYPE HTML>
<html>
  
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="Friend Bot" />
    <meta name="keywords" content="ics2o" />
    <meta name="author" content="Cameron Gonsalves" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
    <link rel="manifest" href="./site.webmanifest">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>Friend Bot</title>
  </head>
  
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Friend Bot</span>
        </div>
      </header>
  
      <main class="mdl-layout__content" style="margin-left:75px;">
        <!-- Simple Textfield -->
        <form method="post" name="whoareyou" action="handler.php">
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" id="myName" name="myName">
            <label class="mdl-textfield__label" for="myName">What is your name?</label>
          </div>
          <!-- Raised button with ripple -->
          <div>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
              Submit
            </button>
          </div>
        </form>
      </main>

    </div>
  </body>
</html>

