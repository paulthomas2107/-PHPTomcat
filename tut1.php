<?php

$f_name = "Paul";
$l_name = "Thomas";
$age = 12;
$height = 6.12;
$IS_ACTIVE = true;
$address = array ('Address', 'Dog', 'Lunchtime', 'Computer' => 'Mac', 'city' => 'Manchester');
$state = NULL;
define('PI', 3.1445);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Tutorial</title>
  </head>
  <body>
    <p>Name: <?php echo  $f_name . ' ' . $l_name; ?> </p>
    <form action="tut1.php" method="get">
    <label>Your state : </label>
    <input type="text" name="state"/><br>
    <label>Number 1: </label>
    <input type="text" name="num_1"/><br>
    <label>Number 2: </label>
    <input type="text" name="num_2"/><br>
    <input type="submit" value="Submit" />
    </form>

    <?php
    if (isset($_GET) && array_key_exists('state', $_GET)) {
        $state = $_GET['state'];
        if (isset($state) && !empty($state)) {
            echo 'You live in ' . $state . '<br>';
            echo "$f_name lives in $state<br>";
        }


        if (count($_GET) >= 3) {
            $num_1 = $_GET['num_1'];
            $num_2 = $_GET['num_2'];
            echo "$num_1 - $num_2 = " . ($num_1 - $num_2) . "<br>";
            echo "$num_1 * $num_2 = " . ($num_1 * $num_2) . "<br>";
            echo "$num_1 / $num_2 = " . ($num_1 / $num_2) . "<br>";
            echo "$num_1 % $num_2 = " . ($num_1 % $num_2) . "<br>";
            echo "$num_1 / $num_2 = " . (intdiv($num_1,  $num_2)). "<br>";

            echo "Increment $num_1 = " . ($num_1++) . "<br>";
            echo "Decrement $num_1 = " . ($num_1--) . "<br>";
            echo "Log10(10) = " .log10(exp(10)) . "<br>";
            echo "PI = " .pi() . "<br>";

            echo "Random(1, 20) = " .rand(1, 20) . "<br>";
            echo "MTRAND(1, 50) = " .mt_rand(1, 50) . "<br>";

            echo "isNumeric(\"10\") = " .is_numeric("10") . "<br>";

            echo number_format(12345.6789, 2) . "<br>";
        }
            
    }
    ?>
  </body>
</html>
