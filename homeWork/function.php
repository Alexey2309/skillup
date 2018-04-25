<?php
function outputHashtags($postHashtags){
    $aTags = explode(',' ,$postHashtags);
    foreach ($aTags as $Tag) {
        echo "<span class='tags'>$Tag</span>";
    }
}