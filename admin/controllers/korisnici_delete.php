<?php
/**
 * Created by PhpStorm.
 * User: Kristina Shalkoska
 * Date: 5/13/2016
 * Time: 12:40 PM
 */

include '../user_check.php';
include '../db.php';


if(isset($_GET['id']) && strlen($_GET['id']) > 0){

    $sql='delete from korisnici WHERE ID = :id';
    $query = $db->prepare($sql);
    $query->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
    $query->execute();
    header('location:admin.php?page=korisnici');
}