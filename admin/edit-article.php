<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <style> textarea { resize: none; height: 100px } </style>
</head>
<body>
    <? include_once "./blocks/header.php" ?>
    <? require "./code/connection.php" ?>
    <main class="mt-5 container">
        <div class="text-center">
            <span id="errorSpan" class="alert alert-danger" style="display:none;bottom:15px"></span>
            <h1 class="text-center mt-3">Редагувати</h1>
        </div>
        <?php
            $article_id = $_GET['id'];
            $query = $connection -> query("SELECT * FROM `articles` WHERE `id` = '$article_id' ");
            if (mysqli_num_rows($query) == 0):
        ?><script>location.href = '/'</script><?php
            endif;
            while ($res = mysqli_fetch_assoc($query)):
        ?>
            <form class="mt-4">
                <input type="text" name="id" id="id" placeholder="Ваш Id" class="form-control mt-2" value="<?=$res['id'];?>">
                <input type="text" name="title" id="title" placeholder="Введіть заголовок" class="form-control mt-2" value="<?=$res['title'];?>">
                <input type="text" name="intro" id="intro" placeholder="Введіть інтро" class="form-control mt-2" value="<?=$res['intro'];?>">
                <textarea name="text" id="text" class="form-control mt-2" placeholder="Введіть текст"><?=$res['text'];?></textarea>
                <button class="btn btn-outline-primary mt-3" type="button" id="editBtn">Зберегти</button>
            </form>
        <?php
            endwhile;
        ?>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $("#editBtn").click(function () {
            const id = $('#id').val()
            const title = $('#title').val()
            const intro = $('#intro').val()
            const text = $('#text').val()

            $.ajax({
                url: './code/edit.php',
                type: 'POST',
                cache: false,
                data: {id, title, intro, text},
                dataType: 'html',
                success: function (data) {
                    if (data == 'ready') {
                        $('#errorSpan').hide()
                        location.href = '/admin'
                    } else {
                        $('#errorSpan').show()
                        $('#errorSpan').text(data)
                    }
                }
            })
        })
    </script>
</body>
</html>