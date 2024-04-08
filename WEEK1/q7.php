<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Types</title>
</head>
<body>
    <?php 
    $whatsit = "I am learning php";
    echo "Value is" . " " . gettype($whatsit) . "<br/>";

    $whatsit = 2.24;
    echo "Value is" . " " . gettype($whatsit) . "<br/>";
    
    $whatsit =  True;
    echo "Value is" . " " . gettype($whatsit) . "<br/>";

    $whatsit = 42;
    echo "Value is" . " " .gettype($whatsit) . "<br/>";

    $whatsit = NULL;
    echo "Value is" . " " . gettype($whatsit) . "<br/>";
    ?>
</body>
</html>