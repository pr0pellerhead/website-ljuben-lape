<?php
include '../user_check.php';
include '../db.php';


if(isset($_GET['id']) && strlen($_GET['id']) > 0){

    $sql='delete from galerii WHERE id = :id';
    $query = $db->prepare($sql);
    $query->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
    $query->execute();
    header('location:admin.php?page=galerii');
}
