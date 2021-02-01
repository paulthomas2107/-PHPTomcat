<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exceptions in PHP</title>
</head>
<body>
    <?php
    function badDivide($num) {
        if ($num == 0) {
            throw new Exception("You cannot divide by zero.");
        }
        return $calc = 100 / $num;
     }

     try {
         badDivide(0);
     } catch (Exception $e) {
         echo "Exception : " . $e->getMessage();
     }

    ?>
</body>
</html>