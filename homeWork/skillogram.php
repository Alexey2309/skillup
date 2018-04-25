<?php
require('header.php');
require ('data.php');
require ('function.php');
?>
<div class="hashtag_wrapper">
    <?php foreach ($aHashTags as $hashTag) {
        echo "<a href='#'>$hashTag</a>";
    }
    ?>
</div>
    <?php foreach ($aPosts as $nPost => $ValPost) { ?>
        <div class="posts-list">
            <div class="post-autor">
                <img src="<?php echo $ValPost['post-autor'] ?>">
            </div>
            <div class="nikName">
                <b><?php echo $ValPost['nikName']?> </b><br>
                <span class="lastTime"><?php echo $ValPost['lastTime']?></span>
            </div>
            <img src="<?php echo $ValPost['Photo']?>" height="290" width="280">
            <br><img src="<?php echo $ValPost['Like'] ?>" height="20" width="40" style="margin-top: 5px">
            <img src="<?php echo $ValPost['Reposte'] ?>" height="20" width="25" style="margin-left: 210px"><br>
            <div class="hashtags">
                <?php outputHashtags($ValPost['hashtags'])?>
            </div>
        </div>
    <?php } ?>
    <div class="clear"></div>
<?php
require('futear.php');
?>