<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Types and Arrays</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Data types and arrays</h1>

  <h2>1. PHP is loosely typed</h2>
  <!-- <pre> keeps the line breaks of debugging output -->
  <pre><?php
    $price = 19.99;
    var_dump($price);   // float(19.99)

    $price = "free";    // same variable, new type
    var_dump($price);   // string(4) "free"

    $isOpen = true;
    var_dump($isOpen);  // bool(true)

    $nothing = null;
    var_dump($nothing); // NULL
  ?></pre>

  <h2>2. Indexed arrays (numbered from 0)</h2>
  <?php
    $fruits = array("Apple", "Banana", "Orange");
    $fruits[] = "Mango";      // add to the end – gets index 3
    $fruits[0] = "Apricot";   // change the first element

    echo "<p>Element at index 1: ", $fruits[1], "</p>";      // Banana
    echo "<p>Number of elements: ", count($fruits), "</p>"; // 4
  ?>
  <pre><?php print_r($fruits); ?></pre>

  <h2>3. Associative arrays (named keys)</h2>
  <?php
    $ages = array("Jack" => 30, "Sarah" => 28);
    $ages["Minh"] = 21;       // add a new key

    echo "<p>Sarah is ", $ages["Sarah"], "</p>";  // 28
  ?>
  <pre><?php print_r($ages); ?></pre>
  <!-- Next lecture: form data arrives in an associative array called $_POST -->

  <h2>4. Multidimensional arrays (arrays inside arrays)</h2>
  <?php
    $contacts = array(
      array("name" => "Jack",  "phone" => "1234"),
      array("name" => "Sarah", "phone" => "5678")
    );

    // First index picks the row, second key picks the column
    echo "<p>Sarah's phone: ", $contacts[1]["phone"], "</p>"; // 5678
    echo "<p>First contact: ", $contacts[0]["name"], "</p>";  // Jack
  ?>
  <pre><?php print_r($contacts); ?></pre>
</body>
</html>
