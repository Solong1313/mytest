<?php
// соединение с базой
$pdo = new PDO('mysql:host=localhost; dbname=users; charset=utf8;', 'root');
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

//подготовка и выполнение запроса
$sql = 'SELECT * FROM people';
$statement = $pdo->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($people as $person) {
    echo $person['name'] . ' - ' . $person['text'] . '<br>';
}