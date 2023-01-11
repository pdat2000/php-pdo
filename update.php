<?php
require_once('./index.php');

$sql = "UPDATE hocsinh SET fullname= :fullname, age= :age WHERE id = :id";


try {
    $statement = $conn->prepare($sql);

    $fullname = 'hoang';
    $age = 1000;
    $id = 0;

    $statement->bindParam(':fullname', $fullname);
    $statement->bindParam(':age', $age);
    $statement->bindParam(':id', $id);

    $statement->execute();
} catch (Exception $e) {
    echo $e->getMessage();
}