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
    <? if (isset($_COOKIE['log'])): ?><script>location.href = '/'</script><? endif; ?>
    <main class="mt-5 container">
        <div class="text-center">
            <span id="errorSpan" class="alert alert-danger mb-3" style="display:none;bottom:20px"></span>
            <h1 class="text-center">Авторизація</h1>
        </div>
        <form class="mt-4">
            <input type="text" name="login" id="login" placeholder="Введіть логін" class="form-control mt-2">
            <input type="password" name="password" id="password" placeholder="Введіть пароль" class="form-control mt-2">
            <button class="btn btn-outline-primary mt-3" type="button" id="authBtn">Увійти</button>
        </form>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $("#authBtn").click(function () {
            const login = $('#login').val()
            const password = $('#password').val()

            $.ajax({
                url: './code/auth.php',
                type: 'POST',
                cache: false,
                data: {login, password},
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