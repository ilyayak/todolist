<?php
require_once "configDB.php";
$id = $_GET['id'];


$sql = 'DELETE FROM `tasks` WHERE `id` = ?';
$query = $pdo->prepare($sql);
$query->execute([$id]);
//По такой схеме происходит любое обращение к базе данных
//команда для субд
//


header('Location:/');