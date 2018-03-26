<?php
$sHashTags = 'Aerial';

$sSearch = isset($_Get['search']) ? $_Get['search'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="style.css">
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