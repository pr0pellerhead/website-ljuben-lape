			<div class="pomosni-linkovi clear-fix">
				<a href="#"><img src="assets/images/korisni1.png" alt=""></a>
				<a href="#"><img src="assets/images/korisni2.png" alt=""></a>
				<a href="#"><img src="assets/images/korisni3.png" alt=""></a>
				<a href="#"><img src="assets/images/korisni4.png" alt=""></a>
				<a href="#"><img src="assets/images/korisni5.png" alt=""></a>
			</div><!-- pomosni-linkovi -->

		</div><!-- wraper -->

		<div class="footer">
			<div class="wraper clear-fix">
				<div class="left-footer clear-fix">
					<a href="#"><img src="assets/images/logo2.png" alt=""></a>
					<ul>
						<li><a href="../www/index.php">Почетна</a></li>
						<li><a href="../www/za-ucilisteto.php">За училиштето</a></li>
						<li><a href="../www/proekti_natprevari.php">Проекти и натпревари</a></li>
						<li><a href="../www/nastava.php">Настава</a></li>
						<li><a href="../www/za-roditelite.php">За родителите</a></li>
						<li><a href="#">Галерија</a></li>
						<li><a href="../www/kontakt.php">Контакт</a></li>
					</ul>
				</div><!-- left-footer -->
				<div class="right-footer clear-fix">
					<h1>02/3121 255</h1>
					<div class="director">
						<span>Директор:</span>
						<span>director@ljubenlape.edu.mk</span>
					</div><!-- director -->
					<div class="director">
						<span>E-mail:</span>
						<span>contact@ljubenlape.edu.mk</span>
					</div><!-- director -->
					<div class="adresa">
						<span>улица "Васко Караѓелевски" бр.2, Општина Аеродром, 1000 Скопје</span>
					</div><!-- adresna -->
				</div><!-- right-footer -->
			</div><!-- wraper -->
		</div><!-- footer -->
		<div class="footer-bottom">
			<span>Copyright &copy; 2016 ООУ ,,Љубен Лапе''-Oпштина Аеродром | </span> 
			<span>Сите права се заштитени |</span> 
			<span>Дизајн и Изработка:Академија за Веб Дизајн При Семос Едукација</span>
		</div><!-- footer-bottom -->
	</div><!-- #wrap -->
	<?php 
if(isset($js_files)):
	foreach( $js_files as $js ): ?>
		<script src="assets/scripts/<?=$js?>"></script>
	<?php endforeach; 
	endif;
	?>
</body>
</html>