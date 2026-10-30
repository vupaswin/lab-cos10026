<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mixing PHP and HTML</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Mixing PHP and HTML</h1>

  <h2>Style 1: echo the HTML from PHP</h2>
  <?php
    // A loop that repeats with $i = 1, 2, 3 … 6 (loops are covered next lecture)
    for ($i = 1; $i <= 6; $i++) {
      // The variable can go inside the tag name: <h1>, <h2> … <h6>
      echo "<h$i>Heading $i</h$i>";
    }
  ?>

  <h2>Style 2: step out of PHP for plain HTML</h2>
  <ul>
  <?php for ($i = 1; $i <= 3; $i++) { ?>
    <li>Item <?php echo $i; ?></li>
  <?php } ?>
  </ul>

  <!--
    Both styles send ordinary HTML to the browser.
    Use View Page Source to see it, then paste that source into the
    W3C validator (validator.w3.org). Don't validate the .php file itself.
  -->
</body>
</html>
