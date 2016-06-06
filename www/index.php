<?php
	include_once '../sys/controllers/natprevari.php';
	include_once '../sys/controllers/proekti.php';
	include_once '../sys/controllers/functions.php';

	// var_dump( $res );
	$css_files = [ 'reset.css' , 'main.css' ];
	$page_title = "Ljuben Lape";
	include_once "../sys/includes/header.php";
?>
	<?php 
	// header('Content-Type: text/html; charset=utf-8');
	?>

			<div class="za-ucilisteto clear-fix">
				<div class="slide-left"></div><!-- slide-left -->

				<div class="slide-right">
						<div class="text clear-fix">
							<h1>За училиштето</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure.</p>
							<div class="icon1 icon"><span>историја на училиштеот</span></div><!-- icon1 -->
							<div class="icon2 icon"><span>мисија и визија</span></div><!-- icon1 -->
							<div class="icon3 icon"><span>наставен кадар</span></div><!-- icon1 -->
						</div><!-- text -->
						
					</div><!-- slide-right -->

			</div><!-- za-ucilisteto -->

			<div class="sections clear-fix">
				<div class="left-section">
					<div class="tabla clear-fix">
						<h3>најнови информации</h3>

						<div class="najnovi-informacii">
							<div class="grupa-informacii clear-fix">
								<img src="assets/images/school_building.png">
								<div class="info-text">
									<h2>Lorem ipsum dolor sit amet</h2>
									<span>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
									</span>
								</div><!-- info-text -->
							</div><!-- grupa-informacii -->
						</div><!-- najnovi-informacii -->

						<div class="najnovi-informacii">
							<div class="grupa-informacii clear-fix">
								<img src="assets/images/school_building.png">
								<div class="info-text">
									<h2>Lorem ipsum dolor sit amet</h2>
									<span>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
									</span>
								</div><!-- info-text -->
							</div><!-- grupa-informacii -->
						</div><!-- najnovi-informacii -->

						<div class="tabla-linkivi">
							<ul>
								<li><a href="">Lorem ipusm dolor sit amet</a></li>
								<li><a href="">Lorem ipusm dolor sit amet</a></li>
								<li><a href="">Lorem ipusm dolor sit amet</a></li>
								<li><a href="">Lorem ipusm dolor sit amet</a></li>
							</ul>
						</div><!-- tabla-linkivi -->

					</div><!-- tabla -->

					<div class="proekti-natprevari clear-fix">
						<div class="proekti">
							<h1>Проекти</h1>

							<?php foreach ($proekti as $row) { ?>

							<div class="content clear-fix">
								<h2><?=$row['naslov'];?></h2>
								<img src="../admin/uploads/<?=$row['slika_mala'];?>" width="200px" height="129px">
								<span>
									<?=limit_text(strip_tags($row['sodrzina']),30); ?>
								</span>
							</div>

							<?php } ?>
							

						</div><!-- proekti -->

						<div class="proekti natprevari">
							<h1>Натпревари</h1>
							

							<?php foreach ($res as $row) { ?>

							<div class="content clear-fix">
								<h2><?=$row['naslov'];?></h2>
								<img src="../admin/uploads/<?=$row['slika_mala'];?>" width="200px" height="129px">
								<span>
									<?=limit_text(strip_tags($row['sodrzina']),30); ?>
								</span>
							</div>

							<?php } ?>
							

							<!-- content -->
