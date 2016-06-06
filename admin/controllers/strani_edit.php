<?php


if(!isset($_GET['id'])){
	header('Location: ../admin.php?page=strani');
	exit;
}else{
	$id=preg_replace('/[^0-9]/', '', $_GET['id']);
}

$sql="select * from strani WHERE id=:id";
$stmt = $db->prepare( $sql );
$stmt->bindParam( ":id" , $id , PDO::PARAM_INT );
$stmt->execute();
$results = $stmt->fetchAll( PDO::FETCH_ASSOC );
$strana = array_shift( $results );
$stmt->closeCursor();

$sql = "select * from kategorii";
$stmt = $db->prepare( $sql );
$stmt->execute();
$kategorii = $stmt->fetchAll( PDO::FETCH_ASSOC );
$stmt->closeCursor();

if( isset( $_POST[ 'save' ] ) ){
	$sql = "UPDATE strani SET 
	naslov = :naslov,
	sodrzina = :sodrzina,
	id_kategorija = :kategorija
	WHERE id = $id LIMIT 1";

	$stmt = $db->prepare( $sql );
	$stmt->bindParam( ":naslov" , $_POST[ 'naslov' ] , PDO::PARAM_STR );
	$stmt->bindParam( ":sodrzina" , $_POST[ 'sodrzina' ] , PDO::PARAM_STR );
	$stmt->bindParam( ":kategorija" , $_POST[ 'id_kategorija' ] , PDO::PARAM_INT );
	$stmt->execute();
	$stmt->closeCursor();
	header( "Location: admin.php?page=strani_edit&id=$id" );
	exit;
}


// 	<?php
// if (isset($_POST['submit'])) {
// include '../db.php';
// $sql = "UPDATE korisnici SET ime=:ime, email=:email, password=:password, id_tip_korisnici=:id_tip_korisnici WHERE id=:id";
// // Prepare statement
// $stmt = $db->prepare($sql);
// $stmt->bindValue(':id', $_POST['id']);
// $stmt->bindValue(':ime', $_POST['ime']);
// $stmt->bindValue(':email', $_POST['email']);
// $stmt->bindValue(':password', $_POST['password']);
// $stmt->bindValue(':id_tip_korisnici', $_POST['id_tip_korisnici']);
// // execute the query
// $stmt->execute();
// // echo a message to say the UPDATE succeeded
// echo $stmt->rowCount() . " records UPDATED successfully";
//     header( "refresh:3;url=../admin.php?page=korisnici" );
// }