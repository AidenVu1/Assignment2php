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
<form action="http://aiden.ics2o.ca/Assignment2php/index.php" method="post">
          <div class="mdl-textfield mdl-js-textfield mdl-card__supporting-text">
            <input class="mdl-textfield__input" type="text" id="sample2" name="d" pattern="^(?=.*[1-9])\d*(?:\.\d+)?$">
            <label class="mdl-textfield__label form" for="sample2">Diameter...</label>
            <span class="mdl-textfield__error form">Input is not a positive number!</span>
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-card__supporting-text">
            <input class="mdl-textfield__input" list="units" type="text" id="unit" name="u">
            <label class="mdl-textfield__label form" for="unit">Unit...</label>
            <datalist id="units">
              <option value="mm"></option>
              <option value="cm"></option>
              <option value="m"></option>
              <option value="in"></option>
              <option value="ft"></option>
              <option value="yd"></option>
            </datalist>
          </div>
          <div class="mdl-card__actions mdl-card--border">
            <button class="mdl-button mdl-js-button mdl-button--primary form">Submit Form</button>
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
