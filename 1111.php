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


}

var_dump($_GET);
var_dump($_POST);

?>

<form action="?page=upload" enctype="multipart/form-data" method="post">

    <input type="submit" name="submit" value ="Click me!">

</form>



<<<<<<< HEAD
//'nikName' => ['@migli'],
/*'lastTime' => ['два часа назад'],
'Photo' => ['../images/Post1.jpg'],
'Like' => ['../images/Likes.jpg'],
'Reposte' => ['/images/Reposte.jpg'],
'hashtags' =>
[
'#neon',
'#textures',
'#aerial',
'#objects',
'#grid',
'#urban',
'#typo',
'#music',
'#colors',
'#foods',
],*/
],


//'nikName' => ['@carovandoe'],
/*'lastTime' => ['два часа назад'],
'Photo' => ['../images/Post2.jpg'],
'Like' => ['../images/Likes.jpg'],
'Reposte' => ['/images/Reposte.jpg'],
'hashtags' =>
[
'#neon',
'#textures',
'#aerial',
'#objects',
'#grid',
'#urban',
'#typo',
'#music',
'#colors',
'#foods',
],*/



</div>
<div class="posts-list">
    <div class="post">
        <div class="post-autor">
            <img src="../images/PhotoAutor_1.jpg">
        </div>
        <div class="nikName">
            <b>@migli</b><br>
            <span class="lastTime">два часа назад</span>
        </div>
        <img src="../images/Post1.jpg" height="290" width="280">
        <br><img src="../images/Likes.jpg" height="20" width="40" style="margin-top: 5px">
        <img src="../images/Reposte.jpg" height="20" width="25" style="margin-left: 212px"><br>
        <div class="hashtags">
            <span class ="tags">#neon</span>
            <span class ="tags">#textures</span>
            <span class ="tags">#aerial</span>
            <span class ="tags">#objects</span>
            <span class ="tags">#grid</span><br>
            <span class ="tags">#urban</span>
            <span class ="tags">#typo</span>
            <span class ="tags">#music</span>
            <span class ="tags">#colors</span>
            <span class ="tags">#foods</span>
        </div>
    </div>
    <div class="post">
        <div class="post-autor">
            <img src="../images/PhotoAutor_2.jpg">
        </div>
        <div class="nikName">
            <b>@carovandoe</b><br>
            <span class="lastTime">три часа назад</span>
        </div>
        <img src="../images/Post2.jpg" height="290" width="280">
        <br><img src="../images/Likes.jpg" height="20" width="40" style="margin-top: 5px">
        <img src="../images/Reposte.jpg" height="20" width="25" style="margin-left: 212px"><br>
        <div class="hashtags">
            <span class ="tags">#neon</span>
            <span class ="tags">#textures</span>
            <span class ="tags">#aerial</span>
            <span class ="tags">#objects</span>
            <span class ="tags">#grid</span><br>
            <span class ="tags">#urban</span>
            <span class ="tags">#typo</span>
            <span class ="tags">#music</span>
            <span class ="tags">#colors</span>
            <span class ="tags">#foods</span>
        </div>
    </div>
    <div class="post">
        <div class="post-autor">
            <img src="../images/PhotoAutor_3.jpg">
        </div>
        <div class="nikName">
            <b>@fontkiewicz</b><br>
            <span class="lastTime">два дня назад</span>
        </div>
        <img src="../images/Post3.jpg" height="290" width="280">
        <br><img src="../images/Likes.jpg" height="20" width="40" style="margin-top: 5px">
        <img src="../images/Reposte.jpg" height="20" width="25" style="margin-left: 212px"><br>
        <div class="hashtags">
            <span class ="tags">#neon</span>
            <span class ="tags">#textures</span>
            <span class ="tags">#aerial</span>
            <span class ="tags">#objects</span>
            <span class ="tags">#grid</span><br>
            <span class ="tags">#urban</span>
            <span class ="tags">#typo</span>
            <span class ="tags">#music</span>
            <span class ="tags">#colors</span>
            <span class ="tags">#foods</span>
        </div>
    </div>
    <div class="post">
        <div class="post-autor">
            <img src="../images/PhotoAutor_4.jpg">
        </div>
        <div class="nikName">
            <b>@ben-staley</b><br>
            <span class="lastTime">21 час назад</span>
        </div>
        <img src="../images/Post4.jpg" height="290" width="280">
        <br><img src="../images/Likes.jpg" height="20" width="40" style="margin-top: 5px">
        <img src="../images/Reposte.jpg" height="20" width="25" style="margin-left: 212px"><br>
        <div class="hashtags">
            <span class ="tags">#neon</span>
            <span class ="tags">#textures</span>
            <span class ="tags">#aerial</span>
            <span class ="tags">#objects</span>
            <span class ="tags">#grid</span><br>
            <span class ="tags">#urban</span>
            <span class ="tags">#typo</span>
            <span class ="tags">#music</span>
            <span class ="tags">#colors</span>
            <span class ="tags">#foods</span>
        </div>
    </div>
    <div class="post">
        <div class="post-autor">
            <img src="../images/PhotoAutor_5.jpg">
        </div>
        <div class="nikName">
            <b>@artsalve</b><br>
            <span class="lastTime">15 секунд назад</span>
        </div>
        <img src="../images/Post5.jpg" height="290" width="280">
        <br><img src="../images/Likes.jpg" height="20" width="40" style="margin-top: 5px">
        <img src="../images/Reposte.jpg" height="20" width="25" style="margin-left: 212px"><br>
        <div class="hashtags">
            <span class ="tags">#neon</span>
            <span class ="tags">#textures</span>
            <span class ="tags">#aerial</span>
            <span class ="tags">#objects</span>
            <span class ="tags">#grid</span><br>
            <span class ="tags">#urban</span>
            <span class ="tags">#typo</span>
            <span class ="tags">#music</span>
            <span class ="tags">#colors</span>
            <span class ="tags">#foods</span>
        </div>
    </div>
    <div class="post">
        <div class="post-autor">
            <img src="../images/PhotoAutor_6.jpg">
        </div>
        <div class="nikName">
            <b>@jimmy-p</b><br>
            <span class="lastTime">10 минут назад</span>
        </div>
        <img src="../images/Post6.jpg" height="290" width="280">
        <br><img src="../images/Likes.jpg" height="20" width="40" style="margin-top: 5px">
        <img src="../images/Reposte.jpg" height="20" width="25" style="margin-left: 212px"><br>
        <div class="hashtags">
            <span class ="tags">#neon</span>
            <span class ="tags">#textures</span>
            <span class ="tags">#aerial</span>
            <span class ="tags">#objects</span>
            <span class ="tags">#grid</span><br>
            <span class ="tags">#urban</span>
            <span class ="tags">#typo</span>
            <span class ="tags">#music</span>
            <span class ="tags">#colors</span>
            <span class ="tags">#foods</span>
        </div>
    </div>
    <div class="post">
        <div class="post-autor">
            <img src="../images/PhotoAutor_7.jpg">
        </div>
        <div class="nikName">
            <b>@richardgurtler</b><br>
            <span class="lastTime">18 часов назад</span>
        </div>
        <img src="../images/Post7.jpg" height="290" width="280">
        <br><img src="../images/Likes.jpg" height="20" width="40" style="margin-top: 5px">
        <img src="../images/Reposte.jpg" height="20" width="25" style="margin-left: 212px"><br>
        <div class="hashtags">
            <span class ="tags">#neon</span>
            <span class ="tags">#textures</span>
            <span class ="tags">#aerial</span>
            <span class ="tags">#objects</span>
            <span class ="tags">#grid</span><br>
            <span class ="tags">#urban</span>
            <span class ="tags">#typo</span>
            <span class ="tags">#music</span>
            <span class ="tags">#colors</span>
            <span class ="tags">#foods</span>
        </div>
    </div>
    <div class="post">
        <div class="post-autor">
            <img src="../images/PhotoAutor_8.jpg">
        </div>
        <div class="nikName">
            <b>@inconvergent</b><br>
            <span class="lastTime">вчера</span>
        </div>
        <img src="../images/Post8.jpg" height="290" width="280">
        <br><img src="../images/Likes.jpg" height="20" width="40" style="margin-top: 5px">
        <img src="../images/Reposte.jpg" height="20" width="25" style="margin-left: 212px"><br>
        <div class="hashtags">
            <span class ="tags">#neon</span>
            <span class ="tags">#textures</span>
            <span class ="tags">#aerial</span>
            <span class ="tags">#objects</span>
            <span class ="tags">#grid</span><br>
            <span class ="tags">#urban</span>
            <span class ="tags">#typo</span>
            <span class ="tags">#music</span>
            <span class ="tags">#colors</span>
            <span class ="tags">#foods</span>
        </div>
    </div>
</div>
=======







// обращение к базе данных, вставка данных

$stmt=$dbh->prepare('
INSERT INTO post
SET
autor_id = ?,
photo = ?,
created_add = ?
');

$stmt->execute([
$_GET['autor_id'],
'image.jpg',
date('Y-m-d H:i:s'),
]);
//
>>>>>>> 136b6fece4d6dd4e0d9bfc2a53bc16c1324c2cc5
