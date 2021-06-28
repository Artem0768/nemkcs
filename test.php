<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php include_once("admin/code/connection.php")
    ?>
	<section>
		<?php  $query = $connection -> query("SELECT * FROM `articles` ORDER BY `pubdate` DESC");
                if (mysqli_num_rows($query) == 0):
            ?>
                <span class="text-muted text-center">На данный момент нет постов.</span>
            <?php
                endif;
                while ($res = mysqli_fetch_assoc($query)):
            ?>
                <article class="alert alert-primary">
                      <div><?=$res['image'];?>
                        
                    </div>
                    <h3><?=$res['title'];?></h3>
                    <p><?=$res['intro'];?></p>
                    <em>Дата публикации: <?=$res['pubdate'];?></em><br>
                    <em>Автор: <a href="/author.php?login=<?=$res['author'];?>"><?=$res['author'];?></a></em><br>
                    <a href="/article.php?id=<?=$res['id'];?>" class="btn btn-outline-primary mt-3">Перейти</a>
                    <a href="" class="btn btn-outline-primary mt-3">Перейти</a>
                </article>
            <?php
                endwhile;
            ?>
	</section>
</body>
</html>