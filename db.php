<?php
try{
$pdo = new PDO("mysql:host=localhost; dbname=ecommerce","root",""); // Php Data Object
// echo "Connected";
}
catch(PDOException $e)
{
    echo "ERROR";
}
?>