<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More Functions in PHP</title>
</head>
<body>
    <?php

    function mult($x, $y) {
        $x *= $y;
        return $x;
    }
    $list = [1, 2, 3, 4];
    $prod = array_reduce($list, 'mult', 1);
    print_r($prod);
    printf('<br>');

    function isEven($x) {
        return ($x % 2) == 0;
    };

    $list = [1, 2, 3, 4];
    $even_list = array_filter($list, 'isEven');
    print_r($even_list);
    printf('<br>');

    ?>
</body>
</html>