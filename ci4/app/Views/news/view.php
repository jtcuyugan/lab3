<head>
<?php echo link_tag('css/index.css'); 
	echo script_tag('jscript/index.js'); ?>
</head>
<h2><?= esc($news['title']) ?></h2>
<p><?= esc($news['body']) ?></p>