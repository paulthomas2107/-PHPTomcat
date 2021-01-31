<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops in PHP</title>
</head>
<body>
    <?php

    // while
    $i = 0;
    while ($i < 10) {
        echo  ++$i . ', ';
    }
    echo '<br>';

    // for loop
    for($i = 0; $i < 100; $i++) {
        if (($i % 2) == 0) { // Even numbers
            continue;
        } elseif ($i == 37) {
            break;
         } else {
            echo $i. ', '; // Show odds
         }
          
    }
    // Do while
    $i = 0;
    do {
        echo "Do while < 10: $i<br>";
        $i++;
    } while  ($i < 10)



    ?>
</body>
</html>