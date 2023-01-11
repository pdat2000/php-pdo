<?php
require_once('./index.php');

$sql = "SELECT * FROM hocsinh";


try {
    $statement = $conn->prepare($sql);
    $statement->execute();

    $data = $statement->fetchAll(PDO::FETCH_NUM);

    echo json_encode($data);
} catch (Exception $e) {
    echo $e->getMessage();
}