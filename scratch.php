   echo "$num_1 - $num_2 = " . ($num_1 - $num_2) . "<br>";
            echo "$num_1 * $num_2 = " . ($num_1 * $num_2) . "<br>";
            echo "$num_1 / $num_2 = " . ($num_1 / $num_2) . "<br>";
            echo "$num_1 % $num_2 = " . ($num_1 % $num_2) . "<br>";
            echo "$num_1 / $num_2 = " . (intdiv($num_1,  $num_2)). "<br>";
            

UPDATE mysql.user SET authentication_string='Caitlin1966__' WHERE User='root';
FLUSH PRIVILEGES;
exit;

mysql -u root
ALTER USER 'root'@'localhost' IDENTIFIED WITH caching_sha2_password BY 'Caitlin1966__';