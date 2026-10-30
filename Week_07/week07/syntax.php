<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Syntax Essentials</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Syntax essentials</h1>

  <h2>1. echo and print</h2>
  <?php
    // echo can take several arguments, separated by commas
    echo "<p>One</p>", "<p>Two</p>";

    // print takes exactly one argument
    print "<p>Three</p>";

    // Every statement ends with a semicolon.
    // Try deleting the semicolon above and refreshing:
    // the error message points at the NEXT line.
  ?>

  <h2>2. Handling quotes</h2>
  <?php
    // WRONG – the string ends at the second double quote, so PHP stops with a syntax error:
    // echo "<img src="logo.jpg" alt="PHP logo">";

    // Fix 1: escape the inner double quotes with a backslash
    echo "<p><img src=\"logo.jpg\" alt=\"PHP logo\"></p>";

    // Fix 2: use single quotes for the HTML attributes
    echo "<p><img src='logo.jpg' alt='PHP logo'></p>";

    // Keep the alt text: accessibility rules apply to HTML that PHP generates too.
  ?>
</body>
</html>
