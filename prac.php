
<!DOCTYPE html> 
<html> 
<body> 


<?php
$dsn      = 'mysql:dbname=sn478;host=sql1.njit.edu';
$user     = 'sn478';
$password = 'RJRNIIe0';

try {
    echo "<table>";
    echo '<link rel="stylesheet" href="style.css" type="text/css">';
    $dbh = new PDO($dsn, $user, $password);
    echo 'Connected successfully<br>';
    $query = "SELECT * FROM accounts WHERE id < 6";
    echo "<tr> 
          <th>ID</th> 
          <th>EMAIL</th> 
          <th>FIRSTNAME</th> 
          <th>LASTNAME</th> 
          <th>PHONE</th> 
          <th>BIRTHDAY</th> 
          <th>GENDER</th> 
          <th>PASSWORD</th> 
          </tr>";
    foreach ($dbh->query($query) as $row) {
        echo "<tr>";
        echo ' <td >'. $row[id] .' </td> 
               <td>'.$row[email].' </td> 
               <td>'.$row[fname].' </td> 
               <td>'.$row[lname].' </td> 
               <td>'.$row[phone].' </td> 
               <td>'.$row[birthday].'</td> 
               <td>'.$row[gender].' </td> 
               <td>'.$row[password].'</td>';
        echo "</tr>";
    }
    
}
catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$dbh = null;
echo "</table>";
?>  

</body> 
</html> 
