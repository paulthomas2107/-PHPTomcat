<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions in PHP</title>
</head>
<body>
    <?php

    function addNumbers($num_1 = 0, $num_2 = 0) {
        return $num_1 + $num_2;
    }

    printf("100 + 101 is %d<br>", addNumbers(100, 101));

    function changeMe($change) {
        $change = 10;
    }

    $change = 5;
    changeMe($change);
    echo "Change is $change<br>"; // still 5 methods as method uses value not object

    $change_ok = 123;
    function changeWorks(&$change_ok) { // adding & to parm makes it pass by reference
        $change_ok = &$change_ok;
    }
    changeWorks($change_ok);
    echo "Change is $change_ok<br>";

    function getSum(...$nums) {
        $sum = 0;
        foreach($nums as $num) {
            $sum += $num;
        };
        return $sum;
    }
    printf("Sum = %d<br>", getSum(1, 2, 3, 4));

    function doMath($x, $y) {
        return array (
        $x + $y,
        $x - $y
        );
    }
    list($sum, $difference) = doMath(5, 4);
    echo "Sum = $sum<br>";  
    echo "Diff = $difference<br>";

    function double($x) {
        return $x * $x;
    }
    $list = [1, 2, 3, 4];
    $dbl_list = array_map('double', $list);
    print_r($dbl_list);

    function mult($x, $y) {
        $x *= $y;
        return $x;
    }
    $list = [1, 2, 3, 4];
    $prod = array_reduce($list, 'mult', 1);
    print_r($prod);

    ?>
</body>
</html>