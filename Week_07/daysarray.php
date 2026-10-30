<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using PHP Variables, arrays and operators</title>
</head>
<body>
    <h1>Using PHP Variables, arrays and operators</h1>
<?php
    $days_eng = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
    echo "<p>The day of the week in English: </p>";
    foreach ($days_eng as $day) {
        echo "$day ";
    }
    $days_vi = array("Thứ Hai", "Thứ Ba", "Thứ Tư", "Thứ Năm", "Thứ Sáu", "Thứ Bảy", "Chủ Nhật");
    echo "<p>The day of the week in Vietnamese: </p>";
    foreach ($days_vi as $day) {
        echo "$day ";
    }   
?>
</body>
</html>