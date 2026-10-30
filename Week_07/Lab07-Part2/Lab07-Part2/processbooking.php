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
echo "<p><strong>Welcome </strong> " . $_POST["firstname"] . " " . $_POST["lastname"] . "<span> !</span></p>";
echo "<p>You're now booked on the: " . $_POST["bookday"] . " with " . $_POST["accom"]. $_POST["4day"]. $_POST["10day"] . "</p>";
echo "<p>Species: " . $_POST["species"] . "</p>";
echo "<p>Age: " . $_POST["age"] . "</p>";
echo "<p>Meal Preference: " . $_POST["food"] . "</p>";
echo "<p>Number of travellers: " . $_POST["partysize"] . "</p>";
?>
</body>
</html>
