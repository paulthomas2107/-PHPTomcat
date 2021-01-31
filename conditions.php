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

    $age= 12;
    switch(true) {
        case ($age < 5):
            echo "Stay Home<br>";
            break;
        case ($age == 5):
            echo "Go to Kindergarten<br>";
            break;
        case in_array($age, range(6, 17));
            $grade = $age - 5;
            echo "Go to Grade $grade<br>";
            break;
        default:
            echo "Go to College<br>";
            break;
    }

    // Ternary option
    $can_vote = ($age >= 18 ? "Can Vote" : "Cannot Vote");
    echo "Decision: $can_vote<br>";

    // Identical operator - data AND data-TYPE match
    if ("10" === 10) {
        echo "They are equal<br>";
    } else {
        echo "Not equal<br>";
    }
    // match in value
    if ("10" == 10) {
        echo "They are equal<br>";
    } else {
        echo "Not equal<br>";
    }

    // Formatting shit
    printf("%c %d %.2f %s<br>", 65,  65, 65.123456, 'Paul');

    // Strings
    $rand_str = "              Random String           ";
    printf("Length : %d<br>", strlen($rand_str));
    printf("Length : %d<br>", strlen(ltrim($rand_str)));
    printf("Length : %d<br>", strlen(rtrim($rand_str)));
    $rand_str = trim($rand_str);
    printf("Upper : %s<br>", strtoupper($rand_str));
    printf("Lower : %s<br>", strtolower($rand_str));
    printf("Upper 1st in each word : %s<br>", ucfirst($rand_str));
    printf("1st 6 : %s<br>", substr($rand_str, 0, 6));
    printf("Index  : %s<br>", strpos($rand_str, "String"));
    $rand_str = str_replace("String", "Characters",  $rand_str);
    printf("Replaced String w/ Characters: %s<br>", ($rand_str));
    printf("A == B : %d<br>", strcmp("A", "B"));
    printf("Hello == Hello : %d<br>", strcmp("Hello", "Hello"));



    ?>
</body>
</html>