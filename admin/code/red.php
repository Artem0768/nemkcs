<!DOCTYPE html>
<html>
<head>
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

</head>

<body>
 
 
<div class="header">
 <h1>ПанельАдминистратора</h1>
 <ul class="nav nav-tabs" role="tablist">
  <li><a href="../index.php">Перейти на сайт</a></li>
  <li><a href="../admin/add.php">Добавить статью</a></li>
  <li><a href="../admin/edit.php">Редактировать статью</a></li>
</ul>
 </div>
 
<?
     
   require "connection.php";
 
    if(isset($_POST['go_add']))
    {
        if (isset($_POST['title']))        {$title = $_POST['title']; if ($title == '') {unset($title);}}
        if (isset($_POST['author']))        {$author = $_POST['author']; if ($author == '') {unset($author);}}
        if (isset($_POST['citata']))        {$citata = $_POST['citata']; if ($citata == '') {unset($citata);}}
        if (isset($_POST['date']))        {$date = $_POST['date']; if ($date == '') {unset($date);}} 
        if (isset($_POST['text']))        {$text = $_POST['text']; if ($text == '') {unset($text);}}
        if (isset($_POST['content'])) {$content = $_POST['content']; if ($content == '') {unset($content);}}
        if (isset($_POST['id']))      {$id = $_POST['id'];}
        
 
        if ($_POST['title']!="")
 
        {
 
            if ($mysqli->query ("UPDATE article SET
            title='".$title."',
            citata='".$citata."',
            date='".$date."', 
            text='".$text."',
            content='".$content."',
            author='".$author."'"))
            {
                echo "<div class='clean-ok'>Успешно редактирована!</p></div>";
            }
            else
            {
                echo "<div class='clean-gray'>Неудалось обработать базой<div>";
                        $dar=mysqli_error();
                echo $der;
            }
 
 
        }
        else
        {
            echo "<div class='clean-error'><p>Незаполнена.</p></div>";
        }
 
 
 
    } ?>
 
    <div class="container">
    <div class="row">
  <div class="col-lg-6">
    <div class="input-group">
      <span class="input-group-btn">
              
                <form method='post' enctype='multipart/form-data'> 
                <h2>Редактировать новость</h2> 
               <span class="input-group-addon">Название статьи:</span></span><input type='text' name='title' class="form-control" 
               placeholder="Введите название" value="<? echo $news[title] ?>"> 
                <span class="input-group-addon">Дата:</span></span><input type='text' name='date' class="form-control" placeholder="Формат даты: гггг-мм-дд" value="<? echo $news[date] ?>">
               <span class="input-group-addon">Автор статьи:/span></span><input type='text' name='author' class="form-control" placeholder="Введите имя автора" value="<? echo $news[author] ?>">
                <span class="input-group-addon">Цитата для стаьи:</span><input type='text' name='citata' class="form-control" placeholder="Введите цитату"  value="<? echo $news[citata] ?>">
                
                <span class="input-group-addon">Малая информация:</span>
         <textarea name='text' id='text' class="form-control"><? echo $news[text] ?></textarea>
            
                <span class="input-group-addon">Проная информация:</span>
         <textarea name='content' id='content' class="form-control"><? echo $news[content] ?></textarea>";
                <span class="input-group-addon"> 
                <input type="submit" name="go_add"  id="submit" value="Редактировать"> </span>
                </form>
</span>
</div>
</div>
</div>
</div>
 
 
<br>
<? require_once("../blocks/footer.php")  ?>
</body>
</html>