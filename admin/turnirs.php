<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
    <? include_once "./blocks/header.php" ?>
    <? include_once "./code/connection.php" ?>
    <main class="container mt-5">
        <h1 class="text-center">Усі турніри</h1>
        <section class="mt-4">
            <?php
                $query = $connection -> query("SELECT * FROM `turnirs` ");
                if (mysqli_num_rows($query) == 0):
            ?>
                <span class="text-muted text-center">На данний момент немає турнірів.</span>
            <?php
                endif;
                while ($res = mysqli_fetch_assoc($query)):
            ?>
                <article class="alert alert-primary">
                    
                    <h3><?=$res['name'];?></h3>
                     <p>Приз: <?=$res['prize'];?> $</p>
                    <p>Дата початку: <?=$res['date_start'];?></p>
                    <? if($res['status'] == 1): ?>
                        <p>Статус: Відкрита реєстрація</p>
                    <? endif; ?>
                    <? if($res['status'] == 0): ?>
                        <p>Статус: Реєстрація завершена</p>
                    <? endif; ?>
                    

                </article>
            <?php
                endwhile;
            ?>
        </section>
    </main>
</body>
</html>