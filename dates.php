<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Functions in PHP</title>
</head>
<body>
    <?php

    date_default_timezone_set('Europe/London');
    echo "Date : " . date('d-m-Y g:i:s:a') . "<br>";
    
    $import_date = mktime(14,22,23,7,21,1966);
    echo "Birthdate : " . date('d-m-Y g:i:s:a', $import_date) . "<br>";


    ?>
</body>
</html>