<!-- 							<div class="content clear-fix">
								<h2>Lorem ipsum dolor sit amet</h2>
								<img src="assets/images/post-slika1.png">
								<span>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco .
								</span>
							</div><!-- content -->
							<!-- <div class="content clear-fix">




								<h2>Lorem ipsum dolor sit amet</h2>
								<img src="assets/images/post-slika1.png">
								<span>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco .
								</span>
							</div><!-- content --> 
						</div><!-- proekti -->
					</div><!-- proekti-natprevari -->

					<div class="za-roditelite clear-fix">
						<div class="roditeli-content clear-fix">
							<h1>за родителите</h1>

							<div class="sorabotka-roditeli">
								<h2>Соработка со родителите</h2>
								<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate.</span>
								<a href="#">прочитај повеќе</a>
							</div><!-- sorabotka-roditeli -->
							<div class="sorabotka-roditeli sredbi">
								<h2>Родителски средби</h2>
								<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate.</span>
								<a href="#">прочитај повеќе</a>
							</div><!-- sorabotka-roditeli -->
						</div><!-- roditeli-content -->

						<div class="izvestai">
							<span>деловник за соработка</span>
							<span>полугодишни извештаи</span>
							<span>приемни денови и термини</span>
							<span>наставни планирања</span>
						</div><!-- izvestai -->		

					</div><!-- za-roditelite -->

				</div><!-- left-section -->

				<div class="right-section">
					<h1>настава</h1>
					<div class="smena clear-fix">
						<div class="smena-left">
							<span>I смена</span>
							<h2>07:30 - 13:30</h2>
						</div><!-- smena-left -->
						<div class="smena-right">
							<span>II смена</span>
							<h2>14:00 - 18:30</h2>
						</div><!-- smena-left -->
					</div><!-- smena -->

					<div class="raspored clear-fix">
						<span class="raspored-zovnenje">распоред на ѕвонење</span>
						<div class="raspored-left raspored-right celar-fix">
							<div class="cas">
								<span>I час: </span>
								<span>II час: </span>
								<span>одмор: </span>
								<span>III час: </span>
								<span>IV час: </span>
								<span>одмор: </span>
								<span>V час:</span>
								<span>VI час: </span>
								<span>VII час: </span>
							</div><!-- cas -->
							<div class="vreme">
								<b>07:30 - 08-15</b>
								<b>08:15 - 09-00</b>
								<b>09:00 - 09-30</b>
								<b>09:30 - 10-45</b>
								<b>10:45 - 11-30</b>
								<b>11:30 - 12-00</b>
								<b>12:00 - 12-45</b>
								<b>12:45 - 12-45</b>
								<b>13:30 - 14-15</b>
							</div><!-- vreme -->

						</div><!-- raspored-left -->
						<div class="raspored-left celar-fix">
							<div class="cas">
								<span>I час: </span>
								<span>II час: </span>
								<span>одмор: </span>
								<span>III час: </span>
								<span>IV час: </span>
								<span>одмор: </span>
								<span>V час:</span>
								<span>VI час: </span>
								<span>VII час: </span>
							</div><!-- cas -->
							<div class="vreme">
								<b>07:30 - 08-15</b>
								<b>08:15 - 09-00</b>
								<b>09:00 - 09-30</b>
								<b>09:30 - 10-45</b>
								<b>10:45 - 11-30</b>
								<b>11:30 - 12-00</b>
								<b>12:00 - 12-45</b>
								<b>12:45 - 12-45</b>
								<b>13:30 - 14-15</b>
							</div><!-- vreme -->

						</div><!-- raspored-left -->

					</div><!-- raspored -->

					<div class="ucilisni-sekcii clear-fix">
						<h1>училишни секции</h1>
						<div class="sekcija">
							<img src="assets/images/sekcija1.png">
							<span>Драмска секција</span>
						</div><!-- sekcija -->
						<div class="sekcija">
							<img src="assets/images/sekcija2.png">
							<span>Екологија</span>
						</div><!-- sekcija -->
						<div class="sekcija">
							<img src="assets/images/sekcija3.png">
							<span>Спорт</span>
						</div><!-- sekcija -->
						<div class="sekcija">
							<img src="assets/images/sekcija4.png">
							<span>Фотографија</span>
						</div><!-- sekcija -->
					</div><!-- ucilisni-sekcii -->

					<div class="ekskurzii clear-fix">
						<h1>Екскурзии</h1>
						<div class="ekskurzija clear-fix">
							<img src="assets/images/slika-ekskurzija.png" alt="">
							<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore </span>
						</div><!-- ekskurzija -->

						<div class="ekskurzija">
							<img src="assets/images/slika-ekskurzija.png" alt="">
							<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore </span>
						</div><!-- ekskurzija -->
					</div><!-- ekskurzii -->

					<div class="sledna-ekskurzija">
						<h1>следна екскурзија</h1>
						<a href="#"><img src="assets/images/slika-ekskurzija.png" alt=""></a>
						<h1 class="ekskurzija-data">Банско 24.04.2016</h1>
					</div><!-- sledna-ekskurizja -->

				</div><!-- right-section -->
			</div><!-- sections -->

			<div class="nastava-aktivnosti clear-fix">
			
				<div class="slobodni-aktivnosti claer-fix">
					<h1>Дополнителна настава</h1>
					<img src="assets/images/school_building.png" alt="">
					<span>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.
					</span>
					<a href="#">прочитај повеќе</a>
				</div><!-- slobodni-aktivnosti -->

				<div class="slobodni-aktivnosti ucenicki-aktivnosti claer-fix">
					<h1>слободни ученички активности</h1>
					<img src="assets/images/school_building.png" alt="">
					<span>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.
					</span>
					<a href="#">прочитај повеќе</a>
				</div><!-- slobodni-aktivnosti -->
			</div><!-- nastava-aktivnosti -->

<?php	include_once "../sys/includes/footer.php";?>