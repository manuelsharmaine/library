<?php

$pdo = require('connect.php');

$publisher_id = 1;


$sql= 'DELETE from publishers where publisher_id = :publisher_id';
$statement = $pdo->prepare($sql);
$statement->bindParam(':publisher_id', $publisher_id);

if($statement->execute()) {
    echo 'Data deleted';
}
