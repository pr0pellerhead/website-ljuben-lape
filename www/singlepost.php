<?php

include_once '../sys/controllers/natprevari.php';
include_once '../sys/controllers/za_roditelite.php';
include_once '../sys/controllers/proekti.php';
include_once '../sys/controllers/functions.php';
include_once '../sys/controllers/singlepost.php';

$css_files = [ 'reset.css' , 'main.css' , 'singlepost.css' ];
$page_title = "Проекти и натпревари";
include_once "../sys/includes/header.php";
?>

    <div class="za-ucilisteto page-roditeli clear-fix">
        <div class="slide-left"></div><!-- slide-left -->

        <div class="slide-right">
            <h1><?php echo $row[ 'naslov' ]; ?></h1>
        </div><!-- slide-right -->

    </div><!-- za-ucilisteto -->

    <div class="sorabotka-page-roditeli sections clear-fix">
        <div class="left-section">
            <h1 class="title"><?php echo $row[ 'naslov' ]; ?></h1>
            <p class="date">&#128339; <?php echo $row[ 'objavena_na' ]; ?></p>

            <div class="content-post">
                <?php if (empty($row['slika_golema'])) {
                    $row['slika_golema'] = "school_building.png";
                    }?> 
                <img src="../admin/uploads/<?=$row['slika_golema'];?>" width="750px" alt="">

                  <p><?php echo $row['sodrzina'];?></p>
            </div>


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
<?php   include_once "../sys/includes/footer.php";?>