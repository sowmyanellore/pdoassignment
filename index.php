<?php



$dsn = 'mysql:dbname=sn478;host=sql1.njit.edu';
$user = 'sn478';
$password = 'RJRNIIe0';

try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = $dbh->prepare("SELECT * FROM accounts WHERE id < 6"); 
    $statement->execute();

    // set the resulting array to associative
    $result = $statement->setFetchMode(PDO::FETCH_ASSOC); 
    $array = new RecursiveArrayIterator($statement->fetchAll());
    foreach(new table($array) as $k=>$v) { 
        echo $v .'<br>';
        
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$dhp = null;

class table extends RecursiveIteratorIterator { 
   function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }
} 

?> 
