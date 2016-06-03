<h1>Nova Galerija</h1>
<form action="controllers/create_galerija.php" method="post" enctype="multipart/form-data">
	Ime na galerijata:<input type="text" name="galerija_ime" required>
	
	<input type="file" name="sliki[]" multiple>

	<input type="submit" name="save" value="Save">
</form>