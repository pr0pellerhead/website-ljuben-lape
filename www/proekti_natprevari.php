<?php
include_once '../sys/controllers/natprevari.php';
include_once '../sys/controllers/za_roditelite.php';
include_once '../sys/controllers/proekti.php';
include_once '../sys/controllers/najnovi_informacii.php';
include_once '../sys/controllers/functions.php';

    $css_files = [ 'reset.css' , 'main.css','proekti_natprevari.css' ];
    $page_title = "Проекти и натпревари";
    include_once "../sys/includes/header.php";

?>

			<div class="za-ucilisteto page-roditeli clear-fix">
				<div class="slide-left"></div><!-- slide-left -->

				<div class="slide-right">
					<h1>Проекти и натпревари</h1>
				</div><!-- slide-right -->

			</div><!-- za-ucilisteto -->

			<div class="sections clear-fix">
				<div class="sorabotka-page-roditeli clear-fix">
					<h1>Проекти</h1>
					<?php foreach ($all as $row) { ?>
					<div class="proekti-post">
						<h2><?=$row['naslov']?></h2>
						<img src="assets/images/kids.jpg" alt="" width="200px">
						<span>
                            <?=limit_text(strip_tags($row['sodrzina']),20);?>
                        </span>

					</div>
					<?php } ?>


			</div><!-- sections -->

			<div class="sections clear-fix">
				<div class="sorabotka-page-roditeli clear-fix">
					<h1>Натпревари</h1>
                    <?php foreach ($all2 as $row) { ?>
                        <div class="proekti-post">
                            <h2><?=$row['naslov']?></h2>
                            <img src="assets/images/kids.jpg" alt="" width="200px">
						<span>
                            <?=limit_text(strip_tags($row['sodrzina']),20);?>
                        </span>

                        </div>
                    <?php } ?>

				</div><!-- sections -->
		</div><!-- wraper -->

		
<?php	include_once "../sys/includes/footer.php";?>