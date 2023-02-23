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

<h2><?= esc($news['title']) ?></h2>
<p><?= esc($news['body']) ?></p>