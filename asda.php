<?php

$pdo = new PDO('mysql:host=localhost; dbname=users; charset=utf8;', 'root');
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];


$sql = 'SELECT * FROM people';

$statement = $pdo->query($sql);

$people = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($people as $person) {
    echo $person['name'] . ' - ' . $person['text'] . '<br>';
}
