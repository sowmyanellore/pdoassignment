<?php
$dsn = 'mysql:dbname=sn478;host=sql1.njit.edu';
$user = 'sn478';
$password = 'RJRNIIe0';

try{

$dbh = new PDO($dsn, $user, $password);
echo 'Connected successfully<br>';
$query = "SELECT * FROM accounts WHERE id < 6";
foreach( $dbh->query($query) as $row) { 
        echo $row[id]."-". $row[email]."-". $row[fname]."-".$row[lname]."-".$row[phone]."-".$row[birthday]."-".$row[gender]."-".$row[password].'<br>';
        
    }
    
    }
    catch(PDOException $e) {
    echo "Error: " . $e->getMessage() . '<br>';
}

$dbh = null;
?>
