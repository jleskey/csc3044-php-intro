<?php

session_start();

if (!isset($_SESSION['visit']))
    $_SESSION['visit'] = 0;
else
    $_SESSION['visit']++;

$visit = $_SESSION['visit'];

$colors = ['red', 'green', 'blue', 'maroon', 'blueviolet', 'darkorange',
           'goldenrod', 'lightseagreen', 'limegreen', 'steelblue'];

$date = date("l, F jS");
$time = date("g:ia");
$color = $visit === 0 ? 'black' : $colors[array_rand($colors)];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="60">
    <title>Welcome Refresh (1 min)</title>
    <style>
        .colorful {
            color: <?php echo $color ?>;
        }
    </style>
  </head>
  <body>
    <h2>Welcome!</h2>
    <p>
        <strong>
            It's
            <span class="colorful"><?php echo $date ?></span>.
        </strong>
    </p>
    <p>
        The time is <span class="colorful"><?php echo $time ?></span>.
    </p>
    <p>
        Or at least that's our time, though it may not be yours.
    </p>
  </body>
</html>
