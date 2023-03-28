<?php if ( isset($_POST['diameter']) && (is_numeric($_POST['diameter']) && $_POST['diameter']>0) ): ?>

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
$_POST['diameter1']=$_POST['diameter']/2
?>
<?php
  echo "<h3>the circumference of a circle with a diameter of ".$_POST['diameter']." is ".$_POST['diameter1']*2*pi()."<h3>";
?>
<?php
  echo "<h3>the area of a circle with a diameter of ".$_POST['diameter']." is ".$_POST['diameter1']**2*pi()."<h3>";
?>
</main>

</div>
</body>
</html>

