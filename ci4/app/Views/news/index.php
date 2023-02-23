<!DOCTYPE html>
<html>
<head>
	<title>[ SPACE JAM ]</title>
	<link rel="shortcut icon" href="/images/wootteohome.ico" type="image/x-icon">
	<?php echo link_tag('css/index.css'); 
	echo script_tag('jscript/index.js'); ?>
</head>
<body onload="typeWriter()">

<div id="navbar" id="top">
        <div id="pageselector">
            <center>
                <ul>
                    <li id="buttons"><a href="index" id="buttons">HOME</a></li>
                    <li id="buttons"><a href="Leo" id="buttons">SUN</a></li>
                    <li id="buttons"><a href="Gallery" id="logo"><img src="images/wootteogallery.png" id="logo" padding="none"></a></li>
                    <li id="buttons"><a href="Sagi" id="buttons">MOON</a></li>
                    <li id="buttons"><a href="Libra" id="buttons">RISING</a></li>
                </ul>
            </center>
            <hr id="header">
        </div>
    </div>

<h2><?= esc($title) ?></h2>

<?php if (! empty($news) && is_array($news)): ?>

    <?php foreach ($news as $news_item): ?>

        <h3><?= esc($news_item['title']) ?></h3>

        <div class="main">
            <?= esc($news_item['body']) ?>
        </div>
        <p><a href="/~jtcuyugan/lab3/ci4/public/news/<?= esc($news_item['slug'], 'url') ?>">View article</a></p>

    <?php endforeach ?>

<?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>