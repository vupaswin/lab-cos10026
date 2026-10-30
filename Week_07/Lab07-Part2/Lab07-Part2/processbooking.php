<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>
<?php
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $age = $_POST["age"];
    $food = $_POST["food"];
    $partysize = $_POST["partysize"];
    // Species
    $species = $_POST["species"];
    if ($species == "H") {
        $species = "Hobbit";
    } elseif ($species == "E") {
        $species = "Elf";
    } elseif ($species == "D") {
        $species = "Dwarf";
    } else {
        $species = "Human";
    }
    // Tours
    $tour = "";
    if (isset($_POST["accom"])) {
        $tour = "One-day tour";
    }
    if (isset($_POST["4day"])) {
        if ($tour != "") {
            $tour = $tour . " and ";
        }
        $tour = $tour . "Four-day tour";
    }
    if (isset($_POST["10day"])) {
        if ($tour != "") {
            $tour = $tour . " and ";
        }
        $tour = $tour . "Ten-day tour";
    }
    echo "<p>Welcome $firstname $lastname !<br>";
    echo "You are now booked on the $tour<br>";
    echo "Species: $species<br>";
    echo "Age: $age<br>";
    echo "Meal Preference: $food<br>";
    echo "Number of travellers: $partysize</p>";
    ?>
</body>
</html>
