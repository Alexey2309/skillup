<?php

/* Подключение к базе данных MySQL с помощью вызова драйвера */
$dsn = 'mysql:dbname=skillogram_711;host=127.0.0.1';
$user = 'root';
$password = 'root';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Подключение не удалось: ' . $e->getMessage();
}

$stmt=$dbh->query('SELECT * FROM post order by id DESC');
while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
}






    exit;
