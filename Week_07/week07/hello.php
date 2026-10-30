<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Week 7 Demo</title>
</head>
<body>
  <!-- Plain HTML: sent to the browser exactly as written -->
  <p>Hello World in plain HTML</p>

  <?php
    // PHP block: runs on the server. Only its output reaches the browser.
    echo "<p>Hello World created by PHP</p>";
  ?>

  <!--
    Try this:
    1. Open http://localhost/week07/hello.php and choose View Page Source.
       Can you find the PHP code? (You shouldn't!)
    2. Now double-click this file to open it with a file:// address.
       What happens to the PHP part?
  -->
</body>
</html>
