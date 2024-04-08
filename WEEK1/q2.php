<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php 
    // Initialize variables before using them
    $var1 = "Birmingham";
    $var2 = "City";

    // Echo statements should be within PHP tags
    echo "Hello World<br/>";
    echo $var2 . "<br/>";

    // This is comment in PHP
    // Reassign different value to $var1 and $var2

    $var1 = "London University";
    $var2 = "London";

    // Echo statements should have semicolons at the end
    echo "<h1>" . $var1 . "</h1>";
    echo "<br/>";
    echo $var2;
    echo "<br/>";
    ?>

    <h1>
        <?php
        // Echo statements within HTML tags should be enclosed in PHP tags
        echo $var1;
        ?>
    </h1>
    <br/>
    <?php
    echo $var2;
    ?>
    <br/>
</body>
</html>