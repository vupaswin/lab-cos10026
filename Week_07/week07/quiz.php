<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Predict the Output</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Predict the output</h1>
  <p>Write down your answers before you look at this page in the browser.</p>

  <h2>Question 1</h2>
  <?php
    $n = 5;
    echo '<p>n is $n</p>';
  ?>

  <h2>Question 2</h2>
  <?php
    $i = 2;
    echo "<p>Total: $i + 1</p>";
  ?>

  <h2>Question 3</h2>
  <?php
    $x = 5;
    $y = $x++;
    echo "<p>", $x, " ", $y, "</p>";
  ?>

  <h2>Question 4</h2>
  <pre><?php
    var_dump(10 === "10");
  ?></pre>
</body>
</html>
