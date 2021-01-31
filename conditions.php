<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions in PHP</title>
</head>
<body>
    <?php

    # Conditional operators ==  != <> <= and with 
    # Logical operators &&  || ! 

    $num_oranges = 5;
    $num_bananas = 5;

    if(($num_oranges > 25) && ($num_bananas  > 30)) {
        echo "25% discount<br>";
    } elseif(($num_oranges > 30) || ($num_bananas > 35 )) {
        echo "15% discount<br>";
    } elseif(!(($num_oranges < 5 )) || (!($num_bananas < 5))) {
         echo "5% discount<br>";
    } else {
         echo "No discount<br>";
    }

    # Switch Statement
    $request = "Coca-Cola";
    switch($request) {
        case "Coca-Cola":
            echo "Here is your coke<br>";
            break;
        case "Pepsi":
            echo "Here is your Pepsi<br>";
            break;
        default:
            echo "Here is your WATER!<br>";
            break;
    }

    ?>
</body>
</html>