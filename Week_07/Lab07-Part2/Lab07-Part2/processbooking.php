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
echo "<p><strong>First Name:</strong> " . $_POST["firstname"] . "</p>";
echo "<p><strong>Last Name:</strong> " . $_POST["lastname"] . "</p>";
echo "<p><strong>Age:</strong> " . $_POST["age"] . "</p>";
echo "<p><strong>Species:</strong> " . $_POST["species"] . "</p>";
echo "<p><strong>Accommodation:</strong> " . $_POST["accom"] . "</p>";
echo "<p><strong>Food:</strong> " . $_POST["food"] . "</p>";
echo "<p><strong>Booking Day:</strong> " . $_POST["bookday"] . "</p>";
echo "<p><strong>Party Size:</strong> " . $_POST["partysize"] . "</p>";
?>
</body>
</html>
