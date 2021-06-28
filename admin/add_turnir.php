<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<? include_once "./blocks/header.php" ?>
<body>

	 <main class="mt-5 container">
        <div class="text-center">
            <span id="errorSpan" class="alert alert-danger" style="display:none;bottom:15px"></span>
            <h1 class="text-center mt-3">Додати турнір</h1>
        </div>
        <form class="mt-4">
            <input type="text" name="name" id="name" placeholder="Назва турніру" class="form-control mt-2">
            <input type="date" name="date" id="date" placeholder="Дата турніру" class="form-control mt-2">
            <input type="text" name="prize" id="prize" placeholder="Приз турніру" class="form-control mt-2">

            <button class="btn btn-outline-primary mt-3" type="button" id="addBtn">Додати</button>
        </form>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $("#addBtn").click(function () {
            const name = $('#name').val()
            const num_of_team = $('#num_of_team').val()
            const date = $('#date').val()
            const prize = $('#prize').val()

            $.ajax({
                url: './code/add_turnir.php',
                type: 'POST',
                cache: false,
                data: {name,  date, prize},
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