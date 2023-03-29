<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        <link rel="stylesheet" href="index.css">
        <title> php </title>
</head>
        <body>
        <header class="mdl-layout__header">
                  <div class="mdl-layout__header-row">
                    <span class="mdl-layout-title">area and circumference of a circle</span>
                  </div>
                </header>
                <main class="mdl-layout__content" style="margin-left:75px;">
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
</main>

</div>
</body>
</html>

