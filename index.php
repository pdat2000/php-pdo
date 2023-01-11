<?php
const _HOST = 'localhost';
const _DB = 'hieunu_123';
const USER = 'root';
const PASSWORD = '';

try {
    if (class_exists('PDO')) {
        $dsn = 'mysql:host=' . _HOST . ';dbname=' . _DB;
        $conn = new PDO($dsn, USER, PASSWORD);
        return $conn;
    }
} catch (Exception $e) {
    echo $e->getMessage();
}