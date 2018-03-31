<?php
$sHashTags = 'Aerial';
$sSearch = isset($_Get['search']) ? $_Get['search'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="homeWork/style.css">
</head>

<div class = "logo">
    Skillogram
</div>

<form method="get">
    <input type ="text" name="search" value="<?php echo $sSearch ;?>">
    <input type="submit">
</form>
<a href="#test">Link on test</a>
<br><br><br>
<div class="posts-list">
    <div class="post">
        <img src="images/post.png">
    </div>
    <div class="post">
        <img src="images/post.png">
    </div>
    <div class="post">
        <img src="images/post.png">
    </div>
    <div class="post">
        <img src="images/post.png">
    </div>
    <div class="post">
        <img src="images/post.png">
    </div>
    <div class="post">
        <img src="images/post.png">
    </div>
</div>


<div id='test'>test </div>






<!--<img src="/images/logo.png">-->

<div class="hashtag_wrapper">
    <a href="#">Neon</a>
    <a href="#">Aerial</a>
    <a href="#">Grid</a>
</div>


<hr/>  <!-- Horizontal Row (линия) -->
<br />   BReak (перенос строки)
<img src="https://c1.staticflickвфвфr.com/6/5211/5513402618_3ce232e01a_n.jpуg"
     alt="Если не удалось загрузить" /> Картинка
<br/><br/><br/><br/><br/><br/>
<input type="submit" /><br/>
Поле ввода / Кнопка

<span class="">
        <b>
Bold
            <i>Italic</i>
            <u>Underline</u>
        </b>
    </span>

<div>
    <a href="http://yandex.ru"
       target="_blank">Ссылка на <span>Яндекс</span></a>
</div>


















<div class="search">
    <img src="../images/search.png">
    <div class="entry-field">
    </div>
</div >

<div class = "sort">
    <b>По рейтингу</b>
    <span class="styles1" ><ins><b>Случайно</b></ins></span>
</div>



<div class="check-in">
    <b>Регистрация</b>
</div>
<div class="input">
    <b>Вход</b>
</div>











BODY {
margin-top: 10px;
margin-left: 55px;
}