<?php
  // Constants are usually defined at the top of the file.
  define("MAX_ITEMS", 3);        // Method 1: define("NAME", value) – note the quotes around the name
  const SITE_NAME = "LearnPHP";  // Method 2: const – only at the top level of a script
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Variables and Constants</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Variables and constants</h1>

  <h2>1. Variables start with $</h2>
  <?php
    $unitName     = "Web Technologies Project"; // string
    $lectureHours = 2;                          // integer
    $creditPoints = 12.5;                       // float
    $isCoreUnit   = true;                       // boolean

    echo "<p>Unit: ", $unitName, "</p>";
    echo "<p>Lecture hours: ", $lectureHours, "</p>";

    $lectureHours = 3;   // a variable can be changed at any time
    echo "<p>Lecture hours now: ", $lectureHours, "</p>";

    // Names are case-sensitive: $Name and $name are different variables.
  ?>

  <h2>2. Three ways to output a variable</h2>
  <?php
    $name = "Ana";

    echo "<p>1. Hi ", $name, "</p>";     // listing (commas)
    echo "<p>2. Hi " . $name . "</p>";   // concatenation (dots)
    echo "<p>3. Hi $name</p>";           // embedded in double quotes
  ?>

  <h2>3. Double quotes vs single quotes</h2>
  <?php
    echo "<p>Double quotes: Hi $name</p>";  // the variable is replaced by its value
    echo '<p>Single quotes: Hi $name</p>';  // printed exactly as typed
  ?>

  <h2>4. Trap: calculations inside a string</h2>
  <?php
    for ($i = 0; $i < 3; $i++) {
      echo "<p>Wrong: Number $i +1</p>";        // +1 is just text here
      echo "<p>Right: Number ", $i + 1, "</p>"; // listing: the sum is calculated first
    }
  ?>

  <h2>5. Constants</h2>
  <?php
    // Constants have no $ sign and are not replaced inside "…", so use listing.
    echo "<p>Welcome to SITE_NAME</p>";        // prints the word SITE_NAME
    echo "<p>Welcome to ", SITE_NAME, "</p>";  // prints LearnPHP

    echo "<ol>";
    for ($i = 0; $i < MAX_ITEMS; $i++) {
      echo "<li>Item ", $i + 1, "</li>";
    }
    echo "</ol>";

    // PHP also has built-in constants
    echo "<p>This server runs PHP version ", PHP_VERSION, "</p>";
  ?>
</body>
</html>
