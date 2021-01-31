<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays in PHP</title>
</head>
<body>
    <?php

    $friends = array('Joy', 'Willow', 'Freddy', 'Paul');
    echo 'Wife : ' .$friends[0] . '<br>';
    $friends[3] = "Rory";

    foreach ( $friends as $f) {
        printf("Friend : %s<br>", $f);
    }

    $me_info = array('Name' => 'Paul Thomas', 'Street' => '123 Main Street');
    foreach ( $me_info as $k => $v) {
       printf("%s : %s<br>", $k, $v);
    }

    $friends2 = array('Doug');
    $friends = $friends + $friends2;
    sort($friends);
    foreach ( $friends as $f) {
        printf("Friend : %s<br>", $f);
    }
    rsort($friends);
    foreach ( $friends as $f) {
        printf("Friend (rev-sort): %s<br>", $f);
    }
    asort($me_info);
    foreach ( $me_info as $f) {
        printf("Item (asort): %s<br>", $f);
    }
    ksort($friends);
    foreach ( $me_info as $f) {
        printf("Item (ksort): %s<br>", $f);
    }
    arsort($me_info);
    foreach ( $me_info as $f) {
        printf("Item (arsort): %s<br>", $f);
    }
    krsort($friends);
    foreach ( $me_info as $f) {
        printf("Item (krsort): %s<br>", $f);
    }

    // Multi Demension array
    $customers = array(array('Paul',  '123 The Street'), array('Sally', '999 Lodge Drive'));
    for($row = 0; $row < 2; $row++) {
        for($column = 0; $column < 2; $column++) {
            echo $customers[$row][$column] . ', ';
        }
        echo '<br>';
    }
    
    $let_str = "A B C D";
    $let_arr = explode(' ', $let_str);
    foreach($let_arr as $l) {
        printf("Letter : %s<br>", $l);
    }

    $let_str_2 = implode('*', $let_arr);
    echo "String : $let_str_2<br>";

    printf("Key exists : %d<br>", array_key_exists('Name', $me_info));
    printf("Value exists : %d<br>", in_array('Paul Thomas', $me_info));

    ?>
</body>
</html>