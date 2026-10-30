<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Expressions and Operators</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Expressions and operators</h1>

  <h2>1. Arithmetic</h2>
  <?php
    echo "<p>15 / 6 = ", 15 / 6, "</p>";   // 2.5
    echo "<p>15 % 6 = ", 15 % 6, "</p>";   // 3 (6 fits twice, 3 left over)

    // % 2 tells you if a number is even (0) or odd (1)
    echo "<p>7 % 2 = ", 7 % 2, "</p>";
  ?>

  <h2>2. Compound assignment</h2>
  <?php
    $x = 100;
    $x += 50;   // same as $x = $x + 50
    echo "<p>After += 50: ", $x, "</p>";   // 150
    $x *= 2;    // same as $x = $x * 2
    echo "<p>After *= 2: ", $x, "</p>";    // 300
    $x -= 1;
    echo "<p>After -= 1: ", $x, "</p>";    // 299
  ?>

  <h2>3. ++ before or after?</h2>
  <?php
    $id = 100;
    $a = ++$id;   // prefix: add 1 first ($id is 101), then use it
    $b = $id++;   // postfix: use the value (101) first, then add 1 ($id is 102)

    // Predict before you refresh!
    echo "<p>", "$a $b $id", "</p>";       // 101 101 102
  ?>

  <h2>4. == compares values, === also compares types</h2>
  <pre><?php
    var_dump(5 == "5");      // bool(true)  – values are equal
    var_dump(5 === "5");     // bool(false) – integer vs string
    var_dump("1" == "01");   // bool(true)  – compared as numbers!
    var_dump("1" === "01");  // bool(false)
  ?></pre>
  <!-- Remember: =  assigns a value.  ==  and  ===  compare values. -->

  <h2>5. Logical operators and the ternary operator</h2>
  <?php
    $age = 20;
    $hasTicket = true;

    // && : both sides must be true
    if ($age >= 18 && $hasTicket) {
      echo "<p>Come in</p>";
    }

    // Ternary: condition ? value if true : value if false
    $label = ($age >= 18) ? "Adult" : "Minor";
    echo "<p>Label: ", $label, "</p>";      // Adult
  ?>

  <h2>6. Not sure what runs first? Add brackets</h2>
  <?php
    $price = 10;
    echo "<p>", $price + $price * 0.1, "</p>";     // 11  (* runs before +)
    echo "<p>", ($price + $price) * 0.1, "</p>";   // 2   (brackets run first)
  ?>
</body>
</html>
