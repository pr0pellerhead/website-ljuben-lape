<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php echo $page_title; ?></title>
	<?php foreach( $css_files as $css ): ?>
		<link rel="stylesheet" href="assets/styles/<?php echo $css; ?>">
	<?php endforeach; 

		header('Content-Type: text/html; charset=utf-8');
	?>

</head>
<body>

	<div id="wrap">
		<div class="top-header">
			<div class="wraper clear-fix">
				<div class="mail">
					<i class="fa fa-envelope" aria-hidden="true"></i>
					<span>ljubenlape@info.edu.mk</span>
				</div><!-- mail -->
				<div class="phone">
					<i class="fa fa-mobile" aria-hidden="true"></i>
					<span>+38971123456</span>
				</div><!-- phone -->
			</div><!-- wraper -->
		</div><!-- top-header -->

		<div class="header">
			<div class="wraper clear-fix">
				<div class="logo">
					<a href="../www/index.php"><img src="assets/images/logo-goelmo.png"></a>
				</div><!-- logo -->

				<div class="himna">
					<form class="clear-fix">
						<input type="text" name="" placeholder="барај...">
						<input type="submit" name="" value="">
					</form>

					<audio controls>
					  <source src="assets/audio/himna.ogg" type="audio/ogg">
					  Your browser does not support the audio tag.
					</audio>
				</div><!-- himna -->

				<div class="aerodrom-logo">
					<a href="#"><img src="assets/images/logo-aerodrom.png"></a>
				</div>
			</div><!-- wraper -->
		</div><!-- header -->

		<div class="wraper">
			<div class="nav">
				<a href="./">почетна</a>
				<a href="za-ucilisteto.php">за училиштетo</a>
				<a href="nastava.php">настава</a>
				<a href="proekti_natprevari.php">проекти и натпревари</a>
				<a href="za-roditelite.php">за родителите</a>
				<a href="kontakt.php">контакт</a>
			</div>