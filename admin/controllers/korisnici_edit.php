<?php
if (isset($_POST['submit'])) {
include '../db.php';
$sql = "UPDATE korisnici SET ime=:ime, email=:email, password=:password, id_tip_korisnici=:id_tip_korisnici WHERE id=:id";


// Prepare statement
$stmt = $db->prepare($sql);

$stmt->bindValue(':id', $_POST['id']);
$stmt->bindValue(':ime', $_POST['ime']);
$stmt->bindValue(':email', $_POST['email']);
$stmt->bindValue(':password', $_POST['password']);
$stmt->bindValue(':id_tip_korisnici', $_POST['id_tip_korisnici']);

// execute the query
$stmt->execute();

// echo a message to say the UPDATE succeeded
echo $stmt->rowCount() . " records UPDATED successfully";
    header( "refresh:3;url=../admin.php?page=korisnici" );
}
