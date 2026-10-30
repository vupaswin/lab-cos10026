<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Quick Guide for Python Beginners</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 30px auto;
            max-width: 850px;
            padding: 0 20px;
            color: #333;
        }
        h1 { color: #4F5D95; border-bottom: 2px solid #4F5D95; padding-bottom: 8px; }
        h2 { color: #2c3e50; margin-top: 25px; border-left: 4px solid #4F5D95; padding-left: 10px; }
        .box {
            background: #f8f9fa;
            border: 1px solid #e9ecef;
            border-radius: 6px;
            padding: 15px;
            margin: 15px 0;
        }
        .compare-table {
            width: 100%;
            border-collapse: collapse;
            margin: 15px 0;
        }
        .compare-table th, .compare-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        .compare-table th { background-color: #f1f3f5; }
        code {
            background-color: #f1f3f5;
            padding: 2px 5px;
            border-radius: 3px;
            color: #d63384;
            font-family: Consolas, monospace;
        }
        .output {
            background: #eef9fd;
            border-left: 4px solid #0dcaf0;
            padding: 10px 15px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <h1>PHP Crash Course (Python Developer Cheat Sheet)</h1>
    <p>PHP is a server-side language designed to output HTML. Here is how PHP compares to Python syntax.</p>

    <!-- 0. THE BIGGEST DIFFERENCES -->
    <h2>0. Quick Syntax Comparison</h2>
    <table class="compare-table">
        <tr>
            <th>Concept</th>
            <th>Python</th>
            <th>PHP</th>
        </tr>
        <tr>
            <td><strong>Variable Prefix</strong></td>
            <td><code>name = "Ray"</code></td>
            <td><code>$name = "Ray";</code> (Must start with <code>$</code>)</td>
        </tr>
        <tr>
            <td><strong>End of Statement</strong></td>
            <td>Newline</td>
            <td>Semicolon <code>;</code> (Required!)</td>
        </tr>
        <tr>
            <td><strong>Code Blocks</strong></td>
            <td>Indentation</td>
            <td>Curly brackets <code>{ ... }</code></td>
        </tr>
        <tr>
            <td><strong>String Concatenation</strong></td>
            <td><code>"Hello " + name</code></td>
            <td><code>"Hello " . $name</code> (Dot <code>.</code> operator)</td>
        </tr>
        <tr>
            <td><strong>Print / Output</strong></td>
            <td><code>print("Hello")</code></td>
            <td><code>echo "Hello";</code></td>
        </tr>
    </table>

    <!-- 1. VARIABLES & STRINGS -->
    <h2>1. Variables & String Interpolation</h2>
    <div class="box">
        <p>In Python, you use f-strings: <code>f"Hello {name}"</code>. In PHP, double quotes <code>"..."</code> automatically interpolate variables!</p>
        <div class="output">
            <strong>Output:</strong><br>
            <?php
                $name = "Ray";
                $age = 20;
                $course = "COS10026";

                // Double quotes expand variables directly:
                echo "Hello, my name is $name and I am $age years old.<br>";

                // Or concatenate with a dot (.):
                echo "Enrolled in course: " . $course . "<br>";
            ?>
        </div>
    </div>

    <!-- 2. CONDITIONALS (IF / ELSE) -->
    <h2>2. Conditionals (if, elseif, else)</h2>
    <div class="box">
        <p>Python's <code>elif:</code> is written as <code>elseif (...) { }</code> or <code>else if (...) { }</code> in PHP.</p>
        <div class="output">
            <strong>Output:</strong><br>
            <?php
                $score = 85;

                if ($score >= 80) {
                    echo "Result: High Distinction (HD)";
                } elseif ($score >= 70) {
                    echo "Result: Distinction (D)";
                } elseif ($score >= 50) {
                    echo "Result: Pass (P)";
                } else {
                    echo "Result: Fail (N)";
                }
            ?>
        </div>
    </div>

    <!-- 3. LISTS vs INDEXED ARRAYS -->
    <h2>3. Lists &rarr; Indexed Arrays</h2>
    <div class="box">
        <p>Python <code>list = ["HTML", "CSS", "PHP"]</code> is created using <code>array(...)</code> or bracket syntax <code>[...]</code> in PHP.</p>
        <div class="output">
            <strong>Output:</strong><br>
            <?php
                $skills = ["HTML", "CSS", "JavaScript", "PHP"];

                echo "First skill: " . $skills[0] . "<br>";
                echo "Total skills (like len()): " . count($skills) . "<br>";

                // Looping: like 'for item in skills:'
                echo "<ul>";
                foreach ($skills as $skill) {
                    echo "<li>$skill</li>";
                }
                echo "</ul>";
            ?>
        </div>
    </div>

    <!-- 4. DICTIONARIES vs ASSOCIATIVE ARRAYS -->
    <h2>4. Dictionaries &rarr; Associative Arrays</h2>
    <div class="box">
        <p>Python <code>dict = {"key": "val"}</code> translates to PHP Associative Arrays using <code>=></code>.</p>
        <div class="output">
            <strong>Output:</strong><br>
            <?php
                // Python: student = {"name": "Ray", "unit": "Web Development", "grade": 90}
                $student = [
                    "name"  => "Ray",
                    "unit"  => "COS10026 Web Tech",
                    "grade" => 90
                ];

                echo "Student Name: " . $student["name"] . "<br>";

                // Looping keys and values (like dict.items()):
                echo "<strong>All details:</strong><br>";
                foreach ($student as $key => $value) {
                    echo "$key : $value<br>";
                }
            ?>
        </div>
    </div>

    <!-- 5. FUNCTIONS -->
    <h2>5. Functions</h2>
    <div class="box">
        <p>Python uses <code>def my_func():</code>. PHP uses <code>function my_func() { }</code>.</p>
        <div class="output">
            <strong>Output:</strong><br>
            <?php
                function calculateGpa($totalPoints, $totalUnits) {
                    if ($totalUnits == 0) {
                        return 0;
                    }
                    return $totalPoints / $totalUnits;
                }

                $gpa = calculateGpa(28, 8);
                echo "Calculated GPA: <strong>$gpa</strong>";
            ?>
        </div>
    </div>

</body>
</html>
