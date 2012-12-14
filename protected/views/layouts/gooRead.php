<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title><?php echo Yii::app()->name; ?></title>
</head>
<body>
	<div class="header">
		<h1>
			<img src="<?php echo Yii::app()->request->baseurl; ?>/images/kid-reading-book.jpg" style="width:60px;">&nbsp;
			GooRead
		</h1>
	</div>
	<div class="content">
		<?php echo $content; ?>
	</div>
	<div class="footer"></div>
</body>
</html>