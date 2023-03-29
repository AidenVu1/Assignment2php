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
                  <div class="mdl-layout__index.phpheader-row">
                    <span class="mdl-layout-title">area and circumference of a circle</span>
                  </div>
                </header>
              <main class="mdl-layout__content" style="margin-left:75px;">
<form action="" method="GET" class="mdl-grid" autocomplete="off">
          <div class="mdl-cell mdl-cell--12-col">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
              <input class="mdl-textfield__input" type="text" id="diameter" name="diameter" pattern="[0-9]+(\.[0-9]+)?" title="Invalid input">
              <label class="mdl-textfield__label" for="diameter">Diameter</label>
            </div>
          </div>
          <div class="mdl-cell mdl-cell--12-col">
            <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect mdl-cell--12-col">
              Calculate
            </button>
          </div>
        </form>
              <?php
          if(isset($_GET['diameter']) && $_GET['diameter'] >= 0){
              $dia = $_GET['diameter'];
              $radius = $dia / 2;
              $area = round(pi() * pow($radius, 2), 2);
              $circumference = round(2 * pi() * $radius, 2);
              echo "<div class='results'>";
              echo "Diameter: $dia <br>";
              echo "Radius: " . round($radius, 2) . "<br>";
              echo "Area: $area <br>";
              echo "Circumference: $circumference <br>";
              echo "</div>";
          } 
          elseif(isset($_GET['diameter']) && $_GET['diameter'] < 0){
              echo "<div class='results'>Please enter a non-negative integer only.</div>";
          }
          ?>

      </main>

        </body>
    </head>
</html>
