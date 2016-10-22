<?php

/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>
    <div id="home-news-content" style="display: none; font-weight:normal;">
    <div style="background-color:#FFFFFF; padding: 100px; color: white;">
        <div id="rss-container" style="color: black; font-weight: normal; font-size: 15px;">
            Rss Feed
        </div>
    </div>                          
</div>
<script src='js/main.js'></script>
<?php
   use app\assets\AppAsset;
   AppAsset::register($this);
?>