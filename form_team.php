<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <style> 
    textarea { resize: none; height: 100px } 
    body{
        background: #010101;
    }
    .text-center{
        color: white;
    }
</style>
</head>
<body>
    <main class="mt-5 container">
     <div class="text-center">
            <span id="errorSpan" class="alert alert-danger" style="display:none;bottom:15px"></span>
            <h1 class="text-center mt-3">Створити команду</h1>
        </div>
    <form class="mt-4">
            <input type="text" name="name" id="name" placeholder="Ім`я команди " class="form-control mt-2">
            <input type="text" name="info" id="info" placeholder="Інформація про команду" class="form-control mt-2">
            
            <button class="btn btn-outline-primary mt-3" type="button" id="addBtn">Добавить</button>
        </form>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $("#addBtn").click(function () {
            const name = $('#name').val()
            const info = $('#info').val()
            

            $.ajax({
                url: './code/form_team.php',
                type: 'POST',
                cache: false,
                data: {name,  info},
                dataType: 'html',
                success: function (data) {
                    if (data == 'ready') {
                        $('#errorSpan').hide()
                        location.href = '/comand.php'
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