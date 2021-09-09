<?php

$task = $_POST['task'];
if ($task == '') {
    echo 'Введите задание';
    exit();
}

require_once "configDB.php";
$sql = 'INSERT INTO tasks(task) VALUES(:task)';
$query = $pdo->prepare($sql);
$query->execute(['task' => $task]);

header('Location:/');