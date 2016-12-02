<?php
$servername = "localhost";
$username = "rzrizaldy";
$password = "12345678";
$dbname = "oncost";

// Create connection
$pdo = new PDO($servername, $username, $password, $dbname);

// Check connection
if ($pdo->connect_error) {
    die("Connection failed: " . $pdo->connect_error);
} 

//FORM 1
$sql = "SELECT * FROM mobil";
 
//Prepare the select statement.
$stmt = $pdo->prepare($sql);
 
//Execute the statement.
$stmt->execute();
 
//Retrieve the rows using fetchAll.
$mobil= $stmt->fetchAll();
 
?>
 
<select>
    <?php foreach($mobil as $merek): ?>
        <option value="<?= $merek['id']; ?>"><?= $merek['merekmobil']; ?></option>
    <?php endforeach; ?>
</select>

?>