<?php

$pdo = require('connect.php');


// using query 
$sql = 'SELECT publisher_id, name from publishers';


$statement = $pdo->query($sql);

$publishers = $statement->fetchAll(PDO::FETCH_ASSOC); // for array


if($publishers){
    foreach($publishers as $publisher)  {
        echo $publisher['name'].'<br>';
    }
}


//using prepared statement
// $publisher_id = 3;
// $sql = 'SELECT publisher_id, name FROM publishers where publisher_id = :publisher_id';

// $statement = $pdo->prepare($sql);
// $statement->bindParam(':publisher_id', $publisher_id, PDO::PARAM_INT);
// $statement->execute();
// $publisher = $statement->fetch(PDO::FETCH_ASSOC);

// // var_dump($publisher);
// if($publisher){
//     echo $publisher['publisher_id'] . ' - '. $publisher['name'];
// }else{
//     echo 'No data available';
// }