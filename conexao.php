<?php
$user = 'root';
$passwd = '';


try {
    $db = 'mysql:host=localhost;dbname=db_essentials';
    $options = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8MB4'];

    $connect = new PDO($db, $user, $passwd, $options);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}