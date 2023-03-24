<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        <link rel="stylesheet" href="index.css">
        <title> php </title>
        <body>
            <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
                <header class="mdl-layout__header">
                  <div class="mdl-layout__header-row">
                    <!-- Title -->
                    <span class="mdl-layout-title">Circumference and Area</span>
                    <!-- Add spacer, to align navigation to the right -->
                    <div class="mdl-layout-spacer"></div>
                    <!-- Navigation. We hide it in small screens. -->
                    <nav class="mdl-navigation mdl-layout--large-screen-only">
                      <a class="mdl-navigation__link" href="">Link</a>
                      <a class="mdl-navigation__link" href="">Link</a>
                      <a class="mdl-navigation__link" href="">Link</a>
                      <a class="mdl-navigation__link" href="">Link</a>
                    </nav>
                  </div>
                </header>
                <div class="mdl-layout__drawer">
                  <span class="mdl-layout-title">Title</span>
                  <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="">Link</a>
                    <a class="mdl-navigation__link" href="">Link</a>
                    <a class="mdl-navigation__link" href="">Link</a>
                    <a class="mdl-navigation__link" href="">Link</a>
                  </nav>
                </div>
                <main class="mdl-layout__content">
                  <div class="page-content"><!-- Your content goes here --></div>
                </main>
              </div>

              <main class="mdl-layout__content" style="margin-left:75px;">
        <!-- Simple Textfield -->
        
      <?php
        echo "<form method=\"post\" name=\"whoareyou\" action=\"handler.php\">\n";
         echo "<div class=\"mdl-textfield mdl-js-textfield\">\n";
          echo  "<input class=\"mdl-textfield__input\" type=\"text\" id=\"diameter\" name=\"diameter\">\n";
          echo "<label class=\"mdl-textfield__label\" for=\"diameter\"> What is the diameter?</label>\n";
          if (isset($_GET) && $_GET['error'] == 1) {
            echo "<p class=\"variablecolour\">please enter a valid number (should be positive)</p>";
          }
          echo "</div>\n";
      ?>
      <?php
         echo "<div>\n";
            echo "<button class=\"mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent\">
              Submit
            </button>\n";
         echo "</div>\n";
        echo "</form>\n";
            ?>
      </main>

        </body>
    </head>
</html>
