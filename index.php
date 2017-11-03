
<?php
$dsn = 'mysql:dbname=sn478;host=sql1.njit.edu';
$user = 'sn478';
$password = 'RJRNIIe0';

try {
    $dbh = new PDO($dsn, $user, $password);
     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connected successfully<br>';
} catch (PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage() . '<br>';
}



?>
