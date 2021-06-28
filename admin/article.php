<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <style> textarea { resize: none; max-width: 40%; height: 130px } </style>
</head>
<body>
    <? include_once "./blocks/header.php" ?>
    <? include_once "./code/connection.php" ?>
    <main class="container mt-5">
        <?php
            $id = $_GET['id'];
            $query = $connection -> query("SELECT * FROM `articles` WHERE `id` = '$id'");
            $connection -> query("UPDATE `articles` SET `views` = `views` + 1 WHERE `id` = '$id'");
            if (mysqli_num_rows($query) == 0) echo "<span class='text-muted'>Не вдалося знайти пост.</span>";
            while ($res = mysqli_fetch_assoc($query)):
        ?>
            <h1 class="text-center">Сторінка поста</h1>
            <article class="alert alert-primary mt-4">
                <img src="<?=$res['image'];?>">
                <h3><?=$res['title'];?></h3>
                <p><?=$res['text'];?></p>
            </article>
           
            <? if (isset($_COOKIE['log'])): ?>
                <div class="btn-group">
                    <a href="./edit-article.php?id=<?=$res['id'];?>" class="btn btn-outline-success">Редагувати</a>
                    <a href="./code/remove-article.php?id=<?=$res['id'];?>" class="btn btn-outline-danger">Видалити</a>
                </div>
           <? endif; ?>
        
            
        <?php
           
            endwhile;
        ?>
    </main>
</body>
</html>