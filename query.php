<?php  
$connect = mysqli_connect("localhost", "root", "", "oncost");  
$output = '';  
$sql = "SELECT * FROM mobil ORDER BY id ASC";  
$result = mysqli_query($connect, $sql);  