<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Multiplication tables</title>
</head>
<body>
    <div class="main-title">
        <h1>Multiplication tables</h1>
    </div>
    <div class="inline_container">
        <?php
            // require("./multiplication_tables.php"); // require => Import a file, if it does not exist, a fatal error is thrown that termite the execution of the web page.
            // require_once("./multiplication_tables.php"); // require_once => require_once is similar to require, but it only import a file once into a web page.
            // include("./multiplication_tables.php"); // include => Import a file once or more times, if it does not exist, an error is thrown, but the web page still runs.
            include_once("./multiplication_tables.php"); // include_once => include_once is similar to include, but it only import a file once into a web page.
            for ($i = 1; $i <= 10; $i++) {
                multiplication ($i);
            }
        ?>
    </div>
</body>
</html>