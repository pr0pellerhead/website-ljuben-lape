
<h1>Galerii</h1>
<h3><a href="?page=create_galerija">Nova galerija</a></h3>
<table border="2" width="100%">
	<tr>
		<td>ID</td>
		<td>Ime na galerija</td>
		<td>Izmeni galerija</td>
		<td>Izbrishi galerija</td>
	</tr>
	<?php foreach ($res as $row) { ?>

		<tr>
			<td><?=$row['id']?></td>
			<td><?=$row['ime']?></td>
			<td><a href="?page=edit-galerija&id=<?=$row['id']?>">Edit</a></td>
			<td><a href="?page=delete_galerii&id=<?=$row['id']?>">Delete</a></td>
		</tr>
		<?php
		}
		?>
</table>