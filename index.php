
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Список Дел</title>
    <link rel="shorcut icon" href="/img/icon/001-to-do-list.png" type="image/png">
    <link rel="stylesheet" href="/css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" type="text/css">

</head>
<body>
<div class="container">
    <h1 class="title">Список дел</h1>
    <form action="add.php" method="post">
        <input type="text" name="task" id="task" placeholder="Нужно сделать...">
        <a href="list.php"><button type="sumbit" name="sendTask" class="btn btn-succes">Отправить</button></a>
    </form>

    <?
    require_once 'configDB.php';

    echo '<ul>';
    $query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id` DESC');
    while($row = $query->fetch(PDO::FETCH_OBJ)){
        echo '<li class="list"><b>'.$row->task.'</b><a href="/delete.php?id='.$row->id.'"><button class="btn btn-simple">Удалить</button></a></li>';
    }
    echo '</ul>';
    ?>
</div>

</body>
</html>