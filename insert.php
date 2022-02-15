<?php

$pdo = require 'connect.php';

//sample data
$name = 'Santa Claus';

$sql = 'INSERT INTO publishers(name) VALUES (:name)';
$statement = $pdo->prepare($sql);
$statement->execute([
    ':name' => $name,
        
]);

$publisher_id = $pdo->lastInsertId();

echo 'The publisher id '. $publisher_id .' was inserted';


//Insert using bind Params

// $pdo = require 'connect.php';
// $sql = 'insert into authors(first_name, last_name)
//   values(:first_name,:last_name)';
// $statement = $pdo->prepare($sql);
// $author = [
// 	'first_name' => 'Jane',
// 	'last_name' => 'Doe',
// ];
// $statement->bindParam(':first_name', $author['first_name']);
// $statement->bindParam(':last_name', $author['last_name']);
// // // change the author variable
// // $author['first_name'] = 'Tom';
// // $author['last_name'] = 'Abate';
// // execute the query with value Tom Abate
// $statement->execute();
