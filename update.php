<?php 

$pdo = require('connect.php');

$data = [
    'publisher_id' => 1,
    'name' => 'Cris Brown'
];

$sql = 'UPDATE publishers
        SET name = :name
        WHERE publisher_id = :publisher_id';
    
$statement = $pdo->prepare($sql);

$statement->bindParam(':name', $data['name']);
$statement->bindParam(':publisher_id', $data['publisher_id']);

;
if($statement->execute()){
    echo 'Updated successfully';
}else{
    echo 'Failed to update';
}