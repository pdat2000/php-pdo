<?php
require_once('./index.php');


$sql = "INSERT INTO hocsinh(fullname, age) VALUE (:fullname, :age)";

try {
    $statement = $conn->prepare($sql);
    $fullname = 'pham hien';
    $age = 28;

    // $statement->bindParam(':fullname', $fullname);
    // $statement->bindParam(':age', $age);

    $data = [
        'fullname' => $fullname,
        'age' => $age,
    ];

    $statement->execute($data);
} catch (Exception $e) {
    echo $e->getMessage();
}